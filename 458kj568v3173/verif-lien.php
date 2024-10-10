<?php require("connectionbd.php"); 
$verlien1=mysqli_query($connectionbd,"SELECT * FROM partenaire WHERE valide=2");
while($verlien=mysqli_fetch_array($verlien1)) {
extract($verlien); ?>
<br><?php echo"$partenaire"; ?>
$partenaire=str_replace('"','',$partenaire);
<form action="verif-lien1.php" method="post">
<input name="url" type="hidden" value="<?php echo"$url"; ?>">
<input name="mail" type="hidden" value="<?php echo"$mail"; ?>">
<input name="partenaire" type="hidden" value="<?php echo"$partenaire"; ?>">
<select name="val">
<option value="1">en attente</option>
<option value="2">valider</option>
<option value="3">supprimer</option>
</select>
<input type="submit" value="envoyer">
</form>
<br>
<?php
}
?>

</td>
</tr>
</table>