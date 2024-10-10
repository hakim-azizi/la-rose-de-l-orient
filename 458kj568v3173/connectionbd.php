<?php
//récupération de l'IP
if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
elseif(isset($_SERVER['HTTP_CLIENT_IP'])) {
  $ip  = $_SERVER['HTTP_CLIENT_IP'];
}
else {
  $ip = $_SERVER['REMOTE_ADDR'];
}
//if($ip == '88.163.82.129')
//{}
//elseif($ip=='127.0.0.1')
//{}
//else
//{ header("Status: 404 Not Found", false, 404); exit(); }
include'php/conbd.php';
?>
<head>
<title></title>
<style>
img{width:112px;height:150px;}
</style>

</head>
<body>

<div align="center"><a href="../">RETOUR SITE</a><br><br>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1" height="">
  <tr>
     <td border="1" width="10%" colspan="8" height="" align="center" valign="top">
<a href="./">ACCUEIL</a><br><br>
<a href="ajout-produit.php">Ajouter un article</a><br><br>
<a href="compta">compta</a><br><br>
<a href="contact-clients.php">contacter les clients</a><br><br>
<a href="contact-revendeurs.php">contacter les revendeurs</a><br><br>
<a href="voir-client.php">Voir les clients</a><br><br>
<a href="voir-commande.php">Voir les commandes</a><br><br>
<a href="facture.php">Voir les factures</a><br><br>
<a href="voir-revendeur.php">Voir les revendeurs</a><br><br>

</td>
     <td border="1" width="90%" colspan="8" height="" align="center" valign="top">

