<?php

include("connection.php");


if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $telno = $_POST['telno'];

    $secim = "SELECT * FROM users WHERE email='$email'";
    $calistir = mysqli_query($connection, $secim);

    $kayitSayisi = mysqli_num_rows($calistir);

    if ($kayitSayisi > 0) {

        $ilgiliKayit = mysqli_fetch_assoc($calistir);
        $hashliSifre = $ilgiliKayit['password'];

        if (password_verify($password, $hashliSifre)) {
            session_start();
            $_SESSION['email'] = $ilgiliKayit['email'];

            header("location:profile.php");
        } else {
            echo '<div class="alert alert-danger role="alert">
            incorrect password
            </div>';
        }
    } else {
        echo '<div class="alert alert-danger role="alert">
        user cannot be found
        </div>';
    }



    mysqli_close($connection);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login Page</title>
</head>

<body>

    <div class="container p-5">
        <div class="card p-5">
            <form action="login.php" method="POST">
                <div class="mb-3">

                    <label for="email" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="email" name="email">

                </div>

                <div class="mb-3">
                    <label for="pasword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pasword" name="password">
                </div>

                <div class="account create">
                    <p>Don't you have an account ?</p>
                    <a href="register.php">Click here to register</a>
                </div>
                <br>

                <button type="submit" class="btn btn-primary" name="login">Login</button>
            </form>
        </div>
    </div>















    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>