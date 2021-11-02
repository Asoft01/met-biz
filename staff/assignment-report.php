<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Assignment Report</strong></h2>
                    <h5 class="text-muted">Choose A Category</h5>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <div class="assignment-report-sect">
                            <div class="light-card">
                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <a href="<?php echo ROOT_DIR; ?>staff/assignment-report-review.php">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <h6><strong>Advanced Professional Certificate</strong></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <a href="<?php echo ROOT_DIR; ?>staff/assignment-report-review.php">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <h6><strong>Postgraduate Diploma</strong></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <a href="<?php echo ROOT_DIR; ?>staff/assignment-report-review.php">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <h6><strong>Postgraduate Programme</strong></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <a href="<?php echo ROOT_DIR; ?>staff/assignment-report-review.php">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <h6><strong>Professional Course</strong></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <a href="<?php echo ROOT_DIR; ?>staff/assignment-report-review.php">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <h6><strong>SEMP Classroom</strong></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <a href="<?php echo ROOT_DIR; ?>staff/assignment-report-review.php">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <h6><strong>SEMP Online</strong></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <a href="<?php echo ROOT_DIR; ?>staff/assignment-report-review.php">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <h6><strong>Undergraduate Programme</strong></h6>
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
    </div>

    <?php include_once('../components/footer.php'); ?>