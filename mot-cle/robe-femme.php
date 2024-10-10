<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='robe femme';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type LIKE '%robe%' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;une robe femme ? D&eacute;couvrez et trouvez la robe femme qui vous convient.';
$mot_cle_page='robe femme,liste de robe femme';
include'../php/haut.php'; ?>
<h2>La beaut&eacute; de la femme, passe aussi par le choix de sa robe.</h2>
<?php include 'produit.php'; ?>
<p>Pour &ecirc;tre belle en <b>robe femme</b>, il faut que le mod&egrave;le soit en concordance avec votre silhouette.<br />
Pour les femmes sveltes, aucun probl&egrave;me, tout vous va.<br />
Pour les femmes ronde, choisissez des <em>robes femme</em> avec un d&eacute;collet&eacute; qui<br />
fera oublier les rondeurs sur les hanches. Evit&eacute; les mod&egrave;les de <strong>robe femme</strong> bouffant de style empire.<br />
Enfin, une <b>robe noire</b> mettra en valeur votre silhouette en lui donnant un aspect plus mince,<br />
en apportant un charme suppl&eacute;mentaire aux femmes.</p>
<?php include'../php/bas.php'; ?> 