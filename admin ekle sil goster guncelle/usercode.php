<?php

// kullanıcı bilgileri İSLEme kodu

session_start();
require 'dbconnection.php';

if (isset($_POST['delete_user'])) {

   
    $userID = mysqli_real_escape_string($connection, $_POST['delete_user']);

    $query = "DELETE FROM user WHERE id = '$userID' ";

    $query_run = mysqli_query($connection, $query);

    if ($query_run) {


        $_SESSION['message'] = 'User deleted succesfully';
        header("Location: index.php");
        exit(0);
    } else {


        $_SESSION['message'] = 'User not deleted ';
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['update_user'])) {

    $userID = mysqli_real_escape_string($connection, $_POST['userID']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $usertype =  $_POST['usertype'];

    $query = "UPDATE user SET  email='$email', password='$password', usertype='$usertype' WHERE id='$userID' ";

    $query_run = mysqli_query($connection, $query);

    if ($query_run) {

        $_SESSION['message'] = 'User updated succesfully';
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = 'User not updated ';
        header("Location: index.php");
        exit(0);
    }
}


if (isset($_POST['save_user'])) {


    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $usertype =  $_POST['usertype'];


    $query = "INSERT INTO user (email,password,usertype) VALUES ('$email','$password','$usertype')";

    $query_run = mysqli_query($connection, $query);

    if ($query_run) {

        $_SESSION['message'] = 'User created succesfully';
        header("Location: adduser.php");
        exit(0);
    } else {
        $_SESSION['message'] = 'User not created';
        header("Location: adduser.php");
        exit(0);
    }
}
