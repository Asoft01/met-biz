<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container-fluid">
            <div class="staff-layout-container">
                <form>
                    <div class="main-dashboard-content">
                        <div class="row grid-3-placement">
                            <div class="col-lg-2 mb-3">
                                <h1 class="make-bold mb-0">Client List</h1>
                            </div>
                            <div class="col-lg-8 mb-3">
                                <div aria-label="Page navigation">
                                    <ul class="pagination mb-0 letter-space text-uppercase ft-12p pager-sect justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 mb-3">
                                <div class="dropdown float-right-lg">
                                    <button class="btn btn-secondary dropdown-toggle btn-full-width" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Export <i class="fa fa-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-action-format" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Selected as XML</a>
                                        <a class="dropdown-item" href="#">Selected as CSV</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">All as XML</a>
                                        <a class="dropdown-item" href="#">All as CSV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="client-list-sect table-responsive">
                            <table class="table table-centered mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th><input type="checkbox" onClick="toggle(this)"/></th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email Address</th>
                                        <th>Programme</th>
                                        <th>Last Contact</th>
                                        <th>Status</th>
                                        <th>Nationality</th>
                                        <th>Study Center</th>
                                        <th>Year</th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-hover-effect">
                                        <td><input type="checkbox" name="foo"/></td>
                                        <td class="table-user v-align-bottom">
                                        <div class="d-flex align-items-center max-wid-table">
                                                <div class="table-user-img">
                                                    <img src="<?php echo ROOT_DIR; ?>images/banners/test-image.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                </div>
                                                <span class="ml-2">Salomey Eferemo Oluwasegun Muhammad Jennifer</span>
                                        </div>
                                        <div class="set-height toggle-visible max-wid-table">
                                            <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-upload"></i> Uploads
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-user"></i> Login As
                                            </a>
                                        </div>
                                        </td>
                                        <td class="v-align-top">08059994444</td>
                                        <td class="max-wid-table v-align-top">salomey@gmail.com</td>
                                        <td class="v-align-top">
                                            <ul class="student-enrol-date max-wid-table">
                                                <li class="enrol-time">Master of Business Administration . Classroom (Postgraduate Programme)</li>
                                                <li class="enrol-date"><b>Date</b>:4 JAN 2019</li>
                                                <li class="enrol-fee"><b>Fee</b>: N1,000,000</li>
                                            </ul>
                                        </td>
                                        <td class="v-align-top">
                                        ---
                                        </td>
                                        <td class="max-wid-table v-align-top">
                                        <!-- <div class="d-flex align-items-baseline">
                                            <i class="text-warning fa fa-circle mr-1"></i>
                                            <span>Awaiting Application Fee</span>
                                        </div> -->
                                            <span class="badge badge-warning-lighten">Awaiting filled form and document</span>
                                        </td>
                                        <td class="v-align-top">
                                            Nigeria
                                        </td>
                                        <td class="v-align-top">
                                            Victoria Island, Nigeria
                                        </td>
                                        <td class="v-align-top">
                                            2020
                                        </td>
                                        <!-- <td class="table-action">
                                            <a href="javascript: void(0);" class="action-icon text-muted"> <i class="fa fa-edit fa-lg"></i></a>
                                            <a href="javascript: void(0);" class="action-icon text-muted"> <i class="fa fa-dollar fa-lg"></i></a>
                                            <a href="javascript: void(0);" class="action-icon text-muted"> <i class="fa fa-upload fa-lg"></i></a>
                                            <a href="javascript: void(0);" class="action-icon text-muted"> <i class="fa fa-trash fa-lg"></i></a>
                                        </td> -->
                                    </tr>
                                    <tr class="table-hover-effect">
                                    <td><input type="checkbox" name="foo"/></td>
                                        <td class="table-user v-align-bottom">
                                        <div class="d-flex align-items-center max-wid-table">
                                                <div class="table-user-img">
                                                    <img src="<?php echo ROOT_DIR; ?>images/44.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                </div>
                                                <span class="ml-2">Jacqueline Cooper Joshua McDonalds</span>
                                        </div>
                                            <div class="set-height toggle-visible max-wid-table">
                                            <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-upload"></i> Upload
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-user"></i> Login
                                            </a>
                                        </div>
                                        </td>
                                        <td class="v-align-top">+234805999564</td>
                                        <td class="max-wid-table v-align-top">salomey@gmail.com</td>
                                        <td class="v-align-top">
                                            <ul class="student-enrol-date max-wid-table">
                                                <li class="enrol-time">Master of Business Administration . Classroom (Postgraduate Programme)</li>
                                                <li class="enrol-date"><b>Date</b>:4 JAN 2019</li>
                                                <li class="enrol-fee"><b>Fee</b>: N1,000,000</li>
                                            </ul>
                                        </td>
                                        <td class="v-align-top">
                                        ---
                                        </td>
                                        <td class="max-wid-table v-align-top">
                                        <!-- <div class="d-flex align-items-baseline">
                                                <i class="fa fa-circle text-danger mr-1"></i>
                                                <span>Awaiting filled form and document and attended programme</span>
                                            </div> -->
                                            <span class="badge badge-danger-lighten">Attended Programme</span>
                                        </td>
                                        <td class="v-align-top">
                                            Nigeria
                                        </td>
                                        <td class="v-align-top">
                                            Victoria Island, Nigeria
                                        </td>
                                        <td class="v-align-top">
                                            2020
                                        </td>
                                        <!-- <td class="table-action">
                                            <a href="javascript: void(0);" class="action-icon text-muted"> <i class="fa fa-edit fa-lg"></i></a>
                                            <a href="javascript: void(0);" class="action-icon text-muted"> <i class="fa fa-dollar fa-lg"></i></a>
                                            <a href="javascript: void(0);" class="action-icon text-muted"> <i class="fa fa-upload fa-lg"></i></a>
                                            <a href="javascript: void(0);" class="action-icon text-muted"> <i class="fa fa-trash fa-lg"></i></a>
                                        </td> -->
                                    </tr>
                                    <tr class="table-hover-effect">
                                    <td><input type="checkbox" name="foo"/></td>
                                        <td class="table-user v-align-bottom">
                                        <div class="d-flex align-items-center max-wid-table">
                                                <div class="table-user-img">
                                                    <img src="<?php echo ROOT_DIR; ?>images/71.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                </div>
                                                <span class="ml-2">Nina Thompson</span>
                                        </div>
                                        <div class="set-height toggle-visible max-wid-table">
                                            <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-upload"></i> Upload
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-user"></i> Login
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-upload"></i> Upload
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-user"></i> Login
                                            </a>
                                        </div>
                                        </td>
                                        <td class="v-align-top max-wid-table">+18059999999999999908656800767</td>
                                        <td class="max-wid-table v-align-top">Nina.Thompson@gmail.com</td>
                                        <td class="v-align-top">
                                            <ul class="student-enrol-date max-wid-table">
                                                <li class="enrol-time">Professional Certificate in Improving Performance Management through Quad Model . Classroom (Postgraduate Programme)</li>
                                                <li class="enrol-date"><b>Date</b>:4 JAN 2019</li>
                                                <li class="enrol-fee"><b>Fee</b>: N1,000,000</li>
                                            </ul>
                                        </td>
                                        <td class="v-align-top">
                                        ---
                                        </td>
                                        <td class="v-align-top">
                                        <!-- <div class="d-flex align-items-baseline">
                                            <i class="text-success fa fa-circle mr-1"></i>
                                            <span>Current Student</span>
                                        </div> -->
                                        <span class="badge badge-success-lighten">Current Student</span>
                                        </td>
                                        <td class="v-align-top">
                                            Nigeria
                                        </td>
                                        <td class="v-align-top">
                                            Victoria Island, Nigeria
                                        </td>
                                        <td class="v-align-top">
                                            2020
                                        </td>
                                        <!-- <td class="table-action">
                                            <a href="javascript: void(0);" class="action-icon text-muted"> <i class="fa fa-edit fa-lg"></i></a>
                                            <a href="javascript: void(0);" class="action-icon text-muted"> <i class="fa fa-dollar fa-lg"></i></a>
                                            <a href="javascript: void(0);" class="action-icon text-muted"> <i class="fa fa-upload fa-lg"></i></a>
                                            <a href="javascript: void(0);" class="action-icon text-muted"> <i class="fa fa-trash fa-lg"></i></a>
                                        </td> -->
                                    </tr>
                                    <tr class="table-hover-effect">
                                        <td><input type="checkbox" name="foo"/></td>
                                        <td class="table-user v-align-bottom">
                                        <div class="d-flex align-items-center max-wid-table">
                                                <div class="table-user-img">
                                                    <img src="<?php echo ROOT_DIR; ?>images/placeholder.png" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                </div>
                                                <span class="ml-2">Nina Thompson</span>
                                        </div>
                                        <div class="set-height toggle-visible max-wid-table">
                                            <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-upload"></i> Upload
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-user"></i> Login
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-upload"></i> Upload
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-trash"></i> Delete
                                            </a>
                                                <a href="" class="btn btn-outline-dark btn-sm my-2">
                                                <i class="fa fa-user"></i> Login
                                            </a>
                                        </div>
                                        </td>
                                        <td class="v-align-top">0805-999-4444</td>
                                        <td class="max-wid-table v-align-top">Nina.Thompsonoluswatosintobiloba@gmail.com</td>
                                        <td class="v-align-top">
                                            <ul class="student-enrol-date max-wid-table">
                                                <li class="enrol-time">Professional Certificate in Improving Performance Management through Quad Model . Classroom (Postgraduate Programme)</li>
                                                <li class="enrol-date"><b>Date</b>:4 JAN 2019</li>
                                                <li class="enrol-fee"><b>Fee</b>: N1,000,000</li>
                                            </ul>
                                        </td>
                                        <td class="v-align-top">
                                        ---
                                        </td>
                                        <td class="v-align-top">
                                        <!-- <div class="d-flex align-items-baseline">
                                            <i class="text-info fa fa-circle mr-1"></i>
                                            <span>Attended Programme</span>
                                        </div> -->
                                        <span class="badge badge-info-lighten">Current Student</span>
                                        </td>
                                        <td class="v-align-top">
                                            Nigeria
                                        </td>
                                        <td class="v-align-top">
                                            Victoria Island, Nigeria
                                        </td>
                                        <td class="v-align-top">
                                            2020
                                        </td>
                                        <!-- <td class="table-action">
                                            <a href="javascript: void(0);" class="action-icon text-muted"> <i class="fa fa-edit fa-lg"></i></a>
                                            <a href="javascript: void(0);" class="action-icon text-muted"> <i class="fa fa-dollar fa-lg"></i></a>
                                            <a href="javascript: void(0);" class="action-icon text-muted"> <i class="fa fa-upload fa-lg"></i></a>
                                            <a href="javascript: void(0);" class="action-icon text-muted"> <i class="fa fa-trash fa-lg"></i></a>
                                        </td> -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row grid-3-placement">
                            <div class="col-lg-2 mb-3">

                            </div>
                            <div class="col-lg-8 mb-3">
                                <div aria-label="Page navigation">
                                    <ul class="pagination mb-0 letter-space text-uppercase ft-12p pager-sect justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 mb-3">
                                <div class="dropdown float-right-lg">
                                    <button class="btn btn-secondary dropdown-toggle btn-full-width" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Export <i class="fa fa-chevron-down"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-action-format" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Selected as XML</a>
                                        <a class="dropdown-item" href="#">Selected as CSV</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">All as XML</a>
                                        <a class="dropdown-item" href="#">All as CSV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script>
    function toggle(source) {
        checkboxes = document.getElementsByName('foo');
        for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = source.checked;
        }
    }
</script>


<?php include_once('../components/footer.php'); ?>
