<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<?php include "../components/main-business-nav.inc.php"; ?>

<div class="student_portal margin-top-00">
    <div class="container-fluid">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-12 statistics">
                <h4 class="mb-4 make-bold">Advanced Professional Certificate in Managing and Coordinating Human Resources</h4>
                <div class="courses-assigned-view-sect">
                    <div class="assign-container">
                        <!-- <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>The email address does not exist. Please contact the staff to signup on MSBM.</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>You have successfully added a staff.</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>You have exceeded the amount of course to assign to a staff.</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-lg-5 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mb-1 make-bold">Assign Staff</h4>
                                        <small class="mb-0 text-muted text-uppercase letter-space">Slot Left 3</small>
                                        <hr/>
                                        <form>
                                            <div class="form-group">
                                                <!-- <label>Staff Email Address #1</label> -->
                                                <input type="text" class="form-control form-control-lg" placeholder="Email Address #1" />
                                            </div>
                                            <div class="form-group">
                                                <!-- <label>Staff Email Address #2</label> -->
                                                <input type="text" class="form-control form-control-lg" placeholder="Email Address #2" />
                                            </div>
                                            <div class="form-group">
                                                <!-- <label>Staff Email Address #3</label> -->
                                                <input type="text" class="form-control form-control-lg" placeholder="Email Address #3" />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-lg-4">
                                                    <label>Start Date</label>
                                                    <input type="date" class="form-control form-control-lg" placeholder="Start Date" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-purple btn-block">Assign course to staff</button>
                                            </div>
                                        </form>
                                        <hr/>
                                        <p><sup class="text-danger">*</sup>Please note if a staff email address doesn't exist on our system, the staff should signup first before he/she can be assigned to a course</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                    <th scope="col" class="d-none d-lg-table-cell d-xl-table-cell">#</th>
                                                    <th scope="col" class="d-none d-lg-table-cell d-xl-table-cell">Email Address</th>
                                                    <th scope="col" class="d-none d-lg-table-cell d-xl-table-cell">Date Assigned</th>
                                                    <th scope="col" class="d-none d-lg-table-cell d-xl-table-cell">Start Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>
                                                            <div class="max-wid-table mb-2">HubertBlaineWolfeschlegelsteinhausenbergerdorff@sterling.ng</div>
                                                            <div class="mb-2 d-block d-lg-none d-xl-none"><strong>Date Assigned:</strong><br/> 10 Jan, 2021</div>
                                                            <div class="mb-2 d-block d-lg-none d-xl-none"><strong>Start Date:</strong><br/> 12 Apr, 2021</div>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell">10 Jan, 2021</td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell">12 Apr, 2021</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>
                                                            <div class="max-wid-table mb-2">Jacob.oluwatobilobajohnson@sterling.ng</div>
                                                            <div class="mb-2 d-block d-lg-none d-xl-none"><strong>Date Assigned:</strong><br/> 10 Jan, 2021</div>
                                                            <div class="mb-2 d-block d-lg-none d-xl-none"><strong>Start Date:</strong><br/> 08 Aug, 2021</div>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell">10 Jan, 2021</td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell">08 Aug, 2021</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>
                                                            <div class="max-wid-table mb-2">Larry.oba@sterling.ng</div>
                                                            <div class="mb-2 d-block d-lg-none d-xl-none"><strong>Date Assigned:</strong><br/> 10 Jan, 2021</div>
                                                            <div class="mb-2 d-block d-lg-none d-xl-none"><strong>Start Date:</strong><br/> 15 Feb, 2021</div>
                                                        </td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell">10 Jan, 2021</td>
                                                        <td class="d-none d-lg-table-cell d-xl-table-cell">15 Feb, 2021</td>
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
        </div>
    </div>
</div>


<?php include_once('../components/footer.php'); ?>