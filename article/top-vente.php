<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$titre_page='Top vente : la rose de l&#039;orient.';
$verification_date=@date("W");
$fraicheur_top_vente=mysqli_fetch_array(mysqli_query($connectionbd,"SELECT date FROM date_topvente"));
if($verification_date!=$fraicheur_top_vente['date']){
$i=1;
$article1=mysqli_query($connectionbd,"SELECT id,grande_image,prix,description,code_produit,cathegorie,type FROM produit WHERE stock>0 ORDER BY RAND() LIMIT 10");
while($article=mysqli_fetch_array($article1))
{
mysqli_query($connectionbd,"UPDATE top_vente SET id='".$article['id']."',grande_image='".$article['grande_image']."',prix='".$article['prix']."',description='".$article['description']."',code_produit='".$article['code_produit']."',cathegorie='".$article['cathegorie']."',type='".$article['type']."' WHERE idvente=$i");
$i++;}
mysqli_query($connectionbd,"UPDATE date_topvente SET date=$verification_date");
}
include'../php/haut.php'; ?>
<h2>Calcul du top vente</h2>
<p>Le top vente est calcul&eacute; automatiquement tous les dimanches soir &agrave; minuit.</p>
<h3>Top vente des 10 meilleurs vente de la semaine.</h3>
<p>Ci-dessous vous trouverez les 10 meilleurs ventes de la semaine.</p>
<?php
$idimg=0;
$meilleurvente1=mysqli_query($connectionbd,"SELECT * FROM top_vente ORDER BY idvente ASC");
while($accueil=mysqli_fetch_array($meilleurvente1)){
extract($accueil);




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
classement: <?php echo $i; ?>
<a href="<?php echo $urlproduit; ?>"><img src="<?php echo $photo; ?>" class="produit" width="145px" height="194px" title="<?php echo $code_produit; ?>" alt="<?php echo $code_produit; ?>" /></a>
<h2><a href="<?php echo $urlproduit; ?>"><?php echo $code_produit; ?></a></h2>
Ref. <?php echo "$code$id"; ?>
<p class="gras"><?php echo $prix; ?> &euro;</p>
</div>







<?php } ?>
<div style="clear:both;">&nbsp; </div>

<?php include'../php/bas.php'; ?>