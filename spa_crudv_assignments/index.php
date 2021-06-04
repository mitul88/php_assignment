<?php 

    include_once "./templates/header.php";
    include_once "./app/autoload.php";
    
    if( isset( $_SESSION['login_status'] ) AND $_SESSION['login_status'] == true ) {
        
        header('location:./profile.php');
    }

?>

<div class="container-fluid top">
        <div class="row">
            <div class="col-md-12 py-2">
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
            <a class="navbar-brand"  style="cursor:pointer">CRUD</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link  " style="cursor:pointer;">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a id="all" class="nav-link " style="cursor:pointer;">All Users</a>
                        </li>
                        <li class="nav-item">
                            <a id="navSignIn" class="nav-link" style="cursor:pointer;">Sign In</a>
                        </li>                
                    </ul>
                </div>
            </div>
                
            </nav>

            </div>
        </div>

 </div>      

 <div class="container-lg">
        <!-- <div class="row">
            <div class="col-12">
                
            </div>
        </div> -->
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-6">
                <div class="app">

                </div>  
            </div>      
            <div class="col-12">
                <div class="show-profile">

                </div>  
            </div>      
        </div>    
                
</div>
    

<?php include_once "./templates/footer.php"?>

