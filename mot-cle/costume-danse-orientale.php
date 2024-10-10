<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='costume de danse orientale';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type LIKE '%costume de danse orientale%' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;un costume de danse Orientale ? D&eacute;couvrez et trouvez le costume de danse orientale qui vous convient.';
$mot_cle_page='ceinture,ceinture danse orientale,danse orientale';
include'../php/haut.php'; ?>
<h2>Notre gamme de <a href="boutique-en-ligne/danse-orientale/costume-de-danse-orientale-economique/">costume de danse Orientale</a>, s&#039;adresse aux professionnelles comme aux d&eacute;butantes.</h2>
<?php include 'produit.php'; ?>
<p>Nous vous accompagnons donc tout au long de votre carri&egrave;re au travers de votre <b>costume de danse orientale</b>.</p>
<h2>Achetez votre costume de danse orientale sur la rose de l&#039;orient et b&eacute;n&eacute;ficiez du charme de Sh&eacute;h&eacute;razade.</h2>
<p>Vous trouverez facilement le mod&egrave;le de <strong>costume de danse orientale</strong> qui vous convient &hellip;</p>
<?php include'../php/bas.php'; ?>