<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Support Requests</strong></h2>
                    <h5 class="text-muted">Showing 1 to 50 of 50</h5>
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
                                                Request Type <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionStaff">
                                        <div class="card-body">
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="support_type[]" value="academic"> Academic Issues </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="support_type[]" value="student support"> Support Support </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="support_type[]" value="tech"> Technical Issues </label></div>
                                            <div class="checkbox"><label>
                                                    <input type="checkbox" name="support_type[]" value="finance"> Finance Issues </label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Status <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionStaff">
                                        <div class="card-body">
                                            <div class="radio"><label>
                                                    <input type="radio" value="unreplied" id="" name="ticket_status"> Unreplied Requests </label></div>
                                            <div class="radio"><label>
                                                    <input type="radio" value="replied" id="" name="ticket_status"> Replied Requests </label></div>
                                            <div class="radio"><label>
                                                    <input type="radio" value="closed" id="" name="ticket_status"> Closed Requests </label></div>
                                            <div class="radio"><label>
                                                    <input type="radio" value="solved" id="" name="ticket_status"> Solved Requests </label></div>
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
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <button type="submit" class="btn btn-dark btn-block">Apply Filters</button>
                                </div>
                                <div class="form-group col-lg-6">
                                    <button type="submit" class="btn btn-danger btn-block">Reset Filter</button>
                                </div>
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
                                        <th>Date Sent</th>
                                        <th>Student</th>
                                        <th>Subject</th>
                                        <th>Status</th>
                                        <th>Branch</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td title="">Apr 29, 2020 - 05:23PM</td>
                                        <td title="">Kimberly Ahmad Jones</td>
                                        <td title="">DISCOUNT</td>
                                        <td title="">Open</td>
                                        <td title="">Lagos</td>
                                        <td title="">
                                            <a href="<?php echo ROOT_DIR; ?>staff/manage-student-question-review.php" class="btn btn-dark btn-sm text-white" target="_blank"><i class="fa fa-external-link fa-lg"></i>Review</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td title="">Apr 29, 2020 - 05:23PM</td>
                                        <td title="">Johnson Ahmad Jones</td>
                                        <td title="">Payment Receipt To Me On The Course Choosen</td>
                                        <td title="">Open</td>
                                        <td title="">Lagos</td>
                                        <td title="">
                                            <a href="<?php echo ROOT_DIR; ?>staff/manage-student-question-review.php" class="btn btn-dark btn-sm text-white" target="_blank"><i class="fa fa-external-link fa-lg"></i>Review</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div aria-label="Page navigation">
                            <ul class="pagination admin-staff-pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('../components/footer.php'); ?>