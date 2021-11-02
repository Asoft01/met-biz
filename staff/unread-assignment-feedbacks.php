<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Unread Assignment Feedbacks</strong></h2>
                    <h5 class="text-muted">Showing 1 to 100 of 140</h5>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-4">
                    <div class="filter-sect">
                        <div class="light-card">
                            <div class="card">
                                <h5 class="card-header"><strong>Generic</strong></h5>
                                <div class="card-body">
                                    <form action="<?php echo ROOT_DIR; ?>" method="post">
                                        <div class="form-group">
                                            <label>Student Name</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Module Code</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-dark btn-block"><i class="fa fa-search"></i> Filter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="programmes mt-4">
                        <form>
                            <div class="accordion degree-info-accordion" id="accordionStaff">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Programmes <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionStaff">
                                        <div class="card-body">
                                            <strong class="text-danger">POSTGRADUATE PROGRAMME</strong>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="prog_id[]" value="49"> Master Of Business Administration - Classroom </label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="prog_id[]" value="50"> MSc Information Technology - Classroom </label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="prog_id[]" value="126"> Master Of Business Administration - Online </label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="prog_id[]" value="127"> MSc Information Technology - Online </label>
                                            </div>

                                            <strong class="text-danger">UNDERGRADUATE PROGRAMME</strong>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="prog_id[]" value="51"> BBA. Business Administration - Classroom </label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="prog_id[]" value="52"> BSc. Business Administration - Classroom </label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="prog_id[]" value="124"> BA Management - Online </label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="prog_id[]" value="125"> BSc Business And Management - Online </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Session <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionStaff">
                                        <div class="card-body">
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2020-07-31"> Jul 31, 2020 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2020-07-30"> Jul 30, 2020 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2020-07-25"> Jul 25, 2020 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2020-06-29"> Jun 29, 2020 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2020-05-30"> May 30, 2020 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2020-05-29"> May 29, 2020 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2020-05-18"> May 18, 2020 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2020-04-27"> Apr 27, 2020 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2020-04-25"> Apr 25, 2020 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2020-02-03"> Feb 03, 2020 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2020-01-27"> Jan 27, 2020 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2020-01-25"> Jan 25, 2020 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2019-11-01"> Nov 01, 2019 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2019-10-28"> Oct 28, 2019 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2019-10-19"> Oct 19, 2019 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2019-10-05"> Oct 05, 2019 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2019-07-29"> Jul 29, 2019 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2019-07-27"> Jul 27, 2019 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2019-07-01"> Jul 01, 2019 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2019-04-29"> Apr 29, 2019 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2019-04-27"> Apr 27, 2019 </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="session[]" value="2018-10-20"> Oct 20, 2018 </label></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Branch <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionStaff">
                                        <div class="card-body">
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="branch[]" value="4"> Abuja </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="branch[]" value="5"> Accra </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="branch[]" value="2"> Dubai </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="branch[]" value="8"> East Nigeria </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="branch[]" value="3"> Lagos </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="branch[]" value="1"> London </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="branch[]" value="9"> Online Course </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="branch[]" value="10"> Rivers </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="branch[]" value="6"> Sharjah </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="branch[]" value="7"> Victoria Island </label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark btn-block">Apply Filters</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 statistics">
                    <div class="admin-staff-container">
                        <!-- <h4 class="text-center"><strong>Results</strong></h4>
                        <p class="text-center">Showing 1 to 10 of 30</p> -->
                        <div class="table-responsive">
                            <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Programme Name</th>
                                        <th>Session</th>
                                        <th>Branch</th>
                                        <th>Student</th>
                                        <th>Module</th>
                                        <th>Assignment</th>
                                        <th>Status</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td title=""><strong>International Postgraduate Diploma in Project Management (Level 7)</strong></td>
                                        <td title="">Jun 29, 2020</td>
                                        <td title="">Lagos</td>
                                        <td title="">
                                            Ateseme Biam </td>
                                        <td title="">ERP</td>
                                        <td title="">ENTERPRISE RESOURCE PLANNING ASSIGNMENT </td>
                                        <td title="">Completed</td>
                                        <td title="">
                                            <a href="<?php echo ROOT_DIR; ?>staff/admin-student-assignment-review.php" class="btn btn-dark btn-sm text-white" target="_blank"><i class="fa fa-external-link fa-lg"></i> View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td title=""><strong>International Postgraduate Diploma in Project Management (Level 7)</strong></td>
                                        <td title="">Jun 29, 2020</td>
                                        <td title="">Lagos</td>
                                        <td title="">
                                            Ateseme Biam </td>
                                        <td title="">PM</td>
                                        <td title="">PROJECT MANAGEMENT ASSIGNMENT </td>
                                        <td title="">Pending</td>
                                        <td title="">
                                            <a href="<?php echo ROOT_DIR; ?>staff/admin-student-assignment-review.php" class="btn btn-dark btn-sm text-white" target="_blank"><i class="fa fa-external-link fa-lg"></i> View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td title=""><strong>International Postgraduate Diploma in Project Management (Level 7)</strong></td>
                                        <td title="">Jun 29, 2020</td>
                                        <td title="">Lagos</td>
                                        <td title="">
                                            Ateseme Biam </td>
                                        <td title="">RM</td>
                                        <td title="">RESEARCH METHODOLOGY ASSIGNMENT </td>
                                        <td title="">Pending</td>
                                        <td title="">
                                            <a href="<?php echo ROOT_DIR; ?>staff/admin-student-assignment-review.php" class="btn btn-dark btn-sm text-white" target="_blank"><i class="fa fa-external-link fa-lg"></i> View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td title=""><strong>International Postgraduate Diploma in Project Management (Level 7)</strong></td>
                                        <td title="">Jun 29, 2020</td>
                                        <td title="">Lagos</td>
                                        <td title="">
                                            Ateseme Biam </td>
                                        <td title="">SFM</td>
                                        <td title="">STRATEGIC FINANCIAL MANAGEMENT ASSIGNMENT </td>
                                        <td title="">Pending</td>
                                        <td title="">
                                            <a href="<?php echo ROOT_DIR; ?>staff/admin-student-assignment-review.php" class="btn btn-dark btn-sm text-white" target="_blank"><i class="fa fa-external-link fa-lg"></i> View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td title=""><strong>International Postgraduate Diploma in Project Management (Level 7)</strong></td>
                                        <td title="">Jun 29, 2020</td>
                                        <td title="">Lagos</td>
                                        <td title="">
                                            Ateseme Biam </td>
                                        <td title="">SUCM</td>
                                        <td title="">SUPPLY CHAIN MANAGEMENT ASSIGNMENT </td>
                                        <td title="">Pending</td>
                                        <td title="">
                                            <a href="<?php echo ROOT_DIR; ?>staff/admin-student-assignment-review.php" class="btn btn-dark btn-sm text-white" target="_blank"><i class="fa fa-external-link fa-lg"></i> View</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td title=""><strong>International Postgraduate Diploma in Project Management (Level 7)</strong></td>
                                        <td title="">Jun 29, 2020</td>
                                        <td title="">Lagos</td>
                                        <td title="">
                                            Ateseme Biam </td>
                                        <td title="">TQM</td>
                                        <td title="">TOTAL QUALITY MANAGEMENT ASSIGNMENT </td>
                                        <td title="">Pending</td>
                                        <td title="">
                                            <a href="<?php echo ROOT_DIR; ?>staff/admin-student-assignment-review.php" class="btn btn-dark btn-sm text-white" target="_blank"><i class="fa fa-external-link fa-lg"></i> View</a>
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

    <?php include_once('../components/footer.php'); ?>

</body>

</html>