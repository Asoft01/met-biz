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

<div id="carouselHomeIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators carousel-Home-Indict">
    <li data-target="#carouselHomeIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselHomeIndicators" data-slide-to="1"></li>
    <li data-target="#carouselHomeIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <div class="banner-split">
        <div class="split-one-side">
            <div class="container-fluid content-flex px-66">
                <div class="heading-info">
                        <h1 class="heading-x-large">
                            <span>Follow your passion,</span>
                            <span>inspire change,</span>
                            <span>Succeed.</span>
                        </h1>
                        <p>Whether you are considering starting a small business or changing career paths, it is important that passion is factored into the equation. We help learners to discover and grow their passion because we know that people with passion can change the world for the better.</p>
                        <a href="#" class="btn btn-danger">Read More <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="split-two-side" style="background-image:url(images/banners/banner-intro-4.jpg);"></div>
        </div>
    </div>
    <div class="carousel-item">
      <div class="banner-split">
            <div class="split-one-side">
            <div class="container-fluid content-flex px-66">
                <div class="heading-info">
                        <h1 class="heading-x-large">
                            <span>Follow your passion,</span>
                            <span>inspire change,</span>
                            <span>Succeed.</span>
                        </h1>
                        <p>Whether you are considering starting a small business or changing career paths, it is important that passion is factored into the equation. We help learners to discover and grow their passion because we know that people with passion can change the world for the better.</p>
                        <a href="#" class="btn btn-danger">Read More <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="split-two-side" style="background-image:url(images/banners/silo-1.jpg);"></div>
        </div>
    </div>
    <div class="carousel-item">
      <div class="banner-split">
            <div class="split-one-side">
            <div class="container-fluid content-flex px-66">
                <div class="heading-info">
                        <h1 class="heading-x-large">
                            <span>Follow your passion,</span>
                            <span>inspire change,</span>
                            <span>Succeed.</span>
                        </h1>
                        <p>Whether you are considering starting a small business or changing career paths, it is important that passion is factored into the equation. We help learners to discover and grow their passion because we know that people with passion can change the world for the better.</p>
                        <a href="#" class="btn btn-danger">Read More <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="split-two-side" style="background-image:url(images/banners/silo-2.jpg);"></div>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev carousel-position-center" href="#carouselHomeIndicators" role="button" data-slide="prev">
    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span> -->
    <img src="<?php echo ROOT_DIR; ?>images/banners/black-previous.png" class="img-fluid" width="40" />
  </a>
  <a class="carousel-control-next carousel-position-center" href="#carouselHomeIndicators" role="button" data-slide="next">
    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span> -->
    <img src="<?php echo ROOT_DIR; ?>images/banners/black-next.png" class="img-fluid" width="40" />
  </a>
</div>

<!-- <div class="banner-split">
    <div class="split-one-side">
       <div class="container-fluid content-flex px-66">
           <div class="heading-info">
                <h1 class="heading-x-large">
                    <span>Leading thinkers</span>
                    <span>teach digital</span>
                    <span>talent.</span>
                </h1>
                <p>Master Classes, Live Workshops and Courses from industry leaders: develop skills, get live feedback &amp; make connections with the world's largest community of digital thinkers.</p>
            </div>
        </div>
    </div>
    <div class="split-two-side" style="background-image:url(images/banners/banner-intro-4.jpg);"></div>
</div> -->

<!-- <div class="banner-split">
    <div class="split-one-side">
       <div class="container-fluid content-flex px-66">
           <div class="heading-info">
                <h1 class="heading-x-large">
                    <span>Leading thinkers</span>
                    <span>teach digital</span>
                    <span>talent.</span>
                </h1>
                <p>Master Classes, Live Workshops and Courses from industry leaders: develop skills, get live feedback &amp; make connections with the world's largest community of digital thinkers.</p>
            </div>
        </div>
    </div>
    <div class="split-two-side" style="background-image:url(images/banners/banner-intro-4.jpg);"></div>
