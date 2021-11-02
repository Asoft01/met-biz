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
                                Course Enrollment
                            </li>
                        </ol>
                    </div>
                    <h3>Course Enrollment</h3>
                    <div class="terms-category-cnt">
                        <div id="categories_section">
                            <!-- <div class="categories-select">
                                <form action="#" method="POST" id="term-select-nav">
                                    <select class="terms-category form-control" name="terms-category" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                        <option value="<?php echo ROOT_DIR; ?>registration-and-programmes-of-study.php">Registration and Programmes of study</option>
                                        <option value="<?php echo ROOT_DIR; ?>course-enrollment.php" selected="selected">Course Enrollment</option>
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
                        <div class="accordion mb-5" id="msbmAccordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Deposits, Fee and Payments <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>

                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>To be given an Unconditional Acceptance and/or book a place on a course, students must pay either </p>
                                            <p> (1) The full tuition fee; or </p>
                                            <p> (2) A minimum deposit of 25% of the total course fees (unless indicated otherwise on the application form, payment page or invoice in which case the terms of those pages or documents shall prevail). All deposits received are for the sole purpose of reserving a place on the course and are NON-REFUNDABL except in cases of complete withdrawal from the programme of which the Registration and Programme of Study Terms and Conditions (see above) will apply.</p>
                                            <p>AND</p>
                                            <p>This means that if a student changes their mind after enrolling on a course, the registration fee and (in some cases) part of the deposit payment CANNOT be refunded.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Payment Deadline <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>All tuition fees must be paid either in part or in full (depending on the Courses/Programme) by the payment deadline and before the commencement date of the Course. The commencement date of the Course is the published date as provided on the Unconditional Acceptance confirming successful enrolment to the Metropolitan School of Business & Management Course/Programme.</p>
                                            <p>Students who have not paid on time may lose their place on the course and may not be granted access to learning.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Dishonoured Payments <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p>A minimum charge of £50.00 will be made to students for all dishonoured payments. The School reserves the right to report offenders to the relevant professional body and the authorities, including, but not limited to relevant & applicable law enforcement agency in the relevant country.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Overdue Accounts <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>The School reserves the right to charge interest at 1% per month on overdue amounts, accruing monthly from the date that such payments become due.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveOne" aria-expanded="false" aria-controls="collapseFiveOne">
                                            Instalment Payment Plan <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveOne" class="collapse" aria-labelledby="headingFiveOne">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>The School expects all students to adhere to the terms and conditions of their payment plan, which includes submitting payment on the date it becomes due. A failure to comply with the terms and conditions of your payment plan renders any payment plan ineffective. As a result, the School may bring the payment plan to an end and reserves the right to recover all outstanding fees.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveTwo" aria-expanded="false" aria-controls="collapseFiveTwo">
                                            Debt Recovery <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveTwo" class="collapse" aria-labelledby="headingFiveTwo">
                                    <div class="card-body">
                                        <p>Please note that in relation to overdue amounts, the School also reserves the right to pass this matter to our debt recovery company without further notification to you. This means that your data will be passed to our debt recovery company for further action. For the avoidance of doubt, should your data be passed to our debt recovery company in order to recover any overdue amounts, your liability to pay will be increased by additional fees and charges.</p>
                                        <p>From time to time, we may offer discounts and fee waivers as part of time-limited promotions, packages, alumni discount and ‎early-bird offers. The full details, eligibility criteria and terms and conditions associated with any such offers, including any time limits and your responsibilities in order to benefit from any such offer will appear on our website and shall be deemed to be incorporated into these terms and conditions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveThree" aria-expanded="false" aria-controls="collapseFiveThree">
                                            Dismissal for Non-Payment <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveThree" class="collapse" aria-labelledby="headingFiveThree">
                                    <div class="card-body">
                                        <p>The School reserves the right to dismiss and expel any student at any time for the non-payment of fees. No fees will be refunded where a student is dismissed under this section.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFiveFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveFour" aria-expanded="false" aria-controls="collapseFiveFour">
                                            Reporting <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveFour" class="collapse" aria-labelledby="headingFiveFour">
                                    <div class="card-body">
                                        <p>The School is required to inform the appropriate authorities, where a student has been removed from our School. The School also reserves the right to report non-payment and delayed payment to credit-reporting agencies.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveFive" aria-expanded="false" aria-controls="collapseFiveFive">
                                            Fees subject to change <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveFive" class="collapse" aria-labelledby="headingFiveFive">
                                    <div class="card-body">
                                        <p>Fees are published separately for each semester and are payable by all students studying at the time unless they have paid full fees prior to the publication of the new fees. Paying a deposit does NOT prevent any fee increase being applied.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTMTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMTwo" aria-expanded="false" aria-controls="collapseTMTwo">
                                            Fees exclusive of Professional Body Charges<i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMTwo" class="collapse" aria-labelledby="headingTMTwo">
                                    <div class="card-body">
                                        <p>All tuition fees exclude amounts payable to professional bodies (if and where applicable) for student registration, exemptions and examination entries. Any such fees are payable directly by the student, and the School accepts no responsibility for such payment.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTMThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMThree" aria-expanded="false" aria-controls="collapseTMThree">
                                            VAT <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMThree" class="collapse" aria-labelledby="headingTMThree">
                                    <div class="card-body">
                                        <p>When applicable, all amounts quoted would include VAT. Some courses are provided by exempt bodies and are not subject to VAT. Please contact us for further details.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTMFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMFour" aria-expanded="false" aria-controls="collapseTMFour">
                                            No Deposit Account <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMFour" class="collapse" aria-labelledby="headingTMFour">
                                    <div class="card-body">
                                        <p>Funds received but not utilized or refunded in accordance with these Terms and Conditions will be forfeited to the School.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTMFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMFive" aria-expanded="false" aria-controls="collapseTMFive">
                                            Changes subject to approval <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMFive" class="collapse" aria-labelledby="headingTMFive">
                                    <div class="card-body">
                                        <p>The student agrees that he/she cannot change, defer or withdraw from the programme without prior consent from the School. Where a student has failed to comply with this clause, they will not be eligible for a refund.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTMSix">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMSix" aria-expanded="false" aria-controls="collapseTMSix">
                                            Promotions subject to change <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMSix" class="collapse" aria-labelledby="headingTMSix">
                                    <div class="card-body">
                                        <p>Promotions and offers may have restricted eligibility requirements and may change from time to time.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTMSeven">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMSeven" aria-expanded="false" aria-controls="collapseTMSeven">
                                            Value-Added Services <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMSeven" class="collapse" aria-labelledby="headingTMSeven">
                                    <div class="card-body">
                                        <p>Availability of the online resources, face to face/classroom and other value-added services cannot be guaranteed outside of reasons beyond the School’s control. This is including technical faults and limitations.</p>
                                        <p> In situations of Classroom only or Online only courses; access to all online resources (if provided) is done ex-gratia and does not form part of any contract for services for the former and access to face to face classes (if provided) is done ex-gratia and does not form part of any contract for services for the latter.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTMEight">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMEight" aria-expanded="false" aria-controls="collapseTMEight">
                                            Course Specification subject to change <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMEight" class="collapse" aria-labelledby="headingTMEight">
                                    <div class="card-body">
                                        <p>The School reserves the right to change the courses, tutors, course specifications, lectures, other materials, published programmes, speakers, dates and locations from the previously published materials on the site or any other timetables as well as the right to alter to cancel or change the content of lectures and/or study materials and the identity of tutors at its own discretion.</p>
                                        <p>The school shall discharge its obligations in respect of a specific course by providing teaching which is materially similar to the course specification advertised, notwithstanding the fact that course dates, times and location, and/or the identity of the lecturer may vary from previously advertised specification.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTMNine">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMNine" aria-expanded="false" aria-controls="collapseTMNine">
                                            Materials subject to change <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMNine" class="collapse" aria-labelledby="headingTMNine">
                                    <div class="card-body">
                                        <p>The School may make changes to the material on the website or to the products and prices described in them at any time without notice, although we will provide notice of substantive changes where applicable.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTMTen">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMTen" aria-expanded="false" aria-controls="collapseTMTen">
                                            Transfers <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMTen" class="collapse" aria-labelledby="headingTMTen">
                                    <div class="card-body">
                                        <p>Course transfers are only permissible with the School’s prior written consent. To apply to transfer, Students must complete an application form for course transfer (available on request) and pay an administration fee of £250. No transfers will be permissible in the event of a student owing fees to the School or in the event of Student’s failure to attend a sufficient number of classes either face to face or online. Students may be required to pay additional fees if new course fees are higher. All transfer requests are at the sole and absolute discretion of the School.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTMTenOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMTenOne" aria-expanded="false" aria-controls="collapseTMTenOne">
                                            Student Communication by Email <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMTenOne" class="collapse" aria-labelledby="headingTMTenOne">
                                    <div class="card-body">
                                        <p>The School sends out important student information (including timetable updates, class changes, etc.) exclusively by email. It is the student’s sole responsibility to ensure that the School has correct and up-to-date email addresses in our records, and that the student opens, reads and acts promptly upon such email notifications.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTMTenTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMTenTwo" aria-expanded="false" aria-controls="collapseTMTenTwo">
                                            Courses Non-residential <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMTenTwo" class="collapse" aria-labelledby="headingTMTenTwo">
                                    <div class="card-body">
                                        <p>All courses are non-residential unless specified otherwise, whether as a guest or a registered user. Please read these terms and conditions before you start to use the website. By using our site, you indicate that you accept these terms and conditions and that you agree to abide by them. If you do not agree to these terms of use, please refrain from using our website.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTMTenThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMTenThree" aria-expanded="false" aria-controls="collapseTMTenThree">
                                            Limitation of Liability <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMTenThree" class="collapse" aria-labelledby="headingTMTenThree">
                                    <div class="card-body">
                                        <p>Students’ attention is particularly drawn to this clause. Liability of Metropolitan School of Business & Management for losses arising from their negligence (except in the case of liability for death or personal injury), breach of contract or otherwise will be LIMITED TO THE FULL AMOUNTS PAID BY THE RELEVANT STUDENT FOR THE PARTICULAR COURSES AND/OR STUDY MATERIALS.</p>
                                        <p>Except in the case of liability for death and personal injury, Metropolitan School of Business & Management will have NO LIABILITY FOR INDIRECT OR CONSEQUENTIAL LOSS OR DAMAGE HOWSOEVER ARISING. We may revise this acceptable use policy at any time by amending this page. You are expected to check this page from time to time to take notice of any changes we make, as they are legally binding on you. Some of the provisions contained in this acceptable use policy may also be superseded by provisions, promotions or notices published elsewhere on our site.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTMTenFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMTenFour" aria-expanded="false" aria-controls="collapseTMTenFour">
                                            Governing Law <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMTenFour" class="collapse" aria-labelledby="headingTMTenFour">
                                    <div class="card-body">
                                        <p>For the purpose of the Data Protection Act 1998 (the Act), the data controller is Metropolitan School of Business &Management of 37th Floor, One Canada Square, E14 5DY, Canary Wharf, London, United Kingdom. MSBM shall process the personal data only in accordance with our privacy policy. In addition, the personal data that we collect from you may be transferred to, and stored at, a destination outside the European Economic Area (“EEA”) please see our Privacy Policy (/privacy-policy) for further details.</p>
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