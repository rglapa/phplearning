<!DOCTYPE html>
<html lang="en">
<head>
    <title>MySQL</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "PokemonLover#1";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql =  "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "Connected Successfully";
$conn->close();
?>
<br><br>
<div class="box">
    <a href="/index.html">Link to Home</a>
</div>
</body>
</html>
