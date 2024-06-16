<?php
$servername = "172.16.91.93"; // IP ou hostname da VM3 onde o MySQL está rodando
$username = "juliana";
$password = "admin";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
