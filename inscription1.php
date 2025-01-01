<?php
include'php/mots-inerdits.php';
if(!isset($_POST['mail'])){$reponse="le+champ+mail+est+vide";}
if(!isset($_POST['pass'])){$reponse.="+le+champ+mot+de+passe+est+vide";}
if(!isset($_POST['vpass'])){$reponse.="+le+champ+verification+du+mot+de+passe+est+vide";}
if(!isset($_POST['civil'])){$reponse.="+le+champ+civilite+est+vide";}
if(!isset($_POST['nom'])){$reponse.="+le+champ+nom+est+vide";}
if(!isset($_POST['prenom'])){$reponse.="+le+champ+prenom+est+vide";}
if(!isset($_POST['adresse'])){$reponse.="+le+champ+adresse+vide";}
if(!isset($_POST['cp'])){$reponse.="+le+champ+code+postal+est+vide";}
if(!isset($_POST['ville'])){$reponse.="+le+champ+ville+est+vide";}
if(!isset($_POST['pays'])){$reponse.="+vous+n'avez+pas+selectionne+votre+pays";}
if(!isset($_POST['nl'])){$reponse.="ERREUR+merci+de+contacter+un+administrateur";}
if(isset($reponse))
{header("location:inscription.php?rep=$reponse");exit();}
if(!preg_match("#^([a-zA-Z0-9_.\-]{0,100})@([a-zA-Z0-9_.\-]{0,100})([.]{0,1})([a-z]{0,4})$#",$_POST['mail']))
//if(!preg_match("#^([a-zA-Z0-9_.\-]{0,100})@([a-zA-Z0-9_.\-]{0,100})([.]{0,1})([a-z]{0,4})$#",$_POST['mail'])){$reponse="votre+mail+n'est+pas+du+bon+format";}
if(!preg_match("#^([a-zA-Z0-9_.\-]{0,100})$#",$_POST['pass'])){$reponse.="+votre+mot+de+passe+comporte+des+characteres+invalide";}
if(!preg_match("#^([a-zA-Z0-9_.\-]{0,100})$#",$_POST['vpass'])){$reponse.="la+verification+du+mot+de+passe+comporte+des+characteres+invalide";}
$mail=$_POST['mail'];
$civil=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['civil']);
$nom=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['nom']);
$prenom=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['prenom']);
$adresse=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['adresse']);
$cp=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['cp']);
$ville=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['ville']);
$pays=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['pays']);
$nl=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['nl']);
$tel=preg_replace("#[^a-zA-Z0-9 ��������������������������]#",' ',$_POST['tel']);
if($mail==''){$reponse.="+le+champ+mail+est+vide";}
if($civil==1){$reponse.="+vous+n'avez+pas+selectionne+votre+civilite";}
if($nom==''){$reponse.="+le+champ+nom+est+vide";}
if($prenom==''){$reponse.="+le+champ+prenom+est+vide";}
if($adresse==''){$reponse.="+le+champ+adresse+vide";}
if($cp==''){$reponse.="+le+champ+code+postal+est+vide";}
if($ville==''){$reponse.="+le+champ+ville+est+vide";}
if($pays==1){$reponse.="+vous+n'avez+pas+selectionne+votre+pays";}
$vpass=$_POST['vpass'];
$pass=$_POST['pass'];
if($pass!=$vpass) {$reponse.='Votre+mot+de+passe+est+differend+de+la+confirmation';}
if($reponse!=NULL){header("location:inscription.php?rep=$reponse");exit();}else{
//r�cup�ration de l'IP
if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];}
elseif(isset($_SERVER['HTTP_CLIENT_IP'])){$ip  = $_SERVER['HTTP_CLIENT_IP'];}
else {$ip = $_SERVER['REMOTE_ADDR'];}
$mdp=$pass;
$pass=md5("$pass");
$rand = rand(1,9);
for($i=0; $i<24; $i++) { $rand1=rand(0,9); $rand="$rand$rand1"; }
$con =$rand;
if($nl=='oui'){$maile=md5($mail);mysqli_query($connectionbd,"INSERT INTO nl (mail,delmail) VALUES ('$mail','$maile')");}
mysqli_query($connectionbd,"INSERT INTO client (con,pass,civil,nom,prenom,adresse,code_postal,ville,pays,mail,tel) VALUE ('$con','$pass','$civil','$nom','$prenom','$adresse','$cp','$ville','$pays','$mail','$tel')") OR die(header("location:inscription.php?rep=Cette+adresse+mail+est+deja+utilis�+merci+d'en+utiliser+une+autre"));
setcookie("con",$con,"0","/");
$message="Vous venez de vous inscrire en tant que client sur le site sur le site la rose de l'orient.
Nous nous r�jouissons de vous compter parmi notre aimable client�le.
Rappelle de vos identifiant:
Login: $mail
Mot de passe: $mdp

En vous remerciant de l'int�r�t que vous portez � la rose de l'orient.
Hakim AZIZI
";
//mail($mail,"Confirmation d'inscription a la rose de l'orient",$message,"FROM: la rose de l'orient <admin@larosedelorient.com>");
header("location:livraison.php");}?>