<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade and GPA</title>
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
        Your Marks:  <input type="number" step="any" name="marks" value="0" /><br />
        <input type="submit" name="submit" value="Submit!" />
    </form>
        <br />
    <?php

        function resultSystem($x) {
            $gpa = "";
            $grade = "";

            if($x >= 0 && $x <= 32) {
                $gpa = 0;
                $grade = "F";
            }
            else if($x >= 33 && $x <= 39) {
                $gpa = 1;
                $grade = "D";
            }
            else if($x >= 40 && $x <= 49) {
                $gpa = 2;
                $grade = "C";
            }
            else if($x >= 50 && $x <= 59) {
                $gpa = 3;
                $grade = "B";
            }
            else if($x >= 60 && $x <= 69) {
                $gpa = 3.5;
                $grade = "A-";
            }
            else if($x >= 70 && $x <=79) {
                $gpa = 3.75;
                $grade = "A";
            }
            else if($x >= 80 && $x <=100) {
                $gpa = 4.00;
                $grade = "A+";
            }
            return "<br /> <h1>GPA: <strong> $gpa </strong> </h1> <h1> Grade: <strong> $grade </strong></h1>";
        }

        $marks =$_POST["marks"];

        echo resultSystem($marks);

    ?>

</body>
</html>