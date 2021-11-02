<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
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
                                        <h5 class="card-header">Auto-fill Client Info</h5>
                                        <div class="card-body">
                                            <form action="<?php echo ROOT_DIR; ?>" method="post">
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup>Email Address</label>
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup>Programme Interest</label>
                                                    <select class="form-control">
                                                        <option selected hidden disabled>---</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup>Programme Date</label>
                                                    <input type="date" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup>Study Center</label>
                                                    <select class="form-control">
                                                        <option selected hidden disabled>---</option>
                                                        <option>United Kingdom</option>
                                                        <option>United Arab Emirates</option>
                                                        <option>Nigeria</option>
                                                        <option>Ghana</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup>Branch</label>
                                                    <select class="form-control">
                                                        <option selected hidden disabled>---</option>
                                                        <option>United Kingdom</option>
                                                        <option>United Arab Emirates</option>
                                                        <option>Nigeria</option>
                                                        <option>Ghana</option>
                                                    </select>
                                                </div>
                                                <div class="form-group" style="background-color:#7bb33d;padding:15px 5px;color:#fff;border-radius:8px">
                                                    <label><sup class="required text-bold">*</sup> <em>Assisted Status</em></label>
                                                    <select name="assisted_status" id="assisted_status" curr-stage="" required="" class="form-control">
                                                        <option value=""></option>
                                                        <option value="19">**New Client (First Contact)</option>
                                                        <option value="2">New Client (Follow-up)</option>
                                                        <option value="16">Awaiting Application Fee</option>
                                                        <option value="18">Awaiting Filled Form &amp; Documents</option>
                                                        <option value="3">Form Filled</option>
                                                        <option value="17">Admission Granted</option>
                                                        <option value="4">Not Interested Now But In Future Date</option>
                                                        <option value="10">Not Interested Anymore</option>
                                                        <option value="11">Paid</option>
                                                        <option value="21">Current Student</option>
                                                        <option value="23">Completed without Certificate</option>
                                                        <option value="14">Attended Programme (Alumni)</option>
                                                        <option value="24">Deferred/Suspended</option>
                                                        <option value="22">Dropped Out</option>
                                                        <option value="15">Paid But Didn't Attend</option>
                                                        <option value="1">Old Client</option>
                                                        <option value="20">Staff</option>
                                                    </select>
                                                    <small>This will determine what level of auto-assistance will be provided for this client.</small>
                                                </div>
                                                <hr />
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-dark btn-block">Perform Auto-fill</button>
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