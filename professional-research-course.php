<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/banners/short-course-landing.jpg);">
    <div class='overlay'></div>
    <div class="container">
        <div class="overlay-text">
            <h1>Professional Research Courses in Nigeria</h1>
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
    <div class="degree-programme list-thumbnail">
        <div class="container">
            <div class='row '>
                <div class='col-lg-12 degree-info-accordion'>
                    <div class='degree-details'>
                        <div class="row pay-program">
                            <!-- <div class="col-md-6 col-12 mb-5">
                                <button class="btn btn-dark btn-lg btn-width-sm">
                                    Enroll Now
                                </button>
                            </div>
                            <div class="col-md-6 col-12 mb-5">
                                <h2 class="pay-price-discount"><img src="<?php echo ROOT_DIR; ?>images/icons/discount.svg" class="img-fluid discount-icon" /> <span class="x-price">&pound;5,000</span> &pound;2,500</h2>
                            </div> -->
                            <div class="col-lg-12 mb-5">
                                <span class="pay-price-discount"><img src="<?php echo ROOT_DIR; ?>images/icons/discount.svg" class="img-fluid discount-icon" /> <span class="x-price">&pound;5,000</span> &pound;2,500</span> <button class="btn btn-dark btn-lg btn-width-sm">Enroll Now</button>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/calendar.svg" class="mr-3 img-semp" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Average Completion Time</h5>
                                        2 Weeks
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/support.svg" class="mr-3 img-semp" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Efforts</h5>
                                        2 hours
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/jigsaws.svg" class="mr-3 img-semp" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Level</h5>
                                        Advanced
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="mr-3 img-semp" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Start Time</h5>
                                        Any Time
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class="media offers">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/wifi.svg" class="mr-3 img-semp" alt="msbm">
                                    <div class="media-body">
                                        <h5 class="mt-0">100% Online</h5>
                                        <p>Study online with ease.</p>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class="media offers">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/fast.svg" class="mr-3 img-semp" alt="msbm">
                                    <div class="media-body">
                                        <h5 class="mt-0">Unlimited Access</h5>
                                        <p>24/7 unlimited access with pre-recorded lectures. </p>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class="media offers">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/discount.svg" class="mr-3 img-semp" alt="msbm">
                                    <div class="media-body">
                                        <h5 class="mt-0">Low Fees</h5>
                                        <p>Our fees and low and easy to pay online.</p>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-3'>
                                <div class="media offers">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/certificate.svg" class="mr-3 img-semp" alt="msbm">
                                    <div class="media-body">
                                        <h5 class="mt-0">UK CPD Certificate</h5>
                                        <p>Certificate to show what you have learnt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="homepage-category why_msbm">
                        <div class="container">
                            <div class="row">
                                <div class='col-md-3'>
                                    <div class="media offers">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/wifi.svg" class="mr-3 img-semp" alt="msbm">
                                        <div class="media-body">
                                            <h5 class="mt-0">100% Online</h5>
                                            <p>Study online with ease.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class="media offers">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/fast.svg" class="mr-3 img-semp" alt="msbm">
                                        <div class="media-body">
                                            <h5 class="mt-0">Unlimited Access</h5>
                                            <p>24/7 unlimited access with pre-recorded lectures. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class="media offers">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/discount.svg" class="mr-3 img-semp" alt="msbm">
                                        <div class="media-body">
                                            <h5 class="mt-0">Low Fees</h5>
                                            <p>Our fees and low and easy to pay online.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class="media offers">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/certificate.svg" class="mr-3 img-semp" alt="msbm">
                                        <div class="media-body">
                                            <h5 class="mt-0">UK CPD Certificate</h5>
                                            <p>Certificate to show what you have learnt.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="why_msbm why-content landing-pcc landing-main-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2>Professional Research Courses</h2>
                    <p>These are short online certificate courses designed to help you develop professionally and achieve your career goals, while you earn a professional certificate which qualifies you for the appropriate continuous professional development (CPD).</p>
                </div>
            </div>
        </div>
    </div>

    <div class="course-list-msbm-prog">
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
    <div class="ppc-intro degree-programme">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 degree-info-accordion">
                    <div class="accordion mb-5" id="msbmAccordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Course Overview <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p>The Professional Certificate in Business Ethics and Responsibility aims to enable the learner to see the business from an ethical perspective and to explore the responsibilities of the business towards the society. The learner will be able to utilize value on aligning products and corporate image with good ethics.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Module <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <p>After the successful completion of the certificate, the student will be able to:</p>
                                    <ul>
                                        <li>What is Business Ethics and Corporate
                                            Social Responsibility?</li>
                                        <li>Examine the significance of Business</li>
                                        <li>Ethics and Corporate Social</li>
                                        <li>Responsibility in strategic management</li>
                                        <li>What is the return on good corporate behaviour?</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Accreditation <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                <div class="card-body">
                                    <p>The content of this course has been independently certified as conforming to universally accepted Continuous Professional Development (CPD) guidelines.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Certificate <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                <div class="card-body">
                                    <p>Certificate of achievement will be awarded after successful completion of the course.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Entry Requirements <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                                <div class="card-body">
                                    <p>There are no strict entry requirements for this course. Work experience will be added advantage to understanding the content of the course.
                                    </p>
                                    <p>The certificate is designed to enhance the knowledge of the learner in the field. This certificate is for very one eager to know more and gets updated on current ideas in the respective field. We recommend this certificate for the following audience.</p>
                                    <ul>
                                        <li>CEO</li>
                                        <li>Director</li>
                                        <li>Manager</li>
                                        <li>Supervisor</li>
                                        <li>Strategy Manager</li>
                                        <li>Strategy Planner</li>
                                        <li>Strategic Manager</li>
                                        <li>Management Roles</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dual-btn dual-btn-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <button class='btn btn-link mb-2 btn-block'>Enroll Now</button>
                </div>
            </div>
        </div>
    </div>
    <div class="landing-video">
        <div class="container">
            <div class="row">
                <div class="landing-pos">
                    <div class="col-lg-6">
                        <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/nzntpbDicWA?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="landing-video-features tpadd">
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/laptop.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Learn fast</h5>
                                    Online courses with compact learning chapters enable you to learn business skills faster than ever.
                                </div>
                            </div>
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/phone.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Study Online</h5>
                                    Get access to online study materials. All courses are 100% online and self-paced.
                                </div>
                            </div>
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/world.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Global community</h5>
                                    No conventional requirements needed, our courses are open to all ages, professions and citizenship.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="landing-counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="counter-text">
                        <h2>36,000+</h2>
                        <span class="counter-label">Students</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="counter-text">
                        <h2>6,000+</h2>
                        <span class="counter-label">Current Students</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="counter-text">
                        <h2>400+</h2>
                        <span class="counter-label">Courses</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="counter-text">
                        <h2>160+</h2>
                        <span class="counter-label">Countries</span>
                    </div>
                </div>
                <div class="col-lg-4 mx-auto mt-3">
                    <p class="text-center"> <a href="#" class="btn btn-dark mb-2 btn-block">Enroll Now</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="landing-certificate">
        <div class="container">
            <div class="row">
                <div class="landing-pos">
                    <div class="col-lg-6">
                        <p class="text-center"> <img src="<?php echo ROOT_DIR; ?>images/banners/SEMP Dubai Sample Certificate.jpg" class="mr-3 img-certify" alt="..."></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="landing-video-features tpadd">
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/diploma.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Get Your Course Certificate</h5>
                                    You will receive a highly valued digital certificate at the end of each course.
                                </div>
                            </div>
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/phone.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Learn Practical Business Modules</h5>
                                    Complete several modules ranging from Business Leadership and Managing People.
                                </div>
                            </div>
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/world.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Meet Global Executives</h5>
                                    Meet world class Business Executives globally as you study the SEMP.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="reward-msbm">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-margin-left reward-img" style="background-image: url(images/hrm-1.jpg);"></div>
                <div class="col-md-6 middle-it no-margin-right reward-content" style="display: flex;justify-content: center; align-items: center;">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <h3>Impress your Employer with your new certificate</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="student-category-section why_msbm">
    <h2 class="text-center mb-3">Student Category</h2>
    <div class="container student-cat-container">
        <div class="row student-cat-row">
            <div class="col-lg-4 col-12">
                <div class="card">
                    <h5 class="card-header text-center">
                        Industry
                    </h5>
                    <div class="card-body student-cat-pie">
                        <canvas id="chartIndustry"></canvas>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-5 col-12">
                    <div class="card">
                        <h5 class="card-header text-center">
                           Gender
                        </h5>
                        <div class="card-body">
                            <canvas id="chartGender"></canvas>
                        </div>
                    </div>
                </div> -->
            <div class="col-lg-4 col-12">
                <div class="card">
                    <h5 class="card-header text-center">
                        Position
                    </h5>
                    <div class="card-body student-cat-pie">
                        <canvas id="chartPosition"></canvas>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-12">
                <div class="card">
                    <h5 class="card-header text-center">
                        Age
                    </h5>
                    <div class="card-body">
                        <canvas id="chartAge"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="landing-testimonial why_msbm landing-grey">
    <div class="container">
        <h2 class="text-center mb-5">What our clients say</h2>
        <div class="row text-center">
            <div class="col-lg-4">
                <div class="user-testify">
                    <img src="<?php echo ROOT_DIR; ?>images/banners/Alsuwaidi R..png" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                    <p>
                        <i>"All three of the SEMP Online courses I've taken have proven helpful in my role as Office Manager. It's already building the foundation for me to advance and hopefully realize my ambition to lead the company as CFO one day."</i>
                    </p>
                    <p>Alsuwaidi R., Alumni</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="user-testify">
                    <img src="<?php echo ROOT_DIR; ?>images/banners/Amin Y..png" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                    <p>
                        <i>"It was interesting in that it was provocative and makes you think about the dilemmas involved and the course gave realistic examples that could be encountered in work situations."</i>
                    </p>
                    <p>Amin Y., Alumni</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="user-testify">
                    <img src="<?php echo ROOT_DIR; ?>images/banners/Haris M..png" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                    <p>
                        <i>"I received my certificate, and I would like to thank you for your support. The course was challenging, but you were always there supporting me and ready to help. I enjoyed the learning process tremendously."</i>
                    </p>
                    <p>Haris M., Alumni</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="find course-list-msbm mt-3" id="seminar">
    <div class="container">
        <p class="heading-find">See other related Professional Research Courses</p>
        <div class="row myflexx">
            <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
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
                            <button class="btn btn-dark btn-block mt-auto">Find More</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
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
                            <button class="btn btn-dark btn-block mt-auto">Find More</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
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
                            <button class="btn btn-dark btn-block mt-auto">Find More</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
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
                            <button class="btn btn-dark btn-block mt-auto">Find More</button>
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
<?php include_once('components/footer.php'); ?>

</body>

</html>