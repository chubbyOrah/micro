<?php
$servername = "localhost"; // Replace with your database server name or IP address
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "micro"; // Replace with your database name

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// else
// echo "connected";

// Now you can use $conn to perform database operations
?>
