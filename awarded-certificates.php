<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/banners/terms.jpg);">
    <div class='overlay'></div>
    <div class="container">
        <div class="overlay-text">
            <h1>Learning with MSBM</h1>
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
    <div class="worldwide">
        <div class="container">
            <div class='row '>
                <div class='col-lg-8 worldwide-cols degree-info-accordion'>
                    <div aria-label="breadcrumb">
                        <ol class="breadcrumb nav-breadcrumb-msbm">
                            <li class="breadcrumb-item nav-breadcrumb-msbm-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item nav-breadcrumb-msbm-item">
                                <a href="learning-with-msbm.php">Learning with MSBM</a>
                            </li>
                            <li class="breadcrumb-item nav-breadcrumb-msbm-item active" aria-current="page">
                                Awarded Certificates
                            </li>
                        </ol>
                    </div>
                    <h3>Awarded Certificates</h3>
                    <div class="terms-category-cnt">
                        <div id="categories_section">
                            <!-- <div class="categories-select">
                                <form action="#" method="POST" id="term-select-nav">
                                    <select class="terms-category form-control" name="terms-category" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                        <option value="<?php echo ROOT_DIR; ?>registration-and-programmes-of-study.php">Registration and Programmes of study</option>
                                        <option value="<?php echo ROOT_DIR; ?>course-enrollment.php">Course Enrollment</option>
                                        <option value="<?php echo ROOT_DIR; ?>refund-policy.php">General Refund Policy</option>
                                        <option value="<?php echo ROOT_DIR; ?>deferral.php">Deferral</option>
                                        <option value="<?php echo ROOT_DIR; ?>referral.php">Referral</option>
                                        <option value="<?php echo ROOT_DIR; ?>flexible-payment.php">Flexible Payment</option>
                                        <option value="<?php echo ROOT_DIR; ?>leave-of-absence.php">Leave of Absence</option>
                                        <option value="<?php echo ROOT_DIR; ?>awarded-certificates.php" selected="selected">Awarded Certificates</option>
                                        <option value="<?php echo ROOT_DIR; ?>applying-to-msbm.php">Applying To MSBM</option>
                                        <option value="<?php echo ROOT_DIR; ?>terms.php">Terms and Conditions</option>
                                    </select>
                                </form>
                            </div> -->
                        </div>
                    </div>
                    <div class="terms-content">
                        <p>The Certificates awarded for our Programmes are broken down into 2 segments:</p>
                        <ul>
                            <li>Full Degree Certificates</li>
                            <li>UK (CPD) Continuing Professional Development Certificates</li>
                        </ul>
                        <p>Our Full Degree Certificates are as follows:</p>
                        <ul>
                            <li>International Postgraduate Certificates</li>
                            <li>Level 4 Diploma Certificates</li>
                            <li>Level 5 Diploma Certificates</li>
                            <li>Level 7 Diploma Certificates</li>
                            <li>Bachelor Degree Certificates (Awarded by affiliate UK Universities)</li>
                            <li>Master Degree Certificates (Awarded by affiliate UK Universities)</li>
                        </ul>
                        <p> Our UK (CPD) Continuing Professional Development Certificates are as follows:</p>
                        <ul>
                            <li>Professional Certificates</li>
                            <li>Special Executive Masters Certificates</li>
                        </ul>
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