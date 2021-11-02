<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<?php include "../components/main-business-nav.inc.php"; ?>

<div class="student_portal margin-top-00">
    <div class="container-fluid">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-12 statistics">
                <h1 class="mb-4 make-bold">Account</h1>

                <div class="account-show-details staff-layout-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="client-list-sect table-responsive">
                                <table class="table table-centered mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="d-none d-lg-table-cell d-xl-table-cell">S/N</th>
                                            <th class="d-none d-lg-table-cell d-xl-table-cell">Course Name</th>
                                            <th class="d-none d-lg-table-cell d-xl-table-cell">Date Purchased</th>
                                            <th class="d-none d-lg-table-cell d-xl-table-cell">Discount</th>
                                            <th class="d-none d-lg-table-cell d-xl-table-cell">Slot Purchased</th>
                                            <th class="d-none d-lg-table-cell d-xl-table-cell">Referred By</th>
                                            <th class="d-none d-lg-table-cell d-xl-table-cell">Course Price</th>
                                            <th class="d-none d-lg-table-cell d-xl-table-cell">Total Paid</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table-hover-effect">
                                            <td>1</td>
                                            <td class="table-user v-align-bottom">
                                                <div class="d-flex align-items-center max-wid-table-2 mb-2">
                                                        <!-- <div class="table-user-img">
                                                            <img src="<?php echo ROOT_DIR; ?>images/banners/test-image.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                        </div> -->
                                                        <span class="make-bold">Special Executive Master's Programme in Strategic Business Management</span>
                                                </div>
                                                 <p class="d-block d-lg-none d-xl-none">Date Purchased: <span class="badge badge-warning-lighten badge-pill">10 Aug, 2021</span></p>
                                                <div class="mb-2 d-block d-lg-none d-xl-none">
                                                    <div class="account-info-list-sm mb-3">
                                                        <div class="collapse" id="collapseAccount1">
                                                            <ul class="list-group list-group-flush">
                                                                <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                Date Purchased
                                                                    <span class="badge badge-warning-lighten badge-pill">10 Feb, 2021</span>
                                                                </li> -->
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Discount
                                                                    <span class="badge badge-warning-lighten badge-pill">Yes</span>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                Slot Purchased
                                                                    <span class="badge badge-warning-lighten badge-pill">10</span>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                Referred By
                                                                    <span class="badge badge-warning-lighten badge-pill">MSBM</span>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                Course Price
                                                                    <span class="badge badge-warning-lighten badge-pill">GBP 5,000</span>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Total Paid
                                                                    <span class="badge badge-warning-lighten badge-pill">GBP 50,000</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="action-btn-holder">
                                                        <button class="btn btn-purple btn-sm" type="button" data-toggle="collapse" data-target="#collapseAccount1" aria-expanded="false" aria-controls="collapseAccount1"><span class="show-more">View More</span> <span class="show-fewer">View Less</span> <i class="fa fa-chevron-down"></i> <i class="fa fa-chevron-up"></i></button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="v-align-top d-none d-lg-table-cell d-xl-table-cell">
                                               10 Aug, 2021
                                            </td>
                                            <td class="v-align-top d-none d-lg-table-cell d-xl-table-cell">
                                                No
                                            </td>
                                            <td class="v-align-top d-none d-lg-table-cell d-xl-table-cell">
                                                5
                                            </td>
                                            <td class="d-none d-lg-table-cell d-xl-table-cell">
                                                <small class="badge badge-success-lighten">MSBM</small>
                                            </td>
                                            <td class="d-none d-lg-table-cell d-xl-table-cell">
                                                NGN 5,000, 000
                                            </td>
                                            <td class="d-none d-lg-table-cell d-xl-table-cell">
                                                NGN 25,000, 000
                                            </td>
                                        </tr>
                                        <tr class="table-hover-effect">
                                            <td>2</td>
                                            <td class="table-user v-align-bottom">
                                                <div class="d-flex align-items-center max-wid-table-2 mb-2">
                                                        <!-- <div class="table-user-img">
                                                            <img src="<?php echo ROOT_DIR; ?>images/banners/test-image.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                        </div> -->
                                                        <span class="make-bold">Professional Certificate in Effective Report Writing Skills</span>
                                                </div>
                                                 <p class="d-block d-lg-none d-xl-none">Date Purchased: <span class="badge badge-warning-lighten badge-pill">10 Feb, 2021</span></p>
                                                <div class="mb-2 d-block d-lg-none d-xl-none">
                                                    <div class="account-info-list-sm mb-3">
                                                        <div class="collapse" id="collapseAccount2">
                                                            <ul class="list-group list-group-flush">
                                                                <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                Date Purchased
                                                                    <span class="badge badge-warning-lighten badge-pill">10 Feb, 2021</span>
                                                                </li> -->
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Discount
                                                                    <span class="badge badge-warning-lighten badge-pill">Yes</span>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                Slot Purchased
                                                                    <span class="badge badge-warning-lighten badge-pill">10</span>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                Referred By
                                                                    <span class="badge badge-warning-lighten badge-pill">MSBM</span>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                Course Price
                                                                    <span class="badge badge-warning-lighten badge-pill">GBP 5,000</span>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Total Paid
                                                                    <span class="badge badge-warning-lighten badge-pill">GBP 50,000</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="action-btn-holder">
                                                        <button class="btn btn-purple btn-sm" type="button" data-toggle="collapse" data-target="#collapseAccount2" aria-expanded="false" aria-controls="collapseAccount2"><span class="show-more">View More</span> <span class="show-fewer">View Less</span> <i class="fa fa-chevron-down"></i> <i class="fa fa-chevron-up"></i></button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="v-align-top d-none d-lg-table-cell d-xl-table-cell">
                                               10 Feb, 2021
                                            </td>
                                            <td class="v-align-top d-none d-lg-table-cell d-xl-table-cell">
                                                Yes
                                            </td>
                                            <td class="v-align-top d-none d-lg-table-cell d-xl-table-cell">
                                                10
                                            </td>
                                            <td class="d-none d-lg-table-cell d-xl-table-cell">
                                                <small class="badge badge-success-lighten">MSBM</small>
                                            </td>
                                            <td class="d-none d-lg-table-cell d-xl-table-cell">
                                                GBP 5,000
                                            </td>
                                            <td class="d-none d-lg-table-cell d-xl-table-cell">
                                                GBP 50,000
                                            </td>
                                        </tr>
                                        <tr class="table-hover-effect">
                                            <td>3</td>
                                            <td class="table-user v-align-bottom">
                                                <div class="d-flex align-items-center max-wid-table-2 mb-2">
                                                        <!-- <div class="table-user-img">
                                                            <img src="<?php echo ROOT_DIR; ?>images/banners/test-image.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                        </div> -->
                                                        <span class="make-bold">Advanced Professional Certificate in Managing and Coordinating Human Resources</span>
                                                </div>
                                                <p class="d-block d-lg-none d-xl-none">Date Purchased: <span class="badge badge-warning-lighten badge-pill">15 Feb, 2021</span></p>
                                                <div class="mb-2 d-block d-lg-none d-xl-none">
                                                    <div class="account-info-list-sm mb-3">
                                                        <div class="collapse" id="collapseAccount3">
                                                            <ul class="list-group list-group-flush">
                                                                <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                Date Purchased
                                                                    <span class="badge badge-warning-lighten badge-pill">10 Feb, 2021</span>
                                                                </li> -->
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Discount
                                                                    <span class="badge badge-warning-lighten badge-pill">Yes</span>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                Slot Purchased
                                                                    <span class="badge badge-warning-lighten badge-pill">10</span>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                Referred By
                                                                    <span class="badge badge-warning-lighten badge-pill">MSBM</span>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                Course Price
                                                                    <span class="badge badge-warning-lighten badge-pill">GBP 5,000</span>
                                                                </li>
                                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                    Total Paid
                                                                    <span class="badge badge-warning-lighten badge-pill">GBP 50,000</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="action-btn-holder">
                                                        <button class="btn btn-purple btn-sm" type="button" data-toggle="collapse" data-target="#collapseAccount3" aria-expanded="false" aria-controls="collapseAccount3"><span class="show-more">View More</span> <span class="show-fewer">View Less</span> <i class="fa fa-chevron-down"></i> <i class="fa fa-chevron-up"></i></button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="v-align-top d-none d-lg-table-cell d-xl-table-cell">
                                               15 Feb, 2021
                                            </td>
                                            <td class="v-align-top d-none d-lg-table-cell d-xl-table-cell">
                                                Yes
                                            </td>
                                            <td class="v-align-top d-none d-lg-table-cell d-xl-table-cell">
                                                2
                                            </td>
                                            <td class="d-none d-lg-table-cell d-xl-table-cell">
                                                <small class="badge badge-success-lighten">MSBM</small>
                                            </td>
                                            <td class="d-none d-lg-table-cell d-xl-table-cell">
                                                USD 5000
                                            </td>
                                            <td class="d-none d-lg-table-cell d-xl-table-cell">
                                                USD 10,000
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
</div>


<?php include_once('../components/footer.php'); ?>