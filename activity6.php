<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Iteration with foreach</title>
</head>
<body>
    <?php


        $movies = [
            "The Shawshank Redemption",
            "Inception",
            "The Dark Knight",
            "Interstellar",
            "Parasite"
        ];
        
        
        $counter = 1; 
        foreach ($movies as $movie) {
            echo "$counter. $movie<br>"; 
            $counter++; 
        }

    ?>

</body>
</html>