<?php
$servername = "localhost";
$username = "root";
$password = ""; // Assuming your password is empty, if not, provide the correct password here
$database = "library";

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Thank you for donating!";
?>

