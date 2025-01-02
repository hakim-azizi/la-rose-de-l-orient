<?php
$url=preg_replace(array("@(^[/]{1})@","@([A-Za-z0-9:_\=\&\.\?\+\%\-])@","@/@"),array("","","../"),$url_demande);
if(strlen($url)==0){$url_acceuil='./';}else{$url_acceuil=$url;}
if(@preg_match("#^([0-9]{25})$#",@$_COOKIE['identifiant'])){$identifiant=$_COOKIE['identifiant'];
$nbpanier=mysqli_fetch_array(mysqli_query($connectionbd,"SELECT COUNT(*) FROM panier WHERE (valide=0 OR valide=1) AND identifiant='$identifiant'"));}
if(@$nbpanier==NULL){$nbpanier=0;}
if(@$titre_page==NULL){$titre_page=str_replace(array("/","-",".php"),array(", "," ",""),"La Rose de l&#039;Orient$url_demande");}
$titre_page=ucfirst($titre_page);
$description_page=ucfirst(@$description_page);
//ob_end_clean ();
//if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')){ob_start("ob_gzhandler");}
//else{ob_start();}
$urlreel=$_SERVER['PHP_SELF'];
$urlverif=str_replace('mot-cle','',$urlreel);
if($urlverif!=$urlreel)
{
$rediriger=str_replace('en-savoir-plus/','',$_SERVER['REQUEST_URI']);
if($_SERVER['REQUEST_URI']==$rediriger)
{ 
$rediriger='en-savoir-plus'.$rediriger;
header("Status: 301 Moved Permanently", false, 301);
header("Location:$rediriger");
exit();
}} ?><!DOCTYPE html>
<html lang='fr'>
<head>
<title><?php echo $titre_page; ?></title>
<meta name="Description" content="<?php echo $description_page; ?>">
<meta name="Keywords" content="<?php echo @$mot_cle_page; ?>">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="contactstate" content="France">
<meta name="contactcity" content="Nantes">
<meta name="language" content="fr">
<link rel="alternate" href="http://robedelorient.com<?php echo $url_demande; ?>" hreflang="x-default">
<style>
*{
margin:0;
padding:0;
font-size:14px;
font-family:Trebuchet MS,Verdana,Arial,Helvetica,sans-serif;word-wrap:break-word;
line-height:26px;
}
h1{
padding-top:8px;
padding-bottom:8px;
margin-top:8px;
margin-bottom:8px;
text-align:center;
border:1px solid #999;
background-color:#999;
width:98%;
clear:both;
}
img{
border:0;
border-collapse:collapse;
}
a{
color:#DE1482;
text-decoration:none;
cursor:pointer;
}
a:hover,a:active{
text-decoration:underline;
}
.prix{
font-weight:bold;
color:#FF0000;
}
select{
background:#DE1482;
color:#FFF;}
button{
background:#DE1482;
color:#FFF;
}
*.gras{
font-weight:bold;
}
*.nongras{
font-weight:normal;
}
.affich-menu{
border-bottom:4px solid;
height:36px;
position:fixed;
top:0;
z-index:3;
width:100%;
opacity:1;
background-color:#FFFFFF;
}
.affich-menu *{
position:absolute;
height:36px;
cursor:pointer;
}
.bandeau
{
left:8px;
top:0;
background:url("<?php echo $url; ?>images/icone-accueil.gif") no-repeat center center;
width:45px;height:36px;
}
.bandeau a{
display:block;
width:100%;
}
.mon-compte{
bottom:0;
right:104px;
width:36px;
background:url("<?php echo $url; ?>images/icone-mon-compte.gif") no-repeat center center;
}
.contact{
bottom:0;
right:52px;
width:36px;
background:url("<?php echo $url; ?>images/icone.gif") no-repeat -20px 0;
}
.contenu1{
width:100%;
height:52px;
clear:both
}
<?php
if(@$nbpanier['COUNT(*)']>0){ ?>
.colorpanier{
background-color:#DE1482;

}<?php } ?>
.colorpanier{
bottom:0;
right:0;
width:44px;
height:36px;
}
.panier{
bottom:0;
right:8px;
width:29px;
background:url("<?php echo $url; ?>images/icone.gif") no-repeat -56px 0;
}
.confirmation_panier{
display:none;
position:fixed;
z-index:3;
left:50%;
margin-left:-150px;
top:50%;
margin-top:-75px;
width:300px;
height:150px;
background:#777;
}
.dec_conf_pan{
float:left;
position:absolute;
bottom:8px;
}
.dec_conf_pan p{
width:100%;
text-align:center}
.conteneur-recherche{
margin-top:8px;
margin-bottom:8px;
position:relative;
width:98%;
height:32px;
border:1px solid #DE1482
}
#recherche{
height:100%;
width:100%;
}
.conteneur-contact,.conteneur-panier,.conteneur-mon-compte{
display:none;
z-index:2;
background-color:#FFF;
opacity:1.0;
position:fixed;
top:40px;
right:0px;
width:320px;
}
.conteneur-mon-compte li{
padding-left:8px;
list-style:none
}
.conteneur-contact input{
width:250px;
margin:3px 0;
}
.conteneur-contact textarea{
height:125px;
margin:3px 0;
width:250px;
}
.conteneur-contact p{
text-align:center;
}
.mail{
margin-right:29px;
}
.tel{
margin-right:40px;
}
.nom{
margin-right:30px;
}
.prenom{
margin-right:6px;
}
.message{
vertical-align:top;
}
.cacherautour{
position:relative;
width:100%;
height:1722px;
overflow:hidden;
}
.navigation{
position:absolute;
top:40px;
}
@media screen and (min-width: 966px)
{
#conteneur-menu{
width:100%;
position:absolute;
}
.contenu{
width:85%;
margin-left:15%;
}
.navigation
{
border-bottom:4px solid;
width:15%;
position:absolute;
}
.navigation ul{
width:100%;
}
.navigation li{
padding-left:8px;
list-style:none;
border-bottom:2px solid;
border-top:2px solid;
}
.navigation li span{
padding:8px 0;
}
.navigation ul li ul li {
border-top:1px solid;
border-bottom:none;
}
.menu1,.sousmenutype{
display:block;
width:100%;
}
.separation{
display:none;	
}
.petitaffichemenu{
display:none;	
}
.grandaffichemenu{
display:block;
}
}
@media screen and (max-width: 966px)
{
.image-menu{
left:60px;
top:0;
width:20px;
background:url("<?php echo $url; ?>images/icone.gif") no-repeat 0 0;
}
#conteneur-menu{
width:200%;
margin-left:-300px;
position:absolute;
}
.navigation
{
border-bottom:4px solid;
width:300px;
}
.navigation ul{
width:100%;
}
.navigation li{
padding-left:8px;
list-style:none;
}
.navigation li span{
padding:8px 0;
border-bottom:2px solid;
}
.navigation ul li ul li span{
border-top:1px solid;
border-bottom:none;
}
.navigation ul li:last-child span{
border-bottom:none;
}
.navigation ul li ul li:last-child{
border-bottom:2px solid;
}
.navigation ul li:last-child ul:last-child li:last-child{
border-bottom:none;
}
.navigation p{
border-bottom:2px solid;
}
.menu1,.sousmenutype{
display:block;
width:100%;
background:url("<?php echo $url; ?>images/fleche-droite.gif") no-repeat right center;
}
.petitaffichemenu{
display:block;
}
.grandaffichemenu{
display:none;
}
.navigation li a{
display:block;
width:100%}
.navigation li a b{
font-weight:normal;
}
.sous-menu{
display:none;
}
.contenu{
float:left;
width:50%;
margin-left:300px;
}
#voile{
margin-left:-8px;
height:100%;
width:100%;
position:absolute;
z-index:1;
background:rgba(0, 0, 0, 0.4);
display:none;
}
}
.contenu{
position:absolute;
top:37px;
left:1%;
}
.conteneur-panier p span{
display:inline;
float:left;
width:25%;
}
.menubas{
float:left;
width:30%;
}
.menubas ul li{
margin:8px 0;
list-style:none;
width:100%;
}
.menubas ul li span{
padding:0 8px;
}























