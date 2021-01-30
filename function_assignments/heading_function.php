<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heading function</title>
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
        <label for="heading">Type your heading here :</label> <br>  <input type="text" name="heading" /><br />
        <input type="submit" name="submit" value="Submit!" />
    </form>

    <br />

    <?php
        $heading = $_POST["heading"];

        function createHeading($x) {
            return "<h1>" . $x . "</h1>";
        }
    
        echo createHeading($heading);
    ?>
</body>
</html>