<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency converter</title>
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
        <label for="bdt">Amount in BDT :</label> <br>  <input type="number" name="bdt" /><br />
        <input type="submit" name="submit" value="Submit!" />
    </form>
    
    <br />

    <?php
        $bdt = $_POST["bdt"];

        function currencyConversion($bdt_amnt) {
            $usd = 84.62 * $bdt_amnt ;
            $cad = 66.23 * $bdt_amnt ;
            $pound = 116.10 * $bdt_amnt;

            return "US doller: ".$usd."<br />  Canadian doller: ".$cad. "<br /> and British Sterling:".$pound;
        }

        echo "<h1>". currencyConversion($bdt)."</h1>";
    ?>
    
</body>
</html>