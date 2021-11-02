<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>
</head>

<body>
    <?php include "../components/main-business-nav.inc.php"; ?>

    <div class="student_portal">
        <div class="container-fluid">
            <h3 class="mb-4 mt-5">Hello, <strong>Sterling Bank of Nigeria</strong></h3>
            <div class="review-sect">
                <div class="row">
                    <!-- The class "d-none d-lg-block d-xl-block" should be added when the count in a card is 0-->
                    <div class="col-lg-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <!-- <h4 class="header-title make-bold mb-0">New Leads</h4> -->
                                <div class="lead-count-sect">
                                    <h2 class="make-bold text-muted flex-grow-1">10</h2>
                                    <small class="letter-space text-uppercase flex-grow-1">Current Enrolled Staff</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <!-- <h4 class="header-title make-bold mb-0">Review Name Change</h4> -->
                                <div class="lead-count-sect">
                                    <h2 class="make-bold text-muted flex-grow-1">50</h2>
                                    <small class="letter-space text-uppercase flex-grow-1">Total courses</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="staff-layout-container">
                <div class="main-dashboard-content">
                    <h1 class="make-bold py-2">Dashboard</h1>
                    <div class="row">
                        <div class="col-lg-3 mb-3">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fa fa-money widget-icon"></i>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mt-0 card-title-heading card-title-heading">Total Amount</h6>
                                    <h3 class="mt-3 mb-3 make-bold">GBP 10,000.00</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-green make-bold mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span>
                                        <small class="text-nowrap text-uppercase letter-space">Since last month</small>
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-3 mb-3">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fa fa-pie-chart widget-icon"></i>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Spent Amount</h6>
                                    <h3 class="mt-3 mb-3 make-bold">GBP 50,000.00</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-red mr-2 make-bold"><i class="fa fa-long-arrow-down"></i> 1.08%</span>
                                        <small class="text-nowrap text-uppercase letter-space">Since last month</small>
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-3 mb-3">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fa fa-hdd-o widget-icon"></i>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Available Balance</h6>
                                    <h3 class="mt-3 mb-3 make-bold">GBP 3,000.00</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-green make-bold mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span>
                                        <small class="text-nowrap text-uppercase letter-space">Since last month</small>
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-3 mb-3">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fa fa-users widget-icon"></i>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Number of Staff</h6>
                                    <h3 class="mt-3 mb-3 make-bold">10</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-red mr-2 make-bold"><i class="fa fa-long-arrow-down"></i> 1.08%</span>
                                        <small class="text-nowrap text-uppercase letter-space">Since last month</small>
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-3 mb-3">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fa fa-graduation-cap widget-icon"></i>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Total Learners</h6>
                                    <h3 class="mt-3 mb-3 make-bold">500</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-red mr-2 make-bold"><i class="fa fa-long-arrow-down"></i> 1.08%</span>
                                        <small class="text-nowrap text-uppercase letter-space">Since last month</small>
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-3 mb-3">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fa fa-circle widget-icon"></i>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Not Started</h6>
                                    <h3 class="mt-3 mb-3 make-bold">36</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-green make-bold mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span>
                                        <small class="text-nowrap text-uppercase letter-space">Since last month</small>
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-3 mb-3">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fa fa-percent widget-icon"></i>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mt-0 card-title-heading">In Progress</h6>
                                    <h3 class="mt-3 mb-3 make-bold">100</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-red mr-2 make-bold"><i class="fa fa-long-arrow-down"></i> 1.08%</span>
                                        <small class="text-nowrap text-uppercase letter-space">Since last month</small>
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-3 mb-3">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fa fa-calendar widget-icon"></i>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Completed</h6>
                                    <h3 class="mt-3 mb-3 make-bold">36,254</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-green make-bold mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span>
                                        <small class="text-nowrap text-uppercase letter-space">Since last month</small>
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-3 mb-3">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fa fa-graduation-cap widget-icon"></i>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Total Quiz Attempt</h6>
                                    <h3 class="mt-3 mb-3 make-bold">454</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-red mr-2 make-bold"><i class="fa fa-long-arrow-down"></i> 1.08%</span>
                                        <small class="text-nowrap text-uppercase letter-space">Since last month</small>
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-3 mb-3">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fa fa-user-times widget-icon"></i>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Total Failed</h6>
                                    <h3 class="mt-3 mb-3 make-bold">43</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-red mr-2 make-bold"><i class="fa fa-long-arrow-down"></i> 1.08%</span>
                                        <small class="text-nowrap text-uppercase letter-space">Since last month</small>
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-3 mb-3">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fa fa-certificate widget-icon"></i>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Total Certificate Download</h6>
                                    <h3 class="mt-3 mb-3 make-bold">43</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-red mr-2 make-bold"><i class="fa fa-long-arrow-down"></i> 1.08%</span>
                                        <small class="text-nowrap text-uppercase letter-space">Since last month</small>
                                    </p>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-view-sect">
                                <div class="header-title make-bold">World Map</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div id="world-map-markers" style="height: 300px"></div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="chart-container">
                                                <canvas id="HorizontalbarChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--End Row-->
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="postponeModal" tabindex="-1" aria-labelledby="postponeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title make-bold" id="postponeModalLabel">Postpone</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Pick a postponement date</label>
                            <input type="date" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger btn-block">Postpone Call Back</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include_once('../components/footer.php'); ?>
