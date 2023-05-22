<?php

// her seyin ana sayfası burası 

session_start();

require 'dbconnection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

    <div class="container mt-4">

        <?php include('message.php');  ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User Details
                            <a href="adduser.php" class="btn btn-primary float-end">Add User</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>User Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $query = "SELECT * FROM user  ";
                                $query_run = mysqli_query($connection, $query);

                                //dbdeki verileri yazdırmak icin tabloya

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $userData) {

                                ?>
                                        <tr>
                                            <td><?= $userData['id']; ?></td>
                                            <td><?= $userData['email']; ?></td>
                                            <td><?= $userData['password']; ?></td>
                                            <td><?= $userData['usertype']; ?></td>
                                            <td>
                                                <a href="userview.php?id=<?= $userData['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="useredit.php?id=<?= $userData['id']; ?>" class="btn btn-success btn-sm">Edit</a>

                                                <form action="usercode.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_user" value="<?= $userData['id']; ?>" class="btn btn-danger btn-sm">Delete</button>

                                                </form>
                                            </td>
                                        </tr>
                                <?php

                                    }
                                } else {
                                    echo "<h4>No Record Found</h4>";
                                }

                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>