<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI calculator</title>
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
        <label for="height">Your height in meter :</label> <br>  <input type="number" step="any" name="height" /><br />
        <label for="weight">Your Weight in kg :</label> <br>  <input type="number" step="any" name="weight" /><br />
        <input type="submit" name="submit" value="Submit!" />
    </form>

    <?php
    
    if(isset($_POST["submit"])) {
        
   
        $height = isset($_POST['height']) ? $_POST['height'] : "";
        $weight = isset($_POST['weight']) ? $_POST['weight'] : "";

        function bmi($height, $weight) {
            return $weight / pow($x, 2);
        }

        if( !empty($height) && !empty($weight) ) {
            echo "your BMI is" . bmi($height, $weight);   
        }
     }
    ?>

</body>
</html>