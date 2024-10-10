<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='v&ecirc;tement oriental';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type LIKE '%oriental%'  ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;un v&ecirc;tement oriental ? D&eacute;couvrez et trouvez le v&ecirc;tement oriental qui vous convient.';
$mot_cle_page='v&ecirc;tement de femme,liste de v&ecirc;tement femme';
include'../php/haut.php'; ?>
<h2>La Rose de l&#039;Orient vous pr&eacute;sente sa collection de V&ecirc;tement femme</h2>
<?php include 'produit.php'; ?>
<?php include'../php/bas.php'; ?>