<?php
include'php/mots-inerdits.php';
if(!isset($_POST['mail'])) { $reponse='le champs mail est vide'; }
if(!isset($_POST['sujet'])) { $reponse.='le champs sujet est vide'; } 
if(!isset($_POST['message'])) { $reponse.='le champs message est vide'; }
if(!isset($_POST['pseudo'])) { $reponse.='le champs nom est vide'; }

if(!preg_match("#^([a-zA-Z0-9_.\-]{0,100})@([a-zA-Z0-9_.\-]{0,100})([.]{0,1})([a-z]{0,4})$#",$_POST['mail'])) { $reponse.='votre mail n\'est pas du bon format'; }
if(!preg_match("#^([a-zA-Z0-9 �������������������������]{0,100})$#",$_POST['pseudo'])) { $reponse.='Le champs nom contient des characteres invalide'; }
if($reponse!=NULL) {
$reponse=str_replace(' ','+',$reponse);
header("location:contact.php?rep=$reponse");
exit();
}
$pseudo = $_POST['pseudo'];
$mail = $_POST['mail'];
$tel=preg_replace("#[^a-zA-Z0-9]#",' ',$_POST['tel']);
$sujet = preg_replace("#[^a-zA-Z0-9@�������������������������]#",' ',$_POST['sujet']);
$messag = "Tel : $tel
Nom : $pseudo
E-Mail : $mail
Sujet : $sujet
___________________________
";
$messa=preg_replace("#[^a-zA-Z0-9@�������������������������#]",' ',$_POST['message']);
$messa=preg_replace("#[@]#",'[at]',$messa);
$messag .= $messa;
$message = nl2br($messag);
$email = "admin@larosedelorient.com" ;
$entete .= "From: $pseudo<$mail>\r\n";
$entete .= "Reply-To: $mail\r\n";
//mail($email,$sujet, $message, "$entete");

header("location:contact.php?rep=message+envoyer");

exit();
?>
