<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Numbers</title>
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
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        /* Main container styling */
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }

        /* Heading styling */
        h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Paragraph styling */
        p {
            font-size: 18px;
            color: #333;
            margin-top: 20px;
            line-height: 1.5;
        }

        /* Sum result styling */
        .result {
            font-size: 22px;
            color: #4caf50;
            font-weight: bold;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Sum of Numbers</h1>
        <p>Calculating the sum of numbers from 1 to 100...</p>

        <?php
            $number = 1;
            $sum = 0;

            while ($number <= 100) {
                $sum += $number;
                $number++;
            }

            echo "<p class='result'>The sum of numbers from 1 to 100 is: $sum</p>";
        ?>
    </div>
</body>
</html>
