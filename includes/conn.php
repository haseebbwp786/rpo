<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "rpo";

// Create connection
$conn = new mysqli($host, $username, $password);
mysqli_select_db($conn, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>