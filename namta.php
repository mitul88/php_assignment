<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namta Using For Loop</title>
</head>
<body>
    <h1>Namta:</h1>
        <?php
            for ($i = 2; $i <= 5; $i++) {
                echo "Namta for $i : <br>";
                for ($j = 1; $j <= 10; $j++) {
                     $result = $i * $j;
                    echo  "$i * $j = $result <br>";
                }
            }
        ?>
</body>
</html>