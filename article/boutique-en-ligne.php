<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
if(isset($_POST['page'])){header("location:page-".intval($_POST['page']).".html");exit();}
$page=intval(@$_GET['page']);
if($page==0){$page=1;}
$tri1=intval(@$_COOKIE['tri']);
if($tri1==1){$tri='Prix croissant';$order='ORDER BY prix ASC';}
elseif($tri1==2){$tri='Prix d&eacute;croissant';$order='ORDER BY prix DESC';}
else{$tri='Nouveaut&eacute;';$order='ORDER BY id DESC';}
$nbart2=mysqli_query($connectionbd,"SELECT COUNT(*) FROM produit WHERE stock>0")or die(include'../php/404.php');
$nbart1=mysqli_fetch_array($nbart2);
$nbart=$nbart1['COUNT(*)'];
$idimg=0;
$nbpage=ceil($nbart/10);
if($nbpage<$page AND $page!=1){include'../php/404.php';exit();}
$page1=$page*10-10;
$urlpage=$page-1;
$urlprecedent='page-'.$urlpage.'.html';
$urlsuivant=$page+1;
$titre_page='Boutique en ligne';
if($page!=1){$titre_page.=' - page '.$page.' : La Rose de l&#039;Orient'; }
include'../php/haut.php';
if($page==1) { ?><h2>Boutique en ligne - la rose de l&#039;orient.</h2>
<p>L&#039;&eacute;quipe de la <strong>boutique en ligne</strong> la rose de l&#039;orient est proche de vos attentes,<br />
n&#039;h&eacute;sitez pas &agrave; nous contacter, nous r&eacute;pondrons dans les plus bref d&eacute;lais possible.<br />
Bien que notre <b>boutique en ligne</b> soit sur Internet nous avons la m&ecirc;me proximit&eacute;,<br />
que dans une <strong>boutique</strong> sur rue.<br />
Nous ferons toujours en sorte de s&#039;assurer que vous ayez bien compris nos r&eacute;ponses.<br />
La <em>boutique en ligne</em> la rose de l&#039;orient vous garantie les prix les plus bas possible.</p><?php } ?>
<h2>boutique en ligne - articles</h2>
<p>Retrouvez tous les articles pr&eacute;sents dans votre <em>boutique en ligne</em> la rose de l&#039;orient.</p>
<br />
<p style="font-weight:bold;">Actuellement tri&eacute; par <?php echo $tri; ?></p>
<div>
<form method="post" action="<?php echo $url; ?>select1.php">
<p><input type="hidden" name="url" value="<?php echo $_SERVER['REQUEST_URI']; ?>"/></p>
Trier par odre de : <select name="tri" onchange="this.form.submit();">
<option value="<?php echo $tri1; ?>"/><?php echo $tri;
if($tri1!=0){ ?><option value="0"/>Nouveaut&eacute; <?php }
if($tri1!=1){ ?><option value="1"/>Prix croissant<?php }
if($tri1!=2){ ?><option value="2"/>Prix d&eacute;croissant<?php } ?>
</select>
</form>
</div>
<p>TVA non Applicable, article 293B du CGI.</p>
<?php
$mod1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE `stock` > 0 $order LIMIT $page1,10");
while($accueil=mysqli_fetch_array($mod1)){extract($accueil);include'produit.php';} ?>
<div style="text-align:center;clear:both"><?php
if($page!=1){if($urlpage==1){$urlprecedent='./';}echo'<a href="'.$urlprecedent.'">&lt;&lt;Prec&eacute;dente</a>';}
?>
<form method="post" action="./">
<select name="page" onchange="this.form.submit();">
<option value="<?php echo $page; ?>"/>acc&egrave;s direct
<?php
for($i=1;$i<$nbpage+1;$i++){ ?>
<option value="<?php echo $i; ?>"/>page <?php echo $i; ?>
<?php } ?>
</select>
</form>
<?php
if($page!=1 AND $page!=$nbpage){ ?>
<?php }if($page!=$nbpage){echo'<a href="page-'.$urlsuivant.'.html">Suivante&gt;&gt;</a>';} ?>
</div>
<?php include'../php/bas.php'; ?>

