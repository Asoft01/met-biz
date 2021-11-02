<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Duplicate blast template</strong></h2>
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
                                            <form>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Subject</label>
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Body</label>
                                                    <textarea class="form-control" rows="15"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Signature</label>
                                                    <select class="form-control">
                                                        <option disabled hidden selected>Choose ...</option>
                                                        <option>London</option>
                                                        <option>Nigeria</option>
                                                        <option>Dubai</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Client Nationality</label>
                                                    <select class="custom-select" multiple size="6">
                                                        <option>Nigeria</option>
                                                        <option value="1">United Arab Emirates</option>
                                                        <option value="2">United Kingdom</option>
                                                        <option value="3">Ghana</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Client Gender</label>
                                                    <select class="custom-select" multiple>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Client Position/Title</label>
                                                    <select class="custom-select" multiple size="6">
                                                        <option>Others</option>
                                                        <option>Officer</option>
                                                        <option>Middle Manager</option>
                                                        <option>Executive Manager</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Client Study Center</label>
                                                    <select class="custom-select" multiple size="6">
                                                        <option>Lagos</option>
                                                        <option value="1">Accra</option>
                                                        <option value="2">Ghana</option>
                                                        <option value="3">London</option>
                                                        <option>Dubai</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Client Branch</label>
                                                    <select class="custom-select" multiple size="6">
                                                        <option>Nigeria</option>
                                                        <option value="1">United Arab Emirates</option>
                                                        <option value="2">United Kingdom</option>
                                                        <option value="3">Ghana</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Client Programmme</label>
                                                    <select name="programme" id="programme" class="custom-select" size="10" multiple>
                                                        <option value=""></option>
                                                        <optgroup label="POSTGRADUATE PROGRAMMES">
                                                            <option value="49">Master of Business Administration - Classroom</option>
                                                            <option value="126">Master of Business Administration - Online</option>
                                                            <option value="153">MSc Accounting &amp; Finance - Online</option>
                                                            <option value="155">MA Human Resource Management - Online</option>
                                                            <option value="158">Postgraduate Certificate Module in Marketing Strategies (QCF)</option>
                                                            <option value="560">Postgraduate Certificate Module in Advanced Business Research Methods (QCF)</option>
                                                            <option value="567">MBA Pathway Degree (Level 7 Diploma in Strategic Management &amp; Leadership)</option>
                                                            <option value="568">MSc Accounting &amp; Finance Pathway Degree (Level 7 Diploma in Accounting &amp; Finance) - Online</option>
                                                            <option value="569">MA Human Resource Management Degree Pathway (Level 7 Diploma in Human Resource Management)</option>
                                                        </optgroup>
                                                        <optgroup label="UNDERGRADUATE PROGRAMMES">
                                                            <option value="51">BBA. Business Administration - Classroom</option>
                                                            <option value="52">BSc. Business Administration - Classroom</option>
                                                            <option value="124">BA Management - Online</option>
                                                            <option value="125">BSc Business and Management - Online</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Client Programme Date</label>
                                                    <select class="custom-select" multiple size="6">
                                                        <option>2020-01-01</option>
                                                        <option>2020-02-01</option>
                                                        <option>2020-03-01</option>
                                                        <option>2020-04-01</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Client Source</label>
                                                    <select class="custom-select" multiple size="6">
                                                        <option>Newspaper - Other</option>
                                                        <option>Radio</option>
                                                        <option>Online Google</option>
                                                        <option>Online Yahoo</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Client Stage</label>
                                                    <select class="custom-select" multiple size="6">
                                                        <option>New Client (Follow-up)</option>
                                                        <option>Awaiting Application Fee</option>
                                                        <option>Form Filled</option>
                                                        <option>Admission Granted</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Year Enrolled</label>
                                                    <select class="custom-select" multiple size="6">
                                                        <option>2020</option>
                                                        <option>2019</option>
                                                        <option>2018</option>
                                                        <option>2017</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Enrolment Session</label>
                                                    <select class="custom-select" multiple size="6">
                                                        <option>January</option>
                                                        <option>February</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Year Finished</label>
                                                    <select class="custom-select" multiple size="6">
                                                        <option>2020</option>
                                                        <option>2019</option>
                                                        <option>2018</option>
                                                        <option>2017</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Top up Status</label>
                                                    <select class="custom-select" multiple size="6">
                                                        <option>No Topup Needed</option>
                                                        <option>Awaiting Topup</option>
                                                        <option>Completed Topup</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Top up Status</label>
                                                    <select class="custom-select" multiple size="6">
                                                        <option>Admin Developer</option>
                                                        <option>Johnson Amadi</option>
                                                        <option>Fredrick Leo</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Start Date</label>
                                                    <input type="date" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label> End Date</label>
                                                    <input type="date" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Priority</label>
                                                    <input type="text" class="form-control" placeholder="Priority" min="1" max="5" />
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-dark btn-block">Save Changes</button>
                                                </div>
                                            </form>
                                            <p class="text-center">
                                                <a href="<?php echo ROOT_DIR; ?>staff/"><i class="fa fa-chevron-left"></i> Back to Template List</a>
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