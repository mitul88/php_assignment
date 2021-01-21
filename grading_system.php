<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>
</head>
<body>
    <h1>Type your GPA to know your grade</h1>
    <form action="" method="post">
        <h3>Enter your GPA here:</h3>
        <input type="number" step="any" placeholder=" your GPA here" name="gpa" />
    </form>

    <?php
        $gpa = $_POST["gpa"];

        if($gpa < 2.0 ) {
            echo 'You have received an "F"';
        }
        if($gpa >= 2.0 && $gpa < 2.5 ) {
            echo 'You have received a "D"';
        }
        if($gpa >= 2.5 && $gpa < 2.75) {
            echo 'You have received a "C"';
        }
        if($gpa >= 2.75 && $gpa < 3.00) {
            echo 'You have received a "B-"';
        }
        if($gpa >= 3.00 && $gpa < 3.25) {
            echo 'You have received a "B"';
        }
        if($gpa >= 3.25 && $gpa < 3.50) {
            echo 'You have received a "B+"';
        }
        if($gpa >= 3.50 && $gpa < 3.75) {
            echo 'You have received an "A-"';
        }
        if($gpa >= 3.75 && $gpa < 3.94) {
            echo 'You have received an "A"';
        }
        if($gpa >= 3.94 && $gpa <= 4.00) {
            echo 'You have received an "A"';
        }
    ?>  
</body>
</html>