<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up form</title>
        <!-- bootstrap css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- internal css  -->
        <style>
            body{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }
        </style>
    </head>
    <body>
        
        <?php
            if(isset($_POST['insert'])) {

                // input values
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];

                // image file 
                $file = $_FILES['upload_photo'];

                // value from file array
                $file_name = $file['name'];
                $file_tmp_name = $file['tmp_name'];
                $file_size = $file['size'];
                $size_in_kb = $file_size/1024;


                // File extension
                $file_arr = explode('.', $file_name);
                $extension = end($file_arr);

                // unique file name generator
                $unique_name_pro = time() .rand(1, 99999999);
			    $unique_name = md5($unique_name_pro)  . '.' . $extension ;

                // Required message for each field
                if( empty($name) ){
					$err['name'] = "<p style=\" color:red; \"> * Required </p>";
			    }

			    if( empty($email) ){
				    $err['email'] = "<p style=\" color:red; \"> * Required </p>";
			    }
			    if( empty($phone) ){
				    $err['phone'] = "<p style=\" color:red; \"> * Required </p>";
			    }
                if( empty($password) ){
				    $err['password'] = "<p style=\" color:red; \"> * Required </p>";
			    }
                if( empty($confirm_password) ){
				    $err['confirm_password'] = "<p style=\" color:red; \"> * Required </p>";
			    }
                if( empty($age) ){
				    $err['age'] = "<p style=\" color:red; \"> * Required </p>";
			    }


                // check for valid email extension
                if(isset($email)) {
                    $email_arr = explode('@', $email);
                    $authorized_email_extension = end($email_arr);
                }

                // Phone number first three digit 
                $phone_start = substr($phone, 0, 3);



                // Form validation part
                if( empty($email) || empty($name) || empty($phone) || empty($password) || empty($confirm_password)) {

                    $display_msg =  "<p class=\" alert alert-danger \"> All fields are required ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
                
                }else if( filter_var($email, FILTER_VALIDATE_EMAIL) == false ){

                    $display_msg =  "<p class=\" alert alert-warning \"> Invalid email address ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
    
                }else if($authorized_email_extension != "aiub.edu") {

                    $display_msg =  "<p class=\" alert alert-info \"> Use your student email account, (example: xyz@aiub.edu) ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
                
                }else if( in_array($phone_start, ['017','018','019','015','013','016','014']) == false ){
                   
                    $display_msg =  "<p class=\" alert alert-danger \"> Please, enter valid mobile number ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
                
                }else if ($password !== $confirm_password ) {
                    
                    $display_msg =  "<p class=\" alert alert-danger \"> Password should match with confirm password ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
                 
                }else if ($age > 40 || $age < 18) {

                    $display_msg =  "<p class=\" alert alert-info \"> Your age does not match the criteria ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
                
                }else if( empty($file_name) ){
                    
                    $display_msg =  "<p class=\" alert alert-danger \"> Please select a file ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
                
                }else if ( in_array($extension, ['jpg','png','gif', 'jpeg', 'webp']) == false ){

                    $display_msg =  "<p class=\" alert alert-warning \"> Invalid file format ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
                 
                }else if( $size_in_kb > 500 ){

                    $display_msg =  "<p class=\" alert alert-info \"> Image size is too large ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
                 
                }
                else {

                    move_uploaded_file($file_tmp_name, 'photos/' . $unique_name );
                    $display_msg =  '<p class=" alert alert-success "> Congratulations ' . strtoupper($name) . ' ! You are Registered !! <button class="close" data-dismiss="alert">&times;</button> </p>';
                
                }
            }
        ?>


    <div class="main py-5">
        <div class="wrap shadow my-2">
        <div class="card">
            <div class="card-title text-center">
                <h2 style="margin-top:20px;">Student Form</h2>
            </div>
            <div class="card-body">

            <?php 

                if( isset($display_msg) ){
                    echo $display_msg;
                }


            ?>

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-sm">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control">
                            <?php 

                                if( isset($err['name']) ){
                                    echo $err['name'];
                                }
                            
                            ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control">
                            <?php 

                                if( isset($err['email']) ){
                                    echo $err['email'];
                                }
                            
                            ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm">
                            <label for="phone">Your Phone Number</label>
                            <input type="text" name="phone" class="form-control">
                            <?php 

                                if( isset($err['phone']) ){
                                    echo $err['phone'];
                                }
                            
                            ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="password">Your Password</label>
                            <input type="password" name="password" class="form-control">
                            <?php 

                                if( isset($err['password']) ){
                                    echo $err['password'];
                                }
                            
                            ?>
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control">
                            <?php 

                                if( isset($err['confirm_password']) ){
                                    echo $err['confirm_password'];
                                }
                            
                            ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="age">Your Age</label>
                            <input type="text" name="age" class="form-control">
                            <?php 

                                if( isset($err['age']) ){
                                    echo $err['age'];
                                }
                            
                            ?>
                        </div>
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="gender">Gender</label>
                            <select id="inputState" name="gender" class="form-control">
                                <option selected>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="form-group text-center col-sm-12">
                            <label for="img_upload"><img width="100" src="upload_img.png" alt=""></label>
                            <input style="display:none;" name="upload_photo" type="file" id="img_upload">
                            <br>
                            <label>Upload your photo</label>
                        </div>
                    </div>
                    <button type="submit" name="insert" class="btn btn-block btn-primary">Sign in</button>
                </form>
            </div>
        </div>
    </div>    
    </div>
    
    <!-- bootstrap scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    </body>
    </html>