<?php
session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbName = "project";
$conn = new mysqli($servername, $username, $password, $dbName);
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
} 



