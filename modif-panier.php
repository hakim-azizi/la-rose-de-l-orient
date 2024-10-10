<?php
include'php/mots-inerdits.php';
$modification=intval($_POST['modification']);
$id_article=intval($_POST['id_article']);
if($modification==1){
mysqli_query($connectionbd,"DELETE FROM panier WHERE id=$id_article");
}
elseif($modification==2){
$quantite=intval($_POST['quantite']);
$taille1=preg_replace("@[A-Za-z0-9]@",'',$_POST['taille']);
$taille=preg_replace("@[$taille1]@",' ',$_POST['taille']);
if($quantite==0){header('location:panier.php');exit();}
mysqli_query($connectionbd,"UPDATE panier SET quantite='$quantite',taille='$taille' WHERE id=$id_article");}
header('location:panier.php');exit();
?>
