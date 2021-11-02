<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<style>

    @font-face {
        font-family: Avenir Black;
        src: url(fonts/Avenir-Black.ttf) format("TrueType");
    }

    @font-face {
        font-family: Avenir Book;
        src: url(fonts/Avenir-Book.ttf) format("TrueType");
    }

    @font-face {
        font-family: Avenir Medium;
        src: url(fonts/Avenir-Medium.ttf) format("TrueType");
    }

    @font-face {
        font-family: Avenir Heavy;
        src: url(fonts/Avenir-Heavy.ttf) format("TrueType");
    }

    @font-face {
        font-family: Avenir Light;
        src: url(fonts/Avenir-Light.ttf) format("TrueType");
    }

    body{
        font-family: Avenir Book !important;
    }

    .find .card-title{
         font-family: Avenir Black !important;
    }

    .date-month {
        font-family: Avenir Heavy !important;
    }

    .navbar-dark .navbar-nav .nav-link {
        padding-bottom: 12px;
        font-family: 'Avenir Heavy';
    }

    h1, h2, h3, h4, h5, h6, .heading-find{
         font-family: Avenir Heavy !important;
    }

    .btn{
        font-family: Avenir Heavy !important;
    }

    .btn.btn-dark{
        border-radius:20px !important;
        background-color: #ad0000;
    }

    .btn.btn-dark:hover{
        border-radius:20px !important;
        background-color: #000 !important;
    }

    .course-list-msbm{
        padding-bottom:50px;
    }

    .btn-darkkk {
        font-family: 'Avenir Heavy';
    }

    .overall-card-holder{
        border-radius:10px;
    }

    .box{
        border-radius: 10px;
    }

    /* .find .myflex{
        padding:50px 0;
    } */

    .find .card-body {
        background-color: #fff;
        transition: all 0.5s;
        display: flex;
        flex-direction: column;
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .find .card-img-wrap {
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
    }

    .new-intro-banner-sect{
        height: 80vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position:relative;
    }

    .new-intro-banner-sect h1{
        font-family: 'Avenir Black', Arial !important;
        font-weight: 700;
        font-size: 3rem;
        color: #000;
    }

    .text-sub{
        color: #00BCD4;
    }

    .ob-fit-sect{
       object-fit: cover;
       object-position: center;
       height:100%;
       width:100%;
    }

    .banner-view-sect{
        height: 550px;
        width: 550px;
        overflow: hidden;
        position: relative;
        border-radius: 10%;
        margin: 0 auto;
        display: block;
    }

    .float-images .image1 {
        position: absolute;
        top: 0px;
        right: 80%;
        z-index: 4;
        width: 110px;
        height: 110px;
        animation: 8s ease-in-out 0s infinite normal none running animation-1mlvem9;
        border-radius: 10%;
        object-fit: cover;
        object-position: center center;
        border: 3px solid #fff;
    }

    .float-images .image2{
        position: absolute;
        top: 300px;
        left: 140px;
        z-index: 4;
        width: 110px;
        height: 110px;
        object-fit:cover;
        object-position: center center;
        animation: 6s ease-in-out 0s infinite normal none running animation-1mlvem9;
        border-radius: 10%;
        border:3px solid #fff;
    }

    .float-images .image3 {
        position: absolute;
        top: 70px;
        right: 160px;
        z-index: 4;
        width: 75px;
        height: 75px;
        animation: 3s ease-in-out 0s infinite normal none running animation-1mlvem9;
        border-radius: 10%;
        object-fit:cover;
        object-position: center center;
        border:3px solid #fff;
    }

    .float-images .image4 {
        position: absolute;
        bottom: 159px;
        right: 130px;
        z-index: 4;
        width: 50px;
        height: 50px;
        animation: 6s ease-in-out 0s infinite normal none running animation-1mlvem9;
        border-radius: 10%;
        object-fit:cover;
        object-position: center center;
        border:3px solid #fff;
    }

    .pattern-abs-img{
        position: absolute;
        right: 0px;
        top: 0;
        overflow: hidden;
        width: 400px;
    }

    .lt-sp{
        border-radius:50px;
    }

    .find .card-body:hover {
        background-color: transparent;
    }

    .find .card-ahref-flex{
        border: 1px solid #ccc;
        border-radius:10px;
    }

    @media screen and (min-width: 991px){
        .find .card-ahref-flex{
            transition:all 0.3s ease-in;
            z-index:99;
        }

        .find .card-ahref-flex:hover{
            /* transform: scale(1.1) */
            transform: translateY(-5px);
            box-shadow: rgba(0, 0, 0, 0.16) 0px 8px 50px;
        }
    }


   @media screen and (max-width:768px){

        .banner-view-sect {
            height: 350px;
            width: 100%;
        }

        .pattern-abs-img{
            width: 200px;
        }


        .new-intro-banner-sect{
            height: 100%;
            padding:70px 0 0 0;
        }

        .new-intro-banner-sect h1 {
            font-size: 2rem;
        }

        .portfolio-item{
            border-top-left-radius: 10px !important;
            border-top-right-radius: 10px !important;
        }
   }

    @keyframes animation-1mlvem9{
        0% {
            box-shadow: rgba(0, 0, 0, 0.4) 0px 5px 15px 0px;
            transform: translateY(0px);
        }

        50% {
            box-shadow: rgba(0, 0, 0, 0.2) 0px 25px 15px 0px;
            transform: translateY(-20px);
        }

        100% {
            box-shadow: rgba(0, 0, 0, 0.4) 0px 5px 15px 0px;
            transform: translateY(0px);
        }
    }
</style>

<?php include "components/modal-inc.php"; ?>

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

        .float-images{
            display: none;
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

<!-- <div class='jumbotron main-banner-website' style="background-image: url(./images/banners/main-slider.jpg);">
   <div class="page-banner__video-overlay"></div>
    <div class="container">
        <div class="overlay-text-slider text-center">
            <h1>Get 50% discount on all short courses this December</h1>
            <p>Build skills with courses, certificates, and degrees online from world-class universities and companies</p>
            <a href="" class="btn btn-dark btn-lg make-bold">Get Course</a>
        </div>
    </div>
</div> -->

<div class="new-intro-banner-sect">
    <div class="pattern-abs-img">
        <img src="<?php echo ROOT_DIR; ?>images/banners/pattern-home-2.png" class="img-fluid" />
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-3">
                <div class="new-intro-banner-view">
                    <div class="banner-view-sect text-center">
                        <img src="<?php echo ROOT_DIR; ?>images/banners/test-banner.jpg" class="img-fluid ob-fit-sect" />
                    </div>
                    <div class="float-images">
                        <img src="<?php echo ROOT_DIR; ?>images/banners/image1.jpg" class="img-fluid image1" />
                        <img src="<?php echo ROOT_DIR; ?>images/banners/image2.jpg" class="img-fluid image2" />
                        <img src="<?php echo ROOT_DIR; ?>images/banners/image3.jpg" class="img-fluid image3" />
                        <img src="<?php echo ROOT_DIR; ?>images/banners/image4.jpg" class="img-fluid image4" />
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mb-3">
                <h1><span class="text-sub">Online learning</span> like you’ve never experienced before</h1>
                <p>Empower yourself with world-class courses from educators and institutions in a practical and social learning environment</p>
            </div>
        </div>
    </div>
</div>

<div class="main-content">

    <div class="main-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-xl-3 col-12 col-md-12">
                    <div class="box">
                        <h1>Welcome to Metropolitan School of Business and Management UK</h1>
                        <!-- <h4 class="mt-3">United Kingdom</h4> -->
                        <p class="locate">Lagos,<br /> Nigeria Campus</p>
                        <p><a href="#">Learn more about MSBM</a></p>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-9 col-12 col-md-12">
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
    <div class="container-fluid">
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