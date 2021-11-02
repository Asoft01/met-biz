<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<!---Modal Countries that displays all the countries--->
<!-- <div class="modal fade bd-msbm-modal-xl" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="msbmModalLabel">Select a site</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="all-countries-in-the-world">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4>Europe</h4>
                            <hr />
                            <ul class="cols-count-nav country-list-pop">
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/uk.svg" class="img-fluid" /> <span> <span>United Kingdom</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/ireland.svg" class="img-fluid" /> <span> <span>Ireland</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/portugal.svg" class="img-fluid" /> <span> <span>Portugal</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/holland.svg" class="img-fluid" /> <span> <span>Netherland</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/germany.svg" class="img-fluid" /> <span> <span>Germany</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/turkey.svg" class="img-fluid" /> <span> <span>Turkey</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/malta.svg" class="img-fluid" /> <span> <span>Malta</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/cyprus.svg" class="img-fluid" /> <span> <span>Cyprus</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/france.svg" class="img-fluid" /> <span> <span>France</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/spain.svg" class="img-fluid" /> <span> <span>Spain</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/austria.svg" class="img-fluid" /> <span> <span>Austria</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/greece.svg" class="img-fluid" /> <span> <span>Greece</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/italy.svg" class="img-fluid" /> <span> <span>Italy</span>
                                    </li>
                                </a>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h4>Middle East</h4>
                            <hr />
                            <ul class="cols-count-nav country-list-pop">
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/uae.svg" class="img-fluid" /> <span> <span>United Arab Emirates</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/saudi.svg" class="img-fluid" /> <span> <span>Saudi Arabia</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/jordan.svg" class="img-fluid" /> <span> <span>Jordan</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/bahrain.svg" class="img-fluid" /> <span> <span>Bahrain</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/qatar.svg" class="img-fluid" /> <span> <span>Qatar</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/lebanon.svg" class="img-fluid" /> <span> <span>Lebanon</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/kuwait.svg" class="img-fluid" /> <span> <span>Kuwait</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/oman.svg" class="img-fluid" /> <span> <span>Oman</span>
                                    </li>
                                </a>

                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h4>Asia</h4>
                            <hr />
                            <ul class="cols-count-nav country-list-pop">
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/singapore.svg" class="img-fluid" /> <span> <span>Singapore</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/india.svg" class="img-fluid" /> <span> <span>India</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/philippines.svg" class="img-fluid" /> <span> <span>Philippines</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/malaysia.svg" class="img-fluid" /> <span> <span>Malaysia</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/nepal.svg" class="img-fluid" /> <span> <span>Nepal</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/pakistan.svg" class="img-fluid" /> <span> <span>Pakistan</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/sri-lanki.png" class="img-fluid" /> <span> <span>Sri Lanka</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/hong-kong.svg" class="img-fluid" /> <span> <span>Hong Kong</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/thailand.svg" class="img-fluid" /> <span> <span>Thailand</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/maldives.svg" class="img-fluid" /> <span> <span>Maldives</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/vietnam.svg" class="img-fluid" /> <span> <span>Vietnam</span>
                                    </li>
                                </a>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h4>Africa</h4>
                            <hr />
                            <ul class="cols-count-nav country-list-pop">
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/nigeria.svg" class="img-fluid" /> <span> <span>Nigeria</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/south-africa.svg" class="img-fluid" /> <span> <span>South Africa</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/angola.svg" class="img-fluid" /> <span> <span>Angola</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/kenya.svg" class="img-fluid" /> <span> <span>Kenya</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/ghana.svg" class="img-fluid" /> <span> <span>Ghana</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/rwanda.svg" class="img-fluid" /> <span> <span>Rwanda</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/egypt.svg" class="img-fluid" /> <span> <span>Egypt</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/morocco.svg" class="img-fluid" /> <span> <span>Morocco</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/algeria.svg" class="img-fluid" /> <span> <span>Algeria</span>
                                    </li>
                                </a>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h4>Australia</h4>
                            <hr />
                            <ul class="cols-count-nav country-list-pop">
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/Australia.png" class="img-fluid" /> <span> <span>Australia</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/new-zealand.svg" class="img-fluid" /> <span> <span>New Zealand</span>
                                    </li>
                                </a>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <h4>The Americas</h4>
                            <hr />
                            <ul class="cols-count-nav country-list-pop">
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/usa.svg" class="img-fluid" /> <span> <span>USA</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/mexico.svg" class="img-fluid" /> <span> <span>Mexico</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/canada.svg" class="img-fluid" /> <span> <span>Canada</span>
                                    </li>
                                </a>
                                <a href="">
                                    <li>
                                        <span><img src="<?php echo ROOT_DIR; ?>images/icons/brazil.svg" class="img-fluid" /> <span> <span>Brazil</span>
                                    </li>
                                </a>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!---End Modal Countries--->

