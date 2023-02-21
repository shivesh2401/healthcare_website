<?php
$servername = "sql109.ezyro.com";
$username = "ezyro_32913168";
$password = "";
$dbname = "ezyro_32913168_suhasinii";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Contact (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(30) NOT NULL,
Location VARCHAR(80) NOT NULL,
Number int(10) NOT NULL,
Problem varchar(150)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Registration created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
