<?php
include'php/mots-inerdits.php';
$titre_page="Inscription client";
include'php/haut.php'; ?>
Site enregistr&eacute; &agrave; la Cnil.<br/>
Vous disposez d&#039;un droit d&#039;acc&egrave;s, de modification et de suppression des donn&eacute;es vous concernant.<br/>
Vous pouvez appliquez ce droit, directement sur le site, par courrier, par mail, ou encore par t&eacute;l&eacute;phone.<br/>
Site enregistr&eacute; &agrave; la CNIL sous le n&deg; 1269923.<br/>
<?php 
if(!preg_match("#^([a-zA-Z \']{0,255})$#",@$_GET['rep'])){@$_GET=NULL;}else{$reponse = str_replace(array("vide ","format ",'\\'),array("vide<br/>","format<br/>",''),htmlentities(@$_GET['rep']));}
echo @$reponse;
?>
<div style="text-align:center;width:80%;">
<form action="inscription1.php" method="post" id="inscription">
<p class="">Vos informations de connexion (obligatoire)</p>
<p class="gros"><span>Email:</span><input name="mail" type="text"/></p>
<p class="gros"><span>mot de passe:</span><input name="pass" type="password"/></p>
<p class="gros"><span>retapez votre mot de passe:</span><input name="vpass" type="password"/></p>
<p class="gros">Vos informations de facturation (obligatoire)</p>
<p class="gros"><span style="display:inline-block;width:100px">Raison sociale (facultatif):</span><input name="raison_sociale" type="text"/></p>
<p class="gros"><span>civilit&eacute;:</span><select name="civil" id="civil">
<option value="1">Selecitionnez</option>
<option value="Mme">Mme</option>
<option value="Mlle">Mlle</option>
<option value="Mr">Mr</option>
</select></p>
<p class="gros"><span>Nom:</span><input name="nom" type="text"/></p>
<p class="gros"><span>Prenom:</span><input name="prenom" type="text"/></p>
<p class="gros"><span>Adresse:</span><input name="adresse" type="text"/></p>
<p class="gros"><span>Code postal:</span><input name="cp" type="text"/></p>
<p class="gros"><span>Ville:</span><input name="ville" type="text"/></p>
<p class="gros"><span>Pays:</span><select name="pays">
<option value="1">Selecitionnez</option>
<option value="France">France</option>
<option value="Belgique">Belgique</option>
<option value="Suisse">Suisse</option>
<option value="Allemagne">Allemagne</option>
<option value="Angleterre">Angleterre</option>
<option value="Italie">Italie</option>
<option value="Espagne">Espagne</option>
<option value="Portugal">Portugal</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Monaco">Monaco</option>
</select></p>
<p class="gros">Vous joindre rapidement (facultatif conseill&eacute;)</p>
<p class="gros"><span>T&eacute;l&eacute;phonne:</span><input name="tel" type="text"/></p>
<p class="gros">Recevoir la newsletter</p>
<p class="gros"><span>newsletter:</span><select name="nl" id="nl">
<option value="oui">oui</option>
<option value="non">non</option>
</select></p>
<p class="gros"><button type="submit">S&apos;inscrire</button></p>
</form>
</div>
<?php
include'php/bas.php';
?>
