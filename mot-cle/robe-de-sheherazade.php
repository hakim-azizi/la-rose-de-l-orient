<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='robe de Sh&eacute;h&eacute;razade';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type='robe de soir&eacute;e orientale' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;une robe de Sh&eacute;h&eacute;razade ? D&eacute;couvrez et trouvez la robe de Sh&eacute;h&eacute;razade qui vous convient.';
$mot_cle_page='robe Sh&eacute;h&eacute;razade,liste de robe de Sh&eacute;h&eacute;razade';
include'../php/haut.php'; ?>
<h2>La rose de l&#039;orient vous propose ses splendides robes de Sh&eacute;h&eacute;razade</a> :</h2>
<?php include 'produit.php'; ?>
<p>Pour les <strong>Sh&eacute;h&eacute;razade</strong> d&#039;une, de mille et une nuits ou pour la vie vous trouverez la <strong><a href="boutique-en-ligne/vetement-femme/robe-de-soiree-orientale/">robe de soir&eacute;e orientale</a></strong> id&eacute;ale.</p>
<?php include'../php/bas.php'; ?>