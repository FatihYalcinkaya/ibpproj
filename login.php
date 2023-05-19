<?php

include("connection.php");

session_start();


if (isset($_POST['submit'])) {


    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$password' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        if ($row['usertype'] == 'admin') {

            $_SESSION['admin_name'] = $row['name'];
            echo "admin";
            header("location: admin/admin_page.php");
        } elseif ($row['usertype'] == 'user') {
            echo "user";
            $_SESSION['user_name'] = $row['name'];
            echo  header("location: user/user_page.php");
        } else {
            echo 'anasikim';
        }
    } else {
        $error[] = 'incorrect email or password!';
        echo "anasikm";
    }
};


?>


<!DOCTYPE html>
<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container">

        <form action="" method="POST">
            <h2>Login</h2>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="enter your email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="enter your password" required>



            <input type="submit" name="submit" value="login">

            <p>dont have an account ? <a href="register.php">register now</a></p>
        </form>


    </div>

</body>

</html>