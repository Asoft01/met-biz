<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="student_portal margin-top-00">
    <div class="container-fluid">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-2">
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
            <div class="col-lg-8 statistics">
                <h3 class="student-certify-title">Certificate Download Page</h3>
                <div id="certificate-control-carousel" class="carousel slide" data-ride="">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="student-certificate">
                                <div class="certificate-section-download">
                                    <div class="certificate-img-sect">
                                        <p class="text-center"> <img src="<?php echo ROOT_DIR; ?>images/banners/PPC.jpg" class="mr-3 certificate-img-download" alt="..."></p>
                                    </div>
                                    <div class="certificate-desc-section">
                                        <h4>Professional Certificate Courses in Business Management</h4>
                                        <p class=""><button class="btn btn-dark" data-toggle="modal" data-target="#getFeedbackModal"><i class="fa fa-download"></i> Download Now</button>
                                    </div>
                                </div>
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="student-certificate">
                                <div class="certificate-section-download">
                                    <div class="certificate-img-sect">
                                        <p class="text-center"> <img src="<?php echo ROOT_DIR; ?>images/banners/PPC.jpg" class="mr-3 certificate-img-download" alt="..."></p>
                                    </div>
                                    <div class="certificate-desc-section">
                                        <h4>Professional Certificate Courses in Information Technology</h4>
                                        <p class="text-danger">Your Certificate is not Ready</p>
                                        <p class=""><button class="btn btn-dark" data-toggle="modal" data-target="#getFeedbackModal"><i class="fa fa-download"></i> Download Now</button>
                                    </div>
                                </div>
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="student-certificate">
                                <div class="certificate-section-download">
                                    <div class="certificate-img-sect">
                                        <p class="text-center"> <img src="<?php echo ROOT_DIR; ?>images/banners/PPC.jpg" class="mr-3 certificate-img-download" alt="..."></p>
                                    </div>
                                    <div class="certificate-desc-section">
                                        <h4>Professional Certificate Courses in Personal Development</h4>
                                        <p class="text-danger">Your Certificate is not Ready</p>
                                        <p class=""><button class="btn btn-dark" data-toggle="modal" data-target="#getFeedbackModal"><i class="fa fa-download"></i> Download Now</button>
                                    </div>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#certificate-control-carousel" role="button" data-slide="prev">
                        <img src="../images/icons/back2.svg" class="img-fluid student-admin-row">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#certificate-control-carousel" role="button" data-slide="next">
                        <img src="../images/icons/right.svg" class="img-fluid student-admin-row">
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="find">
                    <div class="container">
                        <p class="heading-find">Recommended Courses</p>
                        <div class="row myflexx">
                            <div class="col-md-6 col-12 col-lg-6 col-xl-4 card">
                                <a href="" class="card-ahref-flex">

                                    <div class="card-img-wrap">
                                        <img src="../images/bg2.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text card-uni">UK Partner University</p>
                                        <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                        <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <div class="row">
                                            <div class="col-5 mb-2">
                                                <p class="card-text"><img src="../images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                            </div>
                                            <div class="col-7 mb-2">
                                                <p class="card-text"><img src="../images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                            </div>
                                            <div class="col-5 mb-2">
                                                <p class="card-text"><img src="../images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                            </div>
                                            <div class="col-7 mb-2">
                                                <p class="card-text"><img src="../images/icons/screen.svg" class="desc-icon"> Online</p>
                                            </div>
                                        </div>
                                        <div class="card-info-btn">
                                            <button class="btn btn-dark btn-block mt-auto">Find More</button>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-6 col-12 col-lg-6 col-xl-4 card">
                                <a href="" class="card-ahref-flex">

                                    <div class="card-img-wrap">
                                        <img src="../images/Strategy.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text card-uni">UK Partner University</p>
                                        <h6 class="card-title">BBA<br>Bachelor of Business</h6>
                                        <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <div class="row">
                                            <div class="col-5 mb-2">
                                                <p class="card-text"><img src="../images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                            </div>
                                            <div class="col-7 mb-2">
                                                <p class="card-text"><img src="../images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                            </div>
                                            <div class="col-5 mb-2">
                                                <p class="card-text"><img src="../images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                            </div>
                                            <div class="col-7 mb-2">
                                                <p class="card-text"><img src="../images/icons/screen.svg" class="desc-icon"> Online</p>
                                            </div>
                                        </div>
                                        <div class="card-info-btn">
                                            <button class="btn btn-dark btn-block mt-auto">Find More</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-12 col-lg-6 col-xl-4 card">
                                <a href="" class="card-ahref-flex">

                                    <div class="card-img-wrap">
                                        <img src="../images/bg2.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text card-uni">UK Partner University</p>
                                        <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                        <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        <div class="row">
                                            <div class="col-5 mb-2">
                                                <p class="card-text"><img src="../images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                            </div>
                                            <div class="col-7 mb-2">
                                                <p class="card-text"><img src="../images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                            </div>
                                            <div class="col-5 mb-2">
                                                <p class="card-text"><img src="../images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                            </div>
                                            <div class="col-7 mb-2">
                                                <p class="card-text"><img src="../images/icons/screen.svg" class="desc-icon"> Online</p>
                                            </div>
                                        </div>
                                        <div class="card-info-btn">
                                            <button class="btn btn-dark btn-block mt-auto">Find More</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-normal">View more courses in Nigeria <i class="fa fa-chevron-right slide-icon"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade px-0" id="getFeedbackModal" tabindex="-1" role="dialog" aria-labelledby="getFeedbackModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title make-bold" id="getFeedbackModalLabel">Rating/Testimonial</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group review-sect" id="rating-ability-wrapper">
                <label class="control-label" for="rating">
                    <span class="field-label-header make-bold"><span class="required">*</span> How would you rate our ability?</span><br>
                    <span class="field-label-info"></span>
                    <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
                </label>
                <h2 class="bold rating-header">
                    <span class="selected-rating">1</span><small> / 5</small>
                </h2>
                <button type="button" class="btnrating btn btn-warning btn-sm" data-attr="1">
                    <i class="fa fa-star" aria-hidden="true"></i>
                </button>
                <button type="button" class="btnrating btn btn-default btn-sm" data-attr="2" id="rating-star-2">
                    <i class="fa fa-star" aria-hidden="true"></i>
                </button>
                <button type="button" class="btnrating btn btn-default btn-sm" data-attr="3" id="rating-star-3">
                    <i class="fa fa-star" aria-hidden="true"></i>
                </button>
                <button type="button" class="btnrating btn btn-default btn-sm" data-attr="4" id="rating-star-4">
                    <i class="fa fa-star" aria-hidden="true"></i>
                </button>
                <button type="button" class="btnrating btn btn-default btn-sm" data-attr="5" id="rating-star-5">
                    <i class="fa fa-star" aria-hidden="true"></i>
                </button>
            </div>
            <div class="form-group review-sect">
                <p class="make-bold">Share a testimonial about this course</p>
                <textarea class="form-control" id="" rows="5"></textarea>
            </div>
            <div class="form-group review-sect">
                <p class="make-bold"><span class="required">*</span> Would you recommend this programme to someone else?</p>
                <div class="ml-4">
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
            </div>
            <p class="make-bold"><span class="required">*</span> Permission to share</p>
            <div class="ml-4">
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="shareTestimonialContent">
                    <label class="form-check-label" for="shareTestimonialContent">Yes, please share my feedback.</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="shareTestimonialPic">
                    <label class="form-check-label" for="shareTestimonialPic">You can share my name and photo.</label>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-lg-8">
                    <button class="btn btn-danger btn-block">Submit & Download</button>
                </div>
                 <div class="form-group col-lg-4">
                    <button class="btn btn-dark btn-block" data-dismiss="modal">Skip</button>
                </div>
            </div>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>


<?php include_once('../components/footer.php'); ?>