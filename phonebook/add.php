<?php
include 'db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $stmt = $conn->prepare("INSERT INTO contacts (name, phone, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $_POST['name'], $_POST['phone'], $_POST['email']);
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
    <title>Add New Contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Add New Contact</h1>
        
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
                >
            </div>
            
            <div class="form-actions">
                <button type="submit" class="submit-button">Save Contact</button>
                <a href="index.php" class="back-link">Back to Phonebook</a>
            </div>
        </form>
    </div>
</body>
</html> 