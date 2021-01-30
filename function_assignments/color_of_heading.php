<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color of heading</title>
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
    
    <h2>বাংলার রঙের নাম (লাল, সবুজ, নীল, হলুদ, কালো) লিখুন</h2>
<form action="" method="post">
        <label for="color">রঙ :</label> <br>  <input type="text" name="color" /><br />
        <input type="submit" name="submit" value="Submit!" />
    </form>

    <?php 
        $color = $_POST["color"];
        $heading = "শিরোনাম রঙ পরিবর্তন";
        
        if($color != 0) {
            echo changeColor($color, $heading);
        } else {
            echo $heading;
        }

        function changeColor($x, $y) {
                if($x == "লাল") {
                    return "<h1 style='color:red'>". $y . "</h1>";
                }
                if($x == "সবুজ") {
                    return "<h1 style='color:green'>". $y . "</h1>";
                }
                if($x == "নীল") {
                    return "<h1 style='color:blue'>". $y . "</h1>";
                }
                if($x == "বেগুনি") {
                    return "<h1 style='color:SlateBlue'>". $y . "</h1>";
                }
                if($x == "হলুদ") {
                    return "<h1 style='color:yellow'>". $y . "</h1>";
                }
                if($x == "কালো") {
                    return "<h1 style='color:black'>". $y . "</h1>";
                } 
        }
    
    
    ?>

</body>
</html>