<?php if($url_reel=='/index.php'){ ?>
    .image {
    display: flex;
    justify-content: center;
    align-items: stretch;
    width: 100%;
    height: auto;
}

 #image0,#texte0,.image-li,.texte {
    border: 1px solid #DE1482;
    box-sizing: border-box;
    list-style: none;
    width: 45%;
    height:auto;
    display: none; /* Tous les éléments sont cachés par défaut */
    aspect-ratio: 3/4;
}

.image-li{
    display: flex;
    justify-content: center;
    align-items:stretch;
}

.image-li>a>img{
    width:100%;
    height:100%;
    border:none;
    object-fit: contain;
}

.texte {
    opacity: 1;
    background: #FFF;
    padding: 10px;
}
<?php } ?>






































.photo_redim{
border:1px solid #DE1482;
width:45%;
}

.photo_redimention ul li{
list-style:none
}
@media screen and (min-width: 401px)
{
.photo_redimention{
border:1px solid #DE1482;
width:22%;
/* float:left; */
margin-left:2%
}
}
@media screen and (max-width: 400px)
{
.photo_redimention{
border:1px solid #DE1482;
width:46%;
/* float:left; */
margin-left:2%
}
}
<?php
if(strpos($url_reel,'article')!==false){ ?>
.article{
float:left;
width:150px;
height:338px;
margin-left:10px;
}
.produit{
width:145px;
height:194px
}
<?php } if($url_reel=='/article/fiche-article.php'){ ?>
#conteneur{
width:100%;
height:auto;
margin-left:auto;
margin-right:auto;
}
.slider{
width:100%;
}
@media screen and (min-width: 551px)
{
.photo ul li{
width:15.3846153846%;
margin-left:17.9487179487%;
}
.photo ul{
width:195%;
}
}
@media screen and (max-width: 550px)
{
.photo ul li{
width:22.6804123711%;
margin-left:10.6529209622%;
}
.photo ul{
width:227.34375%;
}
}
.photo{
background-color:#777777;
cursor:move;
overflow:hidden;
overflow-x:scroll;
}
.photo::-webkit-scrollbar{
display: none;
}
.photo ul{
position:relative;
list-style:none;
}
.photo ul li{
float:left;
position:relative;
text-align:center;
}
<?php } 
if($url_reel=='/article/vente-en-gros.php' OR $url_reel=='/inscription.php' OR $url_reel=='/livraison.php'){ ?>
.gros{
margin-top:8px;
}
.gros span{
display:inline-block;
width:100px;
}
<?php } ?>
</style>
</head>
<body>
<div style="position:absolute;top:40px;left:80px">&nbsp;</div>
<div class="affich-menu">
<p class="bandeau" title="accueil"><a href="<?php echo $url_acceuil; ?>" title="acceuil">&nbsp;</a></p>
<p class="image-menu">&nbsp;</p>
<p class="mon-compte">&nbsp;</p>
<p class="contact">&nbsp;</p>
<p id="colorpanier" class="colorpanier">&nbsp;</p>
<p class="panier">&nbsp;</p>
</div>
<div class="confirmation_panier">
<p id="panier_valide">&nbsp;</p>
<div class="dec_conf_pan" style="left:8px">
<p ><button class="continuez">Continuez vos achats</button></p>
</div>
<div class="dec_conf_pan" style="right:8px">
<p><button onclick="document.location.href='<?php echo $url; ?>panier.php'">paiement</button></p>
</div>
</div>
<div class="conteneur-mon-compte">Mon compte :<br>
<?php if(!isset($idclient)){ ?>
<form action="<?php echo $url; ?>connexion1.php" method="post">
<p style="margin:8px;"><span style="width:89px;display:inline-block">Mail:</span><input style="width:210px" name="mail"></p>
<p style="margin:8px">Mot de passe:<input style="width:210px" type="password" name="pass"><input name="prov" type="hidden" value="1"></p>

<p style="margin:8px;text-align:center"><button type="submit">Connexion</button></p>
</form>
<p style="margin:8px;text-align:center"><a href="<?php echo $url; ?>recupass.php" class="Style9">Mot de passe perdu ?</a></p>
<?php }else{ ?>
<ul>
<li><a href="<?php echo $url; ?>facture.php">Factures</a></li>
<li><a href="<?php echo $url; ?>demande-livraison.php">Bons de commande</a></li>
<li><a href="<?php echo $url; ?>suivi-commande.php">Suivi des commandes</a></li>
<li><a href="<?php echo $url; ?>info1.php">informations</a></li>
<li><a href="<?php echo $url; ?>del_client.php">Supprimez votre compte Client</a></li>
<li><a href="<?php echo $url; ?>deconnexion.php">D&eacute;connexion</a></li>
</ul>
<?php } ?>
</div>
<div class="conteneur-contact">Pour nous contactez:<br>
par tel :<br>tel : 09 54 27 88 12<br>
port: 06 66 41 97 34<br>par courrier :<br>
La Rose de l&#039;orient<br>3 av. E. Hemingway<br>
44300 Nantes<br>par mail:<form action="contact1.php" method="post">
<p><span class="mail">mail</span>:<input name="mail"></p>
<p><span class="tel">tel</span>:<input name="tel"></p>
<p><span class="nom">nom</span>:<input name="pseudo"></p>
<p><span class="prenom">Sujet</span>:<input name="sujet"></p>
<p><span class="message">message:</span><textarea name="message" cols="20" rows="2"></textarea></p>
<p><button type="submit">Envoyez le message</button></p>
</form>
</div>
<div class="conteneur-panier">Votre panier:<br>
<p><span>r&eacute;ference :</span><span>taille :</span><span>quantit&eacute; :</span><span>prix :</span></p>
<?php $totalpanier=0;if($nbpanier>1){
echo'<p class="affichage_du_panier"></p>
';
$panier1=mysqli_query($connectionbd,"SELECT * FROM panier WHERE (valide=0 OR valide=1) AND identifiant='".@$identifiant."' AND txn_id='' ORDER BY id DESC");
while($panier=mysqli_fetch_array($panier1)){
$replacepanierurl=array(' ','&#039;');
$urlcatpanier=preg_replace("#&([a-z])[^;]+;#","\\1",str_replace($replacepanierurl,'-',$panier['cathegorie']));
$urltypepanier=preg_replace("#&([a-z])[^;]+;#","\\1",str_replace($replacepanierurl,'-',$panier['type']));
$articlepanier=$panier['code_produit'];
$urlartpanier=preg_replace("#&([a-z])[^;]+;#","\\1",str_replace($replacepanierurl,'-',$articlepanier));
$idartpanier=$panier['id_article'];
$refpanier=substr($panier['code_produit'],0,4);
$refpanier.=$idartpanier;
$quantitepanier=$panier['quantite'];
$prixpanier=$panier['prix']*$quantitepanier;
$totalpanier=round($totalpanier+$prixpanier,2); ?>
<p><span><?php echo "$refpanier"; ?></span><span><?php echo $panier['taille']; ?></span><span><?php echo $quantitepanier; ?></span><span><?php echo $prixpanier; ?> &euro;</span></p>
<?php }}if($totalpanier==0){ ?>
<div class="affichage_du_panier">Votre panier est vide</div><p class="prix_paie_javascript"></p>
<?php }else{ ?>
<p><span style="width:50%">&nbsp;</span><span>total :</span><span class="prix_paie"><?php echo $totalpanier; ?>&euro;</span></p>
<div style="text-align:center">
<form action="<?php echo $url; ?>panier.php">
<input type="hidden" value="1">
<button type="submit">&nbsp;paiement&nbsp;</button>
</form>
</div>
<?php } ?>
</div>
<div id="cacher_autour" class="cacherautour">
<div id="conteneur-menu">
<header>
<nav>
<div class="navigation" id="conteneur-navigation">
<p class="gras">Catalogue:</p>
<ul>
<li class="menu petitaffichemenu"><span id="menu7" class="menu1"><a href="<?php echo $url; ?>boutique-en-ligne/" title="Sur cette page retrouvez tous les articles quelque soit leur cat&eacute;gorie ou leur sous-cat&eacute;gorie"><strong>Boutique en ligne</strong></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>boutique-en-ligne/" title="Sur cette page retrouvez tous les articles quelque soit leur cat&eacute;gorie ou leur sous-cat&eacute;gorie"><strong>Boutique en ligne</strong></a></span></li>

