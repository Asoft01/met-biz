<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-head.php'); ?>

<body>

<?php include "../components/admin-staff-navbar.php"; ?>

<div class="lecture-v-portal">
    <div class="d-flex" id="wrapper">

       <?php include "../components/sidebar.inc.php"; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="pb-5">
            <div class="mt-5">
                <div class="container">
                    <div class="course-details-sect">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2><strong>Course Details</strong></h2>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <p class="make-bold text-muted">Create modules, notes, quizzes, upload SCORM in this course.</p>
                                        <a href="<?php echo ROOT_DIR; ?>staff/add-module.php" class="btn btn-purple btn-bord-radius btn-block">View/Edit course content <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <p class="make-bold text-muted">Manage the thumbnail, category, duration, fees etc</p>
                                        <a href="<?php echo ROOT_DIR; ?>staff/programme-details.php" class="btn btn-purple btn-bord-radius btn-block">Edit course parameters <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>

                                <div>
                                    <h2><strong>Edit Programme</strong></h2>
                                    <div class="light-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <p>Fields with <sup class="required text-bold">*</sup> are required. </p>
                                                <form action="<?php echo ROOT_DIR; ?>staff/start-course.php" method="post">
                                                    <div class="form-group">
                                                        <label><sup class="required text-bold">*</sup> Type</label>
                                                        <select name="prog_type" id="prog_type" class="form-control">
                                                            <option value="" disabled hidden selected>Choose ---</option>
                                                            <option value="advanced professional certificate">Advanced Professional Certificate</option>
                                                            <option value="postgraduate diploma">Postgraduate Diploma</option>
                                                            <option value="postgraduate programme">Postgraduate Programme</option>
                                                            <option value="professional course">Professional Course</option>
                                                            <option value="semp classroom">Semp Classroom</option>
                                                            <option value="semp online">Semp Online</option>
                                                            <option value="undergraduate programme">Undergraduate Programme</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><sup class="required text-bold">*</sup> Back-end Name</label>
                                                        <input type="text" class="form-control" placeholder="MBA Online" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label><sup class="required text-bold">*</sup> Certificate Name</label>
                                                        <input type="text" class="form-control" placeholder="Master of Business Administration" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label><sup class="required text-bold">*</sup> Certificate Type</label>
                                                        <select name="" class="form-control">
                                                            <option value="" disabled hidden selected>Choose ---</option>
                                                            <option value="none">
                                                                None
                                                            </option>
                                                            <option value="semp">
                                                                SEMP
                                                            </option>
                                                            <option value="professional">
                                                                Professional Certificate
                                                            </option>
                                                            <option value="advanced professional">
                                                                Advanced Professional Certificate
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-purple btn-bord-radius btn-block">Save Changes</button>
                                                    </div>
                                                </form>
                                                <!-- <p><a class="add-color-teal" href="<?php echo ROOT_DIR; ?>staff/admin-manage-programmes.php"><i class="fa fa-chevron-left"></i> Back to programme list</a></p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>

<?php include_once('../components/footer.php'); ?>

</body>

</html>