<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know your Age</title>
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
<h3>Enter your age. The limit is 120.</h3>
<hr>
<form action="" method="post">
    Your Age:  <input type="number" step="any" name="age" /><br />
    <input type="submit" name="submit" value="Submit!" />
</form>

<br>
    <?php
        $age = $_POST["age"];
        
        function age($num) {
            if($num > 0 && $num <= 1) {
                return "You are Infant";
            } else if($num >= 2 && $num <= 4) {
                return "You are a Toodler";
            } else if($num >= 5 && $num <= 12) {
                return "You are a Child";
            } else if($num >= 13 && $num <= 19) {
                return "You are a Teen";
            } else if($num >= 20 && $num <= 29) {
                return "You are a Young Adult";
            } else if($num >= 30 && $num <= 39) {
                return "You are an Adult";
            } else if($num >= 40 && $num <= 59) {
                return "You are a Middle Aged Adult";
            } else if($num >= 60 && $num <= 79) {
                return "You are getting Old";
            } else if($num >= 80 && $num <100) {
                return "You have a long life !!";
            } else if($num >= 100 && $num <= 120) {
                return "You are a CENTURIAN !!!!";
            } else {
                return "<p style='color:red; font-size: 32px'>YOU ARE TOO OLD!!</p>";
            }
        }
            echo '<p>' .  age($age) . '</p>';
    ?>
    
</body>
</html>