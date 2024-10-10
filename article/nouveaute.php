<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$order1="";
$titre_page='Nouveaut&eacute; sur la rose de l&#039;orient';
include'../php/haut.php'; ?>
<h2>Toutes les nouveaut&eacute;s de la boutique.</h2>
</p>Retrouvez toutes les nouveaut&eacute;s pr&eacute;sente dans la boutique en ligne la rose de l&#039;orient.</p>
<p>TVA non Applicable, article 293B du CGI.</p>
<?php
$mod1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 ORDER BY id DESC LIMIT 6");
while($accueil=mysqli_fetch_array($mod1)){extract($accueil);include'produit.php';}  ?>
<div style="clear:both;">&nbsp;</div>
<?php include'../php/bas.php'; ?>