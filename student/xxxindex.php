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
                <h5 class="mb-3">Welcome <span class="name-bold">Jane Doe Smith</span></h5>
                <div class="progress profile-progress" style="height: 20px;">
                    <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
                <div id="carouselControls" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card student-card-spacing mt-2">
                                <h5 class="card-header card-student-title">Professional Certificate in International Labour Law Process</h5>
                                <div class="card-body stat_card_body">
                                    <div class="row">
                                        <!-- <div class="col-md-2"></div> -->
                                        <div class='col-md-4 text-center'>
                                            <div class="chart easy-pie-chart-5" data-percent="46">
                                                <span class="percent"></span>
                                            </div>
                                            <p class="text-dark">In Progress</p>
                                        </div>
                                        <div class='col-md-4 text-center'>
                                            <div class="chart easy-pie-chart-7" data-percent="92">
                                                <span class="percent"></span>
                                            </div>
                                            <p class="text-dark">Completed</p>
                                        </div>
                                        <div class='col-md-4 text-center'>
                                            <div class="chart easy-pie-chart-8" data-percent="92">
                                                <span class="percent"></span>
                                            </div>
                                            <p class="text-dark">Assignment</p>
                                        </div>
                                        <!-- <div class="col-md-2"></div> -->
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row text-center">
                                        <div class="col-md-6">
                                            <h6 class="push-tap">Remaining Days <span class="name-bold">365</span></h5>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="push-tap">Last Active Days <span class="name-bold">20 Days ago</span></h5>
                                        </div>
                                        <!-- <div class="col-md-4">
                                                <a href="#" class=" btn btn-dark">View Course</a>
                                            </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card student-card-spacing mt-2">
                                <h5 class="card-header card-student-title">Professional Certificate in International Market Entry Strategy</h5>
                                <div class="card-body stat_card_body">
                                    <div class="row">
                                        <!-- <div class="col-md-2"></div> -->
                                        <div class='col-md-4 text-center'>
                                            <!-- <div class="media">
                                                <img src="../images/icons/goal.svg" class="mr-3 img-fluid stat" alt="msbm">
                                                <div class="media-body">
                                                    <h5 class="mt-0">1</h5>
                                                    <p>In Progress</p>
                                                </div>
                                            </div> -->
                                            <div class="chart easy-pie-chart-5" data-percent="75">
                                                <span class="percent"></span>
                                            </div>
                                            <p class="text-dark">In Progress</p>
                                        </div>
                                        <div class='col-md-4 text-center'>
                                            <!-- <div class="media">
                                                <img src="../images/icons/list.svg" class="mr-3 img-fluid stat" alt="msbm">
                                                <div class="media-body">
                                                    <h5 class="mt-0">7</h5>
                                                    <p>Completed</p>
                                                </div>
                                            </div> -->
                                            <div class="chart easy-pie-chart-7" data-percent="52">
                                                <span class="percent"></span>
                                            </div>
                                            <p class="text-dark">Completed</p>
                                        </div>
                                        <div class='col-md-4 text-center'>
                                            <!-- <div class="media">
                                                <img src="../images/icons/assignment.svg" class="mr-3 img-fluid stat" alt="msbm">
                                                <div class="media-body">
                                                    <h5 class="mt-0">0</h5>
                                                    <p>Assignment</p>
                                                </div>
                                            </div> -->
                                            <div class="chart easy-pie-chart-8" data-percent="62">
                                                <span class="percent"></span>
                                            </div>
                                            <p class="text-dark">Assignment</p>
                                        </div>
                                        <!-- <div class="col-md-2"></div> -->
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row text-center">
                                        <div class="col-md-6">
                                            <h6 class="push-tap">Remaining Days <span class="name-bold">365</span></h5>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="push-tap">Last Active Days <span class="name-bold">20 Days ago</span></h5>
                                        </div>
                                        <!-- <div class="col-md-4">
                                                <a href="#" class=" btn btn-dark">View Course</a>
                                            </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card student-card-spacing mt-2">
                                <h5 class="card-header card-student-title">Professional Certificate in International Market Research</h5>
                                <div class="card-body stat_card_body">
                                    <div class="row">
                                        <!-- <div class="col-md-2"></div> -->
                                        <div class='col-md-4 text-center'>
                                            <!-- <div class="media">
                                                <img src="../images/icons/goal.svg" class="mr-3 img-fluid stat" alt="msbm">
                                                <div class="media-body">
                                                    <h5 class="mt-0">1</h5>
                                                    <p>In Progress</p>
                                                </div>
                                            </div> -->
                                            <div class="chart easy-pie-chart-5" data-percent="45">
                                                <span class="percent"></span>
                                            </div>
                                            <p class="text-dark">In Progress</p>
                                        </div>
                                        <div class='col-md-4 text-center'>
                                            <!-- <div class="media">
                                                <img src="../images/icons/list.svg" class="mr-3 img-fluid stat" alt="msbm">
                                                <div class="media-body">
                                                    <h5 class="mt-0">7</h5>
                                                    <p>Completed</p>
                                                </div>
                                            </div> -->
                                            <div class="chart easy-pie-chart-7" data-percent="22">
                                                <span class="percent"></span>
                                            </div>
                                            <p class="text-dark">Completed</p>
                                        </div>
                                        <div class='col-md-4  text-center'>
                                            <!-- <div class="media">
                                                <img src="../images/icons/assignment.svg" class="mr-3 img-fluid stat" alt="msbm">
                                                <div class="media-body">
                                                    <h5 class="mt-0">0</h5>
                                                    <p>Assignment</p>
                                                </div>
                                            </div> -->
                                            <div class="chart easy-pie-chart-8" data-percent="82">
                                                <span class="percent"></span>
                                            </div>
                                            <p class="text-dark">Assignment</p>
                                        </div>
                                        <!-- <div class="col-md-2"></div> -->
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row text-center">
                                        <div class="col-md-6">
                                            <h6 class="push-tap">Remaining Days <span class="name-bold">365</span></h5>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="push-tap">Last Active Days <span class="name-bold">20 Days ago</span></h5>
                                        </div>
                                        <!-- <div class="col-md-4">
                                                <a href="#" class=" btn btn-dark">View Course</a>
                                            </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev controller-carousel" href="#carouselControls" role="button" data-slide="prev">
                        <img src="../images/icons/back2.svg" class="img-fluid student-admin-row" />
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next  controller-carousel" href="#carouselControls" role="button" data-slide="next">
                        <img src="../images/icons/right.svg" class="img-fluid student-admin-row" />
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="card student-card-spacing">

                    <h5 class="card-header card-student-title">Diploma in Accounting</h5>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <a href="">
                                    <div class="card dashboard-action-links">
                                        <div class="lecture course-layout">
                                            <img src="../images/icons/blackboard.svg" class="img-fluid img-course" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="btn btn-dark btn-block">Lectures</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="">
                                    <div class="card dashboard-action-links">
                                        <div class="assignment course-layout">
                                            <img src="../images/icons/upload.svg" class="img-fluid img-course" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="btn btn-dark btn-block">Submit Assignment</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="">
                                    <div class="card dashboard-action-links">
                                        <div class="download course-layout">
                                            <img src="../images/icons/direct-download.svg" class="img-fluid img-course" alt="...">
                                        </div>
                                        <div class="card-body">


                                            <a href="#" class="btn btn-dark btn-block">Downloads</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card student-card-spacing">

                    <h5 class="card-header card-student-title">Diploma in Business Management</h5>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <a href="">
                                    <div class="card dashboard-action-links">
                                        <div class="lecture course-layout">
                                            <img src="../images/icons/blackboard.svg" class="img-fluid img-course" alt="...">
                                        </div>
                                        <div class="card-body">
                                            <a href="#" class="btn btn-dark btn-block">Lectures</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="">
                                    <div class="card dashboard-action-links">
                                        <div class="assignment course-layout">
                                            <img src="../images/icons/upload.svg" class="img-fluid img-course" alt="...">
                                        </div>
                                        <div class="card-body">


                                            <a href="#" class="btn btn-dark btn-block">Submit Assignment</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="">
                                    <div class="card dashboard-action-links">
                                        <div class="download course-layout">
                                            <img src="../images/icons/direct-download.svg" class="img-fluid img-course" alt="...">
                                        </div>
                                        <div class="card-body">


                                            <a href="#" class="btn btn-dark btn-block">Downloads</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
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