<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='robe des mille et une nuits';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type='robe de soir&eacute;e orientale' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;une robe des mille et une nuits ? D&eacute;couvrez et trouvez la robe des mille et une nuits qui vous convient.';
$mot_cle_page='robe Sh&eacute;h&eacute;razade,liste de robe des mille et une nuits';
include'../php/haut.php'; ?>
<h2>La <a href="robe-de-soiree-orientale.html"><em>robe de soir&eacute;e orientale</em></a>, est &agrave; la <em>soir&eacute;e orientale</em> ce que Sh&eacute;h&eacute;razade est au conte des mille et une nuits.</h2>
<?php include 'produit.php'; ?>
<h2>La <a href="robe-de-soiree-orientale.html"><em>robe de soir&eacute;e orientale</em></a>, est &agrave; la <em>soir&eacute;e orientale</em> ce que Sh&eacute;h&eacute;razade est au conte des mille et une nuits.</h2>
<p>La rose de l&#039;orient vous offre la possibilit&eacute; de vivre le conte des mille et une nuits au travers de ses <em><a href="boutique-en-ligne/vetement-femme/robe-de-soiree-orientale/">robes de soir&eacute;e orientale</a></em>.</p>
<?php include'../php/bas.php'; ?>