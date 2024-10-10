<?php
//if($_SERVER['SERVER_NAME']!="www.robedelorient.com"){
//header("Status: 301 Moved Permanently", false, 301);
//header("location:https://www.robedelorient.com".$_SERVER["REQUEST_URI"]."");exit();}
header('Content-type: text/html; charset=utf-8');
if(preg_match("#php#",$_SERVER["REQUEST_URI"])){include'php/404.php';exit();}
echo'<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
';
$replace=array('top-vente.php','index.php','boutique-en-ligne-vente-en-gros.php','boutique-en-ligne.php','robe-de-soiree-orientale-et-robe-de-sheherazade.php','robe-de-soiree-orientale-et-robe-des-mille-et-une-nuits.php');
$repertoire=opendir('../mot-cle/');
//foreach($repertoire as $fichier){
while($fichier=readdir($repertoire)){
$fichier=str_replace($replace,'',$fichier);
if($fichier != '.' && $fichier != '..' && !is_dir($repertoire.$fichier) && $fichier!='')
	{
$fichier=str_replace($replace,'',$fichier); ?>
<url>
<loc>https://www.robedelorient.com/en-savoir-plus/<?php echo str_replace('.php','.html',$fichier); ?></loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>
<?php }}closedir(); ?>
</urlset>