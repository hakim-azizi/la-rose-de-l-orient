<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='robe rouge';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND code_produit LIKE'%robe%' AND code_produit LIKE'%rouge%' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;robe rouge ? D&eacute;couvrez et trouvez la robe rouge qui vous convient.';
$mot_cle_page='robe rouge,liste de robe rouge';
include'../php/haut.php'; ?>
<h2>Achetez votre <b>robe rouge</b> sur notre boutique en ligne la rose de l&#039;orient.</h2>
<?php include 'produit.php'; ?>
<p>Nous avons certainement la <strong>robe rouge</strong> qu&#039;il vous faut sur notre boutique en ligne.</p>
<?php include'../php/bas.php'; ?>