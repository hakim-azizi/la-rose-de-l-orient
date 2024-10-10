<?php
include'php/mots-inerdits.php';
$prov=intval(@$_POST['prov']);
if(strlen(@$_POST['mail'])==0){$reponse="le+champ+mail+est+vide";}
if(strlen(@$_POST['pass'])==0){@$reponse.="+le+champ+mot+de+passe+est+vide";}
if(strlen(@$reponse)==0){
if(!preg_match("#^([a-zA-Z0-9_.\-]{0,100})@([a-zA-Z0-9_.\-]{0,100})([.]{0,1})([a-z]{0,4})$#",$_POST['mail'])) { $reponse="votre+mail+n'est+pas+du+bon+format";} 
if(!preg_match("#^([a-zA-Z0-9_.\-]{0,100})$#",$_POST['pass'])){@$reponse.="+votre+mot+de+passe+comporte+des+characteres+invalide";}
if(strlen(@$reponse)==0){
$mail=$_POST['mail'];
$pass=md5($_POST['pass']);
$id2=mysqli_fetch_array(mysqli_query($connectionbd,"SELECT er_con,ver_con,pass FROM client WHERE mail='$mail'"));
$vpass=$id2['pass'];
$nbcon = $id2['er_con'];
$vercon = time();
$vercon1 = $vercon-300;
$vercon2 = $id2['ver_con'];
if($nbcon > 3)
{
if($vercon2 >= $vercon1)
{
$compteur = $vercon2-$vercon1;
if(@$sec < '10')
{ @$sec = "0$sec2"; } ?>
<?php include("php/haut.php"); ?>
Vous avez entr&eacute;e 3 code eronn&eacute;, par mesure de securit&eacute; votre compte &agrave; &eacute;t&eacute; bloqu&eacute; pour 5 minutes.<br />
<span id="compteur_temps"></span>
<script type="text/javascript">
<!--
secund();
var sec=<?php echo $compteur; ?>;
var second=5;
function secund()
{
var min=Math.floor(sec/60);
var seconde=sec-(min*60);
if(sec<60){min=0;}
if(sec<1){seconde=0;
if(sec<(-4)){window.location.href='connexion.php';}
document.getElementById('compteur_temps').innerHTML=('si vousn&#039;&ecirc;te pas redirig&eacute; vers la page de connexion dans : '+second+' sec<br/><a href="connexion.php">cliquer ici</a>');
second=second-1;
}
else{
document.getElementById('compteur_temps').innerHTML=('Vous pourrez vous reconnecter dans : '+min+' min : '+seconde+' sec');
}
sec=sec-1;
/* document.write('<span>'+sec+'</span>'); */
/* getElementById('compteur_temps').write('<span>'+sec+'</span>'); */
/* getElementById('compteur_temps').innerHTML('<span>'+sec+'</span>'); */
setTimeout('secund()',1000);
}
//-->
</script>
<?php
include("php/bas.php");
exit();
}}
if($pass!=$vpass) // on verifie que le mail entrée et le pass correspondent
{
$reponse="votre+mail+ou+votre+mots+de+passe+sont+invalide";
mysqli_query($connectionbd,"UPDATE client SET er_con = er_con+1,ver_con='$vercon' WHERE mail='$mail'") OR die(mysql_error()); 
}
else //si tout est bon on connect
{
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
$rand = rand(1,9);
for($i=0; $i<24; $i++) { $rand1=rand(0,9); $rand="$rand$rand1"; }
$con =$rand;
setcookie("con",$con,"0","/");
mysqli_query($connectionbd,"UPDATE client SET con='$con',er_con=0,ip='$ip' WHERE mail='$mail'") OR die(mysql_error());
if($prov==1){$redirec='./';}else{$redirec='livraison.php';}
}}}
if(strlen(@$reponse)==0){header("location:$redirec");}else{header("location:connexion.php?rep=$reponse&prov=$prov");} ?>