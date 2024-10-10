<?php require("connectionbd.php"); ?>
<font size="6">Voir toutes les factures</font>
<?php
$facture1=mysqli_query($connectionbd,"SELECT * FROM facture WHERE valide=1 AND suivi!=0 ORDER BY id ASC");
while($facture=mysqli_fetch_array($facture1))
{
extract($facture);?>
<form action='facture1.php' method='post'>
voir la facture n° <?php echo $txn_id; ?>
<input name='id' type='hidden' value='<?php echo $id_client; ?>'>
<input name='txn_id' type='hidden' value='<?php echo $txn_id; ?>'>
<input name='Submit' type='submit' value='facture'></form><br><br>
<?php } ?>
</td>
</tr>
</table>
