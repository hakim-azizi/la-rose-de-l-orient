<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='robe de cocktail';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type='robe de soir&eacute;e' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;une robe de cocktail ? D&eacute;couvrez et trouvez la robe de cocktail qui vous convient.';
$mot_cle_page='robe cocktail,liste de robe de cocktail';
include'../php/haut.php'; ?>
<h2>Vous ne chercherez pas longtemps sur notre boutique en ligne avant de trouvez la robe de cocktail qu&#039;il vous faut.</h2>
<?php include 'produit.php'; ?>
<?php include'../php/bas.php'; ?>