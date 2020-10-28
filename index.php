<?php
    include_once 'db.php';
    include_once 'user.php';

    $con = new DBConnector();
    $pdo = $con->connectToDB();

    if(isset($_POST["login"])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = new User();
        $user->setUserEmail($email);
        $user->setUserPass($password);
        echo $user->login($pdo);

    }
    if(isset($_POST["register"])){
        $fullName = $_POST['fullname'];
        $email = $_POST['emailaddress'];
        $city = $_POST['city'];
        $password = $_POST['password'];
        $user = new User();
        $user->setUserEmail($email);
        $user->setUserPass($password);
        $user->setFullName($fullName);
        $user->setCity($city);
        echo $user->register($pdo);

    }
    if(isset($_POST["changepassword"])){
        $email = $_POST['email'];
        $originalPassword = $_POST['oldpassword'];
        $newPassword = $_POST['newpassword'];
        $confirmPassword = $_POST['new-password'];
        
        if($confirmPassword == $newPassword){
            $user = new User();
            $user->setUserEmail($email);
            $user->setNewPassword($newPassword);
            $user->setUserPass($originalPassword);
            echo $user->changePassword($pdo);
        }
        else{
            echo "Passwords do not match";
        }

    }
?>