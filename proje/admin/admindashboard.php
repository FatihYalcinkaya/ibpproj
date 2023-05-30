<?php




?>


<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 220px;
            background-color: #333;
            padding-top: 20px;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .menu li {
            list-style: none;
            padding: 15px;
            border-bottom: 1px solid #444;
        }

        .menu li:last-child {
            border-bottom: none;
        }

        .menu li a {
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .menu li a i {
            margin-right: 10px;
        }

        .main-content {
            margin-left: 220px;
            padding: 30px;
        }

        .header {
            margin-bottom: 30px;
        }

        .info {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <ul class="menu">
            <li class="active"><a href="#"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="./useroperations/userindex.php"><i class="fas fa-users"></i> User Operations</a></li>
            <li><a href="./bookoperations/bookindex.php"><i class="fas fa-book"></i> Book Operations</a></li>
            <li><a href="announcement.php"><i class="fas fa-envelope"></i> Announcement</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>

        </ul>
    </div>
    <div class="main-content">
        <div class="header">
            <h1>Admin Panel</h1>
        </div>
        <div class="info">
            <p>This is a sample admin panel created using HTML and CSS.</p>
        </div>
    </div>
</body>

</html>