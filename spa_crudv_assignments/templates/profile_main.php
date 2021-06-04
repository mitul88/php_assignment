<?php

    include_once "../app/autoload.php";
    $signin_data = signinInfo($_SESSION['user_id']);

?>

<div style="width:100%" class="my-5"><h5>Welcome, <?php echo $signin_data->name;?> !</h5></div>
 <table class="table">
  
  <tbody class="text-secondary">

    <tr>  
      <td><i class="fas fa-pen-fancy"></i> <em> Name:</em></td>
      <td><?php echo $signin_data->name;?></td>
    </tr>
    
    <tr>  
      <td><i class="fas fa-user-tag"></i> <em> Username:</em></td>
      <td><?php echo $signin_data->username;?></td>
    </tr>

    <tr>  
      <td><i class="fas fa-envelope-open-text"></i> <em> Email:</em></td>
      <td><?php echo $signin_data->email;?></td>
    </tr>
    
    <tr>
      <td><i class="fas fa-mobile-alt"></i> <em> Cell:</em></td>
      <td><?php echo $signin_data->cell;?></td>
    </tr>
    
    <tr>  
      <td><i class="fas fa-clipboard-check"></i> <em> Role:</em></td>
      <td><?php echo $signin_data->role;?></td>
    </tr>

    <tr>  
      <td><i class="fas fa-check"></i> <em> Gender:</em></td>
      <td><?php echo $signin_data->gender;?></td>
    </tr>

    <tr>  
      <td><i class="far fa-calendar-alt"></i> <em> Date of Birth:</em></td>
      <td><?php echo $signin_data->DOB;?></td>
    </tr>

    <tr>  
      <td><i class="fas fa-tint"></i> <em> Bloodgroup:</em></td>
      <td><?php echo $signin_data->bloodgroup;?></td>
    </tr>
  </tbody>
</table>




