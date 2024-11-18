<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $stmt = $conn->prepare("INSERT INTO contacts (name, phone, email) VALUES (:name, :phone, :email)");
        $stmt->execute([
            ':name' => $_POST['name'],
            ':phone' => $_POST['phone'],
            ':email' => $_POST['email']
        ]);
        header("Location: index.php");
        exit();
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Contact</title>
</head>
<body>
    <h1>Add New Contact</h1>
    <form method="POST">
        <p>
            <label>Name:</label>
            <input type="text" name="name" required>
        </p>
        <p>
            <label>Phone:</label>
            <input type="text" name="phone" required>
        </p>
        <p>
            <label>Email:</label>
            <input type="email" name="email" required>
        </p>
        <button type="submit">Add Contact</button>
    </form>
    <p><a href="index.php">Back to Phonebook</a></p>
</body>
</html> 