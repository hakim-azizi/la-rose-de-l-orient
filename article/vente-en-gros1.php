<?php
include'php/mots-inerdits.php';
if(!isset($_POST['nom'])) { $reponse.="le+champ+nom+est+vide+"; }
if(!isset($_POST['mail'])) { $reponse.="le+champ+mail+est+vide+"; }
if(!isset($_POST['tel'])) { $reponse.="le+champ+tel+est+vide+"; }
if(!isset($_POST['adresse'])) { $reponse.="le+champ+adresse+est+vide+"; }
if(!isset($_POST['cp'])) { $reponse.="le+champ+cp+est+vide+"; }
if(!isset($_POST['ville'])) { $reponse.="le+champ+ville+est+vide+"; }
if(!isset($_POST['pays'])) { $reponse.="le+champ+pays+est+vide+"; }
if(!isset($_POST['ref'])) { $reponse.="le+champ+ref+est+vide+"; }
if(!isset($_POST['quantite'])) { $reponse.="le+champ+quantite+est+vide+"; }
if(!isset($_POST['message'])) { $reponse.="le+champ+message+est+vide+"; }
$quantite=intval($_POST["quantite"]);
$quantite1=intval($_POST["quantite1"]);
$quantite2=intval($_POST["quantite2"]);
$quantite3=intval($_POST["quantite3"]);
$quantite4=intval($_POST["quantite4"]);
$quantitete=$quantite+$quantite1+$quantite2+$quantite3+$quantite4;
if($quantitete<5){$reponse.='les+quantites+sont+inferieur+a+5+';}


if(!preg_match("#^([a-zA-Z0-9_.\-]{0,100})@([a-zA-Z0-9_.\-]{0,100})([.]{0,1})([a-z]{0,4})$#",$_POST['mail'])){ $reponse.="votre+mail+n+est+pas+du+bon+format+";}else{$mail=$_POST["mail"];}


$prenom=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['prenom']);


$nom=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['nom']);


$civil=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['civil']);


$tel=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['tel']);


$adresse=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['adresse']);


$cp=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['cp']);


$ville=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['ville']);


$pays=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['pays']);


$ref=preg_replace("#[^a-zA-Z0-9]#",'',$_POST['ref']);


$ref1=preg_replace("#[^a-zA-Z0-9]#",'',$_POST['ref1']);


$ref2=preg_replace("#[^a-zA-Z0-9]#",'',$_POST['ref2']);


$ref3=preg_replace("#[^a-zA-Z0-9]#",'',$_POST['ref3']);


$ref4=preg_replace("#[^a-zA-Z0-9]#",'',$_POST['ref4']);
//if($civil!='Mme' OR $civil!='Mlle' OR $civil!='Mr'){$reponse.='Vous+n+avez+pas+selectionne+votre+civilite';}
if($prenom=='' OR $prenom==' '){$reponse.='le+champs+prenom+est+vide+';}
if($nom=='' OR $nom==' '){$reponse.='le+champs+nom+est+vide+';}
if($tel=='' OR $tel==' '){$reponse.='le+champs+tel+est+vide+';}
if($adresse=='' OR $adresse==' '){$reponse.='le+champs+adresse+est+vide+';}
if($cp=='' OR $cp==' '){$reponse.='le+champs+code+postal+est+vide+';}
if($ville=='' OR $ville==' '){$reponse.='le+champs+ville+est+vide+';}
if($pays=='' OR $pays==' '){$reponse.='le+champs+pays+est+vide+';}


if($reponse!=NULL){header("location:vente-en-gros.php?reponse=$reponse");exit();}
$sujet="une demande de commande en gros a �t� effectu� sur la rose de l orient";
$message="$civil $nom $prenom
$adresse
$cp $ville
$pays
mail: $mail
tel: $tel

reference: $ref quantit�: $quantite
reference1: $ref1 quantit�: $quantite1
reference2: $ref2 quantit�: $quantite2
reference3: $ref3 quantit�: $quantite3
reference4: $ref4 quantit�: $quantite4
________________________
";
$message.=htmlentities(htmlspecialchars($_POST['message']));
$message=nl2br($message);
$email = "admin@larosedelorient.com" ;
$entete .= "From: $nom<$mail>\r\n";
$entete .= "MIME-version: 1.0\n";
$entete .= "Content-type: text/html; charset= iso-8859-1\n";
$entete .= "Reply-To: $mail\r\n";
// mail($email,$sujet,$message,$entete);
$message="Ce mail est une copie de la demande de vente en gros que vous avez effectu� sur le site la rose de l'orient<br />
________________________<br />
$message";
$email = $mail;
$entete .= "From: La rose de l orient<admin@larosedelorient.com>\r\n";
$entete .= "MIME-version: 1.0\n";
$entete .= "Content-type: text/html; charset= iso-8859-1\n";
$entete .= "Reply-To: admin@larosedelorient.com\r\n";
// mail($mail,$sujet,$message,"$entete");
header("location:vente-en-gros.php?reponse=la+demande+de+vente+en+gros+a+bien+ete+envoye");exit();
?>
