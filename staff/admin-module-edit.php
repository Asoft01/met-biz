<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Edit Module</strong></h2>
                    <h5 class="text-muted">Advanced Professional Certificate In Applied Corporate and Business Law</h5>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-12">
                    <div class="admin-staff-container">
                        <div class="upload-course-material">
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <div class="light-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <p>Fields with <sup class="required text-bold">*</sup> are required. </p>
                                                <form action="<?php echo ROOT_DIR; ?>staff/admin-module-component-files.php">
                                                    <div class="form-group">
                                                        <label><sup class="required text-bold">*</sup> Name</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label><sup class="required text-bold">*</sup> Code</label>
                                                        <input type="text" class="form-control" placeholder="ASDERT" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea class="form-control" rows="10"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-dark">Save Changes</button>
                                                    </div>
                                                </form>
                                                <p><a class="add-color-teal" href="<?php echo ROOT_DIR; ?>staff/admin-manage-programmes-modules.php"><i class="fa fa-chevron-left"></i> Back to Module list</a></p>
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