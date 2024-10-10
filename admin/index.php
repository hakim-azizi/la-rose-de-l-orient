<?php
if(isset(@$_POST['pass']) || isset(@$_POST['login'])) { 
$message="quelqu'un a tenté de violer l'espace admin
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
PHP_SELF: ".$_SERVER["PHP_SELF"]."
REQUEST_TIME: ".$_SERVER["REQUEST_TIME"]."
";
// mail("admin <admin@larosedelorient.com>","tentative de penetration section interdite",$message,"From:securité <securite@larosedelorient.com>")
?>
Votre ip ne fait pas partie de celle du personnel de la rose de l&#039;orient  !!! <?php } else{ ?>
<form action="" method="post">
login:<input name="login">pass:<input name="pass">
<button type="submit">envoyer</button>
</form>
<?php } ?>
