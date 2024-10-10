<?php
include'php/mots-inerdits.php';
$titre_page='contact';
include'php/haut.php';
?>
<br />
<div class="couleurpromo" align="center">
<?php if(preg_match("#^([a-zA-Z יאח\']{1,255})$#",@$_GET['rep'])){ $reponse=str_replace(array("vide","format",'\\'),array("vide<br />","format<br />",''),htmlentities($_GET['rep'])); }
echo @$reponse;
?>
</div>
<form method="post" action="contact1.php">
    <table width="100%" align="center">
       <tr>
        <td align="center" width="20%"><strong>(facultatif) T&eacute;l&eacute;phone :</strong> </td>
        <td  width="80%"><input name="tel" type="text"></td>
      </tr>
       <tr>
        <td align="center">civilit&eacute; nom : </td>
        <td><input name="pseudo" type="text" value="<?php echo @$nom; ?>"></td>
       </tr>
      <tr>
        <td align="center">Mail : </td>
        <td><input name="mail" type="text" value="<?php echo @$sql['mail']; ?>"></td>
      </tr>
      <tr>
        <td align="center">Sujet : </td>
        <td><input name="sujet" type="text"></td>
      </tr>
         </table>
Message : <br />
<textarea name="message" id="message"></textarea>
<div align="center"><button type="submit">Envoyer le message !</button></div>
</form>
<br />
<?php
include'php/bas.php';
?> 
