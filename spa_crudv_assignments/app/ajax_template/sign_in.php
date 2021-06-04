<?php
    include "../autoload.php";

    $credential = $_POST['credential'];
    $signInPass = $_POST['signInPass'];
    
    $result = connect()-> query("SELECT * FROM school_crud WHERE email='$credential' OR username='$credential' OR cell='$credential'");
    $num = mysqli_num_rows($result);
    
    if( $num == 1 ) {

        while($row = mysqli_fetch_assoc($result)) {
            if( password_verify(  $signInPass ,  $row['password'] ) ) {
               
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['login_status'] = true;

                $arr = ['data' => header('location:../../profile.php'), 'error' => 'Password incorrect !'];
                print_r(json_encode($arr));


            } else {

                 $arr = ['data' => null, 'error' => 'Password incorrect !'];
                 print_r(json_encode($arr));
            }
        }

    } else {

       $arr = ['data' => null, 'error' => 'User not found !'];
       print_r(json_encode($arr));
    }

?>