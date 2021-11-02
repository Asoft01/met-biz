<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Manage Email Blasts</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-12">
                    <div class="admin-staff-container">
                        <div class="add-on-top mb-4">
                            <a href="<?php echo ROOT_DIR; ?>staff/admin-create-blast-template.php" class="btn btn-dark"><i class="fa fa-plus"></i> New Email Blast</a>
                            <span><strong>Showing 1 to 3 of 3 Dates</strong></span>
                        </div>
                        <div class="admin-staff-email-table">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Body</th>
                                            <th scope="col">Info</th>
                                            <th scope="col">Start Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Priority</th>
                                            <th scope="col">No Sent</th>
                                            <th scope="col">Attachments</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-hover-effect">
                                            <th scope="row">1</th>
                                            <td>
                                                Multi Test<br />
                                                <div class=" hide-copy"><a href="<?php echo ROOT_DIR; ?>staff/admin-send-test-template.php" class="badge badge-dark text-white"><i class="fa fa-envelope"></i> Send Test</a><br /></div>
                                            </td>
                                            <td>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            </td>
                                            <td>
                                                <small class="add-color-orange"><strong>Modified on 2017-12-05 11:58:08pm by Admin Developer</strong></small>
                                            </td>
                                            <td>
                                                2019-10-22
                                            </td>
                                            <td>
                                                Pause
                                            </td>
                                            <td>
                                                0
                                            </td>
                                            <td>
                                                5
                                            </td>
                                            <td><a href="<?php echo ROOT_DIR; ?>staff/admin-template-attachments.php" class="badge badge-dark text-white"><i class="fa fa-file"></i> Attachments (2)</a></td>
                                            <td><a href="<?php echo ROOT_DIR; ?>staff/admin-edit-blast-template.php" class="btn btn-info btn-sm text-white"><i class="fa fa-edit"></i> Edit</a> <a href="<?php echo ROOT_DIR; ?>staff/admin-duplicate-blast-template.php" class="btn btn-sm btn-light"><i class="fa fa-clone"></i> Duplicate</a> <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pause"></i> Pause</a> <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a></td>
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