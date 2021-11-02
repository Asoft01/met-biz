<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>User Report</strong></h2>
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
                                                <p class="text-white">No of Enrollment Per Day - 27 April, 2020</p>
                                                <h4 class="text-white line-height-5">100</h4>
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
                                                <p class="text-white">No of Enrollment Per Month - April, 2020</p>
                                                <h4 class="text-white line-height-5">1000</h4>
                                            </div>
                                            <div class="w-circle-icon rounded-circle border border-white">
                                                <i class="fa fa-users text-white"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Programme</th>
                                        <th scope="col">Completed Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <div class="media">
                                                <img src="../images/profile_img.jpg" class="mr-3 img-staff" alt="...">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Mark Ajayi</h5>
                                                    <strong>MSBM-0001</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>mark.ajayi@hello.com</td>
                                        <td>United Kingdom</td>
                                        <td>MA Human Resource Management (HRM)</td>
                                        <td>
                                            <badge class="badge badge-success">Completed</badge>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>
                                            <div class="media">
                                                <img src="../images/placeholder.png" class="mr-3 img-staff" alt="...">
                                                <div class="media-body">
                                                    <h5 class="mt-0">John Smith</h5>
                                                    <strong>MSBM-0002</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>john.smith@hello.com</td>
                                        <td>United Arab Emirates</td>
                                        <td>MA Human Resource Management (HRM)</td>
                                        <td>
                                            <badge class="badge badge-warning">Incomplete</badge>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>
                                            <div class="media">
                                                <img src="../images/placeholder.png" class="mr-3 img-staff" alt="...">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Emmanuel Ojo</h5>
                                                    <strong>MSBM-0003</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>emmanuel.ojo@hello.com</td>
                                        <td>Nigeria</td>
                                        <td>
                                            Professional Certificate in Improving International Marketing Communications</td>
                                        <td>
                                            <badge class="badge badge-warning">Incomplete</badge>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>
                                            <div class="media">
                                                <img src="../images/placeholder.png" class="mr-3 img-staff" alt="...">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Jacob Anayo</h5>
                                                    <strong>MSBM-0004</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>jacob.anayo@hello.com</td>
                                        <td>Nigeria</td>
                                        <td>MA Human Resource Management (HRM)</td>
                                        <td>
                                            <badge class="badge badge-success">Completed</badge>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>
                                            <div class="media">
                                                <img src="../images/placeholder.png" class="mr-3 img-staff" alt="...">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Matthew Momoh</h5>
                                                    <strong>MSBM-0005</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>matthew.momoh@hello.com</td>
                                        <td>South Africa</td>
                                        <td>MA Human Resource Management (HRM)</td>
                                        <td>
                                            <badge class="badge badge-warning">Incomplete</badge>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header">
                                Student Enrollment from 10 Top Countries - 27 April, 2020
                            </div>
                            <div class="card-body">
                                <div class="chart-container">
                                    <canvas id="barChart3"></canvas>
                                </div>
                            </div>
                        </div>
                        <p class="text-center">Daily performance report of MSBM Student Enrolment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('../components/footer.php'); ?>

</body>

</html>