<?php
include'../php/mots-inerdits.php';
if(preg_match("#php#",$_SERVER["REQUEST_URI"])){include'../php/404.php';exit();}
$replace=array('sante','beaute','vet','ee','-ete','eco','-d-','-a-','chaine','dore','perle','argente','-');
$by=array('sant&eacute;','beaut&eacute;','v&ecirc;t','&eacute;e',' &eacute;t&eacute;','&eacute;co',' d&#039;',' &agrave; ','cha&icirc;ne','dor&eacute;','perl&eacute;','argent&eacute;',' ');
if(preg_match("#[a-z\-]{1,100}#",$_GET['cat']))
{
$cat=str_replace(array('soutien gorge','semi pro'),array('soutien-gorge','semi-pro'),str_replace($replace,$by,$_GET['cat']));
$urlcat=$_GET['cat'];
}else{include'../php/404.php';exit();}
if(preg_match("#^([a-z\-]{1,100})$#",@$_GET['type'])){
$type=str_replace(array('soutien gorge','semi pro'),array('soutien-gorge','semi-pro'),str_replace($replace,$by,$_GET['type']));
$urltype=$_GET['type'];
}else{include'../php/404.php';exit();}
if(preg_match("#^([a-z\-]{1,100})$#",@$_GET['prod'])){
$code_produit=str_replace(array('soutien gorge','semi pro','argente'),array('soutien-gorge','semi-pro','argent&eacute;'),str_replace($replace,$by,$_GET['prod']));
if($cat=='bijou'){$code_produit=str_replace('perl&eacute;','perle',$code_produit);}
$urlcode_produit=$_GET['prod'];
}else{include'../php/404.php';exit();}
$varunique=$code_produit;
$ref=substr(str_replace('_','',$urlcode_produit),0,4);
$replace=array('&#039;',' ');$by='-';
$regexurl="#&([a-z])[^;]+;#";
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE code_produit='$code_produit' AND stock>0") or die(include'../php/404.php');
$article=mysqli_fetch_array($article1);
if(intval($article['id'])==0){include'../php/404.php';exit();}
extract($article);
$ref.=$id;
$i=1;
$tableau_photo=array(); // on créer le tableau qui contiendra les photos
//$url_repertoire_photo1=str_replace(array("boucle-oreille","boucles-oreille","boucle-oreilles"),"boucles-oreilles",$grande_image);
//$url_repertoire_photo2=str_replace(array("ss-","ss/"),array("s-","s/"),$url_repertoire_photo1);
$url_repertoire_photo=preg_replace("@([a-z0-9\-]{1,50})([\.]{1})([jpg]{3})@","",$grande_image);
//echo"$url_repertoire_photo"; exit();
$repertoire=opendir("../$url_repertoire_photo"); // on ouvre le repertoire qui contient les photos
while($photo=readdir($repertoire)){ // on fait une boucle sur le repertoire
$urlphoto=str_replace(array($url_repertoire_photo,'.jpg'),'',$grande_image);
//echo"$url_repertoire_photo$urlphoto"; exit();

if(strstr($photo,$urlphoto)){ // on verifie les mots clés
$tableau_photo[]=str_replace(array('-petit','-min','-mini'),'',$photo);} // on insère les photos dans le tableau
 }closedir(); // on ferme le repertoire qui contient les photos
  $aPoints = array('profile' => 1, 'dos' => 2);
  $bPoints = array('zoom' => 1,'haut' => 2, 'centre' => 3 , 'bas' => 4);
  $classement = array();
  foreach($tableau_photo as $v) {
          $point = 0;
		  $point1 = 0;
          foreach($aPoints as $key => $val) {
                  $point += strstr($v, $key) ? $aPoints[$key] : 0;
          }
          foreach($bPoints as $key => $vale) {
                  $point1 += strstr($v, $key) ? $bPoints[$key] : 0;
          }
          $classement[$point][$point1]= $v;
  }


$classement=array_filter($classement);
$nb_photo=count($classement); // on compte les photos


if($nb_photo>0){
@ksort($classement);
}

if(@$classement[0]!=NULL){
@ksort($classement[0] );
}
if(@$classement[1]!=NULL){
@ksort($classement[1]);
}
if(@$classement[2]!=NULL){
@ksort($classement[2]);
}
if(@$classement[3]!=NULL){
@ksort($classement[3]);
}
if(@$classement[4]!=NULL){
@ksort($classement[4]);
}
if(@$classement[5]!=NULL){
@ksort($classement[5]);
}

