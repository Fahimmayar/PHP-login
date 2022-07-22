<?php
    require_once 'connection.php';

    $id = $_GET['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $src = $_FILES['photo']['tmp_name'];
    $des = '../assets/uploads/'.time().$_FILES['photo']['name'];
    move_uploaded_file($src , $des);

    $sql = "UPDATE users
        SET name ='$name', age = $age , email ='$email', password = '$password',
        updated = curdate(), photo = '$des' WHERE id = " . $id;
    $result = $con->query($sql);
    if ($result) {
        header("location:../dashboard.php?success=true");
    } else {
        header("location:../dashboard.php?failed=true");
    }
