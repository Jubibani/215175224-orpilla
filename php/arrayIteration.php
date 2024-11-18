<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Iteration with foreach</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Basic styling for body */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f7f8fc;
            color: #333;
            margin: 0;
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
        }

        /* Header styling */
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #444;
        }

        /* List styling */
        ol {
            padding: 0;
            list-style: none;
        }

        /* Individual item styling */
        li {
            background-color: #f0f0f5;
            border-radius: 8px;
            margin: 10px 0;
            padding: 10px;
            font-size: 18px;
            color: #555;
            transition: background-color 0.3s ease;
        }

        /* Hover effect */
        li:hover {
            background-color: #e0e0f0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Top Movies</h1>
        <ol>
            <?php
                // Array of movies
                $movies = [
                    "The Shawshank Redemption",
                    "Inception",
                    "The Dark Knight",
                    "Interstellar",
                    "Parasite"
                ];

                // Counter not strictly necessary in <ol>, but added for flexibility
                $counter = 1; 
                foreach ($movies as $movie) {
                    echo "<li>$counter. $movie</li>";
                    $counter++;
                }
            ?>
        </ol>
    </div>
</body>
</html>
