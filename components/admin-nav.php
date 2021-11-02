<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-darkk student-admin-navbar navigator">
        <div class="container-fluid">
            <a class="navbar-brand mr-3" href="#"><img src="../images/White-Logo-1.svg" width="120"></a>
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
                            <img src="../images/icons/bell-notify.svg" class="img-fluid student-admin-icon" />
                            <span class="badge badge-primary top-notify-info">50</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo ROOT_DIR; ?>student/wishlist.php" class="nav-link">
                        <span class="fa-stack fa-lg icon-navbar-bg">
                            <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                            <img src="../images/icons/folder-2.svg" class="img-fluid student-admin-icon" />
                            <span class="badge badge-primary top-notify-info">10</span>
                        </span>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
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
                                    <img src="../images/icons/book.svg" class="img-fluid student-admin-icon" />
                                </span>
                                <span>My Courses</span>
                            </a>
                        </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fa-stack fa-lg d-inline-block d-lg-none d-xl-none">
                                <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                                <img src="../images/icons/notebook.svg" class="img-fluid student-admin-icon" />
                            </span> My Assignments <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1">
                        </a>
                        <div class="dropdown-menu staff-admin-dropdown" aria-labelledby="navbarDropdown">
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
                            </span> Support <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1">
                        </a>
                        <div class="dropdown-menu staff-admin-dropdown" aria-labelledby="navbarDropdown">
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
                            </span> Report <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1">
                        </a>
                        <div class="dropdown-menu staff-admin-dropdown" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <div class="student_dashboard">
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
                         <li class="nav-item dropdown d-none d-lg-block d-xl-block">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                                    <img src="../images/icons/bell-notify.svg" class="img-fluid student-admin-icon" />
                                    <span class="badge badge-primary top-notify-info">50</span>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Academics Issues <span class="badge badge-primary notify-info notify-d-flex">5</span></a>
                                <a class="dropdown-item" href="#">Technical Issues <span class="badge badge-primary notify-info notify-d-flex">10</span></a>
                                <a class="dropdown-item" href="#">Student Issues  <span class="badge badge-primary notify-info notify-d-flex">10</span></a>
                                <a class="dropdown-item" href="#">Finance Issues  <span class="badge badge-primary notify-info notify-d-flex">10</span></a>
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
                                    <img src="../images/icons/folder-2.svg" class="img-fluid student-admin-icon" />
                                    <span class="badge badge-primary top-notify-info">10</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                           <a href="" class="nav-link">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                                    <img src="../images/icons/certificate.svg" class="img-fluid student-admin-icon" />
                                </span>
                                <span class="d-inline-block d-lg-none d-xl-none">Download Certificate</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x inner-icon"></i>
                                    <img src="../images/icons/gear.svg" class="img-fluid student-admin-icon" />
                                </span>
                                <span class="d-inline-block d-lg-none d-xl-none">Download Certificate</span>
                            </a>
                        </li>
                    </div>
                    <li class="nav-item dropdown profile-nav-tab">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../images/profile_img.jpg" class="rounded-circle student-profile-navbar marg-right-1"> <span class="d-inline-block d-lg-none d-xl-none">Oluwasegun</span> <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-navv ml-1">
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg-right student-dropdown staff-admin-dropdown staff-drop-info" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Dashboard</a>
                            <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>student/wishlist.php">Saved Courses</a>
                            <a class="dropdown-item" href="#">Edit Profile</a>
                            <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>student/settings.php">Settings</a>
                            <a class="dropdown-item" href="#">Log Out</a>
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