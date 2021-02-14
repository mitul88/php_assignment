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
        $members = ["Rahim" => 13, "Sumit" => 34, "Sajib" => 15, "Rana" => 41, "Selim" => 27, "Faria" => 17, "Nasreen" => 38, "Tapos" => 27, "Tanvir" => 35, "Momen" => 45];

        $name =$_POST["select"];

       function signIn($arr, $arr_key) {
            
            if($arr[$arr_key] > 0 && $arr[$arr_key] < 18) {
                echo "<h2 style='color: red'>Sorry " . $arr_key . ", you are not authorized. You should STUDY MORE !!! </h2>";
            }
            else if ($arr[$arr_key] >= 18 && $arr[$arr_key] <= 40) {
                echo "<h2 style='color: green'>WELCOME! " . $arr_key . ",  YOU ARE IN !!! </h2>";
            } else if ($arr[$arr_key] >= 41 && $arr[$arr_key] <= 100){
                echo "<h2 style='color: blue'>" . $arr_key . ", WISHING YOU THE BEST IN THE FUTURE !!! </h2>";
            } else {
                echo "<h2 style='color: black'> SELECT A NAME FROM THE DROPDOWN !!! </h2>";
            }
       };

       echo signIn($members, $name);
    ?>
</body>
</html>