<style>
    .btn-transparent:hover {
        background-color: #333;
        color: #fff;
    }

    .video-main-container{
       position: relative;
       overflow: hidden;
       height: 650px;
    }

    .main-video-view {
        /* override other styles to make responsive */
        width: 100% !important;
        object-fit: cover;
        object-position: center center;
    }

    .page-banner__video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        background-color: #000;
        opacity: .4;
    }

    .main-banner-website{
        position: relative;
        /* padding-top: 70px; */
        background-color: #000;
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 650px;
        color: #fff;
        display: flex;
        /* text-shadow: 1px 1px 2px #000; */
        margin-bottom: 0px;
    }

     @media screen and (max-width: 768px){
       .video-main-container {
            /* height: auto; */
        }
        .main-banner-website{
             height: 450px;
        }
    }

</style>

<!-- <div class="video-main-container">
    <div class="page-banner__video-overlay"></div>
    <div class="overlay-text-slider text-center">
        <h1>Get 50% discount on all short courses this December</h1>
        <p>Build skills with courses, certificates, and degrees online from world-class universities and companies</p>
        <a href="" class="btn btn-dark btn-lg make-bold">Get Course</a>
    </div>
    <video class="main-video-view" width="100%" height="100%" autoplay="autoplay" loop="" muted="" poster="images/banners/video-poster.PNG">
        <source src="<?php echo ROOT_DIR; ?>video/test2.mp4" type="video/mp4">
    </video>
</div> -->

<div class='jumbotron main-banner-website' style="background-image: url(./images/banners/main-slider.jpg);">
   <div class="page-banner__video-overlay"></div>
    <div class="container">
        <div class="overlay-text-slider text-center">
            <h1>Get 50% discount on all short courses this December</h1>
            <p>Build skills with courses, certificates, and degrees online from world-class universities and companies</p>
            <a href="" class="btn btn-dark btn-lg make-bold">Get Course</a>
        </div>
    </div>
</div>

