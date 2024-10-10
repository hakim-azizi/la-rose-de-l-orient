<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='tenue de soir&eacute;e';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type LIKE '%soir&eacute;e%' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;une tenue de soir&eacute;e ? D&eacute;couvrez et trouvez la robe  de soir&eacute;e qui vous convient.';
$mot_cle_page='tenue de soir&eacute;e,liste de tenue de soir&eacute;e';
include'../php/haut.php'; ?>
<h2>Vous allez trouvez ci-dessous quelques exemples de tenue de soir&eacute;e qui sont pr&eacute;sent sur notre boutique en ligne la rose de l&#039;orient.</h2>
<?php include 'produit.php'; ?>
<?php include'../php/bas.php'; ?>