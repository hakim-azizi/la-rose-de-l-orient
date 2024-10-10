<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='robe  traditionnelle';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type='robe orientale' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;robe traditionnelle ? D&eacute;couvrez et trouvez la robe traditionnelle qui vous convient.';
$mot_cle_page='robe traditionnelle,liste de robe traditionnelle';
include'../php/haut.php'; ?>
<h2>Aujourd&#039;hui plus que jamais un retour aux <strong>traditions</strong> est n&eacute;cessaire sans oulier le progr&egrave;s :</h2>
<?php include 'produit.php'; ?>
<p>La <em>robe traditionnelle</em>, que vous trouverez sur la rose de l&#039;orient est un savant m&eacute;lange qui a su associer avec perfection,<br />
la <b>tradition</b> et la modernit&eacute;.<br />Les <b>robes traditionnelle</b> se positionnent au juste milieu entre <b>tradition</b> et modernit&eacute;.</p>
<h2>Achetez votre <b>robe traditionnelle</b> en ligne sur la rose de l&#039;orient, ou la qualit&eacute; r&eacute;pond toujours pr&eacute;sent, et ou le prix est toujours le plus bas possible.</h2>
<?php include'../php/bas.php'; ?>