</div> -->

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
                                <div class="card-body portfolio-item" style="background-image: url(images/banners/course-box-2.jpg);"></div>
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
                                        <div class="card-body portfolio-item" style="background-image: url(images/banners/course-box-4.jpg);"></div>
                                        <div class="mycaption">
                                            <h6 class="category-title">Bachelor Degree</h6>
                                            <!-- <span class="category-count">1 Course</span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-2 ">
                                    <div class="card wrapper overall-card-holder">
                                        <div class="card-body portfolio-item" style="background-image: url(images/banners/course-box-1.jpg);"></div>
                                        <div class="mycaption">
                                            <h6 class="category-title">Short Courses</h6>
                                            <!-- <span class="category-count">1 Course</span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card wrapper overall-card-holder">
                                        <div class="card-body portfolio-item" style=" background-image: url(images/banners/course-box-3.jpg);"></div>
                                        <div class="mycaption">
                                            <h6 class="category-title">One Week MBA</h6>
                                            <!--  <span class="category-count">1 Course</span> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card wrapper overall-card-holder">
                                        <div class="card-body portfolio-item" style=" background-image: url(images/banners/course-box-5.jpg);"></div>
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

    <div class="find course-list-msbm main-thumbnail-view py-3 font-fam">
        <h2 class="text-center explore-courses font-fam">Explore Courses</h2>
        <div class="container-fluid px-66">
            <p class="heading-find">Degree Programmes <span class="font-w-400">in Nigeria</span></p>
            <div class="row myflex">
                <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/banners/Professional Certificate in Developing A Research Conceptual Framework.jpg" class="card-img-top" alt="...">
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
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 52 Weeks</p>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 12 hour</p>
                                </div>
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br><span>NGN 4,000,000</span></p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-start">
                                            <img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon mt-3p">
                                            <p class="card-text ml-1"> <span>Online/</span><br><span>Classroom</span></p>
                                        </div>
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
                            <img src="<?php echo ROOT_DIR; ?>images/banners/Professional-Certificate-in-Developing-A-Research-Conceptual-Framework.jpg" class="card-img-top" alt="...">
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
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Years</p>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 10 hour</p>
                                </div>
                                <div class="col-12 d-flex justify-content-between mb-2">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 8,000,000</span><br><span>NGN 2,000,000</span></p>
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
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 12 Months</p>
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 11 hour</p>
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
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 1,000,000</span><br><span>NGN 500,000</span></p>
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

    <div class="find course-list-msbm main-thumbnail-view py-3 font-fam">
        <div class="container-fluid px-66">
            <p class="heading-find">Short Courses <span class="font-w-400">in United Kingdom</span></p>
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
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br><span>NGN 4,000,000</span></p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span>Online/</span><br><span>Classroom</span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div>
                            <div class="course-b-sect mt-2">
                                <div class="course-b-sect d-flex justify-content-end">
                                    <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                </div>
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
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br><span>NGN 4,000,000</span></p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span>Online/</span><br><span>Classroom</span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div>
                            <div class="course-b-sect mt-2">
                                <button class="btn btn-outline-danger btn-block btn-sm lt-sp"><i class="fa fa-bookmark"></i> Saved</button>
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
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br><span>NGN 4,000,000</span></p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span>Online/</span><br><span>Classroom</span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div>
                            <div class="course-b-sect mt-2">
                                <div class="course-b-sect d-flex justify-content-end">
                                    <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                </div>
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
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br><span>NGN 4,000,000</span></p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span>Online/</span><br><span>Classroom</span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div>
                            <div class="course-b-sect mt-2">
                                <div class="course-b-sect d-flex justify-content-end">
                                    <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                </div>
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

    <div class="find course-list-msbm main-thumbnail-view py-3 font-fam">
        <div class="container-fluid px-66">
            <p class="heading-find">Diploma Programmes <span class="font-w-400">in United Arab Emirates</span></p>
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
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br><span>NGN 4,000,000</span></p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span>Online/</span><br><span>Classroom</span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div>
                            <div class="course-b-sect mt-2">
                                <button class="btn btn-outline-danger btn-block btn-sm lt-sp"><i class="fa fa-bookmark"></i> Saved</button>
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
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br><span>NGN 4,000,000</span></p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span>Online/</span><br><span>Classroom</span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div>
                            <div class="course-b-sect mt-2">
                                <div class="course-b-sect d-flex justify-content-end">
                                    <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                </div>
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
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br><span>NGN 4,000,000</span></p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span>Online/</span><br><span>Classroom</span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div>
                            <div class="course-b-sect mt-2">
                                <div class="course-b-sect d-flex justify-content-end">
                                    <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                </div>
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
                                        <p class="card-text ml-1"> <span class="strike-item">NGN 10,000,000</span><br><span>NGN 4,000,000</span></p>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-start">
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon mt-3p">
                                        <p class="card-text ml-1"> <span>Online/</span><br><span>Classroom</span></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                            </div>
                            <div class="course-b-sect mt-2">
                                <div class="course-b-sect d-flex justify-content-end">
                                    <button class="btn btn-transparent btn-sm lt-sp"><i class="fa fa-bookmark"></i> Save</button>
                                </div>
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

<div class="blog-view-sect pad-50 font-fam">
    <div class="container-fluid px-66">
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

<div class="counter text-center bg-lighter-1 font-fam">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6">
                <h4 class="text-black">36,000 +</h4>
                <h6 class="text-black">Students</h6>
            </div>
            <div class="col-md-3 col-6">
                <h4 class="text-black">6,000 +</h4>
                <h6 class="text-black">Current Students</h6>
            </div>
            <div class="col-md-3 col-6">
                <h4 class="text-black">400 +</h4>
                <h6 class="text-black">Courses</h6>
            </div>
            <div class="col-md-3 col-6">
                <h4 class="text-black">160 +</h4>
                <h6 class="text-black">Countries</h6>
            </div>
        </div>
    </div>
</div>

<?php include_once('components/footer.php'); ?>