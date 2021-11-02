<?php include_once('../components/config.php'); ?>
<?php include_once('../components/header.php'); ?>

<div class="login-sect-display">
    <div class="main-content">
        <div class="login-msbm about-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 d-none d-lg-block d-xl-block">
                        <div class="auth-side-bg img-border-rad-50" style="padding-top: 60px; padding-bottom:60px;"><img src="<?php echo ROOT_DIR; ?>images/banners/pgd_bg.jpg" class="img-fluid card-image-set" /></div>
                    </div>
                    <div class="col-md-5">
                        <div class="d-login-pos">
                            <h3 class="text-center sign-in-heading">Sign In</h3>
                            <h5 class="text-center sign-in-sub-heading">New to MSBM? <span class="login-link"><a href="#">Register Now</a></span></h5>
                            <br />
                            <form action="<?php echo ROOT_DIR; ?>staff/index.php" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="Check1">
                                                <label class="form-check-label" for="Check1">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <span class="login-link"><a href="#" class="float-right">Forgot Password?</a></span>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark btn-block">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="login-sug-sect py-5 bg-lighter">
            <div class="find course-list-msbm">
                <h2 class="text-center explore-courses">Suggested Courses</h2>
                <div class="container">
                    <!-- <p class="heading-find">Degree Programmes in Nigeria</p> -->
                    <div class="row myflex">
                        <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                            <a href="" class="card-ahref-flex">
                                <div class="card-img-wrap">
                                    <img src="<?php echo ROOT_DIR; ?>images/MA in Marketing & Innovation-2.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <p class="card-text card-uni">UK Partner University</p>
                                    <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                    <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <div class="row">
                                        <div class="col-5 mb-2">
                                            <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                        </div>
                                        <div class="col-7 mb-2">
                                            <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                        </div>
                                        <div class="col-5 mb-2">
                                            <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                        </div>
                                        <div class="col-7 mb-2">
                                            <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                        </div>
                                    </div>
                                    <div class="card-info-btn">
                                        <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                    </div>
                                    <!-- <div class="course-b-sect mt-2">
                                        <div class="course-b-sect d-flex justify-content-end">
                                            <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                            <a href="" class="card-ahref-flex">
                                <div class="card-img-wrap">
                                    <img src="<?php echo ROOT_DIR; ?>images/MA-Human-Resource-Management-.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <p class="card-text card-uni">UK Partner University</p>
                                    <h6 class="card-title">BBA<br>Bachelor of Business</h6>
                                    <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <div class="row">
                                        <div class="col-5 mb-2">
                                            <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                        </div>
                                        <div class="col-7 mb-2">
                                            <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                        </div>
                                        <div class="col-5 mb-2">
                                            <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                        </div>
                                        <div class="col-7 mb-2">
                                            <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                        </div>
                                    </div>
                                    <div class="card-info-btn">
                                        <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                    </div>
                                    <!-- <div class="course-b-sect mt-2">
                                        <button class="btn btn-outline-danger btn-block btn-sm lt-sp"><i class="fa fa-bookmark"></i> Saved</button>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                            <a href="" class="card-ahref-flex">
                                <div class="card-img-wrap">
                                    <img src="<?php echo ROOT_DIR; ?>images/Master of Business Administration.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <p class="card-text card-uni">UK Partner University</p>
                                    <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                    <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
                                    <div class="row">
                                        <div class="col-5 mb-2">
                                            <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                        </div>
                                        <div class="col-7 mb-2">
                                            <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                        </div>
                                        <div class="col-5 mb-2">
                                            <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                        </div>
                                        <div class="col-7 mb-2">
                                            <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                        </div>
                                    </div>
                                    <div class="card-info-btn">
                                        <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                    </div>
                                    <!-- <div class="course-b-sect mt-2">
                                        <div class="course-b-sect d-flex justify-content-end">
                                            <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                            <a href="" class="card-ahref-flex">
                                <div class="card-img-wrap">
                                    <img src="<?php echo ROOT_DIR; ?>images/course-placeholder.png" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <p class="card-text card-uni">UK Partner University</p>
                                    <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                    <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
                                    <div class="row">
                                        <div class="col-5 mb-2">
                                            <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                        </div>
                                        <div class="col-7 mb-2">
                                            <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                        </div>
                                        <div class="col-5 mb-2">
                                            <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                        </div>
                                        <div class="col-7 mb-2">
                                            <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                        </div>
                                    </div>
                                    <div class="card-info-btn">
                                        <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                    </div>
                                    <!-- <div class="course-b-sect mt-2">
                                        <div class="course-b-sect d-flex justify-content-end">
                                            <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                        </div>
                                    </div> -->
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="view-sug-cat-sect pad-100-sm">
            <div class="container">
               <div class="row">
                  <div class="col-lg-5">
                     <h2 class="make-bold ft-3">Learn the skills that can help you now</h2>
                  </div>
                  <div class="col-lg-7">
                     <ul class="list-unstyled">
                        <li><a href="https://msbm.org.uk/category/masters-degrees" class="sub-btn"> Master's Degree</a></li>
                        <li><a href="https://msbm.org.uk/category/international-postgraduate-diplomas" class="sub-btn"> International Postgraduate Diploma</a></li>
                        <li><a href="https://msbm.org.uk/category/bachelors-degrees" class="sub-btn"> Bachelor's Degree</a></li>
                        <li><a href="https://msbm.org.uk/category/short-courses" class="sub-btn"> Professional Certificate Courses</a></li>
                        <li><a href="https://msbm.org.uk/category/advanced-professional-certificate-courses" class="sub-btn"> Advanced Professional Certificate Courses</a></li>
                        <li><a href="https://msbm.org.uk/category/executive-masters-online" class="sub-btn"> Online SEMP</a></li>
                     </ul>
                  </div>
               </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('../components/footer.php'); ?>