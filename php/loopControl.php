<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Control with break and continue</title>

    <link rel="icon" type="image/png" href="../assets/CJ.jpg">
    <style>
        /* Reset and base styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        /* Container styling */
        .container {
            max-width: 500px;
            width: 100%;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Header styling */
        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-size: 16px;
            color: #555;
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 60%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Output styling */
        .output {
            font-size: 18px;
            color: #333;
            margin-top: 20px;
            background-color: #e9f7fd;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #007bff;
        }

        /* Add the header container style */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        /* Back link styles */
        .back-link {
            color: #4a5568;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            font-size: 1rem;
            position: relative;
        }

        .back-link:hover {
            color: #3182ce;
            transform: scale(1.05);
        }

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
    <div class="container">
        <div class="header">
            <h1>Loop Control</h1>
            <a href="../index.php" class="back-link">Back to Activities</a>
        </div>
        <form method="post">
            <label>-- Press [5] to skip 5, [8] to stop at 8, or any other key to continue --</label>
            <input type="text" name="user_input" placeholder="Enter your choice" />
            <input type="submit" value="Submit" />
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $user_input = intval($_POST['user_input']);
                
                echo "<div class='output'>";
                for ($i = 1; $i <= 10; $i++) {
                    if ($user_input == 5 && $i == 5) {
                        continue;
                    }

                    if ($user_input == 8 && $i == 8) {
                        echo $i . " ";
                        break;
                    }

                    echo $i . " ";
                }
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>
