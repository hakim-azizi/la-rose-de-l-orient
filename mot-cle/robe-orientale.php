<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='robe orientale';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type LIKE '%orientale%'  AND type!='canne de danse orientale' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;robe orientale ? D&eacute;couvrez et trouvez la robe orientale qui vous convient.';
$mot_cle_page='robe orientale,liste de robe orientale';
include'../php/haut.php'; ?>
<h2>Le charme de l&#039;orient est &agrave; la <a href="./">robe orientale</a> <a href="robe-traditionnelle.html">traditionnelle</a> de soir&eacute;e, ce que Sh&eacute;h&eacute;razade est aux mille et une nuits.</h2>
<?php include 'produit.php'; ?>
La <strong><a href="robe-de-soiree-orientale.html">robe orientale de soir&eacute;e</a></strong> est un atout pour votre beaut&eacute; et votre charme naturelle.<br />
<p>La <em>robe orientale</em> vous fera devenir Sh&eacute;h&eacute;razade pour une ou mille et une nuit ou encore pour la vie...<br />
La <strong>robe orientale orientale</strong> ajoute une touche de sensualit&eacute;.</p>
<h2>La <strong>robe orientale</strong> vous rendra sans conteste plus belle que jamais et, fera ressortir votre beaut&eacute; naturelle.</h2>
<p>Quelle que soit votre style, la <em>robe orientale</em> a su s&#039;adapter a tous les styles vestimentaires,<br />
en gardant ce cot&eacute; traditionnel qui fait le charme de l&#039;orient.<br />
<?php include'../php/bas.php'; ?>