<div class="main-content">
    <div class="main-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-4 col-12 col-md-12">
                    <div class="box">
                        <h1>Welcome to Metropolitan School of Business and Management UK</h1>
                        <!-- <h4 class="mt-3">United Kingdom</h4> -->
                        <p class="locate">Lagos,<br /> Nigeria Campus</p>
                        <p><a href="#">Learn more about MSBM</a></p>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8 col-12 col-md-12">
                    <div class="row">
                        <div class="col-md-6 readjust">
                            <div class="card wrapper overall-card-holder">
                                <div class="card-body portfolio-item" style="background-image: url(images/homepage-masters.jpg);"></div>
                                <div class="mycaption">
                                    <h5 class="category-title">Masters Degree</h5>
                                    <!-- <span class="category-count">1 Course</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 small-box">
                            <div class="row">
                                <div class="col-6 mb-2 ">
                                    <div class="card wrapper overall-card-holder">
                                        <div class="card-body portfolio-item" style="background-image: url(images/homepage-bachelors.jpg);"></div>
                                        <div class="mycaption">
                                            <h6 class="category-title">Bachelor Degree</h6>
                                            <!-- <span class="category-count">1 Course</span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-2 ">
                                    <div class="card wrapper overall-card-holder">
                                        <div class="card-body portfolio-item" style="background-image: url(images/homepage-short-courses.jpg);"></div>
                                        <div class="mycaption">
                                            <h6 class="category-title">Short Courses</h6>
                                            <!-- <span class="category-count">1 Course</span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card wrapper overall-card-holder">
                                        <div class="card-body portfolio-item" style=" background-image: url(images/homepage-one-week-mba.jpg);"></div>
                                        <div class="mycaption">
                                            <h6 class="category-title">One Week MBA</h6>
                                            <!--  <span class="category-count">1 Course</span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card wrapper overall-card-holder">
                                        <div class="card-body portfolio-item" style=" background-image: url(images/homepage-diploma.jpg);"></div>
                                        <div class="mycaption">
                                            <h6 class="category-title">Diploma</h6>
                                            <!--  <span class="category-count">1 Course</span> -->
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
    <div class="homepage-category why_msbm">
        <div class="container">
            <h2 class="text-center">Why MSBM</h2>
            <br />
            <div class="row">
                <div class='col-md-4'>
                    <div class="media offers">
                        <img src="<?php echo ROOT_DIR; ?>images/icons/jigsaws.svg" class="mr-3 img-fluid" alt="msbm">
                        <div class="media-body">
                            <h5 class="mt-0">Unlimited Tutor Support</h5>
                            <p>Unlimited academic support available throughout your studies to make learning easier.</p>
                        </div>
                    </div>
                </div>
                <div class='col-md-4'>
                    <div class="media offers">
                        <img src="<?php echo ROOT_DIR; ?>images/icons/fast.svg" class="mr-3 img-fluid" alt="msbm">
                        <div class="media-body">
                            <h5 class="mt-0">Learn at your pace</h5>
                            <p>Self study online courses available 24/7 so you can learn at your pace. </p>
                        </div>
                    </div>
                </div>
                <div class='col-md-4'>
                    <div class="media offers">
                        <img src="<?php echo ROOT_DIR; ?>images/icons/sent.svg" class="mr-3 img-fluid" alt="msbm">
                        <div class="media-body">
                            <h5 class="mt-0">Accredited Courses</h5>
                            <p>Gain direct admission into University top-up degree with our OFQUAL certificates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="find course-list-msbm">
        <h2 class="text-center explore-courses">Explore Courses</h2>
        <div class="container">
            <p class="heading-find">Degree Programmes in Nigeria</p>
            <div class="row myflex">
                <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/MA in Marketing & Innovation-2.png" class="card-img-top" alt="...">
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
                            <div class="course-b-sect mt-2">
                                <!-- <span class="">NGN</span> -->
                                <div class="course-b-sect d-flex justify-content-end">
                                    <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/MA-Human-Resource-Management-.png" class="card-img-top" alt="...">
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
                            <div class="course-b-sect mt-2">
                                <!-- <span class="make-bold">EGY</span> -->
                                <button class="btn btn-outline-danger btn-block btn-sm lt-sp"><i class="fa fa-bookmark"></i> Saved</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/Master of Business Administration.png" class="card-img-top" alt="...">
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
                            <div class="course-b-sect mt-2">
                                <!-- <span class="">NGN</span> -->
                                <div class="course-b-sect d-flex justify-content-end">
                                    <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/course-placeholder.png" class="card-img-top" alt="...">
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
                            <div class="course-b-sect mt-2">
                                <!-- <span class="">NGN</span> -->
                                <div class="course-b-sect d-flex justify-content-end">
                                    <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-normal">View more on degrees in Nigeria <i class="fa fa-chevron-right slide-icon"></i></button>
            </div>
        </div>
    </div>

    <div class="find course-list-msbm">
        <div class="container">
            <p class="heading-find">Short Courses in Nigeria</p>
            <div class="row myflex">
                <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
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
                            <div class="course-b-sect mt-2">
                                <!-- <span class="">NGN</span> -->
                                <div class="course-b-sect d-flex justify-content-end">
                                    <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/bsc-london.jpg" class="card-img-top" alt="...">
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
                            <div class="course-b-sect mt-2">
                                <!-- <span class="make-bold">EGY</span> -->
                                <button class="btn btn-outline-danger btn-block btn-sm lt-sp"><i class="fa fa-bookmark"></i> Saved</button>
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
                            <div class="course-b-sect mt-2">
                                <!-- <span class="">NGN</span> -->
                                <div class="course-b-sect d-flex justify-content-end">
                                    <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                </div>
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
                            <div class="course-b-sect mt-2">
                                <!-- <span class="">NGN</span> -->
                                <div class="course-b-sect d-flex justify-content-end">
                                    <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-normal">View more on short courses in Nigeria <i class="fa fa-chevron-right slide-icon"></i></button>
            </div>
        </div>
    </div>

    <div class="find course-list-msbm">
        <div class="container">
            <p class="heading-find">Diploma Programmes in Nigeria</p>
            <div class="row myflex">
                <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
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
                            <div class="course-b-sect mt-2">
                                <!-- <span class="make-bold">EGY</span> -->
                                <button class="btn btn-outline-danger btn-block btn-sm lt-sp"><i class="fa fa-bookmark"></i> Saved</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/bg2.jpg" class="card-img-top" alt="...">
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
                            <div class="course-b-sect mt-2">
                                <!-- <span class="">NGN</span> -->
                                <div class="course-b-sect d-flex justify-content-end">
                                    <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                </div>
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
                            <div class="course-b-sect mt-2">
                                <!-- <span class="">NGN</span> -->
                                <div class="course-b-sect d-flex justify-content-end">
                                    <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/bg4-2.jpg" class="card-img-top" alt="...">
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
                            <div class="course-b-sect mt-2">
                                <!-- <span class="">NGN</span> -->
                                <div class="course-b-sect d-flex justify-content-end">
                                    <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-normal">View more on diploma in Nigeria <i class="fa fa-chevron-right slide-icon"></i></button>
            </div>
        </div>
    </div>
