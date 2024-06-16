<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$conn = new mysqli("db", "sqli", "sqli", "sqli");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
