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
                                Deferral
                            </li>
                        </ol>
                    </div>
                    <h3>Deferral</h3>
                    <div class="terms-category-cnt">
                        <div id="categories_section">
                            <!-- <div class="categories-select">
                                <form action="#" method="POST" id="term-select-nav">
                                    <select class="terms-category form-control" name="terms-category" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                        <option value="<?php echo ROOT_DIR; ?>registration-and-programmes-of-study.php">Registration and Programmes of study</option>
                                        <option value="<?php echo ROOT_DIR; ?>course-enrollment.php">Course Enrollment</option>
                                        <option value="<?php echo ROOT_DIR; ?>refund-policy.php">General Refund Policy</option>
                                        <option value="<?php echo ROOT_DIR; ?>deferral.php" selected="selected">Deferral</option>
                                        <option value="<?php echo ROOT_DIR; ?>referral.php">Referral</option>
                                        <option value="<?php echo ROOT_DIR; ?>flexible-payment.php">Flexible Payment</option>
                                        <option value="<?php echo ROOT_DIR; ?>leave-of-absence.php">Leave of Absence</option>
                                        <option value="<?php echo ROOT_DIR; ?>awarded-certificates.php">Awarded Certificates</option>
                                        <option value="<?php echo ROOT_DIR; ?>applying-to-msbm.php">Applying To MSBM</option>
                                        <option value="<?php echo ROOT_DIR; ?>terms.php">Terms and Conditions</option>
                                    </select>
                                </form>
                            </div> -->
                        </div>
                    </div>
                    <div class="terms-content">
                        <div class="wpb_wrapper">
                            <p>Students may only defer their place on a course by up to 1 academic year (4 Sessions), subject to application, payment of a deferral/administrative fee and the School’s approval. Under no circumstances will deferral be granted for more than one academic year (4 Sessions). </p>
                            <p>Students must make an application for deferral at least 28 days (4 weeks) before the Course Commencement Date.</p>
                            <p>You can defer twice (2 Sessions) at no extra fee than the originally charged administrative fee plus any increase in Tuition Fee, but by the third deferment, there would be an increased administrative charge for the Session plus any increase in Tuition Fee and no more deferment after the fourth deferment. This means that failure to attend or take up the Course by the fourth deferment (1 academic year) would mean your initial Tuition Fee payment is forfeit.</p>
                            <p>By the 5th deferment (next academic year), you would have to re-register, pay the registration fee and pay the Tuition Fee afresh.</p>
                            <p>Applications Cancelled less than 4 weeks after initial payment are subject to an administration charge deductible from the initial payment made and/or as stated on your Invoice or payment page. </p>
                            <p>No refund would be given for Cancellations less than 14 days to the Programme and there would be an administrative charge for deferment to another Session. </p>
                            <p>Upon deferring their course, students waive their right to submit an application for a refund. Where a student has deferred their course, and subsequently fails or attempts to withdraw from the course NO REFUNDS WILL BE PROVIDED save in exceptional circumstances. The School has sole discretion in determining whether or not student’s circumstances are exceptional.</p>
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