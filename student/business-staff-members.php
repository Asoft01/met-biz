<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<?php include "../components/main-business-nav.inc.php"; ?>

    <div class="student_portal margin-top-00">
        <div class="container-fluid">
            <div class="staff-layout-container">
                <form>
                    <div class="main-dashboard-content">
                        <div class="row grid-3-placement">
                            <div class="col-lg-12 mb-3">
                                <h1 class="make-bold mb-0">Staff</h1>
                            </div>
                            <div class="col-lg-8 mx-auto mb-3">
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
                        </div>
                        <div class="client-list-sect table-responsive">
                            <table class="table table-centered mb-0 table-striped table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="d-none d-lg-table-cell d-xl-table-cell">S/N</th>
                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Name</th>
                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Phone</th>
                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Email Address</th>
                                        <th class="d-none d-lg-table-cell d-xl-table-cell">Nationality</th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-hover-effect">
                                        <td>1</td>
                                        <td class="table-user v-align-bottom">
                                            <div class="d-flex align-items-center max-wid-table mb-2">
                                                    <div class="table-user-img">
                                                        <img src="<?php echo ROOT_DIR; ?>images/banners/test-image.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                    </div>
                                                    <span class="ml-2">Salomey Eferemo Oluwasegun Muhammad Jennifer</span>
                                            </div>
                                            <div class="mb-2 d-block d-lg-none d-xl-none">
                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile.php" class="btn btn-purple btn-sm">View Profile</a>
                                            </div>
                                        </td>
                                        <td class="v-align-middle d-none d-lg-table-cell d-xl-table-cell">08059994444</td>
                                        <td class="max-wid-table v-align-middle d-none d-lg-table-cell d-xl-table-cell">salomey@gmail.com</td>
                                        <td class="v-align-middle d-none d-lg-table-cell d-xl-table-cell">
                                            Nigeria
                                        </td>
                                    </tr>
                                    <tr class="table-hover-effect">
                                        <td>2</td>
                                        <td class="table-user v-align-bottom">
                                            <div class="d-flex align-items-center max-wid-table mb-2">
                                                    <div class="table-user-img">
                                                        <img src="<?php echo ROOT_DIR; ?>images/44.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                    </div>
                                                    <span class="ml-2">Jacqueline Cooper Joshua McDonalds</span>
                                            </div>
                                            <div class="mb-2 d-block d-lg-none d-xl-none">
                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile.php" class="btn btn-purple btn-sm">View Profile</a>
                                            </div>
                                        </td>
                                        <td class="v-align-middle d-none d-lg-table-cell d-xl-table-cell">+234805999564</td>
                                        <td class="max-wid-table v-align-middle d-none d-lg-table-cell d-xl-table-cell">salomey567@gmail.com</td>
                                        <td class="v-align-middle d-none d-lg-table-cell d-xl-table-cell">
                                            Kenya
                                        </td>
                                    </tr>
                                    <tr class="table-hover-effect">
                                        <td>3</td>
                                        <td class="table-user v-align-bottom">
                                            <div class="d-flex align-items-center max-wid-table mb-2">
                                                    <div class="table-user-img">
                                                        <img src="<?php echo ROOT_DIR; ?>images/71.jpg" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                    </div>
                                                    <span class="ml-2">Nina Thompson</span>
                                            </div>
                                            <div class="mb-2 d-block d-lg-none d-xl-none">
                                                <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile.php" class="btn btn-purple btn-sm">View Profile</a>
                                            </div>
                                        </td>
                                        <td class="v-align-middle max-wid-table d-none d-lg-table-cell d-xl-table-cell">+18059999999999999908656800767</td>
                                        <td class="max-wid-table v-align-middle d-none d-lg-table-cell d-xl-table-cell">Nina.Thompson@gmail.com</td>
                                        <td class="v-align-middle d-none d-lg-table-cell d-xl-table-cell">
                                            South Africa
                                        </td>
                                    </tr>
                                    <tr class="table-hover-effect">
                                        <td>4</td>
                                        <td class="table-user v-align-bottom">
                                            <div class="d-flex align-items-center max-wid-table mb-2">
                                                    <div class="table-user-img">
                                                        <img src="<?php echo ROOT_DIR; ?>images/placeholder.png" alt="table-user" class="mr-2 img-size object-fit-cover rounded-circle" />
                                                    </div>
                                                    <span class="ml-2">Nina Thompson</span>
                                            </div>
                                            <div class="mb-2 d-block d-lg-none d-xl-none">
                                               <a href="<?php echo ROOT_DIR; ?>student/business-staff-profile.php" class="btn btn-purple btn-sm">View Profile</a>
                                            </div>
                                        </td>
                                        <td class="v-align-middle d-none d-lg-table-cell d-xl-table-cell">0805-999-4444</td>
                                        <td class="max-wid-table v-align-middle d-none d-lg-table-cell d-xl-table-cell">Nina.Thompsonoluswatosintobiloba@gmail.com</td>
                                        </td>
                                        <td class="v-align-middle d-none d-lg-table-cell d-xl-table-cell">
                                            United Arab Emirates
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row grid-3-placement">
                            <div class="col-lg-8 mx-auto mt-3">
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
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include_once('../components/footer.php'); ?>
