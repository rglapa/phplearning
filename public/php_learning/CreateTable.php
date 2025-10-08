<heading />
<endheading />
<?php
$servername = "localhost";
$username = "ruben";
$password = "Nhn7ircg";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "Show Databases;";
echo $sql . "<br><br>";
$result = $conn->query($sql);
$data = [];

$output = $result->fetch_All(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($output);
echo "</pre>";
// echo json_encode($data);
// if ($conn->query($sql) === TRUE) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }
$conn->close();
?>

<div class="box">
    <a href="/">Link to Home</a>
</div>
<footer />