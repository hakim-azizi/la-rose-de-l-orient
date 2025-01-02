<?php
$url_demande=$_SERVER["REQUEST_URI"];
if(strstr($url_demande,'mots-interdits.php')){include'404.php';}
$url_reel=$_SERVER["PHP_SELF"];
header('Content-type: text/html; charset=utf-8');
if(preg_match("#html\?#",$url_demande)){
$url=preg_replace("#\?.*#","",$url_demande);
header("Status: 301 Moved Permanently", false, 301);
header("Location:$url");exit();}
$methode="methode: ";
$mot=array('drop','(@q)','input','<?php','$sql','delete','truncate','database','mysql','include','md5(','extract(','open(','server','phpinfo','<script','src','</script>','<?','?>','<!','!>','openssl','opendir'); 
foreach($_GET as $var)
{
$entree=str_replace(' ','',strtolower($var)); 
$recherche=str_replace($mot,'',$entree);
if(strlen($recherche)!=strlen($entree)){ $var=htmlentities($var); $methode.="GET : $var
";
$var==NULL; }
}
foreach($_POST as $var)
{
$entree=str_replace(' ','',strtolower($var)); 
$recherche=str_replace($mot,'',$entree);
if(strlen($recherche)!=strlen($entree)){ $var=htmlentities($var); $methode.="POST : $var
";
$var==NULL; }
}
foreach($_COOKIE as $var)
{
if($var=='NEWWND=0&ADLT=OFF&NRSLT=50&SRCHLANG=fr'){}else{
$entree=str_replace(' ','',strtolower($var)); 
$recherche=str_replace($mot,'',$entree);
if(strlen($recherche)!=strlen($entree)){ $var=htmlentities($var); $methode.="COOKIE : $var
";
$var==NULL; }}
}
if($methode!="methode: ")
{
$message="quelqu'un a entrée des charactere interdit sur le larosedelorient
$methode
SERVER_SIGNATURE: ".$_SERVER["SERVER_SIGNATURE"]."  
UNIQUE_ID: ".$_SERVER["UNIQUE_ID"]."
HTTP_USER_AGENT: ".$_SERVER["HTTP_USER_AGENT"]."
SERVER_PORT: ".$_SERVER["SERVER_PORT"]." 
HTTP_HOST: ".$_SERVER["HTTP_HOST"]."
LC_ALL: ".$_SERVER["LC_ALL"]."
REDIRECT_HANDLER: ".$_SERVER["REDIRECT_HANDLER"]."
DOCUMENT_ROOT: ".$_SERVER["DOCUMENT_ROOT"]."
SCRIPT_FILENAME: ".$_SERVER["SCRIPT_FILENAME"]."
REQUEST_URI: ".$_SERVER["REQUEST_URI"]."
SCRIPT_NAME: ".$_SERVER["SCRIPT_NAME"]."
HTTP_CONNECTION: ".$_SERVER["HTTP_CONNECTION"]."
PATH_INFO: ".$_SERVER["PATH_INFO"]."
REMOTE_PORT: ".$_SERVER["REMOTE_PORT"]."
PATH: ".$_SERVER["PATH"]." 
PWD: ".$_SERVER["PWD"]." 
SERVER_ADMIN: ".$_SERVER["SERVER_ADMIN"]."
LANG: ".$_SERVER["LANG"]."
REDIRECT_STATUS: ".$_SERVER["REDIRECT_STATUS"]." 
HTTP_ACCEPT_LANGUAGE: ".$_SERVER["HTTP_ACCEPT_LANGUAGE"]."
PATH_TRANSLATED: ".$_SERVER["PATH_TRANSLATED"]." 
HTTP_ACCEPT: ".$_SERVER["HTTP_ACCEPT"]."
REMOTE_ADDR: ".$_SERVER["REMOTE_ADDR"]." 
SHLVL: ".$_SERVER["SHLVL"]."
SERVER_NAME: ".$_SERVER["SERVER_NAME"]." 
LANGUAGE: ".$_SERVER["LANGUAGE"]."
HTTP_UA_CPU: ".$_SERVER["HTTP_UA_CPU"]."
SERVER_SOFTWARE: ".$_SERVER["SERVER_SOFTWARE"]."
QUERY_STRING: ".$_SERVER["QUERY_STRING"]."
SERVER_ADDR: ".$_SERVER["SERVER_ADDR"]."
GATEWAY_INTERFACE: ".$_SERVER["GATEWAY_INTERFACE"]."
SERVER_PROTOCOL: ".$_SERVER["SERVER_PROTOCOL"]."
HTTP_ACCEPT_ENCODING: ".$_SERVER["HTTP_ACCEPT_ENCODING"]." 
REDIRECT_URL: ".$_SERVER["REDIRECT_URL"]."
REQUEST_METHOD: ".$_SERVER["REQUEST_METHOD"]." 
_: ".$_SERVER["_"]."
ORIG_SCRIPT_FILENAME: ".$_SERVER["ORIG_SCRIPT_FILENAME"]."
ORIG_PATH_TRANSLATED: ".$_SERVER["ORIG_PATH_TRANSLATED"]."
ORIG_PATH_TRANSLATED: ".$_SERVER["ORIG_SCRIPT_NAME"]."
PHP_SELF: ".$url_reel."
REQUEST_TIME: ".$_SERVER["REQUEST_TIME"]."
";
mail("admin <admin@larosedelorient.com>","tentative de hacking",$message,"From:securité<securité@larosedelorient.com>");
echo'Erreur innattendue :<br>Videz vos cookies et actualisez la page.<br>si le problème persiste merci de contacter l&#039;administrateur au<br>France :<br>Tel. 09-54-27-88-12.<br>port. 06-66-41-97-34.<br>&eacute;tranger<br>Tel. 00-33-954-278-812.<br>port. 00-33-666-419-734.<br> ou encore par mail &agrave; l&#039;adresse erreur@larosedelorient.com';exit();
 }
$entree=NULL; $Recherche=NULL;$methode==NULL;
if($_SERVER['SERVER_NAME']!="robedelorient.com"){
if($_SERVER['SERVER_NAME']=="www.robedelorient.com"){
header("Status:301 Moved Permanently", false, 301);
header("location:https://robedelorient.com".$_SERVER["REQUEST_URI"]."");
exit();
}
$connectionbd=mysqli_connect("localhost","root","20-Juillet-1976","hakazizi_3");
}else{
$connectionbd=mysqli_connect("db5015774276.hosting-data.io","dbu4967514","20-Juillet-1976" ,"dbs12868975");
}
//récupération de l'IP
if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
elseif(isset($_SERVER['HTTP_CLIENT_IP'])) {
  $ip  = $_SERVER['HTTP_CLIENT_IP'];
}
else {
  $ip = $_SERVER['REMOTE_ADDR'];
}
$boutique=intval(@$_GET['affilier']);
if (isset($_COOKIE['con']) && is_string($_COOKIE['con']) && preg_match("@^([0-9]{25})$@", $_COOKIE['con']))
{
$con=$_COOKIE['con'];
$sql1=mysqli_query($connectionbd,"SELECT * FROM client WHERE con = '$con'");
$sql=mysqli_fetch_array($sql1);
$nom=$sql['nom'];
$idclient=$sql['id'];
}
if(@$idclient==172){echo'<h1>va te faire enculer !!!.</h1>';exit();}
@$date=date("d m Y");
?>