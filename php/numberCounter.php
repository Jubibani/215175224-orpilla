<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Counter</title>


    <link rel="icon" type="image/png" href="../assets/CJ.jpg">
    <style>
        /* Basic reset and styling */
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
            background-color: #f3f4f6;
            font-family: Arial, sans-serif;
        }

        /* Styling the main container */
        .counter-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        /* Header styling */
        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
            width: 100%; /* Ensures the heading spans the full width */
        }

        /* Number styling */
        .number {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            min-width: 60px; /* Minimum width */
            height: 60px;
            margin: 5px;
            padding: 12px;
            font-size: 20px;
            color: #ffffff;
            background-color: #4caf50;
            border-radius: 8px;
            transition: background-color 0.3s;
            flex-shrink: 0; /* Prevent number boxes from shrinking */
        }

        /* Hover effect for numbers */
        .number:hover {
            background-color: #45a049;
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
            top: 250px;
            left: -410px;
            color: #4a5568;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            font-size: 1rem;
            z-index: 1000;
            white-space: nowrap; /* Prevent text from wrapping */
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

        /* Update numbers-wrapper for horizontal alignment */
        .numbers-wrapper {
            display: flex;
            flex-wrap: nowrap; /* Prevent wrapping */
            gap: 10px;
            justify-content: flex-start; /* Align from start */
            margin-top: 20px;
            overflow-x: auto; /* Allow horizontal scrolling if needed */
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <div class="counter-container">
        <div class="header">
            <h1>Number Counter</h1>
            <a href="../index.php" class="back-link">Back to Activities</a>
        </div>
        <div class="numbers-wrapper">
            <?php
                for ($number = 1; $number <= 20; $number++) {  
                    if ($number % 2 == 0) {  
                        echo "<span class='number'>$number</span>";  
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
