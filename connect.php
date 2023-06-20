<?php
$servername = "localhost";
$username = "root";
$password = "";


// Create connection 
$conn = new mysqli($servername, $username, $password);

// Check connection 
if ($conn->connect_error) {
  die("Connection to the server is failed: " . $conn->connect_error);
}
echo "Connected to the server successfully";

?>









