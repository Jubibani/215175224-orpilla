<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Validator</title>
</head>
<body>
    <?php
        // Check if form is submitted, also handels thre input
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user_password = $_POST['password']; 
            
            if ($user_password != "admin") {
                echo "<p>Incorrect password.</p>";
            } else {
                echo "<p>Access Granted.</p>";
            }
        }
        ?>

        <!-- HTML form to collect user input -->
        <form method="POST">
            <label for="password">Please enter the password:</label><br>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" value="Submit">
        </form>

</body>
</html>