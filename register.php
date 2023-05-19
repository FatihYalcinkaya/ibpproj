<?php

include("connection.php");


if (isset($_POST['register'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $telno = $_POST['telno'];

    $addUser = "INSERT INTO hesaplar (email,password,telno) VALUES('$email','$password','$telno') ";

    $runAddUser = mysqli_query($connection, $addUser);

    if ($runAddUser) {
        echo '<div class="alert alert-success" role="alert">
        registiration successfull
      </div>
      ';
    } else {
        echo '<div class="alert alert-success" role="alert">
        error while registiration
      </div>
      ';
    };
}

mysqli_close($connection);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Register Page</title>
</head>

<body>

    <div class="container p-5">
        <div class="card p-5">
            <form action="register.php" method="POST">
                <div class="mb-3">

                    <label for="email" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="email" name="email">

                </div>

                <div class="mb-3">

                    <label for="pasword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pasword" name="password">

                </div>
                <div class="mb-3">

                    <label for="telno" class="form-label">Telephone Number</label>
                    <input type="tel" class="form-control" id="telno" name="telno">

                </div>


                <button type="submit" class="btn btn-primary" name="register">Register</button>
            </form>
        </div>
    </div>















    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>