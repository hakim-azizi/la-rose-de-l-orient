<?php
include'php/mots-inerdits.php';
if($sql['id']==NULL OR $_COOKIE['identifiant']==NULL OR $_POST['item_number']==NULL){echo'erreur inconnu<br/><a href="contact.php">merci de contacter un administrateur</a>.</br>';exit();}
$_COOKIE['identifiant']="";
$txn_id=$_POST['item_number'];
$total=0;
$commande1=mysqli_query($connectionbd,"SELECT * FROM panier WHERE txn_id='$txn_id'");
while($commande=mysqli_fetch_array($commande1)){
extract($commande);
$sous_total=$prix*$quantite;
$total=$total+$sous_total;
}
$frais_port=round($total*0.1,2);
$prix_paie=$total+$frais_port;
$titre_page="Votre commande &agrave; bien &eacute;t&eacute; enregistr&eacute;.";
$description_page="";
$mot_cle_page="";
include'php/haut.php'; ?>
<h2>Nous vous remercions pour votre confiance et votre fid&eacute;lit&eacute;.</h2>
Votre numéro de commande est le: <b><?php echo $txn_id; ?></b>.<br/>
Le montant de vos achats s&#039;&eacute;l&egrave;ve &agrave; <b><?php echo $total; ?> </b><br/>
les frais de port pour cette commande s&#039;&eacute;l&egrave;ve &agrave; <b><?php if($total>149.99){ ?>frais de port offert.<?php }else{echo $frais_port;} ?> &euro;</b>.<br/>
Le Total pour cette commande s&#039;&eacute;l&egrave;ve &agrave; <b><?php if($total>149.99){ echo $total; }else{echo $prix_paie;} ?>&euro;</b>.<br/>
<?php include'php/bas.php'; ?>