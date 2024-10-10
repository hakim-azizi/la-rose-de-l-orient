<?php
include'php/mots-inerdits.php';
$rand=rand(1,50000);
$rand1=rand(1,50000);
$rand2=rand(1,50000);
$rand=md5("$rand $rand1 $rand2");
$con=ereg_replace("([^a-zA-Z0-9])",'',$_COOKIE['con']);
mysqli_query($connectionbd,"UPDATE client SET con='$rand' WHERE con='$con'") OR die(mysql_error());
setcookie("con");
header("location:./");
?>
