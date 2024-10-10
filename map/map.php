<?php
include"conbd.php";
header('Content-type: text/html; charset=utf-8');
if(preg_match("#php#",$_SERVER["REQUEST_URI"])){include'php/404.php';exit();}
echo'<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="https://www.google.com/schemas/sitemap/0.84">
<url>
<loc>https://www.robedelorient.com</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>

<url>
<loc>https://www.robedelorient.com/affiliation.php</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>

<url>
<loc>https://www.robedelorient.com/affiliationins.php</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>

<url>
<loc>https://www.robedelorient.com/bareme-frais-de-port.php</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>

<url>
<loc>https://www.robedelorient.com/comment-acheter.php</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>

<url>
<loc>https://www.robedelorient.com/condition-vente.php</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>

<url>
<loc>https://www.robedelorient.com/contact.php</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>

<url>
<loc>https://www.robedelorient.com/emploi.php</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>

<url>
<loc>https://www.robedelorient.com/facilite-paiement.php</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>

<url>
<loc>https://www.robedelorient.com/faq.php</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>

<url>
<loc>https://www.robedelorient.com/forum-danse-orientale/</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>

<url>
<loc>https://www.robedelorient.com/info-legal.php</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>

<url>
<loc>https://www.robedelorient.com/livre-d-or.php</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>

<url>
<loc>https://www.robedelorient.com/presentation-domicile.php</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>

<url>
<loc>https://www.robedelorient.com/suggerer-site.php</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>

</urlset>
