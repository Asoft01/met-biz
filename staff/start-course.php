<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-head.php'); ?>

<body>

<?php include "../components/admin-staff-navbar.php"; ?>

<div class="lecture-v-portal">
    <div class="d-flex" id="wrapper">

       <?php include "../components/sidebar.inc.php"; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="pb-5">
            <div class="mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mb-3">
                            <a href="<?php echo ROOT_DIR; ?>staff/add-new-programme.php" class="btn btn-purple btn-bord-radius btn-block">
                                Start a new course
                            </a>
                        </div>
                        <div class="col-lg-5"></div>
                        <div class="col-lg-4 mb-3">
                           <div class="form-row">
                                <div class="col-lg-8 form-group">
                                    <input type="text" class="form-control" placeholder="Search for courses..." />
                                </div>
                                <div class="col-lg-4 form-group">
                                   <button class="btn btn-purple btn-block btn-bord-radius"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mt-5">
                            <div class="my-5">
                                <div class="text-center">
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/empty.png" class="img-fluid" width="150"/>
                                </div>
                                <h1 class="make-bold text-center">No course at the moment</h1>
                            </div>
                            <div class="find">
                                <div class="row myflexx">
                                    <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
                                        <a href="<?php echo ROOT_DIR; ?>staff/course-details.php" class="card-ahref-flex">
                                            <div class="card-img-wrap">
                                                <img src="../images/bg2.jpg" class="card-img-top" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h6 class="card-title">Course Title</h6>
                                                <span class="badge badge-success-lighten mb-5">Active</span>
                                                <!-- <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                                                <!-- <div class="row">
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
                                                </div> -->
                                                <p class="text-danger">No details <i class="fa fa-times-circle"></i></p>
                                                <p class="make-bold flex-grow-1">0 modules</p>
                                                <div class="card-info-btn">
                                                    <button class="btn btn-purple btn-block mt-auto btn-bord-radius">Open Course</button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
                                        <a href="<?php echo ROOT_DIR; ?>staff/course-details.php" class="card-ahref-flex">
                                            <div class="card-img-wrap">
                                                <img src="../images/Strategy.jpg" class="card-img-top" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h6 class="card-title">Course Title</h6>
                                                <span class="badge badge-warning-lighten mb-5">Inactive</span>
                                                <!-- <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                                                <!-- <div class="row">
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
                                                </div> -->
                                                <p class="text-danger">No details <i class="fa fa-times-circle"></i></p>
                                                <p class="make-bold flex-grow-1">0 modules</p>
                                                <div class="card-info-btn">
                                                    <button class="btn btn-purple btn-block mt-auto btn-bord-radius">Open Course</button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                     <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
                                        <a href="<?php echo ROOT_DIR; ?>staff/course-details.php" class="card-ahref-flex">
                                            <div class="card-img-wrap">
                                                <img src="../images/bg2.jpg" class="card-img-top" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h6 class="card-title">Course Title</h6>
                                                <span class="badge badge-success-lighten mb-5">Active</span>
                                                <!-- <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                                                <!-- <div class="row">
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
                                                </div> -->
                                                <p class="text-danger">No details <i class="fa fa-times-circle"></i></p>
                                                <p class="make-bold flex-grow-1">0 modules</p>
                                                <div class="card-info-btn">
                                                    <button class="btn btn-purple btn-block mt-auto btn-bord-radius">Open Course</button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
                                        <a href="<?php echo ROOT_DIR; ?>staff/course-details.php" class="card-ahref-flex">
                                            <div class="card-img-wrap">
                                                <img src="../images/Strategy.jpg" class="card-img-top" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h6 class="card-title">Course Title</h6>
                                                <span class="badge badge-warning-lighten mb-5">Inactive</span>
                                                <!-- <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                                                <!-- <div class="row">
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
                                                </div> -->
                                                <p class="text-danger">No details <i class="fa fa-times-circle"></i></p>
                                                <p class="make-bold flex-grow-1">0 modules</p>
                                                <div class="card-info-btn">
                                                    <button class="btn btn-purple btn-block mt-auto btn-bord-radius">Open Course</button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                     <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
                                        <a href="<?php echo ROOT_DIR; ?>staff/course-details.php" class="card-ahref-flex">
                                            <div class="card-img-wrap">
                                                <img src="../images/bg2.jpg" class="card-img-top" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h6 class="card-title">Course Title</h6>
                                                <span class="badge badge-success-lighten mb-5">Active</span>
                                                <!-- <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                                                <!-- <div class="row">
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
                                                </div> -->
                                                <p class="text-danger">No details <i class="fa fa-times-circle"></i></p>
                                                <p class="make-bold flex-grow-1">0 modules</p>
                                                <div class="card-info-btn">
                                                    <button class="btn btn-purple btn-block mt-auto btn-bord-radius">Open Course</button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
                                        <a href="<?php echo ROOT_DIR; ?>staff/course-details.php" class="card-ahref-flex">
                                            <div class="card-img-wrap">
                                                <img src="../images/Strategy.jpg" class="card-img-top" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <h6 class="card-title">Course Title</h6>
                                                <span class="badge badge-warning-lighten mb-5">Inactive</span>
                                                <!-- <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                                                <!-- <div class="row">
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
                                                </div> -->
                                                <p class="text-danger">No details <i class="fa fa-times-circle"></i></p>
                                                <p class="make-bold flex-grow-1">0 modules</p>
                                                <div class="card-info-btn">
                                                    <button class="btn btn-purple btn-block mt-auto btn-bord-radius">Open Course</button>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
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
                                    <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
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
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>

<?php include_once('../components/footer.php'); ?>

</body>

</html>