</div>

<div class="event">
    <div class="container">
        <p class="heading">Upcoming Training Courses</p>
        <div class="row">
            <div class="col-md-12 col-12 col-xl-6 col-lg-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="date-holder">
                                    <span class="date-month">Jan</span>
                                    <span class='date-day'>23 - 27</span>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="event-info">
                                    <div class="row">
                                        <div class="col-md-1 col-1">
                                            <i class="fa fa-graduation-cap fa-1x"></i>
                                        </div>
                                        <div class="col-md-11 col-11">
                                            <span class="next"> One week Masters in Business Administration</span>
                                        </div>
                                        <div class="col-md-1 col-1">
                                            <i class="fa fa-map-marker fa-1x"></i>
                                        </div>
                                        <div class="col-md-11 col-11">
                                            <span class="info"> London, United Kingdom </span>
                                        </div>
                                        <div class="col-md-1 col-1">
                                            <i class="fa fa-tag fa-1x"></i>
                                        </div>
                                        <div class="col-md-11 col-11">
                                            <span class="info"> £ 7,000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="date-holder">
                                    <span class="date-month">Jan</span>
                                    <span class='date-day'>5 - 10</span>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="event-info">
                                    <div class="row">
                                        <div class="col-md-1 col-1">
                                            <i class="fa fa-graduation-cap fa-1x"></i>
                                        </div>
                                        <div class="col-md-11 col-11">
                                            <span class="next"> Global Business Strategy for Sustainable Africa</span>
                                        </div>
                                        <div class="col-md-1 col-1">
                                            <i class="fa fa-map-marker fa-1x"></i>
                                        </div>
                                        <div class="col-md-11 col-11">
                                            <span class="info"> Dubai, United Arab Emirates </span>
                                        </div>
                                        <div class="col-md-1 col-1">
                                            <i class="fa fa-tag fa-1x"></i>
                                        </div>
                                        <div class="col-md-11 col-11">
                                            <span class="info"> £ 20,000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="mt-3"><a href="#">Click here to view all courses and seminars</a></p>
            </div>
            <div class="col-md-12 col-12 col-xl-6 col-lg-6">
                <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/VMHzfubKAiA?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
            </div>
        </div>
    </div>
</div>

<div class="counter text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6 countme">
                <h4>36,000 +</h4>
                <h6>Students</h6>
            </div>
            <div class="col-md-3 col-6 countme">
                <h4>6,000 +</h4>
                <h6>Current Students</h6>
            </div>
            <div class="col-md-3 col-6 countme">
                <h4>400 +</h4>
                <h6>Courses</h6>
            </div>
            <div class="col-md-3 col-6 countme">
                <h4>160 +</h4>
                <h6>Countries</h6>
            </div>
        </div>
    </div>
</div>

<?php include_once('components/footer.php'); ?>