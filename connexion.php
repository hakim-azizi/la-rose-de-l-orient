<?php
include'php/mots-inerdits.php';
$titre_page='connexion';
include'php/haut.php'; ?>
<p class="message"><?php
if(!preg_match("#^([a-zA-Z \']{0,255})$#",$_GET['rep'])){ $_GET=NULL; } else { $reponse = str_replace(array("vide ","format ",'\\'),array("vide<br>","format<br>",''),htmlentities($_GET['rep'])); }
echo $reponse;
?></p>
<br>
<form name="form1" method="post" action="connexion1.php">
<div class="couleur_table" align="center">
    <table border="1" bordercolor="#990000" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="256">
      <tr>
        <td class="couleur_table1" colspan="2" align="center">Connexion client</td>
      </tr>   
      <tr>
        <td class="couleur_table" width="169" align="center">Email :</td>
        <td class="couleur_table" width="75" align="center"><input name="mail" type="text" id="mail"></td>
      </tr>
      <tr>
        <td class="couleur_table" align="center">Votre mot de passe : </td>
        <td class="couleur_table" align="center"><input name="pass" type="password" id="pass"></td>
      </tr>
      <tr>
        <td class="couleur_table" colspan="2" align="center">
						<input class="menu" name="prov" type="hidden" value="<?php echo intval($_GET['prov']); ?>">
						<button name="Submit" type="submit" onClick="this.value='Connexion en cours'">Connexion</button></td>
      </tr>
    </table>
<a href="recupass.php" class="Style9">Mot de passe perdu ?</a>
</div>
</form>
<?php
include("php/bas.php");
?>
