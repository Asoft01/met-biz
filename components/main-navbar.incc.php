
<div class="location">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-10">
                 <!-- <p class="text-white learn-count d-lg-none d-xl-none">30,000 Learners so far today</p> -->
             </div>
             <div class="col-lg-2">
                 <form>
                     <select class='form-control'>
                         <option>United Arab Emirates</option>
                         <option>United Kingdom</option>
                         <option>United State of America</option>
                     </select>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <nav class="navbar navbar-expand-lg navbar make-white pro-sticky-top navbar-dark bg-white navigator">
     <div class="container-fluid">
         <a class="navbar-brand mr-3" href="#"><img src="<?php echo ROOT_DIR; ?>images/banners/main-logo.png" width="100"></a>
         <ul class="navbar-nav ml-auto d-flex flex-row align-items-center">
               <li class="nav-item sign_in btn-transparent add-relative btn-sign-in-adjust d-lg-none d-xl-none rmv-rpadding mr-2">
                    <a href="<?php echo ROOT_DIR; ?>cart.php" class="nav-link sign-btn"><i class="fa fa-folder-open fa-lg"></i></a>
                    <span class="count-wish">1</span>
                </li>
             <!-- <li class="nav-item d-lg-none d-xl-none sign_in"><a href="<?php echo ROOT_DIR; ?>student/login.php" class="nav-link sign-btn text-white">Join for free</a></li> -->
             <li class="nav-item d-lg-none d-xl-none mx-2"><a href="<?php echo ROOT_DIR; ?>student/login.php" class="nav-link sign-btn text-dark font-xs mb-2">Join for free</a></li>
         </ul>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
             <!-- <span class="navbar-toggler-icon toggler-icon"></span> -->
             <i class="fa fa-bars text-dark fa-lg ml-2"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
             <ul class="navbar-nav nav-height-fix">
                 <li class="nav-item dropdown navigator-dropdown has-mega-menu" style="position:static;">
                     <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Courses <img src="<?php echo ROOT_DIR; ?>images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1"></a>
                     <div class="dropdown-menu navigator-dropdown-menu" style="width:100%">
                         <div class="px-0 container">
                             <h5 class="navbar-head-title">See all subjects available</h5>
                             <div class="row">
                                 <div class="col-md-8 ">
                                     <div class="cols-count-nav">
                                         <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>business-management.php"><img src="<?php echo ROOT_DIR; ?>images/icons/work.svg" class="img-fluid mr-2" width="30">
                                             Business Management</a>
                                         <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>health-and-psychology.php"><img src="<?php echo ROOT_DIR; ?>images/icons/heart.svg" class="img-fluid mr-2" width="30">
                                             Health and Psychology</a>
                                         <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>business-law.php"><img src="<?php echo ROOT_DIR; ?>images/icons/law.svg" class="img-fluid mr-2" width="30">
                                             Business Law</a>
                                         <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>information-technology.php"><img src="<?php echo ROOT_DIR; ?>images/icons/idea.svg" class="img-fluid mr-2" width="30"> IT</a>
                                         <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>personal-development.php"><img src="<?php echo ROOT_DIR; ?>images/icons/progress.svg" class="img-fluid mr-2" width="30"> Personal Development</a>
                                         <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>teaching-and-education.php"><img src="<?php echo ROOT_DIR; ?>images/icons/mortarboard.svg" class="img-fluid mr-2" width="30"> Teaching and Education</a>
                                         <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>health-and-safety.php"><img src="<?php echo ROOT_DIR; ?>images/icons/medicine.svg" class="img-fluid mr-2" width="30"> Health and Safety</a>
                                         <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>finance-and-accounting.php"><img src="<?php echo ROOT_DIR; ?>images/icons/money.svg" class="img-fluid mr-2" width="30"> Finance and Accounting</a>
                                         <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>office-productivity.php"><img src="<?php echo ROOT_DIR; ?>images/icons/files-and-folders.svg" class="img-fluid mr-2" width="30"> Office Productivity</a>
                                         <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>sale-and-marketing.php"><img src="<?php echo ROOT_DIR; ?>images/icons/sale.svg" class="img-fluid mr-2" width="30"> Sales and Marketing</a>
                                         <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>leadership-and-entrepreneurship.php"><img src="<?php echo ROOT_DIR; ?>images/icons/leadership.svg" class="img-fluid mr-2" width="30"> Leadership and Entrepreurship</a>
                                         <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>human-resources.php"><img src="<?php echo ROOT_DIR; ?>images/icons/search.svg" class="img-fluid mr-2" width="30"> Human Resources</a>
                                     </div>
                                 </div>
                                 <div class="col-md-4">
                                     <img src="<?php echo ROOT_DIR; ?>images/bg4-2.jpg" class="img-fluid d-none d-lg-block d-xl-block">
                                     <a href="<?php echo ROOT_DIR; ?>all-degree.php" class="btn btn-dark btn-adjustt mt-3">
                                         See all courses available
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
                 <li class="nav-item dropdown has-mega-menu programme-category-item" style="position:static;">
                     <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Category <img src="<?php echo ROOT_DIR; ?>images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1"></a>
                     <div class="dropdown-menu" style="width:100%">
                         <div class="px-0 container">
                             <div class="row">
                                 <div class="col-lg-6">
                                     <h5 class="navbar-head-cat">Degree Programmes</h5>
                                     <a href="<?php echo ROOT_DIR; ?>short-course.php">
                                         <div class="card navbar-prog-category">
                                             <div class="row no-gutters">
                                                 <div class="col-md-3 d-none d-xl-block d-lg-block">
                                                     <div class="card-img-wrap">
                                                         <img src="<?php echo ROOT_DIR; ?>images/banners/mba-degree-1.jpg" class="card-img-top prog-category-img">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-9">
                                                     <div class="card-body navbar-content-category">
                                                         <h5 class="card-title navbar-content-title"><img src="<?php echo ROOT_DIR; ?>images/icons/certificate.svg" class="img-fluid mr-2 d-lg-none d-xl-none" width="30"> Master's Degree</h5>
                                                         <p class="card-text navbar-content-text d-none d-xl-block d-lg-block d-md-block">These programmes are 180 credit programme. Level 7 + Top up programme awarded by partner university</p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <a href="<?php echo ROOT_DIR; ?>short-course.php">
                                         <div class="card navbar-prog-category">
                                             <div class="row no-gutters">
                                                 <div class="col-md-3 d-none d-xl-block d-lg-block">
                                                     <div class="card-img-wrap">
                                                         <img src="<?php echo ROOT_DIR; ?>images/banners/Business-and-Management.jpg" class="card-img-top prog-category-img">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-9">
                                                     <div class="card-body navbar-content-category">
                                                         <h5 class="card-title navbar-content-title"><img src="<?php echo ROOT_DIR; ?>images/icons/policy.svg" class="img-fluid mr-2 d-lg-none d-xl-none" width="30"> Postgraduate Diploma</h5>
                                                         <p class="card-text navbar-content-text d-none d-xl-block d-lg-block d-md-block">These programmes are 120 credit. Credit can be transferred into Top up degree.</p>

                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <a href="#">
                                         <div class="card navbar-prog-category">
                                             <div class="row no-gutters">
                                                 <div class="col-md-3 d-none d-xl-block d-lg-block">
                                                     <div class="card-img-wrap">
                                                         <img src="<?php echo ROOT_DIR; ?>images/banners/Infotech-Management.jpg" class="card-img-top prog-category-img">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-9">
                                                     <div class="card-body navbar-content-category">
                                                         <h5 class="card-title navbar-content-title"><img src="<?php echo ROOT_DIR; ?>images/icons/postgraduate.svg" class="img-fluid mr-2 d-lg-none d-xl-none" width="30"> International Postgraduate Diploma</h5>
                                                         <p class="card-text navbar-content-text d-none d-xl-block d-lg-block d-md-block">These programmes are 120 credit and it's available in various subjects.</p>

                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <a href="<?php echo ROOT_DIR; ?>short-course.php">
                                         <div class="card navbar-prog-category">
                                             <div class="row no-gutters">
                                                 <div class="col-md-3 d-none d-xl-block d-lg-block">
                                                     <div class="card-img-wrap">
                                                         <img src="<?php echo ROOT_DIR; ?>images/banners/dip-business.jpg" class="card-img-top prog-category-img">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-9">
                                                     <div class="card-body navbar-content-category">
                                                         <h5 class="card-title navbar-content-title"><img src="<?php echo ROOT_DIR; ?>images/icons/patent.svg" class="img-fluid mr-2 d-lg-none d-xl-none" width="30"> Bachelor's Degree</h5>
                                                         <p class="card-text navbar-content-text d-none d-xl-block d-lg-block d-md-block">These programmes is divided into level 4, 5 and final semester awarded by Partner University.</p>

                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                                 <div class="col-lg-6">
                                     <h5 class="navbar-head-cat">Executive Education Courses (CPD)</h5>
                                     <a href="<?php echo ROOT_DIR; ?>short-course.php">
                                         <div class="card navbar-prog-category">
                                             <div class="row no-gutters">
                                                 <div class="col-md-3 d-none d-xl-block d-lg-block">
                                                     <div class="card-img-wrap">
                                                         <img src="<?php echo ROOT_DIR; ?>images/banners/it-1.jpg" class="card-img-top prog-category-img">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-9">
                                                     <div class="card-body navbar-content-category">
                                                         <h5 class="card-title navbar-content-title"><img src="<?php echo ROOT_DIR; ?>images/icons/course.svg" class="img-fluid mr-2 d-lg-none d-xl-none" width="30"> One Week SEMP MBA</h5>
                                                         <p class="card-text navbar-content-text d-none d-xl-block d-lg-block d-md-block">The Special Executive Masters Programme are CPD courses tailors after an academic Masters</p>

                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <a href="<?php echo ROOT_DIR; ?>short-course.php">
                                         <div class="card navbar-prog-category">
                                             <div class="row no-gutters">
                                                 <div class="col-md-3 d-none d-xl-block d-lg-block">
                                                     <div class="card-img-wrap">
                                                         <img src="<?php echo ROOT_DIR; ?>images/banners/rm-1.jpg" class="card-img-top prog-category-img">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-9">
                                                     <div class="card-body navbar-content-category">
                                                         <h5 class="card-title navbar-content-title"><img src="<?php echo ROOT_DIR; ?>images/icons/stamp.svg" class="img-fluid mr-2 d-lg-none d-xl-none" width="30"> Professional Certificate Courses</h5>
                                                         <p class="card-text navbar-content-text d-none d-xl-block d-lg-block d-md-block">The professional certificate courses are CPD courses</p>

                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <a href="<?php echo ROOT_DIR; ?>short-course.php">
                                         <div class="card navbar-prog-category">
                                             <div class="row no-gutters">
                                                 <div class="col-md-3 d-none d-xl-block d-lg-block">
                                                     <div class="card-img-wrap">
                                                         <img src="<?php echo ROOT_DIR; ?>images/banners/fm-1.jpg" class="card-img-top prog-category-img">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-9">
                                                     <div class="card-body navbar-content-category">
                                                         <h5 class="card-title navbar-content-title"><img src="<?php echo ROOT_DIR; ?>images/icons/online-training.svg" class="img-fluid mr-2 d-lg-none d-xl-none" width="30"> Online SEMP</h5>
                                                         <p class="card-text navbar-content-text d-none d-xl-block d-lg-block d-md-block">The Special Executive Masters Programme are CPD courses tailors after an academic Masters</p>

                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                     <a href="<?php echo ROOT_DIR; ?>short-course.php">
                                         <div class="card navbar-prog-category">
                                             <div class="row no-gutters">
                                                 <div class="col-md-3 d-none d-xl-block d-lg-block">
                                                     <div class="card-img-wrap">
                                                         <img src="<?php echo ROOT_DIR; ?>images/banners/im-1.jpg" class="card-img-top prog-category-img">
                                                     </div>
                                                 </div>
                                                 <div class="col-md-9">
                                                     <div class="card-body navbar-content-category">
                                                         <h5 class="card-title navbar-content-title"><img src="<?php echo ROOT_DIR; ?>images/icons/research.svg" class="img-fluid mr-2 d-lg-none d-xl-none" width="30"> Professional Research Courses</h5>
                                                         <p class="card-text navbar-content-text  d-none d-xl-block d-lg-block d-md-block">The professional certificate courses are CPD courses</p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
                 <li class="nav-item dropdown has-mega-menu" style="position:static;">
                     <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Trainings <img src="<?php echo ROOT_DIR; ?>images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1"></a>
                     <div class="dropdown-menu" style="width:100%">
                         <div class="px-0 container">
                             <h5 class="navbar-head-title">MSBM FOR BUSINESS</h5>
                             <div class="row">
                                 <div class="col-md-7 col-12">
                                     <div class="training-info ml-4 mr-4">
                                         <p>Build world-class teams<br>Flexible online/classroom professionals qualification<br>for teams of any size, on any schedule, anywhere in the world.</p>
                                         <a href="<?php echo ROOT_DIR; ?>open-programme.php">
                                             <div class="card navbar-prog-category">
                                                 <div class="row no-gutters">
                                                     <div class="col-md-3 d-none d-xl-block d-lg-block">
                                                         <div class="card-img-wrap">
                                                             <img src="<?php echo ROOT_DIR; ?>images/banners/training-calender.jpg" class="card-img-top prog-category-img">
                                                         </div>
                                                     </div>
                                                     <div class="col-md-9">
                                                         <div class="card-body navbar-content-category training-navbar">
                                                             <h5 class="card-title navbar-content-title"><img src="<?php echo ROOT_DIR; ?>images/icons/calendar.svg" class="img-fluid mr-2 d-lg-none d-xl-none" width="30"> Training Calendar</h5>
                                                             <p class="card-text navbar-content-text d-none d-xl-block d-lg-block d-md-block">We have mapped out open classroom training for you, focused on specific skills and industries. It is imperative that participants are able to practically apply their newly acquired skills in the workplace.
                                                                 We work closely with our delegates to establish a detailed knowledge of addressing specific issues.</p>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </a>
                                         <a href="<?php echo ROOT_DIR; ?>business-page.php">
                                             <div class="card navbar-prog-category">
                                                 <div class="row no-gutters">
                                                     <div class="col-md-3 d-none d-xl-block d-lg-block">
                                                         <div class="card-img-wrap">
                                                             <img src="<?php echo ROOT_DIR; ?>images/banners/customized-training.jpg" class="card-img-top prog-category-img">
                                                         </div>
                                                     </div>
                                                     <div class="col-md-9">
                                                         <div class="card-body navbar-content-category training-navbar">
                                                             <h5 class="card-title navbar-content-title"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="img-fluid mr-2 d-lg-none d-xl-none" width="30"> Customised Training</h5>
                                                             <p class="card-text navbar-content-text d-none d-xl-block d-lg-block d-md-block">We can work with your organisation to develop a customised training course that meets your needs. Our customised training courses can benefit your company by helping to boost your team's professional performance. </p>

                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                 </div>

                                 <div class="col-md-1"></div>

                                 <div class="col-md-4">
                                     <img src="<?php echo ROOT_DIR; ?>images/bsc-london.jpg" class="img-fluid d-none d-lg-block d-xl-block">
                                     <a href="<?php echo ROOT_DIR; ?>all-degree.php" class="btn btn-dark btn-adjustt mt-3">
                                         See all courses available
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             </ul>
             <ul class="navbar-nav ml-auto">
                 <!-- <li class="nav-item sign_in btn-transparent add-relative btn-sign-in-adjust"><a href="<?php echo ROOT_DIR; ?>wishlist.php" class="nav-link sign-btn"><i class="fa fa-folder-open fa-lg"></i></a><span class="count-wish">10</span></li> -->
                <li class="nav-item dropdown sign_in btn-transparent add-relative btn-sign-in-adjust d-none d-lg-block d-xl-block">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-folder-open fa-lg"></i> <span class="ml-2 cart-nav-text">Course Folder</span></a><span class="count-wish">10</span>
                    </a>
                    <div class="dropdown-menu cart-dropdown p-2 text-muted" aria-labelledby="navbarDropdown">
                        <p class='text-center'>No course in your cart.</p>
                        <hr/>
                        <div class="in-cart-view-sect mb-2">
                            <div class="row align-items-center">
                                <div class="col-lg-9 mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <div class="in-cart-image-view">
                                                <img src="<?php echo ROOT_DIR; ?>images/Master of Business Administration.png" class="card-image-set" />
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <p class="ml-3 make-bold in-cart-text mb-0">Professional Certificate in Organizational Value Creation through Leadership<br/><span class="make-bold text-dark">N10,000,000.00</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <button class="btn btn-outline-danger btn-sm btn-block"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="in-cart-view-sect mb-2">
                            <div class="row align-items-center">
                                <div class="col-lg-9 mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <div class="in-cart-image-view">
                                                <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-image-set" />
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <p class="ml-3 make-bold in-cart-text mb-0">Professional Certificate in Organizational Value Creation through Leadership<br/><span class="make-bold text-dark">N10,000,000.00</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <button class="btn btn-outline-danger btn-sm btn-block"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="in-cart-view-sect mb-2">
                            <div class="row align-items-center">
                                <div class="col-lg-9 mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <div class="in-cart-image-view">
                                                <img src="<?php echo ROOT_DIR; ?>images/Master of Business Administration.png" class="card-image-set" />
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <p class="ml-3 make-bold in-cart-text mb-0">Professional Certificate in Organizational Value Creation through Leadership<br/><span class="make-bold text-dark">N10,000,000.00</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <button class="btn btn-outline-danger btn-sm btn-block"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="in-cart-view-sect mb-2">
                            <div class="row align-items-center">
                                <div class="col-lg-9 mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <div class="in-cart-image-view">
                                                <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-image-set" />
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <p class="ml-3 make-bold in-cart-text mb-0">Professional Certificate in Organizational Value Creation through Leadership<br/><span class="make-bold text-dark">N10,000,000.00</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <button class="btn btn-outline-danger btn-sm btn-block"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class=" d-flex justify-content-between align-items-center">
                            <small class="text-muted">Subtotal:</small>
                            <span class="text-muted mb-0 make-bold">NGN 10,000,000</span>
                        </div>
                         <hr/>
                        <a href="<?php echo ROOT_DIR; ?>cart.php" class="btn btn-outline-danger btn-block">View Cart</a>
                    </div>
                </li>
                 <!-- <li class="nav-item d-none d-lg-block d-xl-block sign_in register_now btn-sign-in-adjust"><a href="https://portal.msbm.org.uk/user/access" class="nav-link sign-btn text-white">Log In</a></li>
                 <li class="nav-item d-none d-lg-block d-xl-block sign_in btn-sign-in-adjust"><a href="https://portal.msbm.org.uk/user/register" class="nav-link sign-btn text-white">Join for free</a></li> -->
                 <li class="nav-item d-none d-lg-block d-xl-block btn-sign-in-adjust font-xs"><a href="https://portal.msbm.org.uk/user/access" class="nav-link sign-btn">Log In</a></li>
                 <li class="nav-item d-none d-lg-block d-xl-block btn-sign-in-adjust font-xs"><a href="https://portal.msbm.org.uk/user/register" class="nav-link sign-btn">Join for free</a></li>
             </ul>
             <!-- <span id="sofar" class="btn btn-darkkk text-center">30,000 Learners so far today</span> -->
         </div>
     </div>
 </nav>