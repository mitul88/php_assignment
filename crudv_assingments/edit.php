<?php
        include_once "autoload.php";

                        /* get form values */ 
                        if(isset($_POST['submit'])) {
                            $name = $_POST['name'];
                            $username = $_POST['username'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            $bloodgroup = $_POST['bloodgroup'];
                            $department = $_POST['department'];
                            $location = $_POST['location'];
                            $age = $_POST['age'];
                            
                            $id = $_GET['edit_id'];
                            $table = $_GET['tb_name'];
                            
                            if(isset($_POST['gender'])) {
                                $gender = $_POST['gender'];
        
                            }
                               
                            
                            /* form validation */
        
                             if(empty($name) || empty($username) || empty($email) || empty($phone) || empty($bloodgroup) || empty($department) || empty($location) || empty($age) || empty($gender)) {
                                 $msg = validate('All fields are required !!');
                             } else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                                $msg = validate('Please enter valid email !!');
                             } else {
                                
                                if(!empty($_FILES['new_photo']['name'])) {
                                    $data = upload_file($_FILES['new_photo'], 'picture/');
                                    $img_name = $data['unique_file_name'];
                                    unlink('picture/' . $_POST['old_photo']);
                                } else {
                                    $img_name = $_POST['old_photo'];
                                }

                                connect()->query("UPDATE $table SET name='$name', email='$email', cell='$phone', username='$username', location='$location', age='$age', gender='$gender', department='$department', photo='$img_name'  WHERE id='$id'");
                                header('Location:index.php');
                            }
                        }

        /* retrieve data from URL */
        if(isset($_GET['edit_id'])) {
            $id = $_GET['edit_id'];
            $table = $_GET['tb_name'];
            $update_data = single_data($table, $id);
        }
        

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update : <?php echo $update_data->name;?></title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card my-5">
                    <div class="card-title text-center mt-2">
                        <h3 style="color:red;">Update: <?php echo $update_data->name;?></h3>
                    </div>
                    <button class="btn btn-sm btn-primary" style="display:block; margin:auto;" onclick=goBack()>Back</button>
                        <br>
                    <?php

                        if(isset($msg)) {
                            echo $msg;

                        }

                    ?>
                    <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Student Name</label>
                                    <input name="name" type="text" class="form-control" value="<?php echo $update_data->name;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input name="username" type="text" class="form-control" value="<?php echo $update_data->username;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input name="email" type="text" class="form-control" value="<?php echo $update_data->email;?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone </label>
                                    <input name="phone" type="text" class="form-control" value="<?php echo $update_data->cell;?>">
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="">Age </label>
                                        <input name="age" class="form-control" value="<?php echo $update_data->age;?>">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Bloodgroup </label>
                                        <input name="bloodgroup" type="text" class="form-control" value="<?php echo $update_data->bloodgroup;?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 col-md-6">
                                        <label for="">Department</label>
                                        <select id="department" name="department" class="form-control" value="<?php echo $update_data->department;?>">
                                            <option selected>Choose...</option>
                                            <option <?php echo $update_data->department == 'Arts' ? 'selected': ''; ?>> <?php echo (($table == "students")? "Arts" : ($table == "teachers" ? "School of Business" : "Admin")) ?> </option>
                                            <option <?php echo $update_data->department == 'Science' ? 'selected': ''; ?>> <?php echo (($table == "students")? "Science" : ($table == "teachers" ? "School of Engineering" : "IT personel")) ?> </option>
                                            <option <?php echo $update_data->department == 'Commerce' ? 'selected': ''; ?>>  <?php echo (($table == "students")? "Commerce" : ($table == "teachers" ? "School of Accounting" : "Accountant")) ?> </option>
                                            <option <?php echo $update_data->department == 'ITC' ? 'selected': ''; ?>> <?php echo (($table == "students")? "IT" : ($table == "teachers" ? "School of Computer Science" : "Cleaner")) ?> </option>
                                            <option <?php echo $update_data->department == 'Accounting' ? 'selected': ''; ?>> <?php echo (($table == "students")? "Accounting" : ($table == "teachers" ? "School of Drama and Acting" : "Organizer")) ?> </option>
                                            <option <?php echo $update_data->department == 'C# development' ? 'selected': ''; ?>> <?php echo (($table == "students")? "C# Development" : ($table == "teachers" ? "School of Public Health" : "Peon")) ?> </option>
                                            <option <?php echo $update_data->department == 'Java development' ? 'selected': ''; ?>> <?php echo (($table == "students")? "Java Development" : ($table == "teachers" ? "School of Web development" : "Cook")) ?> </option>
                                            <option <?php echo $update_data->department == 'Mobile App development' ? 'selected': ''; ?>> <?php echo (($table == "students")? "Mobile Development" : ($table == "teachers" ? "School of Engineering" : "Driver")) ?> </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 col-md-6">
                                        <label for="">Location</label>
                                        <select id="location" name="location" class="form-control" value="<?php echo $update_data->name;?>">
                                            <option selected>Choose...</option>
                                            <option <?php echo $update_data->location == 'Badda' ? 'selected': ''; ?>>Badda</option>
                                            <option <?php echo $update_data->location == 'Gulshan' ? 'selected': ''; ?>>Gulshan</option>
                                            <option <?php echo $update_data->location == 'Dhanmondi' ? 'selected': ''; ?>>Dhanmondi</option>
                                            <option <?php echo $update_data->location == 'Banani' ? 'selected': ''; ?>>Banani</option>
                                            <option <?php echo $update_data->location == 'Mohammadpur' ? 'selected': ''; ?>>Mohammadpur</option>
                                            <option <?php echo $update_data->location == 'Mirpur' ? 'selected': ''; ?>>Mirpur</option>
                                            <option <?php echo $update_data->location == 'Shantinagar' ? 'selected': ''; ?>>Shantinagar</option>
                                            <option <?php echo $update_data->location == 'Lalmatia' ? 'selected': ''; ?>>Lalmatia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mx-auto my-4">
                                        <label for="">Gender : </label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?php echo $update_data->gender == 'male' ? 'checked': ''; ?>>
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?php echo $update_data->gender == 'female' ? 'checked': ''; ?>>
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                <img src="picture/<?php echo $update_data->photo;?>" alt="" id="load_updated_photo" class="mx-auto my-2" style="max-width:100%;border:3px solid #808080">
                                 <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6 mx-4">
                                        <label for="">Upload Profile photo</label> 
                                        <br>
                                    
                                        <label for="updated_photo">
                                            <img id="update_logo" style="cursor:pointer;width:150px;height:150px;" class="mx-auto" src="asset/img/upload.png" alt="">
                                            <a id="change_update_photo" class="btn btn-block btn-info" style="display:none">Change photo</a>
                                        </label>
                                        <input type="file" id="updated_photo" name="new_photo" style="display:none" class="form-control">
                                    </div>
                                    <div class="col-3">
                                        <input type="hidden" value="<?php echo $update_data->photo;?>" name="old_photo" >       
                                    </div>
                                 </div>
                                </div>
                                
                                <div class="form-group ">
                                    <input name="submit" class="btn btn-lg btn-block btn-success" type="submit" value="update">
                                </div>
                            </form>
                            <button class="btn btn-sm btn-primary" style="display:block; margin:auto;" onclick=goBack()>Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="app/main.js"></script>
    <script>
           $( document ).ready(function() {
  
                $('#updated_photo').change(function(e) {
                    let file_url = URL.createObjectURL(e.target.files[0]);
                    $('#load_updated_photo').attr('src', file_url);
                }) 

            });
    </script>
</body>
</html>