<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Manage template attachment</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <div class="upload-files-sect mb-4">
                            <div class="light-card">
                                <div class="card">
                                    <div class="card-body">
                                        <p><sup class="required text-bold">*</sup> Only JPG, GIF, PNG, Microsoft Word or PDF Documents</p>
                                        <form action="<?php echo ROOT_DIR; ?>admin-manage-template-attachment.php" method="post">
                                            <div class="form-group">
                                                <label>New File</label>
                                                <input type="file" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea class='form-control' rows="5"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="sumit" class="btn btn-dark">Save File</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    <?php include_once('../components/footer.php'); ?>

</body>

</html>