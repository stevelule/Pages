<?php
$host = "127.0.0.1";
$user = "root";
$pass = ""; 
$dbname = "user_system";
$port = 3308;

// Create connection
$conn = mysqli_connect($host, $user, $pass, $dbname, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
