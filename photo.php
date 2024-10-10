<?php
if($_SERVER['SERVER_NAME']!="robedelorient.com"){
if($_SERVER['SERVER_NAME']=="www.robedelorient.com"){
header("Status:301 Moved Permanently", false, 301);
header("location:https://robedelorient.com".$_SERVER["REQUEST_URI"]."");
exit();
}
$connectionbd=mysqli_connect("localhost","root","","hakazizi_3");
}else{
$connectionbd=mysqli_connect("localhost","u718120498_hakazizi","8A12a42bf" ,"u718120498_hakazizi");
}
$recupimage1=mysqli_query($connectionbd,"SELECT * FROM produit");
$i=1;
while($recupimage=mysqli_fetch_array($recupimage1)){
extract($recupimage);
echo "id:$id<br/>
url de la grande image: $grande_image<br/>
<img src='$grande_image'><br/>
url de la petite image: $petite_image<br/>
<img src='petite_image'><br/>
<br/>
<br/>
";
}
?>