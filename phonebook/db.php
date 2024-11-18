<?php
$servername = "localhost";
$username = "root";
$password = "";  // Update if you have set a password
$dbname = "phonebook";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Remove or comment out this line in production
    // echo "Connected successfully";
} catch(PDOException $e) {
    // Don't expose detailed error messages in production
    error_log("Connection failed: " . $e->getMessage());
    die("Database connection failed. Please try again later.");
}
?> 