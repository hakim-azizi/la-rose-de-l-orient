<?php require("connectionbd.php");
$membre1 = mysqli_query($connectionbd,"SELECT * FROM affilier");
while($sql=mysqli_fetch_array($membre1))
{
$id = $sql['id'];
$mail = $sql['mail']; 
$civil = $sql['civil'];
$prenom = $sql['prenom'];
$adresse = $sql['adresse'];
$cp = $sql['code_postal'];
$ville = $sql['ville'];
$pays = $sql['pays'];
$tel = $sql['tel'];
$nom = $sql['nom'];
?>
<p align="center" class="Style8"><strong>
<div align="center"> 
<form action="modifier-revendeur.php" method="post" name="info" id="info">
  <table width="400" border="1" align="center">
<tr class="Style8">
      <td><div align="center"><strong>id : </strong></div></td>
      <td align="right" class="Style8"><?php echo"$id"; ?></td>
    </tr>
<tr class="Style8">
      <td><div align="center"><strong>Changer votre Email : </strong></div></td>
      <td align="right" class="Style8"><input name="mail" type="text" class="Style8" id="mail" value="<?php echo"$mail"; ?>"/></td>
    </tr>
<tr class="Style8">
      <td><div align="center"><strong>Changer votre mot de passe : </strong></div></td>
      <td align="right" class="Style8"><input name="pass" type="password" class="Style8" id="pass" value=""/></td>
    </tr>
<tr class="Style8">
      <td><div align="center"><strong>verifier votre nouveau mot de passe : </strong></div></td>
      <td align="right" class="Style8"><input name="vpass" type="password" class="Style8" id="vpass" value=""/></td>
    </tr>
<tr class="Style8">
      <td><div align="center"><strong>Changer votre civilité Mr Mme Mlle : </strong></div></td>
      <td align="right" class="Style8"><select name="civil" id="civil"><?php if($civil==NULL OR $civil=='Mme') { ?>
<option value="Mme">Mme</option>
<option value="Mlle">Mlle</option>
<option value="Mr">Mr</option>

<?php } else { if($civil=='Mlle') { ?>

<option value="Mlle">Mlle</option>
<option value="Mr">Mr</option>
<option value="Mme">Mme</option>

<?php } if($civil=='Mr') { ?>

<option value="Mr">Mr</option>
<option value="Mme">Mme</option>
<option value="Mlle">Mlle</option><?php }} ?>
</select></td>
    </tr>
<tr class="Style8">
      <td><div align="center"><strong>Changer votre Nom : </strong></div></td>
      <td align="right" class="Style8"><input name="nom" type="text" class="Style8" id="nom" value="<?php echo"$nom"; ?>"/></td>
    </tr>
<tr class="Style8">
      <td><div align="center"><strong>Changer votre Prenom : </strong></div></td>
      <td align="right" class="Style8"><input name="prenom" type="text" class="Style8" id="prenom" value="<?php echo"$prenom"; ?>"/></td>
    </tr>
<tr class="Style8">
      <td><div align="center"><strong>Changer votre Adresse : </strong></div></td>
      <td align="right" class="Style8"><input name="adresse" type="texte" class="Style8" id="adresse" value="<?php echo"$adresse"; ?>"/></td>
    </tr>
<tr class="Style8">
      <td><div align="center"><strong>Changer votre Code postal : </strong></div></td>
      <td align="right" class="Style8"><input name="cp" type="text" class="Style8" id="cp" value="<?php echo"$cp"; ?>"/></td>
    </tr>
<tr class="Style8">
      <td><div align="center"><strong>Changer votre Ville : </strong></div></td>
      <td align="right" class="Style8"><input name="ville" type="text" class="Style8" id="ville" value="<?php echo"$ville"; ?>"/></td>
    </tr>
<tr class="Style8">
      <td><div align="center"><strong>Changer votre Pays : </strong></div></td>
      <td align="right" class="Style8"><input name="pays" type="text" class="Style8" id="pays" value="<?php echo"$pays"; ?>"/></td>
    </tr>
<tr class="Style8">
      <td><div align="center"><strong>Changer votre Telephonne : </strong></div></td>
      <td align="right" class="Style8"><input name="tel" type="text" class="Style8" id="tel" value="<?php echo"$tel"; ?>"/></td>
    </tr>
  </table></div>
  <table width="300" border="0" align="center">
    <tr>
      <td><div align="center" class="Style8"> <span class="titre">

          
          </span>
              <input name="Submit" type="submit" class="Style8" value="Envoyer" /></form>
<form action="contactez-revendeur.php" method="post" name="contact" id="contact">
<input name="mail" type="hidden" class="Style8" id="mail" value="<?php echo"$mail"; ?>"/>
<input name="civil" type="hidden" class="Style8" id="civil" value="<?php echo"$civil"; ?>"/>
<input name="Submit" type="submit" class="Style8" value="ecrire un mail au revendeur" /></form>
      </div></td>
    </tr>
  </table>
  </font>
<?php } ?>
</td>
</tr>
</table>