<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>



<div class="main-content">
   <div class="login-msbm about-row">
      <div class="container">
         <h3 class="text-center sign-in-heading ">Register</h3>
         <!-- <h5 class="text-center sign-in-sub-heading">New to MSBM? <span class="login-link"><a href="#">Register Now</a></span></h5> -->
         <br>
         <div class="row">
            <div class="col-md-6 mx-auto">
               <div class="card card-register-interactive-form border p-3">
                    <div class="card-heading">
                         <h3 class="make-body interactive-setup-form-title"><span class="text-info">Hi Ugochukwu,</span><br/>A little bit of background details</h3>
                    </div>
                    <div class="card-body card-body-register-interactive-form">
                        <form action="<?php echo ROOT_DIR; ?>register-3.php" method="post">
                            <div class="form-group">
                                <input name="phone" type="text" value="" class="form-control" placeholder="* Phone Number">
                            </div>
                                <div class="form-group">
                                    <select name="nationality" class="form-control">
                                        <option value="" selected="" hidden="" disabled="">* Nationality</option>
                                        <option value="97">Afghanistan</option>
                                        <option value="215">Aland Islands</option>
                                        <option value="43">Albania</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="country_of_residence" class="form-control">
                                        <option value="" selected="" hidden="" disabled="">* Country Of Residence</option>
                                        <option value="141">Yemen</option>
                                        <option value="194">Zambia</option>
                                        <option value="195">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="gender" class="form-control">
                                        <option value="" selected="" hidden="" disabled="">* Gender</option>
                                        <option value="m">Male</option>
                                        <option value="f">Female</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input name="company" type="text" value="" class="form-control" placeholder="Company/Employer">
                                </div>
                                <div class="form-group">
                                    <select name="position" class="form-control">
                                        <option value="" selected="" hidden="" disabled="">* Position</option>
                                        <option value="145">CEO/Executive Director</option>
                                        <option value="146">Senior Manager</option>
                                        <option value="147">Middle Manager</option>
                                        <option value="148">Executive</option>
                                        <option value="149">Officer</option>
                                        <option value="150">Other...</option>
                                    </select>
                                </div>
                            <hr/>
                            <div class="form-group d-flex justify-content-between">
                                <a href="<?php echo ROOT_DIR; ?>register.php" class="btn btn-light make-bold">Back</a>
                                <button class="btn btn-dark make-bold">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include_once('components/footer.php'); ?>