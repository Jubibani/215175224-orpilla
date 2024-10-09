<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Counter</title>
</head>
<body>

    <?php

        $number = 1; 
        
        while ($number <= 20) {  
            if ($number % 2 == 0) {  
                echo $number . " ";  
            }
            $number++;  
        }
    
    ?>
    

</body>
</html>