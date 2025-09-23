<heading />

<endheading />
<?php
$servername = "localhost";
$username = "root";
$password = "PokemonLover#1";

$conn = new mysqli($servername,$username,$password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<footer />