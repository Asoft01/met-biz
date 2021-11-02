<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/banners/terms.jpg);">
    <div class='overlay'></div>
    <div class="container">
        <div class="overlay-text">
            <h1>Terms and Conditions</h1>
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
                    <h3>Study Contract</h3>
                    <div class="terms-category-cnt">
                        <div id="categories_section">
                            <div class="categories-select">
                                <form action="#" method="POST" id="term-select-nav">
                                    <select class="terms-category form-control" name="terms-category" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                        <option value="<?php echo ROOT_DIR; ?>terms.php">Terms and conditions</option>
                                        <option value="<?php echo ROOT_DIR; ?>cookies.php">Cookies</option>
                                        <option value="<?php echo ROOT_DIR; ?>msbm-partners.php">MSBM Partners</option>
                                        <option value="<?php echo ROOT_DIR; ?>privacy-policy.php">Privacy Policies</option>
                                        <option value="<?php echo ROOT_DIR; ?>study-contract.php" selected="selected">Study Contract</option>
                                        <option value="<?php echo ROOT_DIR; ?>accessing-website.php">Website Policies</option>
                                        <option value="<?php echo ROOT_DIR; ?>registration-and-programmes-of-study.php">Learning with MSBM</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="terms-content">
                        <p>This website is operated by Metropolitan School of Business & Management UK and Metropolitan School of Business & Management FZE.</p>
                        <div class="accordion mb-5" id="msbmAccordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Academic headquarters<i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            Metropolitan School of Business & Management, UK is registered company registered in England and Wales under company number 9716902 and located at: Floor 37, One Canada Square, E14 5DY, Canary Wharf, London, United Kingdom.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Administrative Headquarters <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>Metropolitan School of Business & Management FZE is registered in the United Arab Emirates, under company number 7814/2015 and located at: Floor 6, Business Village Block B, Port Saeed, Dubai, United Arab Emirates.</p>
                                            <p>The MSBM Administrative Headquarters is in charge of all Student Fee Collection and thus all base Fees are in United Arab Emirates (UAE) Dirhams.</p>
                                            <p>You may be contacted after you have completed your programme of learning to establish whether you have entered employment or moved on to further training. You may also get periodic emails shared to the alumni database.</p>
                                            <p>VAT Registration Number is 100276012000003 under the name: Metropolitan School of Business & Management FZE.
                                            </p>
                                            <p>These two companies will be referred to as (“we”, “us” and “our”).</p>
                                            <p>If you would like to contact us, we can be reached by email on <em><a href="mailto:info@msbm.org.uk">info@msbm.org.uk.</a></em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Definitions and Contract <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>In these terms and conditions, the following definitions apply to the Contract you have with us:</p>

                                            <div class="accordion" id="innerAccordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerOne">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerOne" aria-expanded="true" aria-controls="collapseInnerOne">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        Commencement Date
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerOne" class="collapse show" aria-labelledby="headingInnerOne" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>The date on which the Course or Training Commences.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerTwo">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerTwo" aria-expanded="false" aria-controls="collapseInnerTwo">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        Contract
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerTwo" class="collapse" aria-labelledby="headingInnerTwo" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>The legally-binding arrangement that you and we enter into when you accept a place to study any of our Courses/Training/Programmes/Programmes and Training as stated on our Website. The terms of the contract are set out in these terms and conditions, as well as other relevant documents to which they refer. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerThree">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerThree" aria-expanded="false" aria-controls="collapseInnerThree">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        Course/Training/Programme
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerThree" class="collapse" aria-labelledby="headingInnerThree" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>A taught or research-based course that, together with other Courses/Training/Programmes/Programmes, makes up your Course/Training/Programme. Intellectual Property Rights patents, rights to inventions, copyright and related rights, trademarks, business names and domain names, rights in get-up, goodwill and the right to sue for passing off, rights in designs, database rights, rights to use, and protect the confidentiality of, confidential information (including know-how), and all other intellectual property rights, in each case, whether registered or unregistered and including all applications and rights to apply for and be granted, renewals or extensions of, and rights to claim priority from, such rights and all similar or equivalent rights or forms of protection which subsist or will subsist now or in the future in any part of the world.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerFour">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerFour" aria-expanded="false" aria-controls="collapseInnerFour">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        Sponsor
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerFour" class="collapse" aria-labelledby="headingInnerFour" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>Any third party which may pay your tuition fees.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerFive">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerFive" aria-expanded="false" aria-controls="collapseInnerFive">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        Tuition Fees
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerFive" class="collapse" aria-labelledby="headingInnerFive" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>The Tuition Fees that you owe us for the teaching, administration and other academic services related to Course/Training/Programme. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerSix">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerSix" aria-expanded="false" aria-controls="collapseInnerSix">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        ‘We’, ‘Us’ and ‘Our’
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerSix" class="collapse" aria-labelledby="headingInnerSix" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>The Metropolitan School of Business & Management, UK and/or the Metropolitan School of Business & Management FZE which makes up both our Academic Headquarters and our Administrative Headquarters, respectively; with whom you will be entering the Contract.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerSeven">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerSeven" aria-expanded="false" aria-controls="collapseInnerSeven">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        ‘You’ and ‘Your’
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerSeven" class="collapse" aria-labelledby="headingInnerSeven" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>You, the student, who will be attending the programme. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerEight">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerEight" aria-expanded="false" aria-controls="collapseInnerEight">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        Registration Fee
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerEight" class="collapse" aria-labelledby="headingInnerEight" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>The Registration Fee you pay before you can access the Application Form for your desired Course/Training/Programme.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerNine">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerNine" aria-expanded="false" aria-controls="collapseInnerNine">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        Registration
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerNine" class="collapse" aria-labelledby="headingInnerNine" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>The filling out of the Online Application Form or the E-Application Form sent to your Email address.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerTen">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerTen" aria-expanded="false" aria-controls="collapseInnerTen">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        Admissions
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerTen" class="collapse" aria-labelledby="headingInnerTen" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>Conditional/Unconditional Admission to study your preferred Course of which means you will have entered into a legally binding contract with us. This Contract requires you to abide by our Terms and Conditions.</p>
                                                            <p>Your filling out the Online Application or E-Application Form, submitting and paying the Registration Fee will indicate to us that you have sufficient funds to pay the required fees, as well as your expenses for the duration of the programme. As the contracting party, we will hold you liable for all Fees which you may owe us.</p>
                                                            <p>We reserve the right to withdraw any offer that we have made to you if it becomes apparent that your application is inaccurate or incomplete. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerEleven">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerEleven" aria-expanded="false" aria-controls="collapseInnerEleven">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        Fees
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerEleven" class="collapse" aria-labelledby="headingInnerEleven" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>Fees and information concerning how to pay for Your Programme can be found either on the Website (in your local currency) or on your invoice if manually sent to you from our Accounts Department. </p>
                                                            <p>Please note that the MSBM Administrative Headquarters is in charge of all Student Fee Collection and thus all base Fees are in United Arab Emirates (UAE) Dirhams.</p>
                                                            <p>Our VAT registration Number is 100276012000003 under the name: Metropolitan School of Business & Management FZE.</p>
                                                            <p>You will either be directed to a Payment page on our website or be manually sent an invoice for your Fees which you must pay according to the terms stated in your invoice, payment page and this Terms and Conditions. </p>
                                                            <p>We will accept payment of Your Fees by a Sponsor but will consider you to be responsible, and therefore liable, for Your Fees. We may withdraw your place and terminate the contract between you and us if you or your Sponsor fails to pay your Fees by the required deadline.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerTwelve">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerTwelve" aria-expanded="false" aria-controls="collapseInnerTwelve">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        Cancellations & Deferrals
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerTwelve" class="collapse" aria-labelledby="headingInnerTwelve" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>Kindly refer to our <span class="text-danger">cancellation and deferral policies</span> under (Registration and Programmes of Study). </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerThirteen">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerThirteen" aria-expanded="false" aria-controls="collapseInnerThirteen">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        Your Responsibilities
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerThirteen" class="collapse" aria-labelledby="headingInnerThirteen" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>By accepting the offer of a place on the Programme in the process stated above, You agree to all our terms and conditions.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerFourteen">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerFourteen" aria-expanded="false" aria-controls="collapseInnerFourteen">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        Our Responsibilities
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerFourteen" class="collapse" aria-labelledby="headingInnerFourteen" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>Save for the reasons set out above, We will use our best endeavours to deliver the Course/Training/Programme to you as it is set out on our Website or Off-the-shelf Brochures.</p>
                                                            <p>We will grant you access to academic services, including the use of our I.T facilities <strong>if applicable</strong>.</p>
                                                            <p>We will endeavour to resolve any issues, concerns or complaints which you bring to our attention as efficiently and thoroughly as is possible in the circumstances.</p>
                                                            <p>We will comply with all relevant legislation, which includes the Data Protection Act 1998, which is reflected in Our <span class="text-danger">Data Protection Policy Liability</span>.</p>
                                                            <p>We will only be liable for refunds of fees paid, as explained <span class="text-danger">Refunds Terms and conditions</span>. We will not be liable for any damage, loss, personal injury or other costs or expenses which are incurred because of any unlawful, unreasonable or unwarranted action, behaviour, omission or decision by you or any third party.</p>
                                                            <p>You will be liable for any damage or loss which we incur as a result of any unlawful, negligent, unreasonable or unwarranted action, behaviour, omission or decision on your part. </p>
                                                            <p>You will be liable for the payment of your fees by the specified deadline in your fee invoice.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerFourteen">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerFourteen" aria-expanded="false" aria-controls="collapseInnerFourteen">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        Intellectual Property
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerFourteen" class="collapse" aria-labelledby="headingInnerFourteen" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>As the ‘Creator’ of your academic work, you will normally own the Intellectual property rights to it, provided such work has been solely created by you and does not infringe any third party Intellectual property rights (We shall have no liability in respect of such intellectual property rights). </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerSixteen">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerSixteen" aria-expanded="false" aria-controls="collapseInnerSixteen">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        Personal Information
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerSixteen" class="collapse" aria-labelledby="headingInnerSixteen" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>We will comply with the Data Protection Act 1998. Unless You inform Us otherwise: We will retain Your personal information to contact You with marketing information and other School-related information that We would normally send to Our alumni; We will ask You to complete anonymous evaluation surveys at the end of Your Programme, the results of which We will circulate to relevant members in the School and externally for marketing purposes only Unless You write to Us to tell Us otherwise, We will use video and photographic images of Your Programme for promotional campaigns and engage with the wider community. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingInnerSeventeen">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerSeventeen" aria-expanded="false" aria-controls="collapseInnerSeventeen">
                                                                <div class="media">
                                                                    <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                                    <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                                    <div class="media-body">
                                                                        Enforcement and Termination
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="collapseInnerSeventeen" class="collapse" aria-labelledby="headingInnerSeventeen" data-parent="#innerAccordion">
                                                        <div class="card-body">
                                                            <p>We will terminate your contract and registration with us if we consider you to be in breach of any of these terms and condition, which includes you not complying with other relevant rules, regulations and academic requirements, including those listed above. </p>
                                                            <p>Any waiver of, or failure to enforce the terms or conditions of this Contract will not mean a continual waiver or prevent enforcement in future. The terms of the Contract shall not be enforceable by any party who is not a party to it. </p>
                                                            <p>The Contract and any dispute or claim arising out of or in connection with it shall be governed by and construed in accordance with the laws of England and Wales and subject to the exclusive jurisdiction of the courts of England and Wales. The Contract constitutes the entire agreement between you and us and supersedes all previous agreements between you and us, whether written or oral.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Other Terms <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>In the case of Course/Training/Programmes fulfilled in a digital format, including but not limited to digital certificates, you are strictly prohibited from attempting to extract any element of the document and from editing or creating a new document based on the digital Course/Training/Programme.</p>
                                            <p>Please note that separate Terms and Conditions may apply to Courses/Training/Programmes/Programmes that are to be fulfilled by third-party providers.</p>
                                            <p>You should also be aware that:</p>
                                            <ul>
                                                <li>Any personal information that you submit to us in the course of registering for one of our Courses/Training/Programmes/Programmes through this website will be handled in accordance with our Privacy Policy.</li>
                                                <li>Our website uses cookies and our cookie policy is available here</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveOne" aria-expanded="false" aria-controls="collapseFiveOne">
                                            Registrations for Courses/Training/Programmes to be fulfilled by a third party (“Third Party providers”) <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveOne" class="collapse" aria-labelledby="headingFiveOne">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>In addition to Metropolitan School of Business and Management UK Courses/ Training/ Programmes, we may offer Third-Party Courses/Training/Programmes through the Metropolitan School of Business and Management UK website from time to time, including, for example, Bachelor or Master Degree Top-up Programmes administered by third-party providers (our affiliate UK Universities).</p>
                                            <p>When you opt for a Third Party Course/Training/Programme through the Metropolitan School of Business and Management UK website, you acknowledge that Metropolitan School of Business and Management UK is administering your registration only to take payment and forward your registration to the third-party provider, for ease of use.
                                            </p>
                                            <p>We do not have possession of any Third Party Courses/Training/Programmes listed or offered through the Metropolitan School of Business and Management UK website, and we are not involved in the actual teaching between you and the third-party provider. The contract for studying with the Third Party provider is directly between you and the third-party provider. You acknowledge that no contract for studying with the third party provider will subsist at any point between you and us.</p>
                                            <p>All registrations for Third-Party Courses/Training/Programmes will be subject to the terms of the third party provider you are studying with, as notified to you by that third party provider once your registration has been submitted and offer to study the Course granted. When registering for a Third Party Course, you agree that any information you provide to us in connection with your registration may be shared with the Third Party provider to process your registration.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveTwo" aria-expanded="false" aria-controls="collapseFiveTwo">
                                            Courses/Trainings/Programmes Descriptions <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveTwo" class="collapse" aria-labelledby="headingFiveTwo">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>The images of the Courses/Training/Programmes on our website are for illustrative purposes only. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveThree" aria-expanded="false" aria-controls="collapseFiveThree">
                                            Fees and Delivery <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveThree" class="collapse" aria-labelledby="headingFiveThree">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>The Fee of any Course/Training/Programmes that you register for through the Metropolitan School of Business and Management UK website will be as quoted on our website (as amended from time to time).</p>
                                            <p>The fees quoted for the Courses/Training/Programmes on our website do not include VAT.</p>
                                            <p>Though the Fee payable may be displayed in your local currency, the base Fee is in the United Arab Emirates (UAE) Dirhams and payments are collected in the UAE Dirhams. The total amount due will be confirmed on the payment page or the manually sent Invoice for payment.</p>
                                            <p>Listed fees may change at any time, but such changes will not affect ongoing fees being paid for the Course/Training/Programme registered for before the amendment taking effect.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveFour" aria-expanded="false" aria-controls="collapseFiveFour">
                                            Ownership of the Metropolitan School of Business and Management UK
                                            <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveFour" class="collapse" aria-labelledby="headingFiveFour">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>Course/Training/Programmes you have registered for will only pass to you when we have received the Instalment or full payment, from you. However, once you have been given access to the Metropolitan School of Business and Management UK Course/ Training/ Programmes you have registered for, they are your responsibility. The Metropolitan School of Business and Management UK Course/Training/Programmes are held at your risk from the time of access or commencement of the Course/Training/Programme.</p>
                                            <p>We aim to give you access to an off-the-shelf customized Metropolitan School of Business and Management UK Course/Training/Programmes not listed on our website; within six (6) to eight (8) weeks of requesting and paying a Commitment for the Course/ Training/ Programme. </p>
                                            <p>We aim to give you access to our shelf Courses as listed on our website as soon as the registration process is complete and the stated commencement date is reached. If we are unable to do this, we will contact you to offer a new delivery date. If this new date is not acceptable, you may cancel your order and receive a full refund.</p>
                                            <p>Delivery fees for an off-the-shelf customized Metropolitan School of Business and Management UK Course/Training/Programmes not listed on our website will be made available to you before an Invoice is sent on request. The exact delivery time for the Course/ Training/Programme will also be outlined in the Proposal sent to you.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveFive" aria-expanded="false" aria-controls="collapseFiveFive">
                                            Disclaimer <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveFive" class="collapse" aria-labelledby="headingFiveFive">
                                    <div class="card-body">
                                        <p>We may need to update these Terms (as well as any other policies or guidance we issue) from time to time to comply with the law or to meet our changing business requirements, without notice to you. Any updates or amendments will be posted on the website. Besides, we reserve the right to modify, suspend or discontinue the sale of certain Course/Training/Programmes with or without notice to you and we will not be liable to you or any third party for any such modifications, suspension or termination. By continuing to use the Website, you agree to be bound by the terms of these updates and amendments.</p>
                                        <p>If you choose to study any Course listed on our website which is to be fulfilled directly by us, all our Terms and Conditions, our Privacy Policy, Refunds Policy, Payment Policy and our Delivery Policy; make up the entire agreement between you and us concerning that choice. Additional and/or separate terms may apply to the choice of Courses/Training/Programmes/Programmes that are to be fulfilled by third-party providers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTMTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMTwo" aria-expanded="false" aria-controls="collapseTMTwo">
                                            Confirmations <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMTwo" class="collapse" aria-labelledby="headingTMTwo">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>By choosing a Course to study on the website:</p>
                                            <p>You accept and agree to be bound by these Terms;</p>
                                            <p>Where you are not a UK and UAE resident, you confirm to us that there is nothing in the laws governing the place where you live that would make it illegal or unlawful for you to study through us;</p>
                                            And
                                            <p>You confirm that you are at least 18 years old.</p>
                                            <p>These terms and conditions (the “Studying with MSBM”) set out how we deliver our Courses/Training/Programmes to you. In particular, these Terms will apply when you choose to study a Course/Training/Programme listed on our website or choose to opt for off-the-shelf customized Courses/Training/Programmes which you may want us to deliver or facilitate for you.</p>
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