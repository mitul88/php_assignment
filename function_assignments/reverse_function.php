<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a string</title>
    <style>
        body{
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content:center;
            align-items:center;
            text-align: center;
        }
    </style>
</head>
<body>

    <form action="" method="post">
        <label for="words">Type a string here :</label> <br>  <input type="text" name="words" /><br />
        <input type="submit" name="submit" value="Submit!" />
    </form>

        <?php
            $words = $_POST["words"];

            function rev($x) {
                return strrev($x);
            }
            
            echo rev($words);
        ?>

</body>
</html>