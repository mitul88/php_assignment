
<?php include_once "./templates/header.php"?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">SPA</a>
            <button id="signOut" class="btn btn-outline-dark my-2 my-sm-0"><i class="fas fa-sign-out-alt"></i> SIGN OUT</button>
        </div>
        </nav>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="card" style="max-height: 450px">
                        <img class="card-img-top" src="./photo/8.jpg" alt="profile_photo">
                        <div class="card-body bg-light">
                            <div class="card-title text-center">
                                <h3>Shahed Rahman</h3>
                                <h6><em>redReckham</em></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="profileTab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="ture">Profile</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="allStudentsTab" data-toggle="tab" href="#contact" role="tab" aria-controls="show-all" aria-selected="false">Show students</a>
                        </li>
                    </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active show-profile-content py-1" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>
                    <div class="tab-pane fade show show-all-data py-2" id="contact" role="tabpanel" aria-labelledby="show-all"></div>
                </div>
                </div>
            </div>
        </div>
   
        <?php include_once "./templates/footer.php"?>

