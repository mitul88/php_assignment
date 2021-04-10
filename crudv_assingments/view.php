<?php
        include_once "autoload.php";
        /* retrieve data from URL */

        if(isset($_GET['view_id'])) {
            $id = $_GET['view_id'];
            $table= $_GET['tb_name'];
            $specific_info = single_data($table, $id);
    
        }
  
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $specific_info->name;?></title>
        <!-- bootstrap css -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mx-auto">
            <div class="col-md-6 mx-auto">
                <div class="card my-5">
                    <img class="shadow my-3" style="width: 250px;height:300px;margin:auto;border-radius:50%;" src="picture/<?php echo $specific_info->photo;?>" alt="">
                    <div class="card-title text-center">
                        <h2><?php echo $specific_info->name;?></h2>
                        <em><h4 style="color:red;"><?php echo $specific_info->username;?></h4></em>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Name</td>
                                <td><?php echo $specific_info->name;?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo $specific_info->email;?></td>
                            </tr>
                            <tr>
                                <td>Cell</td>
                                <td><?php echo $specific_info->cell;?></td>
                            </tr>
                            <tr>
                                <td>Department</td>
                                <td><?php echo $specific_info->department;?></td>
                            </tr>
                            <tr>
                                <td>Age</td>
                                <td><?php echo $specific_info->age;?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td><?php echo $specific_info->gender;?></td>
                            </tr>
                            <tr>
                                <td>Bloodgroup</td>
                                <td><?php echo $specific_info->bloodgroup;?></td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td><?php echo $specific_info->location;?></td>
                            </tr>
                        </table>
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
</body>
</html>