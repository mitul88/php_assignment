<?php
        include "../autoload.php";

        
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['set_password'];
        $cell = $_POST['cell'];
        $gender = $_POST['gender'];
        $role = $_POST['role'];
        $bloodgroup = $_POST['bloodgroup'];
        $dob = $_POST['dob'];
        
        $pass_hash =  password_hash($password, PASSWORD_DEFAULT);

        // upload photo function
        $img_file = $_FILES['uploaded_img'];

        $uploaded_file = upload_file( $img_file,"../../asset/img/user_img/");

        $uploaded_photo_name = $uploaded_file['unique_file_name']; 
                               
        $sql_query = "INSERT INTO school_crud (name, username, email, password, cell, gender, role, bloodgroup, dob, photoname) VALUES ('$name', '$username', '$email', ' $pass_hash', '$cell', '$gender', '$role', '$bloodgroup', '$dob', '$uploaded_photo_name')" ;               

        echo (empty($uploaded_file['err_msg'])  ? create($sql_query) :  $uploaded_file['err_msg']) ;
     
?>    