<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Companies</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <table class="table table-striped table-hover assignment-table-info table-scrollable">
                            <thead class="thead-dark">
                                <tr>
                                    <th>S/N</th>
                                    <th>Company</th>
                                    <th>Number of Staff</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td title="">1</td>
                                    <td title="">Guaranty Trust Bank</td>
                                    <td title="">25</td>
                                    <td title=""><a href="<?php echo ROOT_DIR; ?>" class="btn btn-danger btn-sm text-white" target="_blank">View Staff</a></td>
                                </tr>
                                <tr>
                                    <td title="">2</td>
                                    <td title="">Dangote Group of Company</td>
                                    <td title="">15</td>
                                    <td title=""><a href="<?php echo ROOT_DIR; ?>" class="btn btn-danger btn-sm text-white" target="_blank">View Staff</a></td>
                                </tr>
                                <tr>
                                    <td title="">3</td>
                                    <td title="">Zenith Bank</td>
                                    <td title="">13</td>
                                    <td title=""><a href="<?php echo ROOT_DIR; ?>" class="btn btn-danger btn-sm text-white" target="_blank">View Staff</a></td>
                                </tr>
                            </tbody>
                        </table>
                        <div aria-label="Page navigation">
                            <ul class="pagination admin-staff-pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('../components/footer.php'); ?>

</body>

</html>