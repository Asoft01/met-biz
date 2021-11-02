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
                                Referral
                            </li>
                        </ol>
                    </div>
                    <h3>Referral</h3>
                    <!-- <div class="terms-category-cnt">
                        <div id="categories_section">
                            <div class="categories-select">
                                <form action="#" method="POST" id="term-select-nav">
                                    <select class="terms-category form-control" name="terms-category" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                        <option value="<?php echo ROOT_DIR; ?>registration-and-programmes-of-study.php">Registration and Programmes of study</option>
                                        <option value="<?php echo ROOT_DIR; ?>course-enrollment.php">Course Enrollment</option>
                                        <option value="<?php echo ROOT_DIR; ?>refund-policy.php">General Refund Policy</option>
                                        <option value="<?php echo ROOT_DIR; ?>deferral.php">Deferral</option>
                                        <option value="<?php echo ROOT_DIR; ?>referral.php" selected="selected">Referral</option>
                                        <option value="<?php echo ROOT_DIR; ?>flexible-payment.php">Flexible Payment</option>
                                        <option value="<?php echo ROOT_DIR; ?>leave-of-absence.php">Leave of Absence</option>
                                        <option value="<?php echo ROOT_DIR; ?>awarded-certificates.php">Awarded Certificates</option>
                                        <option value="<?php echo ROOT_DIR; ?>applying-to-msbm.php">Applying To MSBM</option>
                                        <option value="<?php echo ROOT_DIR; ?>terms.php">Terms and Conditions</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div> -->
                    <div class="terms-content">
                        <div class="wpb_wrapper">
                            <p>Refer your friends (provided they are not already MSBM students) to Metropolitan School of Business & Management (“MSBM”) and when they make their first payment with MSBM in accordance with these Terms & Conditions, and successfully enrol for at least 1 programme with MSBM you will qualify to receive a discount off your Programme with MSBM or a Commission from us (“The Offer”).</p>
                            <p>To participate in the Offer you must recommend at least 1 friend to take the Programme by submitting your friends’ details.</p>
                            <p>The friends you recommend will receive an email from MSBM on behalf of you containing an invitation to enrol for the recommended programme or any other programme with MSBM. To enrol, the friend needs to do the following before the registration deadline:</p>
                            <ul>
                                <li>Pay the Registration Fee</li>
                                <li>Submit the filled Application Form with the required supporting documents.</li>
                                <li>Once the Conditional Offer of Acceptance for the Programme has been sent, the Tuition Fee invoiced must be paid either in full or in the preferred Instalment </li>
                            </ul>
                            <p>You will only qualify for the Offer if your referral enrols as stated above and your discount/commission is payable either in full for the full payment or on a pro-rated basis on the Instalment basis.</p>
                            <p>Once your friend has successfully enrolled a Student Liaison Personnel will be in contact within 48 working hours to discuss the redemption of the Offer.</p>
                            <p>Before entering any friends email addresses and inviting them to participate in the Offer you must ensure that you have the permission of each friend you recommend to be contacted by MSBM.</p>
                            <p>You may only claim the Offer once per friend enrolled and for 1 Programme only. </p>
                            <p>By participating in the Offer you agree to be bound by these terms and conditions, and that the decision of MSBM is final and binding in all matters relating to this.</p>
                            <p>MSBM reserves the right to cancel or amend the terms of this Refer a Friend Offer without notice.</p>
                            <p>Any personal data collected for the purposes of the Offer will be processed in accordance with the provisions of MSBM’s Privacy Policy.</p>
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