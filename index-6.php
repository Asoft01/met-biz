<?php include_once('components/config.php'); ?>
<?php include_once('components/header2.php'); ?>

<style>
@font-face {
    font-family: 'Apercu Pro';
    src: url('ApercuPro.eot');
    src: local('Apercu Pro'), local('ApercuPro'),
        url('fonts/ApercuPro.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Apercu Pro Medium';
    src: url('ApercuPro-Medium.eot');
    src: local('Apercu Pro Medium'), local('ApercuPro-Medium'),
        url('fonts/ApercuPro-Medium.ttf') format('truetype');
    font-weight: 500;
    font-style: normal;
}

@font-face {
    font-family: 'Apercu Pro';
    src: url('ApercuPro-Mono.eot');
    src: local('Apercu Pro Mono'), local('ApercuPro-Mono'),
        url('ApercuPro-Mono.eot?#iefix') format('embedded-opentype'),
        url('ApercuPro-Mono.woff2') format('woff2'),
        url('ApercuPro-Mono.woff') format('woff'),
        url('ApercuPro-Mono.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Apercu Pro Bold';
    src: url('ApercuPro-Bold.eot');
    src: local('Apercu Pro Bold'), local('ApercuPro-Bold'),
        url('fonts/ApercuPro-Bold.ttf') format('truetype');
    font-weight: bold;
    font-style: normal;
}

.find .card-title {
    font-weight: 700;
    /* font-size: 1.2rem; */
    font-size:25px;
    /* font-family: 'Apercu Pro Bold'; */
    font-family: 'Kumbh Sans', Arial, Helvetica, sans-serif;
}

.find .desc {
    flex-grow: 1;
    font-size: 14px;
    line-height: 18px;
    font-weight:300;
    /* font-family: 'Apercu Pro'; */
    font-family: 'Kumbh Sans', Arial, Helvetica, sans-serif;
}

.find .card-text {
    color: #403f3f;
    font-size: 13px;
    font-weight: 700;
    /* font-family: 'Apercu Pro Bold'; */
    font-family: 'Kumbh Sans', Arial, Helvetica, sans-serif;
}

.thumb-img-holder{
    position: relative;
    overflow: hidden;
    height: 200px;
}

.thumb-ft{
    font-size: 1.8rem;
}

.card-height{
    height: 100%;
    transition: all 0.5s ease-in-out;
}

.card-height:hover{
  background-color: #fcfcfc;
}

.view-content-body{
    display: flex;
    flex-direction: column;
}

.view-content-body .view-content-title{
    flex-grow: 1;
    font-family: 'Kumbh Sans', Arial, Helvetica, sans-serif;
}

.thumb-img-holder{
    position: relative;
    overflow: hidden;
    height: 200px;
}

.thumb-ft{
    font-size: 1.8rem;
}

.card-height .card-img{
    transition: all 0.5s ease-in-out;
}

.card-height:hover .card-img{
    transform: scale(1.1);
}

.img-size {
    height: 100%;
    width: 100%;
}

.view-content-date{
    font-family: 'Kumbh Sans', Arial, Helvetica, sans-serif;
}

.ob-fit {
    object-fit: cover;
    object-position: center center;
}

.card-img-wrap {
    overflow: hidden;
    position: relative;
    height: 250px;
}

.counter{
  background-color: #f4f4f4;
}

.countme h4, .countme h6{
  color: #000;
  font-family: 'Kumbh Sans', Arial, Helvetica, sans-serif;
}

.countme h4:hover, .countme h6:hover{
  color: #333;
}

.heading-x-large {
    font-size: 60px;
    font-weight: 600;
}

.heading-x-large span {
    display: block;
}

.add-cart-btn{
    position: absolute;
    left: 15px;
    top:200px;
}

.add-cart-btn .btn-danger:hover{
  background-color: #333 !important;
}

.location .form-control {
    font-size: 13px;
    font-weight: 700;
    line-height: 1.5;
    background-color: #f4f4f4;
    color: #000;
}

.banner-split{
    height: 80vh;
    display: grid;
    grid-template-columns: 1fr 1fr;
}


.banner-split .split-two-side{
    background-size:cover;
    background-position: center center;
    height: 100%
}

.content-flex{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}

.mt-3p{
  margin-top: 3px;
}

.blog-header, .font-fam{
    font-family: 'Kumbh Sans', Arial, Helvetica, sans-serif;
}

@media screen and (max-width: 768px){
    .heading-x-large {
        font-size: 36px;
        font-weight: 600;
    }

    .banner-split{
        display: block;
        height: 100%;
        padding-top: 50px;
    }

    .banner-split .split-two-side {
        background-size: cover;
        background-position: center center;
        height: 250px;
    }
}

@media screen and (min-width: 991px){
    .banner-intro-view{
        height: 80vh;
    }

    .heading-info p{
       width:60%;
    }
}
</style>

<div class="banner-split">
    <div class="split-one-side">
       <div class="container-fluid content-flex">
           <div class="heading-info">
                <h1 class="heading-x-large">
                    <span>Leading thinkers</span>
                    <span>teach digital</span>
                    <span>talent.</span>
                </h1>
                <p>Master Classes, Live Workshops and Courses from industry leaders: develop skills, get live feedback & make connections with the world's largest community of digital thinkers.</p>
            </div>
        </div>
    </div>
    <div class="split-two-side" style="background-image:url(images/banners/banner-intro-3.jpg);"></div>
</div>

<div class="main-content">
    <!-- <div class="banner-intro-view pt-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                   <h1 class="heading-x-large">
                        <span>Leading thinkers</span>
                        <span>teach digital</span>
                        <span>talent.</span>
                    </h1>
                    <p>Master Classes, Live Workshops and Courses from industry leaders: develop skills, get live feedback & make connections with the world's largest community of digital thinkers.</p>
                </div>
                <div class="col-lg-6">
                    <p class="text-center"><img src="<?php echo ROOT_DIR; ?>images/banners/intro-banner-1.png" class="img-fluid"></p>
                </div>
            </div>
        </div>
    </div> -->
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
                                <div class="card-body portfolio-item" style="background-image: url(images/course-box-2.jpg);"></div>
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
                                        <div class="card-body portfolio-item" style="background-image: url(images/course-box-1.jpg);"></div>
                                        <div class="mycaption">
                                            <h6 class="category-title">Bachelor Degree</h6>
                                            <!-- <span class="category-count">1 Course</span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-2 ">
                                    <div class="card wrapper overall-card-holder">
                                        <div class="card-body portfolio-item" style="background-image: url(images/course-box-5.jpg);"></div>
                                        <div class="mycaption">
                                            <h6 class="category-title">Short Courses</h6>
                                            <!-- <span class="category-count">1 Course</span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card wrapper overall-card-holder">
                                        <div class="card-body portfolio-item" style=" background-image: url(images/course-box-3.jpg);"></div>
                                        <div class="mycaption">
                                            <h6 class="category-title">One Week MBA</h6>
                                            <!--  <span class="category-count">1 Course</span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card wrapper overall-card-holder">
                                        <div class="card-body portfolio-item" style=" background-image: url(images/course-box-4.jpg);"></div>
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
    <div class="find course-list-msbm py-3">
        <h2 class="text-center explore-courses font-fam">Explore Courses</h2>
        <div class="container-fluid">
            <p class="heading-find">Degree Programmes <span class="font-w-400">in Nigeria</span></p>
            <div class="row myflex">
                <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/MA in Marketing & Innovation-2.png" class="card-img-top" alt="...">
                        </div>
                        <!-- <div class="add-cart-btn">
                            <button class="btn btn-danger btn-sm">Add to Cart</button>
                        </div> -->
                        <div class="card-body">
                            <p class="card-text card-uni">UK Partner University</p>
                            <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                            <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour</p>
                                </div>
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br/><span>NGN 4,000,000</span></p>
                                    </div>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div> -->
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/MA-Human-Resource-Management-.png" class="card-img-top" alt="...">
                        </div>
                         <!-- <div class="add-cart-btn">
                            <button class="btn btn-danger btn-sm">Add to Cart</button>
                        </div> -->
                        <div class="card-body">
                            <p class="card-text card-uni">UK Partner University</p>
                            <h6 class="card-title">BBA<br>Bachelor of Business</h6>
                            <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                           <div class="row">
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour</p>
                                </div>
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 8,000,000</span><br/><span>NGN 2,000,000</span></p>
                                    </div>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div> -->
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/Master of Business Administration.png" class="card-img-top" alt="...">
                        </div>
                         <!-- <div class="add-cart-btn">
                            <button class="btn btn-danger btn-sm">Add to Cart</button>
                        </div> -->
                        <div class="card-body">
                            <p class="card-text card-uni">UK Partner University</p>
                            <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                            <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
                           <div class="row">
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour</p>
                                </div>
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span>NGN 400,000</span></p>
                                    </div>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Classroom</p>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div> -->
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/course-placeholder.png" class="card-img-top" alt="...">
                        </div>
                         <!-- <div class="add-cart-btn">
                            <button class="btn btn-danger btn-sm">Add to Cart</button>
                        </div> -->
                        <div class="card-body">
                            <p class="card-text card-uni">UK Partner University</p>
                            <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                            <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
                           <div class="row">
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour</p>
                                </div>
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 1,000,000</span><br/><span>NGN 500,000</span></p>
                                    </div>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Classroom</p>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div> -->
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-normal">View more on degrees in Nigeria <i class="fa fa-chevron-right slide-icon"></i></button>
            </div>
        </div>
    </div>

    <div class="find course-list-msbm py-3">
        <div class="container-fluid">
            <p class="heading-find">Short Courses <span class="font-w-400">in Nigeria</span></p>
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
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour</p>
                                </div>
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br/><span>NGN 4,000,000</span></p>
                                    </div>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div> -->
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
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour</p>
                                </div>
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br/><span>NGN 4,000,000</span></p>
                                    </div>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div> -->
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
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour</p>
                                </div>
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br/><span>NGN 4,000,000</span></p>
                                    </div>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div> -->
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
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour</p>
                                </div>
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br/><span>NGN 4,000,000</span></p>
                                    </div>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div> -->
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-normal">View more on short courses in Nigeria <i class="fa fa-chevron-right slide-icon"></i></button>
            </div>
        </div>
    </div>

    <div class="find course-list-msbm py-3">
        <div class="container-fluid">
            <p class="heading-find">Diploma Programmes <span class="font-w-400">in Nigeria<span></p>
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
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour</p>
                                </div>
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br/><span>NGN 4,000,000</span></p>
                                    </div>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div> -->
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
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour</p>
                                </div>
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br/><span>NGN 4,000,000</span></p>
                                    </div>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div> -->
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
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour</p>
                                </div>
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br/><span>NGN 4,000,000</span></p>
                                    </div>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div> -->
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
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour</p>
                                </div>
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br/><span>NGN 4,000,000</span></p>
                                    </div>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div> -->
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

<div class="blog-view-sect pad-50">
    <div class="container-fluid">
        <h3 class="make-bold blog-header mb-3">The Metro Business <span class="font-w-400">- Articles you'll love</span></h3>
        <div class="row">
            <div class="col-lg-12">
                 <div class="view-card-list">
                    <div class="row">
                        <div class="col-lg-3 mb-3">
                            <a href="">
                                <div class="card card-height">
                                    <div class="thumb-img-holder">
                                        <img src="<?php echo ROOT_DIR; ?>images/banners/31171403__sm__RARE.jpg" class="card-img ob-fit img-size bord-rad-0" alt="...">
                                    </div>
                                    <div class="card-body view-content-body">
                                        <p class="text-uppercase make-bold color-red letter-space text-danger">News</p>
                                        <h5 class="card-title view-content-title make-bold thumb-ft text-dark">Rare Alerts For Rumbling Volcanoes Issued In Eastern Caribbean</h5>
                                        <p class="card-text view-content-date"><small class="text-muted letter-space text-uppercase">September 30, 2020</small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <a href="">
                                <div class="card card-height">
                                    <div class="thumb-img-holder">
                                        <img src="<?php echo ROOT_DIR; ?>images/banners/31165611__sm__POST1.jpg" class="card-img ob-fit img-size bord-rad-0" alt="...">
                                    </div>
                                    <div class="card-body view-content-body">
                                        <p class="text-uppercase make-bold color-red letter-space text-danger">International</p>
                                        <h5 class="card-title view-content-title make-bold thumb-ft text-dark">Why Newer Technology is More Important to Your Business than You Think</h5>
                                        <p class="card-text view-content-date"><small class="text-muted letter-space text-uppercase">September 30, 2020</small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <a href="">
                                <div class="card card-height">
                                    <div class="thumb-img-holder">
                                        <img src="<?php echo ROOT_DIR; ?>images/banners/31172312__sm__THINK.jpg" class="card-img ob-fit img-size bord-rad-0" alt="...">
                                    </div>
                                    <div class="card-body view-content-body">
                                        <p class="text-uppercase make-bold color-red letter-space text-danger">Startups</p>
                                        <h5 class="card-title view-content-title make-bold thumb-ft text-dark">Entrepreneurial mindset: Why you need to think like a female founder</h5>
                                        <p class="card-text view-content-date"><small class="text-muted letter-space text-uppercase">September 30, 2020</small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <a href="">
                                <div class="card card-height">
                                    <div class="thumb-img-holder">
                                        <img src="<?php echo ROOT_DIR; ?>images/banners/01103148__sm__pink.jpg" class="card-img ob-fit img-size bord-rad-0" alt="...">
                                    </div>
                                    <div class="card-body view-content-body">
                                        <p class="text-uppercase make-bold color-red letter-space text-danger">Business</p>
                                        <h5 class="card-title view-content-title make-bold thumb-ft text-dark">Will Tesla Meet Elon Musk’s 2020 Goal Of Delivering 500,000 Cars?</h5>
                                        <p class="card-text view-content-date"><small class="text-muted letter-space text-uppercase">September 30, 2020</small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center pt-2 pb-3">
           <a href="http://blog.msbm.org.uk" class="btn btn-outline-dark font-fam">Visit MSBM Blog</a>
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