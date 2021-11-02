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
                         <h3 class="make-body interactive-setup-form-title">Let's get to know you?</h3>
                    </div>
                    <div class="card-body card-body-register-interactive-form">
                        <form action="<?php echo ROOT_DIR; ?>register-2.php" method="post">
                            <div class="form-group">
                                <input name="first_name" type="text" value="" class="form-control" placeholder="* First Name">
                            </div>
                            <div class="form-group">
                                <input name="middle_name" type="text" value="" class="form-control" placeholder="Middle Name">
                            </div>
                            <div class="form-group">
                                <input name="last_name" type="text" value="" class="form-control" placeholder="* Last Name">
                            </div>
                            <hr/>
                            <div class="form-group d-flex justify-content-end">
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