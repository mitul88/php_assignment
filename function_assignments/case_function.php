<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case function</title>
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
    <form action="" method="post">
        <label for="uppercase">For uppercase conversion :</label> <br>  <input type="text"  name="uppercase" /><br />
        <label for="lowercase">For lowercase conversion :</label> <br>  <input type="text"  name="lowercase" /><br />
        <label for="first_letter_uppercase">For first letter uppercase:</label> <br>  <input type="text"  name="first_letter_uppercase" /><br />
        <label for="uc_all_first_letter">Uppercase for all first letter in a sentence:</label> <br>  <input type="text"  name="uc_all_first_letter" /><br />
        <br>
        <input type="submit" name="submit" value="Submit!" />
    </form>
        <br>
    <?php
        $upper_case = $_POST["uppercase"];
        $lower_case = $_POST["lowercase"];
        $first_letter = $_POST["first_letter_uppercase"];
        $first_letter_in_words = $_POST["uc_all_first_letter"];

        function letter_case ($u_case, $l_case, $frst_let, $frst_let_in_wrds) {
           $upper = $u_case != 0 ? strtoupper($u_case): "type any string" ;
           $lower = $l_case != 0 ? strtolower($l_case): "type any string" ;
           $first_upper = $frst_let != 0 ? ucfirst($frst_let): "type any string" ;
           $all_first_letter =  $frst_let_in_wrds != 0 ? ucwords($frst_let_in_wrds): "type any string" ;

            return "$upper <br> $lower <br> $first_upper <br> $all_first_letter";
        }

        echo letter_case($upper_case, $lower_case, $first_letter, $first_letter_in_words);
    ?>
</body>
</html>