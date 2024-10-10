<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='robe noire';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND code_produit LIKE'%robe%' AND code_produit LIKE'%noir%' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;robe noire ? D&eacute;couvrez et trouvez la robe noire qui vous convient.';
$mot_cle_page='robe noire,liste de robe noire';
include'../php/haut.php'; ?>
<h2>Retrouvez toute l&#039;&eacute;l&eacute;gance de la <em>robe noire</em> dans notre boutique en ligne.</h2>
<?php include 'produit.php'; ?>
<p>Qu&#039;elle soit de soir&eacute;e, orientale, ou plus conventionnelle, la <b>robe noire</b> a et aura toujours une place importante dans votre garde <a href="robe.html"><strong>robe</strong></a>.</p>
<?php include'../php/bas.php'; ?>