<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Automated Emails From Staff</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-12">
                    <div class="admin-staff-container">
                        <div class="search-mgt-table">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="light-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="<?php echo ROOT_DIR; ?>staff/admin-automated-emails-from-staff.php">
                                                    <div class="form-row">
                                                        <div class="col-lg-3 mb-3">
                                                            <input type="text" class="form-control" placeholder="Word/Phrase...">
                                                        </div>
                                                        <div class="col-lg-3 mb-3">
                                                            <select class="form-control">
                                                                <option selected hidden disabled>Filter Programme</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-3 mb-3">
                                                            <select class="form-control">
                                                                <option selected hidden disabled>All Countries</option>
                                                                <option>United Kingdom</option>
                                                                <option>United Arab Emirates</option>
                                                                <option>Nigeria</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-3 mb-3">
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
                        <div class="new-template mt-4 mb-4">
                            <a href="<?php echo ROOT_DIR; ?>staff/admin-automated-emails-from-staff-create-template.php" class="btn btn-dark"><i class="fa fa-plus"></i> New Template</a>
                        </div>
                        <div class="admin-staff-email-table">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Programme</th>
                                            <th scope="col">Study Center</th>
                                            <th scope="col">Template Type</th>
                                            <th scope="col">Priority</th>
                                            <th scope="col">Days Interval</th>
                                            <th scope="col">Timing</th>
                                            <th scope="col">No of Times</th>
                                            <th scope="col">Attachments</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-hover-effect">
                                            <th scope="row">1</th>
                                            <td>
                                                Masters of Business Administration - Classroom<br />
                                                <div class=" hide-copy"><a href="<?php echo ROOT_DIR; ?>staff/admin-duplicate-all.php" class="badge badge-dark text-white"><i class="fa fa-plus"></i> Bulk Copy</a><br /></div>
                                                <small class="add-color-orange"><strong>Modified on 2017-12-05 11:58:08pm by Admin Developer</strong></small>
                                            </td>
                                            <td>United Kingdom</td>
                                            <td><span class="badge badge-dark">Email</span> New Client (First Contract)<br /><small class="add-color-teal"><strong>Details of the Master's in Business Administration by MSBM, UK</small></td>
                                            <td>1</td>
                                            <td>1 Day(s)</td>
                                            <td>Until Programme (Instant)</td>
                                            <td>1 time(s)</td>
                                            <td><a href="" class="badge badge-dark text-white"><i class="fa fa-file"></i> Attachments (2)</a></td>
                                            <td>Active</td>
                                            <td><a href="<?php echo ROOT_DIR; ?>staff/admin-automated-emails-from-staff-edit-template.php" class="btn btn-info btn-sm text-white">Edit</a> <a href="<?php echo ROOT_DIR; ?>staff/admin-automated-emails-from-staff-duplicate-template.php" class="btn btn-sm btn-light">Duplicate</a> <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm btn-warning">Disable</a></td>
                                        </tr>
                                        <tr class="table-hover-effect">
                                            <th scope="row">2</th>
                                            <td>
                                                Masters of Business Administration - Classroom<br />
                                                <div class=" hide-copy"><a href="<?php echo ROOT_DIR; ?>staff/admin-duplicate-all.php" class="badge badge-dark text-white"><i class="fa fa-plus"></i> Bulk Copy</a><br /></div>
                                                <small class="add-color-orange"><strong>Modified on 2017-12-05 11:58:08pm by Admin Developer</strong></small>
                                            </td>
                                            <td>United Kingdom</td>
                                            <td><span class="badge badge-dark">Email</span> New Client (First Contract)<br /><small class="add-color-teal"><strong>Details of the Master's in Business Administration by MSBM, UK</small></td>
                                            <td>1</td>
                                            <td>1 Day(s)</td>
                                            <td>Until Programme (Instant)</td>
                                            <td>1 time(s)</td>
                                            <td><a href="" class="badge badge-dark text-white"><i class="fa fa-file"></i> Attachments (2)</a></td>
                                            <td>Active</td>
                                            <td><a href="<?php echo ROOT_DIR; ?>staff/admin-automated-emails-from-staff-edit-template.php" class="btn btn-info btn-sm text-white">Edit</a> <a href="<?php echo ROOT_DIR; ?>staff/admin-automated-emails-from-staff-duplicate-template.php" class="btn btn-sm btn-light">Duplicate</a> <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm text-white btn-success">Enable</a></td>
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

    <?php include_once('../components/footer.php'); ?>
</body>

</html>