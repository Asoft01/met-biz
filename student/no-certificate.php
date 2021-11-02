<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="student_portal">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-3">
                <div class="profile-stick">
                    <div class="card profile-detail">
                        <div class="profile_img_container">
                            <img src="../images/profile_img.jpg" class="img-fluid rounded-circle profile_img" />
                            <p class="text-center mt-1"><a href="">Change Upload Image <i class="fa fa-camera"></i></a></p>

                        </div>
                        <div class="card-body">
                            <div class="row profile_row">
                                <div class="col-12 text-center">

                                    <h3> Jane Doe Smith</h3>
                                </div>
                                <div class="col-12 text-center profile_position">
                                    <!-- <span><img src="../images/icons/work.svg" class="img-fluid profile_icon"></span>  --> Senior Manager at <br /> Chevron Oil and Gas
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 mx-auto text-center profile_name">
                                    Nigerian
                                </div>

                            </div>
                            <div class="col-md-12 text-center mt-3">
                                <button class="btn btn-normal">Edit your information <i class="fa fa-chevron-right slide-icon"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card help-info">
                        <div class="card-body">
                            <p>If you have any questions or get stuck please contact us in the relevant department</p>
                            <ul class="list-group list-help-issues">
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Academic Issues
                                        <span class="badge badge-pill"><i class="fa fa-briefcase"></i></span>
                                    </li>
                                </a>
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Technical Issues
                                        <span class="badge badge-pill"><i class="fa fa-server"></i></span>
                                    </li>
                                </a>
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Student Issues
                                        <span class="badge badge-pill"><i class="fa fa-graduation-cap"></i></span>
                                    </li>
                                </a>
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Finance Issues
                                        <span class="badge badge-pill"><i class="fa fa-money"></i></span>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 statistics">
                <h3 class="student-certify-title">Certificate Download Page</h3>
                <div class="student-certificate">
                    <div class="certificate-section-download">
                        <div class="certificate-img-sect">
                            <p class="text-center"> <img src="<?php echo ROOT_DIR; ?>images/banners/PPC.jpg" class="mr-3 certificate-img-download" alt="..."></p>
                        </div>
                        <div class="certificate-desc-section">
                            <h4>Once you've earned a Certificate it will appear here.</h4>
                            <!-- <p class="text-danger">Your Certificate is not Ready</p> -->
                        </div>
                    </div>
                    </p>
                </div>

                <div class="find">
                    <div class="container">
                        <p class="heading-find">Recommended Courses</p>
                        <div class="row myflexx">
                            <div class="col-md-6 col-12 col-lg-6 col-xl-4 card">
                                <a href="" class="card-ahref-flex">

                                    <div class="card-img-wrap">
                                        <img src="../images/bg2.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text card-uni">UK Partner University</p>
                                        <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                        <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <div class="row">
                                            <div class="col-5 mb-2">
                                                <p class="card-text"><img src="../images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                            </div>
                                            <div class="col-7 mb-2">
                                                <p class="card-text"><img src="../images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                            </div>
                                            <div class="col-5 mb-2">
                                                <p class="card-text"><img src="../images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                            </div>
                                            <div class="col-7 mb-2">
                                                <p class="card-text"><img src="../images/icons/screen.svg" class="desc-icon"> Online</p>
                                            </div>
                                        </div>
                                        <div class="card-info-btn">
                                            <button class="btn btn-dark btn-block mt-auto">Find More</button>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-6 col-12 col-lg-6 col-xl-4 card">
                                <a href="" class="card-ahref-flex">

                                    <div class="card-img-wrap">
                                        <img src="../images/Strategy.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text card-uni">UK Partner University</p>
                                        <h6 class="card-title">BBA<br>Bachelor of Business</h6>
                                        <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <div class="row">
                                            <div class="col-5 mb-2">
                                                <p class="card-text"><img src="../images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                            </div>
                                            <div class="col-7 mb-2">
                                                <p class="card-text"><img src="../images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                            </div>
                                            <div class="col-5 mb-2">
                                                <p class="card-text"><img src="../images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                            </div>
                                            <div class="col-7 mb-2">
                                                <p class="card-text"><img src="../images/icons/screen.svg" class="desc-icon"> Online</p>
                                            </div>
                                        </div>
                                        <div class="card-info-btn">
                                            <button class="btn btn-dark btn-block mt-auto">Find More</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-12 col-lg-6 col-xl-4 card">
                                <a href="" class="card-ahref-flex">

                                    <div class="card-img-wrap">
                                        <img src="../images/bg2.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text card-uni">UK Partner University</p>
                                        <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                        <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <div class="row">
                                            <div class="col-5 mb-2">
                                                <p class="card-text"><img src="../images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                            </div>
                                            <div class="col-7 mb-2">
                                                <p class="card-text"><img src="../images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                            </div>
                                            <div class="col-5 mb-2">
                                                <p class="card-text"><img src="../images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                            </div>
                                            <div class="col-7 mb-2">
                                                <p class="card-text"><img src="../images/icons/screen.svg" class="desc-icon"> Online</p>
                                            </div>
                                        </div>
                                        <div class="card-info-btn">
                                            <button class="btn btn-dark btn-block mt-auto">Find More</button>
                                        </div>
                                    </div>
                                </a>
                            </div>




                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-normal">View more courses in Nigeria <i class="fa fa-chevron-right slide-icon"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('../components/footer.php'); ?>