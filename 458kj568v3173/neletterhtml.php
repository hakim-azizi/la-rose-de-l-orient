<?php

require"connectionbd.php";
$page=intval($_GET['page']);
if($page<1) { $page=1; }
$page1=$page*25;
$page1=$page1-25;
echo"$page1<br><br>";
$nb1=mysqli_query($connectionbd,"SELECT COUNT(*) FROM email") OR die('error');
$nb2=mysqli_fetch_array($nb1);
$nb=ceil($nb2['COUNT(*)']/25);
for($i=0; $i<$nb; $i++)
{
$page2=$i+1;
if($page2==$page) { echo'<b>Page '.$page2.'</b> '; } else {  if($page > $page2) {} else { echo'<a href="neletter.php?page='.$page2.'">Page '.$page2.'</a> '; }}}
echo'<br><br><br>';
$entete = "From: la rose de l'orient <no-reply@easy-cash-ptp.net>\n";
$entete .= "MIME-version: 1.0\n";
$entete .= "Content-type: text/html; charset= iso-8859-1\n";

		  $mail1=mysqli_query($connectionbd,"SELECT mail FROM email LIMIT $page1 , 25");
		  while($mail2=mysqli_fetch_array($mail1))
           {
extract($mail2);
$sujet = "News: la rose de l'orient";
$message = "<div align=center>
Si vous ne voyez pas ce mail convenablement merci de cliquez sur ce lien: <a href=http://www.easy-cash-ptp.net/newsletter.php?client=larosedelorient>http://www.easy-cash-ptp.net/newsletter.php?client=larosedelorient</a>


La rose de l'orient vous propose de nouveau article à prix toujours aussi bas et d'une excellente qualité.
Au programme caftan a partir de 90€
<a href=http://www.larosedelorient.com/t-vetements-caftan-page-1.php<img src=http://www.larosedelorient.com/images/vetement/caftan/caftan1.jpg border=0>
Lien direct sur les caftans: http://www.larosedelorient.com/t-vetements-caftan-page-1.php .</a>
Et plein d'autre robes et tenue traditionnelle.

Avec la rose de l'orient le conte des mille et une nuit ne sera plus un conte mais deviendra réalité.


<a href=http://www.larosedelorient.com>http://www.larosedelorient.com</a>


Ce message n'est pas du Spam si vous le recevez c'est que vous avez accepté de recevoir nos news letters.
Pour ne plus recevoir de news letters cliquez sur le lien ci dessous. Ou copier coller l'url dans votre navigateur.
<a href=http://www.easy-cash-ptp.net/news-letter.php?del=$mail>http://www.easy-cash-ptp.net/news-letter.php?del=$mail</a>
</div>
";
$message=nl2br($message);
echo"$mail";
//mail($mail, $sujet, $message, $entete);
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
if(sec==0) document.location.href="neletterhtml.php?page=<?php echo"$page6"; ?>";
setTimeout('secund()',1000);
}
</script>
<?php }
?>
</td>
</tr>
</table>
