include"conbd.php";
echo'<?xml version="1.0" encoding="UTF-8" ?>
'; ?><urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">
<url>
<loc>https://www.robedelorient.com/boutique-en-ligne/</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>

<?php
$replace=array('&#039;',' ');
$regex="#&([a-z])[^;]+;#";
$page=1;
$categorie1=mysqli_query($connectionbd,"SELECT nom FROM categorie ORDER BY nom");
while($categorie=mysqli_fetch_array($categorie1))
{ 
$urlcat=preg_replace($regex,"\\1",str_replace($replace,'-',$categorie['nom']));
?>

<url>
<loc>https://www.robedelorient.com/boutique-en-ligne/<?php echo $urlcat; ?>/</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>
<?php
$type1=mysqli_query($connectionbd,"SELECT nom FROM type where categorie='".$categorie['nom']."' ORDER BY nom");
while($type=mysqli_fetch_array($type1))
{ 
$urltype=preg_replace($regex,"\\1",str_replace($replace,'-',$type['nom']));
?>

<url>
<loc>https://www.robedelorient.com/boutique-en-ligne/<?php echo''.$urlcat.'/'.$urltype.''; ?>/</loc>
<lastmod><?php echo @date("Y-m-d"); ?></lastmod>
<changefreq>weekly</changefreq>
</url>
<?php }} ?>

</urlset>
