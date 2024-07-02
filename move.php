<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_controller";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the JSON data from the POST request
$data = json_decode(file_get_contents('php://input'), true);

$command = $data['direction'];

// Insert the command into the database
$sql = "INSERT INTO commands (command) VALUES ('$command')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
