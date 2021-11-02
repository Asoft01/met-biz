<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Edit Programme</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-12">
                    <div class="admin-staff-container">
                        <div class="admin-staff-email-table">
                            <div class="add-new-prog">
                                <div class="row">
                                    <div class="col-lg-10 mx-auto">
                                        <div class="light-card">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p>Fields with <sup class="required text-bold">*</sup> are required. </p>
                                                    <form action="<?php echo ROOT_DIR; ?>staff/admin-programme-new.php" method="post">
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
                                                            <button class="btn btn-dark btn-block">Create Programme</button>
                                                        </div>
                                                    </form>
                                                    <p><a class="add-color-teal" href="<?php echo ROOT_DIR; ?>staff/admin-manage-programmes.php"><i class="fa fa-chevron-left"></i> Back to programme list</a></p>
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
        </div>
    </div>

    <?php include_once('../components/footer.php'); ?>