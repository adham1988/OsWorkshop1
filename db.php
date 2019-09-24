<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "CarInfo";

// Creating mysql connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Checking mysql connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Writing a mysql query to retrieve data
$sql = "SELECT * FROM car;";
$result = $conn->query($sql);
?>
