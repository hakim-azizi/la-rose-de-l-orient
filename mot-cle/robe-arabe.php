<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='robe arabe';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type LIKE '%orientale%'  AND type!='canne de danse orientale' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;une robe arabe ? D&eacute;couvrez et trouvez la robe arabe qui vous convient.';
$mot_cle_page='robe arabe,liste de robe arabe';
include'../php/haut.php'; ?>
<h2>Retrouvez quelques mod&egrave;les de robe arabe.</h2>
<?php include 'produit.php'; ?>
<p>La rose de l&#039;orient vous propose ses exemples de <em>robe arabe</em>.</p>
<h2>Retrouvez quelques robes arabe pr&eacute;sente sur votre boutique en ligne.</h2>
<p>Ces mod&egrave;les de <a href="boutique-en-ligne/vetement-femme/robe-orientale/"><strong>robe arabe</strong></a> sont pris au hasard dans toute la boutique en ligne.</p>
<?php include'../php/bas.php'; ?>