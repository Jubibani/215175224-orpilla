<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
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
            background-color: #f5f7fa;
            font-family: Arial, sans-serif;
        }

        /* Container styling */
        .table-container {
            max-width: 300px;
            width: 100%;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Header styling */
        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 15px;
        }

        /* Multiplication line styling */
        .line {
            font-size: 18px;
            color: #007bff;
            margin: 5px 0;
            padding: 8px;
            border-bottom: 1px solid #e0e0e0;
        }

        /* Last line styling without bottom border */
        .line:last-child {
            border-bottom: none;
        }

        /* Add the header container style */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        /* Back link styles outside container */
        .back-link {
            float: right;
            position: relative;
            top: 350px;
            left: 150px;
            color: #4a5568;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            font-size: 1rem;
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
    <div class="table-container">
        <div class="header">
            <h1>Multiplication Table</h1>
        </div>
        <h1>Multiplication Table of 7</h1>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                $result = 7 * $i;
                echo "<div class='line'>7 x $i = $result</div>";
            }
        ?>
    </div>
</body>
</html>
