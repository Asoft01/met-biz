<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="student_portal">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-3">
                <div class="profile-stick">
                    <!-- <div class="card profile-detail">
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
                                        Senior Manager at <br /> Chevron Oil and Gas
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
                        </div> -->
                    <ul class="list-group list-group-flush courses-breakdown">
                        <a href="">
                            <li class="list-group-item d-flex justify-content-between align-items-center active-course">Workplace Management Skills <span class="badge badge-pill"><i class="fa fa-chevron-right"></i></span></li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Study skills for postgraduate learning<span class="badge badge-pill"><i class="fa fa-chevron-right"></i></span></li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Initial assessment skills<span class="badge badge-pill"><i class="fa fa-chevron-right"></i></span></li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Supplementary analysis quiz <span class="badge badge-pill"><i class="fa fa-chevron-right"></i></span></li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex justify-content-between align-items-center">New quiz with attempts<span class="badge badge-pill"><i class="fa fa-chevron-right"></i></span></li>
                        </a>

                    </ul>
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
            <div class="col-lg-9">
                <div class="card assignment-info">
                    <div class="card-header assignment-ttle">
                        <i class="fa fa-book"></i> True or False
                    </div>
                    <div class="card-body assignment-modules">
                        <div class="learning-review-sect">
                            <div class='container'>
                                <div class="row">
                                    <div class="col-lg-8 mx-auto">
                                        <h2 class="mb-4 learning-review-heading">Learning Review</h2>
                                        <hr />
                                        <form>
                                            <div class="form-group review-sect">
                                                <p> <span class="required">*</span> Did you understand this learning content?</p>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="radio-opt">
                                                    <label class="form-check-label">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="radio-opt">
                                                    <label class="form-check-label">Somewhat</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="radio-opt">
                                                    <label class="form-check-label">No</label>
                                                </div>
                                            </div>
                                            <div class="form-group review-sect">
                                                <p> <span class="required">*</span> Can you imagine a practical scenario where this information might be relevant?</p>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="radio-opt2">
                                                    <label class="form-check-label">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="radio-opt2">
                                                    <label class="form-check-label">Somewhat</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="radio-opt2">
                                                    <label class="form-check-label">No</label>
                                                </div>
                                            </div>
                                            <div class="form-group review-sect">
                                                <p>Any suggestions to improve the learning experience in this learning content</p>
                                                <textarea class="form-control" id="" rows="10"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-danger btn-block">Yes, I have completed this content <i class="fa fa-check"></i></button>
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
</div>


<?php include_once('../components/footer.php'); ?>