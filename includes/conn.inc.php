<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "db_zeitaufzeichnung";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

$conn->set_charset("utf8mb4");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>