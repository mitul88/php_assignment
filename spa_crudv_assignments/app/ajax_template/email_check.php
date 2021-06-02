<?php
    include "../autoload.php";
    
$email = $_POST['email'];

$data_check_result = dataCheck("school_crud", "email", $email);

if( $data_check_result ) {
    echo "Email already exist !";
}




