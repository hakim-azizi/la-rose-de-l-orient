<div id="acceuil1" class="acceuil">
<?php
$nbarticle=0;
$article2=array();
while($article=mysqli_fetch_array($article1)){
extract($article);
$regex="#&([a-z])[^;]+;#";
$replace=array('&#039;',' ');
$by=array('-','-');
$description=str_replace(array('&quot;','&lt;','&gt;','&amp;'),array("'",'<','>','&'),$description);
preg_match("@<div class='couleurpromo'>.*</div>@",$description,$description1);
$code_prod=$code_produit;
$urlcat=preg_replace($regex,"\\1",str_replace($replace,$by,strtolower($cathegorie)));
$urltype=preg_replace($regex,"\\1",str_replace($replace,$by,strtolower($type)));
$urlcode_produit=preg_replace($regex,"\\1",str_replace($replace,$by,strtolower($code_produit)));
$code_prod=ucfirst($code_prod);
$urlproduit='boutique-en-ligne/'.$urlcat.'/'.$urltype.'/'.$urlcode_produit.'.html';
$code_produit=ucfirst($code_produit);
$code=substr($code_produit,0,4);
?><div class="photo_redimention"><ul id="image" class="image"><li id="image<?php echo $nbarticle; ?>" class="image_<?php echo $nbarticle; ?> image1">
<a href="<?php echo $urlproduit; ?>"><img src="<?php echo "".$url."".$grande_image.""; ?>" alt="<?php echo $code_produit; ?>" title="<?php echo $code_produit; ?>" width="100%" height="auto"/></a>
</li><?php
$ref=substr($code_produit,0,4);
$ref.=$id;
?><li id="texte<?php echo $nbarticle; ?>" class="texte_<?php echo $nbarticle; ?> texte1">
<h2><a href="<?php echo $urlproduit; ?>"><?php echo $code_produit; ?></a></h2>
Ref. <?php echo $ref; ?><br/>
Prix : <span class="prix"><?php echo $prix; ?></span> &euro;
</li></ul></div><?php
$nbarticle++; } ?>
</div>
<div style="clear:both;"></div>
