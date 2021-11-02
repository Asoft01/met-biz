<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Student Report</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <div class="row">
                            <div class="col-12 col-lg-6 col-xl-6 admin-stat">
                                <div class="card gradient-bloody">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <p class="text-white">No of Student Top-up</p>
                                                <h4 class="text-white line-height-5">45</h4>
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
                                                <p class="text-white">Finished Level 7</p>
                                                <h4 class="text-white line-height-5">30</h4>
                                            </div>
                                            <div class="w-circle-icon rounded-circle border border-white">
                                                <i class="fa fa-building text-white"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mt-3">
                            <h4>Students Information</h4>
                            <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Programme Enrolled</th>
                                        <th scope="col">Assignment 1</th>
                                        <th scope="col">Assignment 2</th>

                                        <th scope="col">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark Ajayi</td>
                                        <td>MBA</td>
                                        <td>
                                            <badge class="badge badge-success">Submitted</badge>
                                        </td>

                                        <td>
                                            <badge class="badge badge-warning">Unsubmitted</badge>
                                        </td>
                                        <td><a href="<?php echo ROOT_DIR; ?>staff/student-profile.php" class="btn btn-danger btn-block btn-sm">View More</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark Ajayi</td>
                                        <td>PGD in Business Management</td>
                                        <td>
                                            <badge class="badge badge-success">Submitted</badge>
                                        </td>

                                        <td>
                                            <badge class="badge badge-warning">Unsubmitted</badge>
                                        </td>
                                        <td><a href="<?php echo ROOT_DIR; ?>staff/student-profile.php" class="btn btn-danger btn-block btn-sm">View More</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>John Doe</td>
                                        <td>SEMP in Public Administration</td>

                                        <td>
                                            <badge class="badge badge-warning">Unsubmitted</badge>
                                        </td>
                                        <td>
                                            <badge class="badge badge-warning">Unsubmitted</badge>
                                        </td>
                                        <td><a href="<?php echo ROOT_DIR; ?>staff/student-profile.php" class="btn btn-danger btn-block btn-sm">View More</a></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">4</th>
                                        <td>John Doe</td>
                                        <td>SEMP in Public Administration</td>

                                        <td>
                                            <badge class="badge badge-success">Submitted</badge>
                                        </td>
                                        <td>
                                            <badge class="badge badge-warning">Unsubmitted</badge>
                                        </td>
                                        <td><a href="<?php echo ROOT_DIR; ?>staff/student-profile.php" class="btn btn-danger btn-block btn-sm">View More</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>John Doe</td>
                                        <td>SEMP in Digital Marketing</td>

                                        <td>
                                            <badge class="badge badge-warning">Unsubmitted</badge>
                                        </td>
                                        <td>
                                            <badge class="badge badge-warning">Unsubmitted</badge>
                                        </td>
                                        <td><a href="<?php echo ROOT_DIR; ?>staff/student-profile.php" class="btn btn-danger btn-block btn-sm">View More</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>John Doe</td>
                                        <td>SEMP in Business Management</td>

                                        <td>
                                            <badge class="badge badge-success">Submitted</badge>
                                        </td>
                                        <td>
                                            <badge class="badge badge-warning">Unsubmitted</badge>
                                        </td>
                                        <td><a href="<?php echo ROOT_DIR; ?>staff/student-profile.php" class="btn btn-danger btn-block btn-sm">View More</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('../components/footer.php'); ?>

</body>

</html>