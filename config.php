<?php
$conn = new mysqli("sql305.infinityfree.com", "if0_41795929", "Shiva1122", "if0_41795929_taskm");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
?>