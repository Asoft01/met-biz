<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <h5 class="mb-3">Welcome <span class="name-bold">Jane Doe Smith</span></h5>
                    <div class="card student-card-spacing">
                        <h5 class="card-header card-student-title">Statistics</h5>
                        <div class="card-body stat_card_body">
                            <div class="row staff-row-content">
                                <div class='col-md-3'>
                                    <div class="media">
                                        <img src="../images/icons/super_user.svg" class="mr-3 img-fluid stat" alt="msbm">
                                        <div class="media-body">
                                            <h5 class="mt-0">1</h5>
                                            <p>New Enquiry</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class="media">
                                        <img src="../images/icons/wallet.svg" class="mr-3 img-fluid stat" alt="msbm">
                                        <div class="media-body">
                                            <h5 class="mt-0">7</h5>
                                            <p>Paid Student</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class="media">
                                        <img src="../images/icons/assignment.svg" class="mr-3 img-fluid stat" alt="msbm">
                                        <div class="media-body">
                                            <h5 class="mt-0">0</h5>
                                            <p>Form Submitted</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class="media">
                                        <img src="../images/icons/accept.svg" class="mr-3 img-fluid stat" alt="msbm">
                                        <div class="media-body">
                                            <h5 class="mt-0">0</h5>
                                            <p>Admission Granted</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class="media">
                                        <img src="../images/icons/hourglass.svg" class="mr-3 img-fluid stat" alt="msbm">
                                        <div class="media-body">
                                            <h5 class="mt-0">1</h5>
                                            <p>Awaiting Application Form</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class="media">
                                        <img src="../images/icons/music-and-multimedia.svg" class="mr-3 img-fluid stat" alt="msbm">
                                        <div class="media-body">
                                            <h5 class="mt-0">7</h5>
                                            <p>Active Follow up</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class="media">
                                        <img src="../images/icons/school.svg" class="mr-3 img-fluid stat" alt="msbm">
                                        <div class="media-body">
                                            <h5 class="mt-0">0</h5>
                                            <p>Current Student</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class="media">
                                        <img src="../images/icons/calendar.svg" class="mr-3 img-fluid stat" alt="msbm">
                                        <div class="media-body">
                                            <h5 class="mt-0">0</h5>
                                            <p>Total made: This month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class="media">
                                        <img src="../images/icons/interest.svg" class="mr-3 img-fluid stat" alt="msbm">
                                        <div class="media-body">
                                            <h5 class="mt-0">0</h5>
                                            <p>Interest in Future</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class="media">
                                        <img src="../images/icons/paper.svg" class="mr-3 img-fluid stat" alt="msbm">
                                        <div class="media-body">
                                            <h5 class="mt-0">0</h5>
                                            <p>Total not interested</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <h6>Remaining Days <span class="name-bold">365</span></h5>
                                </div>
                                <div class="col-md-6">
                                    <h6>Last Active Days <span class="name-bold">20 Days ago</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card student-card-spacing">

                        <h5 class="card-header card-student-title">General Staff</h5>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <a href="">
                                        <div class="card dashboard-action-links">
                                            <div class="lecture course-layout">
                                                <img src="../images/icons/value.svg" class="img-fluid img-course" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-dark btn-block">All Clients</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="">
                                        <div class="card dashboard-action-links">
                                            <div class="assignment course-layout">
                                                <img src="../images/icons/document.svg" class="img-fluid img-course" alt="...">
                                            </div>
                                            <div class="card-body">


                                                <a href="#" class="btn btn-dark btn-block">Edit Client</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="">
                                        <div class="card dashboard-action-links">
                                            <div class="download course-layout">
                                                <img src="../images/icons/search.svg" class="img-fluid img-course" alt="...">
                                            </div>
                                            <div class="card-body">


                                                <a href="#" class="btn btn-dark btn-block">Advance Filter</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card student-card-spacing">

                        <h5 class="card-header card-student-title">Supervisors</h5>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <a href="">
                                        <div class="card dashboard-action-links">
                                            <div class="lecture course-layout">
                                                <img src="../images/icons/server.svg" class="img-fluid img-course" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-dark btn-block">Update Records</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="">
                                        <div class="card dashboard-action-links">
                                            <div class="assignment course-layout">
                                                <img src="../images/icons/money1.svg" class="img-fluid img-course" alt="...">
                                            </div>
                                            <div class="card-body">


                                                <a href="#" class="btn btn-dark btn-block">Update Finance</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="">
                                        <div class="card dashboard-action-links">
                                            <div class="download course-layout">
                                                <img src="../images/icons/files-and-folders1.svg" class="img-fluid img-course" alt="...">
                                            </div>
                                            <div class="card-body">


                                                <a href="#" class="btn btn-dark btn-block">Submit Documents</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card student-card-spacing">

                        <h5 class="card-header card-student-title">Super Admin</h5>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <a href="">
                                        <div class="card dashboard-action-links">
                                            <div class="lecture course-layout">
                                                <img src="../images/icons/brain1.svg" class="img-fluid img-course" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-dark btn-block">Add/Edit/Delete Staff</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="">
                                        <div class="card dashboard-action-links">
                                            <div class="assignment course-layout">
                                                <img src="../images/icons/mail1.svg" class="img-fluid img-course" alt="...">
                                            </div>
                                            <div class="card-body">


                                                <a href="#" class="btn btn-dark btn-block">Email Automation</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="">
                                        <div class="card dashboard-action-links">
                                            <div class="download course-layout">
                                                <img src="../images/icons/mail2.svg" class="img-fluid img-course" alt="...">
                                            </div>
                                            <div class="card-body">


                                                <a href="#" class="btn btn-dark btn-block">Bulk Email</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card student-card-spacing">

                        <h5 class="card-header card-student-title">Academics</h5>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <a href="">
                                        <div class="card dashboard-action-links">
                                            <div class="lecture course-layout">
                                                <img src="../images/icons/top.svg" class="img-fluid img-course" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-dark btn-block">Awaiting Top Up</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="">
                                        <div class="card dashboard-action-links">
                                            <div class="assignment course-layout">
                                                <img src="../images/icons/browser.svg" class="img-fluid img-course" alt="...">
                                            </div>
                                            <div class="card-body">


                                                <a href="#" class="btn btn-dark btn-block">Completed Top Up</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="">
                                        <div class="card dashboard-action-links">
                                            <div class="download course-layout">
                                                <img src="../images/icons/all_student.svg" class="img-fluid img-course" alt="...">
                                            </div>
                                            <div class="card-body">


                                                <a href="#" class="btn btn-dark btn-block">All Students</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="">
                                        <div class="card dashboard-action-links">
                                            <div class="new-assign course-layout">
                                                <img src="../images/icons/assignment.svg" class="img-fluid img-course" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <a href="#" class="btn btn-dark btn-block">New Assignment</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="">
                                        <div class="card dashboard-action-links">
                                            <div class="all-assign course-layout">
                                                <img src="../images/icons/test.svg" class="img-fluid img-course" alt="...">
                                            </div>
                                            <div class="card-body">


                                                <a href="#" class="btn btn-dark btn-block">All Assignment</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="">
                                        <div class="card dashboard-action-links">
                                            <div class="progresss course-layout">
                                                <img src="../images/icons/progresss.svg" class="img-fluid img-course" alt="...">
                                            </div>
                                            <div class="card-body">


                                                <a href="#" class="btn btn-dark btn-block">In Progress</a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <?php include_once('../components/footer.php'); ?>