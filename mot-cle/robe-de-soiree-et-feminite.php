<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='Robe de soir&eacute;e et f&eacute;minit&eacute;';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type='robe de soir&eacute;e' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;une robe de soir&eacute;e f&eacute;minine ? D&eacute;couvrez et trouvez la robe de soir&eacute;e f&eacute;minine qui vous convient.';
$mot_cle_page='robe soiree feminine';
include'../php/haut.php'; ?>
<h2>La <a href="robe-du-soir.html">robe du soir</a> doit correspondre avec l&#039;ambiance de la soir&eacute;e, et ce la femme le sait bien :</h2>
<?php include 'produit.php'; ?>
<p>La <strong>robe de soir&eacute;e</strong> doit savoir mettre en valeur le charme, la beaut&eacute;, et la sensualit&eacute; de la <b>femme</b> qui la porte.</p>
<h2>La robe de soir&eacute;e est le reflet de votre sensualit&eacute; et de votre charme.:</h2>
<p>Notre boutique en ligne, vous propose des mod&egrave;les de <b>robe de soir&eacute;e</b> qui mettent en valeurs votre charme, votre beaut&eacute; et votre f&eacute;minit&eacute;.<br />
La <strong>robe de soir&eacute;e</strong> que vous choisissez sur la rose de l&#039;orient a &eacute;t&eacute; s&eacute;lectionn&eacute;e avec soins pour sa qualit&eacute;.<br />
La <em>robe de soir&eacute;e</em> pas cher et de grande qualit&eacute; est sur la rose de l&#039;orient.</p>
<?php include'../php/bas.php'; ?>