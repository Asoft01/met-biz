<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Duplicate All</strong></h2>
                    <h5 class="text-muted">Master of Business Administration - Classroom (United Kingdom)</h5>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="light-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Programme</label>
                                                    <select class="form-control">
                                                        <option selected hidden disabled>Choose ---</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Course</label>
                                                    <select class="form-control">
                                                        <option selected hidden disabled>Choose ---</option>
                                                        <option>1</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-dark btn-block">Proceed</button>
                                                </div>
                                            </form>
                                            <p><a class="add-color-teal" href="<?php echo ROOT_DIR; ?>staff/admin-automated-emails-from-staff.php"><i class="fa fa-chevron-left"></i> Back to template list</a></p>
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

    <?php include_once('../components/footer.php'); ?>

</body>

</html>