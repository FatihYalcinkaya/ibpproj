<?php

session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "projedatabase";

$connection = mysqli_connect($hostname, $username, $password, $dbname);

if (!$connection) {
    die('connection failed' . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = " SELECT * FROM user WHERE email='$email' AND password='$password'";

    $query = mysqli_query($connection, $sql);

    if (mysqli_num_rows($query) > 0) {
        echo "user exist";
        $row = mysqli_fetch_array($query);

        if ($row['usertype'] == 'admin') {
            echo "admin";
            header("Location: ./admin/adminselam.php");
            exit();
        } else {
            echo "user";
            header("Location: ./user/userselam.php");
        }
    } else {
        echo "user does not exist";
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Library Management System</title>
    <style>
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding-top: 50px;
        }

        h1 {
            font-size: 2.5em;
            text-align: center;
            color: #444;
            margin-bottom: 30px;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #444;
        }

        input[type=email],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            border-radius: 5px;
            border: none;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="index.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>