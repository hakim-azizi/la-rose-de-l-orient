<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='robe de soir&eacute;e';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type='robe de soir&eacute;e' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;une robe  de soir&eacute;e ? D&eacute;couvrez et trouvez la robe  de soir&eacute;e qui vous convient.';
$mot_cle_page='robe  de soir&eacute;e,liste de robe  de soir&eacute;e';
include'../php/haut.php'; ?>
<h2>La <a href="robe-du-soir.html">robe du soir</a> doit correspondre avec l&#039;ambiance de la soir&eacute;e, et ce la femme le sait bien :</h2>
<?php include 'produit.php'; ?>
<p>C&#039;est pourquoi, nous vous proposons des <a href="robe-de-soiree-et-feminite.html"><strong>robes de soir&eacute;e</strong></a>, qui vont de la <a href="robe-de-soiree-orientale.html"><em>robe de soir&eacute;e orientale</em></a> &agrave; la <em>robe de soir&eacute;e</em> plus conventionnelle.</p>
<h2>N&#039;h&eacute;sitez pas &agrave; consultez nos <a href="boutique-en-ligne/vetement-femme/robe-de-soiree/">robes du soir</a> sur notre boutique en ligne, la rose de l&#039;orient.</h2>
<?php include'../php/bas.php'; ?>