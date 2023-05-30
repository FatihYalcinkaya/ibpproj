<!-- kitap bilgilerini dbye eklemek icin -->


<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add Book</title>
</head>

<body>
    <div class="container mt-5">

        <?php include('message.php') ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card-header">

                    <h4>Add Book
                        <a href="bookindex.php" class="btn btn-danger float-end">BACK</a>
                    </h4>

                </div>
                <div class="card-body">
                    <form action="bookcode.php" method="POST">

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="name" name="name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Author</label>
                            <input type="text" name="author" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Summary</label>
                            <input type="text" name="summary" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Status</label>
                            <select name="status" class="form-control" id="">
                                <option value="">--status--</option>
                                <option value="available">available</option>
                                <option value="unavailable">unavailable</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="save_book" class="btn btn-primary">Add Book</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>



</html>