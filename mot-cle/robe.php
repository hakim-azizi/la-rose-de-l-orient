<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='robe';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type LIKE '%robe%' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;une Robe ? D&eacute;couvrez et trouvez la robe qui vous convient.';
$mot_cle_page='robe,liste de robe';
include'../php/haut.php'; ?>
<h2>La <a href="./">Robe</a> est un symbole de f&eacute;minit&eacute; :</h2>
<?php include 'produit.php'; ?>
<p>Aujourd&#039;hui plus que jamais, dans ce monde ou les hommes, et les <strong>femmes</strong> sont &eacute;gaux en droits,<br />
la <strong>robe</strong> reste f&eacute;minine et sensuel elle est &eacute;galement pleine de gr&acirc;ce, et de douceur.<br />
malgr&eacute; cela la <a href="robe-femme.html"><b>robe femme</b></a> a perdu petit &agrave; petit ses lettres de noblesse.<p>
<h2>Le grand retour de la robe.</h2>
<p>Elle est cependant en train de faire sont grand retour, et oui, que se soit une <a href="robe-courte.html"><em>robe courte</em></a> ou une <a href="robe-longue.html"><em>robe longue</em></a>,<br />
la <strong>Robe</strong> revient au go&ucirc;t du jour, se parant de nouvelle couleur et de nouveau motifs.<br />
Cependant la <a href="robe-noire.html"><em>robe noire</em></a> reste un grand classique et ne sera jamais d&eacute;tr&ocirc;nn&eacute;.</p>
<?php include'../php/bas.php'; ?>