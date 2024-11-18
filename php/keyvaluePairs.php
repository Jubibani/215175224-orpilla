<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Key Value Pairs</title>
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
            max-width: 400px;
            width: 100%;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        /* Title styling */
        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Key-value list styling */
        .key-value-pairs {
            font-size: 18px;
            color: #444;
            line-height: 1.6;
        }

        /* Individual key-value pair styling */
        .pair {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            margin-bottom: 8px;
            border-bottom: 1px solid #e0e0e0;
        }

        .key {
            font-weight: bold;
            color: #007bff;
        }

        .value {
            color: #555;
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
            top: 190px;
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
    <div class="container">
        <div class="header">
            <h1>Key Value Pairs</h1>
        </div>
        <div class="key-value-pairs">
            <?php
                $student_info = [
                    "Name" => "Alice",
                    "Age" => 20,
                    "Grade" => "A",
                    "City" => "Baguio"
                ];

                foreach ($student_info as $key => $value) {
                    echo "<div class='pair'><span class='key'>$key</span><span class='value'>$value</span></div>";
                }
            ?>
        </div>
    </div>
</body>
</html>
