<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="student_portal">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-3">
                <div class="profile-stick">
                    <div class="card profile-detail">
                        <div class="profile_img_container">
                            <img src="../images/profile_img.jpg" class="img-fluid rounded-circle profile_img" />
                            <p class="text-center mt-1"><a href="">Change Upload Image <i class="fa fa-camera"></i></a></p>
                        </div>
                        <div class="card-body">
                            <div class="row profile_row">
                                <div class="col-12 text-center">

                                    <h3> Jane Doe Smith</h3>
                                </div>
                                <div class="col-12 text-center profile_position">
                                    <!-- <span><img src="../images/icons/work.svg" class="img-fluid profile_icon"></span>  --> Senior Manager at <br /> Chevron Oil and Gas
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 mx-auto text-center profile_name">
                                    Nigerian
                                </div>

                            </div>
                            <div class="col-md-12 text-center mt-3">
                                <button class="btn btn-normal">Edit your information <i class="fa fa-chevron-right slide-icon"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card help-info">
                        <div class="card-body">
                            <p>If you have any questions or get stuck please contact us in the relevant department</p>
                            <ul class="list-group list-help-issues">
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Academic Issues
                                        <span class="badge badge-pill"><i class="fa fa-briefcase"></i></span>
                                    </li>
                                </a>
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Technical Issues
                                        <span class="badge badge-pill"><i class="fa fa-server"></i></span>
                                    </li>
                                </a>
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Student Issues
                                        <span class="badge badge-pill"><i class="fa fa-graduation-cap"></i></span>
                                    </li>
                                </a>
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Finance Issues
                                        <span class="badge badge-pill"><i class="fa fa-money"></i></span>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 mb-3">
                <div class="full-notification-sect">
                    <h3 class="make-bold text-center mb-3">Notification</h3>
                    <div class="row">
                       <div class="col-lg-10 mx-auto">
                          <div class="notification-card-holder">
                              <!-- <div class="card card-notification-view card-border mb-4">
                                <a href="<?php echo ROOT_DIR; ?>student/notification-details.php" class="text-dark">
                                  <div class="card-body card-body-notification-view card-border">
                                    <h5 class="make-bold">Assignment Reminder</h5>
                                    <small class="text-muted make-bold">1 November, 2020 2:03:54PM</small>
                                    <div class="line-clamp module-card">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas suscipit illum praesentium voluptate ex tempora quas rem animi aliquid quam natus molestiae eligendi ipsa mollitia voluptates, impedit nisi aperiam aliquam.</p>
                                    </div>
                                  </div>
                                </a>
                              </div>
                               <div class="card card-notification-view card-border mb-4">
                                <a href="<?php echo ROOT_DIR; ?>student/notification-details.php" class="text-dark">
                                  <div class="card-body card-body-notification-view card-border">
                                    <h5 class="make-bold">Technical Issues Response</h5>
                                    <small class="text-muted make-bold">1 November, 2020 2:03:54PM</small>
                                    <div class="line-clamp module-card">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas suscipit illum praesentium voluptate ex tempora quas rem animi aliquid quam natus molestiae eligendi ipsa mollitia voluptates, impedit nisi aperiam aliquam.</p>
                                    </div>
                                  </div>
                                </a>
                              </div> -->

                              <div class="card card-notification-view card-border mb-3">
                                 <div class="card-body">
                                    <div class="media">
                                        <div class="img-holder-xs mr-3">
                                            <img src="<?php echo ROOT_DIR; ?>images/banners/academic-issues.jpg" class="card-img ob-fit-cover" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="mt-0 make-bold">Academic Issues</h4>
                                            <p class="text-muted"><span class="text-uppercase lt-sp fw-400"><span class="d-none d-lg-inline-block d-xl-inline-block">You have</span> 3 new notification(s)</span></p>
                                            <a href="<?php echo ROOT_DIR; ?>student/academic-issues.php" class="make-bold btn btn-danger btn-sm">View Notification <i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card card-notification-view card-border mb-3">
                                 <div class="card-body">
                                    <div class="media">
                                        <div class="img-holder-xs mr-3">
                                            <img src="<?php echo ROOT_DIR; ?>images/banners/assignment-issues.jpg" class="card-img ob-fit-cover" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="mt-0 make-bold">Assignment Report</h4>
                                            <p><span class="text-uppercase lt-sp fw-400"><span class="d-none d-lg-inline-block d-xl-inline-block">You have</span> 3 new notification(s)</span></p>
                                            <a href="<?php echo ROOT_DIR; ?>student/assignment-unsubmitted.php" class="make-bold btn btn-danger btn-sm">View Notification <i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card card-notification-view card-border mb-3">
                                 <div class="card-body">
                                    <div class="media">
                                        <div class="img-holder-xs mr-3">
                                            <img src="<?php echo ROOT_DIR; ?>images/banners/technical-issues.jpg" class="card-img ob-fit-cover" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="mt-0 make-bold">Technical Issues</h4>
                                            <p class="text-muted"><span class="text-uppercase lt-sp fw-400"><span class="d-none d-lg-inline-block d-xl-inline-block">You have</span> 3 new notification(s)</span></p>
                                            <a href="<?php echo ROOT_DIR; ?>student/academic-issues.php" class="make-bold btn btn-danger btn-sm">View Notification <i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card card-notification-view card-border mb-3">
                                 <div class="card-body">
                                    <div class="media">
                                        <div class="img-holder-xs mr-3">
                                            <img src="<?php echo ROOT_DIR; ?>images/banners/finance-issues.jpg" class="card-img ob-fit-cover" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="mt-0 make-bold">Finance Issues</h4>
                                            <p class="text-muted"><span class="text-uppercase lt-sp fw-400"><span class="d-none d-lg-inline-block d-xl-inline-block">You have</span> 3 new notification(s)</span></p>
                                            <a href="<?php echo ROOT_DIR; ?>student/academic-issues.php" class="make-bold btn btn-danger btn-sm">View Notification <i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card card-notification-view card-border mb-3">
                                 <div class="card-body">
                                    <div class="media">
                                        <div class="img-holder-xs mr-3">
                                            <img src="<?php echo ROOT_DIR; ?>images/banners/student-issues.jpg" class="card-img ob-fit-cover" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="mt-0 make-bold">Student Issues</h4>
                                            <p class="text-muted"><span class="text-uppercase lt-sp fw-400"><span class="d-none d-lg-inline-block d-xl-inline-block">You have</span> 3 new notification(s)</span></p>
                                            <a href="<?php echo ROOT_DIR; ?>student/academic-issues.php" class="make-bold btn btn-danger btn-sm">View Notification <i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                          </div>
                       </div>
                    </div>
                </div>
                <div class="no-notification-sect align-center-flex d-none">
                   <p class="text-center"><img src="<?php echo ROOT_DIR; ?>images/icons/notification-2.svg" class="img-fluid" width="100" /></p>
                   <h4 class="make-bold text-center">You do not have any notification yet</h4>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('../components/footer.php'); ?>