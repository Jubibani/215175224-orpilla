<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Loop Control with break and continue</title>
</head>
<body>
<body>
    <form method="post"> 
        <label>-- Press [5] to skip 5, [8] to stop at 8, or any other key to continue --</label>
        <br>
        <input type="text" name="user_input" placeholder="Enter your choice" />
        <input type="submit" value="Submit" /> 
    </form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user_input = intval($_POST['user_input']); 
            

            for ($i = 1; $i <= 10; $i++) {
                if ($user_input == 5 && $i == 5) {
                    continue; 
                }

                if ($user_input == 8 && $i == 8) {
                    echo $i . " "; 
                    break; 
                }

                echo $i . " "; 
            }
        }
    ?>
</body>


</body>
</html>