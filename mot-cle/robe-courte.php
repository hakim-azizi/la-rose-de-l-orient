<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='robe courte';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type='robe courte' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;une robe courte ? D&eacute;couvrez et trouvez la robe courte qui vous convient.';
$mot_cle_page='robe courte,liste de robe courte';
include'../php/haut.php'; ?>
<h2>La <a href="./">robe courte</a> est synonyme de f&eacute;minit&eacute;, de subtilit&eacute; et de sensualit&eacute;.</h2>
<?php include 'produit.php'; ?>
<p>La <a href="robe.html"><strong>robe courte</strong></a>, que ce soit une <em>robe de soir&eacute;e</em>, une <em>robe de cocktail</em>,<br />
ou plus simplement une <a href="robe-femme.html"><em>robe courte</em></a> de tous les jours, sera votre atout charme.<br />
Celle-ci mettra en valeur vos jambes, votre sensualit&eacute; et ce subtilement.<br />
La <b>robe courte</b> est &eacute;galement un atout dans la s&eacute;duction, que se soit votre partenaire actuel ou future&hellip;<br>
</p>
<h2>O&ugrave; trouver une robe courte &agrave; bas prix et de qualit&eacute;.</h2>
La <b>robe courte</b> que vous trouverez sur la rose de l&#039;orient est d&#039;une excellente qualit&eacute; &agrave; prix cass&eacute;.<br />
La <em>robe courte</em> sur la rose de l&#039;orient a le meilleur rapport qualit&eacute; / prix sur le web ou extra web.<br />
Vous trouverez &eacute;galement une s&eacute;lection de <a href="robe-noire.html">robe courte noire</a> et de <a href="robe-longue.html">robe longue.</a>
<p>Quelques exemples des mod&egrave;les de <strong>robe courte</strong> pr&eacute;sente sur la Rose de l&#039;Orient.</p>
<?php include'../php/bas.php'; ?>