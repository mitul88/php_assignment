<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residents from Uttara and Banani</title>
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
<h2>Select area from the dropdown</h2>
    
    <form method="post" action="">

       <div id="select">
        <select name="select">
          <option >--none--</option>
          <option >Banani</option>
          <option >Dhanmondi</option>
          <option >Mirpur</option>
          <option >Mohammadpur</option>
          <option >Rampura</option>
        </select>
       </div>
       
       <input type="submit" value="submit">

    </form>


    <?php 
    
        $residents = [
            "Mohammadpur" =>["Faiaz", "Tanzir", "Sohel", "Salehin","Nodi","Fahim"],
            "Mirpur" =>["Khalid", "Riaz", "Junayed", "Zaman", "Mitu"],
            "Dhanmondi" =>["Omayer", "Ashfaque", "Faiza", "Priety"],
            "Banani" =>["Anna", "Shafi", "Waqar", "Pritom", "Snigdha", "Sadia"],
            "Rampura" =>["Sara", "Afrain", "Polash", "Tapos"]
        ];
        
        $area = $_POST["select"];
        

        function residents($residents_arr, $area_key) {
            if($area_key == "Banani" || $area_key == "Mirpur") {
               echo "<h2 style='color:red'> Residents from " . $area_key . " are :</h2>" ;
                foreach($residents_arr[$area_key] as $name) {
                    echo "<h4 style='color:blue'>" .$name . "</h4> <hr>";
                }
            } else {
                echo "<h1 style='color:red'> Only Banani and Mirpur residents data available !!</h1>";
            }
        }

        echo residents($residents, $area);
    ?>
</body>
</html>