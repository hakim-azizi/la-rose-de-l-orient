<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='robe longue';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type LIKE '%robe%' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;robe femme ? D&eacute;couvrez et trouvez la robe du robe longue qui vous convient.';
$mot_cle_page='robe longue,liste de robe longue';
include'../php/haut.php'; ?>
<h2>Pour toutes les sorties, la <a href="./">robe longue</a> est et restera &agrave; la fois un grand classique ind&eacute;modable.</h2>
<?php include 'produit.php'; ?>
<p>La femme &eacute;l&eacute;gante et raffin&eacute;e est souvent en <strong>robe longue</strong>.<br/>
Celle-ci est &agrave; la fois f&eacute;minine et confortable, mais ce n&#039;est pas tout.<br/>
La <em>robe longue</em> est aussi un symbole de gr&acirc;ce et de beaut&eacute;.</p>
<?php include'../php/bas.php'; ?>