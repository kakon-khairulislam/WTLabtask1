<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql ="CREATE TABLE `data` (
    `Name` varchar(20) NOT NULL,
    `Email` text NOT NULL,
    `Username` varchar(10) NOT NULL,
    `Password` text NOT NULL,
    `Retypedpassword` text NOT NULL,
    `Gender` varchar(10) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;"

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}