<?php
    require_once 'header.php';
    if(isset($_SESSION['login'])){
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <form action="login_proses.php" method="post">
        <table cellpadding="10">
            <tr>
                <td>USERNAME</td>
                <td>:</td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td>:</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit">LOGIN</button>
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>