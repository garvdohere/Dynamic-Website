<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO messages (name, message) VALUES ('$name', '$message')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirect back
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
