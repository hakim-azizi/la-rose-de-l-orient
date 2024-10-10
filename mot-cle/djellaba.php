<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='djellaba';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type LIKE '%djellaba%' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;une djellaba ? D&eacute;couvrez et trouvez la djellaba qui vous convient';
$mot_cle_page='djellaba,liste de djellaba';
include'../php/haut.php'; ?>
<h2>Nous allons voir les diff&eacute;rend style de <a href="./"><strong>djellaba</strong></a> qui existe.</h2>
<?php include 'produit.php'; ?>
<p>La rose de l&#039;orient vous propose tous les styles de <strong>djellaba</strong> dans diff&eacute;rente version (mod&egrave;le).</p>
<h2>Dans notre boutique en ligne les mod&egrave;les de <b>djellaba</b> proviennent pour la plupart de Syrie.</h2>
<p>La syrie est r&eacute;put&eacute; pour la qualit&eacute; de ses tissus et de son travail des &eacute;toffes.<br />
Nous ne proposons que des <em>djellabas</em> de qualit&eacute; &agrave; prix tr&egrave;s bas.</p>
<h2>Vous trouverez des mod&egrave;les de <strong><a href="boutique-en-ligne/vetement-femme/djellaba-femme/">djellaba</a> ci-dessus, d&#039;autres mod&egrave;les sont disponible voir la page:</h2>
<?php include'../php/bas.php'; ?>