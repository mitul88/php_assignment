<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response Message Based on Your Marks</title>
</head>
<body>
<h2>Active students:"(Please type the name from the list in small letter )"</h2>
<ul>
    <li>auditi</li>
    <li>marzia</li>
    <li>mitu</li>
    <li>sinthia</li>
    <li>rafiu</li>
    <li>omar</li>
    <li>rashed</li>
    <li>tamal</li>
</ul>
<form action="" method="post">
        <h3>Enter your name here:</h3>
        <input type="text" placeholder=" your name here" name="name" />
        <h3>Enter your marks here:</h3>
        <input type="number" step="any" placeholder=" your marks here" name="marks" />

        <input type="submit" value="submit">
    </form>

    <?php 
        $name = $_POST["name"];
        $marks = $_POST["marks"];
        $gender = "";

        if($name == "auditi" || $name == "marzia" || $name == "mitu" || $name == "minthia") {
            $gender = "apu";
        } else if ($name == "rafiu" || $name == "omar" || $name == "rashed" || $name == "tamal") {
            $gender = "vaiya";    
        } else {
            $gender = "not a student!!";
        }

        if($marks < 33) {
            echo "Sorry $name $gender, you have failed the course";
        }
        if($marks >= 33 && $marks < 41) {
            echo "Hi $name $gender, you have passed the course but need improvements. ";
        }
        if($marks >= 41 && $marks <60) {
            echo "Hello $name $gender, Your marks is : $marks. You have passed the course. Study more to get more marks.";
        }
        if($marks >= 61 && $marks <80) {
            echo "Wow $name $gender, you received: $marks. You have done a great job !! Try for letter marks next time !!!.";
        }
        if($marks >= 81  && $marks <= 100) {
            echo "Hello $name $gender, You received $marks !!!!. Excellent !!!!!";
        }
    ?>

</body>
</html>