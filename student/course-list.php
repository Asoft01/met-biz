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
            <div class="col-lg-9">
                <div class="card assignment-info course-lister">
                    <div class="card-header assignment-ttle">
                        <i class="fa fa-book"></i> MBA Online
                        <span class="float-right"><i class="fa fa-user"></i> Student Number: 1011145</span>
                    </div>
                    <div class="card-body assignment-modules course-list">
                        <div class="row">
                            <div class="col-md-6 spacer">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/hourglass2.svg" class="mr-3 img-fluid" alt="...">
                                    <div class="media-body">
                                        <p class="mt-0">Time Left</p>
                                        <h5>2months 12days 2hours</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 spacer">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/watch.svg" class="mr-3 img-fluid" alt="...">
                                    <div class="media-body">
                                        <p class="mt-0">Programme Start Date</p>
                                        <h5>Feb 13, 2020</h5>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-6 spacer'>
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/register.svg" class="mr-3 img-fluid" alt="...">
                                    <div class="media-body">
                                        <p class="mt-0">Last Login Date</p>
                                        <h5>Feb 13, 2020</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 spacer">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/watch2.svg" class="mr-3 img-fluid" alt="...">
                                    <div class="media-body">
                                        <p class="mt-0">Programme End Date</p>
                                        <h5>Feb 13, 2020</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 spacer">
                                <button class="btn btn-dark btn-block">Take Lectures</button>
                            </div>
                            <div class="col-md-4 spacer">
                                <button class="btn btn-dark btn-block">Submit Assignment</button>
                            </div>
                            <div class="col-md-4 spacer">
                                <button class="btn btn-dark btn-block">Download Course Materials</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card assignment-info course-lister">
                    <div class="card-header assignment-ttle">
                        <i class="fa fa-book"></i> MBA Online
                        <span class="float-right"><i class="fa fa-user"></i> Student Number: 1011145</span>
                    </div>
                    <div class="card-body assignment-modules course-list">
                        <div class="row">
                            <div class="col-md-6 spacer">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/hourglass2.svg" class="mr-3 img-fluid" alt="...">
                                    <div class="media-body">
                                        <p class="mt-0">Time Left</p>
                                        <h5>2months 12days 2hours</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 spacer">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/watch.svg" class="mr-3 img-fluid" alt="...">
                                    <div class="media-body">
                                        <p class="mt-0">Programme Start Date</p>
                                        <h5>Feb 13, 2020</h5>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-6 spacer'>
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/register.svg" class="mr-3 img-fluid" alt="...">
                                    <div class="media-body">
                                        <p class="mt-0">Last Login Date</p>
                                        <h5>Feb 13, 2020</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 spacer">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/watch2.svg" class="mr-3 img-fluid" alt="...">
                                    <div class="media-body">
                                        <p class="mt-0">Programme End Date</p>
                                        <h5>Feb 13, 2020</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 spacer">
                                <button class="btn btn-dark btn-block">Take Lectures</button>
                            </div>
                            <div class="col-md-4 spacer">
                                <button class="btn btn-dark btn-block">Submit Assignment</button>
                            </div>
                            <!-- <div class="col-md-4 spacer">
                                    <button class="btn btn-dark btn-block">Download Course Materials</button>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('../components/footer.php'); ?>