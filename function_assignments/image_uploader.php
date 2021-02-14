<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image uploader</title>
    <style>
        body{
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content:center;
            align-items:center;
            text-align: center;
        }
    </style>
</head>
<body>

    <h2>Give name, height and width to see the image</h2>
    <form action="" method="post">
        <label for="name">Image name:</label>  <input type="text" name="name" required /><br />
        <label for="height">Image height (i.e. 120px) :</label> <input type="text" name="height" required /><br />
        <label for="width">Image width (i.e. 120px) :</label> <input type="text" name="width" required /><br />
        <input type="submit" name="submit" value="Submit!" />
    </form>

        
    <?php
        $name =$_POST["name"];
        $height =$_POST["height"];
        $width =$_POST["width"];

        function imageUploader($height, $width, $name) {
            return "<img src='./laptop_&_coffee.jpg' style='height:$height; width:$width' alt='$z'> <h3>$name</h3>";
        }

        echo imageUploader( $height, $width, $name);

    ?>

</body>
</html>