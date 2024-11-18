<?php
include 'db.php';

$message = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch existing contact data
    try {
        $stmt = $conn->prepare("SELECT * FROM contacts WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $contact = $result->fetch_assoc();
        
        if (!$contact) {
            header("Location: index.php");
            exit();
        }
    } catch(Exception $e) {
        $message = "Error: " . $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $stmt = $conn->prepare("UPDATE contacts SET name = ?, phone = ?, email = ? WHERE id = ?");
        $stmt->bind_param("sssi", $_POST['name'], $_POST['phone'], $_POST['email'], $id);
        $stmt->execute();
        header("Location: index.php");
        exit();
    } catch(Exception $e) {
        $message = "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/CJ.jpg">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Edit Contact</h1>
        
        <?php if ($message): ?>
            <div class="alert"><?php echo $message; ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    required 
                    placeholder="Enter full name"
                    value="<?php echo htmlspecialchars($contact['name']); ?>"
                >
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input 
                    type="tel" 
                    id="phone" 
                    name="phone" 
                    required 
                    placeholder="Enter phone number"
                    value="<?php echo htmlspecialchars($contact['phone']); ?>"
                >
            </div>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required 
                    placeholder="Enter email address"
                    value="<?php echo htmlspecialchars($contact['email']); ?>"
                >
            </div>
            
            <div class="form-actions">
                <button type="submit" class="submit-button">Update Contact</button>
                <a href="index.php" class="back-link">Back to Phonebook</a>
            </div>
        </form>
    </div>
</body>
</html>