<li class="menu petitaffichemenu"><span id="menu8" class="menu1"><a href="<?php echo $url; ?>boutique-en-ligne/nouveaute.html" class="couleurpromo" title="nouveaut&eacute; de notre catalogue"><strong>Nouveaut&eacute;</strong></a></span></li>
<li class="menu grandaffichemenu"><span class=""><a href="<?php echo $url; ?>boutique-en-ligne/nouveaute.html" class="couleurpromo" title="nouveaut&eacute; de notre catalogue"><strong>Nouveaut&eacute;</strong></a></span></li>

<li class="menu petitaffichemenu"><span id="menu9" class="menu1"><a href="<?php echo $url; ?>boutique-en-ligne/top-vente.html" title="TOP VENTE"><strong>TOP VENTE</strong></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>boutique-en-ligne/top-vente.html" title="TOP VENTE"><strong>TOP VENTE</strong></a></span></li>

<li class="menu petitaffichemenu"><span id="menu10" class="menu1"><a href="<?php echo $url; ?>boutique-en-ligne/promo/" class="couleurpromo" title="article en promotion"><strong>Promotion</strong></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>boutique-en-ligne/promo/" class="couleurpromo" title="article en promotion"><strong>Promotion</strong></a></span></li>

<li class="menu petitaffichemenu"><span id="menu11" class="menu1"><a href="<?php echo $url; ?>boutique-en-ligne/vente-en-gros.php" title="vente en gros, demi gros"><strong>Vente en gros</strong></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>boutique-en-ligne/vente-en-gros.php" title="vente en gros, demi gros"><strong>Vente en gros</strong></a></span></li>
</ul>
<?php
$id_menu_cat=12;
$menu1=mysqli_query($connectionbd,"SELECT cathegorie FROM produit WHERE stock > 0 GROUP BY cathegorie ORDER BY cathegorie");
while($menu=mysqli_fetch_array($menu1)){
$catmenu=$menu['cathegorie'];
$urlcatmenu=preg_replace("#&([a-z])[^;]+;#","\\1",str_replace(array(' ','_','&#039;'),'-',$catmenu));
$catmenu=ucfirst($catmenu);
?>
<ul>
<li class="menu"><span id="menu<?php echo $id_menu_cat; ?>" class="menu1 separation"><a><strong><?php echo $catmenu; ?></strong></a></span>
<ul class="sous-menu sous-menu<?php echo $id_menu_cat; ?>">
<?php
$id_menu_type=1;
?>
<li class="petitaffichemenu"><span id="menu<?php echo $id_menu_cat; ?>type<?php echo $id_menu_type; ?>" class="sousmenutype"><a href="<?php echo $url; ?>boutique-en-ligne/<?php echo $urlcatmenu; ?>/"><b><?php echo $catmenu; ?></b></a></span></li>
<li class="grandaffichemenu"><span><a href="<?php echo $url; ?>boutique-en-ligne/<?php echo $urlcatmenu; ?>/"><b><?php echo $catmenu; ?></b></a></span></li>
<?php
$id_menu_type++;
$menu2=mysqli_query($connectionbd,"SELECT type FROM produit WHERE cathegorie='".$menu['cathegorie']."' AND stock > 0 GROUP BY type ORDER BY type");
while($menu3=mysqli_fetch_array($menu2)){
$typemenu=$menu3['type'];
$urltypemenu=preg_replace("#&([a-z])[^;]+;#","\\1",str_replace(array(' ','&#039;'),'-',$typemenu));
$typemenu=ucfirst($typemenu);
?>
<li class="petitaffichemenu"><span id="menu<?php echo $id_menu_cat; ?>type<?php echo $id_menu_type; ?>" class="sousmenutype"><a href="<?php echo $url; ?>boutique-en-ligne/<?php echo $urlcatmenu; ?>/<?php echo $urltypemenu; ?>/"><b><?php echo $typemenu; ?></b></a></span></li>
<li class="grandaffichemenu"><span><a href="<?php echo $url; ?>boutique-en-ligne/<?php echo $urlcatmenu; ?>/<?php echo $urltypemenu; ?>/"><b><?php echo $typemenu; ?></b></a></span></li>
<?php
$id_menu_type++;
}
?>
</ul>
</li>
</ul>
<?php
$id_menu_cat++;
} ?>

