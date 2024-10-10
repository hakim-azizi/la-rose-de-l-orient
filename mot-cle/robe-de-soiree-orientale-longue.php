<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='robe de soir&eacute;e orientale longue';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type='robe de soir&eacute;e orientale' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;une robe de soir&eacute;e orientale longue ? D&eacute;couvrez et trouvez la robe  de robe de soir&eacute;e orientale longue qui vous convient.';
$mot_cle_page='robe de soir&eacute;e orientale longue,liste de robe de soir&eacute;e orientale longue';
include'../php/haut.php'; ?>
<h2>Le design simple et &eacute;l&eacute;gant des robes orientale pr&eacute;sente feront de vous la <em>Sh&eacute;h&eacute;razade</em> de la <em>soir&eacute;e</em>.</h2>
<?php include 'produit.php'; ?>
<p>La <a href="robe-de-soiree-orientale.html"><strong>robe de soir&eacute;e orientale</strong></a> longue, sur notre boutique en ligne, mettent en valeur votre beaut&eacute;.</p>
<p>Sur notre boutique en ligne vous trouverez des <a href="boutique-en-ligne/vetement-femme/robe-de-soiree-orientale/">robes de soir&eacute;e orientale longue</a> qui mettront en valeur votre charme et votre beaut&eacute; naturelle.</p>
<?php include'../php/bas.php'; ?>