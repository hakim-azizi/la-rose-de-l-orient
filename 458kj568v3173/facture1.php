<?php
include("../php/conbd.php");
$txn_id = preg_replace("@([^A-Za-z0-9])@",'',$_POST['txn_id']);
if($txn_id == NULL)
{ echo"Vous n'avez pas selectionné de facture "; exit(); }
$id_client=intval($_POST['id']);
$sql1=mysqli_query($connectionbd,"SELECT * FROM client WHERE id=$id_client") OR die('error');
$sql=mysqli_fetch_array($sql1);
$facturation1 = mysqli_query($connectionbd,"SELECT * FROM facture WHERE txn_id = '$txn_id'") OR die('mysql');
$facturation=mysqli_fetch_array($facturation1);
$date = $facturation['date'];
?>
<html>
<head>
<title>Votre de commande</TITLE>
</head>
<body>
<div align="center">
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1" height="">
<tr><td align="right" width="100%">
date: <?php echo"".$date.""; ?></td></tr></table>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1" height="">
<tr><td align="left" width="10%">
<b>LA ROSE DE L'ORIENT</b><br></font>
3 av. E. HEMINGWAY<br>
44300 NANTES<br>
TEL: 09-54-27-88-12<br>
mail:admin@larosedelorient.com<br></td>
<td align="center">
Adresse de livraison:<br>
<?php
if($facturation['raison_sociale']!=''){echo $facturation['raison_sociale']."<br>";}
echo"".$facturation['civil']." ".$facturation['nom']." ".$facturation['prenom']."<br>
".$facturation['adresse']."<br>
".$facturation['code_postal']." ".$facturation['ville']."<br>
".$facturation['pays']."<br></td></tr>
<tr><td align='left'>
<br>Adresse de facturation<br>";
if($sql['raison_sociale']!=''){echo $sql['raison_sociale']."<br>";}
echo"".$sql['civil']." ".$sql['nom']." ".$sql['prenom']."<br>
".$sql['adresse']."<br>
".$sql['code_postal']." ".$sql['ville']."<br>
".$sql['pays']."<br>
TEL: ".$sql['tel']."<br>
mail: ".$sql['mail']."</td></tr></table>";
?>
<br>
<br>
<div align="center">
<font size="5"><b>FACTURE N°: <?php echo"".$txn_id.""; ?></b></font><br><br>
TVA non Applicable, article 293B du CGI.
<?php echo"<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\" width=\"100%\" id=\"AutoNumber1\" height=\"\">
<tr>
<td align=\"center\">Réference</td>
<td align=\"center\">Designation article</td>
<td align=\"center\">taille</td>
<td align=\"center\">prix unitaire</td>
<td align=\"center\">quantité</td>
<td align=\"center\">prix </td>
</tr>";
$achat1 = mysqli_query($connectionbd,"SELECT * FROM panier WHERE txn_id = '".$txn_id."'");
while ($achat=mysqli_fetch_array($achat1))
{
$code_produit = $achat['code_produit'];
$code=substr($code_produit,0,4);
$id_article=$achat['id_article'];
$prix_unitaire = $achat['prix'];
$quantite = $achat['quantite'];
$prix = $prix_unitaire*$quantite;
echo"<tr>
<td align=\"center\">$code$id_article</td>
<td align=\"center\">".$code_produit."</td>
<td align=\"center\">".$achat['taille']."</td>
<td align=\"center\">".$prix_unitaire." €</td>
<td align=\"center\">".$quantite."</td>
<td align=\"center\">".$prix." €</td>
</tr>";
$total = $total+$prix;
}
$port = $facturation['frais_port'];
$tva4 = round($port*'0.16387959865899',2);
$portht = $port-$tva4;
$tva = $tva4+$tva3;
$paiement = $total+$port;
$paiementht = $totalht+$portht;
echo"<tr>
<td align=\"center\"></td>
<td align=\"center\">frais de port</td>
<td align=\"center\"></td>
<td align=\"center\">".$port." €</td>
<td align=\"center\">1</td>
<td align=\"center\">".$port." €</td>
</tr>
<td align=\"center\"></td>
<td align=\"center\"></td>
<td align=\"center\"></td>
<td align=\"center\"></td>
<td align=\"center\">total</td>
<td align=\"center\">".$paiement." €</td>
</tr></table>";
?>
<div align="center"><font size="1">Commerçant enregistr&eacute;  sous le n°504 570 763 RCS NANTES. <br>
Site enregistr&eacute; &agrave; la CNIL sous le n° 1269923.<br></div>
