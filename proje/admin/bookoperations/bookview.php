<!-- dbdeki kitap bilgilerini gösterme -->


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

                    <h4>Book View Details
                        <a href="bookindex.php" class="btn btn-danger float-end">BACK</a>
                    </h4>

                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['id'])) {

                        $bookID = mysqli_real_escape_string($connection, $_GET['id']);
                        $query = "SELECT * FROM book WHERE id='$bookID'";

                        $query_run = mysqli_query($connection, $query);

                        // var mı yok mu kontrol

                        if (mysqli_num_rows($query_run) > 0) {
                            $book = mysqli_fetch_array($query_run);

                    ?>



                            <div class="mb-3">
                                <label for="">Name</label>

                                <p class="form-control">
                                    <?= $book['name']; ?>
                                </p>
                            </div>

                            <div class="mb-3">
                                <label for="">Author</label>

                                <p class="form-control">
                                    <?= $book['author']; ?>
                                </p>
                            </div>

                            <div class="mb-3">
                                <label for="">Summary</label>

                                <p class="form-control">
                                    <?= $book['summary']; ?>

                                </p>
                            </div>

                            <div class="mb-3">
                                <label for="">Status</label>

                                <p class="form-control">
                                    <?= $book['status']; ?>
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