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
               <div class="card card-register-interactive-form border p-4">
                    <div class="card-heading">
                         <h3 class="make-body interactive-setup-form-title"><span class="text-info">Awesome,</span><br/>Let's setup your account.</h3>
                    </div>
                    <div class="card-body card-body-register-interactive-form">
                            <form>
                                <div class="form-group demarcation">
                                    <input name="email" type="email" value="" class="form-control" placeholder="* Email Address" required="">
                                </div>
                                <div class="form-group">
                                    <input name="password" type="password" value="" class="form-control" placeholder="* Password" required="">
                                </div>
                                <div class="form-group">
                                    <input name="confirm_password" type="password" value="" class="form-control" placeholder="* Confirm Password" required="">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="read_accept" required="">
                                    <label class="form-check-label text-left" for="read_accept" style="font-weight: normal;">I have read and agree to the <a href="#" class="make-bold">Terms and Conditions</a> and <a href="#" class="make-bold">Privacy Policy</a></label>
                                </div>
                            <hr/>
                            <div class="form-group d-flex justify-content-between">
                                <a href="<?php echo ROOT_DIR; ?>register-2.php" class="btn btn-light make-bold">Back</a>
                                <button class="btn btn-dark make-bold">Complete</button>
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