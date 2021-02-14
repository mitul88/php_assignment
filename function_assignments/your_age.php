<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know your age</title>
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
        Type in your birth year:  <input type="number" step="any" name="year" /><br />
        <input type="submit" name="submit" value="Submit!" />
    </form>
    
    <?php
        $year = $_POST["year"];

        function age($num) {
            if($num == 0 || null) {
                return "type your birth year";
            } else {
                return date("Y") - $num;
            }   
        }

        echo age($year);
    ?>
</body>
</html>