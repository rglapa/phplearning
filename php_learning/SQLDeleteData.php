<?php
$servername = "localhost";
$username = "root";
$password = "PokemonLover#1";
$dbname = "myDB";

$conn = new mysqli($servername,$username,$password,$dbname);
// Connection check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL Lines - Use .= when adding multiple queries
$sql = "DELETE FROM MyGuests WHERE id=4;";
$sql .= "DELETE FROM MyGuests WHERE id=1";

if ($conn->multi_query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}