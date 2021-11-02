<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<?php include "../components/main-business-nav.inc.php"; ?>

<div class="student_portal margin-top-00">
    <div class="container-fluid">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-10 mx-auto statistics">
                <h1 class="mb-4 make-bold">Staff Report</h1>

                <div class="staff-profile-details pb-4">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="mb-3"><a href="<?php echo ROOT_DIR; ?>student/business-staff-report.php" class="text-dark"><i class="fa fa-chevron-left"></i> Back to Staff Report</a></div>
                            <div>
                                <h3 class="make-bold">Advanced Professional Certificate in Managing and Coordinating Human Resources</h3>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="card card-profile-details h-100">
                                <div class="card-body card-body-profile-details">
                                    <!-- <div class="profile-image-show-box mb-3">
                                        <img src="<?php echo ROOT_DIR; ?>images/44.jpg" alt="table-user" class="mr-2 h-100 w-100 object-fit-cover rounded-circle" />
                                    </div> -->
                                    <div class="row align-items-center">
                                        <div class="col-lg-2">
                                            <div class="profile-image-show-box mb-3">
                                                <img src="<?php echo ROOT_DIR; ?>images/44.jpg" alt="table-user" class="mr-2 h-100 w-100 object-fit-cover rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <h5 class="mb-0 make-bold">Salomey Eferemo Oluwasegun Muhammad Jennifer</h5>
                                        </div>
                                    </div>
                                    <div class="profile-detail-box">
                                        <div class="profile-details-list">
                                            <h6 class="make-bold">Email Address</h6>
                                            <p class="mb-0">salomey@gmail.com</p>
                                        </div>
                                        <div class="profile-details-list">
                                            <h6 class="make-bold">Phone Number</h6>
                                            <p class="mb-0">08085676331</p>
                                        </div>
                                        <div class="profile-details-list">
                                            <h6 class="make-bold">Nationality</h6>
                                            <p class="mb-0">Nigeria</p>
                                        </div>
                                        <!-- <div class="profile-details-list">
                                            <h6 class="make-bold">Location of Learner</h6>
                                            <p class="mb-0">Lagos, Nigeria</p>
                                        </div> -->
                                        <div class="profile-details-list">
                                            <h6 class="make-bold">Enrolled Date</h6>
                                            <p class="mb-0">13 Feb, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="card card-profile-details h-100">
                                <div class="card-body card-body-profile-details">
                                    <!-- <div class="profile-image-show-box mb-3">
                                        <img src="<?php echo ROOT_DIR; ?>images/44.jpg" alt="table-user" class="mr-2 h-100 w-100 object-fit-cover rounded-circle" />
                                    </div> -->

                                    <div class="profile-detail-box">
                                        <div class="profile-details-list">
                                            <h6 class="make-bold">In Progress</h6>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 10%</div>
                                            </div>
                                        </div>
                                        <div class="profile-details-list">
                                            <h6 class="make-bold">Completed</h6>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"> 60%</div>
                                            </div>
                                        </div>
                                        <div class="profile-details-list">
                                            <h6 class="make-bold">Outstanding</h6>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"> 30%</div>
                                            </div>
                                        </div>
                                        <div class="profile-details-list">
                                            <h6 class="make-bold">Certificate Download Status</h6>
                                            <small class="badge badge-success-lighten">Yes</small>
                                        </div>
                                        <div class="profile-details-list">
                                            <h6 class="make-bold">Last Active Date</h6>
                                            <p class="mb-0">23 Feb, 2021, 23:00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="staff-module-report pb-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="make-bold">Modules</h3>
                            <div class="client-list-sect table-responsive">
                                <table class="table table-centered mb-0 table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="d-none d-lg-table-cell d-xl-table-cell">S/N</th>
                                            <th class="d-none d-lg-table-cell d-xl-table-cell">Module Name</th>
                                            <!-- <th>Phone</th>
                                            <th>Email Address</th> -->
                                            <th class="d-none d-lg-table-cell d-xl-table-cell">In Progress</th>
                                            <th class="d-none d-lg-table-cell d-xl-table-cell">Completed</th>
                                            <th class="d-none d-lg-table-cell d-xl-table-cell">Outstanding</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-hover-effect">
                                            <td>1</td>
                                            <td class="table-user v-align-bottom">
                                                <div class="d-flex align-items-center max-wid-table mb-2">
                                                    <span class="ml-2">Advanced Business Research Methods (ABRM)</span>
                                                </div>
                                                <div class="mb-3 d-block d-lg-none d-xl-none">
                                                    <label class="make-bold text-muted">In Progress</label>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 10%</div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 d-block d-lg-none d-xl-none">
                                                    <label class="make-bold text-muted">Completed</label>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"> 60%</div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 d-block d-lg-none d-xl-none">
                                                    <label class="make-bold text-muted">Outstanding</label>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"> 30%</div>
                                                    </div>
                                                </div>
                                            </td>
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
                                        </tr>
                                        <tr class="table-hover-effect">
                                            <td>2</td>
                                            <td class="table-user v-align-bottom">
                                                <div class="d-flex align-items-center max-wid-table mb-2">
                                                    <span class="ml-2">Enterprise And Enterpreneurship (ENT)</span>
                                                </div>
                                                <div class="mb-3 d-block d-lg-none d-xl-none">
                                                    <label class="make-bold text-muted">In Progress</label>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"> 20%</div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 d-block d-lg-none d-xl-none">
                                                    <label class="make-bold text-muted">Completed</label>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"> 30%</div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 d-block d-lg-none d-xl-none">
                                                    <label class="make-bold text-muted">Outstanding</label>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> 50%</div>
                                                    </div>
                                                </div>
                                            </td>
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
                                        </tr>
                                        <tr class="table-hover-effect">
                                            <td>3</td>
                                            <td class="table-user v-align-bottom">
                                                <div class="d-flex align-items-center max-wid-table mb-2">
                                                    <span class="ml-2">Global Strategic Marketing (GSM)</span>
                                                </div>
                                                <div class="mb-3 d-block d-lg-none d-xl-none">
                                                    <label class="make-bold text-muted">In Progress</label>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"> 80%</div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 d-block d-lg-none d-xl-none">
                                                    <label class="make-bold text-muted">Completed</label>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 10%</div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 d-block d-lg-none d-xl-none">
                                                    <label class="make-bold text-muted">Outstanding</label>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 10%</div>
                                                    </div>
                                                </div>
                                            </td>
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
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="staff-module-activity pb-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="make-bold">Activity Log</h3>
                            <div class="client-list-sect table-responsive">
                                <table class="table table-centered mb-0 table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Date & Time</th>
                                            <th>Log</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-hover-effect">
                                            <td>2021-03-24 08:52:49</td>
                                            <td class="table-user v-align-bottom">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="ml-2">Signed into their portal</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-hover-effect">
                                           <td>2021-03-24 09:52:49</td>
                                            <td class="table-user v-align-bottom">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="ml-2">Navigated to the dashboard page</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="table-hover-effect">
                                            <td>2021-03-24 10:52:49</td>
                                            <td class="table-user v-align-bottom">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="ml-2">User logged out of student portal</span>
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
    </div>
</div>


<?php include_once('../components/footer.php'); ?>