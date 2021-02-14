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

        function resultSystem($marks) {
            $gpa = "";
            $grade = "";

            if($marks >= 0 && $marks <= 32) {
                $gpa = 0;
                $grade = "F";
            }
            else if($marks >= 33 && $marks <= 39) {
                $gpa = 1;
                $grade = "D";
            }
            else if($marks >= 40 && $marks <= 49) {
                $gpa = 2;
                $grade = "C";
            }
            else if($marks >= 50 && $marks <= 59) {
                $gpa = 3;
                $grade = "B";
            }
            else if($marks >= 60 && $marks <= 69) {
                $gpa = 3.5;
                $grade = "A-";
            }
            else if($marks >= 70 && $marks <=79) {
                $gpa = 3.75;
                $grade = "A";
            }
            else if($marks >= 80 && $marks <=100) {
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