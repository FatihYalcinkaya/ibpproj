<?php

session_start();

if (isset($_SESSION['email'])) {
    echo "<h3>" . $_SESSİON["email"] . "</h3>";
    echo "<a href'exit.php'>CIKIS YAP </a>";
} else {
    echo "invalid request";
}
