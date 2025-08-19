<?php
$servername = "localhost";
$username = "webuser";
$password = "webpass123";
$dbname = "webdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
