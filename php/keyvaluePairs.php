<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Key-Value Pairs with foreach</title>
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Information</h1>
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