//print_r($classement);exit();
if($nb_photo==0){ // on vérifie que le tableau n'est pas vide 
echo'erreur inconue merci de prevenir un administrateur<br /><a href="'.$url.'contact.php">contacter un administrateur</a><br />';exit();} // si il est vide on affiche un message d&#039;erreur et on arrette le script.
$titre_page=ucfirst($varunique)." : ".ucfirst($type)." : ".ucfirst($cat).".";
include'../php/haut.php' ?>
<div id="conteneur">
<div id="photo" class="photo">
<?php if($nb_photo>1){ ?><span id="gauche" class="precsuiv" style="background: url(<?php echo $url; ?>images/fleche-gauche.gif) no-repeat left center;width:10%;height:100%;position:absolute;z-index:2;cursor:pointer" onclick="controle=1;deplacement();"></span>


<?php } ?>
<ul id="ul_photo">
<?php
 foreach($classement as $key => $photo1) { // on affiche les résultats du tableau
 foreach($photo1 as $key => $photo) { // on affiche les résultats du tableau
 $photo=str_replace(array('-min','petit'),'',$photo);
?>

<li id="l<?php echo $i; ?>">
<?php
if ($i==2){
$grande_image=str_replace('.jpg','-profile.jpg',$grande_image);
}
if ($i==3){
$grande_image=str_replace('-profile.jpg','-dos.jpg',$grande_image);
}
?>

<img id="slider<?php echo $i; ?>" class="slider" src="<?php echo "$url$grande_image"; ?>" alt="<?php echo $code_produit; ?>" title="<?php echo $code_produit; ?>" width="50%" height="auto" />






</li>
<?php $i++;}} ?>
</ul>
<?php if($nb_photo>1){ ?><span id="droit" class="precsuiv" style="background: url(<?php echo $url; ?>images/fleche-droite.gif) no-repeat right center;width:10%;height:100%;position:absolute;right:0;z-index:2;cursor:pointer;" onclick="controle=2;deplacement();"></span><?php } ?>
</div>
<script type="text/javascript">
var tailleul=document.getElementById("ul_photo").scrollWidth*(-1);
var tailleecran=document.getElementById("photo").clientWidth;
redimention();
addEventListener('load',redimention);
addEventListener('resize',redimention);
function redimention(){
var hauteur=document.getElementById("slider1").scrollHeight;
document.getElementById("photo").style.height=hauteur+"px";
document.getElementById("gauche").style.height=hauteur+"px";
document.getElementById("droit").style.height=hauteur+"px";
var hauteurdiv=document.getElementById("photo").offsettop;
document.getElementById("gauche").style.top.hauteurdiv;
document.getElementById("droit").style.top.hauteurdiv;
var depl=document.getElementById("l1").clientWidth;
var depl1=document.getElementById("slider1").clientWidth;
depl2=depl*3;
depl2=depl2+"px";
var depl3=document.getElementById("l1").clientWidth;
var depl4=document.getElementById("slider1").clientWidth;
var depl5=document.getElementById("ul_photo").clientWidth;
};
var deplacementd=0;
var deplac=0;
var deplacemen=0;
var i=1;
function deplacement(){
if(controle===2 || controle===1){
clearInterval(y);
var taillefenetre=window.innerWidth;
var y = setInterval(function(){
if(controle===1){
deplac=document.getElementById("photo").clientWidth;
if(taillefenetre>966){	
deplac=deplac*(-0.649913344887)*i;
}else if(taillefenetre<967){
if(taillefenetre>550){
deplac=deplac*(-0.650103519669)*i;
}
else if(taillefenetre<551){
deplac=deplac*(-0.758181818182)*i;
}}
deplacemen=deplacemen-1;
if(deplacemen<deplac){
deplacemen=deplac;
i=i+1;
if(i>2){i=2;}
controle=0;
clearInterval(y);
}
document.getElementById("ul_photo").style.left=deplacemen+"px";
}
if(controle===2){
deplac=document.getElementById("photo").clientWidth;
if(taillefenetre>966){	
deplac=deplac*(-0.649913344887)*i;
}else if(taillefenetre<967){
if(taillefenetre>550){
deplac=deplac*(-0.650103519669)*i;
}
else if(taillefenetre<551){
deplac=deplac*(-0.758181818182)*i;
}}
deplacemen=deplacemen+1;
var deplacemen1=deplacemen
if(deplacemen>deplac){
deplacemen=deplac;
i=i-1;
if(i<0){i=0;}
controle=0;
clearInterval(y);
}
document.getElementById("ul_photo").style.left=deplacemen+"px";
}

},10)}};
</script>

<div class="ajoutez">
<form action="" id="panier">
<p class="ajt_panierp">Taille :
<select name="taille">
<?php

$taille1=mysqli_query($connectionbd,"SELECT taille FROM taille WHERE id_produit='$id'");
while($taille2=mysqli_fetch_array($taille1)){
$taille=$taille2['taille']; ?>
<option value="<?php echo urlencode($taille); ?>">&nbsp;<?php echo $taille; ?>&nbsp;</option><?php } 
if($taille==NULL){ ?><option value="UNIQUE">UNIQUE</option>
<?php } ?>
</select>
</p>
<p class="ajt_panierp">Quantit&eacute; :
<select name="quantite">
<?php for($i=0; $i<$stock; $i++)
{
$quantite=$i+1;
echo'<option value="'.$quantite.'">&nbsp;'.$quantite.'&nbsp;</option>';
}
?>
</select>
</p>
<p><input name="id_article" type="hidden" value="<?php echo $id; ?>"/></p>
<p><input name="ref" type="hidden" value="<?php echo $ref; ?>"/></p>
<p><input name="prix" type="hidden" value="<?php echo $prix; ?>"/></p>
<p><input name="totalpanier" type="hidden" value="<?php echo $totalpanier; ?>"/></p>
<?php if(@$ajout==1){ ?><br/><br/><?php } ?>
</form>
<p class="ajoutezp"><?php echo $prix.' &euro;'; ?></p>
<p><button id="changer-couleur" class="ajt_panier" type="submit">AJOUTER AU PANIER</button></p>
<script type="text/javascript">
document.getElementById('changer-couleur').onclick=function changercouleur(){
document.getElementById('colorpanier').style.backgroundColor='#DE1482';
};
</script>
</div>
Ref.<?php echo"$ref<br/>
$description"; ?> 
</div>
<?php $article=mysqli_fetch_array(mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock>0 ORDER BY RAND() LIMIT 1"));
extract($article); ?>
<?php include'../php/bas.php'; ?>