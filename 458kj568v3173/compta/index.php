<?php
require'connectionbd.php';
$fraisdeport=0;
$prixpai=0;
$factur=mysql_query("SELECT * FROM `facture` WHERE date LIKE '%01-2014%'OR date LIKE '%02-2014%'OR date LIKE '%03-2014%' OR date LIKE '%01 2014%'OR date LIKE '%02 2014%'OR date LIKE '%03 2014%'");
while($facture=mysql_fetch_assoc($factur))
{
$fraisport=$facture['frais_port'];
$fraisdeport=$fraisdeport+$fraisport;
$acha=mysql_query("select * FROM panier WHERE txn_id='".$facture['txn_id']."'")OR die(mysql_error());
while($achat=mysql_fetch_assoc($acha))
{
$prix=0;
$prix=$achat['quantite']*$achat['prix'];
$prixpai=$prixpai+$prix;
}}
$total1=$fraisdeport+$prixpai;
$total=round($total1,0);
$charge=($total*14)/100;
$formation=($total*0.1)/100;
$charge1=round($charge,0);
$formation1=round($formation,0);
echo"<h1>Calcul charge</h1><p>frais de port : $fraisdeport<br>achat: $prixpai<br>total1: $total1<br>total: $total<br>charge: $charge<br>cotis formation commercant: $formation<br>charge arrondi: $charge1<br>cotis formation commercant: $formation1<p>";
?>