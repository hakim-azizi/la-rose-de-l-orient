<?php if($url_reel=='/article/fiche-article.php'){$url_photo=str_replace(array('-dos','-profile','/'),array('','','%2F'),"$url_repertoire_photo$photo"); } ?>
</section>
</main>
</div>
</div>
</div>

<div id="postion-menu-bas">
<p class="contenu1">&nbsp;</p>
<p>Information l&eacute;gal sur la rose de l&#039;orient<br>
<a href="<?php echo $url; ?>condition-vente.php">Condition de vente</a><br>
RAISON SOCIAL :<br>
La rose de l&#039;orient.<br>
SI&Egrave;GE SOCIAL :<br>
3 avenue Ernest Hemingway<br>
44300 NANTES<br>
France.<br>
Code APE-NAF : 4791B.<br>
Commer&ccedil;ant enregistr&eacute; sous le n&deg; : 504 570 763 RCS NANTES.<br>
Enregistr&eacute; &agrave; la C.N.I.L sous le n&deg; : 1269923.<br>
</p>
<div class="menubas">Service
<ul>
<li><span><a href="<?php echo $url; ?>facilite-paiement.php">Facilit&eacute; de paiement</a></span></li>
<li><span><a href="<?php echo $url; ?>presentation-domicile.php">Pr&eacute;sentation des mod&egrave;les &agrave; domicile</a></span></li>
</ul>
</div>
<div class="menubas" style="margin:0 5%;">Livraison
<ul>
<li><span>Livr&eacute; par la poste</span></li>
<li><span><img src="<?php echo $url; ?>images/pictoposte.jpg" alt="Livr&eacute; par la poste" title="livr&eacute; par la poste"></span></li>
</ul>
</div>
<div class="menubas">paiement
<ul>
<li><span><img src="<?php echo $url; ?>images/paiement-securise.jpg" alt="CB s&eacute;curis&eacute;" title="CB s&eacute;curis&eacute;">CB s&eacute;curis&eacute;</span></li>
<li><span>Ch&egrave;que</span></li>
<li><span><img src="<?php echo $url; ?>images/pictocheque.jpg" alt="Paiement par ch&egrave;que accept&eacute;" title="Paiement par ch&egrave;que accept&eacute;"></span></li>
<li><span>Virement banquaire</span></li><li><span><img src="<?php echo $url; ?>images/pictovirement.jpg" alt="Paiement par virement accept&eacute;" title="Paiement par virement accept&eacute;"></span></li>
</ul>
</div>
</div>

<p style="width:100%;text-align:center">Copyright &#169; 2008 - <?php echo date("Y"); ?>.<br>
&#169; <a href="<?php echo $url_acceuil; ?>">La rose de l&#039;orient</a> - Tous droits r&eacute;serv&eacute;s.<br>
[Design by : &#169; hakazizi <a href="<?php echo $url_acceuil; ?>">la rose de l&#039;orient</a>]</p>
<script src="<?php echo $url; ?>js/jquery-min_<?php echo time(); ?>.js"></script>
<script><?php if($url_reel=='/index.php'){ ?>var dimentionne1=document.getElementById('redimention0').scrollHeight;var dimentionne=dimentionne1+'px';document.getElementById('texte0').style.height=dimentionne;<?php $nb_photo=$nb_photo-1; ?>var num=0;var dimentionner1='';var dimentionner='';
$(function(){$('#texte'+num).delay(5000).hide('scale',500,function(){$('#image'+num).hide('slide',{direction:'right'},500,function(){num=num+1;if(num><?php echo $nb_photo; ?>){num=1}$('#image'+num).show('slide',{direction:'right'},500,function(){$('#texte'+num).show('puff',500);});});});setInterval(function(){$('#texte'+num).delay(4000).hide('scale',500,function(){$('#image'+num).hide('slide',{direction:'right'},500,function(){num=num+1;if(num><?php echo $nb_photo; ?>){num=1}$('#image'+num).show('slide',{direction:'right'},500,function(){var dimentionner1=document.getElementById('redimention'+num).scrollHeight;var dimentionner=dimentionner1+'px';document.getElementById('texte'+num).style.height=dimentionner;$('#texte'+num).show('puff',500);});});});var dimentionner1=document.getElementById('redimention'+num).scrollHeight;var dimentionner=dimentionner1+'px';document.getElementById('texte'+num).style.height=dimentionner;},10000);});<?php } 
if($url_reel=='/article/fiche-article.php'){ ?>













<?php } ?>

</script></body></html>
<?php mysqli_query($connectionbd,"INSERT INTO `visite` (`ip`) VALUES ('$ip')");
$verification_date=@date("W");
$fraicheur_top_vente=mysqli_fetch_array(mysqli_query($connectionbd,"SELECT date FROM date_topvente"));
if($verification_date!=$fraicheur_top_vente['date']){
//echo'on change';
$i=1;
$article1=mysqli_query($connectionbd,"SELECT id,grande_image,prix,description,code_produit,cathegorie,type FROM produit WHERE stock>0 ORDER BY RAND() LIMIT 10");
while($article=mysqli_fetch_array($article1))
{
mysqli_query($connectionbd,"UPDATE top_vente SET id='".$article['id']."',grande_image='".$article['grande_image']."',prix='".$article['prix']."',description='".$article['description']."',code_produit='".$article['code_produit']."',cathegorie='".$article['cathegorie']."',type='".$article['type']."' WHERE idvente=$i");
$i++;}
mysqli_query($connectionbd,"UPDATE date_topvente SET date=$verification_date");
} ?>