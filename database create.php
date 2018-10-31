<?php
$host = "localhost";
$user = "root";
$pass = "";
$conn = new mysqli("$host", "$user", "$pass");
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 

$sql = "CREATE DATABASE attendance";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>