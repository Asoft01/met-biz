<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-head.php'); ?>

<body>

<?php include "../components/admin-staff-navbar.php"; ?>

<div class="lecture-v-portal">
    <div class="d-flex" id="wrapper">

       <?php include "../components/sidebar.inc.php"; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="pb-5">
            <div class="mt-5">
                <div class="container">
                    <div class="add-new-prog">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <h2><strong>Programme Details</strong></h2>
                                <div class="light-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <p>Fields with <sup class="required text-bold">*</sup> are required. </p>
                                            <form action="<?php echo ROOT_DIR; ?>staff/admin-programme-new.php" method="post">
                                                <div class="form-group">
                                                    <label>Backend Programme</label>
                                                    <input type="text" class="form-control" placeholder="Advanced Professional Certificate in Business Management">
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Name</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Course Code</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Partner University</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Type</label>
                                                    <select name="prog_type" id="prog_type" class="form-control">
                                                        <option value="" disabled hidden selected>Choose ---</option>
                                                        <option value="advanced professional certificate">Advanced Professional Certificate</option>
                                                        <option value="postgraduate diploma">Postgraduate Diploma</option>
                                                        <option value="postgraduate programme">Postgraduate Programme</option>
                                                        <option value="professional course">Professional Course</option>
                                                        <option value="semp classroom">Semp Classroom</option>
                                                        <option value="semp online">Semp Online</option>
                                                        <option value="undergraduate programme">Undergraduate Programme</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Level</label>
                                                    <select name="prog_type" id="prog_type" class="form-control">
                                                        <option value="" disabled hidden selected>Choose ---</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Difficulty</label>
                                                    <select name="prog_type" id="prog_type" class="form-control">
                                                        <option value="" disabled hidden selected>Choose ---</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Credit</label>
                                                    <select name="prog_type" id="prog_type" class="form-control">
                                                        <option value="" disabled hidden selected>Choose ---</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Effort</label>
                                                    <select name="prog_type" id="prog_type" class="form-control">
                                                        <option value="" disabled hidden selected>Choose ---</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Duration</label>
                                                    <select name="prog_type" id="prog_type" class="form-control">
                                                        <option value="" disabled hidden selected>Choose ---</option>
                                                    </select>
                                                </div>
                                                <hr />
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Category</label>
                                                    <select name="prog_type" id="prog_type" class="form-control">
                                                        <option value="" disabled hidden selected>Choose ---</option>
                                                    </select>
                                                </div>
                                                <hr />
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Currency</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Initial Fee</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Discounted Fee</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Monthly Instalment</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <hr />
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Delivery Format</label><br />
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <label class="form-check-label" for="inlineCheckbox1">Classroom</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                        <label class="form-check-label" for="inlineCheckbox2">Online</label>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Session</label>
                                                    <div class="split-column-3">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_sessions" name="wp_programme_sessions[]" value="417"> January </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_sessions" name="wp_programme_sessions[]" value="480"> February </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_sessions" name="wp_programme_sessions[]" value="481"> March </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_sessions" name="wp_programme_sessions[]" value="418"> April </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_sessions" name="wp_programme_sessions[]" value="482"> May </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_sessions" name="wp_programme_sessions[]" value="483"> June </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_sessions" name="wp_programme_sessions[]" value="419"> July </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_sessions" name="wp_programme_sessions[]" value="484"> August </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_sessions" name="wp_programme_sessions[]" value="485"> September </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_sessions" name="wp_programme_sessions[]" value="420"> October </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_sessions" name="wp_programme_sessions[]" value="486"> November </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_sessions" name="wp_programme_sessions[]" value="487"> December </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_sessions" name="wp_programme_sessions[]" value="421"> Anytime </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Subject</label>
                                                    <div class="split-column-2">

                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_subjects" name="wp_programme_subjects[]" value="510"> Business Management </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_subjects" name="wp_programme_subjects[]" value="511"> Health And Psychology </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_subjects" name="wp_programme_subjects[]" value="512"> Business Law </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_subjects" name="wp_programme_subjects[]" value="513"> Information Technology </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_subjects" name="wp_programme_subjects[]" value="514"> Personal Development </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_subjects" name="wp_programme_subjects[]" value="515"> Teaching And Education </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_subjects" name="wp_programme_subjects[]" value="516"> Health And Safety </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_subjects" name="wp_programme_subjects[]" value="517"> Finance And Accounting </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_subjects" name="wp_programme_subjects[]" value="518"> Office Productivity </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_subjects" name="wp_programme_subjects[]" value="519"> Sales And Marketing </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_subjects" name="wp_programme_subjects[]" value="520"> Leadership And Entrepreneurship </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_subjects" name="wp_programme_subjects[]" value="521"> Human Resources </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_subjects" name="wp_programme_subjects[]" value="523"> Project &amp; Operations Management </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="programme_subjects" name="wp_programme_subjects[]" value="524"> Business Research </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="form-group">
                                                    <label>Expected Uploads</label>
                                                    <div class="split-column-2">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="student_uploads" name="wp_student_uploads[]" value="565"> Scanned Copy Of Level 7 (And Transcript If Any) </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="student_uploads" name="wp_student_uploads[]" value="564"> Academics Documents / Professional Certificates </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="student_uploads" name="wp_student_uploads[]" value="566"> Passport Data Page </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="student_uploads" name="wp_student_uploads[]" value="570"> Passport Size Photo </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="student_uploads" name="wp_student_uploads[]" value="571"> Two References </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="student_uploads" name="wp_student_uploads[]" value="572"> Personal Statement (500 Words) </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" class="student_uploads" name="wp_student_uploads[]" value="573"> Details Of Work Experience </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Excerpt</label>
                                                    <textarea class="form-control" rows="7"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Thumbnail</label>
                                                    <input type="file" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label><sup class="required text-bold">*</sup> Banner Image</label>
                                                    <input type="file" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Youtube Video Url</label>
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <hr />
                                                <div class="form-group">
                                                    <label>Parent Programme</label>
                                                    <select class="form-control">
                                                        <option selected disabled hidden>Choose ---</option>
                                                        <option></option>
                                                    </select>
                                                </div>
                                                <hr />
                                                <div class="form-group">
                                                    <label>Overview</label>
                                                    <textarea class="form-control" rows="7"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Course Details</label>
                                                    <textarea class="form-control" rows="7"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Accreditation</label>
                                                    <textarea class="form-control" rows="7"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>University Progression</label>
                                                    <textarea class="form-control" rows="7"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>UK University Certificate</label>
                                                    <textarea class="form-control" rows="7"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Entry Requirements</label>
                                                    <textarea class="form-control" rows="7"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Workshops</label>
                                                    <textarea class="form-control" rows="7"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Visa Requirement</label>
                                                    <textarea class="form-control" rows="7"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-purple btn-bord-radius btn-block">Add Programme</button>
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
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>

<?php include_once('../components/footer.php'); ?>

</body>

</html>