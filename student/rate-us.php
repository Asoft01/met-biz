<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="student_portal margin-top-00">
    <div class="container-fluid">
        <div class="row  flex-column-reverse flex-lg-row">
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
            <div class="col-lg-8">
                <div class="card assignment-info">
                    <div class="card-header assignment-ttle">
                        <i class="fa fa-book"></i> Rating
                    </div>
                    <div class="card-body assignment-modules">
                        <div class="learning-review-sect">
                            <div class='container'>
                                <div class="row">
                                    <div class="col-lg-8 mx-auto">
                                        <h2 class="mb-4 learning-review-heading">Rate Us</h2>
                                        <hr />
                                        <form>
                                            <div class="form-group review-sect" id="rating-ability-wrapper">
                                                <label class="control-label" for="rating">
                                                    <span class="field-label-header"><span class="required">*</span> How would you rate our ability?</span><br>
                                                    <span class="field-label-info"></span>
                                                    <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
                                                </label>
                                                <h2 class="bold rating-header">
                                                    <span class="selected-rating">1</span><small> / 5</small>
                                                </h2>
                                                <button type="button" class="btnrating btn btn-default btn-sm btn-warning" data-attr="1" id="rating-star-1">
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
                                                <p>Share a testimonial about this course</p>
                                                <textarea class="form-control" id="" rows="5"></textarea>
                                            </div>
                                            <div class="form-group review-sect">
                                                <p><span class="required">*</span> Would you recommend this programme to someone else?</p>
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
                                             <p><span class="required">*</span> Permission to share</p>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="shareTestimonialContent">
                                                <label class="form-check-label" for="shareTestimonialContent">Yes, please share my feedback.</label>
                                            </div>

                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="shareTestimonialPic">
                                                <label class="form-check-label" for="shareTestimonialPic">You can share my name and photo.</label>
                                            </div>

                                            <div class="form-group">
                                                <button class="btn btn-danger btn-block">Submit <i class="fa fa-check"></i></button>
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