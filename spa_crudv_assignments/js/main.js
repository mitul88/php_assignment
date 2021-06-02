
import {signIn, register } from './functions.js';

(function($) {
    $(document).ready(function () {
        $("#all").click(function(e){

            $.ajax({
                url: './templates/all_users.php',
                success : function(data) {
                    $('.app').html(data);
                }
            });
            e.preventDefault();
           })
       
           $("#navSignIn").click(function(e){
       
               $.ajax({
                   url: './templates/sign_in.php',
                   success : function(data) {
                       $('.app').html(data);
                   }
               });
               e.preventDefault();
           })
       
              $(document).on("click", "#goToRegister", function(e){
       
               $.ajax({
                   url: './templates/sign_up.php',
                   success : function(data) {
                       $('.app').html(data);
                   }
               });
               e.preventDefault();
       
              })
       
       /* signup snippets*/
       
           $('.datepicker').datepicker({
               format: 'mm/dd/yyyy',
               startDate: '-3d'
           });
           
       
           $(document).on('change','#imgUp', function(e){
               let file_url = URL.createObjectURL(e.target.files[0]);
               $('#displayImg').attr('src',file_url);
               $('#displayImg').css('display','block');
               $('#imgUpBtn').text("Change Photo !");
           })  
       
       
           $(document).on("submit", "#createAccount", function(e){

            let name = $('#createAccount input[name = "name"]').val();
            let username = $('#createAccount input[name = "username"]').val();
            let email = $('#createAccount input[name = "email"]').val();
            let password = $('#createAccount input[name = "set_password"]').val();
            let cell = $('#createAccount input[name = "cell"]').val();
            let gender = $('#createAccount input[name = "gender"]').val();
            let role = $('#createAccount input[name = "role"]').val();
            let bloodgroup = $('#createAccount input[name = "bloodgroup"]').val();
            let dob = $('#createAccount input[name = "dob"]').val();

            
    
           register(e.target, name, username, email, password, cell, gender, role, bloodgroup, dob);
               e.preventDefault();
           })
       
// email availablity check

           $(document).on('keyup', '#emailReg', function (e) {
                let email = $(this).val();
                

                $.ajax({
                    url: './app/ajax_template/email_check.php',
                    method: 'POST',
                    data : { email : email},
                    success: function(data) {

                        if( data != null ) {
                            $('#email_check_msg').html(data);
                            $('#email_check_msg').css('color', 'red');
                        }

                    }
                })
           })

// Username availablity check

           $(document).on('keyup', '#userNameReg', function (e) {
            let username = $(this).val();
            

            $.ajax({
                url: './app/ajax_template/user_check.php',
                method: 'POST',
                data : { username : username},
                success: function(data) {

                    if( data != null ) {
                        $('#username_chk_msg').html(data);
                        $('#username_chk_msg').css('color', 'red');
                    }

                }
            })
       })

// cell number availablity check

// $(document).on('keyup', '#cellReg', function (e) {
//     let cell = $(this).val();
    

//     $.ajax({
//         url: './app/ajax_template/cell_number_check.php',
//         method: 'POST',
//         data : { cell : cell },
//         success: function(data) {

//             if( data != null ) {
//                 $('#cell_chk_msg').html(data);
//                 $('#cell_chk_msg').css('color', 'red');
//             }

//         }
//     })
// })       
  
// move to signin page

              $(document).on("click", "#goToSignIn", function(e){
       
               $.ajax({
                   url: './templates/sign_in.php',
                   success : function(data) {
                       $('.app').html(data);
                   }
               });
               e.preventDefault();
       
              })
       
/* SIGN IN snippets */
       
              $(document).on('click', '#logIn', function(e) {
               let signInCredential = $('#signInCredential').val();
               let signInPass = $('#signInPass').val();
       
               signIn( signInCredential, signInPass );
               e.preventDefault();
              })
       
       
             /* ****** profile section ******* */
             
              $(document).on("click", "#profileTab", function(e){
       
               $.ajax({
                   url: './templates/profile_main.php',
                   success : function(data) {
                       $('.show-profile-content').html(data);
                   }
               });
               e.preventDefault();
       
              })
       
              $(document).on("click", "#allStudentsTab", function(e){
       
               $.ajax({
                   url: './templates/show_data.php',
                   success : function(data) {
                       $('.show-all-data').html(data);
                   }
               });
               e.preventDefault();
       
              })
    })
})(jQuery)








