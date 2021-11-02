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
                <div class="col-lg-3 sidebar-admin">
                    <div class="sidebar-admin-cont">
                        <div class="accordion" id="accordion-sidebar">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <a href="admin.php" class="btn btn-block btn-sidebar">
                                            Dashboard <i class="fa fa-chevron-right float-right pointr"></i>
                                        </a>
                                    </h2>
                                </div>

                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <a href="" class="btn btn-block btn-sidebar">
                                            Students <i class="fa fa-chevron-right float-right pointr"></i>
                                        </a>
                                    </h2>
                                </div>


                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <a href="" class="btn btn-sidebar btn-block">
                                            Admins <i class="fa fa-chevron-right float-right pointr"></i>
                                        </a>
                                    </h2>
                                </div>

                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <a href="admin-student.php" class="btn btn-sidebar btn-block">
                                            Admin/Student <i class="fa fa-chevron-right float-right pointr"></i>
                                        </a>
                                    </h2>
                                </div>

                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <a href="companies.php" class="btn btn-sidebar btn-block">
                                            Companies <i class="fa fa-chevron-right float-right pointr"></i>
                                        </a>
                                    </h2>
                                </div>

                            </div>
                            <!-- <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <a href="student-profile.php" class="btn btn-sidebar btn-block">
                                            Student Profile <i class="fa fa-chevron-right float-right pointr"></i>
                                        </a>
                                    </h2>
                                </div>

                            </div> -->
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h2 class="mb-0">
                                        <a href="branch-performance.php" class="btn btn-sidebar btn-block">
                                            Branch Performance <i class="fa fa-chevron-right float-right pointr"></i>
                                        </a>
                                    </h2>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-9 statistics">

                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl-6 admin-stat">
                            <div class="card gradient-bloody">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <p class="text-white">Students</p>
                                            <h4 class="text-white line-height-5">845</h4>
                                        </div>
                                        <div class="w-circle-icon rounded-circle border border-white">
                                            <i class="fa fa-graduation-cap text-white"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 admin-stat">
                            <div class="card gradient-scooter">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <p class="text-white">Companies</p>
                                            <h4 class="text-white line-height-5">50</h4>
                                        </div>
                                        <div class="w-circle-icon rounded-circle border border-white">
                                            <i class="fa fa-building text-white"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 admin-stat">
                            <div class="card gradient-blooker">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <p class="text-white">Study Centers</p>
                                            <h4 class="text-white line-height-5">7</h4>
                                        </div>
                                        <div class="w-circle-icon rounded-circle border border-white">
                                            <i class="fa fa-users text-white"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 admin-stat">
                            <div class="card gradient-ohhappiness">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <p class="text-white">Student Dropout</p>
                                            <h4 class="text-white line-height-5">12</h4>
                                        </div>
                                        <div class="w-circle-icon rounded-circle border border-white">
                                            <i class="fa fa-pie-chart text-white"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    How you heard about us

                                </div>
                                <div class="card-body">
                                    <canvas id="dashboard-chart-2"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    Popular Courses

                                </div>
                                <div class="card-body">
                                    <canvas id="dashboard-chart-3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Row-->

                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    Course Category

                                </div>
                                <div class="card-body">
                                    <canvas id="myChart2"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    Positions

                                </div>
                                <div class="card-body">
                                    <canvas id="ceoChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    Study Centers(Student Count)

                                </div>
                                <div class="card-body">
                                    <div class="chart-container">
                                        <canvas id="myChart3"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include_once('../components/footer.php'); ?>