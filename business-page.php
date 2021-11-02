<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/banners/business-page.jpg);">
    <div class='overlay'></div>
    <div class="container">
        <div class="overlay-text">
            <h1>MSBM for Business: Let's work together</h1>
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
    <div class="degree-programme">
        <div class="container">
            <div class='row '>
                <div class='col-lg-8 degree-info-accordion'>
                    <div class="business-page">
                        <div class="row bus-content">
                            <div class="col-md-6 business-content">
                                <h4>Employee training and capacity building</h4>
                                <div class="bus">
                                    <p>MSBM’ focus is to provide practical training that delivers results. Our training, therefore, is focused on both the acquisition of knowledge and understanding as well as the application in context. Underpinning this principle is MSBM commitment to provide specialist training by experts who are in the forefront of their fields, be it in regulation or industry.</p>
                                </div>
                            </div>
                            <div class="col-md-6 bus-img">
                                <img src="<?php echo ROOT_DIR; ?>images/dubai-mba.jpg" class="img-fluid" />
                            </div>
                        </div>
                        <div class="row flex-column-reverse flex-lg-row bus-content">
                            <div class="col-md-6 bus-img">
                                <img src="<?php echo ROOT_DIR; ?>images/Human-Resource.jpg" class="img-fluid" />
                            </div>
                            <div class="col-md-6 business-content">
                                <h4>Your growth is our passion</h4>
                                <div class="bus">
                                    <p>The current economic uncertainty has focused performance driven organizations on re-examining their performances and competitive positions in order to fashion out a means of remaining competitive. Organisations have come to realise that their biggest assets are their people and have become dedicated to maximizing the potential of these assets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row bus-content flex-column-reverse flex-lg-row">
                            <div class="col-md-6 business-content">
                                <h4>We can help grow your team</h4>
                                <div class="bus">
                                    <p>Course delivery styles and formats are dependent on the nature of the subject matter, level of delegate knowledge and course objectives. However, with all courses, an interactive approach is adopted - with delegates encouraged to fully participate in discussions and debates in order to further reinforce their understanding.</p>
                                </div>
                                <div><a href="#seminar" class="btn btn-dark btn-block">View all training and seminars</a></div>
                            </div>
                            <div class="col-md-6 bus-img">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/business-page-content.jpg" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-lg-4'>
                    <div class='request mb-4'>
                        <h4>Request More Details</h4>
                        <hr />
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option selected disabled hidden value="">Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <select class='form-control'>
                                    <option selected disabled hidden>Country</option>
                                    <option>United Arab Emirates</option>
                                    <option>United Kingdom</option>
                                    <option>Nigeria</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Company">
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option selected disabled hidden value="">Company Size</option>
                                    <option>1-5</option>
                                    <option>6-20</option>
                                    <option>20-50</option>
                                    <option>51-100</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Job Title">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="What are your training needs?">
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option selected disabled hidden value="">Do you make training decision?</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Proposed Date">
                            </div>
                            <div class="form-group">
                                <select class='form-control'>
                                    <option selected disabled hidden>Proposed Location/country</option>
                                    <option>United Kingdom</option>
                                    <option>Nigeria</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-link btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="help-grow-team-section why_msbm bus-sect-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="sub-help-grow text-center">
                        <p>We can grow your team which will in turn grow your business.<br /> We adopt methods such as</p>
                    </div>
                    <ul class="col-count-bus">
                        <li>Clearly explained training objectives set at the beginning of a course.</li>
                        <li>Interactive dialogue throughout.</li>
                        <li>Opportunities for Q & A sessions and panel discussions.</li>
                        <li>Case studies or real life examples to support theory.</li>
                        <li>Summary of learning outcomes at course conclusion.</li>
                        <li>Copies of all course notes and presentations.</li>
                        <li>Role Plays</li>
                        <li>Where the material warrants it, MSBM courses employ the use of multi-media such as video to reinforce learning and to place theory firmly into context.</li>
                    </ul>
                </div>
                <!-- <div class="row text-center mt-5">
                    <div class='col-lg-3'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/target.svg" class="img-semp" /></p>
                        <p class="text">Clearly explained training objectives set at the beginning of a course</p>
                    </div>
                    <div class='col-lg-3'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/speak.svg" class="img-semp" /></p>
                        <p class="text">Interactive dialogue throughout</p>
                    </div>
                    <div class='col-lg-3'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/questions.svg" class="img-semp" /></p>
                        <p class="text">Opportunities for Q & A sessions and panel discussions </p>
                    </div>
                    <div class='col-lg-3'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/case-study.svg" class="img-semp" /></p>
                        <p class="text">Case studies or real life examples to support theory</p>
                    </div>
                    <div class='col-lg-4'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/online-course.svg" class="img-semp" /></p>
                        <p class="text">Summary of learning outcomes at course conclusion</p>
                    </div>
                    <div class='col-lg-4'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/course.svg" class="img-semp" /></p>
                        <p class="text">Copies of all course notes and presentations</p>
                    </div>
                    <div class='col-lg-4'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/partner.svg" class="img-semp" /></p>
                        <p class="text">Role Plays</p>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class='col-lg-4'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/backpack.svg" class="img-semp" /></p>
                        <p class="text">Where the material warrants it, MSBM courses employ the use of multi-media such as video to reinforce learning and to place theory firmly into context.</p>
                    </div>
                    <div class="col-lg-4"></div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- <div class="why_msbm why-content">
        <div class="container">
            <h2 class="text-center">Why MSBM Business</h2>
            <br />
            <div class="row text-center">
                <div class='col-md-4'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/prize.svg" class="img-fluid" /></p>
                    <p class="text">UK Certificate</p>
                    <p class='sub-text'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut dolorum, ratione nesciunt praesentium pariatur commodi! Optio cumque eveniet.</p>
                </div>
                <div class='col-md-4'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/discount.svg" class="img-fluid" /></p>
                    <p class="text">Work with your budget</p>
                    <p class='sub-text'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut dolorum, ratione nesciunt praesentium pariatur commodi! Optio cumque eveniet.</p>
                </div>
                <div class='col-md-4'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/growth.svg" class="img-fluid" /></p>
                    <p class="text">Reporting</p>
                    <p class='sub-text'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut dolorum, ratione nesciunt praesentium pariatur commodi! Optio cumque eveniet.</p>
                </div>
                <div class='col-md-4'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/invention.svg" class="img-fluid" /></p>
                    <p class="text">Customised Solutions</p>
                    <p class='sub-text'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut dolorum, ratione nesciunt praesentium pariatur commodi! Optio cumque eveniet.</p>
                </div>
                <div class='col-md-4'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/book.svg" class="img-fluid" /></p>
                    <p class="text">Practical Case Studies</p>
                    <p class='sub-text'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut dolorum, ratione nesciunt praesentium pariatur commodi! Optio cumque eveniet.</p>
                </div>
                <div class='col-md-4'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/school.svg" class="img-fluid" /></p>
                    <p class="text">Classroom Programmes</p>
                    <p class='sub-text'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut dolorum, ratione nesciunt praesentium pariatur commodi! Optio cumque eveniet.</p>
                </div>
            </div>
        </div>
    </div> -->

    <div class="dual-btn mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class='btn btn-dark mb-2 btn-block request_more'>Request More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="business-features-sect bg-black py-5 text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-3">
                    <h1 class="make-bold">Request For a Business Account Demo</h1>
                    <p>Experience a customised demo and find out why MSBM is the right choice for your organization.</p>
                    <h4 class="make-bold">Benefits</h4>
                    <ul class="col-count-bus">
                        <li>Lecture in progress</li>
                        <li>Lecture completed</li>
                        <li>Lecture outstanding</li>
                        <li>Last Login Date</li>
                        <li>Asssignment Report</li>
                        <li>Feedback Report</li>
                        <li>Certificate Download</li>
                    </ul>
                    <a href="/signup" class="btn btn-danger make-bold text-uppercase">Get Started <i class="fa fa-chevron-right"></i></a>
                </div>
                <div class="col-lg-6 mb-3">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <ol class="carousel-indicators carousel-Business-Indict">
                                <li data-target="#carouselBusinessIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselBusinessIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselBusinessIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/biz-application-1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/biz-application-2.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/biz-application-3.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev carousel-position-center" href="#carouselExampleFade" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next carousel-position-center" href="#carouselExampleFade" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="landing-video">
        <div class="container">
            <div class="row">
                <div class="landing-pos">
                    <div class="col-lg-6">
                        <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/MVyjSPtKEK0?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
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
                <!-- <div class="col-lg-4 mx-auto mt-3">
                    <p class="text-center"> <a href="#" class="btn btn-dark mb-2 btn-block">Enroll Now</a></p>
                </div> -->
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
                <div class="col-lg-6 col-6 no-margin-left reward-img" style="background-image: url(images/hrm-1.jpg);"></div>
                <div class="col-lg-6 col-6 middle-it no-margin-right reward-content" style="display: flex; justify-content: center; align-items: center;">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <h3>Reward your Employees with a certificate from MSBM UK</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="logo-banner branded">
        <div class="container">
            <h2 class="client-heading"> Our Clients Are From</h3>
                <div class="row text-center">
                    <!-- <div class="col-md-12">
                    <img src="<?php echo ROOT_DIR; ?>images/logos-banner2.png" class="img-fluid" />
                </div> -->
                    <div class="col-3">
                        <img src="<?php echo ROOT_DIR; ?>images/Logos/Coloured/msbm-coca-cola.png" class="img-fluid img-brand" />
                    </div>
                    <div class="col-3">
                        <img src="<?php echo ROOT_DIR; ?>images/Logos/Coloured/msbm-cadbury.png" class="img-fluid img-brand" />
                    </div>
                    <div class="col-3">
                        <img src="<?php echo ROOT_DIR; ?>images/Logos/Coloured/msbm-mobil.png" class="img-fluid img-brand" />
                    </div>
                    <div class="col-3">
                        <img src="<?php echo ROOT_DIR; ?>images/Logos/Coloured/msbm-guinness.png" class="img-fluid img-brand" />
                    </div>
                    <div class="col-3">
                        <img src="<?php echo ROOT_DIR; ?>images/Logos/Coloured/msbm-p-and-g.png" class="img-fluid img-brand" />
                    </div>
                    <div class="col-3">
                        <img src="<?php echo ROOT_DIR; ?>images/Logos/Coloured/msbm-shell.png" class="img-fluid img-brand" />
                    </div>
                    <div class="col-3">
                        <img src="<?php echo ROOT_DIR; ?>images/Logos/Coloured/msbm-toyota.png" class="img-fluid img-brand" />
                    </div>
                    <div class="col-3">
                        <img src="<?php echo ROOT_DIR; ?>images/Logos/Coloured/msbm-unilever.png" class="img-fluid img-brand" />
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

<div class="find course-list-msbm" id="seminar">
    <div class="container">
        <p class="heading-find">See our training and conference calendar</p>
        <div class="row myflexx">
            <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
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
                        <div class="card-info-btn">
                            <button class="btn btn-dark btn-block mt-auto">Find More</button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
                <a href="" class="card-ahref-flex">
                    <!-- <span class="free-course-tag">PART OF A DEGREE</span> -->
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
                    <!-- <span class="free-course-tag">PART OF A DEGREE</span> -->
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
                    <!-- <span class="free-course-tag">PART OF A DEGREE</span> -->
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
            <button class="btn btn-normal">View more courses in Nigeria <i class="fa fa-chevron-right slide-icon"></i></button>
        </div>
    </div>
</div>


<?php include_once('components/footer.php'); ?>

</body>

</html>