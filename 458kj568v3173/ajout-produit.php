<?php
require("connectionbd.php");
?>
<form name="form2" method="post" action="ajout-produit1.php">
  <div align="center">
    <table width="200">
      <tr>
        <td class="Style8"><div align="center">nom de l'article : </div></td>
        <td><input name="nom" type="text" class="Style10" id="nom" size="15"></td>
      </tr>
     <tr>
        <td><div align="center">cathegorie de produit : </div></td>
        <td><select name="cat" id="cat">
<?php
$menu1=mysqli_query($connectionbd,"SELECT * FROM categorie ORDER BY nom") OR die('error');
while($menu=mysqli_fetch_array($menu1))
{ extract($menu); ?>
        <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
<?php } ?>
        </select>
      </tr>
     <tr>
        <td><div align="center">type de produit : </div></td>
        <td><select name="tpe" id="tpe">
<?php
$menu1=mysqli_query($connectionbd,"SELECT COUNT(*) AS enregistrements,nom FROM type GROUP BY nom ORDER BY nom") OR die('error');
while($menu=mysqli_fetch_array($menu1))
{ extract($menu); ?>
        <option value="<?php echo $nom; ?>"><?php echo $nom; ?></option>
<?php } ?>
        </select>
      </tr>
      <tr>
        <td class="Style8"><div align="center">petite photo : </div></td>
        <td><input name="petite_image" type="text" class="Style10" id="petite_image" size="15"></td>
      </tr>
      <tr>
        <td class="Style8"><div align="center">grande photo : </div></td>
        <td><input name="grande_image" type="text" class="Style10" id="grande_image" size="15"></td>
      </tr>
      <tr>
        <td class="Style8"><div align="center">description : </div></td>
        <td><textarea name="description" class="Style8" cols="50" rows="10" id="description"></textarea></td>
      </tr>
      <tr>
        <td class="Style8"><div align="center">prix : </div></td>
        <td><input name="prix" type="text class="Style10" id="prix" size="15"></td>
      </tr>
      <tr>
        <td class="Style8"><div align="center">poid : </div></td>
        <td><input name="poid" type="text class="Style10" id="poid" size="15"></td>
      </tr>
      <tr>
        <td class="Style8"><div align="center">stock : </div></td>
        <td><input name="stock" type="text" class="Style10" id="stock" size="15"></td>
      </tr>
      <tr>
        <td class="Style8"><div align="center">taille : </div></td>
        <td><input name="taille" type="text" class="Style10" id="taille" size="15"></td>
      </tr>
      <tr>
        <td class="Style8"><div align="center">taille : </div></td>
        <td><input name="taille1" type="text" class="Style10" id="taille1" size="15"></td>
      </tr>
      <tr>
        <td class="Style8"><div align="center">taille : </div></td>
        <td><input name="taille2" type="text" class="Style10" id="taille2" size="15"></td>
      </tr>
      <tr>
        <td class="Style8"><div align="center">taille : </div></td>
        <td><input name="taille3" type="text" class="Style10" id="taille3" size="15"></td>
      </tr>
      <tr>
        <td class="Style8"><div align="center">taille : </div></td>
        <td><input name="taille4" type="text" class="Style10" id="taille4" size="15"></td>
      </tr>
      <tr>
        <td class="Style8"><div align="center">taille : </div></td>
        <td><input name="taille5" type="text" class="Style10" id="taille5" size="15"></td>
      </tr>
      <tr>
        <td colspan="2" class="Style8"><div align="center">
            <input type="submit" name="Submit" value="ajouté le produit">
            
        </div></td>
      </tr>
    </table>
</td>
</tr>
</table>

