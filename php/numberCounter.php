<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Counter</title>
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
            max-width: 500px;
            width: 100%;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Add space between the numbers */
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
            display: inline-block;
            margin: 5px;
            padding: 12px 20px;
            font-size: 20px;
            color: #ffffff;
            background-color: #4caf50;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        /* Hover effect for numbers */
        .number:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
    <div class="counter-container">
        <h1>Even Numbers from 1 to 20</h1>
        <?php
            $number = 1; 
            
            while ($number <= 20) {  
                if ($number % 2 == 0) {  
                    echo "<span class='number'>$number</span>";  
                }
                $number++;  
            }
        ?>
    </div>
</body>
</html>
