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
            }
        ?>


    <div class="main py-5">
        <div class="wrap shadow my-2">
        <div class="card">
            <div class="card-title text-center">
                <h2 style="margin-top:20px;">Student Form</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
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
                            <input type="email" name="email" class="form-control">
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