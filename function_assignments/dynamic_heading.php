<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Heading</title>
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
        <label for="heading">Type your Heading :</label>  <input type="text" name="heading" /><br />
        <label for="color">Give heading color (i.e. black, blue etc.) :</label> <input type="text" name="color" /><br />
        <input type="submit" name="submit" value="Submit!" />
    </form>
    <br />
    
    <?php
        $heading = $_POST["heading"];
        $color = $_POST["color"];

        function heading($heading, $color) {
           return  $heading != 0 ? "<h1 style= ' color: $color '>" . $heading . "</h1" : " "; 
        }
        echo heading($heading, $color);
    ?>

</body>
</html>