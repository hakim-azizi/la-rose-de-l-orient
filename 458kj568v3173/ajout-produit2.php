<?php
require("connectionbd.php");
extract($_POST);
$nom=htmlentities($nom);
$type=htmlentities($tpe);
$cat=htmlentities($cat);
$description=nl2br(htmlentities($description));
$nom=str_replace("'",'&#039;',$nom);
$type=str_replace("'",'&#039;',$type);
$cat=str_replace("'",'&#039;',$cat);
$description=str_replace("'",'&#039;',$description);
$stock=intval($stock);
if($nom=='' OR $type=='' OR $petite_image=='' OR $grande_image =='' OR $description=='' OR $prix=='' OR $poid=='' OR $taille=='')
{
$reponse='un champ est vide';
}
else
{
mysqli_query($connectionbd,"INSERT INTO produit (code_produit,cathegorie,type,petite_image,grande_image,description,prix,stock,poid) VALUES ('$nom','$cat','$type','$petite_image','$grande_image','$description','$prix','$stock','$poid')") OR die('error');
$reponse='Le produit &agrave; bien &eacute;t&eacute; ajout&eacute;';
$id1=mysqli_query($connectionbd,"SELECT id FROM produit ORDER BY id DESC LIMIT 1");
$id2=mysqli_fetch_array($id1);
$id=$id2['id'];
mysqli_query($connectionbd,"INSERT INTO `taille` (id_produit,code_produit,taille) VALUES ('$id','$nom','$taille')") OR die('error')
if($taille1!='')
{
mysqli_query($connectionbd,"INSERT INTO taille (id_produit,code_produit,taille) VALUES ('$id','$nom','$taille')") OR die('error');
}
if($taille2!='')
{
mysqli_query($connectionbd,"INSERT INTO taille (id_produit,code_produit,taille) VALUES ('$id','$nom','$taille')") OR die('error');
}
if($taille3!='')
{
mysqli_query($connectionbd,"INSERT INTO taille (id_produit,code_produit,taille) VALUES ('$id','$nom','$taille')") OR die('error');
}
if($taille4!='')
{
mysqli_query($connectionbd,"INSERT INTO taille (id_produit,code_produit,taille) VALUES ('$id','$nom','$taille')") OR die('error');
}
if($taille5!='')
{
mysqli_query($connectionbd,"INSERT INTO taille (id_produit,code_produit,taille) VALUES ('$id','$nom','$taille')") OR die('error');
}}
echo $reponse;
?>
</td>
</tr>
</table>
