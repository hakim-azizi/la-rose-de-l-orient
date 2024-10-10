<?php
include"conbd.php";
header('Content-type: text/html; charset=utf-8');
if(preg_match("#php#",$_SERVER["REQUEST_URI"])){include'php/404.php';exit();}
echo'<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
'; ?>
<url>
<loc>https://www.robedelorient.com/festival-oriental/</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>
<?php
$i=0;
$liste_festival1=mysqli_query($connectionbd,"SELECT * FROM festival ORDER BY id DESC");
while($liste_festival=mysqli_fetch_array($liste_festival1)){
extract($liste_festival);
$nomfestival1=strtolower($nomfestival);
$nomfestival1=str_replace(array(' ','&#039;'),'-',$nomfestival1);
$nomfestival1=preg_replace("#&([a-z])[^;]+;#","\\1",$nomfestival1);//on enleve les accents
$i=$i+1; ?>
<url>
<loc>https://www.robedelorient.com/festival-oriental/<?php echo"$nomfestival1:$id"; ?>.html</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>
<?php } ?>
</urlset>
