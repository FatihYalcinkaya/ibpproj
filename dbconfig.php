<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "lmsdb";


$connection = mysqli_connect($hostname, $username, $password, $dbname);

if (!$connection) {
    echo "connection failed";
}
