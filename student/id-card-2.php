<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="student_portal margin-top-00">
    <div class="container-fluid">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-2">
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
            <div class="col-lg-9 mx-auto">
                <h3 class="student-certify-title">Student Identification Card Download Page</h3>
                <div id="certificate-control-carousel" class="carousel slide mb-4" data-ride="">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="student-certificate">
                                <div class="certificate-section-download">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb-3">
                                            <div class="card id-view-sect text-center mx-auto id-card-size position-relative border-bottom-r-rad border-bottom-l-rad">
                                                <div class="card-body d-flex flex-column px-0 pt-0">
                                                    <!-- <div class="bg-dark position-relative">
                                                        <div class="id-logo-holder mb-3 pt-3">
                                                            <img src="<?php echo ROOT_DIR; ?>images/banners/logo-white-2.png" class="img-fluid" width="150" />
                                                        </div>
                                                        <div class="id-profile-pix mx-auto mb-4">
                                                            <img src="<?php echo ROOT_DIR; ?>images/banners/test-image.jpg" class="img-fluid object-fit-cover h-100 w-100" />
                                                        </div>
                                                        <div class="id-type-text bg-primary py-2">
                                                             <h6 class="text-uppercase make-bold mb-0 text-white">Identification Card</h6>
                                                        </div>
                                                    </div> -->
                                                    <div class="id-grid">
                                                        <div class="id-grid-1 bg-secondary border-top-l-rad">

                                                        </div>
                                                        <div class="id-grid-2 bg-dark border-top-r-rad">
                                                            <div class="id-logo-holder mb-3 pt-3">
                                                                <img src="<?php echo ROOT_DIR; ?>images/banners/logo-white-2.png" class="img-fluid" width="150" />
                                                            </div>
                                                            <div class="id-profile-pix mx-auto mb-4">
                                                                <img src="<?php echo ROOT_DIR; ?>images/banners/test-image.jpg" class="img-fluid object-fit-cover h-100 w-100" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="identification-text text-uppercase text-white">Identification Card</p>
                                                    <div class="id-name-display flex-grow-1 px-3 pt-3">
                                                        <h5 class="make-bold">Hubert Blaine Wolfeschlegelsteinhausenbergerdorff Sr.</h5>
                                                    </div>
                                                    <div class="id-info-session">
                                                        <p class="text-muted">Jan 2020 - Feb 2021</p>
                                                    </div>
                                                    <div class="img-container-holder mx-auto mb-3">
                                                        <img src="<?php echo ROOT_DIR; ?>images/banners/qr-code.svg" class="img-fluid object-fit-cover h-100 w-100" />
                                                    </div>
                                                    <p class="text-muted">xxxx-xxxx-000456</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="certificate-desc-section">
                                                <h4>Free Online Course In Critical Thinking For Self Development</h4>
                                                <p class="text-danger">To download your Student ID Card,<br> upload your photo <a href="#" class="font-weight-bold text-info">here</a> and update your profile information <a href="#" class="font-weight-bold text-info">here</a>.
                                                </p>
                                                <button class="btn btn-dark"><i class="fa fa-download"></i> Download Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="student-certificate">
                                 <div class="certificate-section-download">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb-3">
                                            <div class="card id-view-sect text-center mx-auto id-card-size">
                                                <div class="card-body d-flex flex-column">
                                                     <div class="id-logo-holder mb-4">
                                                        <img src="<?php echo ROOT_DIR; ?>images/banners/logo-coloured.png" class="img-fluid" width="150" />
                                                    </div>
                                                    <div class="id-profile-pix mx-auto mb-4">
                                                        <img src="<?php echo ROOT_DIR; ?>images/banners/78.jpg" class="img-fluid object-fit-cover h-100 w-100" />
                                                    </div>
                                                    <div class="id-name-display flex-grow-1">
                                                        <h5 class="make-bold">Hubert Blaine</h5>
                                                    </div>
                                                    <div class="id-info-session">
                                                        <p class="text-muted">Jan 2020 - Feb 2021</p>
                                                        <p class="text-muted mb-0">MSBM 000456</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-dark">
                                                    <h6 class="text-uppercase make-bold mb-0 text-white">Identification Card</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="certificate-desc-section">
                                                <h4>Free Online Course In Critical Thinking For Self Development</h4>
                                                <p class="text-danger">To download your Student ID Card,<br> upload your photo <a href="#" class="font-weight-bold text-info">here</a> and update your profile information <a href="#" class="font-weight-bold text-info">here</a>.
                                                </p>
                                                <button class="btn btn-dark"><i class="fa fa-download"></i> Download Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="student-certificate">
                                 <div class="certificate-section-download">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb-3">
                                            <div class="card id-view-sect text-center mx-auto id-card-size">
                                                <div class="card-body d-flex flex-column">
                                                     <div class="id-logo-holder mb-4">
                                                        <img src="<?php echo ROOT_DIR; ?>images/banners/logo-coloured.png" class="img-fluid" width="150" />
                                                    </div>
                                                    <div class="id-profile-pix mx-auto mb-4">
                                                        <img src="<?php echo ROOT_DIR; ?>images/banners/54.jpg" class="img-fluid object-fit-cover h-100 w-100" />
                                                    </div>
                                                    <div class="id-name-display flex-grow-1">
                                                        <h5 class="make-bold">Hubert Blaine Wolfeschlegelsteinhausen</h5>
                                                    </div>
                                                     <div class="id-info-session">
                                                        <p class="text-muted">Jan 2020 - Feb 2021</p>
                                                        <p class="text-muted mb-0">MSBM 000456</p>
                                                    </div>
                                                </div>
                                                <div class="card-footer bg-dark">
                                                    <h6 class="text-uppercase make-bold mb-0 text-white">Identification Card</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="certificate-desc-section">
                                                <h4>Free Online Course In Critical Thinking For Self Development</h4>
                                                <p class="text-danger">To download your Student ID Card,<br> upload your photo <a href="#" class="font-weight-bold text-info">here</a> and update your profile information <a href="#" class="font-weight-bold text-info">here</a>.
                                                </p>
                                                <button class="btn btn-dark"><i class="fa fa-download"></i> Download Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#certificate-control-carousel" role="button" data-slide="prev">
                        <img src="../images/icons/back2.svg" class="img-fluid student-admin-row">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#certificate-control-carousel" role="button" data-slide="next">
                        <img src="../images/icons/right.svg" class="img-fluid student-admin-row">
                        <span class="sr-only">Next</span>
                    </a>
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