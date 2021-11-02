<nav class="navbar navbar-expand-lg navbar-dark student-admin-navbar navigator fixed-top bg-white">
    <div class="container-fluid">
        <a class="navbar-brand mr-3" href="<?php echo ROOT_DIR; ?>student/business-dashboard.php"><img src="../images/banners/logo-dark.png" width="120"></a>
            <ul class="navbar-nav ml-auto d-flex flex-row d-inline-flex d-lg-none d-xl-none">
                <li class="nav-item">
                    <a href="<?php echo ROOT_DIR; ?>student/index.php" class="nav-link btn btn-danger hover-btn-text btn-sm px-2 btn-bord-radius pb-2">
                        <!-- <span class="fa-stack fa-lg d-inline-block d-lg-none d-xl-none">
                            <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                            <img src="../images/icons/book.svg" class="img-fluid student-admin-icon">
                        </span> -->
                        <span>Personal Account</span>
                    </a>
                </li>
            </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars text-dark fa-lg ml-2"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto staff-admin-left-navbar">
                <li class="nav-item">
                    <a href="<?php echo ROOT_DIR; ?>student/business-staff-members.php" class="nav-link">
                        <span class="fa-stack fa-lg d-inline-block d-lg-none d-xl-none">
                            <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                            <img src="<?php echo ROOT_DIR; ?>images/banners/staff-team.png" class="img-fluid student-admin-icon" />
                        </span>
                        <span>Staff Members</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo ROOT_DIR; ?>student/business-course-purchase.php" class="nav-link">
                        <span class="fa-stack fa-lg d-inline-block d-lg-none d-xl-none">
                            <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                            <img src="<?php echo ROOT_DIR; ?>images/banners/assign-courses.png" class="img-fluid student-admin-icon" />
                        </span>
                        <span>Assign Courses</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo ROOT_DIR; ?>student/business-courses-new.php" class="nav-link">
                        <span class="fa-stack fa-lg d-inline-block d-lg-none d-xl-none">
                            <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                            <img src="<?php echo ROOT_DIR; ?>images/banners/scroll.png" class="img-fluid student-admin-icon" />
                        </span>
                        <span>Manage Courses</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex justify-content-between align-items-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span><span class="fa-stack fa-lg d-inline-block d-lg-none d-xl-none">
                            <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                            <img src="<?php echo ROOT_DIR; ?>images/banners/account.png" class="img-fluid student-admin-icon" />
                        </span>Account </span> <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1 apply-filter-invert-1">
                    </a>
                    <div class="dropdown-menu staff-admin-dropdown p-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>student/business-account.php">Transaction History</a>
                        <!-- <a class="dropdown-item" href="#">Assignment</a>
                        <a class="dropdown-item" href="#">Quiz Report</a> -->
                    </div>
                </li>
                 <li class="nav-item">
                    <a href="<?php echo ROOT_DIR; ?>student/business-courses-report.php" class="nav-link">
                        <span class="fa-stack fa-lg d-inline-block d-lg-none d-xl-none">
                            <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                            <img src="<?php echo ROOT_DIR; ?>images/banners/report-chart.png" class="img-fluid student-admin-icon" />
                        </span>
                        <span>Report</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <div class="student_dashboard align-items-lg-center align-items-xl-center">
                    <li class="nav-item mr-lg-4 mr-xl-4 d-none d-xl-inline-block d-lg-inline-block">
                        <a href="<?php echo ROOT_DIR; ?>student/index.php" class="nav-link btn btn-danger btn-sm px-2 btn-bord-radius pb-2">
                            <!-- <span class="fa-stack fa-lg d-inline-block d-lg-none d-xl-none">
                                <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                                <img src="../images/icons/book.svg" class="img-fluid student-admin-icon">
                            </span> -->
                            <span>Switch to Personal Account</span>
                        </a>
                    </li>
                </div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo ROOT_DIR; ?>images/banners/company-logo.jpg" class="rounded-circle student-profile-navbar marg-right-1"> <span class="d-inline-block d-lg-none d-xl-none">Oluwasegun</span>
                        <!-- <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-navv ml-1 apply-filter-invert-1"> -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg-right student-dropdown-2 staff-admin-dropdown p-0" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item apply-pre-wrap" href="<?php echo ROOT_DIR; ?>student/business-information.php">Edit Company Profile</a>
                        <a class="dropdown-item apply-pre-wrap" href="<?php echo ROOT_DIR; ?>student/business-profile-photo.php">Change Company Photo</a>
                        <!-- <a class="dropdown-item" href="#">Change Password</a> -->
                        <!-- <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>student/settings.php">Settings</a> -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item apply-pre-wrap" href="#">Sign Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="notification-sm-Modal" tabindex="-1" aria-labelledby="notification-sm-ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title make-bold" id="notification-sm-ModalLabel">Notification</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="notification-card-holder">
                <div class="card card-notification-view card-border mb-3">
                    <a href="<?php echo ROOT_DIR; ?>student/academic-issues.php" class="text-dark">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0 make-bold mb-0">Academic Issues <span class="badge badge-primary notify-info notify-d-flex float-right">5</span></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card card-notification-view card-border mb-3">
                    <a href="<?php echo ROOT_DIR; ?>student/assignment-unsubmitted.php" class="text-dark">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0 make-bold mb-0">Assignment Report <span class="badge badge-primary notify-info notify-d-flex float-right">5</span></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card card-notification-view card-border mb-3">
                    <a href="<?php echo ROOT_DIR; ?>student/academic-issues.php" class="text-dark">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0 make-bold mb-0">Technical Issues <span class="badge badge-primary notify-info notify-d-flex float-right">5</span></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card card-notification-view card-border mb-3">
                    <a href="<?php echo ROOT_DIR; ?>student/academic-issues.php" class="text-dark">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0 make-bold mb-0">Finance Issues <span class="badge badge-primary notify-info notify-d-flex float-right">5</span></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card card-notification-view card-border mb-3">
                    <a href="<?php echo ROOT_DIR; ?>student/academic-issues.php" class="text-dark">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0 make-bold mb-0">Student Issues <span class="badge badge-primary notify-info notify-d-flex float-right">5</span></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>