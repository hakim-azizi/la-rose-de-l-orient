<?php
if($_SERVER['SERVER_NAME']!="robedelorient.com"){
if($_SERVER['SERVER_NAME']=="www.robedelorient.com"){
header("Status:301 Moved Permanently", false, 301);
header("location:https://robedelorient.com".$_SERVER["REQUEST_URI"]."");
exit();
}
$connectionbd=mysqli_connect("localhost","root","","hakazizi_3");
}else{
$connectionbd=mysqli_connect("db5015774276.hosting-data.io","dbu4967514","20-Juillet-1976" ,"dbs12868975");
}
?>