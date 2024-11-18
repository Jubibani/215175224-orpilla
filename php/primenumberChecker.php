<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
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
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
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

        input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
        }

        input[type="number"]:focus, input[type="submit"]:focus {
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
        .message {
            font-size: 18px;
            margin-top: 20px;
        }

        .error {
            color: #f44336;
        }

        .success {
            color: #4caf50;
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
        <h2>Prime Number Checker</h2>
        
        <form method="POST" action="">
            <label for="number">Enter a number to check if it's prime:</label>
            <input type="number" id="number" name="number" required>
            <input type="submit" value="Check">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = (int)$_POST["number"];
                
                if ($number < 2) {
                    echo "<p class='message error'>$number is not a prime number.</p>";
                    exit;
                }

                $is_prime = true;

                for ($i = 2; $i <= sqrt($number); $i++) {
                    if ($number % $i == 0) {
                        $is_prime = false;
                        break;
                    }
                }

                if ($is_prime) {
                    echo "<p class='message success'>$number is a prime number.</p>";
                } else {
                    echo "<p class='message error'>$number is not a prime number.</p>";
                }
            }
        ?>
    </div>
</body>
</html>
