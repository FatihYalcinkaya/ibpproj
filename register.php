<?php

include("connection.php");

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = md5($_POST['password']);
    $usertype = $_POST['usertype'];

    $select = "SELECT * FROM user WHERE email= '$email' && password='$password'";

    $result = mysqli_query($connection, $select);

    if (mysqli_num_rows($result) > 0) {

        $error[] = 'user already exist!';
    } else {

        $insert = "INSERT INTO user (name,email,password,usertype) VALUES ('$name','$email','$password','$usertype')";

        mysqli_query($connection, $insert);

        header('location:login.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="form-container">

        <form action="" method="post">
            <h2>Register</h2>

            <label for="username">name:</label>
            <input type="text" id="name" name="name" placeholder="enter your name" required>

            <label for="email">email:</label>
            <input type="email" id="email" name="email" placeholder="enter your email" required>

            <label for="password">password:</label>
            <input type="password" id="password" name="password" placeholder="enter your password" required>

            <select name="usertype" id="">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>

            <input type="submit" name="submit" value="register">

            <p>already have an account? <a href="login.php">login now</a></p>
        </form>

    </div>

</body>

</html>
