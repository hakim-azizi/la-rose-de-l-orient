<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='robe du soir';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type='robe de soir&eacute;e' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;une robe du soir ? D&eacute;couvrez et trouvez la robe du robe de soir qui vous convient.';
$mot_cle_page='robe du soir,liste de robe du soir';
include'../php/haut.php'; ?>
<h2>Notre boutique en ligne la rose de l&#039;orient, vous propose une collection de <a href="robe-de-soiree.html"><strong>robe du soir</strong></a> originale, qui fera de vous la perle de la soir&eacute;e.</h2>
<?php include 'produit.php'; ?>
<?php include'../php/bas.php'; ?>