<?php
    require_once 'functions.php';
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location:login.php");
    }
    
?>
<!DOCTYPE html>
<html>
  
<form method="post" action="kirim.php">
No. Tujuan <input type="text" name="destination" required><br><br>
Isi SMS<br><textarea name="sms" required></textarea><br>
<button type="submit">SUBMIT</button>
<a href="logout.php">LOG OUT</a>
</form>
</html>