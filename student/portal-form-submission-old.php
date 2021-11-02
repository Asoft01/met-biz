<?php include_once('../components/config.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link href="../css/europa-156337870.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-darkk student-admin-navbar">
        <div class="container">
            <a class="navbar-brand mr-3" href="#"><img src="../images/White-Logo-1.svg" width="120"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto staff-admin-left-navbar">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Courses <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1">
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
                            My Assignments <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1">
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
                            Support <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1">
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
                            Report <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1">
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
                        <li class="nav-item"><a href="" class="nav-link">
                                <span class="fa-stack fa-lg icon-navbar-bg">
                                    <i class="fa fa-circle fa-stack-2x inner-icon"></i>

                                    <img src="../images/icons/bell.svg" class="img-fluid student-admin-icon" />
                                    <span class="badge badge-primary top-notify-info">10</span>
                                </span>
                            </a></li>
                        <li class="nav-item"><a href="" class="nav-link">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x inner-icon"></i>

                                    <img src="../images/icons/supermarket.svg" class="img-fluid student-admin-icon" />
                                    <span class="badge badge-primary top-notify-info">10</span>
                                </span>
                            </a></li>
                        <li class="nav-item"><a href="" class="nav-link">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x inner-icon"></i>

                                    <img src="../images/icons/prize.svg" class="img-fluid student-admin-icon" />
                                    <span class="badge badge-primary top-notify-info">10</span>
                                </span>
                            </a></li>
                        <li class="nav-item"><a href="" class="nav-link">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x inner-icon"></i>

                                    <img src="../images/icons/world.svg" class="img-fluid student-admin-icon" />
                                    <span class="badge badge-primary top-notify-info">en</span>
                                </span>
                            </a></li>
                    </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../images/profile_img.jpg" class="rounded-circle student-profile-navbar">
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg-right student-dropdown staff-admin-dropdown staff-drop-info" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Dashboard</a>
                            <a class="dropdown-item" href="#">Edit Profile</a>
                            <a class="dropdown-item" href="#">Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="student_portal">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-md-3">
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
                <div class="col-md-9 statistics">
                    <span class="profile-completion">Profile Completion</span>
                    <div class="progress profile-progress" style="height: 20px;">

                        <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                    <div class="steps-button">
                        <div class="row mb-4">
                            <!-- <div class="col-4">
                                <button class="btn btn-dark btn-block">Personal Details</button>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-secondary btn-block">Professional Details</button>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-secondary btn-block">Educational Background</button>
                            </div> -->
                            <div class="col-12">
                                <div class="btn-group d-flex w-100 btn-form-group">
                                    <a href="" class="btn btn-dark">Personal Details</a>
                                    <a href="" class="btn btn-secondary middle">Professional Details</a>
                                    <a href="" class="btn btn-secondary">Educational Background</a>
                                </div>
                            </div>

                        </div>

                        <div class="card verification-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <form>
                                            <div class="form-group">

                                                <select class="form-control form-control-lg">
                                                    <option value="" disabled selected hidden>Title</option>
                                                    <option value="">Mr</option>
                                                    <option value="">Mrs</option>
                                                    <option value="">Miss</option>
                                                </select>
                                            </div>
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="Name">
                                            </div>
                                            <div class="form-group">

                                                <input type="date" class="form-control form-control-lg" placeholder="Date of Birth">
                                            </div>
                                            <div class="form-group">

                                                <input type="email" class="form-control form-control-lg" placeholder="Email Address">
                                            </div>
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="Phone Number">
                                            </div>
                                            <div class="form-group">

                                                <select class="form-control form-control-lg">
                                                    <option value="" disabled selected hidden>Martial Status</option>
                                                    <option>Single</option>
                                                    <option>Married</option>

                                                </select>
                                            </div>
                                            <div class="form-group">

                                                <select class="form-control form-control-lg">
                                                    <option value="" disabled selected hidden>Sex</option>
                                                    <option>Male</option>
                                                    <option>Female</option>

                                                </select>
                                            </div>

                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="Current Address">
                                            </div>
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="City">
                                            </div>
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="State">
                                            </div>
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="ZIP Code">
                                            </div>
                                            <div class="float-right">
                                                <div class="form-group">
                                                    <button class="btn btn-dark">Save Changes</button>
                                                </div>

                                                <div class="form-group">
                                                    <button class="btn btn-secondary">Previous</button>
                                                    <button class="btn btn-secondary">Next</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="upload">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>
    <?php include_once('../components/footer.php'); ?>