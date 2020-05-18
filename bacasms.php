<?php
require_once 'functions.php';
?>
<html>
<table border="1">
   <tr>
      <td>ID</td>
      <td>SMS</td>
      <td>Pengirim</td>
   </tr>
   <?php
   $id=1;
   $ambil = mysql_query("select sms, pengirim from inbox inner join outbox on destinationNumber = inbox.user");
   while($data = mysql_fetch_array($ambil)){
   ?>
   <tr>
      <td><?php echo $id++; ?></td>
      <td><?php echo $data['sms']; ?></td>
      <td><?php echo $data['pengirim']; ?></td>
   </tr>
   <?php } ?>   
</table>
</html>