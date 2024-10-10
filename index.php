<?php
include'php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'php/404.php';exit();}
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock>0 ORDER BY RAND() LIMIT 4");
$titre_page="Robe de soir&eacute;e, robe orientale, costume de danse orientale, bijou oriental : La rose de l&#039;orient.";
$description_page="Vous avez besoin d&#039;une robe de soir&eacute;e, robe orientale, costume danse orientale et/ou d&#039;article de danse orientale ? D&eacute;couvrez et trouvez la robe de soir&eacute;e, robe orientale, costume danse orientale et/ou d&#039;article de danse orientale qui vous convient.";
$mot_cle_page="robe de soiree,vetement femme,costume danse orientale,robe orientale,robe longue";
include'php/haut.php'; ?>
<section>
<header>
<h2>Vous avez besoin d&#039;un <a href="vetement-femme.html"><em>v&ecirc;tement femme</em></a>, robe de soir&eacute;e, robe orientale, costume de danse orientale, bijou oriental ?</h2>
</header>
<div id="acceuil1" class="acceuil">
<ul id="image" class="image"><?php
$nbarticle=0;
$nb_photo=0;
$idredim="";
$article2=array();
while($article=mysqli_fetch_array($article1)){
extract($article);
$urlproduit=preg_replace("#&([a-z])[^;]+;#","\\1",str_replace(array(' ','_','&#039;'),'-',"boutique-en-ligne/$cathegorie/$type/$code_produit.html")); ?>
<li id="image<?php echo $nbarticle; ?>" class="texteredim image_<?php echo $nbarticle; ?> image1 image"<?php if($nbarticle!=0){ echo' style="display:none;"'; } ?>><a href="<?php echo $urlproduit; ?>"><script>
<!--
var url_image='<?php echo "".$url."".$grande_image.""; ?>';if(screen.width<321){url_image=url_image.replace('.jpg','-min.jpg');}else if(screen.width<641){url_image=url_image.replace('.jpg','-petit.jpg');}document.write('<img id="redimention<?php echo $nbarticle; ?>" class="photo_redim" src="'+url_image+'" alt="<?php echo $code_produit; ?>" title="<?php echo $code_produit; ?>" width="auto" height="100%"/>')
//-->
</script></a>
</li><?php
$ref=substr($code_produit,0,4);
$ref.=$id;
?><li id="texte<?php echo $nbarticle; ?>" class="texte_<?php echo $nbarticle; ?> texte" <?php if($nbarticle!=0){ echo'style="display:none;"'; } ?>>
<h2><a href="<?php echo $urlproduit; ?>"><?php echo $code_produit; ?></a></h2>
Ref. <?php echo $ref; ?><br>
Prix : <span class="prix">
<?php echo $prix; ?></span> &euro;</li>
<?php $nbarticle++;$nb_photo++;$nbarticle1=$nbarticle-1;$idredim.="'texte".$nbarticle1."' "; } ?>
</ul>
</div>
<p>Consultez notre s&eacute;lection de <a href="vetement-oriental.html">v&ecirc;tement oriental</a> femme :<br>
Qui va des <a href="robe-de-soiree.html"><strong>robes de soir&eacute;e</strong></a>, aux <strong><a href="robe-orientale.html">robes orientale</a></strong>, en passant par les <a href="costume-danse-orientale.html"><strong>costumes de danse orientale</strong></a> et ses accessoires.<br>
Vous y trouverez &eacute;galement des <a href="bijou-oriental.html"><strong>bijoux orientaux</strong></a>.</p>
<h2>Notre gamme de v&ecirc;tement femme.</h2>
<p>Soyez &eacute;l&eacute;gante avec notre gamme de <strong>v&ecirc;tements femme</strong>.</p>
<h2>&Ecirc;tre la plus belle de la soir&eacute;e en robe de soir&eacute;e ou du cocktail en robe de cocktail.</h2>
<p>Devenez Sh&eacute;h&eacute;razade pour une, mille et une nuits ou pour la vie, avec   votre <strong>robe de soir&eacute;e orientale</strong>.</p>
<h2>Restez zen en robe orientale ou en jellaba.</h2>
<p>D&eacute;couvrez nos robes orienatle et nos djellabas pour femme.</p>
<h2>Notre s&eacute;lection de costume de danse orientale</h2>
<p>Consultez nos robes et costumes de danse orientale.</p>
<h2>Trouvez les bijoux orientaux qui vous conviennent et brillez de mille feux.</h2>
<p>Consultez &eacute;galement notre gamme de bijou et devennez Sh&eacute;erazade, (princesse de l&#039;orient) pour une, ou mille et une nuits.</p>
<?php include'php/bas.php'; ?>