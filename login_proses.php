<?php
    session_start();
    require_once 'functions.php';
    $username = $_POST['username'];
    $pass = $_POST['password'];

    // MYSQL
    $query = "SELECT * FROM users WHERE user_name=? AND pass=?";
    $sts = query($query);
    $sts->bind_param('ss',$username,$pass);
    $sts->execute();
    if(numrow($sts)){
        $_SESSION['login'] = true;
        header("Location:index.php");
    }else{
        header("Location:login.php");
    }