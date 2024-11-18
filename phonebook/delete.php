<?php
include 'db.php';

if (isset($_GET['id'])) {
    try {
        $stmt = $conn->prepare("DELETE FROM contacts WHERE id = ?");
        $stmt->bind_param("i", $_GET['id']);
        $stmt->execute();
    } catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

header("Location: index.php");
exit();