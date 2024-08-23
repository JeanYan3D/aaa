<?php
// Database configuration
$host = 'localhost';
$dbname = 'aaa';
$username = 'root';
$password = '';

// Create a connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optionally, you can set the character set
//mysqli_set_charset($conn, 'utf8');

?>