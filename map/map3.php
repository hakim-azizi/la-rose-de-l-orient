<?php
include"conbd.php";
header('Content-type: text/html; charset=utf-8');
if(preg_match("#php#",$_SERVER["REQUEST_URI"])){include'php/404.php';exit();}
echo'<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
';
$article1=mysqli_query($connectionbd,"SELECT cathegorie,type,code_produit,id from produit WHERE stock>0 ORDER BY cathegorie");
while($article=mysqli_fetch_array($article1))
{ 
extract($article);
$cathegorie=str_replace(array('&#039;',' '),'-',strtolower($cathegorie));
$cathegorie=preg_replace("#&([a-z])[^;]+;#","\\1",$cathegorie);
$type=str_replace(array('&#039;',' '),'-',strtolower($type));
$type=preg_replace("#&([a-z])[^;]+;#","\\1",$type);
$code_produit=str_replace(array('&#039;',' '),'-',strtolower($code_produit));
$code_produit=preg_replace("#&([a-z])[^;]+;#","\\1",$code_produit);
?>
<url>
<loc>https://www.robedelorient.com/boutique-en-ligne/<?php echo''.$cathegorie.''; ?>/<?php echo''.$type.''; ?>/<?php echo''.$code_produit.''; ?>.html</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>

<changefreq>weekly</changefreq>
</url>
<?php } ?>
</urlset>