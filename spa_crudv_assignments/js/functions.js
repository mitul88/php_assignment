
    
     

    function alphanumeric(inputtxt){
        var letterNumber = /^[0-9a-zA-Z]+$/;

        if( inputtxt.match(letterNumber) ) {
            return true;
        }
        else { 
            return false; 
        }
   }

   function emailVerification(email) {
        let emailParts = email.split("@");
        let emailExt = emailParts[1];

        if( emailExt == "crud.com" ) {
            return true;
        }
   }


  function getAge(dateString) {
    let today = new Date();
    let birthDate = new Date(dateString);
    let age = today.getFullYear() - birthDate.getFullYear();
    let m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
 }
 

/* Below functions are exported to the main js */

    export function validate(val_msg, msg_type = 'danger') {

        return "<p class=\" alert alert-" + msg_type + " \">" + val_msg + " <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";

    }   

   export function signIn(credential, signInPass) {
        if(credential == "" || signInPass == "") {
            swal({
                title: "Warning!",
                text: "All fields are required!!",
                icon: "warning"
            });
        } else {
            $.ajax({
                url: './app/ajax_template/sign_in.php',
                method: 'POST',
                data: {
                    credential : credential,
                    signInPass : signInPass
                },
                success: function(data) {
                    console.log(data);
                    $('#signin_err_ms').html(data);
                }
            })
        }
    }

    export function register(form_data, name, username, email, password, cell, gender, role, bloodgroup, dob) {
        
        if(name == "" || username == "" || email == "" || password == "" || cell == "" || gender == "" || role == "" || bloodgroup == "" || dob == "" ) {  
            $('#displayMsg').html(validate("all fields are required"));
        } 
        else if ( username.length < 5 ) {
            $('#displayMsg').html(validate("Username should be atleast 5 charachters long"));
        }
        else if ( !emailVerification(email) ) {
            $('#displayMsg').html(validate("Please use '@crud.com' extension", "info"));
        }
        else if ( !alphanumeric(password) || password.length < 8 ) {
            $('#displayMsg').html(validate("Password should be atleast 8 charachters long and it should have both number and letter", "info"));
        }
        else if ( isNaN(cell) || cell.length < 8) {
            $('#displayMsg').html(validate("Cell number should have atleast 8 digits and should be valid number", "info"));
        }
        else if ( getAge(dob) < 10) {
            $('#displayMsg').html(validate("User must be atleast 10 years old !!", "info"));
        } else {
            //  console.log(new FormData(form_data));
            $.ajax({
                url: './app/ajax_template/add_user.php',
                method: 'POST',
                data: new FormData(form_data),
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                        // swal({
                        //     title: 'Form Submitted',
                        //     text: 'Account created successfully',
                        //     icon: 'success'
                        // });
    
                    $("#createAccount")[0].reset();
                    $('#displayImg').attr('src','');
                    $('#displayImg').css('display','none');
                    $('#imgUpBtn').text("Upload your image");
                }
            })

        }

    }
    
  
    


