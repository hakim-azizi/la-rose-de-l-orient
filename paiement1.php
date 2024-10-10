<?php
include'php/mots-inerdits.php';
if(strlen($sql['id'])==0){
header('location:livraison.php');
exit();
}
$total=0;
$paiement=intval($_POST['paiement']);
if(preg_match("#^([A-Z0-9]{19})$#",$_POST['txn_id'])){$txn_id=$_POST['txn_id'];}else{header("location:livraison.php?reponse=Vous+ne+devez+pas+modifier+les+donnees+de+lurl+br");exit();}
setcookie('txn_id',"$txn_id",0,"/",".larosedelorient.com");
if(preg_match("#^([0-9]{25})$#",@$_COOKIE['identifiant'])){$identifiant=$_COOKIE['identifiant'];}
$panier1=mysqli_query($connectionbd,"SELECT prix,quantite FROM panier WHERE (valide=0 OR valide=1) AND identifiant='$identifiant' AND txn_id='' ORDER BY id DESC") or die('error');
while($panier=mysqli_fetch_array($panier1)){
extract($panier);
$sous_total=$prix*$quantite;
$total=$total+$sous_total;
}
$frais_port=round($total*0.1,2);
if($total>150){$frais_port=0;}
$prix_paie=$frais_port+$total;
if($paiement==0){header("location:paiement.php?reponse=Veuillez+selectionner+votre+moyen+de+paiement+br&txn_id=$txn_id");}
elseif($paiement==1){
echo "Le montant de vos achats frais de port compris s'&eacute; &agrave; $prix_paie" ?>
<p id="valider_formulaire">Si Vous n&#039;êtes pas redirigé dans 5 secondes vers paypal merci de cliquez sur le bouton ci-dessous</p>
<?php //<form id="finishtask" name="finishtask" action="https://www.paypal.com/cgi-bin/webscr" method="post">
?><form id="finishtask" name="finishtask" action="confirmation-paiement.php" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="hakazizi@hotmail.com">
<input type="hidden" name="item_name" value="règlement de vos achats chez la rose de l&#039;orient">
<input type="hidden" name="item_number" value="<?php echo $txn_id; ?>">
<input type="hidden" name="amount" value="<?php echo $prix_paie; ?>">
<input type="hidden" name="page_style" value="PayPal">
<input type="hidden" name="no_shipping" value="0">
<input type="hidden" name="return" value="http://robedelorient.com/confirmation-paiement.php">
<input type="hidden" name="cancel_return" value="http://robedelorient.com/paiement.php?txn_id=<?php echo $txn_id; ?>">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="lc" value="FR">
<input type="hidden" name="bn" value="PP-BuyNowBF">
<button name="Submitt" type="submit" class="Style8">Envoyer</button>
</form>

<script type="text/javascript">
<!--
secund();
var seconde=0;
var sec=5;
var second=5;
function secund()
{
seconde=sec;
if(seconde<1){seconde=0;document.finishtask.submit();}
document.getElementById('valider_formulaire').innerHTML=('si vous n&#039;&ecirc;tes pas redirig&eacute; dans '+seconde+' secondes cliquez sur le bouton ci dessous');
sec=sec-1;
setTimeout('secund()',1000);
}
//-->
</script>
<?php
mysqli_query($connectionbd,"UPDATE  panier SET  txn_id='$txn_id' WHERE  identifiant='$identifiant'") OR die(mysql_error());
mysqli_query($connectionbd,"UPDATE facture SET valide='1' WHERE txn_id='$txn_id'");
}
elseif($paiement==2 OR $paiement==3){
mysqli_query($connectionbd,"UPDATE  panier SET  txn_id='$txn_id' WHERE  identifiant='$identifiant'") OR die(mysql_error());
mysqli_query($connectionbd,"UPDATE facture SET valide='1' WHERE txn_id='$txn_id'");
$_COOKIE['identifiant']='';
header("location:commande-effectuer.php");}
elseif($paiement==4){
mysqli_query($connectionbd,"UPDATE  panier SET  txn_id='$txn_id' WHERE  identifiant='$identifiant'") OR die(mysql_error());
mysqli_query($connectionbd,"UPDATE facture SET valide='1' WHERE txn_id='$txn_id'");
$_COOKIE['identifiant']='';
echo'pr&eacute;sentation des mod&egravele &agrave domicile';}
else{header("location:paiement.php?reponse=Veuillez+selectionner+votre+moyen+de+paiement+br&txn_id=$txn_id");}
?>