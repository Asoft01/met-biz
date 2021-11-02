<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Client Search</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <div class="jumbotron course-admin-info">
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
                                        <div class="form-group col-lg-3">
                                            <select class="form-control">
                                                <option selected disabled hidden>Any Position</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <select class="form-control">
                                                <option selected disabled hidden>Any Study Center</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <select class="form-control">
                                                <option selected disabled hidden>Any Programme</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <select class="form-control">
                                                <option selected disabled hidden>Any Source</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-lg-3">
                                            <select class="form-control">
                                                <option selected disabled hidden>Any Status</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <select class="form-control">
                                                <option selected disabled hidden>Staff</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <select class="form-control">
                                                <option selected disabled hidden>Sort By</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <select class="form-control">
                                                <option selected disabled hidden>Results Per Page</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-lg-4">
                                            <input type="text" class="form-control" placeholder="Programme Date (Min) e.g YYYY-MM-DD">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <input type="text" class="form-control" placeholder="Programme Date (Max) e.g YYYY-MM-DD">
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
                                        <div class="form-group col-lg-4">
                                            <input type="text" class="form-control" placeholder="Status Changed (Min Date) e.g YYYY-MM-DD">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <input type="text" class="form-control" placeholder="Status Changed (Max Date) e.g YYYY-MM-DD">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <button type="submit" class="btn btn-dark btn-block">Apply Filter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('../components/footer.php'); ?>