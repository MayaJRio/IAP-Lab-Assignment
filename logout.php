<?php
    include_once 'db.php';
    include_once 'user.php';

    $con = new DBConnector();
    $pdo = $con->connectToDB();

    $user = new User($email,$password);
    $user->logout($pdo);

    header('Location: /IAP Lab Assignment 1/loginsignup.php ');
?>