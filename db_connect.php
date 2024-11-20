<?php
// Database connection variables
$servername = "localhost";
$username = "root";       // Change if you have a custom username
$password = "";           // Change if you have a custom password
$dbname = "HireMeDB";     // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
