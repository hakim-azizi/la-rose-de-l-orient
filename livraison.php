<?php
include'php/mots-inerdits.php';
$article1=mysqli_query($connectionbd,"SELECT id,code_produit,grande_image,description,prix,stock FROM produit WHERE stock>0 ORDER BY RAND() LIMIT 4");
$titre_page="Adresse de Livraison";
$description_page="";
$mot_cle_page="";
include'php/haut.php'; ?>
<div style="text-align:center">
<span class="gras" style="display:inline-block;margin:0;text-align:center;background-color:#CECECE;color:#FFF;width:33%;height:28px;">Panier</span><span class="gras" style="display:inline-block;margin:0;text-align:center;background-color:#000;color:#FFF;width:33%;height:28px;border:1px solid #FFF;">Livraison</span><span class="gras" style="display:inline-block;margin:0;text-align:center;background-color:#CECECE;color:#FFF;width:33%;height:28px;">Paiement</span>
</div>
<?php if(strlen($idclient)==0){ ?>
<div style="margin:0 auto;width:70%">
<p class="gras">D&eacute;j&agrave; client ?</p>
<form action="connexion1.php" method="post">
<p><input name="mail" style="margin:8px 0;width:100%;height:36px"/></p>
<p><input name="pass" style="margin:8px 0;width:100%;height:36px"/></p>
<p style="text-align:right">mot de passe oubli&eacute;</p>
<p><button type="submit" style="width:100%;height:42px;">ME CONNECTER</button></p>
</form><br/>
<p>Nouveau client ?</p>
<p style="width:100%;height:42px;line-height:42px;text-align:center;background-color:#d7d7d7"><a href="inscription.php" style="display:block;width:100%;height:100%;color:#FFF">CR&Eacute;ER MON COMPTE</a></p> 
</div>
<?php }else{ ?>
<p class="gras">Verifiez vos information de livraison</p>
<p class="gras" style="color:red">
<?php 
if(strlen(@$_GET['reponse'])!=0){
echo ''.str_replace(array(' br','ee','lurl'),array('<br/>','&eacute;e','l&#039;url'),$_GET['reponse']);} ?>
</p>
<form action="livraison1.php" method="post">
<p class="gros"><span>raison social (facultatif):</span><input name="raison_sociale"/></p>
<p class="gros"><span>civilit&eacute;:</span><input name="civil" value="<?php echo $sql['civil']; ?>"/></p>
<p class="gros"><span>nom:</span><input name="nom" value="<?php echo $sql['nom']; ?>"/></p>
<p class="gros"><span>prenom:</span><input name="prenom" value="<?php echo $sql['prenom']; ?>"/></p>
<p class="gros"><span>adresse:</span><input name="adresse" value="<?php echo $sql['adresse']; ?>"/></p>
<p class="gros"><span>code postal:</span><input name="code_postal" value="<?php echo $sql['code_postal']; ?>"/></p>
<p class="gros"><span>ville:</span><input name="ville" value="<?php echo $sql['ville']; ?>"/></p>
<p class="gros"><span>pays:</span><?php echo $sql['pays']; ?></p>
<p><input type="hidden" name="pays" value="<?php echo $sql['pays']; ?>"/></p>
<p><input type="hidden" name="frais_port" value="<?php echo $frais_port; ?>"/></p>

<button type="submit">ENREGISTRER LES INFORMATIONS</button></p>
</form>
<?php
mysqli_query($connectionbd,"UPDATE panier SET id_client='".$sql['id']."' WHERE identifiant='$identifiant'");
} include'php/bas.php'; ?>