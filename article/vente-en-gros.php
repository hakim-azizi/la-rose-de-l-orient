<?php
include'../php/mots-inerdits.php';
$titre_page='Vente en gros, demi-gros : la Rose de l&#039;Orient';
include'../php/haut.php';
if(isset($_GET['reponse'])) {
$message=preg_replace("#[^a-zA-Z 5]#",'',$_GET['reponse']);
$message=str_replace(array('vide','format','5',' a '),array('vide<br/>','format<br/>','5<br/>',' &agrave; '),$message); ?>
<p class="message"><?php echo"$message"; ?></p><?php } ?>
<br/>
<h2>Vente en gros, demi-gros : La rose de l&#039;orient.</h2>
<p>Vous voulez acheter plus de 5 articles de m&ecirc;me cat&eacute;gorie:<br/>
ex. 20 costumes danse orientale &eacute;conomique,<br/>
quelque soit le type de costumes si ils entre dans la m&ecirc;me cat&eacute;gorie,<br/>
vous pouvez b&eacute;n&eacute;ficier d&#039;une r&eacute;duction de 25% par article hors frais de port.<br/>
L&#039;offre en gros n&#039;est pas cumulable avec les promos en cours sauf indication contraire.<br/>
Sera calculer le prix le moins cher.<br/>
Pour ce faire remplissez le formulaire ci dessous.<br/>
La r&eacute;f&eacute;rence du produit tient compte de la couleur.<br/>
Pour toute commande dont le prix est &eacute;gal ou sup&eacute;rieur &agrave; 200 &euro; les frais de port sont offerts.<br/>
Il est &agrave; pr&eacute;voir un d&eacute;lais allant de 7 &agrave; 30 jours pour l&#039;envoie de votre commandes.<br/>
Bar&egrave;me :<br/>
-10% &agrave; partir de 5 articles command&eacute;s.<br/>
-15% &agrave; partir de 10 articles command&eacute;s.<br/>
-20% &agrave; partir de 15 articles command&eacute;s.<br/>
-25% pour 20 articles command&eacute;s et plus.<br/>
-Pour plus de 50 articles quelque soit la cat&eacute;gorie d&#039;article, un abattement plus avantageux d&eacute;pendant des mod&egrave;les.</p>
<br/>
<b>Tous les champs sont obligatoires.</b>
<br/>
<form action="vente-en-gros1.php" method="post">
* Champs facultatif:<br/>
<p class="gros"><span>* Raison sociale:</span><input type="text" name="raison_sociale"></p>
<p class="gros"><span>civilit&eacute;:</span><select name="civil">
<option value="1">S&eacute;lectionnez
<option value="Mme">Mme
<option value="Mlle">Mlle
<option value="Mr">Mr
</select></p>
<p class="gros"><span>Nom:</span><input type="text" name="nom"></p>
<p class="gros"><span>Prenom:</span><input type="text" name="prenom"></p>
<p class="gros"><span>Mail:</span><input type="text" name="mail"></p>
<p class="gros"><span>Tel:</span><input type="text" name="tel"></p>
<p class="gros"><span>Adresse de
facturation:</span><input type="text" name="adresse"></p>
<p class="gros"><span>Code postal:</span><input type="text" name="cp"></p>
<p class="gros"><span>Ville:</span><input type="text" name="ville"></p>
<p class="gros"><span>Pays:</span><input type="text" name="pays"></p>
<p class="gros"><span>R&eacute;ference:</span><input type="text" name="ref"></p>
<p class="gros"><span>Quantit&eacute;:</span><input type="text" name="quantite"></p>
<p class="gros"><span>R&eacute;ference 1:</span><input type="text" name="ref1"></p>
<p class="gros"><span>Quantit&eacute;:</span><input type="text" name="quantite1"></p>
<p class="gros"><span>R&eacute;ference 2:</span><input type="text" name="ref2"></p>
<p class="gros"><span>Quantit&eacute;:</span><input type="text" name="quantite2"></p>
<p class="gros"><span>R&eacute;ference 3:</span><input type="text" name="ref3"></p>
<p class="gros"><span>Quantit&eacute;:</span><input type="text" name="quantite3"></p>
<p class="gros"><span>R&eacute;ference 4:</span><input type="text" name="ref4"></p>
<p class="gros"><span>Quantit&eacute;:</span><input type="text" name="quantite4"></p>
Message &agrave; l&#039;attention du responsable,
entr&eacute;e la reference avec les tailles souhait&eacute;, adresse de Livraison si differente de l&#039;adresse de facturation.<br/>
Merci.<br/>
<textarea name="message"></textarea>
<div align="center"><button type="submit">envoyez votre demande</button></div>
</form><br/>
<?php
include'../php/bas.php';
?>