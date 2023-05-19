<?php

$host = "localhost";
$username = "root";
$password = "";
$dbName = "uyelik_sistemi";


$connection = mysqli_connect($host, $username, $password, $dbName);
mysqli_set_charset($connection, "UTF8");
