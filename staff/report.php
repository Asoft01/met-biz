<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Report Dashboard</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
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

</body>

</html>