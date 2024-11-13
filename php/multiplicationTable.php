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
    </style>
</head>
<body>
    <div class="table-container">
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
