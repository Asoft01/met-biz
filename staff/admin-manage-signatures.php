<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Manage Signatures</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <div class="add-on-top mb-4">
                            <a href="<?php echo ROOT_DIR; ?>staff/admin-add-signature.php" class="btn btn-dark"><i class="fa fa-plus"></i> New Signature</a>
                            <span><strong>Showing 1 to 3 of 3 Signatures</strong></span>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Country</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td title="">1</td>
                                        <td title="">United Arab Emirates</td>
                                        <td title=""><a href="<?php echo ROOT_DIR; ?>staff/admin-edit-signatures.php" class="btn btn-dark">Edit</a></td>
                                    </tr>
                                    <tr>
                                        <td title="">2</td>
                                        <td title="">United Kingdom</td>
                                        <td title=""><a href="<?php echo ROOT_DIR; ?>staff/admin-edit-signatures.php" class="btn btn-dark">Edit</a></td>
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