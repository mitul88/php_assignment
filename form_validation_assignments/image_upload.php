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
            if(isset($_POST['upload'])) {

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

                // Form validation part
                if( empty($file_name) ){
                    
                    $display_msg =  "<p class=\" alert alert-danger \"> Please select a file ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
                
                }else if ( in_array($extension, ['jpg','png','gif', 'jpeg', 'webp']) == false ){

                    $display_msg =  "<p class=\" alert alert-warning \"> Invalid file format ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
                 
                }else if( $size_in_kb > 500 ){

                    $display_msg =  "<p class=\" alert alert-info \"> Image size is too large ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
                 
                }
                else {

                    move_uploaded_file($file_tmp_name, 'images/' . $unique_name );
                    $display_msg =  "<p class=\" alert alert-success \"> Upload successful ! <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
                
                }
            }
        ?>


    <div class="main py-5">
        <div class="wrap shadow p-3">
        <div class="card">
            <div class="card-title text-center">
                <h2 style="margin-top:20px;">Image Upload</h2>
            </div>
            <div class="card-body">

            <?php 

                if( isset($display_msg) ){
                    echo $display_msg;
                }


            ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group text-center col-sm-12">
                            <label for="img_upload"><img width="100" src="upload_img.png" alt=""></label>
                            <input style="display:none;" name="upload_photo" type="file" id="img_upload">
                            <br>
                            <label>Upload your photo</label>
                        </div>
                    </div>
                    <button type="submit" name="upload" class="btn btn-block btn-primary">Sign in</button>
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