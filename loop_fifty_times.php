<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop 50 Times</title>
</head>
<body>
    <h1>50 Times loop using increment</h1>
    <?php
        for ($i = 10000; $i <= 10050; $i++) {
            echo "The number is: $i <br>";
          }
    ?>
    <h1>50 Times loop using decrement</h1>
    <?php
        for ($i = 10000; $i >= 9950; $i--) {
            echo "The number is: $i <br>";
          }
    ?>
</body>
</html>