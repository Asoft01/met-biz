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
                <div class="col-lg-12 statistics">
                    <div class="admin-staff-container">
                        <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-pending-tab" data-toggle="pill" href="#pills-pending" role="tab" aria-controls="pills-pending" aria-selected="true">Pending(2)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-approved-tab" data-toggle="pill" href="#pills-approved" role="tab" aria-controls="pills-approved" aria-selected="false">Approved(2)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-rejected-tab" data-toggle="pill" href="#pills-rejected" role="tab" aria-controls="pills-rejected" aria-selected="false">Rejected(2)</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab">
                                <div class="pending-leave">
                                    <div class="row">
                                        <div class="col-lg-4 mb-4">
                                            <div class="card pending-leave-card">
                                                <div class="card-body">
                                                    <div class="pending-info-time">
                                                        <div class="media">
                                                            <img src="<?php echo ROOT_DIR; ?>images/44.jpg" class="mr-3 img-staff" alt="...">
                                                            <div class="media-body">
                                                                <h6 class="mt-0"><strong>Mark Ajayi Hassan</strong></h6>
                                                                <span class="text-muted">Business Development Manager</span>
                                                            </div>
                                                        </div>
                                                        <small class="text-muted make-bold">June</small>
                                                    </div>
                                                    <div class="pending-info-days mt-4">
                                                        <div class="pending-date-holder">
                                                            <div class="date-box">
                                                                <span class="make-bold">15</span>
                                                            </div>
                                                            <p class="make-bold">Mon</p>
                                                        </div>
                                                        <div class="pending-show-days">
                                                            <img src="<?php echo ROOT_DIR; ?>images/next.svg" class="img-fluid days-count-arrow" />
                                                            <span class="text-muted make-bold">3 DAYS</span>
                                                        </div>
                                                        <div class="pending-date-holder">
                                                            <div class="date-box">
                                                                <span class="make-bold">18</span>
                                                            </div>
                                                            <p class="make-bold">Wed</p>
                                                        </div>
                                                    </div>
                                                    <div class="pending-reason">
                                                        <hr />
                                                        <h6 class="make-bold">Casual Leave</h6>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut excepturi quaerat atque deserunt dolorum soluta quasi pariatur facere aperiam totam fugiat modi, molestiae ut eveniet repellendus tenetur. Molestiae, necessitatibus enim?</p>
                                                    </div>

                                                    <div class="pending-leave-left">
                                                        <span class="badge badge-info">10 Leaves Available</span>
                                                        <hr />
                                                    </div>
                                                    <div class="pending-reply">
                                                        <div class="row">
                                                            <div class="col-lg-6 mb-2">
                                                                <a href="#" class="btn btn-dark btn-block">Approve</a>
                                                            </div>
                                                            <div class="col-lg-6 mb-2">
                                                                <a href="#" class="btn btn-outline-red btn-block" data-toggle="modal" data-target="#rejectModal">Reject</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="card pending-leave-card">
                                                <div class="card-body">
                                                    <div class="pending-info-time">
                                                        <div class="media">
                                                            <img src="<?php echo ROOT_DIR; ?>images/candidate.jpg" class="mr-3 img-staff" alt="...">
                                                            <div class="media-body">
                                                                <h6 class="mt-0"><strong>Anthony Muhammad Chukwuemeka</strong></h6>
                                                                <span class="text-muted">Business Development Manager</span>
                                                            </div>
                                                        </div>
                                                        <small class="text-muted make-bold">June</small>
                                                    </div>
                                                    <div class="pending-info-days mt-4">
                                                        <div class="pending-date-holder">
                                                            <div class="date-box">
                                                                <span class="make-bold">8</span>
                                                            </div>
                                                            <p class="make-bold">Mon</p>
                                                        </div>
                                                        <div class="pending-show-days">
                                                            <img src="<?php echo ROOT_DIR; ?>images/next.svg" class="img-fluid days-count-arrow" />
                                                            <span class="text-muted make-bold">4 DAYS</span>
                                                        </div>
                                                        <div class="pending-date-holder">
                                                            <div class="date-box">
                                                                <span class="make-bold">11</span>
                                                            </div>
                                                            <p class="make-bold">Wed</p>
                                                        </div>
                                                    </div>
                                                    <div class="pending-reason">
                                                        <hr />
                                                        <h6 class="make-bold">Sick Leave</h6>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut excepturi quaerat atque deserunt dolorum soluta quasi pariatur facere.</p>
                                                    </div>

                                                    <div class="pending-leave-left">
                                                        <span class="badge badge-info">10 Leaves Available</span>
                                                        <hr />
                                                    </div>
                                                    <div class="pending-reply">
                                                        <div class="row">
                                                            <div class="col-lg-6 mb-2">
                                                                <a href="#" class="btn btn-dark btn-block">Approve</a>
                                                            </div>
                                                            <div class="col-lg-6 mb-2">
                                                                <a href="#" class="btn btn-outline-red btn-block" data-toggle="modal" data-target="#rejectModal">Reject</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="card pending-leave-card">
                                                <div class="card-body">
                                                    <div class="pending-info-time">
                                                        <div class="media">
                                                            <img src="<?php echo ROOT_DIR; ?>images/candidate.jpg" class="mr-3 img-staff" alt="...">
                                                            <div class="media-body">
                                                                <h6 class="mt-0"><strong>Anthony Muhammad Chukwuemeka</strong></h6>
                                                                <span class="text-muted">Business Development Manager</span>
                                                            </div>
                                                        </div>
                                                        <small class="text-muted make-bold">June</small>
                                                    </div>
                                                    <div class="pending-info-days mt-4">
                                                        <div class="pending-date-holder">
                                                            <div class="date-box">
                                                                <span class="make-bold">8</span>
                                                            </div>
                                                            <p class="make-bold">Mon</p>
                                                        </div>
                                                        <div class="pending-show-days">
                                                            <img src="<?php echo ROOT_DIR; ?>images/next.svg" class="img-fluid days-count-arrow" />
                                                            <span class="text-muted make-bold">4 DAYS</span>
                                                        </div>
                                                        <div class="pending-date-holder">
                                                            <div class="date-box">
                                                                <span class="make-bold">11</span>
                                                            </div>
                                                            <p class="make-bold">Wed</p>
                                                        </div>
                                                    </div>
                                                    <div class="pending-reason">
                                                        <hr />
                                                        <h6 class="make-bold">Sick Leave</h6>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut excepturi quaerat atque deserunt dolorum soluta quasi pariatur facere.</p>
                                                    </div>

                                                    <div class="pending-leave-left">
                                                        <span class="badge badge-info">10 Leaves Available</span>
                                                        <hr />
                                                    </div>
                                                    <div class="pending-reply">
                                                        <div class="row">
                                                            <div class="col-lg-6 mb-2">
                                                                <a href="#" class="btn btn-dark btn-block">Approve</a>
                                                            </div>
                                                            <div class="col-lg-6 mb-2">
                                                                <a href="#" class="btn btn-outline-red btn-block" data-toggle="modal" data-target="#rejectModal">Reject</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-approved" role="tabpanel" aria-labelledby="pills-approved-tab">
                                <div class="approved-leave">
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
                                                    <th scope="col">Employee Name</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Leave Type</th>
                                                    <th scope="col">From</th>
                                                    <th scope="col">To</th>
                                                    <th scope="col">Total Days</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <div class="media">
                                                            <img src="<?php echo ROOT_DIR; ?>images/44.jpg" class="mr-3 img-staff" alt="...">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Joshua Johnson Amadu</h5>
                                                                <strong>Marketing</strong>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Marketer</td>
                                                    <td>Sick Leave</td>
                                                    <td>12-07-2020</td>
                                                    <td>15-07-2020</td>
                                                    <td>3 Days</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>
                                                        <div class="media">
                                                            <img src="<?php echo ROOT_DIR; ?>images/44.jpg" class="mr-3 img-staff" alt="...">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Anthony Muhammad Chukwuemeka</h5>
                                                                <strong>Marketing</strong>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Business Development Manager</td>
                                                    <td>Casual Leave</td>
                                                    <td>15-07-2020</td>
                                                    <td>17-07-2020</td>
                                                    <td>2 Days</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>
                                                        <div class="media">
                                                            <img src="<?php echo ROOT_DIR; ?>images/candidate.jpg" class="mr-3 img-staff" alt="...">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Anthony Muhammad Chukwuemeka</h5>
                                                                <strong>Marketing</strong>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Business Development Manager</td>
                                                    <td>Casual Leave</td>
                                                    <td>15-07-2020</td>
                                                    <td>17-07-2020</td>
                                                    <td>2 Days</td>
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
                            <div class="tab-pane fade" id="pills-rejected" role="tabpanel" aria-labelledby="pills-rejected-tab">
                                <div class="reject-leave">
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
                                                    <th scope="col">Employee Name</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Leave Type</th>
                                                    <th scope="col">From</th>
                                                    <th scope="col">To</th>
                                                    <th scope="col">Total Days</th>
                                                    <th scope="col">Reason For Rejection</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <div class="media">
                                                            <img src="<?php echo ROOT_DIR; ?>images/44.jpg" class="mr-3 img-staff" alt="...">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Joshua Johnson Amadu</h5>
                                                                <strong>Marketing</strong>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Marketer</td>
                                                    <td>Sick Leave</td>
                                                    <td>12-07-2020</td>
                                                    <td>15-07-2020</td>
                                                    <td>3 Days</td>
                                                    <td><button class="btn btn-danger" data-toggle="modal" data-target="#reasonModal">See Reason</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>
                                                        <div class="media">
                                                            <img src="<?php echo ROOT_DIR; ?>images/44.jpg" class="mr-3 img-staff" alt="...">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Anthony Muhammad Chukwuemeka</h5>
                                                                <strong>Marketing</strong>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Business Development Manager</td>
                                                    <td>Casual Leave</td>
                                                    <td>15-07-2020</td>
                                                    <td>17-07-2020</td>
                                                    <td>2 Days</td>
                                                    <td><button class="btn btn-danger" data-toggle="modal" data-target="#reasonModal">See Reason</button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>
                                                        <div class="media">
                                                            <img src="<?php echo ROOT_DIR; ?>images/candidate.jpg" class="mr-3 img-staff" alt="...">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Anthony Muhammad Chukwuemeka</h5>
                                                                <strong>Marketing</strong>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Business Development Manager</td>
                                                    <td>Casual Leave</td>
                                                    <td>15-07-2020</td>
                                                    <td>17-07-2020</td>
                                                    <td>2 Days</td>
                                                    <td><button class="btn btn-danger" data-toggle="modal" data-target="#reasonModal">See Reason</button></td>
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
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="rejectModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rejectModalLabel">Reason For Rejection</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label class="make-bold">Reason</label>
                            <textarea class="form-control" rows="7"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-dark btn-block">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="reasonModal" tabindex="-1" aria-labelledby="reasonModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reasonModalLabel">Reason For Leave Rejection</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore doloribus nihil, doloremque libero provident animi sequi nemo explicabo est sunt, quidem ut molestiae vitae aut, adipisci natus dolores obcaecati perferendis!</p>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('../components/footer.php'); ?>

</body>

</html>