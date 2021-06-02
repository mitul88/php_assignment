<?php
    include "../autoload.php";
    
$cell = $_POST['cell'];

$data_check_result = dataCheck("school_crud", "cell", $cell);

if( $data_check_result ) {
    echo "User already exist !";
}




