<?php

session_start();

$host = "localhost";
$username = "root";
$password = "";
$dbname = "lmsdb";

$connection = mysqli_connect($host, $username, $password, $dbname);

mysqli_set_charset($connection, "UTF8");
