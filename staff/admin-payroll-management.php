<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Payroll Management</strong></h2>
                    <h5 class="text-muted">All Employees</h5>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <!-- <div class="card bg-green text-white border-rad-apply">
                            <div class="card-body">
                                <div class="monthly-pay-sect">
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <h6>PERIOD</h6>
                                            <h5><strong>July 1, 2020 - July 31, 2020</strong></h5>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <h6>SCHEDULE</h6>
                                            <h5><strong>Monthly Payroll</strong></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="add-new-action mb-4">
                            <div class="row">
                                <div class="col-lg-8">

                                </div>
                                <div class="col-lg-4">
                                    <button type="button" class="btn btn-dark btn-block" data-toggle="modal" data-target="#addNewModal">Add New</button>
                                </div>
                            </div>
                        </div>
                        <div class="search-mgt-table">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="<?php echo ROOT_DIR; ?>staff/admin-leave-management.php" method="post">
                                        <div class="form-group">
                                            <label><strong>Filter by Dept</strong></label>
                                            <div class="form-row">
                                                <div class="col-10">
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ...</option>
                                                        <option>Information Technology</option>
                                                        <option>Marketing</option>
                                                        <option>Administration</option>
                                                        <option>Logistics</option>
                                                    </select>
                                                </div>
                                                <div class="col-2">
                                                    <button type="submit" class="btn btn-dark btn-block"><i class="fa fa-search text-white"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="col-lg-2"></div> -->
                                <div class="col-lg-6">
                                    <form action="<?php echo ROOT_DIR; ?>staff/admin-leave-management.php" method="post">
                                        <div class="form-group">
                                            <label><strong>Search Employees Name</strong></label>
                                            <div class="form-row">
                                                <div class="col-10">
                                                    <input type="text" placeholder="Search employees" class="form-control" />
                                                </div>
                                                <div class="col-2">
                                                    <button type="submit" class="btn btn-dark btn-block"><i class="fa fa-search text-white"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Staff</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Basic Salary</th>
                                        <th scope="col">Total Allowance</th>
                                        <th scope="col">Housing</th>
                                        <th scope="col">Transport</th>
                                        <th scope="col">Compensation</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <a href="<?php echo ROOT_DIR; ?>">
                                                <div class="media">
                                                    <img src="<?php echo ROOT_DIR; ?>images/44.jpg" class="mr-3 img-staff" alt="...">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Mark Ajayi</h5>
                                                        <strong>Marketing</strong>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td>Marketer</td>
                                        <td>N130,000</td>
                                        <td>N50,000</td>
                                        <td>N30,000</td>
                                        <td>N30,000</td>
                                        <td>N20,000</td>
                                        <td><a href="<?php echo ROOT_DIR; ?>admin-payroll-management.php" class=" btn btn-danger btn-sm"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>
                                            <a href="<?php echo ROOT_DIR; ?>">
                                                <div class="media">
                                                    <img src="<?php echo ROOT_DIR; ?>images/44.jpg" class="mr-3 img-staff" alt="...">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Mark Ajayi</h5>
                                                        <strong>Marketing</strong>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td>Web Developer</td>
                                        <td>N230,000</td>
                                        <td>N150,000</td>
                                        <td>N30,000</td>
                                        <td>N30,000</td>
                                        <td>N20,000</td>
                                        <td><a href="<?php echo ROOT_DIR; ?>admin-payroll-management.php" class=" btn btn-danger btn-sm"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>
                                            <a href="<?php echo ROOT_DIR; ?>">
                                                <div class="media">
                                                    <img src="<?php echo ROOT_DIR; ?>images/44.jpg" class="mr-3 img-staff" alt="...">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Mark Ajayi</h5>
                                                        <strong>Marketing</strong>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td>Marketer</td>
                                        <td>N130,000</td>
                                        <td>N50,000</td>
                                        <td>N30,000</td>
                                        <td>N30,000</td>
                                        <td>N20,000</td>
                                        <td><a href="<?php echo ROOT_DIR; ?>admin-payroll-management.php" class=" btn btn-danger btn-sm"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>
                                            <a href="<?php echo ROOT_DIR; ?>">
                                                <div class="media">
                                                    <img src="<?php echo ROOT_DIR; ?>images/44.jpg" class="mr-3 img-staff" alt="...">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Mark Ajayi</h5>
                                                        <strong>Information Technology</strong>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td>Web Developer</td>
                                        <td>N230,000</td>
                                        <td>N150,000</td>
                                        <td>N30,000</td>
                                        <td>N30,000</td>
                                        <td>N20,000</td>
                                        <td><a href="<?php echo ROOT_DIR; ?>admin-payroll-management.php" class=" btn btn-danger btn-sm"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>
                                            <a href="<?php echo ROOT_DIR; ?>">
                                                <div class="media">
                                                    <img src="<?php echo ROOT_DIR; ?>images/44.jpg" class="mr-3 img-staff" alt="...">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Mark Ajayi</h5>
                                                        <strong>Marketing</strong>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td>Marketer</td>
                                        <td>N130,000</td>
                                        <td>N50,000</td>
                                        <td>N30,000</td>
                                        <td>N30,000</td>
                                        <td>N20,000</td>
                                        <td><a href="<?php echo ROOT_DIR; ?>admin-payroll-management.php" class=" btn btn-danger btn-sm"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>
                                            <a href="<?php echo ROOT_DIR; ?>">
                                                <div class="media">
                                                    <img src="<?php echo ROOT_DIR; ?>images/44.jpg" class="mr-3 img-staff" alt="...">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Mark Ajayi</h5>
                                                        <strong>Information Technology</strong>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td>Web Developer</td>
                                        <td>N230,000</td>
                                        <td>N150,000</td>
                                        <td>N30,000</td>
                                        <td>N30,000</td>
                                        <td>N20,000</td>
                                        <td><a href="<?php echo ROOT_DIR; ?>admin-payroll-management.php" class=" btn btn-danger btn-sm"><i class="fa fa-times"></i></a></td>
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


    <!-- Add New -->
    <div class="modal fade" id="addNewModal" tabindex="-1" role="dialog" aria-labelledby="addNewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewModalLabel"><strong>Add New Employee</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="addNewPayroll">
                        <form action="<?php echo ROOT_DIR; ?>admin-payroll-management.php" method="post">
                            <div class="form-group">
                                <label>Profile Image</label>
                                <input type="file" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <input type="text" class="form-control" placeholder="Enter Department" />
                            </div>
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" class="form-control" placeholder="Enter Position" />
                            </div>
                            <div class="form-group">
                                <label>Basic Salary</label>
                                <input type="number" class="form-control" placeholder="Enter Basic Salary" min="0" />
                            </div>
                            <div class="form-group">
                                <label>Total Allowance</label>
                                <input type="number" class="form-control" placeholder="Enter Total Allowance" min="0" />
                            </div>
                            <div class="form-group">
                                <label>Housing</label>
                                <input type="number" class="form-control" placeholder="Enter Housing" min="0" />
                            </div>
                            <div class="form-group">
                                <label>Transport</label>
                                <input type="number" class="form-control" placeholder="Enter Transport" min="0" />
                            </div>
                            <div class="form-group">
                                <label>Compensation</label>
                                <input type="number" class="form-control" placeholder="Enter Compensation" min="0" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-dark btn-block" value="Add New Employee" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('../components/footer.php'); ?>