<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='robe de soir&eacute;e longue';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type='robe de soir&eacute;e' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;une robe  de soir&eacute;e longue ? D&eacute;couvrez et trouvez la robe  de soir&eacute;e longue qui vous convient.';
$mot_cle_page='robe de soir&eacute;e longue,liste de robe  de soir&eacute;e longue';
include'../php/haut.php'; ?>
<h2>Ci dessous quelques exemple de <a href="boutique-en-ligne/vetement-femme/robe-de-soiree/"><em>robe de soir&eacute;e longue</em></a> disponible sur la rose de l&#039;orient.</h2>
<?php include 'produit.php'; ?>
<?php include'../php/bas.php'; ?>