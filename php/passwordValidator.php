<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Validator</title>
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
        }

        /* Title text */
        h1 {
            font-size: 24px;
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Styling for form labels */
        label {
            font-size: 16px;
            color: #555;
            margin-bottom: 8px;
            display: block;
        }

        /* Input styling */
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
        }

        input[type="password"]:focus {
            border-color: #4caf50;
            box-shadow: 0 0 5px rgba(76, 175, 80, 0.3);
        }

        /* Submit button styling */
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #4caf50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Message display styling */
        .message {
            text-align: center;
            margin-top: 15px;
            font-size: 18px;
        }

        /* Error message styling */
        .error {
            color: #f44336;
        }

        /* Success message styling */
        .success {
            color: #4caf50;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Password Validator</h1>

        <?php
            // Check if form is submitted, also handles the input
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user_password = $_POST['password']; 
                
                if ($user_password != "admin") {
                    echo "<p class='message error'>Incorrect password.</p>";
                } else {
                    echo "<p class='message success'>Access Granted.</p>";
                }
            }
        ?>

        <!-- HTML form to collect user input -->
        <form method="POST">
            <label for="password">Please enter the password:</label><br>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
