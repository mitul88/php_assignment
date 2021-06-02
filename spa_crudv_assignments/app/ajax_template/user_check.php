<?php
    include "../autoload.php";
    
$username = $_POST['username'];

$data_check_result = dataCheck("school_crud", "username", $username);

if( $data_check_result ) {
    echo "User already exist !";
}




