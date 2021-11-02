<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Programme List</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-12">
                    <div class="admin-staff-container">
                        <div class="add-on-top mb-4">
                            <a href="<?php echo ROOT_DIR; ?>staff/admin-programme-new.php" class="btn btn-dark">New Programme</a>
                        </div>
                        <div class="admin-staff-email-table">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Programme Type</th>
                                            <th scope="col">Programme Name</th>
                                            <th scope="col">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-hover-effect">
                                            <th scope="row">1</th>
                                            <td>
                                                ADVANCED PROFESSIONAL CERTIFICATE
                                            </td>
                                            <td><span class="make-bold">Advanced Professional Certificate in Applied Corporate and Business Law</span><br /><span class="text-muted">Applied Corporate and Business Law</span></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-play"></i> Suspend</a>
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-programme-details.php" class="btn btn-secondary btn-sm">Website Details</a>
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-programme-edit.php" class="btn btn-secondary btn-sm">Backend Details</a>
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-manage-programmes-modules.php" class="btn btn-secondary btn-sm">Modules(3)</a>
                                                <a href="" class="btn btn-secondary btn-sm">Sessions</a>
                                            </td>
                                        </tr>
                                        <tr class="table-hover-effect">
                                            <th scope="row">2</th>
                                            <td>
                                                ADVANCED PROFESSIONAL CERTIFICATE
                                            </td>
                                            <td><span class="make-bold">Advanced Professional Certificate in Business Administration</span><br /><span class="text-muted">Business Administration</span></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-play"></i> Suspend</a>
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-programme-details.php" class="btn btn-secondary btn-sm">Website Details</a>
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-programme-edit.php" class="btn btn-secondary btn-sm">Backend Details</a>
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-manage-programmes-modules.php" class="btn btn-secondary btn-sm">Modules(3)</a>
                                                <a href="" class="btn btn-secondary btn-sm">Sessions</a>
                                            </td>
                                        </tr>
                                        <tr class="table-hover-effect">
                                            <th scope="row">3</th>
                                            <td>
                                                ADVANCED PROFESSIONAL CERTIFICATE
                                            </td>
                                            <td><span class="make-bold">Advanced Professional Certificate in Business Management</span><br /><span class="text-muted">Business Management</span></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-play"></i> Suspend</a>
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-programme-details.php" class="btn btn-secondary btn-sm">Website Details</a>
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-programme-edit.php" class="btn btn-secondary btn-sm">Backend Details</a>
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-manage-programmes-modules.php" class="btn btn-secondary btn-sm">Modules(3)</a>
                                                <a href="" class="btn btn-secondary btn-sm">Sessions</a>
                                            </td>
                                        </tr>
                                        <tr class="table-hover-effect">
                                            <th scope="row">4</th>
                                            <td>
                                                ADVANCED PROFESSIONAL CERTIFICATE
                                            </td>
                                            <td><span class="make-bold">Advanced Professional Certificate in Business Research Methods</span><br /><span class="text-muted">Business Research Methods</span></td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm"><i class="fa fa-play"></i> Suspend</a>
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-programme-details.php" class="btn btn-secondary btn-sm">Website Details</a>
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-programme-edit.php" class="btn btn-secondary btn-sm">Backend Details</a>
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-manage-programmes-modules.php" class="btn btn-secondary btn-sm">Modules(3)</a>
                                                <a href="" class="btn btn-secondary btn-sm">Sessions</a>
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

    <?php include_once('../components/footer.php'); ?>

</body>

</html>