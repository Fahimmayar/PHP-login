<?php 
    session_start();
    require_once 'connection.php';

    $username = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$username' AND password = '$password'";
    $result = $con->query($sql);
    
    if ($result->num_rows == 1){
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user;
        header('location:../dashboard.php?login=success');
    }else{
        header("location:../index.php?fail=true");
    }