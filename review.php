<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class="jumbotro intro-main-sect bg-lighter-1 pad-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="make-bold">Student Reviews</h1>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="review-count">
                        <span class="text-muted">Reviews 20,000</span>
                    </div>
                    <div class="review-status">
                        <span class="make-bold text-muted">Excellent</span>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="">
                        <p class="mb-0"><img src="<?php echo ROOT_DIR; ?>images/banners/stars-rating.svg" class="img-fluid" width="200" /></p>
                    </div>
                    <div class="review-score">
                        <span class="make-bold">4.8 <i class="fa fa-info-circle cursor-pointer" data-container="body" data-toggle="popover" data-placement="bottom" data-content="How do we work out the overall star rating on MSBM? It's all based on reviewer feedback! And it's more than just an average of all review star ratings. It takes a bunch of things into account, like the age of reviews and the number of reviews."></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="filters">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="row">
                        <div class="col-md-3 mt-3">
                            <select class="form-control">
                                <option>Programme Type</option>
                                <option>Masters</option>
                                <option>Doctorate</option>
                                <option>Bachelor Degree</option>
                                <option>Post graducate</option>
                            </select>
                        </div>
                        <div class="col-md-3 mt-3">
                            <select class="form-control">
                                <option>Programmes Category</option>
                                <option>Health &amp; Psychology</option>
                                <option>Literature</option>
                                <option>Politics</option>
                            </select>
                        </div>
                        <div class="col-md-3 mt-3">
                            <select class="form-control">
                                <option>Study Type</option>
                                <option>Online</option>
                                <option>Offline</option>

                            </select>
                        </div>
                        <div class="col-md-3 mt-3">
                            <button class='btn btn-dark btn-block'>Search</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div> -->

