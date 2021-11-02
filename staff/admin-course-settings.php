<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Course Settings</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Programme Name</th>
                                        <th>Sessions</th>
                                        <th>No of Students</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td title="">1</td>
                                        <td title="">International Postgraduate Diploma in Business and Management (Level 7)</td>
                                        <td title="">Jul 30th, 2020 <em style="color:#ccc">→ Jan 30th, 2021</em></td>
                                        <td title="">7</td>
                                        <td title="">
                                            <a href="<?php echo ROOT_DIR; ?>staff/admin-programme-lecture-url.php" class="btn btn-danger btn-sm text-white" target="_blank">Edit Lecture URL</a>
                                            <a href="<?php echo ROOT_DIR; ?>staff/admin-course-module.php" class="btn btn-info btn-sm text-white" target="_blank">Manage Modules</a>
                                            <a href="<?php echo ROOT_DIR; ?>staff/admin-course-assignment.php" class="btn btn-secondary btn-sm text-white" target="_blank">Manage Assignments</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td title="">1</td>
                                        <td title="">International Postgraduate Diploma in Business and Management (Level 7)</td>
                                        <td title="">Jul 30th, 2020 <em style="color:#ccc">→ Jan 30th, 2021</em></td>
                                        <td title="">3</td>
                                        <td title="">
                                            <a href="<?php echo ROOT_DIR; ?>staff/admin-programme-lecture-url.php" class="btn btn-danger btn-sm text-white" target="_blank">Edit Lecture URL</a>
                                            <a href="<?php echo ROOT_DIR; ?>staff/admin-course-module.php" class="btn btn-info btn-sm text-white" target="_blank">Manage Modules</a>
                                            <a href="<?php echo ROOT_DIR; ?>staff/admin-course-assignment.php" class="btn btn-secondary btn-sm text-white" target="_blank">Manage Assignments</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mt-4">
                            <a href="" class="btn btn-dark">Add Course Session</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('../components/footer.php'); ?>

</body>

</html>