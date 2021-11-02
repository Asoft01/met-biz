<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container-fluid">
            <h3 class="mb-4">Hello, <strong>Jonathan</strong></h3>
            <div class="review-sect">
                <div class="row">
                    <!-- The class "d-none d-lg-block d-xl-block" should be added when the count in a card is 0-->
                    <div class="col-lg-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title make-bold mb-0">New Leads</h4>
                                <div class="lead-count-sect">
                                    <h2 class="make-bold text-muted mb-0">200</h2>
                                    <small class="letter-space text-uppercase flex-grow-1">Number of New Leads</small>
                                    <a href="#" class="btn btn-success"> Review and Approve Them <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title make-bold mb-0">Review Name Change</h4>
                                <div class="lead-count-sect">
                                    <h2 class="make-bold text-muted">150</h2>
                                    <small class="letter-space text-uppercase flex-grow-1">Number of Review Name Change</small>
                                    <a href="<?php echo ROOT_DIR; ?>staff/review-name-change.php" class="btn btn-success"> Review and Approve Them <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="call-me-sect mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3 make-bold">Call Me Back</h4>
                        <p><b>4</b> out of <b>15</b></p>
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-hover mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6 class="font-14 my-1">Alessandro Blaine Wolfeschlegelsteinhausenbergerdorff</h6>
                                            <span class="text-muted font-13">Due Today</span>
                                        </td>
                                        <td>
                                             <h6 class="font-14 my-1">080954535667890</h6>
                                        </td>
                                        <td class="d-none d-lg-table-cell  d-xl-table-cell">
                                            <span class="text-muted font-13">Status</span> <br>
                                            <span class="badge badge-warning-lighten">Awaiting filled form and document</span>
                                        </td>
                                        <td class="max-wid-table d-none d-lg-table-cell  d-xl-table-cell">
                                            <span class="text-muted font-13">Professional Certificate in Intelligent Business Technologies</span>
                                            <!-- <h5 class="font-14 mt-1 font-weight-normal">Logan R. Cohn</h5> -->
                                        </td>
                                        <td class="table-action d-flex">
                                            <a href="#" class="btn btn-success mx-1"> Done</a>
                                            <button class="btn btn-info mx-1" data-toggle="modal" data-target="#postponeModal"> Postpone</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="font-14 my-1">Alessandro Wolfeschlegelsteinhausenbergerdorff Snr</h6>
                                            <span class="text-muted font-13">Overdue</span>
                                        </td>
                                        <td>
                                             <h6 class="font-14 my-1">+234,0809,000,6578</h6>
                                        </td>
                                        <td class="d-none d-lg-table-cell  d-xl-table-cell">
                                            <span class="text-muted font-13">Status</span> <br>
                                            <span class="badge badge-danger-lighten">Attended Programme</span>
                                        </td>
                                        <td class="max-wid-table d-none d-lg-table-cell  d-xl-table-cell">
                                            <span class="text-muted font-13">Professional Certificate in Effective Information Research for Zero Plagiarism</span>
                                            <!-- <h5 class="font-14 mt-1 font-weight-normal">Jerry F. Powell</h5> -->
                                        </td>
                                        <td class="table-action d-flex">
                                            <a href="#" class="btn btn-success mx-1"> Done</a>
                                            <button class="btn btn-info mx-1" data-toggle="modal" data-target="#postponeModal"> Postpone</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="font-14 my-1">Ugochukwu Okechukwu Uzochukwu Egochukwu</h6>
                                            <span class="text-muted font-13">Overdue</span>
                                        </td>
                                        <td>
                                             <h6 class="font-14 my-1">090976453542333389815263789</h6>
                                        </td>
                                        <td class="d-none d-lg-table-cell  d-xl-table-cell">
                                            <span class="text-muted font-13">Status</span> <br>
                                            <span class="badge badge-success-lighten">Form Filled</span>
                                        </td>
                                        <td class="max-wid-table d-none d-lg-table-cell  d-xl-table-cell">
                                            <span class="text-muted font-13">Professional Certificate in Financial Instruments Trading; Concepts and Analysis</span>
                                            <!-- <h5 class="font-14 mt-1 font-weight-normal">Scot M. Smith</h5> -->
                                        </td>
                                         <td class="table-action d-flex">
                                            <a href="#" class="btn btn-success mx-1"> Done</a>
                                            <button class="btn btn-info mx-1" data-toggle="modal" data-target="#postponeModal"> Postpone</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h6 class="font-14 my-1">Hubert Blaine Wolfeschlegelsteinhausenbergerdorff</h6>
                                            <span class="text-muted font-13">Overdue</span>
                                        </td>
                                        <td>
                                             <h6 class="font-14 my-1">0809,5453,566789,0765437</h6>
                                        </td>
                                        <td class="d-none d-lg-table-cell  d-xl-table-cell">
                                            <span class="text-muted font-13">Status</span> <br>
                                            <span class="badge badge-warning-lighten">Current Student</span>
                                        </td>
                                        <td class="max-wid-table d-none d-lg-table-cell  d-xl-table-cell">
                                            <span class="text-muted font-13">Professional Certificate in Improving Performance Management through Quad Model</span>
                                            <!-- <h5 class="font-14 mt-1 font-weight-normal">John P. Ritter</h5> -->
                                        </td>
                                        <td class="table-action d-flex">
                                            <a href="#" class="btn btn-success mx-1"> Done</a>
                                            <button class="btn btn-info mx-1" data-toggle="modal" data-target="#postponeModal"> Postpone</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div>
            <div class="staff-layout-container">
                   <div class="main-dashboard-content">
                        <h1 class="make-bold py-2">Dashboard</h1>
                        <div class="row">
                            <div class="col-lg-3 mb-3">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <i class="fa fa-users widget-icon"></i>
                                        </div>
                                        <h6 class="text-muted font-weight-normal mt-0 card-title-heading card-title-heading">New Enquiry</h6>
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
                                            <i class="fa fa-pie-chart widget-icon"></i>
                                        </div>
                                        <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Paid Student</h6>
                                        <h3 class="mt-3 mb-3 make-bold">5,543</h3>
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
                                        <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Form Submitted</h6>
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
                                            <i class="fa fa-thumbs-up widget-icon"></i>
                                        </div>
                                        <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Admission Granted</h6>
                                        <h3 class="mt-3 mb-3 make-bold">5,543</h3>
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
                                            <i class="fa fa-cube widget-icon"></i>
                                        </div>
                                        <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Awaiting Application Form</h6>
                                        <h3 class="mt-3 mb-3 make-bold">5,543</h3>
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
                                            <i class="fa fa-line-chart widget-icon"></i>
                                        </div>
                                        <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Active Follow up</h6>
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
                                            <i class="fa fa-user widget-icon"></i>
                                        </div>
                                        <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Current Student</h6>
                                        <h3 class="mt-3 mb-3 make-bold">5,543</h3>
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
                                        <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Total made: This month</h6>
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
                                        <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Interest in Future</h6>
                                        <h3 class="mt-3 mb-3 make-bold">5,543</h3>
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
                                        <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Total not interested</h6>
                                        <h3 class="mt-3 mb-3 make-bold">5,543</h3>
                                        <p class="mb-0 text-muted">
                                            <span class="text-red mr-2 make-bold"><i class="fa fa-long-arrow-down"></i> 1.08%</span>
                                            <small class="text-nowrap text-uppercase letter-space">Since last month</small>
                                        </p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 mb-3">
                                <div class="card card-view-sect">
                                    <h5 class="header-title make-bold">
                                        How you heard about us
                                    </h5>
                                    <div class="card-body">
                                        <canvas id="dashboard-chart-2"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mb-3">
                                <div class="card card-view-sect">
                                    <div class="header-title make-bold">
                                        Popular Courses
                                    </div>
                                    <div class="card-body">
                                        <canvas id="dashboard-chart-3"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-7 mb-3">
                                <div class="card card-view-sect">
                                    <h5 class="header-title make-bold">
                                        Countries
                                    </h5>
                                    <div class="chart-container">
                                        <canvas id="myChart3"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 mb-3">
                                <div class="card card-view-sect">
                                    <div class="header-title make-bold">
                                        Courses Category
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart2"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-5 mb-3">
                                <div class="row">
                                       <div class="col-lg-12 mb-3">
                                            <div class="card widget-flat">
                                                <div class="card-body">
                                                    <div class="float-right">
                                                        <i class="fa fa-line-chart widget-icon"></i>
                                                    </div>
                                                    <h5 class="font-weight-normal mt-0 card-title-heading card-title-heading text-muted">Total Students</h5>
                                                    <h3 class="mt-3 mb-3 make-bold">36,254</h3>
                                                    <p class="mb-0 text-muted">
                                                        <span class="text-green make-bold mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span>
                                                        <small class="text-nowrap text-uppercase letter-space">Since last month</small>
                                                    </p>
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div> <!-- end col-->

                                        <div class="col-lg-12 mb-3">
                                            <div class="card widget-flat">
                                                <div class="card-body">
                                                    <div class="float-right">
                                                        <i class="fa fa-line-chart widget-icon"></i>
                                                    </div>
                                                    <h5 class="font-weight-normal mt-0 card-title-heading text-muted">Total Companines</h5>
                                                    <h3 class="mt-3 mb-3 make-bold">360</h3>
                                                    <p class="mb-0 text-muted">
                                                        <span class="text-green make-bold mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span>
                                                        <small class="text-nowrap text-uppercase letter-space">Since last month</small>
                                                    </p>
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div> <!-- end col-->

                                        <div class="col-lg-12 mb-3">
                                            <div class="card widget-flat">
                                                <div class="card-body">
                                                    <div class="float-right">
                                                        <i class="fa fa-line-chart widget-icon"></i>
                                                    </div>
                                                    <h5 class="font-weight-normal mt-0 card-title-heading text-muted">Total Courses</h5>
                                                    <h3 class="mt-3 mb-3 make-bold">5,000</h3>
                                                    <p class="mb-0 text-muted">
                                                        <span class="text-red make-bold mr-2 make-bold"><i class="fa fa-long-arrow-down"></i> 1.08%</span>
                                                        <small class="text-nowrap text-uppercase letter-space">Since last month</small>
                                                    </p>
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card-->
                                        </div> <!-- end col-->
                                    </div>
                               </div>
                            <div class="col-12 col-lg-7 mb-3">
                                <div class="card card-view-sect">
                                    <div class="header-title make-bold">
                                        Popular Courses (PCC)
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChartPCC"></canvas>
                                    </div>
                                </div>
                            </div>
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
