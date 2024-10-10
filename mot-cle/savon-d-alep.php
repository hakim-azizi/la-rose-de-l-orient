<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='savon d&#039;Alep';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND code_produit='savon d&#039;alep' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;savon d&#039;Alep ? D&eacute;couvrez et trouvez la savon d&#039;Alep qui vous convient.';
$mot_cle_page='savon d&#039;Alep,liste de savon d&#039;Alep';
include'../php/haut.php'; ?>
<h2>Nous vous proposons un <b>savon d&#039;Alep</b> fabriqu&eacute; de fa&ccedil;on artisanale et traditionnel en respectant l&#039;environnement :</h2>
<?php include 'produit.php'; ?>
<p>Notre <strong>savon d&#039;Alep</strong>, ne contient aucun additif chimique.<br />
<h2>Voici un secret de beaut&eacute; des femmes orientale :</h2>
<p>Le <strong>savon d&#039;Alep</strong> outre ses vertus contre certaines infections de la peau.<br />
Le <b>savon d&#039;Alep</a></b> nourrie la peau, et la rend souple et douce.<br />
<h2>Venez retrouvez les bienfaits de l&#039;orient avec notre savon d&#039;Alep :</h2>
<?php include'../php/bas.php'; ?>