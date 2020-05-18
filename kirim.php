<?php
   require_once 'functions.php';
 
   $sender = $_POST['username'];
   $destinationNumber = $_POST['destination'];
   $sms = $_POST['sms'];
 
   $query = "INSERT INTO outbox (DestinationNumber, SMS) VALUES ('$destinationNumber', '$sms')";
   mysql_query($query);
   $query = "INSERT INTO inbox (pengirim, SMS) VALUES ('$username', '$sms')";
    
   echo "SMS sudah dikirim...";
?>