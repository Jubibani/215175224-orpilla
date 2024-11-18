<?php
require_once 'db.php';

try {
    $stmt = $conn->query("SELECT * FROM contacts ORDER BY name");
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Phonebook</title>
</head>
<body>
    <h1>Phonebook</h1>
    <a href="add.php">Add New Contact</a>
    
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
        </tr>
        <?php foreach($contacts as $contact): ?>
        <tr>
            <td><?php echo htmlspecialchars($contact['name']); ?></td>
            <td><?php echo htmlspecialchars($contact['phone']); ?></td>
            <td><?php echo htmlspecialchars($contact['email']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html> 