<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Picnic Donation</title>
    <style>
        body{
            min-height: 100vh;
            text-align: center;
            padding: 0 40%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    

    <?php
        $members = [
            [
                "Name" => "Rifat",
                "age"  => 38,
                "cell" => "017017017",
                "amount" => 5000
            ],
            [
                "Name" => "Ahsan",
                "age"  => 36,
                "cell" => "018018018",
                "amount" => 2000
            ],
            [
                "Name" => "Jony",
                "age"  => 18,
                "cell" => "010101018",
                "amount" => 1000
            ],
            [
                "Name" => "Faria",
                "age"  => 22,
                "cell" => "080824431",
                "amount" => 3000
            ],
            [
                "Name" => "Rakib",
                "age"  => 30,
                "cell" => "040501087",
                "amount" => 500
            ],
            [
                "Name" => "Raju",
                "age"  => 32,
                "cell" => "05017048",
                "amount" => 3000
            ],
            [
                "Name" => "Sneha",
                "age"  => 25,
                "cell" => "035005453",
                "amount" => 1500
            ],
            [
                "Name" => "Sinthia",
                "age"  => 28,
                "cell" => "084713218",
                "amount" => 2500
            ],
        ];

        function picnicDonation($arr) {
            $members_arr_len = count($arr);
            $cumulative_amount = 0;
            for($i = 0; $i < $members_arr_len; $i++) {
                /* following commented code will show individual details on the screen*/
//                foreach($arr[$i] as $value) {
//                    echo "<h5>" . key($arr[$i]) . " : " . $value . "</h5>";
//                    $ignore = next($arr[$i]);
//                }
//                echo "<hr>";
                /* the code below will only show the total amount of the donation on the screen */
             $cumulative_amount += $arr[$i]["amount"];
            }
            echo "<h1 style='color:red'>" . $cumulative_amount . "</h1>";
        }
    
        echo picnicDonation($members);
    ?>
</body>
</html>