<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Add Staff</strong></h2>
                    <h5 class="text-muted">Staff Portal</h5>
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
                                            <form action="<?php echo ROOT_DIR; ?>staff/admin-add-staff.php" method="post">
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Title</label>
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ...</option>
                                                        <option>Mr</option>
                                                        <option>Mrs</option>
                                                        <option>Miss</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> First Name</label>
                                                    <input type="text" class="form-control" placeholder="First Name ..." />
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name ..." />
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Account Type</label>
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ...</option>
                                                        <option>Admin</option>
                                                        <option>Sub-Admin</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Username</label>
                                                    <input type="text" class="form-control" placeholder="Username ..." />
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Email Address</label>
                                                    <input type="text" class="form-control" placeholder="Email Address ..." />
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Password</label>
                                                    <input type="password" class="form-control" placeholder="At least 8 characters" />
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Gender</label><br />
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="malegender" name="gender" class="custom-control-input">
                                                        <label class="custom-control-label" for="malegender">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="femalegender" name="gender" class="custom-control-input">
                                                        <label class="custom-control-label" for="femalegender">Female</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Country</label>
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ...</option>
                                                        <option>Nigeria</option>
                                                        <option>United Arab Emirates</option>
                                                        <option>United Kingdom</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Branch</label>
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ...</option>
                                                        <option>Lagos</option>
                                                        <option>Eastern Nigeria</option>
                                                        <option>Victoria Island</option>
                                                        <option>Port Harcourt</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Phone Number</label>
                                                    <input type="text" class="form-control" placeholder="Phone Number" />
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Job Title</label>
                                                    <input type="text" class="form-control" placeholder="Job Title" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Residential Address</label>
                                                    <input type="text" class="form-control" placeholder="Residential Address" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Permanent Address</label>
                                                    <input type="text" class="form-control" placeholder="Permanent Address" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <input type="date" class="form-control" placeholder="YYYY-MM-DD" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Martial Status</label>
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ...</option>
                                                        <option>Single</option>
                                                        <option>Married</option>
                                                        <option>Divorced</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Spouse Name</label>
                                                    <input type="text" class="form-control" placeholder="Spouse Name ..." />
                                                </div>
                                                <div class="form-group">
                                                    <label>Religion</label>
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ...</option>
                                                        <option>Christian</option>
                                                        <option>Muslim</option>
                                                        <option>Others</option>
                                                        <option>None</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Language</label>
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ...</option>
                                                        <option>English</option>
                                                        <option>French</option>
                                                        <option>Spanish</option>
                                                        <option>Arabic</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Next of Kin Name</label>
                                                    <input type="text" class="form-control" placeholder="Next of Kin Name" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Next of Kin Address</label>
                                                    <input type="text" class="form-control" placeholder="Next of Kin Address" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Next of Kin Phone Number</label>
                                                    <input type="text" class="form-control" placeholder="Next of Kin Phone Number" />
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-dark btn-block" type="submit">Create User</button>
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

</body>

</html>