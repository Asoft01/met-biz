<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/11.jpg);">
    <div class='overlay'></div>
    <div class="container">
        <div class="overlay-text">
            <h1>Business Management Courses in Nigeria</h1>
        </div>
    </div>
</div>

<div class="filters">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="row">
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
                                <option>Programme Type</option>
                                <option>Masters</option>
                                <option>Doctorate</option>
                                <option>Bachelor Degree</option>
                                <option>Post graducate</option>
                            </select>
                        </div>
                        <div class="col-md-3 mt-3">
                            <select class="form-control">
                                <option>Degree Type</option>
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
</div>

<div class="main-content">
    <!-- <div class="categories why_msbm">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3 cat_courses">
                    <h2>Business Management Courses</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt magnam rerum, natus sed illum ullam quibusdam, nemo voluptatum voluptate reiciendis, voluptates molestiae eaque culpa adipisci soluta aut perferendis facere odit! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam modi reiciendis, magnam delectus eius non dolor! Ex maxime non voluptates corporis blanditiis, assumenda consequatur iure vero voluptas, iusto adipisci pariatur!</p>
                </div>
            </div>
        </div>
    </div> -->
    <div class="categories_features why_msbm mb-3">
        <div class="container">
            <div class="row">
                <div class='col-md-4'>
                    <div class="media offers">
                        <img src="<?php echo ROOT_DIR; ?>images/icons/wifi.svg" class="mr-3 img-fluid" alt="msbm">
                        <div class="media-body">
                            <h5 class="mt-0">100% Online</h5>
                            <p>24hours access to all programmes</p>
                        </div>
                    </div>
                </div>
                <div class='col-md-4'>
                    <div class="media offers">
                        <img src="<?php echo ROOT_DIR; ?>images/icons/discount.svg" class="mr-3 img-fluid" alt="msbm">
                        <div class="media-body">
                            <h5 class="mt-0">Low Fees</h5>
                            <p>All our programmes are highly subsidised with discount up to 75%</p>
                        </div>
                    </div>
                </div>
                <div class='col-md-4'>
                    <div class="media offers">
                        <img src="<?php echo ROOT_DIR; ?>images/icons/dashboard.svg" class="mr-3 img-fluid" alt="msbm">
                        <div class="media-body">
                            <h5 class="mt-0">Boost Your Career</h5>
                            <p>Take your career to the next level with any of our degree programmes or a free course</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="category-overview">
        <div class="container category-overview-container">
            <div class="row category-overview-row">
                <div class="col-md-12 category-overview-col">
                    <h4>Special Executive Masters Programme</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt magnam rerum, natus sed illum ullam quibusdam, nemo voluptatum voluptate reiciendis, voluptates molestiae eaque culpa adipisci soluta aut perferendis facere odit! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam modi reiciendis, magnam delectus eius non dolor! Ex maxime non voluptates corporis blanditiis, assumenda consequatur iure vero voluptas, iusto adipisci pariatur!</p>
                    <div class="accordion" id="innerAccordion">
                        <div class="card">
                            <div class="card-header" id="headingInnerOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerOne" aria-expanded="true" aria-controls="collapseInnerOne">
                                        <div class="media">
                                            <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                            <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                            <div class="media-body">
                                                Course Overview
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseInnerOne" class="collapse show" aria-labelledby="headingInnerOne" data-parent="#innerAccordion">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingInnerTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerTwo" aria-expanded="false" aria-controls="collapseInnerTwo">
                                        <div class="media">
                                            <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                            <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                            <div class="media-body">
                                                Stage One: Level 7 Diploma in Strategic Management and Leadership (QCF)
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseInnerTwo" class="collapse" aria-labelledby="headingInnerTwo" data-parent="#innerAccordion">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingInnerThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerThree" aria-expanded="false" aria-controls="collapseInnerThree">
                                        <div class="media">
                                            <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                            <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                            <div class="media-body">
                                                Stage Two: Masters of Business Management (Top-up)
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseInnerThree" class="collapse" aria-labelledby="headingInnerThree" data-parent="#innerAccordion">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="course-list-msbm-prog">
        <div class="categories why_msbm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-3 cat_courses">
                        <h2>Professional Certificate Courses</h2>
                        <p>These are short online certificate courses designed to help you develop professionally and achieve your career goals, while you earn a professional certificate which qualifies you for the appropriate continuous professional development (CPD).</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="find course-list-msbm">
            <div class="container">
                <div class="row myflex">
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">BBA<br>Bachelor of Business</h6>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/bg8.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-normal">View more Professional Certificate Courses <i class="fa fa-chevron-right slide-icon"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="course-list-msbm-prog">
        <div class="categories why_msbm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-3 cat_courses">
                        <h2>Special Executive Masters Courses</h2>
                        <p>These are short online certificate courses designed as a refresher course for those who have had their Masters a long time ago and need a quick reminder or a crash programme for those very experienced professionals who never made time out for their masters yet they require the academic and practical relevance of this masters’ experience. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="find course-list-msbm">
            <div class="container">
                <div class="row myflex">
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">BBA<br>Bachelor of Business</h6>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/bg8.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-normal">View more Special Executive Masters Courses <i class="fa fa-chevron-right slide-icon"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="course-list-msbm-prog">
        <div class="categories why_msbm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-3 cat_courses">
                        <h2>Master's Degree</h2>
                        <p>The Master's degree courses are dual qualifications consisting of Level 7 Postgraduate Diploma (OFQUAL certificates) + Top-up programme awarded by partner universities. These programmes are a total of 180 credits.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="find course-list-msbm">
            <div class="container">
                <div class="row myflex">
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">BBA<br>Bachelor of Business</h6>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/bg8.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-normal">View more Master's Degree <i class="fa fa-chevron-right slide-icon"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="course-list-msbm-prog">
        <div class="categories why_msbm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-3 cat_courses">
                        <h2>International Postgraduate Diploma</h2>
                        <p>These programmes are 120 credit and it's available in various subjects. This programme allows for credit transfer.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="find course-list-msbm">
            <div class="container">
                <div class="row myflex">
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">BBA<br>Bachelor of Business</h6>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/bg8.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-normal">View more International Postgraduate Diploma <i class="fa fa-chevron-right slide-icon"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="course-list-msbm-prog">
        <div class="categories why_msbm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-3 cat_courses">
                        <h2>Bachelor's Degree</h2>
                        <p>The Bachelor's degree courses are dual qualifications consisting of Level 4 & 5 Diploma (OFQUAL certificates) + Top-up programme awarded by partner universities. These programmes are a total of 540 credits.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="find course-list-msbm">
            <div class="container">
                <div class="row myflex">
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">BBA<br>Bachelor of Business</h6>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/bg8.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-normal">View more Bachelor's Degree <i class="fa fa-chevron-right slide-icon"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="course-list-msbm-prog">
        <div class="categories why_msbm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-3 cat_courses">
                        <h2>Conferences / Trainings</h2>
                        <p>We have mapped out open classroom training for you, focused on specific skills and industries. It is imperative that participants are able to practically apply their newly acquired skills in the workplace. We work closely with our delegates to establish a detailed knowledge of addressing specific issues.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="find course-list-msbm">
            <div class="container">
                <div class="row myflex">
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">BBA<br>Bachelor of Business</h6>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/bg8.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-normal">View more Conferences / Trainings<i class="fa fa-chevron-right slide-icon"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('components/footer.php'); ?>

</body>

</html>