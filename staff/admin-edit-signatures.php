<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Edit Signature</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <div class='row'>
                            <div class="col-lg-10 mx-auto">
                                <div class="light-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div>
                                                Fields with <sup class="required text-bold">*</sup> are required.
                                            </div>
                                            <hr />
                                            <form>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Country</label>
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ...</option>
                                                        <option>United Kingdom</option>
                                                        <option>United Arab Emirates</option>
                                                        <option>Nigeria</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Content</label>
                                                    <textarea rows="15px" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-dark btn-block">Save Changes</button>
                                                </div>
                                            </form>
                                            <p class="text-center">
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-manage-signatures.php"><i class="fa fa-chevron-left"></i> Back to Signatures</a>
                                            </p>
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