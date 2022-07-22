<?php 

    $server = "localhost";
    $username  = "root";
    $password  = "";
    $database  = "login_system";

    $con = new mysqli($server , $username , $password , $database);
    if (!$con) {
        echo "Connection Failed";
    }