    
<div class="view-section">
        <div class="card w-50 pt-3 px-2">
            <div class="card-title text-center">
                <h3>SIGN UP</h3> 
            </div>
            
            <div class="card-body">
            <span id="displayMsg"></span>
            <form id="createAccount" class="d-flex flex-column justify-content-center align-items-center" method="POST" enctype="multipart/form-data" >
                <div class="form-row w-100 d-flex justify-content-between">
                    <div class="form-group col-md-6">
                        <label for="nameField">Name</label>
                        <input name="name" type="text" class="form-control" id="nameField">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userNameReg">Username</label>
                        <input name="username" type="text" class="form-control" id="userNameReg">
                        <span id="username_chk_msg"></span>
                    </div>
                </div>
               
                <div class="form-group w-100">
                    <label for="emailReg">Email address</label>
                    <input name="email" type="email" class="form-control" id="emailReg" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Must use "crud" extension. i.e. "xyz@crud.com"</small>
                    <span id="email_check_msg"></span>
                </div>

                <div class="form-group w-100">
                    <label for="setPassword">Password</label>
                    <input name="set_password" type="password" class="form-control" id="setPassword">
                </div>

                <div class="form-group w-100">
                    <label for="cellReg">Cell number</label>
                    <input name="cell" type="text" class="form-control" id="cellReg">
                    <span id="cell_check_msg"></span>
                </div>
                
                <div class="form-row w-100 d-flex justify-content-between">
                    <div class="form-group col-sm-6">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option></option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="role">Role</label>
                        <select name="role" id="role" class="form-control">
                            <option></option>
                            <option>Student</option>
                            <option>Teacher</option>
                            <option>Staff</option>
                        </select>
                    </div>
                </div>

                <div class="form-row w-100 d-flex justify-content-between">
                    <div class="form-group col-sm-12 col-md-6">
                        <label for="bloodGroupField">Bloodgroup:</label>
                        <input name="bloodgroup" type="text" class="form-control" id="bloodGroupField">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="dob">Your Date of Birth:</label>
                        <div id="dob" class="input-group date" data-provide="datepicker">
                            <input name="dob" type="text" class="form-control" placeholder=" mm/dd/year" style="cursor:pointer">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row 2-100 d-flex flex-column align-items-center justify-content-center">
                    <img src="" alt="your image" id="displayImg" style="height:200px;width:200px;display:none">
                    <div class="form-group d-flex align-items-center flex-column mt-2">
                        <label id="imgUpBtn" for="imgUp" class="btn btn-outline-success">Upload your image <i class="fas fa-arrow-up"></i></label>
                        <input name="uploaded_img" id="imgUp" type="file" style="display: none">
                    </div>
                </div>
                
                
                <input name="submit" type="submit" class="btn btn-primary btn-block" value="Create Account">
                
            </form>
                <div class="d-flex flex-column justify-content-center align-items-center card-footer mt-4">
                    <h6 class="text-center">Already have an account? </h6>
                    <button id="goToSignIn" class="btn btn-outline-dark btn-sm">GO TO SIGN IN <i class="fas fa-arrow-right"></i></button>            
                </div>
            </div>
            
      </div>       
</div>
<!--  -->