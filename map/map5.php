<?php
include"conbd.php";
if(preg_match("#php#",$_SERVER["REQUEST_URI"])){include'php/404.php';exit();}
echo'<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
<loc>https://www.robedelorient.com/boutique-en-ligne/promo/</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>
</urlset>
