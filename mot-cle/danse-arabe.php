<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='danse arabe';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type LIKE '%oriental%' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Envie, besoin d&#039;un article de danse arabe ? D&eacute;couvrez et trouvez l&#039;article de danse arabe qui vous convient.';
$mot_cle_page='danse,danse arabe,article de danse arabe';
include'../php/haut.php'; ?>
<h2>La <a href="./"><em>danse arabe</em></a> est une des nombreuses ramifications de la <a href="danse-orientale.html">danse orientale</a>.</h2>
<?php include 'produit.php'; ?>
<p>Ce que l&#039;on appelle commun&eacute;ment la <strong>danse du ventre</strong>, son vrai nom est la <b>danse arabe</b>.</p>
<p>Car la <em>danse orientale</em> comporte de nombreuses ramification dont la <strong>danse arabe</strong>.</p>
<h2>La <b>danse arabe</b> &agrave; plus que besoin de soutient, elle est de victime de sa r&eacute;putation.</h2>
<p>La rose de l&#039;orient soutient la <em>danse arabe</em> qui fait partit des <strong>danses orientale</strong>.</p>
<p>Nous vous proposont des articles de <a href="boutique-en-ligne/danse-orientale/"><em>danse arabe</em></a> pour soutenir cet art.</p>
<?php include'../php/bas.php'; ?>