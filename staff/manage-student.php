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
                    <div class="jumbotron course-admin-info">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card mb-3">
                                        <div class="row no-gutters">
                                            <!-- <div class="col-md-4">
                                                <img src="<?php echo ROOT_DIR; ?>images/banners/International-PGD-in-Digital-Marketing-min.jpg" class="card-img" alt="...">
                                            </div> -->
                                            <div class="col-md-12">
                                                <div class="card-body">
                                                    <h5 class="card-title">Professional Certificate in Business Ethics and Responsibility</h5>

                                                    <p class="card-text"><small class="text-muted">CREATED: 12 JAN 2020</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-scrollable" width="100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Enrollment Date</th>
                                    <th scope="col" width="50%">Progress</th>
                                    <th scope="col">Last Login</th>
                                    <th scope="col">Assignment Submitted</th>
                                    <th scope="col">Certificate Status</th>
                                    <th scope="col">Edit Client</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>John Chukwuemeka</td>
                                    <td>
                                        <ul class="student-enrol-date">
                                            <li class="enrol-time">10:45am</li>
                                            <li class="enrol-date">4 JAN 2019</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-dark" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="student-enrol-date">
                                            <li class="enrol-time">10:45am</li>
                                            <li class="enrol-date">20 JUN 2019</li>
                                        </ul>
                                    </td>
                                    <td><span class="badge badge-success">Submitted</span></td>
                                    <td><span class="badge badge-success">Ready</span></td>
                                    <td><a href=""><i class="fa fa-edit fa-lg"></i></a></td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Ojo Emmanuel</td>
                                    <td>
                                        <ul class="student-enrol-date">
                                            <li class="enrol-time">10:45am</li>
                                            <li class="enrol-date">4 JAN 2019</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-dark" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="student-enrol-date">
                                            <li class="enrol-time">10:45am</li>
                                            <li class="enrol-date">20 JUN 2019</li>
                                        </ul>
                                    </td>
                                    <td><span class="badge badge-warning">Unsubmitted</span></td>
                                    <td><span class="badge badge-warning">Not Ready</span></td>
                                    <td><a href=""><i class="fa fa-edit fa-lg"></i></a></td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Johnson Akpan</td>
                                    <td>
                                        <ul class="student-enrol-date">
                                            <li class="enrol-time">10:45am</li>
                                            <li class="enrol-date">4 JAN 2019</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-dark" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="student-enrol-date">
                                            <li class="enrol-time">10:45am</li>
                                            <li class="enrol-date">20 JUN 2019</li>
                                        </ul>
                                    </td>
                                    <td><span class="badge badge-success">Submitted</span></td>
                                    <td><span class="badge badge-warning">Not Ready</span></td>
                                    <td><a href=""><i class="fa fa-edit fa-lg"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('../components/footer.php'); ?>