<?php

    // databse management functions
    
    // data send to database
    function create($sql) {
        connect()->query($sql);
    }

    // getting all data from database
    function all_data($table, $order = 'DESC') {
       return connect()->query("SELECT * FROM $table ORDER BY id $order");
    }


    // getting single data from database
    function single_data($table, $id) {
        $data = connect()->query("SELECT * FROM $table WHERE id='$id'");
        return $data->fetch_object();
    }
    // delete data 
    function data_delete($table, $id) {
         connect()->query("DELETE FROM $table WHERE id='$id'");
    }    

    // data check 

    function dataCheck($table, $column, $data) {
        $data = connect()->query("SELECT $column FROM $table WHERE $column='$data'");
        return $data->num_rows > 0 ;
    }
   
    // necessary functions
    function validate($val_msg, $msg_type = 'danger') {

        return "<p class=\" alert alert-$msg_type \">$val_msg <button class=\"close\" data-dismiss=\"alert\">&times;</button> </p>";
    }

    function upload_file($file_info, $dir = '/', array $type = ['jpg', 'gif', 'png', 'jpeg']) {
        /*uploaded file management */
        $file_name = $file_info['name'];
        $tmp_file_name = $file_info['tmp_name'];
        $file_name_arr = explode('.', $file_name);
        $file_ext = end($file_name_arr);
        $unique_file_name = md5(time() . rand()) . '.' . $file_ext;
        $err_msg = "";
        if(in_array($file_ext, $type) == false) {
            
            $err_msg =validate('Invalid file formate');

        } else {
            move_uploaded_file($tmp_file_name, $dir . $unique_file_name);
        }
 
        return [
            'unique_file_name' => $unique_file_name,
            'err_msg' => $err_msg,
        ];
    }