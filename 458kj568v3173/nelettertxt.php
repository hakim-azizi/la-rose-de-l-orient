<?php

require("connectionbd.php");
mysql_connect($server,$user,$pass);
mysql_select_db($dbase);
$page=intval($_GET['page']);
if($page<1) { $page=1; }
$page1=$page*25;
$page1=$page1-25;
echo"$page1<br><br>";
$nb1=mysql_query("SELECT COUNT(*) FROM email") OR die(mysql_error());
$nb2=mysql_fetch_assoc($nb1);
$nb=ceil($nb2['COUNT(*)']/25);
for($i=0; $i<$nb; $i++)
{
$page2=$i+1;
if($page2==$page) { echo'<b>Page '.$page2.'</b> '; } else {  if($page > $page2) {} else { echo'<a href="neletter.php?page='.$page2.'">Page '.$page2.'</a> '; }}}
echo'<br><br><br>';
$entete = "From: la rose de l'orient <no-reply@easy-cash-ptp.net>";

		  $mail1=mysql_query("SELECT mail FROM email LIMIT $page1 , 25");
		  while($mail2=mysql_fetch_assoc($mail1))
           {
extract($mail2);
$sujet = "News: la rose de l'orient";
$message = "La rose de l'orient fait peau neuve après une mise a jours la rose de l'orient vous propose de nouvelles robes et de nouveaux accessoires.
Pour vos soirées, fiançailles, ou tout simplement pour vos sorties, ou la maison nous avons ce qu'il vous faut.
Venez au fil des pages du site vous y trouverez certainement votre bonheur.
Si vous ne le trouvez pas n'hésitez envoyez nous un mail avec votre requête nous y répondront dans les plus bref délai.

Au programme:
-caftan a partir de 90€
Lien direct sur les caftans:
http://www.larosedelorient.com/t-vetements-caftan-page-1.php
-actuellement certains articles sont en soldes.
nous venons d'ajouter une selection de robes de soirée à des prix vraiment fou d'une très grande qualité.
Vous ne trouverez pas moins cher avec une si grande qualité.
N'hesitez pas il n'y en aura pas pour tout le monde.


http://www.larosedelorient.com

Ce message n'est pas du Spam si vous le recevez c'est que vous avez accepté de recevoir nos news letters.
Pour ne plus recevoir de news letters cliquez sur le lien ci dessous. Ou copier coller l'url dans votre navigateur.
http://www.easy-cash-ptp.net/news-letter.php?del=$mail

";
echo"$mail";
mail($mail, $sujet, $message, $entete);
echo"
le mail &agrave; &eacute;t&eacute; envoyé &agrave; :$mail: <br><br>";
		   }

$page6=$page+1;
if($page6 <= $nb)
{ ?>
<script>
var sec=5;
secund();
function secund()
{
sec--;
if(sec==0) document.location.href="nelettertxt.php?page=<?php echo"$page6"; ?>";
setTimeout('secund()',1000);
}
</script>
<?php }
?>
</td>
</tr>
</table>