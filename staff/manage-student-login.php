<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Manage Student Login</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <div class="light-card">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <form>
                                        <strong>Email or Client Name</strong>
                                        <div class="row">
                                            <div class="col-8">
                                                <input type="text" class="form-control" placeholder="Email or Client Name">
                                            </div>
                                            <div class="col-4">
                                                <button class="btn btn-dark btn-block">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-center"><strong>Student Login Accounts</strong></h4>
                        <p class="text-center">Showing 1 to 400 of 11570</p>
                        <div class="table-responsive">
                            <table class="table table-striped assignment-table-info table-scrollable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">S/N</th>
                                        <th scope="col">Email Address</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Last Login</th>
                                        <th scope="col">Login Sent</th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>salomo@hello.com</td>
                                        <td>1234567890</td>
                                        <td>0000-00-00 00:00:00</td>
                                        <td>0000-00-00 00:00:00</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm text-white">Suspend Login</a>
                                            <a href="#" class="btn btn-danger btn-sm text-white">Reset Password</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>salomo@hello.com</td>
                                        <td>1234567890</td>
                                        <td>0000-00-00 00:00:00</td>
                                        <td>0000-00-00 00:00:00</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm text-white">Suspend Login</a>
                                            <a href="#" class="btn btn-danger btn-sm text-white">Reset Password</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>salomo@hello.com</td>
                                        <td>1234567890</td>
                                        <td>0000-00-00 00:00:00</td>
                                        <td>0000-00-00 00:00:00</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm text-white">Suspend Login</a>
                                            <a href="#" class="btn btn-danger btn-sm text-white">Reset Password</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>salomo@hello.com</td>
                                        <td>1234567890</td>
                                        <td>0000-00-00 00:00:00</td>
                                        <td>0000-00-00 00:00:00</td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-sm text-white">Suspend Login</a>
                                            <a href="#" class="btn btn-danger btn-sm text-white">Reset Password</a>
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

    <?php include_once('../components/footer.php'); ?>