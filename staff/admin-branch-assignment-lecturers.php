<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Branch Assignment Lecturers</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <form>
                            <div class="table-responsive">
                                <table class="table table-striped assignment-table-info table-scrollable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">S/N</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                                    <label class="form-check-label" for="gridCheck">
                                                        Abiola Syndey
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                abiola.sydney@msbm.org.uk
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                                    <label class="form-check-label" for="gridCheck">
                                                        Academic Support
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                academic.support@msbm.org.uk
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                                    <label class="form-check-label" for="gridCheck">
                                                        Academics Department
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                academics@msbm.org.uk
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h4 class="mt-3"><strong>Branch</strong></h4>
                            <p>Tick the branch you want the module to be displayed.</p>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" id="customCheckboxInline1" name="customCheckboxInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customCheckboxInline1">Lagos</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" id="customCheckboxInline2" name="customCheckboxInline2" class="custom-control-input">
                                <label class="custom-control-label" for="customCheckboxInline2">Abuja</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" id="customCheckboxInline3" name="customCheckboxInline3" class="custom-control-input">
                                <label class="custom-control-label" for="customCheckboxInline3">Accra</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" id="customCheckboxInline4" name="customCheckboxInline4" class="custom-control-input">
                                <label class="custom-control-label" for="customCheckboxInline4">Dubai</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" id="customCheckboxInline5" name="customCheckboxInline5" class="custom-control-input">
                                <label class="custom-control-label" for="customCheckboxInline5">East Nigeria</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" id="customCheckboxInline6" name="customCheckboxInline6" class="custom-control-input">
                                <label class="custom-control-label" for="customCheckboxInline6">Victoria Island</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" id="customCheckboxInline7" name="customCheckboxInline7" class="custom-control-input">
                                <label class="custom-control-label" for="customCheckboxInline7">London</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" id="customCheckboxInline8" name="customCheckboxInline8" class="custom-control-input">
                                <label class="custom-control-label" for="customCheckboxInline8">Sharjah</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" id="customCheckboxInline9" name="customCheckboxInline9" class="custom-control-input">
                                <label class="custom-control-label" for="customCheckboxInline9">Rivers</label>
                            </div>
                            <hr />
                            <div class="form-group text-center">
                                <button class="btn btn-dark">Assign Lecturers to branches</button>
                            </div>
                        </form>
                        <div class="course-module-branch-overview">
                            <h3><strong>Overview</strong></h3>
                            <div class="overview-card">
                                <h5><i class="fa fa-map-marker"></i> <strong>Abuja</strong></h5>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover assignment-table-info">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Academic Support
                                                </td>
                                                <td>
                                                    <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm btn-danger confirm_delete"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Academics Department
                                                </td>
                                                <td>
                                                    <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm btn-danger confirm_delete"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Husnain Mustafa
                                                </td>
                                                <td>
                                                    <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm btn-danger confirm_delete"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="overview-card">
                                <h5><i class="fa fa-map-marker"></i> <strong>Lagos</strong></h5>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover assignment-table-info">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Academic Support
                                                </td>
                                                <td>
                                                    <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm btn-danger confirm_delete"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Academics Department
                                                </td>
                                                <td>
                                                    <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm btn-danger confirm_delete"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Husnain Mustafa
                                                </td>
                                                <td>
                                                    <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm btn-danger confirm_delete"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="overview-card">
                                <h5><i class="fa fa-map-marker"></i> <strong>Dubai</strong></h5>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover assignment-table-info">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Academic Support
                                                </td>
                                                <td>
                                                    <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm btn-danger confirm_delete"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Academics Department
                                                </td>
                                                <td>
                                                    <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm btn-danger confirm_delete"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Husnain Mustafa
                                                </td>
                                                <td>
                                                    <a href="<?php echo ROOT_DIR; ?>" class="btn btn-sm btn-danger confirm_delete"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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