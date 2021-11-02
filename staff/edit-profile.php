<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Edit Profile</strong></h2>
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
                                            <form action="<?php echo ROOT_DIR; ?>staff/view-profile.php">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" value="Mary Ajayi Oluwasegun" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Email Address</label>
                                                    <input type="text" class="form-control" value="marketer@hello.com" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" value="maryajayi" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <input type="text" class="form-control" value="Female" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" value="Nigeria" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" value="0708545523" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Resident Address</label>
                                                    <input type="text" class="form-control" value="54B Adeniyi Jones, Ikeja" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Permanent Address</label>
                                                    <input type="text" class="form-control" value="54B Adeniyi Jones, Ikeja" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <input type="text" class="form-control" value="5/7/1984" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Martial Status</label>
                                                    <input type="text" class="form-control" value="Single" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Spouse</label>
                                                    <input type="text" class="form-control" value="John Ajayi Oluwasegun" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Religion</label>
                                                    <input type="text" class="form-control" value="Muslim" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Language</label>
                                                    <input type="text" class="form-control" value="English" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Next of Kin</label>
                                                    <input type="text" class="form-control" value="John Ajayi Oluwasegun" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Next of Kin</label>
                                                    <input type="text" class="form-control" value="John Ajayi Oluwasegun" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Next of Kin Address</label>
                                                    <input type="text" class="form-control" value="54B Adeniyi Jones, Ikeja" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Next of Kin Phone</label>
                                                    <input type="text" class="form-control" value="08074467342" />
                                                </div>
                                                <div class="form-group">
                                                    <button href="<?php echo ROOT_DIR; ?>staff/edit-profile.php" class="btn btn-danger btn-block">Save Changes</button>
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