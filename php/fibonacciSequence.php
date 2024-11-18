<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Sequence</title>
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
            background-color: #f2f4f8;
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
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Header styling */
        h1 {
            font-size: 24px;
            color: #444;
            margin-bottom: 20px;
        }

        /* Styling for the output */
        .sequence {
            font-size: 18px;
            color: #0066cc;
            margin-top: 15px;
            padding: 15px;
            background-color: #e0f7fa;
            border-radius: 8px;
            line-height: 1.6;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Fibonacci Sequence</h1>
        <div class="sequence">
            <?php
                $first = 0;
                $second = 1;
                $counter = 0;
                $total_numbers = 10;

                while ($counter < $total_numbers) {
                    echo $first . " ";
                    $next = $first + $second;
                    $first = $second;
                    $second = $next;
                    $counter++;
                }
            ?>
        </div>
    </div>
</body>
</html>
