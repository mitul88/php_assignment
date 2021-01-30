<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Access</title>
</head>
<body>
    <h3>Enter Your Age</h3>
    <form action="" method="post">
        <input type="number" name="age" />
    </form>

    <?php
        $age = $_POST["age"];

        if($age >= 20 && $age <= 35) {
            echo "Welcome to the Dashboard";
        } else {
            echo "Your age does not meet our criteria";
        }
    ?>
</body>
</html>