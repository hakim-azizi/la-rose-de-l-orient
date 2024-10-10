<?php require("connectionbd.php");
mysqli_query($connectionbd,"DELETE FROM facture WHERE txn_id='".$_POST['txn_id']."' LIMIT 1");
mysqli_query($connectionbd,"ALTER TABLE facture DROP id");
mysqli_query($connectionbd,"ALTER TABLE facture ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
mysqli_query($connectionbd,"DELETE FROM panier WHERE txn_id='".$_POST['txn_id']."'");
mysqli_query($connectionbd,"ALTER TABLE panier DROP id");
mysqli_query($connectionbd,"ALTER TABLE panier ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
header("location:voir-commande.php")
?>