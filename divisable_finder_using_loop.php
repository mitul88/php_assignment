<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisable finder using Loop</title>
</head>
<body>
    <h1>3 and 4 Divisable Indices within 500 are below:</h1>
    <?php
        for ($i = 0; $i < 501; $i++) {
            if($i % 3 == 0 && $i % 4 == 0) {
                echo "$i, ";
            }
        }
    ?>
</body>
</html>