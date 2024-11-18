<?php
require_once 'db.php';

try {
    $result = $conn->query("SELECT * FROM contacts ORDER BY name");
    $contacts = $result->fetch_all(MYSQLI_ASSOC);
} catch(Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Phonebook</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <h1>Phonebook Directory</h1>
            <a href="../index.php" class="back-link">Back to Activities</a>
        </div>
        <a href="add.php" class="add-button">+ Add New Contact</a>
        
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($contacts)): ?>
                    <tr>
                        <td colspan="4" style="text-align: center;">No contacts found</td>
                    </tr>
                <?php else: ?>
                    <?php foreach($contacts as $contact): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($contact['name']); ?></td>
                            <td><?php echo htmlspecialchars($contact['phone']); ?></td>
                            <td><?php echo htmlspecialchars($contact['email']); ?></td>
                            <td class="actions">
                                <a href="edit.php?id=<?php echo $contact['id']; ?>" class="edit-button">Edit</a>
                                <a href="delete.php?id=<?php echo $contact['id']; ?>" 
                                   class="delete-button" 
                                   onclick="return confirm('Are you sure you want to delete this contact?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html> 