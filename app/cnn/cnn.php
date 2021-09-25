<?php
date_default_timezone_set('Asia/Colombo');

$servername = "localhost";
$username = "mahinda_ruchini";
$password = "9($0si%?7g16";
$dbname = "mahinda_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


