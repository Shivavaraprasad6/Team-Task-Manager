<?php
// Database connection using Railway Variable NAMES
$conn = new mysqli(
    getenv('MYSQLHOST'), 
    getenv('MYSQLUSER'), 
    getenv('MYSQLPASSWORD'), 
    getenv('MYSQLDATABASE'), 
    getenv('MYSQLPORT')
);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start session for user login tracking
session_start();
?>
