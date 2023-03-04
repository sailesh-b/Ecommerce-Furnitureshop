<?php
$servername = "localhost";
$username = "root";
$password = "vignes021";
$dbname = "basco";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 


?>