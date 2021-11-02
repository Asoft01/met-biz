<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Module Materials</strong></h2>
                    <h5 class="text-muted">Entrepreneurship and Leadership Development (ELD)</h5>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-12">
                    <div class="admin-staff-container">
                        <div class="add-on-top mb-4">
                            <a href="<?php echo ROOT_DIR; ?>staff/admin-module-material-create.php" class="btn btn-dark"><i class="fa fa-plus"></i> Add Material</a>
                            <a href="<?php echo ROOT_DIR; ?>staff/admin-module-component-copy.php" class="btn btn-light"><i class="fa fa-clone"></i> Duplicate from other modules</a>
                        </div>
                        <div class="admin-staff-email-table">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Actions</th>
                                            <th scope="col">Sorting</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-hover-effect">
                                            <th scope="row">1</th>
                                            <td>
                                                Principles, Concepts, Approaches To Leadership
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">Preview</a>
                                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-secondary btn-sm">Down</a>
                                            </td>
                                        </tr>
                                        <tr class="table-hover-effect">
                                            <th scope="row">2</th>
                                            <td>
                                                Leadership Influences Individual, Team And The Organization
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">Preview</a>
                                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-secondary btn-sm">Up</a>
                                                <a href="" class="btn btn-secondary btn-sm">Down</a>
                                            </td>
                                        </tr>
                                        <tr class="table-hover-effect">
                                            <th scope="row">3</th>
                                            <td>
                                                Leadership And Organizational Performance
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">Preview</a>
                                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-secondary btn-sm">Up</a>
                                                <a href="" class="btn btn-secondary btn-sm">Down</a>
                                            </td>
                                        </tr>
                                        <tr class="table-hover-effect">
                                            <th scope="row">4</th>
                                            <td>
                                                Ethical Decision Making And Organizational Value
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">Preview</a>
                                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-secondary btn-sm">Up</a>
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

    <?php include_once('../components/footer.php'); ?>