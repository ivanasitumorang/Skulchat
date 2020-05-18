<?php
   require_once 'header.php';
 
   $sender = $_SESSION['username'];
   $destinationNumber = $_POST['destination'];
   $sms = $_POST['sms'];
 
   $query = "INSERT INTO outbox (destinationNumber, sms, user) VALUES ('$destinationNumber', '$sms', '$sender')";
   executeQuery($query);
  
   $query = "INSERT INTO inbox (pengirim, sms, user) VALUES ('$sender', '$sms', '$sender')";
   executeQuery($query);
    
   echo "SMS sudah dikirim...";
?>