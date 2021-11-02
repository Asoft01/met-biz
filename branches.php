<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/11.jpg);">
    <div class='overlay'></div>
    <div class="container">
        <div class="overlay-text">
            <h1>MSBM Nigeria</h1>
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
    <div class="worldwide list-thumbnail mb-3">
        <div class="container">
            <div class='row '>
                <div class='col-lg-8 worldwide-cols'>
                    <div aria-label="breadcrumb">
                        <ol class="breadcrumb nav-breadcrumb-msbm">
                            <li class="breadcrumb-item nav-breadcrumb-msbm-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item nav-breadcrumb-msbm-item active" aria-current="page">
                                Our Branches
                            </li>
                        </ol>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <div class="card branch-card">
                                <div class="card-body">
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/united-kingdom.png" class="img-flag">
                                    <h5 class="card-title">MSBM London, United kingdom</h5>
                                    <address>
                                        9th Floor, One Canada Square,<br />
                                        E14 5DY Canary Wharf.<br />
                                        London. United Kingdom<br />
                                        Email:<a href="mailto:info@msbm.org.uk">info@msbm.org.uk</a><br>
                                        Telephone: +44 (0) 207 712 1588<br />
                                        Website: www.msbm.org.uk
                                    </address>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="card branch-card">
                                <div class="card-body">
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/the_United_Arab_Emirates.svg.png" class="img-flag">
                                    <h5 class="card-title">MSBM Dubai, UAE</h5>
                                    <address>
                                        Business Village:<br />
                                        Block-B 4th Floor,<br />
                                        Clock Tower, Deira City Centre, Dubai, UAE.<br />
                                        Email:<a href="mailto:info@msbm.ae">info@msbm.ae</a><br>
                                        Telephone: +971 (0) 4 253 5070<br />
                                        Website: www.msbm.ae
                                    </address>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="card branch-card">
                                <div class="card-body">
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/Russia.svg.png" class="img-flag">
                                    <h5 class="card-title">MSBM Kazan, Russia</h5>
                                    <address>
                                        11 Floor, 1A N.Yershova St.,<br />
                                        Korston Tower, Kazan, Russia<br />
                                        Email:<a href="mailto:Russia@msbm.org.uk">Russia@msbm.org.uk</a><br>
                                        Website: www.russia.msbm.org.uk
                                    </address>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="card branch-card">
                                <div class="card-body">
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/Flag_of_Qatar.svg" class="img-flag">
                                    <h5 class="card-title">MSBM Doha, Qatar</h5>
                                    <address>
                                        15th Floor, Block B, The Palm<br />
                                        Tower, West Bay, Doha, Qatar,<br />
                                        Email:<a href="mailto:Qatar@msbm.org.uk">Qatar@msbm.org.uk</a><br>
                                        Website: www.Qatar@msbm.org.uk
                                    </address>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="card branch-card">
                                <div class="card-body">
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/Nigeria.svg.png" class="img-flag">
                                    <h5 class="card-title">MSBM Lagos, Nigeria</h5>
                                    <address>
                                        54B, Adeniyi Jones Avenue, Ikeja, Lagos,<br />
                                        Nigeria.<br />
                                        Telephone: +234 809 999 9867<br />
                                        Website: www.msbm.edu.ng
                                    </address>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="card branch-card">
                                <div class="card-body">
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/Nigeria.svg.png" class="img-flag">
                                    <h5 class="card-title">MSBM Abuja, Nigeria</h5>
                                    <address>
                                        Abuja Office: 4th floor, Grand Square Towers,<br />
                                        Central Business District, Abuja, Nigeria.<br />
                                        Website: www.msbm.org.uk
                                    </address>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="card branch-card">
                                <div class="card-body">
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/Bahrain.svg" class="img-flag">
                                    <h5 class="card-title">MSBM Bahrain</h5>
                                    <address>
                                        19th &amp; 20th Floor, Bahrain World Trade Center<br>
                                        Manama, Bahrain<br>
                                        Email: <a href="mailto:bahrain@msbm.org.uk">bahrain@msbm.org.uk</a><br>
                                        Website: www.bahrain.msbm.org.uk
                                    </address>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <div class="card branch-card">
                                <div class="card-body">
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/Ghana.svg" class="img-flag">
                                    <h5 class="card-title">MSBM Accra, Ghana</h5>
                                    <address>
                                        19 Kanfliar Street, Asylum Down,<br />
                                        Accra, Ghana.<br>
                                        Email:<a href="mailto:ghana@msbm.org.uk">ghana@msbm.org.uk</a><br />
                                        Website: www.ghana.msbm.org.uk
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="demanding-course">
                        <div class="find course-list-msbm">
                            <div class="container">
                                <div class="row myflexx">
                                    <div class="col-md-12 col-12 col-lg-12 col-xl-12 card">
                                        <h4 class="about-content-heading">Most Demanding Course</h4>
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
                                            <button class="btn btn-normal">View more demanding courses<i class="fa fa-chevron-right slide-icon"></i></button>
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

</body>

</html>