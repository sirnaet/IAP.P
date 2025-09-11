<?php
// DB connection
$conn = new mysqli("localhost", "root", "malindi100", "azhar");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get users in ascending order
$sql = "SELECT username FROM users ORDER BY username ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ol>"; // ordered list for numbering
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row['username'] . "</li>";
    }
    echo "</ol>";
} else {
    echo "No users found.";
}
$conn->close();
?>
