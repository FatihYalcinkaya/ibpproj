<!DOCTYPE html>
<html>

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Email</label>
        <input type="email" name="email" placeholder="enter your email"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="enter your password"><br>

        <button type="submit">Login</button>
    </form>
</body>

</html>