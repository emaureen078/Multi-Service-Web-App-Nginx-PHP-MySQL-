<?php
$pdo = new PDO("mysql:host=mysql;dbname=testdb", "user", "password");

$stmt = $pdo->query("SELECT * FROM users");

while ($row = $stmt->fetch()) {
    echo "User: " . $row['name'] . "<br>";
}
?>
