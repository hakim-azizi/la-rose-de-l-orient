<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='ceinture de danse orientale';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE type='$varunique' AND stock>0 ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;une ceinture de danse orientale ? D&eacute;couvrez et trouvez la ceinture de danse orientale qui vous convient.';
$mot_cle_page='ceinture,ceinture danse orientale,danse orientale';
include'../php/haut.php'; ?>
<h2>Si vous ne savez pas ce qu&#039;il manque &agrave; votre tenue pensez &agrave; la <em>ceinture de danse orientale</em>.</h2>
<?php include 'produit.php'; ?>
<p>La <strong>ceinture de danse orientale</strong> ou le <a href="foulard-a-sequins-danse-orientale.html"><strong>foulard &agrave; sequins</strong></a>,<br />
compl&eacute;tera id&eacute;alement votre tenu.</p>
<h2>La rose de l&#039;orient pr&eacute;sente une gamme de <em>ceinture de danse orientale</em> au design &agrave; la fois, traditionnelle et originale.</h2>
<p>D&eacute;couvrez et achetez votre <strong>ceinture de danse orientale</strong> dans notre boutique en ligne, la rose de l&#039;orient.</p>
<?php include'../php/bas.php'; ?>