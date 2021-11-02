<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Module Component</strong></h2>
                    <h5 class="text-muted">NEW FILES</h5>
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
                                                <p class="text-danger">*Only Microsoft Word or PDF documents</p>
                                                <form action="<?php echo ROOT_DIR; ?>staff/admin-module-component-files.php">
                                                    <div class="form-group">
                                                        <label><sup class="required text-bold">*</sup> Title</label>
                                                        <input type="text" class="form-control" placeholder="How to manage people" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label><sup class="required text-bold">*</sup> Upload File</label>
                                                        <input type="file" class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea class="form-control" rows="10"></textarea>
                                                    </div>
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" id="Check1">
                                                        <label class="form-check-label" for="Check1">Make Pre-requisite</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-purple btn-bord-radius btn-block">Save Component</button>
                                                    </div>
                                                </form>
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