<p class="gras">En savoir plus:</p>
<ul>
<li class="menu"><span id="menu1" class="menu1 separation"><a><strong>Bijou</strong></a></span>
<ul class="sous-menu sous-menu1">



<li class="menu petitaffichemenu"><span id="menu1type1" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/bijou.html"><b>bijou</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/bijou.html"><b>bijou</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu1type2" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/bijou-fantaisie.html"><b>bijou fantaisie</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/bijou-fantaisie.html"><b>bijou fantaisie</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu1type3" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/bijou-oriental.html"><b>bijou oriental</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/bijou-oriental.html"><b>bijou oriental</b></a></span></li>

</ul>
</li>
<li class="menu"><span id="menu2" class="menu1 separation"><a><strong>Danse orientale</strong></a></span>
<ul class="sous-menu sous-menu2">
<li class="menu petitaffichemenu"><span id="menu2type1" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/danse-orientale.html"><b>danse orientale</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/danse-orientale.html"><b>danse orientale</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu2type2" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/accessoire-danse-orientale.html"><b>Accessoire de danse orientale</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/accessoire-danse-orientale.html"><b>Accessoire de danse orientale</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu2type3" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/ailes-d-isis.html"><b>Ailes d&#039;isis</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/ailes-d-isis.html"><b>Ailes d&#039;isis</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu1type4" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/canne-danse-orientale.html"><b>Canne de danse orientale</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/canne-danse-orientale.html"><b>Canne de danse orientale</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu2type5" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/ceinture-danse-orientale.html"><b>Ceinture de danse orientale</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/ceinture-danse-orientale.html"><b>Ceinture de danse orientale</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu2type6" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/costume-danse-orientale.html"><b>Costume de danse orientale</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/costume-danse-orientale.html"><b>Costume de danse orientale</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu2type7" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/danse-arabe.html"><b>Danse arabe</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/danse-arabe.html"><b>Danse arabe</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu2type8" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/foulard-a-sequins-danse-orientale.html"><b>Foulard &agrave; sequins</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/foulard-a-sequins-danse-orientale.html"><b>Foulard &agrave; sequins</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu2type9" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/histoire-danse-orientale.html"><b>Histoire de la danse orientale</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/histoire-danse-orientale.html"><b>Histoire de la danse orientale</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu2type10" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-danse-orientale.html"><b>Robe de danse orientale</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-danse-orientale.html"><b>Robe de danse orientale</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu2type11" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/vetement-danse-orientale.html"><b>V&ecirc;tement de danse orientale</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/vetement-danse-orientale.html"><b>V&ecirc;tement de danse orientale</b></a></span></li>
</ul>
</li>
<li class="menu"><span id="menu3" class="menu1 separation"><a><strong>sant&eacute; beaut&eacute;</strong></a></span>
<ul class="sous-menu sous-menu3">
<li class="menu petitaffichemenu"><span id="menu3type1" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/sante-beaute.html"><b>sant&eacute; beaut&eacute;</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/sante-beaute.html"><b>sant&eacute; beaut&eacute;</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu3type2" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/savon-d-alep.html"><b>Savon-d&#039;Alep</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/savon-d-alep.html"><b>Savon-d&#039;Alep</b></a></span></li>
</ul>
</li>
<li class="menu"><span id="menu4" class="menu1 separation"><a><strong>Tenue de soir&eacute;e</strong></a></span>
<ul class="sous-menu sous-menu4">

