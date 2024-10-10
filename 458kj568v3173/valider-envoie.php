<?php include'../php/conbd.php';
$date=date("d m Y");
$txn_id=$_POST['txn_id'];
if($colis==''){}elseif(preg_match("/^(8N[0-9]{11})$/",$_POST['colis'])){$colis=$_POST['colis'];}else{header("location:voir-commande.php?message=2");exit();}
mysqli_query($connectionbd,"UPDATE facture SET suivi=2,colis='".$colis."',dateenvoie='$date' WHERE txn_id='$txn_id'") OR die('error');
$infoclient1=mysqli_fetch_array(mysqli_query($connectionbd,"SELECT id_client,frais_port FROM facture WHERE txn_id='$txn_id'"));
$frais_port=$infoclient1['frais_port'];
extract(mysqli_fetch_array(mysqli_query($connectionbd,"SELECT civil,nom,prenom,mail FROM client WHERE id=".$infoclient1['id_client']."")));
$date=date("d m Y");
$sujet="La rose de l'orient : votre commande à été envoyé.";
$message="Bonjour $civil $nom $prenom,<br>
Votre commande n°: $txn_id<br>
à été expédié le $date<br>";
if($colis!='')
{$message.="
Numero de colissimo : $colis<br>
Pour suivre l'envoie de votre commande cliquez sur le lien ci-dessous<br>
et entrez le numéro de colissimo dans le champs prévu à cette effet.<br>
<a href=http://www.colissimo.fr/portail_colissimo/suivre.do?colispart=$colis target=_blank>http://www.colissimo.fr/portail_colissimo/suivre.do?colispart=$colis</a><br>";}
$message.="
Voici un recapitulatif de vos achats<br>
<table border=1  style=border-collapse:collapse bordercolor=#111111>
<tr>
<td align=center>photo</td>
<td align=center>Designation article</td>
<td align=center>taille</td>
<td align=center>quantité</td>
<td align=center>Prix unitaire</td>
<td align=center>sous total</td>
</tr>
";
$total=0;
$achat1=mysqli_query($connectionbd,"SELECT * FROM panier WHERE txn_id='$txn_id'");
while($achat=mysqli_fetch_array($achat1))
{
extract($achat);
$sous_total=$prix*$quantite;
$total=$total+$sous_total;
$message .= "<tr>
<td align=center><img src=http://www.larosedelorient.com/$image></td>
<td align=center>$code_produit</td>
<td align=center>$taille</td>
<td align=center>$quantite</td>
<td align=center>$prix</td>
<td align=center>$sous_total</td>
</tr>
";
}
$total1=$total+$frais_port;
$message .= "<tr>
<td align=center colspan=4>&nbsp;</td>
<td align=center>frais de port</td>
<td align=center>$frais_port</td>
</tr>
<tr>
<td align=center colspan=4>&nbsp;</td>
<td align=center>total</td>
<td align=center>$total1</td>
</tr>
</table>
_____________________<br>
En vous remerciant de l'intérêt que vous portez à La rose de l'orient.<br>
La rose de l'orient<br> 
3 avenue Hernest Hemingway<br>
44300 NANTES<br>
France.<br>
<br>
France: 
Tel. 09-54-27-88-12.<br>
Fax. 09-59-27-88-12.<br>
Étranger:<br>
Tel. 0033-954-278-812.<br>
Fax. 0033-959-278-812.<br>
<br>
Mail: admin@larosedelorient.com<br>
Site: http://www.larosedelorient.com<br>
<br>
Code APE-NAF: 4791B.<br>
Commerçant enregistré sous le n°: 504 570 763 RCS NANTES.<br>
Enregistré à la C.N.I.L sous le n°: 1269923.<br>
<br>
M. Hakim AZIZI<br>
";
$entete = "From: la rose de l'orient <admin@larosedelorient.com>\n";
$entete .= "MIME-version: 1.0\n";
$entete .= "Content-type: text/html; charset= iso-8859-1\n";
$entete1 = "From:  $civil $nom1 $prenom<$mail>\n";
$entete1 .= "MIME-version: 1.0\n";
$entete1 .= "Content-type: text/html; charset= iso-8859-1\n";
//mail($mail,$sujet,$message,$entete);
//mail("admin@larosedelorient.com",$sujet,$message,$entete);












header("location:voir-commande.php?message=3");
?>