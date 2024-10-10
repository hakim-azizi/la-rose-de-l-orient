<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='v&ecirc;tement de danse orientale';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND cathegorie='danse orientale' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;un v&ecirc;tement de danse orientale ? D&eacute;couvrez et trouvez le v&ecirc;tement de danse orientale qui vous convient.';
$mot_cle_page='v&ecirc;tement de danse orientale,liste de v&ecirc;tement de danse orientale';
include'../php/haut.php'; ?>
<h2>Vous allez trouvez ci-dessous quelques exemples de tenue de soir&eacute;e qui sont pr&eacute;sent sur notre boutique en ligne la rose de l&#039;orient.</h2>
<?php include 'produit.php'; ?>
<h2>Notre boutique en ligne &agrave; une large gamme de v&ecirc;tement de danse orientale :</h2>
<p>Vous trouverez sur notre site des <em><a href="boutique-en-ligne/danse-orientale/"><b>v&ecirc;tements de danse orientale</b></a></em> allant,<br />
du <a href="costume-danse-orientale.html"><em>costume de danse orientale</em></a>, &agrave; <em>la robe de danse orientale</em>.<br />
En passant par le <a href="foulard-a-sequins-danse-orientale.html"><em>foulard &agrave; sequins</em></a>  de <a href="boutique-en-ligne/danse-orientale/"><em>danse orientale</em></a>,<br />
sans oublier des <a href="boutique-en-ligne/bijou/"><em>bijoux</em></a>, et bien s&ucirc;r des <em>accessoires de danse orientale</em>.</p>
<?php include'../php/bas.php'; ?>