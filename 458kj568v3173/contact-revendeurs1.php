<?php require("connectionbd.php");
$message = $_POST['message'];
$sujet = $_POST['sujet']; 
if($sujet != NULL AND $message != NULL)
	     {
		  $maile = mysqli_query($connectionbd,"SELECT * FROM revendeur");
		  while($mail = mysqli_fetch_array($maile))
           {
		   $toutMembre = $mail['mail']; 
		   $entete = "From: admin@larosedelorient.com";		  
	           //mail($toutMembre, $sujet, $message, $entete);
echo"le mail a ete envoy� � ".$toutMembre."";
		   }
		   }
		   else{
		   echo'ERREUR !';
} 

?>
</td>
</tr>
</table>