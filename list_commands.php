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

// Select the latest command from the database
$sql = "SELECT command FROM commands ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $latest_command = $row["command"];
} else {
    $latest_command = "No command recorded yet";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latest Command</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: url('4.jpg') no-repeat center center fixed;
        }
        .container {
            text-align: center;
            padding: 20px;
            border: 3px solid #a05b56;
            border-radius: 5px;
            background-color: #fff;
        }
        h1 {
            margin-bottom: 20px;
        }
        .command {
            font-size: 24px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Latest Command Sent</h1>
        <div class="command"><?php echo $latest_command; ?></div>
    </div>
</body>
</html>
