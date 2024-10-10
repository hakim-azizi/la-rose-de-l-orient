<?php
include'../php/mots-inerdits.php';
if($_GET['id_article']===NULL){echo 'erreur'; exit();}
//récupération de l'IP
if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
elseif(isset($_SERVER['HTTP_CLIENT_IP'])) {
  $ip=$_SERVER['HTTP_CLIENT_IP'];
}
else {
  $ip=$_SERVER['REMOTE_ADDR'];
}
if(preg_match("#^([0-9]{25})$#",@$_COOKIE['identifiant'])){$rand=@$_COOKIE['identifiant'];}
else{
$rand=rand(1,9);
for($i=0;$i<24;$i++){$rand1=rand(0,9);$rand="$rand$rand1";}
setcookie('identifiant',"$rand",0,"/");
}
$regex="#&([a-z])[^;]+;#";
$id=intval($_GET['id_article']);


//$ajout=mysqli_fetch_array(mysqli_query($connectionbd,"SELECT * FROM produit WHERE id=$id"));



$ajout1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE id=$id");
$ajout=mysqli_fetch_array(mysqli_query($connectionbd,"SELECT * FROM produit WHERE id=$id"));

@extract($ajout);
$boutique=intval(@$_COOKIE['boutique']);
$quantite=intval(@$_GET['quantite']);
$taille=preg_replace("#([^A-Za-z0-9])#",'/',$_GET['taille']);
$date=date("d-m-Y H:i:s");
mysqli_query($connectionbd,"INSERT INTO panier (ip_client,identifiant,id_article,code_produit,image,cathegorie,type,quantite,taille,prix,poid,date,idrev) VALUES ( '$ip','$rand','$id','".$code_produit."','".$petite_image."','".$cathegorie."','".$type."','$quantite','$taille','".$prix."','$poid','$date','$boutique')");
 echo'<?xml'; ?> version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<style type="text/css">p{font-weight:bold;color:#FF0000;}</style>
<body>
<p> <?php echo "$quantite ".$code_produit." ";if($quantite>1){echo"ont";}else{echo"a";} ?> bien &eacute;t&eacute ajout&eacute; &agrave; votre panier</p>
</body>
</html>