<div class="main-content">
    <div class="degree-programme">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto about-msbm">
                    <div aria-label="breadcrumb">
                        <ol class="breadcrumb nav-breadcrumb-msbm">
                            <li class="breadcrumb-item nav-breadcrumb-msbm-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item nav-breadcrumb-msbm-item active" aria-current="page">
                                Review
                            </li>
                        </ol>
                    </div>
                    <div class="review-content-sect">
                        <div class="card review-content-card mb-4">
                            <div class="card-body review-content-card-body">
                                <div class="review-count mb-3">
                                    <h3 class="make-bold">Reviews <span class="text-muted">20,000</span></h3>
                                </div>
                                <hr/>
                                <div class="review-progress">
                                    <!-- <div class="progress mb-3">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> -->
                                    <form>
                                        <div class="progress-set mb-3">
                                            <div class="row align-items-center justify-content-between progress-status">
                                                <div class="col-lg-2 col-2">
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input text-dark" id="reviewCheck1">
                                                        <label class="form-check-label ft-xs make-bold" for="reviewCheck1"> Excellent</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="progress mb-3">
                                                        <div class="progress-bar bg-secondary state-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-2 d-none d-lg-block d-xl-block">
                                                    <p class="float-right text-dark ft-xs make-bold">75%</p>
                                                </div>
                                            </div>

                                            <div class="row align-items-center justify-content-between progress-status">
                                                <div class="col-lg-2 col-2">
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input text-dark" id="reviewCheck2">
                                                        <label class="form-check-label ft-xs make-bold" for="reviewCheck2"> Good</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="progress mb-3">
                                                        <div class="progress-bar bg-secondary state-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-2 d-none d-lg-block d-xl-block">
                                                    <p class="float-right text-dark ft-xs make-bold">80%</p>
                                                </div>
                                            </div>

                                            <div class="row align-items-center justify-content-between progress-status">
                                                <div class="col-lg-2 col-2">
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input text-dark" id="reviewCheck3">
                                                        <label class="form-check-label ft-xs make-bold" for="reviewCheck3"> Average</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="progress mb-3">
                                                        <div class="progress-bar bg-secondary state-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-2 d-none d-lg-block d-xl-block">
                                                    <p class="float-right text-dark ft-xs make-bold">60%</p>
                                                </div>
                                            </div>

                                            <div class="row align-items-center justify-content-between progress-status">
                                                <div class="col-lg-2 col-2">
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input text-dark" id="reviewCheck4">
                                                        <label class="form-check-label ft-xs make-bold" for="reviewCheck4"> Poor</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="progress mb-3">
                                                        <div class="progress-bar bg-secondary state-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-2 d-none d-lg-block d-xl-block">
                                                    <p class="float-right text-dark text-dark ft-xs make-bold">25%</p>
                                                </div>
                                            </div>

                                            <div class="row align-items-center justify-content-between progress-status">
                                                <div class="col-lg-2 col-2">
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input text-dark" id="reviewCheck1" checked>
                                                        <label class="form-check-label ft-xs make-bold" for="reviewCheck1"> Bad</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-9">
                                                    <div class="progress mb-3">
                                                        <div class="progress-bar bg-danger state-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-2 d-none d-lg-block d-xl-block">
                                                    <p class="float-right text-dark ft-xs make-bold">15%</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-dark">Apply Filter</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card review-main-content mb-4">
                            <div class="card-header bg-white">
                                <div class="media align-items-center">
                                    <div class="mr-3 review-image-view bord-rad-50">
                                        <img src="<?php echo ROOT_DIR; ?>images/banners/54.jpg" class="mr-3 card-image-set" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 make-bold">Jessica Parker Simeon</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="review-inner-content-status mb-3">
                                    <div class="col-lg-5 pl-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="">
                                                <p class="mb-0"><img src="<?php echo ROOT_DIR; ?>images/banners/green-stars.png" class="img-fluid" width="120" /></p>
                                            </div>
                                            <div class="review-score">
                                                <h6 class="mb-0"><i class="fa fa-check-circle fa-lg text-success"></i> <span class="text-muted">Verified</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-inner-content-container">
                                    <a href="" class="text-dark"><h5 class="make-bold">MBA Master of Business Adminstration(MBA)</h5></a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, molestiae. Quia perspiciatis assumenda fugit molestias eum facere, earum facilis! Voluptate fugit, eaque cupiditate incidunt laudantium dolorem sunt nobis commodi modi!</p>
                                </div>
                                <section class="company-reply-container">
                                    <div class="company-reply__content-wrapper pl-4">
                                        <div class="company-reply__info">
                                            <div class="brand-company-reply__company pb-2">
                                                <b>Reply from MSBM</b>
                                            </div>
                                        </div>
                                        <div class="company-reply__content">
                                            Good morning<br>Thank you for your 5* review.  We're pleased you enjoyed your course.<br>Kind regards<br>MSBM Team
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                        <div class="card review-main-content mb-4">
                            <div class="card-header bg-white">
                                <div class="media align-items-center">
                                    <div class="mr-3 review-image-view bord-rad-50">
                                        <img src="<?php echo ROOT_DIR; ?>images/banners/78.jpg" class="mr-3 card-image-set" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 make-bold">Jessica Parker Simeon</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="review-inner-content-status mb-3">
                                    <div class="col-lg-5 pl-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="">
                                                <p class="mb-0"><img src="<?php echo ROOT_DIR; ?>images/banners/primary-stars.png" class="img-fluid" width="120" /></p>
                                            </div>
                                            <div class="review-score">
                                                <h6 class="mb-0"><i class="fa fa-check-circle fa-lg text-success"></i> <span class="text-muted">Verified</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-inner-content-container">
                                    <a href="" class="text-dark"><h5 class="make-bold">MBA Master of Business Adminstration(MBA)</h5></a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, molestiae. Quia perspiciatis assumenda fugit molestias eum facere, earum facilis! Voluptate fugit, eaque cupiditate incidunt laudantium dolorem sunt nobis commodi modi!</p>
                                </div>
                                <section class="company-reply-container">
                                    <div class="company-reply__content-wrapper pl-4">
                                        <div class="company-reply__info">
                                            <div class="brand-company-reply__company pb-2">
                                                <b>Reply from MSBM</b>
                                            </div>
                                        </div>
                                        <div class="company-reply__content">
                                            Good morning<br>Thank you for your 5* review.  We're pleased you enjoyed your course.<br>Kind regards<br>MSBM Team
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                        <div class="card review-main-content mb-4">
                            <div class="card-header bg-white">
                                <div class="media align-items-center">
                                    <div class="mr-3 review-image-view bord-rad-50">
                                        <img src="<?php echo ROOT_DIR; ?>images/banners/55.jpg" class="mr-3 card-image-set" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 make-bold">Jessica Parker Simeon</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="review-inner-content-status mb-3">
                                    <div class="col-lg-5 pl-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="">
                                                <p class="mb-0"><img src="<?php echo ROOT_DIR; ?>images/banners/info-stars.png" class="img-fluid" width="120" /></p>
                                            </div>
                                            <div class="review-score">
                                                <h6 class="mb-0"><i class="fa fa-check-circle fa-lg text-success"></i> <span class="text-muted">Verified</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-inner-content-container">
                                    <a href="" class="text-dark"><h5 class="make-bold">MBA Master of Business Adminstration(MBA)</h5></a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, molestiae. Quia perspiciatis assumenda fugit molestias eum facere, earum facilis! Voluptate fugit, eaque cupiditate incidunt laudantium dolorem sunt nobis commodi modi!</p>
                                </div>
                                <section class="company-reply-container">
                                    <div class="company-reply__content-wrapper pl-4">
                                        <div class="company-reply__info">
                                            <div class="brand-company-reply__company pb-2">
                                                <b>Reply from MSBM</b>
                                            </div>
                                        </div>
                                        <div class="company-reply__content">
                                            Good morning<br>Thank you for your 5* review.  We're pleased you enjoyed your course.<br>Kind regards<br>MSBM Team
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                        <div class="card review-main-content mb-4">
                            <div class="card-header bg-white">
                                <div class="media align-items-center">
                                    <div class="mr-3 review-image-view bord-rad-50">
                                        <img src="<?php echo ROOT_DIR; ?>images/banners/55.jpg" class="mr-3 card-image-set" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 make-bold">Jessica Parker Simeon</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="review-inner-content-status mb-3">
                                    <div class="col-lg-5 pl-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="">
                                                <p class="mb-0"><img src="<?php echo ROOT_DIR; ?>images/banners/warning-stars.png" class="img-fluid" width="120" /></p>
                                            </div>
                                            <div class="review-score">
                                                <h6 class="mb-0"><i class="fa fa-check-circle fa-lg text-success"></i> <span class="text-muted">Verified</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-inner-content-container">
                                    <a href="" class="text-dark"><h5 class="make-bold">MBA Master of Business Adminstration(MBA)</h5></a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, molestiae. Quia perspiciatis assumenda fugit molestias eum facere, earum facilis! Voluptate fugit, eaque cupiditate incidunt laudantium dolorem sunt nobis commodi modi!</p>
                                </div>
                                <section class="company-reply-container">
                                    <div class="company-reply__content-wrapper pl-4">
                                        <div class="company-reply__info">
                                            <div class="brand-company-reply__company pb-2">
                                                <b>Reply from MSBM</b>
                                            </div>
                                        </div>
                                        <div class="company-reply__content">
                                            Good morning<br>Thank you for your 5* review.  We're pleased you enjoyed your course.<br>Kind regards<br>MSBM Team
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                        <div class="card review-main-content mb-4">
                            <div class="card-header bg-white">
                                <div class="media align-items-center">
                                    <div class="mr-3 review-image-view bord-rad-50">
                                        <img src="<?php echo ROOT_DIR; ?>images/banners/Portrait_Placeholder.png" class="mr-3 card-image-set" alt="...">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 make-bold">Jessica Parker Simeon</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="review-inner-content-status mb-3">
                                    <div class="col-lg-5 pl-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="">
                                                <p class="mb-0"><img src="<?php echo ROOT_DIR; ?>images/banners/danger-stars.png" class="img-fluid" width="120" /></p>
                                            </div>
                                            <div class="review-score">
                                                <h6 class="mb-0"><i class="fa fa-check-circle fa-lg text-success"></i> <span class="text-muted">Verified</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-inner-content-container">
                                    <a href="" class="text-dark"><h5 class="make-bold">MBA Master of Business Adminstration(MBA)</h5></a>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, molestiae. Quia perspiciatis assumenda fugit molestias eum facere, earum facilis! Voluptate fugit, eaque cupiditate incidunt laudantium dolorem sunt nobis commodi modi!</p>
                                </div>
                                <!-- <section class="company-reply-container">
                                    <div class="company-reply__content-wrapper pl-4">
                                        <div class="company-reply__info">
                                            <div class="brand-company-reply__company pb-2">
                                                <b>Reply from MSBM</b>
                                            </div>
                                        </div>
                                        <div class="company-reply__content">
                                            Good morning<br>Thank you for your 5* review.  We're pleased you enjoyed your course.<br>Kind regards<br>MSBM Team
                                        </div>
                                    </div>
                                </section> -->
                            </div>
                        </div>

                        <div aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="demanding-course no-sticky">
                        <div class="find course-list-msbm mt-0">
                            <div class="container">
                                <div class="row myflexx">
                                    <div class="col-md-12 col-12 col-lg-12 col-xl-12 card">
                                        <h4 class="about-content-heading">Best selling course</h4>
                                        <a href="" class="card-ahref-flex">
                                            <!-- <span class="free-course-tag">PART OF A DEGREE</span> -->
                                            <div class="card-img-wrap">
                                                <img src="<?php echo ROOT_DIR; ?>images/bg2.jpg" class="card-img-top" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text card-uni">UK Partner University</p>
                                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                <div class="row">
                                                    <div class="col-5 mb-2">
                                                        <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                                    </div>
                                                    <div class="col-7 mb-2">
                                                        <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                                    </div>
                                                    <div class="col-5 mb-2">
                                                        <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                                    </div>
                                                    <div class="col-7 mb-2">
                                                        <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="col-md-12 text-left">
                                            <button class="btn btn-normal">Click here to find out more<i class="fa fa-chevron-right slide-icon"></i></button>
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
</div>

<?php include_once('components/footer.php'); ?>

<script>
    $(function() {
        $('[data-toggle="popover"]').popover()
    })
</script>

</body>

</html>
