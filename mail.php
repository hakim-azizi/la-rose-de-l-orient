<?php
include'php/mots-inerdits.php';
if(preg_match("#^([A-Z0-9]{19})$#",$_COOKIE['txn_id'])){$txn_id=$_COOKIE['txn_id'];}else{echo"Une erreur c'est produite";exit();}

$message="Voici un r&eacute;capitulatif de votre commande";
$panier1=mysql_query("SELECT * FROM panier WHERE txn_id='$txn_id' ORDER BY id DESC");
while($panier=mysql_fetch_assoc($panier1)){
extract($panier);
$photo=str_replace('petit','min',$image);
$refpanier=substr($code_produit,0,4);
$refpanier.=$id_article;
$sous_total=$prix*$quantite;
$total=$total+$sous_total;
$poid_total=$poid_total+$poid;
$message.="<div style=margin-left:8px;margin-bottom:8px;width:145px;height:194px;float:left;><img src=http://fr.larosedelorient.com/$photo width=145px height=194px></div>
<div style=margin-left:8px;margin-bottom:8px;height:194px;float:left;>
<p style=font-weight:bold>".ucfirst($code_produit)."</p>
Ref. : $refpanier<br/>
Quantit&eacute; : $quantite<br/>
Taille : $taille<br/>
Prix unitaire : $prix &euro;</br>
Sous total : $sous_total &euro;</br>
</div><div style=clear:both></div>";
}
$fdp=round($total*0.1,2);
$totalpaie=$total+$fdp;
$message.="Total : $total<br/>
Frais de port : $fdp<br/>
Total &agrave; payer : $totalpaie";
echo $message;
$mail1=mysql_fetch_assoc(mysql_query("SELECT mail FROM client WHERE id='$id_client'"));
$mail=$mail1['mail'];

// $mail="hakazizi@hotmail.com";



$sujet="confirmation de votre commande";
$header="From: \"La rose de l'orient\"<admin@larosedelorient.com>\nBcc: admin@larosedelorient.com\n";
$header.="Reply-To: admin@larosedelorient.com\n";
$header.="Content-Type: text/html; charset=\"iso-8859-1\"";
//if(mail($mail,$sujet,$message,$header))
//{
        echo "<br/>L'email a bien &eacute;t&eacute; envoy&eacute;.";
//}
//else
//{
//        echo "<br/>Une erreur c'est produite lors de l'envois de l'email.";
//}
?>