<li class="menu petitaffichemenu"><span id="menu4type1" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/tenue-de-soiree.html"><b>Tenue de soir&eacute;e</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/tenue-de-soiree.html"><b>Tenue de soir&eacute;e</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu4type2" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-de-cocktail.html"><b>Robe de cocktail</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-de-cocktail.html"><b>Robe de cocktail</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu4type3" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-de-sheherazade.html"><b>Robe de sheherazade</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-de-sheherazade.html"><b>Robe de sheherazade</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu4type4" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-des-mille-et-une-nuits.html"><b>Robe des mille et une nuits</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-des-mille-et-une-nuits.html"><b>Robe des mille et une nuits</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu4type5" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-de-soiree.html"><b>Robe de soir&eacute;e</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-de-soiree.html"><b>Robe de soir&eacute;e</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu4type6" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-de-soiree-et-feminite.html"><b>Robe de soir&eacute;e et feminit&eacute;</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-de-soiree-et-feminite.html"><b>Robe de soir&eacute;e et feminit&eacute;</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu4type7" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-de-soiree-longue.html"><b>Robe de soir&eacute;e longue</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-de-soiree-longue.html"><b>Robe de soir&eacute;e longue</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu4type8" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-de-soiree-orientale.html"><b>Robe de soir&eacute;e orientale</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-de-soiree-orientale.html"><b>Robe de soir&eacute;e orientale</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu4type9" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-de-soiree-orientale-longue.html"><b>Robe de soir&eacute;e orientale longue</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-de-soiree-orientale-longue.html"><b>Robe de soir&eacute;e orientale longue</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu4type10" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-du-soir.html"><b>Robe du soir</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-du-soir.html"><b>Robe du soir</b></a></span></li>
</ul>
</li>
<li class="menu"><span id="menu5" class="menu1 separation"><a><strong>V&ecirc;tement femme</strong></a></span>
<ul class="sous-menu sous-menu5">
<li class="menu petitaffichemenu"><span id="menu5type1" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/vetement-femme.html"><b>V&ecirc;tement femme</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/vetement-femme.html"><b>V&ecirc;tement femme</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu5type2" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/djellaba.html"><b>Djellaba</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/djellaba.html"><b>Djellaba</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu5type3" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe.html"><b>Robe</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe.html"><b>Robe</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu5type4" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-arabe.html"><b>Robe arabe</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-arabe.html"><b>Robe arabe</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu5type5" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-courte.html"><b>Robe courte</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-courte.html"><b>Robe courte</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu5type6" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-femme.html"><b>Robe femme</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-femme.html"><b>Robe femme</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu5type7" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-longue.html"><b>Robe longue</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-longue.html"><b>Robe longue</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu5type8" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-noire.html"><b>Robe noire</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-noire.html"><b>Robe noire</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu5type9" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-orientale.html"><b>Robe orientale</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-orientale.html"><b>Robe orientale</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu5type10" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-rouge.html"><b>Robe rouge</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-rouge.html"><b>Robe rouge</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu5type11" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/robe-traditionnelle.html"><b>Robe-traditionnelle</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/robe-traditionnelle.html"><b>Robe-traditionnelle</b></a></span></li>

