<?php
include'../php/mots-inerdits.php';
$verification_date=@date("W");
$fraicheur_top_vente=mysqli_fetch_array(mysqli_query($connectionbd,"SELECT date FROM date_topvente"));
if($verification_date!=$fraicheur_top_vente['date']){
//echo'on change';
$i=1;
$article1=mysqli_query($connectionbd,"SELECT id,grande_image,prix,description,code_produit,cathegorie,type FROM produit WHERE stock>0 ORDER BY RAND() LIMIT 10");
while($article=mysqli_fetch_array($article1))
{
mysqli_query($connectionbd,"UPDATE top_vente SET id='".$article['id']."',grande_image='".$article['grande_image']."',prix='".$article['prix']."',description='".$article['description']."',code_produit='".$article['code_produit']."',cathegorie='".$article['cathegorie']."',type='".$article['type']."' WHERE idvente=$i");
$i++;}
mysqli_query($connectionbd,"UPDATE date_topvente SET date=$verification_date");
} ?>