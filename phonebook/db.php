<?php
    $servername = "localhost";
    $username = "phonebook_user";
    $password = "password123";
    $dbname = "phonebook";

    try {
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            throw new Exception('Connection failed: ' . $conn->connect_error);
        }
    } catch(Exception $e) {
        echo "Connection failed: " . $e->getMessage();
        echo "<br>PHP Version: " . phpversion();
        echo "<br>Loaded extensions: " . implode(', ', get_loaded_extensions());
        die();
    }
?> 