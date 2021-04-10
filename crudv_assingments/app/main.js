$( document ).ready(function() {
   
    $('#photo').change(function(e) {
        let file_url = URL.createObjectURL(e.target.files[0]);
        $('#load_photo').attr('src', file_url);
        $('#up_logo').css('display', 'none');
        $('#change_photo').css('display', 'block');
   })

   $('#delete_btn').click(function() {
       let confirmation = confirm('Are you sure ?');
       if(confirmation == true) {
           return true;
       } else {
           return false;
       }
   }) 
   
});

/* a vanilla js back page function */
function goBack() {
  window.history.back();
}

