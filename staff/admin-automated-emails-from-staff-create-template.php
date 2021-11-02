<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Create Template</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <div class="light-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="<?php echo ROOT_DIR; ?>staff/admin-automated-emails-from-staff.php" method="post">
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Study Center</label>
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ...</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Programmes</label>
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ...</option>
                                                        <option>Masters of Business Administration - Classroom</option>
                                                        <option>Masters of Business Administration - Online</option>
                                                        <option>3</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Subject</label>
                                                    <input type="text" class="form-control" placeholder="Subject ..." />
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Body</label>
                                                    <textarea class="form-control" rows="10"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Add Signature</label>
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ...</option>
                                                        <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Days Interval</label>
                                                    <input type="number" min="0" class="form-control" placeholder="Days Interval ..." value="0" />
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> No of Times</label>
                                                    <input type="number" min="0" class="form-control" placeholder="No of Times ..." value="0" />
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Send Type</label>
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ...</option>
                                                        <option>Email</option>
                                                        <option>---</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Timing</label>
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ...</option>
                                                        <option>Until Programme Starts</option>
                                                        <option>--</option>
                                                        <option>--</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Timing Trigger</label>
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ...</option>
                                                        <option>Instant</option>
                                                        <option>--</option>
                                                        <option>--</option>
                                                        <option>--</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Stage</label>
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ...</option>
                                                        <option>New Client (First Contact)</option>
                                                        <option>--</option>
                                                        <option>--</option>
                                                        <option>--</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Priority</label>
                                                    <input type="text" class="form-control" placeholder="Priority" min="1" max="5" />
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-dark btn-block" type="submit">Save Template</button>
                                                </div>
                                            </form>
                                            <p class="text-center">
                                                <a href="<?php echo ROOT_DIR; ?>staff/admin-automated-emails-from-staff.php">Back to Template List</a>
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