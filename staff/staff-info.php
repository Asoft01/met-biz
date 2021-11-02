<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>



<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container-fluid">
            <div class="mb-4">
                <h3 class="make-bold">Staff Information Dashboard</h3>
            </div>

            <div class="staff-info-container mb-4">
                <ul class="nav opt-types nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-overview-tab" data-toggle="pill" href="#pills-overview" role="tab" aria-controls="pills-overview" aria-selected="true">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Salary Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Leave</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">
                    <div class="info-overview-sect">
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="icon-holder float-right">
                                            <a href="" class="text-dark"><i class="fa fa-edit"></i></a>
                                        </div>
                                        <div class="img-container-holder">
                                            <img src="<?php echo ROOT_DIR; ?>images/71.jpg" class="img-fluid ob-fit-cover h-100 w-100 bord-rad-50" />
                                        </div>
                                        <h3 class="make-bold mb-0">Jasmine Abubakar Johnson</h3>
                                        <p class="text-muted mb-0"><em>Head of Marketing</em></p>
                                        <div class="badge badge-warning-lighten">Staff ID: msbm0001</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="card h-100">
                                    <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                        <h6 class="text-muted text-uppercase make-bold mb-0">Personal Information</h6>
                                        <div class="icon-holder">
                                            <a href="" class="text-dark"><i class="fa fa-edit"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <label class="make-bold text-muted">First Name</label>
                                            <p>Jasmine</p>
                                        </div>
                                        <div>
                                            <label class="make-bold text-muted">Middle Name</label>
                                            <p>Abubakar</p>
                                        </div>
                                        <div>
                                            <label class="make-bold text-muted">Last Name</label>
                                            <p>Johnson</p>
                                        </div>
                                        <div>
                                            <label class="make-bold text-muted">Email Address</label>
                                            <p>jasmine.abubakar@gmail.com</p>
                                        </div>
                                            <div>
                                            <label class="make-bold text-muted">Mobile Number</label>
                                            <p>08067778888</p>
                                        </div>
                                        <div>
                                            <label class="make-bold text-muted">Date of Birth</label>
                                            <p>23rd Jan, 1985</p>
                                        </div>
                                        <div>
                                            <label class="make-bold text-muted">Home Address</label>
                                            <p>34 Allen Avenue, Ikeja, Lagos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="card h-100">
                                    <div class="card-header bg-light d-flex justify-content-between align-items-center">
                                        <h6 class="text-muted text-uppercase make-bold mb-0">Official Information</h6>
                                        <div class="icon-holder">
                                            <a href="" class="text-dark"><i class="fa fa-edit"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <label class="make-bold text-muted">First Name</label>
                                            <p>Jasmine</p>
                                        </div>
                                        <div>
                                            <label class="make-bold text-muted">Middle Name</label>
                                            <p>Abubakar</p>
                                        </div>
                                        <div>
                                            <label class="make-bold text-muted">Last Name</label>
                                            <p>Johnson</p>
                                        </div>
                                        <div>
                                            <label class="make-bold text-muted">Official Email Address</label>
                                            <p>jasmine.abubakar@msbm.org.uk</p>
                                        </div>
                                            <div>
                                            <label class="make-bold text-muted">Official Mobile Number</label>
                                            <p>08067778888</p>
                                        </div>
                                        <div>
                                            <label class="make-bold text-muted">Date of Joining</label>
                                            <p>23rd Jan, 2020</p>
                                        </div>
                                        <div>
                                            <label class="make-bold text-muted">Department</label>
                                            <p>Marketing</p>
                                        </div>
                                        <div>
                                            <label class="make-bold text-muted">Office Location</label>
                                            <p>Agos Building, 54B Adeniyi Jones Avenue, Ikeja, Lagos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="info-overview-sect">
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                <div class="card bg-purple bord-radius-10 mb-3">
                                    <div class="card-body text-white">
                                        <div>
                                            <label class="make-bold text-uppercase">Salary Per Month</label>
                                            <p>The amount stated below is your monthly salary, if it is incorrect please contact Human Resource</p>
                                            <hr/>
                                            <h3 class="make-bold">NGN 1,000,000.00</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-purple bord-radius-10">
                                    <div class="card-body text-white">
                                        <!-- <div class="icon-holder-2 float-right">
                                            <a href="" class="text-white"><i class="fa fa-edit"></i></a>
                                        </div> -->
                                        <div>
                                            <label class="make-bold text-uppercase">Bank Name</label>
                                            <p>Guaranty Trust Bank</p>
                                        </div>
                                        <div>
                                            <label class="make-bold text-uppercase">Account Number</label>
                                            <p>0012345678</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-4 mb-3">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="fa fa-money widget-icon"></i>
                                                </div>
                                                <h6 class="text-muted font-weight-normal mt-0 card-title-heading card-title-heading">Basic</h6>
                                                <h3 class="mt-3 mb-3 make-bold">GBP 10,000</h3>
                                                <p class="mb-0 text-muted">
                                                    <!-- <small class="text-nowrap text-uppercase letter-space">Since last month</small> -->
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-4 mb-3">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="fa fa-money widget-icon"></i>
                                                </div>
                                                <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Housing</h6>
                                                <h3 class="mt-3 mb-3 make-bold">GBP 10,000</h3>
                                                <p class="mb-0 text-muted">
                                                    <!-- <span class="text-red mr-2 make-bold"><i class="fa fa-long-arrow-down"></i> 1.08%</span> -->
                                                    <!-- <small class="text-nowrap text-uppercase letter-space">Since last month</small> -->
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-4 mb-3">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="fa fa-money widget-icon"></i>
                                                </div>
                                                <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Transport</h6>
                                                <h3 class="mt-3 mb-3 make-bold">NGN 36,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <!-- <small class="text-nowrap text-uppercase letter-space">Since last month</small> -->
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-4 mb-3">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="fa fa-money widget-icon"></i>
                                                </div>
                                                <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Leave</h6>
                                                <h3 class="mt-3 mb-3 make-bold">NGN 5,543</h3>
                                                <p class="mb-0 text-muted">
                                                    <!-- <span class="text-red mr-2 make-bold"><i class="fa fa-long-arrow-down"></i> 1.08%</span> -->
                                                    <!-- <small class="text-nowrap text-uppercase letter-space">Since last month</small> -->
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-4 mb-3">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="fa fa-money widget-icon"></i>
                                                </div>
                                                <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Meal</h6>
                                                <h3 class="mt-3 mb-3 make-bold">NGN 5,543</h3>
                                                <p class="mb-0 text-muted">
                                                    <!-- <span class="text-red mr-2 make-bold"><i class="fa fa-long-arrow-down"></i> 1.08%</span> -->
                                                    <!-- <small class="text-nowrap text-uppercase letter-space">Since last month</small> -->
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-4 mb-3">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="fa fa-money widget-icon"></i>
                                                </div>
                                                <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Utility</h6>
                                                <h3 class="mt-3 mb-3 make-bold">NGN 36,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <!-- <span class="text-green make-bold mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span> -->
                                                    <!-- <small class="text-nowrap text-uppercase letter-space">Since last month</small> -->
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                     <div class="col-lg-4 mb-3">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="fa fa-money widget-icon"></i>
                                                </div>
                                                <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Entertainment Allowance</h6>
                                                <h3 class="mt-3 mb-3 make-bold">NGN 36,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <!-- <span class="text-green make-bold mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span> -->
                                                    <!-- <small class="text-nowrap text-uppercase letter-space">Since last month</small> -->
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-4 mb-3">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="fa fa-money widget-icon"></i>
                                                </div>
                                                <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Medical Allowance</h6>
                                                <h3 class="mt-3 mb-3 make-bold">NGN 36,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <!-- <span class="text-green make-bold mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span> -->
                                                    <!-- <small class="text-nowrap text-uppercase letter-space">Since last month</small> -->
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-4 mb-3">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="fa fa-money widget-icon"></i>
                                                </div>
                                                <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Commission</h6>
                                                <h3 class="mt-3 mb-3 make-bold">NGN 36,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <!-- <span class="text-green make-bold mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span> -->
                                                    <!-- <small class="text-nowrap text-uppercase letter-space">Since last month</small> -->
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                     <div class="col-lg-4 mb-3">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-right">
                                                    <i class="fa fa-money widget-icon"></i>
                                                </div>
                                                <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Arrears/Bonus</h6>
                                                <h3 class="mt-3 mb-3 make-bold">NGN 36,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <!-- <span class="text-green make-bold mr-2"><i class="fa fa-long-arrow-up"></i> 5.27%</span> -->
                                                    <!-- <small class="text-nowrap text-uppercase letter-space">Since last month</small> -->
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="leave-mgt-container mb-3">
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                 <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <i class="fa fa-paper-plane widget-icon"></i>
                                        </div>
                                        <h6 class="text-muted font-weight-normal mt-0 card-title-heading card-title-heading">Total Leave</h6>
                                        <h3 class="mt-3 mb-3 make-bold">10</h3>
                                        <p class="mb-0 text-muted">
                                            <small class="text-nowrap text-uppercase letter-space">Per Year</small>
                                        </p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                             <div class="col-lg-4 mb-3">
                                 <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <i class="fa fa-paper-plane widget-icon"></i>
                                        </div>
                                        <h6 class="text-muted font-weight-normal mt-0 card-title-heading card-title-heading">Consumed</h6>
                                        <h3 class="mt-3 mb-3 make-bold">4</h3>
                                        <p class="mb-0 text-muted">
                                            <small class="text-nowrap text-uppercase letter-space">Per Year</small>
                                        </p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                             <div class="col-lg-4 mb-3">
                                 <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <i class="fa fa-paper-plane widget-icon"></i>
                                        </div>
                                        <h6 class="text-muted font-weight-normal mt-0 card-title-heading card-title-heading">Balanced Leave</h6>
                                        <h3 class="mt-3 mb-3 make-bold">3</h3>
                                        <p class="mb-0 text-muted">
                                            <small class="text-nowrap text-uppercase letter-space">Per Year</small>
                                        </p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                        </div>
                    </div>
                    <div class="leave-table-info mb-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3 make-bold">Add Leave Request</h4>
                                        <hr/>
                                        <form>
                                            <div class="form-group">
                                                <label>Type of leave</label>
                                                <select class="form-control">
                                                    <option>--Choose--</option>
                                                    <option>Sick</option>
                                                    <option>Casual</option>
                                                    <option>Vacation</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>From date</label>
                                                <input type="date" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label>to date</label>
                                                <input type="date" class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label>Reason</label>
                                                <textarea class="form-control" rows="5"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-purple btn-block">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="leave-table mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-3 make-bold">Leave Request</h4>
                                            <div class="table-responsive">
                                                <table class="table table-centered table-nowrap table-hover mb-0" >
                                                    <thead class="bg-light">
                                                        <tr>
                                                            <th scope="col">Type of Leave</th>
                                                            <th scope="col">From</th>
                                                            <th scope="col">to</th>
                                                            <th scope="col">Days</th>
                                                            <th scope="col">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Sick</th>
                                                            <td class="text-muted">11th March, 2021</td>
                                                            <td class="text-muted">13th March, 2021</td>
                                                            <td class="text-muted">2</td>
                                                            <td><div class="badge badge-success-lighten">Approved</div></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Casual</th>
                                                            <td class="text-muted">13th March, 2021</td>
                                                            <td class="text-muted">14th March, 2021</td>
                                                            <td class="text-muted">1</td>
                                                             <td><div class="badge badge-warning-lighten">Awaiting Approval</div></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Vacation</th>
                                                            <td class="text-muted">15th March, 2021</td>
                                                            <td class="text-muted">16th March, 2021</td>
                                                            <td class="text-muted">1</td>
                                                            <td><div class="badge badge-success-lighten">Approved</div></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> <!-- end table-responsive-->
                                        </div> <!-- end card body-->
                                    </div> <!-- end card -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>


<?php include_once('../components/footer.php'); ?>
