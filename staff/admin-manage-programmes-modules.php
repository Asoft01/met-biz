<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Module List</strong></h2>
                    <h5 class="text-muted">Advanced Professional Certificate In Applied Corporate and Business Law</h5>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-12">
                    <div class="admin-staff-container">
                        <div class="add-on-top mb-4">
                            <a href="<?php echo ROOT_DIR; ?>staff/admin-module-new.php" class="btn btn-dark">New Module</a>
                        </div>
                        <div class="admin-staff-email-table">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Module Name</th>
                                            <th scope="col">Module Code</th>
                                            <th scope="col">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-hover-effect">
                                            <th scope="row">1</th>
                                            <td>
                                                APPLIED CORPORATE AND BUSINESS LAW
                                            </td>
                                            <td><span class="make-bold">APCCACBL</td>
                                            <td>
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-module-edit.php" class="btn btn-info btn-sm"> Edit Module</a>
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-module-component.php" class="btn btn-secondary btn-sm">Components (7)</a>
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-module-material.php" class="btn btn-secondary btn-sm">Materials (3)</a>
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-module-assignment.php" class="btn btn-secondary btn-sm">Assignment(3)</a>
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