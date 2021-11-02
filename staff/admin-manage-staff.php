<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Manage Staff</strong></h2>
                    <h5 class="text-muted">Staff Portal</h5>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="search-mgt-table">
                        <div class="row align-row-cent">
                            <div class="col-lg-6">
                                <p>Showing 1 to 2 of 2 Users</p>
                            </div>
                            <!-- <div class="col-lg-2"></div> -->
                            <div class="col-lg-6">
                                <form action="<?php echo ROOT_DIR; ?>staff/admin-leave-management.php" method="post">
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="col-10">
                                                <select class="form-control">
                                                    <option selected disabled hidden>Result per page</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <button type="submit" class="btn btn-dark btn-block">Go</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="admin-staff-container">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover assignment-table-info table-scrollable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Branch</th>
                                        <th scope="col">Job Title</th>
                                        <th scope="col">User Type</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            Chukwuemeka Okafor
                                        </td>
                                        <td>08087775555</td>
                                        <td>joshua-user</td>
                                        <td>john.joshua@hello.com</td>
                                        <td>Dubai</td>
                                        <td>Business Developer Executive</td>
                                        <td>Admin</td>
                                        <td><a href="<?php echo ROOT_DIR; ?>staff/admin-edit-staff.php" class="btn btn-danger btn-sm"> <i class="fa fa-edit"></i></a> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>
                                            Matthew Oluwasegun
                                        </td>
                                        <td>08087775556</td>
                                        <td>joshua-user</td>
                                        <td>john.joshua@hello.com</td>
                                        <td>Lagos</td>
                                        <td>Frontend Developer</td>
                                        <td>IT</td>
                                        <td><a href="<?php echo ROOT_DIR; ?>staff/admin-edit-staff.php" class="btn btn-danger btn-sm"> <i class="fa fa-edit"></i></a> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>
                                            John Joshua Jobber
                                        </td>
                                        <td>08087775555</td>
                                        <td>joshua-user</td>
                                        <td>john.joshua@hello.com</td>
                                        <td>Victoria Island</td>
                                        <td>Web Developer</td>
                                        <td>Admin</td>
                                        <td><a href="<?php echo ROOT_DIR; ?>staff/admin-edit-staff.php" class="btn btn-danger btn-sm"> <i class="fa fa-edit"></i></a> </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>
                                            James Muhammad Hassan
                                        </td>
                                        <td>08087775555</td>
                                        <td>joshua-user</td>
                                        <td>john.joshua@hello.com</td>
                                        <td>Port Harcourt</td>
                                        <td>Finance Executive</td>
                                        <td>Finance</td>
                                        <td><a href="<?php echo ROOT_DIR; ?>staff/admin-edit-staff.php" class="btn btn-danger btn-sm"> <i class="fa fa-edit"></i></a> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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