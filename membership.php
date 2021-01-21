<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Membership</title>
</head>
<body>
    
    <h3>Active members : Shahed, Sadek, Mazher, Rafiu, Auditi</h3>
    <h3>Enter Your Name</h3>

    <form action="" method="post">
        <input type="text" name="member" />
    </form>

    <?php
        $member = $_POST["member"];

        switch ($member) {
        case "rafiu":
            echo "Rafiu, You are our GOLD member !!!!";
            break;
        case "sadek":
            echo "Sadek, You are our PLATINUM member !";
            break;
        case "shahed":
            echo "Shahed, You are our SILVER member !";
            break;
        case "mazher":
            echo "Mazher, You are our PREMIUM member !";
            break;
        case "auditi":
            echo "Auditi, You are our ELITE member !";
            break;
        default:
            echo "You are NOT A MEMBER!";
        }
    ?>
</body>
</html>