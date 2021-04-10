<?php
    include_once "autoload.php";

    if(isset($_GET['tb_name'])) {
        $table = $_GET['tb_name'];
    }

        if(isset($_GET['delete_id'])) {
            $delete_id = $_GET['delete_id'];
            $photo_name = $_GET['photo'];
            $table = $_GET['tb_name'];
            unlink('picture/'.$photo_name);
            data_delete($table, $delete_id);
            // header("location:all_data.php");
            // header('Location:all_data.php?tb_name='.'$table');
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $heading = strtoupper($table)?></title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="asset/st_styles.css">
</head>
<body>
   
            <?php
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
                    // $table =$_POST['tb_name'];
                    global $table;
                    if(isset($_POST['gender'])) {
                        $gender = $_POST['gender'];

                    }
                       
                    
                    /* form validation */

                     if(empty($name) || empty($username) || empty($email) || empty($phone) || empty($bloodgroup) || empty($department) || empty($location) || empty($age) || empty($gender)) {
                         $msg = validate('All fields are required !!');
                     } else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                        $msg = validate('Please enter valid email !!');
                     } else {
                        
                        /* uploade file */
                        $data = upload_file($_FILES['photo'], 'picture/');    
                        $unique_file_name  = $data['unique_file_name'];
                        $err_msg  = $data['err_msg'];
                        
                        if(empty($err_msg)) {
                            /* data send */
                            data_send("INSERT INTO $table (name, username, email, cell, department, age, gender, location, bloodgroup, photo) VALUES ('$name', '$username', '$email', '$phone', '$department', '$age', '$gender', '$location', '$bloodgroup', '$unique_file_name')");
                            header('Location:index.php');
                            $msg = validate('Form Submitted !!', 'success');
                            
                        }else {
                            $msg = $err_msg;
                        }
                        
                    }
                }
            
            ?>             

    <div class="container">
    

    <a href="index.php" class="btn btn-link custom-btn">Back to Home Page</a>  
  
        <h2 class="text-center my-4">ALL <?php echo $heading = strtoupper($table)?>'S DATA</h2>
            <div class="row">
                <div class="col-md-4"></div>
                    <div class="col-sm-12 col-md-4 my-3">
                         <a href="#add_data" data-toggle="modal" class="btn btn-block btn-info">ADD DATA</a>
                    </div>
                <div class="col-md-4"></div>
            </div>

            <?php

                if(isset($msg)) {
                    echo $msg;

                }
               
            ?>    
                       

         <div class="card shadow my-3 p-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Department</th>
                        <th scope="col">Blood Group</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                    if(isset($_GET['tb_name'])) {
                        $table = $_GET['tb_name'];
                    }
                    
                    $data = all_data($table);
        

                    $i = 1;

                    while($specific_data = $data->fetch_object()) :
                ?>
                    <tr>
                        <th scope="row">
                            <?php 
                                echo $i; $i++;
                            ?>
                        </th>
                        <td><?php echo $specific_data->name ?></td>
                        <td><?php echo $specific_data->cell ?></td>
                        <td><?php echo $specific_data->department ?></td>
                        <td><?php echo $specific_data->bloodgroup ?></td>
                        <td><img style="display:block;margin:auto;width:60px;height:60px;" src="picture/<?php echo $specific_data->photo?>"></td>
                        <td> 
                            <a class="btn btn-sm btn-success" href="view.php?view_id=<?php echo $specific_data->id ?>&tb_name=<?php echo $table ?>">View</a>
                            <a class="btn btn-sm btn-primary" href="edit.php?edit_id=<?php echo $specific_data->id ?>&tb_name=<?php echo $table ?>">Update</a>
                            <a id="delete_btn" class="btn btn-sm btn-danger" href="?delete_id=<?php echo $specific_data->id ?>&photo=<?php echo $specific_data->photo ?>&tb_name=<?php echo $table ?>">Delete</a> 
                        </td>
                    </tr>
                <?php
                    endwhile;
                ?>    
                </tbody>
            </table>
        </div>

         <!-- bootstrap modal -->

            <div id="add_data" class="modal fade">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>New <?php echo $heading = strtoupper($table)?></h3>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Student Name</label>
                                    <input name="name" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input name="username" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input name="email" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone </label>
                                    <input name="phone" type="text" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="">Age </label>
                                        <input name="age" class="form-control">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="">Bloodgroup </label>
                                        <input name="bloodgroup" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 col-md-6">
                                        <label for="">Department</label>
                                        <select id="department" name="department" class="form-control">
                                            <option selected>Choose...</option>
                                            <option><?php echo (($table == "students")? "Arts" : ($table == "teachers" ? "School of Business" : "Admin")) ?></option>
                                            <option><?php echo (($table == "students")? "Science" : ($table == "teachers" ? "School of Engineering" : "IT personel")) ?></option>
                                            <option><?php echo (($table == "students")? "Commerce" : ($table == "teachers" ? "School of Accounting" : "Accountant")) ?> </option>
                                            <option><?php echo (($table == "students")? "IT" : ($table == "teachers" ? "School of Computer Science" : "Cleaner")) ?></option>
                                            <option><?php echo (($table == "students")? "Accounting" : ($table == "teachers" ? "School of Drama and Acting" : "Organizer")) ?> </option>
                                            <option><?php echo (($table == "students")? "C# Development" : ($table == "teachers" ? "School of Public Health" : "Peon")) ?></option>
                                            <option><?php echo (($table == "students")? "Java Development" : ($table == "teachers" ? "School of Web development" : "Cook")) ?> </option>
                                            <option><?php echo (($table == "students")? "Mobile Development" : ($table == "teachers" ? "School of Engineering" : "Driver")) ?> </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12 col-md-6">
                                        <label for="">Location</label>
                                        <select id="location" name="location" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>Badda</option>
                                            <option>Gulshan</option>
                                            <option>Dhanmondi</option>
                                            <option>Banani</option>
                                            <option>Mohammadpur</option>
                                            <option>Mirpur</option>
                                            <option>Shantinagar</option>
                                            <option>Lalmatia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group mx-auto my-4">
                                        <label for="">Gender : </label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                <img src="" alt="" id="load_photo" class="mx-auto my-2" style="max-width:100%;border:3px solid #808080">
                                 <div class="row">
                                    <div class="col-3"></div>
                                    <div class="col-6 mx-4">
                                    <label for="">Upload Profile photo</label> 
                                    <br>
                                    
                                    <label for="photo">
                                        <img id="up_logo" style="cursor:pointer; width:150px" src="asset/img/upload.png" alt="">
                                        <a id="change_photo" class="btn btn-block btn-info" style="display:none">Change photo</a>
                                    </label>
                                    <input type="file" id="photo" name="photo" style="display:none" class="form-control">
                                    </div>
                                    <div class="col-3"></div>
                                 </div>
                                </div>
                                <div class="form-group ">
                                    <input name="submit" class="btn btn-lg btn-block btn-success" type="submit" value="Submit">
                                </div>
                            </form>
                            <input type="hidden" value="<?php echo $table?>" name="tb_name">
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
    </div>

<!-- bootstrap js scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="app/main.js"></script>
</body>
</html>