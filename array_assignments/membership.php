<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>
    <style>
        * {
            margin: 8px;
        }
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    
    </style>
</head>
<body>
<h2>Select your name</h2>
    
    <form method="post" action="">

       <div id="select">
        <select name="select">
         <option >--none--</option>
          <option >Rahim</option>
          <option >Sumit</option>
          <option >Sajib</option>
          <option >Rana</option>
          <option >Selim</option>
          <option >Faria</option>
          <option >Nasreen</option>
          <option >Tapos</option>
          <option >Tanvir</option>
          <option >Momen</option>
        </select>
       </div>
       
       <input type="submit" value="submit">

    </form>

    <?php 
        $members = ["Rahim" => 22, "Sumit" => 34, "Sajib" => 15, "Rana" => 41, "Selim" => 27, "Faria" => 24, "Nasreen" => 38, "Tapos" => 27, "Tanvir" => 35, "Momen" => 45];

        $name =$_POST["select"];

       function signIn($x, $y) {
            
            if($x[$y] < 18) {
                echo "<h2 style='color: red'>Sorry " . $y . ", you are not authorized. You should STUDY MORE !!! </h2>";
            }
            else if ($x[$y] >= 18 && $x[$y] <= 40) {
                echo "<h2 style='color: green'>WELCOME! " . $y . ",  YOU ARE IN !!! </h2>";
            } else if ($x[$y] >= 41 && $x[$y] <= 100){
                "<h2 style='color: blue'>" . $y . ", WISHING YOU THE BEST IN THE FUTURE !!! </h2>";
            } else {
                "<h2 style='color: yellow'> SELECT A NAME FROM THE DROPDOWN !!! </h2>";
            }
       };

       echo signIn($members, $name);
    ?>
</body>
</html>