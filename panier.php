<?php
include'php/mots-inerdits.php';
$article1=mysqli_query($connectionbd,"SELECT id,code_produit,grande_image,description,prix,stock FROM produit WHERE stock>0 ORDER BY RAND() LIMIT 4");
$titre_page="V&eacute;rifier votre commande";
$description_page="";
$mot_cle_page="";
include'php/haut.php'; ?>
<div style="text-align:center">
<span class="gras" style="display:inline-block;margin:0;text-align:center;background-color:#000;color:#FFF;width:33%;height:28px;">Panier</span><span class="gras" style="display:inline-block;margin:0;text-align:center;background-color:#CECECE;color:#FFF;width:33%;height:28px;border:1px solid #FFF;">Livraison</span><span class="gras" style="display:inline-block;margin:0;text-align:center;background-color:#CECECE;color:#FFF;width:33%;height:28px;">Paiement</span>
</div>
<div style="clear:both"></div>
<div class="gras" style="padding:8px 0;margin:8px auto;text-align:center;border:1px solid #DE1482;background-color:#DE1482;width:99%;"><a href="livraison.php" style="display:block;color:#FFF;">VALIDER MON PANIER &gt;&gt;</a></div>
<div class="gras" style="padding:8px 0;margin:8px auto;text-align:center;border:1px solid #CECECE;background-color:#CECECE;width:99%;"><a href="boutique-en-ligne/" style="display:block;color:#FFF;">CONTINUER MON SHOPPING &gt;&gt;</a></div>
<?php
$total=0;
$panier1=mysqli_query($connectionbd,"SELECT * FROM panier WHERE (valide=0 OR valide=1) AND identifiant='$identifiant' AND txn_id='' ORDER BY id DESC");
while($panier=mysqli_fetch_array($panier1)){
extract($panier);
$photo=str_replace('petit','min',$image);
$refpanier=substr($code_produit,0,4);
$refpanier.=$id_article;
$sous_total=$prix*$quantite;
$total=$total+$sous_total;
//$poid_total=$poid_total+$poid;
?>
<div style="margin-left:8px;margin-bottom:8px;width:145px;height:194px;float:left;"><img src="<?php echo $photo; ?>" width="145px" height="194px"></div>
<div style="margin-left:8px;margin-bottom:8px;height:194px;float:left;">
<p class="gras"><?php echo ucfirst($code_produit); ?></p>
Ref. : <?php echo $refpanier; ?><br/>
Quantit&eacute; : <?php echo $quantite; ?><br/>
Taille : <?php echo $taille; ?><br/>
Prix unitaire : <?php echo $prix; ?> &euro;</br>
Sous total : <?php echo $sous_total; ?> &euro;</br>
</div>
<div style="clear:both;margin:8px auto;text-align:center;width:99%;border-bottom:1px solid #999;width:99%;">
<form id="modif-panier" action="modif-panier.php" method='post'>
<p>Taille:<select name="taille">
<option value="<?php echo $taille; ?>"><?php echo $taille; ?>
</select>
Quantit&eacute;:<select name="quantite">
<option value="<?php echo $quantite; ?>"><?php echo $quantite; ?>
<option value="">
<option value="1">1
<option value="2">2
<option value="3">3
<option value="4">4
</select>
<input name="modification" type="hidden" value="2">
<input name="id_article" type="hidden" value="<?php echo $id; ?>"></p>
<button style="margin:0 8px 8px 0" type="submitt">MODIFIER</button>
</form>
<form id="sup-panier" action="modif-panier.php" method='post'>
<p><input name="modification" type="hidden" value="1">
<input name="id_article" type="hidden" value="<?php echo $id; ?>"></p>
<button type="submitt">SUPPRIMER</button>
</form>
</div>
<?php }
if($total==0){echo'Votre panier est vide.';}
else{
$frais_port=round($total*0.1,2);
if($total>150){$frais_port=0;}
$prix_paie=$frais_port+$total;
?>
Total articles : <?php echo $total; ?> &euro;<br/>
Frais de port : <?php echo $frais_port; ?> &euro;<br/>
Total:  <?php echo $prix_paie; ?> &euro;<br/>
<?php } ?>
<div class="gras" style="padding:8px 0;margin:8px auto;text-align:center;border:1px solid #DE1482;background-color:#DE1482;width:99%;"><a href="livraison.php" style="display:block;color:#FFF;">VALIDER MON PANIER &gt;&gt;</a></div>
<div class="gras" style="padding:8px 0;margin:8px auto;text-align:center;border:1px solid #CECECE;background-color:#CECECE;width:99%;"><a href="boutique-en-ligne/" style="display:block;color:#FFF;">CONTINUER MON SHOPPING &gt;&gt;</a></div>
<?php include'php/bas.php'; ?>