<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Attachment</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <div class="attach-table mb-4">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Programme</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">Template Type</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-hover-effect">
                                            <th scope="row">1</th>
                                            <td>
                                                Masters of Business Administration - Classroom
                                            </td>
                                            <td>United Kingdom</td>
                                            <td><span class="badge badge-dark">Email</span> New Client (First Contract)</td>
                                            <td>Active</td>
                                        </tr>
                                        <tr class="table-hover-effect">
                                            <th scope="row">2</th>
                                            <td>
                                                Masters of Business Administration - Classroom
                                            </td>
                                            <td>United Kingdom</td>
                                            <td><span class="badge badge-dark">Email</span> New Client (First Contract)</td>
                                            <td>Active</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="upload-files-sect mb-4">
                            <h4><strong>Attach to template</strong></h4>
                            <div class="light-card">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="<?php echo ROOT_DIR; ?>" method="post">
                                            <div class="form-group">
                                                <label>Choose Attachment</label>
                                                <select class="form-control">
                                                    <option hidden disabled selected>Choose ---</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-dark">Go</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="upload-files-sect mb-4">
                            <h4><strong>Attachments for this template</strong></h4>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>S/N</th>
                                            <th>File Name</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td title="">1</td>
                                            <td title=""><a href="#" class="add-color-teal">smpt_bg_metropolitan_school_of_business_and_management.jpg</a></td>
                                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                                            <td>2020-10-10</td>
                                            <td title=""><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td title="">2</td>
                                            <td title=""><a href="#" class="add-color-teal">smpt_bg_metropolitan_school_of_business_and_management.jpg</a></td>
                                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</td>
                                            <td>2020-10-10</td>
                                            <td title=""><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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

    <?php include_once('../components/footer.php'); ?>