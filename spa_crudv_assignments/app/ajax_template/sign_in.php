<?php
    include "../autoload.php";

    $credential = $_POST['credential'];
    $signInPass = $_POST['signInPass'];
    

    // $login_data = connect()-> query("SELECT * FROM school_crud WHERE email='$credential' OR username='$credential' OR cell='$credential'");
    $result = connect()-> query("SELECT * FROM school_crud WHERE email='$credential' OR username='$credential' OR cell='$credential'");
    $num = mysqli_num_rows($result);
    
    if( $num == 1 ) {

        while($row = mysqli_fetch_assoc($result)) {
            if( password_verify(  $signInPass ,  $row['password'] ) ) {
                echo validate('Password correct !','success');
            } else {
                 echo validate('Password incorrect !');
            }
        }

    } else {
       validate('User not found !');
    }

?>