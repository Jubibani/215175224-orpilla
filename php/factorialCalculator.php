<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Basic styling for body */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f2f2f7;
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Container styling */
        .container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Header styling */
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #444;
        }

        /* Output styling */
        .result {
            font-size: 20px;
            color: #0066cc;
            margin-top: 15px;
            padding: 10px;
            background-color: #e0f7fa;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Factorial Calculator</h1>
        <?php
            $number = 5;
            $factorial = 1;

            for ($i = $number; $i >= 1; $i--) {
                $factorial *= $i;
            }

            echo "<div class='result'>Factorial of $number is: $factorial</div>";
        ?>
    </div>
</body>
</html>
