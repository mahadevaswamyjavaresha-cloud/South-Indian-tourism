<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "kerala";
$port = 3307; // Use 3306 if that's your MySQL port

$conn = new mysqli($host, $user, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>