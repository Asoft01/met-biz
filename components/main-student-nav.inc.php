<nav class="navbar navbar-expand-lg navbar-dark student-admin-navbar navigator fixed-top bg-white">
    <div class="container-fluid">
        <a class="navbar-brand mr-3" href="#"><img src="<?php echo ROOT_DIR; ?>images/banners/logo-dark.png" width="120"></a>
            <ul class="navbar-nav ml-auto d-flex flex-row d-inline-flex d-lg-none d-xl-none">
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                        <img src="../images/icons/bell-notify.svg" class="img-fluid student-admin-icon" />
                        <span class="badge badge-primary top-notify-info">50</span>
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> -->
            <li class="nav-item">
                <a href="!#" class="nav-link" data-toggle="modal" data-target="#notification-sm-Modal">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                        <img src="<?php echo ROOT_DIR; ?>images/icons/bell-notify.svg" class="img-fluid student-admin-icon" />
                        <span class="badge badge-primary top-notify-info">50</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo ROOT_DIR; ?>student/wishlist.php" class="nav-link">
                    <span class="fa-stack fa-lg icon-navbar-bg">
                        <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                        <img src="<?php echo ROOT_DIR; ?>images/icons/folder-2.svg" class="img-fluid student-admin-icon" />
                        <span class="badge badge-primary top-notify-info">10</span>
                    </span>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars text-dark fa-lg ml-2"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto staff-admin-left-navbar">
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fa-stack fa-lg d-inline-block d-lg-none d-xl-none">
                            <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                            <img src="../images/icons/book.svg" class="img-fluid student-admin-icon" />
                        </span> My Courses <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1">
                    </a>
                    <div class="dropdown-menu staff-admin-dropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <span class="fa-stack fa-lg d-inline-block d-lg-none d-xl-none">
                            <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                            <img src="<?php echo ROOT_DIR; ?>images/icons/book.svg" class="img-fluid student-admin-icon" />
                        </span>
                        <span>My Courses</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fa-stack fa-lg d-inline-block d-lg-none d-xl-none">
                            <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                            <img src="../images/icons/notebook.svg" class="img-fluid student-admin-icon" />
                        </span> My Assignments <img src="<?php echo ROOT_DIR; ?>images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1 apply-filter-invert-1">
                    </a>
                    <div class="dropdown-menu staff-admin-dropdown p-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fa-stack fa-lg d-inline-block d-lg-none d-xl-none">
                            <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                            <img src="<?php echo ROOT_DIR; ?>images/icons/certificate.svg" class="img-fluid student-admin-icon" />
                        </span> Support <img src="<?php echo ROOT_DIR; ?>images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1 apply-filter-invert-1">
                    </a>
                    <div class="dropdown-menu staff-admin-dropdown p-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fa-stack fa-lg d-inline-block d-lg-none d-xl-none">
                            <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                            <img src="../images/icons/certificate.svg" class="img-fluid student-admin-icon" />
                        </span> Report <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1 apply-filter-invert-1">
                    </a>
                    <div class="dropdown-menu staff-admin-dropdown p-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <div class="student_dashboard align-items-lg-center align-items-xl-center">
                    <!-- <li class="nav-item">
                        <a href="" class="nav-link">
                            <span class="fa-stack fa-lg icon-navbar-bg">
                                <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                                <img src="../images/icons/inbox.svg" class="img-fluid student-admin-icon" />
                                <span class="badge badge-primary top-notify-info">10</span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                                <img src="../images/icons/pound-sterling.svg" class="img-fluid student-admin-icon" />
                            </span>
                        </a>
                    </li> -->
                    <!-- <li class="nav-item dropdown mr-lg-4 mr-xl-4">
                        <a class="nav-link dropdown-toggle d-flex justify-content-between align-items-lg-center align-items-xl-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>
                                <span class="fa-stack fa-lg d-inline-block d-lg-none d-xl-none">
                                    <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                                    <img src="../images/icons/handshake.svg" class="img-fluid student-admin-icon" />
                                </span>
                                <span class="text-danger">Business Account</span>
                            </span>
                            <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1 apply-filter-invert-1">
                        </a>
                        <div class="dropdown-menu staff-admin-dropdown position-left-none p-0" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>student/business-courses-new.php">Courses</a>
                            <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>student/business-staff-members.php">Staff Members</a>
                            <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>student/business-courses-report.php">Report</a>
                            <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>student/business-account.php">Account</a>
                        </div>
                    </li> -->
                        <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fa-stack fa-lg d-inline-block d-lg-none d-xl-none">
                                <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                                <img src="../images/icons/certificate.svg" class="img-fluid student-admin-icon" />
                            </span> Support <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1 apply-filter-invert-1">
                        </a>
                        <div class="dropdown-menu staff-admin-dropdown p-0" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> -->
                   <li class="nav-item mr-lg-4 mr-xl-4 order-switch-sm">
                        <a href="<?php echo ROOT_DIR; ?>student/business-dashboard.php" class="nav-link btn btn-danger btn-sm px-2 btn-bord-radius pb-2">
                            <span>Switch to Business Account</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown d-none d-lg-block d-xl-block">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                                <img src="<?php echo ROOT_DIR; ?>images/icons/bell-notify.svg" class="img-fluid student-admin-icon" />
                                <span class="badge badge-primary top-notify-info">50</span>
                            </span>
                        </a>
                        <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Academics Issues</a>
                            <a class="dropdown-item" href="#">Technical Issues</a>
                            <a class="dropdown-item" href="#">Student Issues</a>
                            <a class="dropdown-item" href="#">Finance Issues</a>
                        </div>
                    </li>
                    <!-- <li class="nav-item d-none d-lg-block d-xl-block">
                        <a href="<?php echo ROOT_DIR; ?>student/notification.php" class="nav-link">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                                <img src="../images/icons/bell-notify.svg" class="img-fluid student-admin-icon" />
                                <span class="badge badge-primary top-notify-info">50</span>
                            </span>
                        </a>
                    </li> -->
                    <li class="nav-item d-none d-lg-block d-xl-block">
                        <a href="<?php echo ROOT_DIR; ?>student/wishlist.php" class="nav-link">
                            <span class="fa-stack fa-lg icon-navbar-bg">
                                <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                                <img src="<?php echo ROOT_DIR; ?>images/icons/id-card-icon.png" class="img-fluid student-admin-icon" />
                                <!-- <span class="badge badge-primary top-notify-info">10</span> -->
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                                <img src="<?php echo ROOT_DIR; ?>images/icons/certificate.svg" class="img-fluid student-admin-icon" />
                            </span>
                            <span class="d-inline-block d-lg-none d-xl-none">Download Certificate</span>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="" class="nav-link">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                                <img src="../images/icons/gear.svg" class="img-fluid student-admin-icon" />
                            </span>
                            <span class="d-inline-block d-lg-none d-xl-none">Download Certificate</span>
                        </a>
                    </li> -->
                </div>
                <li class="nav-item dropdown profile-nav-tab">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo ROOT_DIR; ?>images/profile_img.jpg" class="rounded-circle student-profile-navbar marg-right-1"> <span class="d-inline-block d-lg-none d-xl-none">Oluwasegun</span>
                        <!-- <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-navv ml-1 apply-filter-invert-1"> -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg-right student-dropdown-2 staff-admin-dropdown staff-drop-info p-0" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Edit Profile</a>
                        <a class="dropdown-item" href="#">Change Photo</a>
                        <a class="dropdown-item" href="#">Change Password</a>
                        <!-- <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>student/settings.php">Settings</a> -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Sign Out</a>
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