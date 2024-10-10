<?php
include'../php/mots-inerdits.php';
if(preg_match("#php#",$_SERVER["REQUEST_URI"])){include'../php/404.php';exit();}
if(!preg_match("#([/])$#",$_SERVER["REQUEST_URI"])){header("location:".$_SERVER['REQUEST_URI']."/");exit();}
$page=intval(@$_GET['page']);
if($page==0){$page=1;}
$tri1=intval(@$_COOKIE['tri']);
if($tri1==1){$tri='Prix croissant';$order='ORDER BY prix ASC';}
elseif($tri1==2){$tri='Prix d&eacute;croissant';$order='ORDER BY prix DESC';}
else{$tri='Nouveaut&eacute;';$order='ORDER BY id DESC';}
$replace=array('sante','beaute','vet','ee','-ete','eco','-d-','-a-','chaine','dore','argente','perle','-');
$by=array('sant&eacute;','beaut&eacute;','v&ecirc;t','&eacute;e',' &eacute;t&eacute;','&eacute;co',' d&#039;',' &agrave; ','cha&icirc;ne','dor&eacute;','argent&eacute;','perl&eacute;',' ');
if(preg_match("#[a-z\-]{1,100}#",$_GET['cat']))
{
$cat=str_replace(array('soutien gorge','semi pro'),array('soutien-gorge','semi-pro'),str_replace($replace,$by,$_GET['cat']));
$varunique=$cat;
$where="WHERE cathegorie='$cat'";
$desc=$cat;
$tableau='cathegorie';
$urlcat=$_GET['cat'];
$titre_page="$cat";
}
$verifcat1=mysqli_query($connectionbd,"SELECT COUNT(*) FROM categorie WHERE nom='$cat'") OR die(include'../php/404.php');
$verifcat=mysqli_fetch_array($verifcat1);
if($verifcat['COUNT(*)']==0){include'../php/404.php';}
if(preg_match("@^([a-z\-]{1,100})$@",@$_GET['type']))
{
$type=str_replace(array('soutien gorge','semi pro'),array('soutien-gorge','semi-pro'),str_replace($replace,$by,$_GET['type']));
$where.=" AND type='$type'";
$desc=$type;
$varunique=$type;
$tableau='type';
$urltype=$_GET['type'];
$titre_page="$type : $cat";
$veriftype1=mysqli_query($connectionbd,"SELECT COUNT(*) FROM type WHERE nom='$type' AND categorie='$cat'") OR die(include'../php/404.php');
$veriftype=mysqli_fetch_array($veriftype1);
if($veriftype['COUNT(*)']==0){include'../php/404.php';}
}
$nbart2=mysqli_query($connectionbd,"SELECT COUNT(*) FROM produit $where AND stock>0")or die(include'../php/404.php');
$nbart1=mysqli_fetch_array($nbart2);
$nbart=$nbart1['COUNT(*)'];
$titre=$varunique;
$idimg=0;
$nbpage=ceil($nbart/10);
if($nbpage<$page AND $page!=1){include'../php/404.php';exit();}
$page1=$page*10-10;
$urlpage=$page-1;
$urlprecedent='page-'.$urlpage.'.html';
$urlsuivant=$page+1;
$prix=mysqli_fetch_array(mysqli_query($connectionbd,"SELECT prix FROM produit WHERE $tableau='$varunique' ORDER BY prix ASC LIMIT 1"));
$titre_page.=" : boutique en ligne , La Rose de l&#039;Orient";
$description_page="$varunique &agrave; partir de ".$prix['prix']." &euro;. &Agrave; ce prix l&agrave; on n&#039;h&eacute;site pas.";
$mot_cle_page=$varunique;
include'../php/haut.php' ?>
<div id="accueil">
<?php
$mod1=mysqli_query($connectionbd,"SELECT * FROM produit $where  AND `stock` > 0 $order LIMIT $page1,10");
while($accueil=mysqli_fetch_array($mod1)){extract($accueil);include'produit.php';}  ?>
</div>
<?php include'../php/bas.php'; ?>