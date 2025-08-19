<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>My Dynamic Website</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 20px; }
        input, textarea { width: 300px; padding: 8px; margin: 5px 0; }
        button { padding: 8px 12px; cursor: pointer; }
        .msg { border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Welcome to My Dynamic Website 🚀</h1>
    <h3>Leave a Message:</h3>
    <form method="post" action="save.php">
        <input type="text" name="name" placeholder="Your name" required><br>
        <textarea name="message" placeholder="Your message" required></textarea><br>
        <button type="submit">Submit</button>
    </form>

    <h3>Messages:</h3>
    <?php
    $sql = "SELECT * FROM messages ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='msg'><strong>" . htmlspecialchars($row['name']) . "</strong><br>"
                 . htmlspecialchars($row['message']) . "<br><small>" . $row['created_at'] . "</small></div>";
        }
    } else {
        echo "No messages yet!";
    }
    ?>
</body>
</html>
