<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phonebook</title>
    
    <style>
        body{
            text-align: center;
            padding: 0 40%;
        }
    
    </style>
</head>

<body>
    
    <h1 style='color:red'>Phonebook :</h1>

    <?php 
        $phonebook = [
                        ["Name"=> "Omar", "Phone"=> "017017017017", "Location"=> "Mirpur"],
                        ["Name"=> "Rafique", "Phone"=> "018018018018", "Location"=> "Banani"],
                        ["Name"=> "Najib", "Phone"=> "019019019019", "Location"=> "Uttara"],
                        ["Name"=> "Bappi", "Phone"=> "016016016016", "Location"=> "Baridhara DOHS"],
                        ["Name"=> "Milton", "Phone"=> "010101010101", "Location"=> "Gulshan North"],
                        ["Name"=> "Tuhin", "Phone"=> "012012012012", "Location"=> "Bashundhara R/A"],
                        ["Name"=> "Roum", "Phone"=> "013013013013", "Location"=> "Mohammadpur"],
                        ["Name"=> "Anna", "Phone"=> "012012012012", "Location"=> "Uttara"],
                        ["Name"=> "Tutul", "Phone"=> "01401414014", "Location"=> "Uttara"],
                        ["Name"=> "Sara", "Phone"=> "015015015015", "Location"=> "Rampura"],
                        ["Name"=> "Lamia", "Phone"=> "00665879221", "Location"=> "Indiana, US "],
                        ["Name"=> "Mahmud", "Phone"=> "00887456314", "Location"=> "Melbourne, AU "],
                        ["Name"=> "Sadek", "Phone"=> "007887454545", "Location"=> "NewYork, US "],
                        ["Name"=> "Himel", "Phone"=> "002175672756", "Location"=> "Albany, US "],
                        ["Name"=> "Shawpon", "Phone"=> "00147787542", "Location"=> "East London, UK "]
        ];

        

        function phonebook($arr) {
            $phnbk_arr_len = count($arr);

            for($i = 0; $i < $phnbk_arr_len; $i++){
                
                foreach($arr[$i] as $value) {
                    echo "<h4 style='color:red'> " . key($arr[$i]) . " : <span style='color:blue'>" . $value . "</span></h4>";
                    // ignore variable and the next function below is used to move on to next array key in the foreach loop 
                    $ignore = next($arr[$i]);
                }

                echo "<hr>";
            }
        };
        echo phonebook($phonebook);
    ?>
</body>
</html>