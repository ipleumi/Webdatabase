<?php
session_start();
if (isset($_POST['login_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'root' && $password == '12345678') {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: home.php');
    } else {

    

        $_SESSION['error'] = "Wrong username or password try again";
        header('location: login.php');
    
    
    }



}



?>