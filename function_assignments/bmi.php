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
        $height = $_POST['height'];
        $weight = $_POST['weight'];

        function bmi($x, $y) {
            return $y / pow($x, 2);
        }

        echo "your BMI is" . bmi($height, $weight);
    ?>

</body>
</html>