<li class="menu petitaffichemenu"><span id="menu5type12" class="sousmenutype"><a href="<?php echo $url; ?>en-savoir-plus/vetement-oriental.html"><b>V&ecirc;tement oriental</b></a></span></li>
<li class="menu grandaffichemenu"><span><a href="<?php echo $url; ?>en-savoir-plus/vetement-oriental.html"><b>V&ecirc;tement oriental</b></a></span></li>
</ul>
</li>
</ul>
</div>
</nav>
</header>
<div id="contenu" class="contenu">
<div id="voile">
</div>

<div id="redimrecherche" class="conteneur-recherche">
<form action="<?php echo $url; ?>moteur.php" id="recherche" method="get">
<p style="width:0;height:0;"><input type="hidden" name="referer" value="1"></p>
<p style="width:32px;height:100%;padding:6px;"><button type="submit" style="background-color:#FFF;position:absolute;top:0;left:0;height:100%;border:none;"><img src="<?php echo $url; ?>images/recherche.gif" title="rechercher" alt="rechercher"></button></p>
<p style="position:absolute;top:0;left:40px;display:block"><input id="redimentionrecherche" style="height:30px;width:100%;border:none;" class="menu" name="recherche"></p>
<script>
redimentionnerrecherche();
window.addEventListener('onload',redimentionnerrecherche);
window.addEventListener('resize',redimentionnerrecherche);
function redimentionnerrecherche(){
var redim=document.getElementById("redimrecherche").clientWidth;
var redime=redim-42;
redimen=redime+"px"
document.getElementById("redimentionrecherche").style.width=redimen;
}
</script>
</form>
</div>
<?php
$h1=0;
if($url_reel=='/panier.php'){$h1=1;}
if($url_reel=='/livraison.php'){$h1=1;}
if($url_reel=='/paiement.php'){$h1=1;}
if($h1===0){} ?>
<main>
<header>
<h1><?php echo $titre_page; ?></h1>
</header>