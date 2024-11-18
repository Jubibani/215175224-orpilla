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
            position: relative;
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

        /* Add the header container style */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        /* Back link styles */
        .back-link {
            position: absolute;
            top: -40px;
            left: 0;
            color: #4a5568;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            font-size: 1rem;
            white-space: nowrap;
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
            <h1>Factorial Calculator</h1>
            <a href="../index.php" class="back-link">Back to Activities</a>
        </div>
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

