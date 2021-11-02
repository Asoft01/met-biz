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
            <div class="col-lg-9 statistics">
                 <div class="newsletter-preference">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <h3 class="terms-content-heading text-center">Settings</h3>
                                <hr />
                                <div class="preference-content">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        You have successfully updated your settings.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?php echo ROOT_DIR; ?>student/settings.php" method="post">
                                        <h3 class="make-bold">Notifications</h3>
                                        <hr/>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-1" checked>
                                            <label for="q1-1">Display notifications badge</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-2">
                                            <label for="q1-2">Notify me by email when I have new notifications</label>
                                        </div>
                                        <!-- <div class="form-group">
                                            <input type="checkbox" id="q1-3">
                                            <label for="q1-3">Email me about new courses and recommendations</label>
                                        </div> -->
                                        <!-- <div class="form-group">
                                            <input type="checkbox" id="q1-4">
                                            <label for="q1-4">Email me invitations to take part in research carried out by MSBM and our partner organisations</label>
                                        </div> -->
                                        <h3 class="make-bold">Email Preferences</h3>
                                        <hr/>
                                         <div class="form-group">
                                            <input type="checkbox" id="q1-5" checked>
                                            <label for="q1-5">Email me about the courses I've joined</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-6">
                                            <label for="q1-6">Email me extra information about the courses I've joined, and other relevant courses or products</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-7">
                                            <label for="q1-7">Email me about new courses and recommendations</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-8">
                                            <label for="q1-8">Email me invitations to take part in research carried out by MSBM and our partner organisations</label>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-dark btn-block">Save Preferences</button>
                                        </div>
                                    </form>
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