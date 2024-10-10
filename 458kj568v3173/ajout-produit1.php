<?php
require("connectionbd.php");
extract($_POST);
echo"nom : $nom<br><br>
type : $tpe<br><br>
catégorie : $cat<br><br>
petite photo : $petite_image<br><br>
grande_photo : $grande_image<br><br>
description : ".nl2br($description)."<br><br>
prix : $prix<br><br>
poid : $poid<br><br>
stock : $stock<br><br>
taille : $taille<br><br>
taille : $taille1<br><br>
taille : $taille2<br><br>
taille : $taille3<br><br>
taille : $taille4<br><br>
taille : $taille5<br><br>";
?>
<form name="form2" method="post" action="ajout-produit2.php">
<input name="nom" type="hidden" class="Style10" id="nom" value="<?php echo $nom; ?>">
<input name="tpe" type="hidden" class="Style10" id="tpe" value="<?php echo $tpe; ?>">
<input name="cat" type="hidden" class="Style10" id="cat" value="<?php echo $cat; ?>">
<input name="petite_image" type="hidden" class="Style10" id="petite_image" value="<?php echo $petite_image; ?>">
<input name="grande_image" type="hidden" class="Style10" id="grande_image" value="<?php echo $grande_image; ?>">
<input name="description" type="hidden" class="Style10" id="description" value="<?php echo $description; ?>">
<input name="prix" type="hidden" class="Style10" id="prix" value="<?php echo $prix; ?>">
<input name="poid" type="hidden" class="Style10" id="poid" value="<?php echo $poid; ?>">
<input name="stock" type="hidden" class="Style10" id="stock" value="<?php echo $stock; ?>">
<input name="taille" type="hidden" class="Style10" id="taille" value="<?php echo $taille; ?>">
<input name="taille1" type="hidden" class="Style10" id="taille1" value="<?php echo $taille1; ?>">
<input name="taille2" type="hidden" class="Style10" id="taille2" value="<?php echo $taille2; ?>">
<input name="taille3" type="hidden" class="Style10" id="taille3" value="<?php echo $taille3; ?>">
<input name="taille4" type="hidden" class="Style10" id="taille4" value="<?php echo $taille4; ?>">
<input name="taille5" type="hidden" class="Style10" id="taille5" value="<?php echo $taille5; ?>">
<input type="submit" name="Submit" value="ajouté le produit">
</td>
</tr>
</table>