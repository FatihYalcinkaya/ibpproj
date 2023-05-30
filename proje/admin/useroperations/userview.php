<!-- dbdeki bilgileri gostermek icin kod bootstrap falan kullanıldı tasarımda -->

<?php

require 'dbconnection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>User Edit</title>
</head>

<body>

    <div class="container mt-5">


        <div class="row">
            <div class="col-md-12">
                <div class="card-header">

                    <h4>User View Details
                        <a href="userindex.php" class="btn btn-danger float-end">BACK</a>
                    </h4>

                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['id'])) {

                        $userID = mysqli_real_escape_string($connection, $_GET['id']);
                        $query = "SELECT * FROM user WHERE id='$userID'";

                        $query_run = mysqli_query($connection, $query);

                        // var mı yok mu kontrol

                        if (mysqli_num_rows($query_run) > 0) {
                            $user = mysqli_fetch_array($query_run);

                    ?>



                            <div class="mb-3">
                                <label for="">Email</label>

                                <p class="form-control">
                                    <?= $user['email']; ?>
                                </p>
                            </div>

                            <div class="mb-3">
                                <label for="">Password</label>

                                <p class="form-control">
                                    <?= $user['password']; ?>
                                </p>
                            </div>

                            <div class="mb-3">
                                <label for="">User Type</label>

                                <p class="form-control">
                                    <?= $user['usertype']; ?>

                                </p>
                            </div>



                    <?php

                        } else {
                            echo "<h4>No ID Found!! </h4>";
                        }
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>