<!-- kullanıcı bilgilerini dbye  eklemek icin ALINDIGI kod bootstrap falan kullanıldı tasarımda -->

<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add User</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php') ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card-header">

                    <h4>User Add
                        <a href="userindex.php" class="btn btn-danger float-end">BACK</a>
                    </h4>

                </div>
                <div class="card-body">
                    <form action="usercode.php" method="POST">

                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="">User Type</label>
                            <select name="usertype" class="form-control" id="">
                                <option value="">--select user type--</option>
                                <option value="admin">admin</option>
                                <option value="user">user</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="save_user" class="btn btn-primary">Add User</button>
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