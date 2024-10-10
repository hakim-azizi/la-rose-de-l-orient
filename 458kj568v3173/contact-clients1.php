<?php require("connectionbd.php");
$message = $_POST['message'];
$sujet = $_POST['sujet']; 
if($sujet != NULL AND $message != NULL)
	     {
		  $maile = mysqli_query($connectionbd,"SELECT * FROM client");
		  while($mail = mysqli_fetch_array($maile))
           {
		   $toutMembre = $mail['mail']; 
		   $entete = "From: admin@robedelorient.com";		  
	           //mail($toutMembre, $sujet, $message, $entete);
echo"le mail a ete envoyé à ".$toutMembre."";
		   }
		   }
		   else{
		   echo'ERREUR !';
} 

?>
</td>
</tr>
</table>