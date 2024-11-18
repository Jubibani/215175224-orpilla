<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a String</title>

    <link rel="icon" type="image/png" href="../assets/CJ.jpg">
    <style>
        /* Reset margin and padding for all elements */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Main form container */
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Heading styling */
        h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Form elements styling */
        label {
            font-size: 16px;
            color: #555;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
        }

        input[type="text"]:focus, input[type="submit"]:focus {
            border-color: #4caf50;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.3);
        }

        /* Submit button styling */
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Result message styling */
        .output {
            font-size: 18px;
            margin-top: 20px;
            color: #333;
        }

        .error {
            color: #f44336;
        }

        /* Back link styles */
        .back-link {
            position: fixed;
            top: 150px;
            left: 150px;
            color: #4a5568;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            font-size: 1rem;
            position: relative;
            z-index: 1000;
        }

        .back-link:hover {
            color: #3182ce;
            transform: scale(1.05);
        }

        /* Enhanced arrow animation */
        .back-link::before {
            content: '←';
            display: inline-block;
            transition: all 0.3s ease;
            margin-right: 4px;
        }

        .back-link:hover::before {
            transform: translateX(-4px);
            color: #3182ce;
        }

        /* Optional: Add underline animation */
        .back-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -2px;
            left: 0;
            background-color: #3182ce;
            transition: width 0.3s ease;
        }

        .back-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body>
    <a href="../index.php" class="back-link">Back to Activities</a>
    <div class="form-container">
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

                echo "<p class='output'>Output: " . htmlspecialchars($reversed_string) . "</p>";
            }
        ?>
    </div>
</body>
</html>
