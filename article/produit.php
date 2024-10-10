<?php
if(strpos($_SERVER["REQUEST_URI"],'produit.php')!==false OR strpos($_SERVER["REQUEST_URI"],'?')!==false){include'../php/404.php';exit();}
$regex="#&([a-z])[^;]+;#";
$replace=array('&#039;',' ');
$by=array('-','-');
$description=str_replace(array('&quot;','&lt;','&gt;','&amp;'),array("'",'<','>','&'),$description);
preg_match("@<div class='couleurpromo'>.*</div>@",$description,$description1);
$description=@$description1[0];
$code_prod=$code_produit;
$urlcat=preg_replace($regex,"\\1",str_replace($replace,$by,strtolower($cathegorie)));
$urltype=preg_replace($regex,"\\1",str_replace($replace,$by,strtolower($type)));
$urlcode_produit=preg_replace($regex,"\\1",str_replace($replace,$by,strtolower($code_produit)));
if(preg_match("#arabe#",$_SERVER["REQUEST_URI"])){$replaceprod=array('Orientale','orientale');$byprod=array('Arabe','arabe');$modif=1;}
if($_SERVER["REQUEST_URI"]=='/tenue-de-soiree.html'){$replaceprod=array('Robe','robe');$byprod=array('Tenue','tenue');$modif=1;}
if(@$modif==1){$cathegorie=str_replace($replaceprod,$byprod,$cathegorie);$type=str_replace($replaceprod,$byprod,$type);$code_prod=str_replace($replaceprod,$byprod,$code_produit);$grande_image=str_replace($replaceprod,$byprod,$grande_image);}
$code_prod=ucfirst($code_prod);
$urlproduit='';
if (!isset($_GET['cat'])){$urlproduit.=$urlcat.'/';}
if (!isset($_GET['type'])){$urlproduit.=$urltype.'/';}
$photo=str_replace('-min.jpg','-petit.jpg',"$url$petite_image");
$code_produit=ucfirst($code_produit);
$urlproduit.=$urlcode_produit.'.html';
$code=substr($code_produit,0,4);
@$i=$i+1; ?>
<div class="article">
<a href="<?php echo $urlproduit; ?>"><img src="<?php echo $photo; ?>" class="produit" width="145px" height="194px" title="<?php echo $code_produit; ?>" alt="<?php echo $code_produit; ?>" /></a>
<h2><a href="<?php echo $urlproduit; ?>"><?php echo $code_produit; ?></a></h2>
Ref. <?php echo "$code$id"; ?>
<p class="gras"><?php echo $prix; ?> &euro;</p>
</div>