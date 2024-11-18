<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz Challenge</title>
    <style>
        /* Reset basic styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Basic styling for the body */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f6f8;
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Container styling */
        .container {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Header styling */
        h1 {
            font-size: 26px;
            color: #444;
            margin-bottom: 20px;
        }

        /* Styling for the output */
        .fizzbuzz-output {
            font-size: 18px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
            line-height: 1.6;
        }

        /* Individual item styling */
        .item {
            padding: 10px 15px;
            border-radius: 5px;
            background-color: #e0f7fa;
            color: #00796b;
        }

        .fizz {
            background-color: #fff3e0;
            color: #e65100;
        }

        .buzz {
            background-color: #e1bee7;
            color: #6a1b9a;
        }

        .fizzbuzz {
            background-color: #c8e6c9;
            color: #2e7d32;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>FizzBuzz Challenge</h1>
        <div class="fizzbuzz-output">
            <?php
                for ($i = 1; $i <= 50; $i++) {
                    if ($i % 3 == 0 && $i % 5 == 0) {
                        echo "<div class='item fizzbuzz'>FizzBuzz</div>";
                    } elseif ($i % 3 == 0) {
                        echo "<div class='item fizz'>Fizz</div>";
                    } elseif ($i % 5 == 0) {
                        echo "<div class='item buzz'>Buzz</div>";
                    } else {
                        echo "<div class='item'>$i</div>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
