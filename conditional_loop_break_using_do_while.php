<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Loop Break</title>
</head>
<body>
    <?php
        $i = 1;

        do {
            echo "Index : $i <br>";
            $i += 3;
        } while ($i % 11 != 0);
    
    echo "$i divisable by 11 ! So the loop breaks here."
    ?>
</body>
</html>