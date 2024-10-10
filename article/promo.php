<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$titre_page='Promotion : La Rose de l&#039;Orient;';
$page=intval(@$_GET['page']);
$where="WHERE `description` LIKE '%promotion%'";
if($page==0)
{
$page=1;
}
$controle_page=$page;
$nombre_article1=mysqli_query($connectionbd,"SELECT COUNT(*) FROM `produit` $where AND stock>0");
$nombre_article=mysqli_fetch_array($nombre_article1);
$nombre_page = ceil($nombre_article['COUNT(*)']/'8');
if($nombre_page=='0' AND $page>1)
{include'../php/404.php';exit;}
include'../php/haut.php'; ?>
<h2>Promotions, sur notre boutique en ligne, la rose de l&#039;orient.</h2>
<p>Retrouvez tous les articles en promotion.</p>
<h3>Toutes les promotions en cours</h3>
<p>Ci dessous les promotions sur notre boutique en ligne la rose de l&#039;orient.</p>
<?php
if($nombre_page=='0')
{
echo'Il n&#039;y a plus de promos en ce moment.<br/>
Pour &ecirc;tre inform&eacute; des futures promos<br/>
inscrivez vous &agrave; notre news-letters.';
}
else
{
$page1=($page*8)-8;
for($i=0; $i<$nombre_page; $i++)
{
$page2=$i+1;
if($page==$page2) { echo'<b>promo page:'.$page2.'</b> ';}
else { echo'<a href="promo/page'.$page2.'.html">promo-page-'.$page2.'</a> '; }
}
?>
<p>TVA non Applicable, article 293B du CGI.</p>
<?php
$idimg = 0;
$mod1 = mysqli_query($connectionbd,"SELECT * FROM produit $where AND `stock` > 0 ORDER BY id DESC LIMIT $page1,8");
while ($accueil=mysqli_fetch_array($mod1))
{include'produit.php';} ?>
</div>
<?php } include'../php/bas.php'; ?>