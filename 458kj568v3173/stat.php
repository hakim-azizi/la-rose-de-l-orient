<?php
require'connectionbd.php'; ?>
total
<table border=1 bordercolor=black>
<tr>
<td>heure</td>
<td>nombre de visite</td>
</tr>
<?php
$nombre_visite=0;
$nbvis=0;
$heure='p';
$stat1=mysqli_query($connectionbd,"SELECT * FROM stat ORDER BY heure") OR die('error');
while($stat=mysqli_fetch_array($stat1))
{
if($heure=='00'){$heure=24;}
if($heure!='p'){$heur=$heure;}
$nbvis=$nombre_visite;
extract($stat);
if($heure=='00'){$heure=24;}
$nombre_visite=$nombre_visite+$nbvis;
if($heure==$heur){
if($heure==24){$heure='00';}
echo"
<tr>
<td>$heure</td>
<td>$nombre_visite</td>
</tr>"; $nombre_visite=0;}
}
echo"
<tr>
<td>$heure</td>
<td>$nombre_visite</td>
</tr>"; 
$heur='p'; $nbvis=0;
?>

</table>
jour par jour
<table border=1 bordercolor=black>
<tr>
<td>jour</td>
<td>heure</td>
<td>nombre de visite</td>
</tr>
<?php
$stat1=mysqli_query($connectionbd,("SELECT * FROM stat");
while($stat=mysqli_fetch_array($stat1))
{
extract($stat);
echo"<tr>
<td>$date</td>
<td>$heure</td>
<td>$nombre_visite</td>
</tr>";
}
?>
</table>