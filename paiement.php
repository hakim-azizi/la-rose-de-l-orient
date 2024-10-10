<?php
include'php/mots-inerdits.php';
if(strlen($sql['id'])==0){
header('location:livraison.php');
exit();
}
if(preg_match("#^([A-Z0-9]{19})$#",$_GET['txn_id'])){$txn_id=$_GET['txn_id'];}else{header("location:livraison.php?reponse=Vous+ne+devez+pas+modifier+les+donnees+de+lurl+br");exit();}
$titre_page="Choisisser votre moyen de paiement";
$description_page="";
$mot_cle_page="";
include'php/haut.php'; ?>
<div style="text-align:center">
<span class="gras" style="display:inline-block;margin:0;text-align:center;background-color:#CECECE;color:#FFF;width:33%;height:28px;">Panier</span><span class="gras" style="display:inline-block;margin:0;text-align:center;background-color:#CECECE;color:#FFF;width:33%;height:28px;border:1px solid #FFF;">Livraison</span><span class="gras" style="display:inline-block;margin:0;text-align:center;background-color:#000;color:#FFF;width:33%;height:28px;">Paiement</span>
</div>
<p class="gras">Choisisser votre moyen de paiement</p>
<p class="gras" style="color:red">
<?php 
if(strlen(@$_GET['reponse'])!=0){
echo ''.str_replace(' br','<br/>',$_GET['reponse']);} ?>
</p>
<form action="paiement1.php" method="post">
<p><select name="paiement">
<option value="0">choisissez votre moyen de paiement</option>
<option value="4">Pr&eacute;sentaiton &agrave; domicile</option>
<option value="1">CB via Paypal</option>
<option value="2">Ch&egrave;que</option>
<option value="3">Virement banquaire</option>
</select>
<input name="txn_id" type="hidden" value="<?php echo $txn_id; ?>"/>
<button type="submit">PROCEDER AU PAIEMENT</button></p>
</form>
<?php include'php/bas.php'; ?>