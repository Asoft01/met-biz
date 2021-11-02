<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/banners/terms.jpg);">
    <div class='overlay'></div>
    <div class="container">
        <div class="overlay-text">
            <h1>Admission Policy</h1>
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
                                        <option value="<?php echo ROOT_DIR; ?>professional-courses-terms-and-conditions.php">Professional Courses Terms And Conditions</option>
                                        <option value="<?php echo ROOT_DIR; ?>promotions-terms-and-conditions.php">Promotions Terms And Conditions</option>
                                        <option value="<?php echo ROOT_DIR; ?>admission-policy.php" selected="selected">Admission Policy</option>
                                        <option value="<?php echo ROOT_DIR; ?>privacy-policy.php">Privacy Policy</option>
                                        <option value="<?php echo ROOT_DIR; ?>accessibility-policy.php">Accessibility Policy</option>
                                        <option value="<?php echo ROOT_DIR; ?>refund-policy.php">Refund Policy</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="terms-content">
                        <h5 class="terms-content-heading">Choose your Postgraduate Programme</h5>
                        <div class="wpb_wrapper">
                            <p>Find out more about our postgraduate programmes. We recommend that you look closely at the programme key facts to make sure it is the programme that matches your career goals.</p>
                        </div>
                    </div>
                    <div class="terms-content">
                        <h5 class="terms-content-heading">Reminders</h5>
                        <div class="wpb_wrapper">
                            <p>Entry requirements vary depending on if you are a home or overseas student. Please read about the entry requirements of the programme before submitting your application.</p>
                            <p>Places on our postgraduate courses are often limited, so we recommend that you apply as early as possible. Check the programme key facts for intake dates or funding deadlines where appropriate.</p>
                        </div>
                    </div>
                    <div class="terms-content">
                        <h5 class="terms-content-heading">Complete the Application Form</h5>
                        <div class="wpb_wrapper">
                            <p>Your personal student advisor from the Recruitment Team can assist you in completing the corresponding Application Form sent to you if need be. After which you will need to collate all relevant documents and send them, along with your completed Application Form, to your advisor.</p>
                        </div>
                    </div>
                    <div class="terms-content">
                        <h5 class="terms-content-heading">Reminders</h5>
                        <div class="wpb_wrapper">
                            <p>Make sure you have all your supporting documents scanned. Admission documents required vary from course to course, so we strongly recommend that you check the programme entry requirements in advance. You can find a list of relevant admission documents on the Course Brochure.</p>
                        </div>
                    </div>
                    <div class="terms-content">
                        <h5 class="terms-content-heading">Receive your results</h5>
                        <div class="wpb_wrapper">
                            <div class="su-accordion">
                                <div class="su-spoiler su-spoiler-style-default su-spoiler-icon-plus">
                                    <div class="su-spoiler-content su-clearfix">
                                        <p>Upon receipt of the Application Form, all your documents will be submitted for consideration by the Academic Board. The Academic Board consists of senior academics at MSBM, and meets weekly to assess applicants’ eligibility for their chosen programme using the highest academic standards.</p>
                                        <p>After careful consideration you will receive one of the following offers:</p>
                                        <ul>
                                            <li>An unconditional offer. This usually comes as a Letter of Acceptance&nbsp; and means that you have successfully met all the requirements and have been accepted into your chosen programme.</li>
                                            <li>A conditional offer. This means that you have been accepted into the programme, on the condition that you fulfill whatever requirement may be left before you can proceed with your course.</li>
                                        </ul>
                                        <p>No offer means you did not receive an offer. This can be due to various reasons, such as: the academic board does not consider you to be ready to pursue this particular course. If you do not receive an offer for this reason, you may still be able to study at MSBM by increasing your qualifications through our Certificate Courses.</p>
                                        <p>Reasons why you have not received an offer will be made known to you. This will help you when re-applying. In each case, one of our Course Co-coordinators will contact you to explain this in further detail.</p>
                                    </div>
                                </div>
                            </div>
                            <p>For more information on admissions, contact us at<strong>&nbsp;admissions@msbm.org.uk</strong></p>
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