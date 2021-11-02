<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<?php include "../components/main-business-nav.inc.php"; ?>

    <div class="student_portal margin-top-00">
        <div class="container-fluid">
            <div class="staff-layout-container">
                <form>
                    <div class="main-dashboard-content">
                        <div class="row grid-3-placement">
                            <div class="col-lg-12 mb-3">
                                <h1 class="make-bold mb-2">Staff Report</h1>
                                <h4 class="make-bold text-muted">Professional Certificate in Effective Report Writing Skills</h4>
                            </div>
                        </div>
                        <div class="accordion accordionFormatView" id="businessReportingAccordion">
                            <div class="card accordionFormatCard">
                                <div class="card-header accordionFormatCardHeader bg-purple" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-none btn-block text-left text-white d-flex justify-content-between align-items-center accordionFormatBtn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h4 class="make-bold mb-0">March 23, 2021</h4> <span><i class="fa fa-chevron-down"></i> <i class="fa fa-chevron-up"></i></span>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#businessReportingAccordion">
                                    <div class="card-body">
                                        <div class="client-list-sect table-responsive">
                                            <table class="table table-centered mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">S/N</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Name</th>
                                                        <!-- <th>Phone</th>
                                                        <th>Email Address</th> -->
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">In Progress</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Completed</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Outstanding</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Certificate Download Status</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Enrolled Date</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Location of Learner</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Last Active Date</th>
                                                        <!-- <th>Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-hover-effect">
                                                        <td>1</td>
                                                        <td class="table-user v-align-bottom">
                                                            <div class="d-flex align-items-center max-wid-table mb-2">
                                                                    <div class="table-user-img">
                                                                        <img src="<?php echo ROOT_DIR; ?>images/banners/test-image.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                                    </div>
                                                                    <span class="ml-2">Salomey Eferemo Oluwasegun Muhammad Jennifer</span>
                                                            </div>
                                                           <div class="mb-2 d-block d-lg-none d-xl-none">
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius btn-block">View Full Report</a>
                                                            </div>
                                                        </td>
                                                        <!-- <td class="v-align-middle">08059994444</td>
                                                        <td class="max-wid-table v-align-middle">salomey@gmail.com</td> -->
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 10%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"> 60%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"> 30%</div>
                                                            </div>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            <small class="badge badge-success-lighten">Yes</small>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            23 Dec, 2020, 23:00
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            Lagos, Nigeria
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            <div class="mb-1">23 Feb, 2021, 23:00</div>
                                                            <div>
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius">View Full Report</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-hover-effect">
                                                        <td>2</td>
                                                        <td class="table-user v-align-bottom">
                                                            <div class="d-flex align-items-center max-wid-table mb-2">
                                                                    <div class="table-user-img">
                                                                        <img src="<?php echo ROOT_DIR; ?>images/44.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                                    </div>
                                                                    <span class="ml-2">Jacqueline Cooper Joshua McDonalds</span>
                                                            </div>
                                                           <div class="mb-2 d-block d-lg-none d-xl-none">
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius btn-block">View Full Report</a>
                                                            </div>
                                                        </td>
                                                        <!-- <td class="v-align-middle">+234805999564</td>
                                                        <td class="max-wid-table v-align-middle">salomey@gmail.com</td> -->
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"> 20%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"> 30%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> 50%</div>
                                                            </div>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            <small class="badge badge-success-lighten">Yes</small>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            23 Dec, 2020, 23:00
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            Lagos, Nigeria
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            11 March, 2021, 3:00
                                                            <div>
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius">View Full Report</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-hover-effect">
                                                        <td>3</td>
                                                        <td class="table-user v-align-bottom">
                                                            <div class="d-flex align-items-center max-wid-table mb-2">
                                                                    <div class="table-user-img">
                                                                        <img src="<?php echo ROOT_DIR; ?>images/71.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                                    </div>
                                                                    <span class="ml-2">Nina Thompson</span>
                                                            </div>
                                                             <div class="mb-2 d-block d-lg-none d-xl-none">
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius btn-block">View Full Report</a>
                                                            </div>
                                                        </td>
                                                        <!-- <td class="v-align-middle max-wid-table">+18059999999999999908656800767</td>
                                                        <td class="max-wid-table v-align-middle">Nina.Thompson@gmail.com</td> -->
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"> 80%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 10%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 10%</div>
                                                            </div>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            <small class="badge badge-warning-lighten">Not Yet</small>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            23 Dec, 2020, 23:00
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            Lagos, Nigeria
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            30 Mar, 2021, 18:00
                                                            <div>
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius">View Full Report</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-hover-effect">
                                                        <td>4</td>
                                                        <td class="table-user v-align-bottom">
                                                            <div class="d-flex align-items-center max-wid-table mb-2">
                                                                    <div class="table-user-img">
                                                                        <img src="<?php echo ROOT_DIR; ?>images/placeholder.png" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                                    </div>
                                                                    <span class="ml-2">Nina Thompson</span>
                                                            </div>
                                                            <div class="mb-2 d-block d-lg-none d-xl-none">
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius btn-block">View Full Report</a>
                                                            </div>
                                                        </td>
                                                        <!-- <td class="v-align-middle">0805-999-4444</td>
                                                        <td class="max-wid-table v-align-middle">Nina.Thompsonoluswatosintobiloba@gmail.com</td> -->
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> 50%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 10%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"> 40%</div>
                                                            </div>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            <small class="badge badge-warning-lighten">Not Yet</small>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            23 Dec, 2020, 23:00
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            Lagos, Nigeria
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            14 Jan, 2021, 14:00
                                                            <div>
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius">View Full Report</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card accordionFormatCard">
                                <div class="card-header accordionFormatCardHeader bg-purple" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-none btn-block text-left collapsed d-flex justify-content-between align-items-center accordionFormatBtn text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h4 class="make-bold mb-0">March 20, 2021</h4> <span><i class="fa fa-chevron-down"></i> <i class="fa fa-chevron-up"></i></span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#businessReportingAccordion">
                                    <div class="card-body">
                                        <div class="client-list-sect table-responsive">
                                            <table class="table table-centered mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">S/N</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Name</th>
                                                        <!-- <th>Phone</th>
                                                        <th>Email Address</th> -->
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">In Progress</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Completed</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Outstanding</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Certificate Download Status</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Enrolled Date</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Location of Learner</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Last Active Date</th>
                                                        <!-- <th>Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-hover-effect">
                                                        <td>1</td>
                                                        <td class="table-user v-align-bottom">
                                                            <div class="d-flex align-items-center max-wid-table mb-2">
                                                                    <div class="table-user-img">
                                                                        <img src="<?php echo ROOT_DIR; ?>images/banners/test-image.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                                    </div>
                                                                    <span class="ml-2">Salomey Eferemo Oluwasegun Muhammad Jennifer</span>
                                                            </div>
                                                            <div class="mb-2 d-block d-lg-none d-xl-none">
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius btn-block">View Full Report</a>
                                                            </div>
                                                        </td>
                                                        <!-- <td class="v-align-middle">08059994444</td>
                                                        <td class="max-wid-table v-align-middle">salomey@gmail.com</td> -->
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 10%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"> 60%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"> 30%</div>
                                                            </div>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            <small class="badge badge-success-lighten">Yes</small>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            23 Dec, 2020, 23:00
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            Lagos, Nigeria
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            23 Feb, 2021, 23:00
                                                            <div>
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius">View Full Report</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-hover-effect">
                                                        <td>2</td>
                                                        <td class="table-user v-align-bottom">
                                                            <div class="d-flex align-items-center max-wid-table mb-2">
                                                                    <div class="table-user-img">
                                                                        <img src="<?php echo ROOT_DIR; ?>images/44.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                                    </div>
                                                                    <span class="ml-2">Jacqueline Cooper Joshua McDonalds</span>
                                                            </div>
                                                            <div class="mb-2 d-block d-lg-none d-xl-none">
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius btn-block">View Full Report</a>
                                                            </div>
                                                        </td>
                                                        <!-- <td class="v-align-middle">+234805999564</td>
                                                        <td class="max-wid-table v-align-middle">salomey@gmail.com</td> -->
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"> 20%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"> 30%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> 50%</div>
                                                            </div>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            <small class="badge badge-success-lighten">Yes</small>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            23 Dec, 2020, 23:00
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            Lagos, Nigeria
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            11 March, 2021, 3:00
                                                            <div>
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius">View Full Report</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-hover-effect">
                                                        <td>3</td>
                                                        <td class="table-user v-align-bottom">
                                                            <div class="d-flex align-items-center max-wid-table mb-2">
                                                                    <div class="table-user-img">
                                                                        <img src="<?php echo ROOT_DIR; ?>images/71.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                                    </div>
                                                                    <span class="ml-2">Nina Thompson</span>
                                                            </div>
                                                             <div class="mb-2 d-block d-lg-none d-xl-none">
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius btn-block">View Full Report</a>
                                                            </div>
                                                        </td>
                                                        <!-- <td class="v-align-middle max-wid-table">+18059999999999999908656800767</td>
                                                        <td class="max-wid-table v-align-middle">Nina.Thompson@gmail.com</td> -->
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"> 80%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 10%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 10%</div>
                                                            </div>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            <small class="badge badge-warning-lighten">Not Yet</small>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            23 Dec, 2020, 23:00
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            Lagos, Nigeria
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            30 Mar, 2021, 18:00
                                                            <div>
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius">View Full Report</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-hover-effect">
                                                        <td>4</td>
                                                        <td class="table-user v-align-bottom">
                                                            <div class="d-flex align-items-center max-wid-table mb-2">
                                                                    <div class="table-user-img">
                                                                        <img src="<?php echo ROOT_DIR; ?>images/placeholder.png" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                                    </div>
                                                                    <span class="ml-2">Nina Thompson</span>
                                                            </div>
                                                            <div class="mb-2 d-block d-lg-none d-xl-none">
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius btn-block">View Full Report</a>
                                                            </div>
                                                        </td>
                                                        <!-- <td class="v-align-middle">0805-999-4444</td>
                                                        <td class="max-wid-table v-align-middle">Nina.Thompsonoluswatosintobiloba@gmail.com</td> -->
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> 50%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 10%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"> 40%</div>
                                                            </div>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            <small class="badge badge-warning-lighten">Not Yet</small>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            23 Dec, 2020, 23:00
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            Lagos, Nigeria
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            14 Jan, 2021, 14:00
                                                            <div>
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius">View Full Report</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card accordionFormatCard">
                                <div class="card-header accordionFormatCardHeader bg-purple" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-none btn-block text-left collapsed d-flex justify-content-between align-items-center accordionFormatBtn text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       <h4 class="make-bold mb-0">January 13, 2021</h4> <span><i class="fa fa-chevron-down"></i> <i class="fa fa-chevron-up"></i></span>
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#businessReportingAccordion">
                                    <div class="card-body">
                                        <div class="client-list-sect table-responsive">
                                            <table class="table table-centered mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">S/N</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Name</th>
                                                        <!-- <th>Phone</th>
                                                        <th>Email Address</th> -->
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">In Progress</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Completed</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Outstanding</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Certificate Download Status</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Enrolled Date</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Location of Learner</th>
                                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Last Active Date</th>
                                                        <!-- <th>Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-hover-effect">
                                                        <td>1</td>
                                                        <td class="table-user v-align-bottom">
                                                            <div class="d-flex align-items-center max-wid-table mb-2">
                                                                    <div class="table-user-img">
                                                                        <img src="<?php echo ROOT_DIR; ?>images/banners/test-image.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                                    </div>
                                                                    <span class="ml-2">Salomey Eferemo Oluwasegun Muhammad Jennifer</span>
                                                            </div>
                                                             <div class="mb-2 d-block d-lg-none d-xl-none">
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius btn-block">View Full Report</a>
                                                            </div>
                                                        </td>
                                                        <!-- <td class="v-align-middle">08059994444</td>
                                                        <td class="max-wid-table v-align-middle">salomey@gmail.com</td> -->
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 10%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"> 60%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"> 30%</div>
                                                            </div>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            <small class="badge badge-success-lighten">Yes</small>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            23 Dec, 2020, 23:00
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            Lagos, Nigeria
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            23 Feb, 2021, 23:00
                                                            <div>
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius">View Full Report</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-hover-effect">
                                                        <td>2</td>
                                                        <td class="table-user v-align-bottom">
                                                            <div class="d-flex align-items-center max-wid-table mb-2">
                                                                    <div class="table-user-img">
                                                                        <img src="<?php echo ROOT_DIR; ?>images/44.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                                    </div>
                                                                    <span class="ml-2">Jacqueline Cooper Joshua McDonalds</span>
                                                            </div>
                                                            <div class="mb-2 d-block d-lg-none d-xl-none">
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius btn-block">View Full Report</a>
                                                            </div>
                                                        </td>
                                                        <!-- <td class="v-align-middle">+234805999564</td>
                                                        <td class="max-wid-table v-align-middle">salomey@gmail.com</td> -->
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"> 20%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"> 30%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> 50%</div>
                                                            </div>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            <small class="badge badge-success-lighten">Yes</small>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            23 Dec, 2020, 23:00
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            Lagos, Nigeria
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            11 March, 2021, 3:00
                                                            <div>
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius">View Full Report</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-hover-effect">
                                                        <td>3</td>
                                                        <td class="table-user v-align-bottom">
                                                            <div class="d-flex align-items-center max-wid-table mb-2">
                                                                    <div class="table-user-img">
                                                                        <img src="<?php echo ROOT_DIR; ?>images/71.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                                    </div>
                                                                    <span class="ml-2">Nina Thompson</span>
                                                            </div>
                                                             <div class="mb-2 d-block d-lg-none d-xl-none">
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius btn-block">View Full Report</a>
                                                            </div>
                                                        </td>
                                                        <!-- <td class="v-align-middle max-wid-table">+18059999999999999908656800767</td>
                                                        <td class="max-wid-table v-align-middle">Nina.Thompson@gmail.com</td> -->
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"> 80%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 10%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 10%</div>
                                                            </div>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            <small class="badge badge-warning-lighten">Not Yet</small>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            23 Dec, 2020, 23:00
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            Lagos, Nigeria
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            30 Mar, 2021, 18:00
                                                            <div>
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius">View Full Report</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="table-hover-effect">
                                                        <td>4</td>
                                                        <td class="table-user v-align-bottom">
                                                            <div class="d-flex align-items-center max-wid-table mb-2">
                                                                    <div class="table-user-img">
                                                                        <img src="<?php echo ROOT_DIR; ?>images/placeholder.png" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                                    </div>
                                                                    <span class="ml-2">Nina Thompson</span>
                                                            </div>
                                                            <div class="mb-2 d-block d-lg-none d-xl-none">
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius btn-block">View Full Report</a>
                                                            </div>
                                                        </td>
                                                        <!-- <td class="v-align-middle">0805-999-4444</td>
                                                        <td class="max-wid-table v-align-middle">Nina.Thompsonoluswatosintobiloba@gmail.com</td> -->
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> 50%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 10%</div>
                                                            </div>
                                                        </td>
                                                        <td class="v-align-middle make-bold d-none d-lg-table-cell d-xl-table-cell">
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"> 40%</div>
                                                            </div>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            <small class="badge badge-warning-lighten">Not Yet</small>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            23 Dec, 2020, 23:00
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            Lagos, Nigeria
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell v-align-middle">
                                                            14 Jan, 2021, 14:00
                                                            <div>
                                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile-report.php" class="btn btn-info btn-sm btn-bord-radius">View Full Report</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php include_once('../components/footer.php'); ?>
