<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a String</title>
</head>
<body>
    <h2>Reverse a String</h2>
    <form method="POST" action="">
        <label for="input_string">Input:</label>
        <input type="text" id="input_string" name="input_string" required>
        <input type="submit" value="Reverse">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $input_string = $_POST["input_string"];
        
        $reversed_string = "";
        
        
        for ($i = strlen($input_string) - 1; $i >= 0; $i--) {
            $reversed_string .= $input_string[$i];
        }
        
     
        echo "<p>Output: " . htmlspecialchars($reversed_string) . "</p>";
    }
    ?>
</body>
</html>
