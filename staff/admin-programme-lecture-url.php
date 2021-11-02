<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Lecture URL</strong></h2>
                    <h5 class="text-muted">International Postgraduate Diploma in Business and Management (Level 7) (Jul 30th, 2020)</h5>
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
                                    <div class="card mt-5">
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group">
                                                    <label>Edit URL</label>
                                                    <input type="text" placeholder="https://" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-dark btn-block">Save Changes</button>
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

    <?php include_once('../components/footer.php'); ?>