
    <div class="view-section">
        <div class="card w-50 pt-3 px-2">
            <div class="card-title text-center col-sm-12">
                <h3>SIGN IN</h3> 
            </div>
            <div class="card-body">
            <div id="signin_err_ms"></div>
           
            <form action="" class="d-flex flex-column justify-content-center align-items-center" method="POST">
                <div class="form-group w-100">
                    <label for="signInCredential">Email / Username / Cell</label>
                    <input name="signin_credential" type="text" class="form-control col-sm-12" id="signInCredential" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email or cell number with anyone else.</small>
                </div>
                <div class="form-group w-100">
                    <label for="signInPass">Password</label>
                    <input name="signin_password" type="password" class="form-control col-sm-12" id="signInPass">
                </div>
                <input name="signin" type="submit" id="logIn" class="btn btn-success btn-block" value="Sign In">
            </form>
                <div class="d-flex flex-column justify-content-center align-items-center card-footer mt-4 col-sm-12">
                    <h6 class="text-center">Don't have any account? </h6>
                    <button id="goToRegister" class="btn btn-outline-dark btn-sm">GO TO REGISTER <i class="fas fa-arrow-right"></i></button>            
                </div>
            </div>

      </div>       
    </div>
