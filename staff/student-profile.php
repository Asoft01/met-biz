<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Student Information</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="card text-center stat-card-perform">
                                    <img src="<?php echo ROOT_DIR; ?>images/44.jpg" class="img-fluid rounded-circle staff-perf-img" />
                                    <div class="card-body">
                                        <h5 class="card-title">Jon Doe</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Managing Director in Marketing</h6>
                                        <p class="card-text">jon.doe@dangote.com</p>
                                        <a href="#" class="card-link">Dangote Group</a>
                                        <a href="#" class="card-link">Ghana</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="card">
                                    <div class="card-header">Performance</div>
                                    <div class="card-body">
                                        <canvas id="dashboard-chart-5"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12 mt-4">
                                <h4>Programme Overview</h4>
                                <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Programme Enrolled</th>
                                            <th scope="col">Start Date</th>
                                            <th scope="col">End Date</th>
                                            <th scope="col">Test Score</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SEMP in Marketing</td>
                                            <td>23 Jan, 2019</td>
                                            <td>23 Dec, 2019</td>
                                            <td>80%</td>
                                            <td><span class="badge badge-pill badge-success">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td>MBA in Information Technology</td>
                                            <td>03 Jan, 2020 </td>
                                            <td>05 Mar, 2020</td>
                                            <td>85%</td>
                                            <td><span class="badge badge-pill badge-info">In Progress</span></td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                            <div class="col-lg-12 col-12 mt-4">
                                <h4>Login Activites</h4>
                                <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Login Time</th>
                                            <th scope="col">Logout Time</th>
                                            <th scope="col">Duration</th>
                                            <th scope="col">Device</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>05:00pm 03 Feb, 2019</td>
                                            <td>08:00pm 03 Feb, 2019</td>
                                            <td>3 hours</td>
                                            <td>IPad</td>
                                        </tr>
                                        <tr>
                                            <td>05:00pm 03 Feb, 2019</td>
                                            <td>08:00pm 03 Feb, 2019</td>
                                            <td>3 hours</td>
                                            <td>IPad</td>
                                        </tr>
                                    </tbody>
                                </table>
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