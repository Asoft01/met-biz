<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Client List</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <div class="jumbotron course-admin-info pb-4">
                            <div class="container">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-lg-8">
                                            <input type="text" class="form-control" placeholder="Email or Client Name">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <input type="text" class="form-control" placeholder="Last Contact(Phone)">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-lg-4">
                                            <select class="form-control">
                                                <option selected disabled hidden>Any Position</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <select class="form-control">
                                                <option selected disabled hidden>Any Study Center</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <select class="form-control">
                                                <option selected disabled hidden>Any Programme</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-lg-4">
                                            <select class="form-control">
                                                <option selected disabled hidden>Any Source</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <select class="form-control">
                                                <option selected disabled hidden>Any Status</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <select class="form-control">
                                                <option selected disabled hidden>Staff</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-lg-4">
                                            <select class="form-control">
                                                <option selected disabled hidden>Sort By</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <select class="form-control">
                                                <option selected disabled hidden>Results Per Page</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <select class="form-control">
                                                <option selected disabled hidden>Any Course Category</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" placeholder="Programme Date (Min) e.g YYYY-MM-DD">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" placeholder="Programme Date (Max) e.g YYYY-MM-DD">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" placeholder="Status Changed (Min Date) e.g YYYY-MM-DD">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="text" class="form-control" placeholder="Status Changed (Max Date) e.g YYYY-MM-DD">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-dark btn-block">Apply Filter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="client-list-result">
                            <h4 class="text-center"><strong>Search Result(s)</strong></h4>
                            <p class="text-center">Showing 1 to 97 of 97 clients</p>
                            <div class="table-responsive">
                                <table class="table table-striped assignment-table-info table-scrollable">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">S/N</th>
                                            <th scope="col" width="30%">Name</th>
                                            <th scope="col" width="20%">Phone</th>
                                            <th scope="col">Email Address</th>
                                            <th scope="col" width="30%">Programme</th>
                                            <th scope="col">Last Contact (Phone)</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Nationality</th>
                                            <th scope="col">Study Center</th>
                                            <th scope="col">Year</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <td>Salomey Eferemo</td>
                                            <td>0805-999-4444</td>
                                            <td>salomey@gmail.com</td>
                                            <td>
                                                <ul class="student-enrol-date">
                                                    <li class="enrol-time">Master of Business Administration . Classroom (Postgraduate Programme)</li>
                                                    <li class="enrol-date"><b>Date</b>:4 JAN 2019</li>
                                                    <li class="enrol-fee"><b>Fee</b>: N1,000,000</li>
                                                </ul>
                                            </td>
                                            <td>
                                                ----
                                            </td>
                                            <td>
                                                Awaiting Application Fee
                                            </td>
                                            <td>Nigeria</td>
                                            <td>Victoria Island, Nigeria</td>
                                            <td>2018</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit text-white" title="Edit"></i></a>
                                                <a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-dollar text-white" title="payment"></i></a>
                                                <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-upload text-white" title="upload"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash text-white" title="Delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <td>Salomey Eferemo</td>
                                            <td>0805-999-4444</td>
                                            <td>salomey@gmail.com</td>
                                            <td>
                                                <ul class="student-enrol-date">
                                                    <li class="enrol-time">Master of Business Administration . Classroom (Postgraduate Programme)</li>
                                                    <li class="enrol-date"><b>Date</b>:4 JAN 2019</li>
                                                    <li class="enrol-fee"><b>Fee</b>: N1,000,000</li>
                                                </ul>
                                            </td>
                                            <td>
                                                ----
                                            </td>
                                            <td>
                                                Awaiting Application Fee
                                            </td>
                                            <td>Nigeria</td>
                                            <td>Victoria Island, Nigeria</td>
                                            <td>2018</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit text-white" title="Edit"></i></a>
                                                <a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-dollar text-white" title="payment"></i></a>
                                                <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-upload text-white" title="upload"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash text-white" title="Delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <td>Salomey Eferemo</td>
                                            <td>0805-999-4444</td>
                                            <td>salomey@gmail.com</td>
                                            <td>
                                                <ul class="student-enrol-date">
                                                    <li class="enrol-time">Master of Business Administration . Classroom (Postgraduate Programme)</li>
                                                    <li class="enrol-date"><b>Date</b>:4 JAN 2019</li>
                                                    <li class="enrol-fee"><b>Fee</b>: N1,000,000</li>
                                                </ul>
                                            </td>
                                            <td>
                                                ----
                                            </td>
                                            <td>
                                                Awaiting Application Fee
                                            </td>
                                            <td>Nigeria</td>
                                            <td>Victoria Island, Nigeria</td>
                                            <td>2018</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit text-white" title="Edit"></i></a>
                                                <a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-dollar text-white" title="payment"></i></a>
                                                <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-upload text-white" title="upload"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash text-white" title="Delete"></i></a>
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