<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Module Materials</strong></h2>
                    <h5 class="text-muted">New File</h5>
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
                                                <form>
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input type="text" class='form-control' />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Upload File</label>
                                                        <input type="file" class='form-control' />
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-dark">Save Component</button>
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