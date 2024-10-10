<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='danse orientale';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type LIKE '%oriental%' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;un article de danse orientale ? D&eacute;couvrez et trouvez l&#039;article de danse orientale qui vous convient.';
$mot_cle_page='danse,danse orientale,article de danse orientale';
include'../php/haut.php'; ?>
<h2>La <em>danse orientale</em> est un sport qui demande une grande ma&icirc;trise de son corps</h2>
<?php include 'produit.php'; ?>
<p>cette ma&icirc;trise s&#039;acquiert avec les cours de <em>danse orientale</em>.<br />
Sur la rose de l&#039;orient vous trouverez <em>costume de danse orientale</em>, <em>robe de danse orientale</em> et les <em>accessoires</em> n&eacute;cessaire &agrave; la pratique de se <em>sport</em>.</p>
<h2>La rose de l&#039;orient vous propose des articles de danse orientale pas cher et de grande qualit&eacute; &hellip;</h2>
<p>La qualit&eacute; des v&ecirc;tements, et autres accessoires de <em>danse orientale</em>, prend une part importante dans nos choix.<br />
Nous vendrons toujours les articles de <b>danse orientale</b> au prix le plus pas possible, et vous offrir ainsi la meilleur des qualit&eacute;s &agrave; bas prix.</p>
<h2>N&#039;h&eacute;sitez &agrave; consulter notre gamme de danse orientale.</h2>
<?php include'../php/bas.php'; ?>