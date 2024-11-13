<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Sequence</title>
</head>
<body>
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

</body>
</html>