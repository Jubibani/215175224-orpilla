<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $number = 1;
        $sum = 0;

      
        while ($number <= 100) {
            $sum += $number; 
            $number++; 
        }
        
  
        echo "The sum of numbers from 1 to 100 is: $sum";
    ?>
</body>

</html>