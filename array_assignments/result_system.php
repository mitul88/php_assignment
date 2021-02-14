<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5th grade result system</title>
    
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
   
       <h2>Select your Role number</h2>
    
        <form method="post" action="">

           <div id="select">
            <select name="select">
            <option >--none--</option>
              <option >1</option>
              <option >2</option>
              <option >3</option>
              <option >4</option>
              <option >5</option>
              <option >6</option>
              <option >7</option>
              <option >8</option>
              <option >9</option>
              <option >10</option>
            </select>
           </div>
           
           <input type="submit" value="submit">

        </form>


    <?php
        $students = array();

        $students['1'] = array(
            "name" => "Rafiu",
            "gender" => "male",
            "marks" => array(
                "Bangla" => 85,
                "English" => 92,
                "Math" => 100,
                "Science" => 95,
                "Religion" => 90
            )
        );

        $students['2'] = array(
            "name" => "Auditi",
            "gender" => "female",
            "marks" => array(
                "Bangla" => 80,
                "English" => 89,
                "Math" => 97,
                "Science" => 90,
                "Religion" => 98
            )
        );

        $students['3'] = array(
            "name" => "Belayet",
            "gender" => "male",
            "marks" => array(
                "Bangla" => 100,
                "English" => 100,
                "Math" => 100,
                "Science" => 100,
                "Religion" => 100,
            )
        );

        $students['4'] = array(
            "name" => "Sadek",
            "gender" => "male",
            "marks" => array(
                "Bangla" => 55,
                "English" => 70,
                "Math" => 80,
                "Science" => 75,
                "Religion" => 60,
            )
        );

        $students['5'] = array(
            "name" => "Shahed",
            "gender" => "male",
            "marks" => array(
                "Bangla" => 34,
                "English" => 22,
                "Math" => 55,
                "Science" => 29,
                "Religion" => 68,
            )
        );

        $students['6'] = array(
            "name" => "Mahmud",
            "gender" => "male",
            "marks" => array(
                "Bangla" => 53,
                "English" => 88,
                "Math" => 72,
                "Science" => 67,
                "Religion" => 80,
            )
        );

        $students['7'] = array(
            "name" => "Shahriar",
            "gender" => "male",
            "marks" => array(
                "Bangla" => 89,
                "English" => 96,
                "Math" => 70,
                "Science" => 59,
                "Religion" => 84,
            )
        );

        $students['8'] = array(
            "name" => "Anis",
            "gender" => "male",
            "marks" => array(
                "Bangla" => 44,
                "English" => 35,
                "Math" => 41,
                "Science" => 53,
                "Religion" => 57,
            )
        );

        $students['9'] = array(
            "name" => "Sadia",
            "gender" => "female",
            "marks" => array(
                "Bangla" => 88,
                "English" => 90,
                "Math" => 92,
                "Science" => 83,
                "Religion" => 94,
            )
        );

        $students['10'] = array(
            "name" => "Rashed",
            "gender" => "male",
            "marks" => array(
                "Bangla" => 77,
                "English" => 81,
                "Math" => 99,
                "Science" => 74,
                "Religion" => 85,
            )
        );

// grade function is used to determine grades and will be used later in the marks function
    function grade($marks) {
        $point = "";
        $grade = "";

            if($marks >= 0 && $marks <= 32) {
               $point = 0;
               $grade = "F";
            }
            else if($marks >= 33 && $marks <= 39) {
               $point = 2.25;
               $grade = "D";
            }
            else if($marks >= 40 && $marks <= 49) {
                $point = 2.50;
                $grade = "D+";
             }
            else if($marks >= 50 && $marks <= 55) {
               $point = 2.75;
               $grade = "C";
            }
            else if($marks >= 56 && $marks <=64) {
               $point = 3.00;
               $grade = "C+";
            }
            else if($marks >= 65 && $marks <=69) {
               $point = 3.25;
               $grade = "B";
            }
            else if($marks >= 70 && $marks <=79) {
                $point = 3.50;
                $grade = "B+";
             }
             else if($marks >= 80 && $marks <=89) {
                $point = 3.75;
                $grade = "A";
             }
            else if($marks >= 90 && $marks <=100) {
                $point = 4.00;
                $grade = "A+";
             }
             return array("point" => $point, "grade" => $grade);

    }    

// cgpa_calc function will be used later in the marks function
    function cgpa_calc($points) {
        return $points / 5;
    }
 
//  retrive data from the client side  
    $role = $_POST["select"];

// main function
    function marks($students_arr, $role_key) {
        echo "<h2 style='color:red'>" . $students_arr[$role_key]["name"] . "</h2>"; 
        
        $cumulated_point = 0;
        foreach($students_arr[$role_key]["marks"] as $mark) {
            
            $letter_grade = grade($mark)["grade"];
            $cumulated_point += grade($mark)["point"];
            echo "<h3 style='color:blue'>" . key($students_arr[$role_key]["marks"]) . " marks: " . $mark  . ", grade: " . $letter_grade . "</h3>";
             $ignore = next($students_arr[$role_key]["marks"]);
        
        }
        $cgpa = cgpa_calc($cumulated_point);
        $total = array_sum($students_arr[$role_key]["marks"]);

       echo "<h2 style='color:red'> Your total marks :" . $total . "</h2> <h2 style='color:red'> Your CGPA :" . $cgpa . "</h2>";
    }
 
            
   echo marks($students, $role);

    ?>
</body>
</html>

