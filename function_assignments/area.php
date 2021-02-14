<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of Circle Rectangle Square</title>
    <style>
        body{
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content:center;
            align-items:center;
            text-align: center;
        }
        hr{
            margin: 30px 0;
        }
    </style>
</head>
<body>
    
    <form action="" method="post">
         <h2>Circle</h2>
            <label>Type in the Radius (in meter): </label><br><input type="number" step="any" name="radius" /><hr />
         <h2>Rectangle</h2>
            <label>Type in the Length (in meter): </label><br><input type="number" step="any" name="length" /><br />  <br /> 
            <label>Type in the width (in meter): </label><br><input type="number" step="any" name="width" /><hr />  
         <h2>Square</h2> 
            <label>Type in the length of a side (in meter): </label><br><input type="number" step="any" name="sq_length" /><hr />  
    <input type="submit" name="submit" value="Submit!" />

    <?php
        $radius = $_POST["radius"];
        $length = $_POST["length"];
        $width = $_POST["width"];
        $sq_length = $_POST["sq_length"];

        function circle($r) {
            return 2 * 3.1416 * pow($r, 2); 
        }

        function rectangle($w,$l){
            return $w * $l;
        }

        function square($sq_len){
            return pow($sq_len, 2);
        }

        echo "<h3>The area of the Cirlce is ".circle($radius)." meter square.</h3>";
        echo "<h3>The area of the Rectangle is ".rectangle($length, $width)." meter square.</h3>";
        echo "<h3>The area of the Square is ".square($sq_length)." meter square.</h3>";
    ?>

</form>
</body>
</html>