<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/banners/terms.jpg);">
    <div class='overlay'></div>
    <div class="container">
        <div class="overlay-text">
            <h1>Professional Courses Terms And Conditions</h1>
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
                    <h3>Terms and Conditions</h3>
                    <div class="terms-category-cnt">
                        <div id="categories_section">
                            <div class="categories-select">
                                <form action="#" method="POST" id="term-select-nav">
                                    <select class="terms-category form-control" name="terms-category" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">

                                        <option value="<?php echo ROOT_DIR; ?>terms.php">Terms and&nbsp;conditions</option>
                                        <option value="<?php echo ROOT_DIR; ?>programmes-study-terms-and-conditions.php">Programmes Of Study Terms And Conditions</option>
                                        <option value="<?php echo ROOT_DIR; ?>professional-courses-terms-and-conditions.php" selected="selected">Professional Courses Terms And Conditions</option>
                                        <option value="<?php echo ROOT_DIR; ?>promotions-terms-and-conditions.php">Promotions Terms And Conditions</option>
                                        <option value="<?php echo ROOT_DIR; ?>admission-policy.php">Admission Policy</option>
                                        <option value="<?php echo ROOT_DIR; ?>privacy-policy.php">Privacy Policy</option>
                                        <option value="<?php echo ROOT_DIR; ?>accessibility-policy.php">Accessibility Policy</option>
                                        <option value="<?php echo ROOT_DIR; ?>refund-policy.php">Refund Policy</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="terms-content">
                        <h5 class="terms-content-heading">Professional Courses Terms And Conditions</h5>
                    </div>
                    <div class="terms-content">
                        <h5 class="terms-content-heading">Masters Degree Programmes Terms and Conditions ( ALL STUDY MODES )</h5>
                        <div class="wpb_wrapper">
                            <div class="wpb_wrapper">
                                <ol>
                                    <li>An Admission Letter and Payment Invoice will be sent upon receipt and approval of student registration. In order to register for a Session, Candidates need to pay fully for the programme or complete the required Instalment where there is a payment plan in place on or before the Application Deadline.Only those who have paid the required Instalment in full will be admitted to attend the Classes. All payments are effected in the applicable currency, which can be paid online via your Debit or Credit Card or directly into the School’s Account, all of which would be provided in the Payment Invoice sent to you.</li>
                                    <li>Applications Cancelled less than 4 weeks after initial payment are subject to an administration charge of £200.00 deductible from the initial payment made. However, once the Programme has commenced, no cancellation is allowed, neither is any Payment refunded.</li>
                                    <li>Application cancellations/deferments must be received in writing at least 4 weeks before the commencement date of the classes; otherwise it is upon MSBM’s discretion.</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="terms-content">
                        <h5 class="terms-content-heading">Special Executive Masters Programme Terms And Conditions (ALL STUDY MODES).</h5>
                        <div class="wpb_wrapper">
                            <ol>
                                <li>Event changes and cancellations must be received in writing at least 4 weeks before the published commencement date of the event. Otherwise it is upon MSBM’s discretion. In order to ensure that Students benefit from the entire experience, MSBM will run the programs provided that there is a minimum number of 15 delegates.</li>
                                <li>In case of cancellation from MSBM, delegates may choose to be refunded or allocate this amount towards another Programme with MSBM. Registration cancelled less than 14 days before the event are subject to an administrative charge of £500.00.</li>
                                <li>An acceptance letter and payment invoice will be sent upon receipt of your registration. In order to book their place, participants need to complete the full payment the latest before the programme. Please note that full payment must be received prior to the event. Only those who have paid the fees in full will be admitted to attend the course. All payments are effected in GBP (Pounds Sterling). Note only Fees paid before stated deadlines are entitled to discount.</li>
                            </ol>
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