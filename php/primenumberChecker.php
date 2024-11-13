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
    </style>
</head>
<body>
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
