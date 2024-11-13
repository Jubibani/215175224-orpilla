<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
</head>
<body>
    <h2>Prime Number Checker</h2>
    <form method="POST" action="">
        <label for="number">Enter a number to check if it's prime:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Check">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $number = (int)$_POST["number"];
            
            if ($number < 2) {
                echo "$number is not a prime number.";
                exit;
            }

            $is_prime = true;

    
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    $is_prime = false;
                    break;
                }
            }

        
            if ($is_prime) {
                echo "$number is a prime number.";
            } else {
                echo "$number is not a prime number.";
            }
        }
    ?>
</body>
</html>
