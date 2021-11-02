<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Leave Management</strong></h2>
                    <h5 class="text-muted">All Employees</h5>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Staff</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Pay Grade</th>
                                        <th scope="col">Eligible</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <div class="media">
                                                <img src="<?php echo ROOT_DIR; ?>images/44.jpg" class="mr-3 img-staff" alt="...">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Mark Ajayi</h5>
                                                    <strong>Marketing</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Marketer</td>
                                        <td>Monthly</td>
                                        <td>Yes</td>
                                        <td><a href="<?php echo ROOT_DIR; ?>" class="btn btn-info btn-sm text-white">Approve</a> <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm btn-danger">Reject</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>
                                            <div class="media">
                                                <img src="<?php echo ROOT_DIR; ?>images/44.jpg" class="mr-3 img-staff" alt="...">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Mark Ajayi</h5>
                                                    <strong>Marketing</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Marketer</td>
                                        <td>Monthly</td>
                                        <td>Yes</td>
                                        <td><a href="<?php echo ROOT_DIR; ?>" class="btn btn-info btn-sm text-white">Approve</a> <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm btn-danger">Reject</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>
                                            <div class="media">
                                                <img src="<?php echo ROOT_DIR; ?>images/44.jpg" class="mr-3 img-staff" alt="...">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Mark Ajayi</h5>
                                                    <strong>Information Technology</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Marketer</td>
                                        <td>Monthly</td>
                                        <td>Yes</td>
                                        <td><a href="<?php echo ROOT_DIR; ?>" class="btn btn-info btn-sm text-white">Approve</a> <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm btn-danger">Reject</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>
                                            <div class="media">
                                                <img src="<?php echo ROOT_DIR; ?>images/44.jpg" class="mr-3 img-staff" alt="...">
                                                <div class="media-body">
                                                    <h5 class="mt-0">Mark Ajayi</h5>
                                                    <strong>Marketing</strong>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Marketer</td>
                                        <td>Monthly</td>
                                        <td>No</td>
                                        <td><a href="<?php echo ROOT_DIR; ?>" class="btn btn-info btn-sm text-white">Approve</a> <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm btn-danger">Reject</a></td>
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