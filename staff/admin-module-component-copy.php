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
                    <h5 class="text-muted">International Postgraduate Diploma In Business and Management (Level 7)</h5>
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
                                                <h4>Duplicate from programme</h4>
                                                <form>
                                                    <div class="form-group">
                                                        <label>Programme</label>
                                                        <select class="form-control">
                                                            <option selected hidden disabled>Choose ...</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-dark">Next</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-5"></div>
                                    <div class="light-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4>Duplicate from Module</h4>
                                                <form>
                                                    <div class="form-group">
                                                        <label>Module Name</label>
                                                        <select class="form-control">
                                                            <option selected hidden disabled>Choose ...</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-dark">Next</button>
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