<!-- // <?php
// $conn = new mysqli("sql305.infinityfree.com", "if0_41795929", "Shiva1122", "if0_41795929_taskm");

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// session_start();
// ?> -->

<?php
// Database connection using Railway Environment Variables
$conn = new mysqli(
    getenv('mysql.railway.internal'), 
    getenv('root'), 
    getenv('odWpILyaYBuvfYWZOVPVxZDlcZDMRNXV'), 
    getenv('railway'), 
    getenv('3306')
);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Start session for user login tracking
session_start();
?>
