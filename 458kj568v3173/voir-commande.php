<?php
require("connectionbd.php");
if(@$_GET['message']==1){$message='mail paiement reçut envoyé.<br>';}
if(@$_GET['message']==2){$message='ERREUR!!!<br>le numero de collisimo n&#039;est pas valide.<br>';}
if(@$_GET['message']==3){$message='mail commande expedier envoyé.<br>';}
echo''.@$message.'
LISTE DES PRESENTATION A DOMICILE.<br><br>';
$presentation1 = mysqli_query($connectionbd,"select * FROM `facture` WHERE suivi=0 AND mode_de_reglement='présentation des modèles domicile'")OR die('error1');
while($presentation=mysqli_fetch_array($presentation1))
{
extract($presentation);
$info_client=mysqli_fetch_array(mysqli_query($connectionbd,"SELECT * FROM client WHERE id=$id_client"));
$tel=$info_client['tel'];
echo'<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="60%" id="AutoNumber1" height="">
  <tr>
     <td valign="top">
tel: '.$tel.'<br>
id facture: '.$id.'<br>
nom: '.$civil.' '.$nom.' '.$prenom.'<br>
adresse: '.$adresse.'<br>
'.$code_postal.' '.$ville.'<br>
'.$pays.'<br>
date: '.$date.'<br>
</td></tr>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="60%" id="AutoNumber1" height="">
';
$commande1 = mysqli_query($connectionbd,"select * FROM `panier` WHERE `txn_id` = '".$presentation['txn_id']."'")OR die('error');
while($commande = mysqli_fetch_array($commande1))
{
$image=$commande['image'];
echo"<tr><td align=\"center\" valign=\"top\">
<img src =\"../".$image."\"></td>
     <td align=\"center\" valign=\"top\">
code produit: ".$commande['code_produit']."<br>
quantité: ".$commande['quantite']."<br>
taille: ".$commande['taille']."<br></td></tr>";
} echo"</table><br>
<form action='valider-paiement.php' method='post'>
<input name='colis' type='text'>
<input name='txn_id' type='hidden' value='".$livraison['txn_id']."'>
<input name='Submit' type='submit' value='valide le paiement'></form><br>
<form action='sup-com.php' method='post'>
<input name='txn_id' type='hidden' value='".$livraison['txn_id']."'>
<input name='Submit' type='submit' value='annuler la commande'></form><br><br>"; }
echo'VOIR LES COMMANDES <br>';
if($message==1){$message='la commande a bien été validé';}
if($message==2){$message='ERREUR!!! dans le numero de colissimo';}
if($message==3){$message='la commande a bien envoyé';}
$message.='<br>';echo $message.'<br>';
$livraison1 = mysqli_query($connectionbd,"select * FROM `facture` WHERE suivi=1")OR die('error');
while($livraison=mysqli_fetch_array($livraison1))
{
extract($livraison);
$info_client=mysqli_fetch_array(mysqli_query($connectionbd,"SELECT * FROM client WHERE id=$id_client"));
$tel=$info_client['tel'];
echo'<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="60%" id="AutoNumber1" height="">
  <tr>
     <td valign="top">
tel: '.$tel.'<br>
id facture: '.$id.'<br>
nom: '.$civil.' '.$nom.' '.$prenom.'<br>
adresse: '.$adresse.'<br>
'.$code_postal.' '.$ville.'<br>
'.$pays.'<br>
</td></tr>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="60%" id="AutoNumber1" height="">
';
$commande1 = mysqli_query($connectionbd,"select * FROM `panier` WHERE `txn_id` = '$txn_id'")OR die('error');
while($commande = mysqli_fetch_array($commande1))
{
$image=$commande['image'];
echo"<tr><td align=\"center\" valign=\"top\">
<img src =\"../".$image."\"></td>
     <td align=\"center\" valign=\"top\">
code produit: ".$commande['code_produit']."<br>
quantité: ".$commande['quantite']."<br>
taille: ".$commande['taille']."<br></td></tr>";
} echo"</table><br>
<form action='facture1.php' method='post'>
<input name='id' type='hidden' value='".$livraison['id_client']."'>
<input name='txn_id' type='hidden' value='".$livraison['txn_id']."'>
<input name='Submit' type='submit' value='facture'></form><br>









<form action='valider-envoie.php' method='post'>
<input name='colis'>
<input name='txn_id' type='hidden' value='".$livraison['txn_id']."'>
<input name='Submit' type='submit' value='commande envoyé'></form><br>











<form action='sup-com.php' method='post'>
<input name='txn_id' type='hidden' value='".$livraison['txn_id']."'>
<input name='Submit' type='submit' value='annuler la commande'></form><br><br>";}
echo'VOIR LES COMMANDES EN ATTENTE DE PAIEMENT<br><br>';
$livraison1 = mysqli_query($connectionbd,"select * FROM `facture` WHERE suivi=0 AND (mode_de_reglement='Chèque' OR mode_de_reglement='virement')")OR die('error');
while($livraison=mysqli_fetch_array($livraison1))
{
extract($livraison);
$info_client=mysqli_fetch_array(mysqli_query($connectionbd,"SELECT * FROM client WHERE id=$id_client"));
$tel=$info_client['tel'];
echo'<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="60%" id="AutoNumber1" height="">
  <tr>
     <td valign="top">
tel: '.$tel.'<br>
id facture: '.$id.'<br>
nom: '.$civil.' '.$nom.' '.$prenom.'<br>
adresse: '.$adresse.'<br>
'.$code_postal.' '.$ville.'<br>
'.$pays.'<br>
date: '.$date.'<br>
</td></tr>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="60%" id="AutoNumber1" height="">
';
$commande1 = mysqli_query($connectionbd,"select * FROM `panier` WHERE `txn_id` = '".$livraison['txn_id']."'")OR die('error');
while($commande = mysqli_fetch_array($commande1))
{
$image=$commande['image'];
echo"<tr><td align=\"center\" valign=\"top\">
<img src =\"../".$image."\"></td>
     <td align=\"center\" valign=\"top\">
code produit: ".$commande['code_produit']."<br>
quantité: ".$commande['quantite']."<br>
taille: ".$commande['taille']."<br></td></tr>";
} echo"</table><br>
<form action='valider-paiement.php' method='post'>
<input name='txn_id' type='hidden' value='".$livraison['txn_id']."'>
<input name='Submit' type='submit' value='valide le paiement'></form><br>
<form action='sup-com.php' method='post'>
<input name='txn_id' type='hidden' value='".$livraison['txn_id']."'>
<input name='Submit' type='submit' value='annuler la commande'></form><br><br>"; }
?>
<br><br>
</td>
</tr>
</table>
