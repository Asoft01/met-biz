<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Manage Programme Dates</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <div class="search-mgt-table mb-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="light-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="<?php echo ROOT_DIR; ?>staff/admin-programme-dates.php">
                                                    <div class="form-row">
                                                        <div class="col-lg-6 mb-2 mt-2">
                                                            <select class="form-control">
                                                                <option selected hidden disabled>Filter Programme</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-3 mb-2 mt-2">
                                                            <select class="form-control">
                                                                <option selected hidden disabled>Year</option>
                                                                <option>1990</option>
                                                                <option>---</option>
                                                                <option>2020</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-3 mb-2 mt-2">
                                                            <button class="btn btn-dark btn-block" type="submit">Filter</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-on-top mb-4">
                            <a href="<?php echo ROOT_DIR; ?>staff/admin-add-programme-dates.php" class="btn btn-dark"><i class="fa fa-plus"></i> New Programme Dates</a>
                            <span><strong>Showing 1 to 3 of 3 Dates</strong></span>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Programme Type</th>
                                        <th>Programme Name</th>
                                        <th>Fee</th>
                                        <th>Start</th>
                                        <th>End</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td title="">1</td>
                                        <td>Postgraduate Diploma</td>
                                        <td title="">International Postgraduate Diploma in Business and Management (Level 7)</td>
                                        <td>AED 12,000</td>
                                        <td title="">Jul 30th, 2020 <em style="color:#ccc">→ Jan 30th, 2021</em></td>
                                        <td title="">Aug 30th, 2020 <em style="color:#ccc">→ Aug 30th, 2021</em></td>
                                        <td title="">
                                            <a href="<?php echo ROOT_DIR; ?>staff/admin-edit-programme-dates.php" class="btn btn-dark text-white" target="_blank">Edit</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td title="">2</td>
                                        <td>Postgraduate Diploma</td>
                                        <td title="">International Postgraduate Diploma in Business and Management (Level 7)</td>
                                        <td>AED 12,000</td>
                                        <td title="">Jul 30th, 2020 <em style="color:#ccc">→ Jan 30th, 2021</em></td>
                                        <td title="">Aug 30th, 2020 <em style="color:#ccc">→ Aug 30th, 2021</em></td>
                                        <td title="">
                                            <a href="<?php echo ROOT_DIR; ?>staff/admin-edit-programme-dates.php" class="btn btn-dark text-white" target="_blank">Edit</a>
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