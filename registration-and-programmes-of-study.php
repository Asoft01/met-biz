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
                                Registration and Programmes of Study
                            </li>
                        </ol>
                    </div>
                    <h3>Registration and Programmes of Study</h3>
                    <div class="terms-category-cnt">
                        <div id="categories_section">
                            <!-- <div class="categories-select">
                                <form action="#" method="POST" id="term-select-nav">
                                    <select class="terms-category form-control" name="terms-category" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                        <option value="<?php echo ROOT_DIR; ?>registration-and-programmes-of-study.php" selected="selected">Registration and Programmes of study</option>
                                        <option value="<?php echo ROOT_DIR; ?>course-enrollment.php">Course Enrollment</option>
                                        <option value="<?php echo ROOT_DIR; ?>refund-policy.php">General Refund Policy</option>
                                        <option value="<?php echo ROOT_DIR; ?>deferral.php">Deferral</option>
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
                        <P>This section applies to: ALL PROGRAMMES</P>
                        <p>This section tells students the full terms and conditions on which they enrol on to our courses listed on our website.</p>
                        <p>Students’ attention is particularly drawn to this section, as enrolment on to any course constitutes full and irrevocable acceptance of the terms and conditions.
                            Students must read these terms and conditions carefully before enrolling onto a course. IF YOU DO NOT UNDERSTAND OR DO NOT AGREE WITH ANY OF THE TERMS AND CONDITIONS PLEASE SEEK ASSISTANCE AND DO NOT ENROL ON TO <p>THE COURSE. Students are also advised to print and keep a copy of these terms and conditions for their records.</p>
                            We may revise these Terms and Conditions any time by amending this page. You are expected to check this page from time to time to take notice of any changes we make, as they are legally binding on you. Some of the provisions contained in these Terms and Conditions may also be superseded by other provisions, promotions or notices published elsewhere on our site.</p>
                    </div>
                    <div class="terms-content">
                        <div class="accordion mb-5" id="msbmAccordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Registration <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>On submitting your filled Application, you would either be sent an Invoice or taken to the page for the payment of your Registration Fee (if applicable). It is only after the payment of this Registration Fee that your Conditional Acceptance for the Programme would be sent to you. </p>
                                            <p>Please note that the Registration Fee is non refundable.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Tuition Fees <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>On the receipt of Conditional Acceptance for the Programme, you would be sent a Link or an Invoice for the payment of your Tuition Fee. Please note that an acceptable Commitment Fee, must be received prior to the course commencement in order to confirm your place and/or receive your Unconditional Acceptance for the Programme. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Cancellations & Deferrals <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p>Cancellations must be received in writing at least 4 weeks (28 days) before the published commencement date of the Programme. Otherwise it is upon MSBM’s discretion to accept or reject the Cancellation of said Programme.</p>
                                        <p>If you cancel less than 28 days to the Programme, an administrative charge deductible from the initial payment made and/or as stated on your Invoice or payment page.</p>
                                        <p>No refund would be given for Cancellations less than 14 days to the Programme and there would be an administrative charge for deferment to another Session. </p>
                                        <p>You can defer twice at no extra fee than the originally charged administrative fee plus any increase in Tuition Fee, but by the third deferment, there would be an increased administrative charge for the Session plus any increase in Tuition Fee and no more deferment after the fourth deferment. This means that failure to attend or take up the Course by the fourth deferment would mean your initial Tuition Fee payment is forfeit.</p>
                                        <p>By the 5th deferment, you would have to re-register, pay the registration fee and pay the Tuition Fee afresh.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Definitions <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>In these terms and conditions, the following definitions apply: </p>
                                            <p>These Terms should be read alongside, and are in addition to our policies, including our privacy and cookies policies (the Policies).</p>
                                            <p>Commencement Date: the date on which we begin to run the course, events, teaching or otherwise, for Your Programme. </p>
                                            <p>Contract: the legally-binding arrangement that you and we enter into when you accept a place on one of Our Programmes. The terms of the Contract are set out in these terms and conditions, as well as other relevant documents to which they refer. </p>
                                            <p>Course: a taught or research-based course that, together with other courses, makes up Your Programme. Intellectual Property Rights patents, rights to inventions, copyright and related rights, trademarks, business names and domain names, rights in get-up, goodwill and the right to sue for passing off, rights in designs, database rights, rights to use, and protect the confidentiality of, confidential information (including know-how), and all other intellectual property rights, in each case whether registered or unregistered and including all applications and rights to apply for and be granted, renewals or extensions of, and rights to claim priority from, such rights and all similar or equivalent rights or forms of protection which subsist or will subsist now or in the future in any part of the world. </p>
                                            <p>Programme: the programme of study on which you will be registered and to which these terms and conditions apply.</p>
                                            <p> Sponsor: any third party which may pay your tuition fees. </p>
                                            <p>Tuition Fees: The Tuition Fees that you owe us for the access to our teaching, course materials, administration and other academic services related to Your Programme. </p>
                                            <p>‘We’, ‘Us’ and ‘Our’: The Metropolitan School of Business & Management, with whom you will be entering the Contract. </p>
                                            <p>‘You’ and ‘Your’: You, the student, who will be attending the programme. </p>
                                            <p>Admissions/Acceptance: When you are sent an Admission/Acceptance Conditionally or unconditionally for the Programme electronically in writing, you will have entered into a legally-binding contract with us. This Contract requires you to abide by these terms and conditions.</p>
                                            <p>Your filing out the Application Form and paying the Registration Fee will indicate to us that you have sufficient funds to pay the required fees, as well as your expenses for the duration of the programme. As the contracting party, we will hold you liable for all Fees which you may owe us.</p>
                                            <p>We reserve the right to withdraw any offer that we have made to you if it becomes apparent that your application is inaccurate or incomplete. </p>
                                            <p>Tuition Fees: Fees and information in relation to how to pay for Your Programme can be found on your invoice or the Payment page. We will send you an invoice or link for the payment for Your Fees which you must pay according to the terms stated in your invoice. We will accept payment of Your Fees by a Sponsor but will consider you to be responsible, and therefore liable, for Your Fees. We may withdraw your place and terminate the contract between you and us if Your Sponsor fails to pay Your Fees by the required deadline.</p>
                                            <p>Your Responsibilities: By accepting the offer of a place on the Programme, you agree to these terms and conditions. </p>
                                            <p>Our Responsibilities: Save for the reasons set out above, we will use our best endeavours to deliver the Programme to you as it is set out in our Brochure. </p>
                                            <p>We will grant you access to academic services, including the use of our e-library and IT facilities if applicable. </p>
                                            <p>We will endeavour to resolve any issues, concerns or complaints which you bring to our attention as efficiently and thoroughly as is possible in the circumstances. </p>
                                            <p>We will comply with all relevant legislation, which includes the Data Protection Act 1998, which is reflected in Our Data Protection Policy Liability. </p>
                                            <p>We will only be liable for refunds of Fees paid, as explained above of these terms and conditions. We will not be liable for any damage, loss, personal injury or other costs or expenses which are incurred because of any unlawful, unreasonable or unwarranted action, behaviour, omission or decision by you or any third party. </p>
                                            <p>You will be liable for any damage or loss which we incur as a result of any unlawful, negligent, unreasonable or unwarranted action, behaviour, omission or decision on your part. </p>
                                            <p>You will be liable for the payment of Your Fees by the specified deadline in Your Fee invoice.</p>
                                            <p>Intellectual Property: As the ‘Creator’ of your academic work, you will normally own the Intellectual Property Rights to it; provided such work has been solely created by you and does not infringe any third-party Intellectual Property Rights (We shall have no liability in respect of such Intellectual Property Rights). </p>
                                            <p>Personal Information: We will comply with the Data Protection Act 1998. Unless you inform us otherwise: We will retain your personal information to contact you with marketing information and other school-related information that we would normally send to our alumni. We will ask you to complete anonymous evaluation surveys at the end of your Programme, the results of which we will circulate to relevant members in the School and externally for marketing purposes only unless you write to us to tell us otherwise. We will use video and photographic images of your Programme for promotional campaigns and engage with the wider community. </p>
                                            <p>Enforcement and Termination: We will terminate your contract and registration with us if we consider you to be in breach of any of these terms and condition, which includes you not complying with other relevant rules, regulations and academic requirements, including those listed above. Any waiver of, or failure to enforce the terms or conditions of this Contract will not mean a continual waiver or prevent enforcement in future. The terms of the Contract shall not be enforceable by any party who is not a party to it. </p>
                                            <p>The Contract and any dispute or claim arising out of or in connection with it shall be governed by and construed in accordance with the laws of England and Wales and subject to the exclusive jurisdiction of the courts of England and Wales. The Contract constitutes the entire agreement between you and us and supersedes all previous agreements between you and us, whether written or oral.</p>
                                        </div>
                                    </div>
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