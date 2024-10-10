<?php
include'php/mots-inerdits.php';
if(strlen($sql['id'])==0){
header('location:livraison.php');
exit();
}
$reponse='';
if(strlen($_POST['nom'])==0){$reponse.='Le+champs+nom+est+vide+br';}
if(strlen($_POST['prenom'])==0){$reponse.='Le+champs+prenom+est+vide+br';}
if(strlen($_POST['adresse'])==0){$reponse.='Le+champs+adresse+est+vide+br';}
if(strlen($_POST['code_postal'])==0){$reponse.='Le+champs+code+postal+est+vide+br';}
if(strlen($_POST['ville'])==0){$reponse.='Le+champs+ville+est+vide+br';}
if(strlen($_POST['pays'])==0){$reponse.='Le+champs+pays+est+vide+br';}
if(strlen($reponse)==0){$redirection='paiement.php';
$frais_port=$_POST['frais_port']
$raison_sociale=htmlentities($_POST['raison_sociale']);
$civil=htmlentities($_POST['civil']);
$nom=htmlentities($_POST['nom']);
$prenom=htmlentities($_POST['prenom']);
$adresse=htmlentities($_POST['adresse']);
$code_postal=htmlentities($_POST['code_postal']);
$ville=htmlentities($_POST['ville']);
$pays=htmlentities($_POST['pays']);
$raison_sociale=str_replace("'",'&#039;',$raison_sociale);
$civil=str_replace("'",'&#039;',$civil);
$nom=str_replace("'",'&#039;',$nom);
$prenom=str_replace("'",'&#039;',$prenom);
$adresse=str_replace("'",'&#039;',$adresse);
$code_postal=str_replace("'",'&#039;',$code_postal);
$ville=str_replace("'",'&#039;',$ville);
$pays=str_replace("'",'&#039;',$pays);
$choix=rand(0,34);
$tableau=array(6,'A','B',2,'C','D',1,'E','F','G',9,'H','I','J','K','L',7,'M','N',4,'O','P','Q','R','S',8,'T','U','V',3,'W','X','Y','Z',5);
$txn_id=$tableau[$choix];
$tableau1=array(6,'A','B',2,'C','D',1,'E','F','G',9,'H','I','J','K','L',7,'M',0,'N',4,'O','P','Q','R','S',8,'T','U','V',3,'W','X','Y','Z',5);
for($i=0;$i<18;$i++){
$choix=rand(0,35);
$txn_id.=$tableau1[$choix];
}
//echo $txn_id;exit();
mysqli_query($connectionbd,"INSERT INTO facture (id_client,boutique,frais_port,raison_sociale,civil,nom,prenom,adresse,code_postal,ville,pays,txn_id,colis,dateenvoie)VALUES ('".$sql['id']."','0','$frais_port','$raison_sociale','$civil','$nom','$prenom','$adresse','$code_postal','$ville','$pays','$txn_id','','')") or die(header("location:$redirection");

$redirection.="?txn_id=$txn_id";
header("location:$redirection");

//


}else{$redirection='livraison.php?reponse='.$reponse;}

?>
