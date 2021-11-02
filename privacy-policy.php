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
                    <h3>Privacy Policy</h3>
                    <div class="terms-category-cnt">
                        <div id="categories_section">
                            <div class="categories-select">
                                <form action="#" method="POST" id="term-select-nav">
                                    <select class="terms-category form-control" name="terms-category" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                        <option value="<?php echo ROOT_DIR; ?>terms.php">Terms and conditions</option>
                                        <option value="<?php echo ROOT_DIR; ?>cookies.php">Cookies</option>
                                        <option value="<?php echo ROOT_DIR; ?>msbm-partners.php">MSBM Partners</option>
                                        <option value="<?php echo ROOT_DIR; ?>privacy-policy.php" selected="selected">Privacy Policies</option>
                                        <option value="<?php echo ROOT_DIR; ?>accessing-website.php">Website Policies</option>
                                        <option value="<?php echo ROOT_DIR; ?>registration-and-programmes-of-study.php">Learning with MSBM</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="terms-content">
                        <div class="accordion mb-5" id="msbmAccordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Data Protection Statements <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>Data Protection Act 1998</p>
                                            <p>The information you supply will be used by the Metropolitan School of Business and Management, UK (MSBM), a British business school and her other affiliates, to process your admission into the programme(s) applied for, and to create your Personal Learning Record. For more information about how your information is processed and shared refer to the Extended Privacy Notice available on https://www.msbm.org.uk/data-protection. The information that you provide will be shared with other organisations for the purposes of administration, system requirements and other guidance and statistical research.</p>
                                            <p>&nbsp;</p>
                                            <p>Other organisations with which we will share information include our accrediting bodies, other MSBM branches and affiliate universities.</p>
                                            <p>At no time will your personal information be passed to organisations for marketing or sales purposes without explicit consent. You may be approached to take part in surveys by mail and phone which are aimed at enabling MSBM, UK to monitor performance, improve quality and plan future provision. If you are sponsored by an employer or agency or are a full-time student being looked after by a parent, guardian or carer you also consent to the College disclosing information about your attendance and progress with them.</p>
                                            <p>You can access our Data Protection Policy here</p>
                                            <p><a href="https://www.msbm.org.uk/data_protection_policy.pdf">https://www.msbm.org.uk/data_protection_policy.pdf</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How We Use Your Personal Information <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>The personal information you provide will be passed to the recruitment and admissions department for admission processing, the Account and finance department for payment record, the Student Support for student record and support, the academics department for academic support and assessment, and the technical support department for technical support.</p>
                                            <p>The information you provide will also be shared with our accrediting bodies and affiliate universities for the purpose of registration, at any stage during the programme. Your information may be shared with other organisations for education, training, employment and well-being related purposes, including for research.</p>
                                            <p>&nbsp;</p>
                                            <p>You may be contacted after you have completed your programme of learning to establish whether you have entered employment or moved on to further training. You may also get periodic emails shared to the alumni database.</p>
                                            <p>You may opt out of sharing your participation and achievement data by contacting the Alumni Relations Department on +44 (0) 207 712 1588 / <a href="mailto:alumni@msbm.org.uk">alumni@msbm.org.uk</a>. You will be required to provide some personal details to confirm your identity, which may include your Learner’s Registration Number (LRN), if known. Further information about use of and access to your personal data, and details of organisations with whom we regularly share data are available at:</p>
                                            <p><a href="https://www.msbm.org.uk/data_protection_policy.pdf">https://www.msbm.org.uk/data_protection_policy.pdf</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Extended Privacy Notice Text <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                    <div class="card-body">

                                        <div class="wpb_wrapper">
                                            <p>This statement is intended to provide you with information as to how the Learning Records Service will collect and use your personal information and data, and how you can exercise choice in respect of the use of your personal data. MSBM collects data relating to learners registering for relevant academic qualifications, Entry to Employment Certificates, and associated units. The recruitment and admissions stores learner participation and achievement data collected directly from awarding organisations. This information is known as the ‘Personal Learning Record’ (PLR). Permitted organisations will have access to your PLR in order to access your achievements, awards and to enable advice and guidance to be provided to you. You as the learner will be able to get a copy of your PLR.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Use of data <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>The Learner Registration Number enables MSBM and relevant Awarding Organisations to share information about participation and achievement in a consistent and approved manner, promoting good information management practice, and helping to improve accuracy and efficiency. This will benefit you through enhancing the application processes to Awarding Organisations, learning providers, learning advisors and other third parties. The PLR will be shared with organisations linked to your education and training, including those organisations specified in Regulations made under section 537A of the Education Act.</p>
                                            <p>&nbsp;</p>
                                            <p>Awarding Organisations are able to access limited achievement data that we hold about you, in order to verify its accuracy. All organisations that have control of the personal data about you and that we store in the Learning Records are required to be registered under the Data Protection Act 1998 and to use your personal information in accordance with the requirements of the Act. These organisations are required to sign relevant agreements and control documentation that requires them to manage your data responsibly and only to access information where there is a direct relationship between you and the relevant organisation. At no time will your personal information be passed to any organisations for marketing or sales purposes. Permissions for sharing The LRNis required to fulfil statutory requirements for administrations of services within the education and training sector.</p>
                                            <p>&nbsp;</p>
                                            <p>You cannot opt out of being issued with a LRN. However, you can opt-out of sharing your PLR. For details of how you may opt out of sharing your participation and achievement data refer https://www.msbm.org.uk/data-protection: Useful Information for Learners and Parents:</p>
                                            <p><a href="https://www.msbm.org.uk/data_protection_policy.pdf">https://www.msbm.org.uk/data_protection_policy.pdf</a></p>
                                            <p>For more information on this, kindly contact <a href="mailto:data-policy@msbm.org.uk">data-policy@msbm.org.uk</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveOne" aria-expanded="false" aria-controls="collapseFiveOne">
                                            Sensitive Personal Data <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveOne" class="collapse" aria-labelledby="headingFiveOne">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>The recruitment and admissions department makes every effort not to display any qualification information which consists of sensitive personal data on the PLR (e.g. data which relates to ethnic origin, physical or mental health, religious beliefs, trade union membership or any criminal offences or proceedings). If you consider that any sensitive qualification data has inadvertently been stored in your PLR, you should contact the admissions service desk.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveTwo" aria-expanded="false" aria-controls="collapseFiveTwo">
                                            Sensitive Learners <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveTwo" class="collapse" aria-labelledby="headingFiveTwo">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>The admissions office recognises that some learners have specific concerns about privacy which mean that additional safeguards are required. The admissions office implements a Sensitive Learners Policy to ensure these safeguards are implemented. The admissions office recognises the need to keep your information secure and has implemented a Security Policy that provides the appropriate technical and organisational measures aimed at preventing loss of, or unauthorised use of, your information in accordance with Government standards.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveThree" aria-expanded="false" aria-controls="collapseFiveThree">
                                            How Long Will We Keep Your Data? <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveThree" class="collapse" aria-labelledby="headingFiveThree">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>The Admissions Records Service is intended to provide a life-long record of learning which will be available to you at any time you choose to participate in education or training. Therefore, the Learning Records Service may continue to hold your LRN, PLR and Regulated Qualification Framework and associated data for 66 years and will be reviewed periodically. Updates to this policy The Admissions Records Service recognises that privacy and data protection concerns can evolve over time and will keep this policy under review. Any amendments will be posted here and will be notified to learners when they access their PLR.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveFour" aria-expanded="false" aria-controls="collapseFiveFour">
                                            IP addresses and cookies <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveFour" class="collapse" aria-labelledby="headingFiveFour">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>We may collect information about your computer, including where available your IP address, operating system and browser type, for system administration and for aggregate marketing reporting purposes. This is statistical data about our users’ browsing actions and patterns, and does not identify any individual.</p>
                                            <p>&nbsp;</p>
                                            <p>For the same reason, we may obtain information about your general internet usage by using a cookie file which is stored on the hard drive of your computer. Cookies contain information that is transferred to your computer’s hard drive. They help us to improve our site and to deliver a better and more personalised service. They enable us:</p>
                                            <ul>
                                                <li>To estimate our audience size and usage pattern.</li>
                                                <li>To store information about your preferences, and so allow us to customise our site according to your individual interests.</li>
                                                <li>To speed up your searches.</li>
                                                <li>To recognise you when you return to our site.</li>
                                            </ul>
                                            <p>You may refuse to accept cookies by activating the setting on your browser which allows you to refuse the setting of cookies. However, if you select this setting you may be unable to access certain parts of our site. Unless you have adjusted your browser setting so that it will refuse cookies, our system will issue cookies when you log on to our site.</p>
                                            <p>Please note that third-party sites which are linked to on our site may also use cookies, over which we have no control.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveFive" aria-expanded="false" aria-controls="collapseFiveFive">
                                            Disclosure of your information <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveFive" class="collapse" aria-labelledby="headingFiveFive">
                                    <div class="card-body">
                                        <p>We may disclose your personal information to any member of our group, which means our subsidiaries, our ultimate holding company and its subsidiaries, as defined in section 736 of the UK Companies Act 1985, and other associated companies.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTMTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMTwo" aria-expanded="false" aria-controls="collapseTMTwo">
                                            We may disclose your personal information to third parties: <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMTwo" class="collapse" aria-labelledby="headingTMTwo">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>In the event that we sell or buy any business or assets, in which case we may disclose your personal data to the prospective seller or buyer of such business or assets.</p>
                                            <p>If MSBM or substantially all of its assets are acquired by a third party, in which case personal data held by it about its customers will be one of the transferred assets.</p>
                                            <p>&nbsp;</p>
                                            <p>If we are under a duty to disclose or share your personal data in order to comply with any legal obligation, or in order to enforce or apply our terms of use&nbsp;<a href="https://msbm.org.uk/terms">www.msbm.org.uk/terms</a>&nbsp;and other agreements; or to protect the rights, property, or safety of MSBM, our customers, or others. This includes exchanging information with other companies and organisations for the purposes of fraud protection and credit risk reduction. For more information on MSBM Terms and Conditions, contact <a href="mailto:conditions@msbm.org.uk">conditions@msbm.org.uk</a></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTMThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMThree" aria-expanded="false" aria-controls="collapseTMThree">
                                            Your rights <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMThree" class="collapse" aria-labelledby="headingTMThree">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>You have the right to ask us not to process your personal data for marketing purposes. We will sometimes inform you (before collecting your data) if we intend to use your data for such purposes or if we intend to disclose your information to any third party for such purposes. You can exercise your right to prevent such processing by checking certain boxes on the forms we use to collect your data, when available. You can also exercise the right at any time by contacting us at <a href="mailto:privacy@msbm.org.uk">privacy@msbm.org.uk</a> or <a href="mailto:data-policy@msbm.org.uk">data-policy@msbm.org.uk</a></p>
                                            <p>&nbsp;</p>
                                            <p>Our site may, from time to time, contain links to and from the websites of our partner networks, advertisers and affiliates. If you follow a link to any of these websites, please note that these websites have their own privacy policies and that we do not accept any responsibility or liability for these policies. Please check these policies before you submit any personal data to these websites.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTMFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMFour" aria-expanded="false" aria-controls="collapseTMFour">
                                            Access to information <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMFour" class="collapse" aria-labelledby="headingTMFour">
                                    <div class="card-body">
                                        <p>The Act gives you the right to access information held about you. Your right of access can be exercised in accordance with the Act. Any access request may be subject to a fee of £20 to meet our costs in providing you with details of the information we hold about you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTMFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMFive" aria-expanded="false" aria-controls="collapseTMFive">
                                            Changes to our privacy policy <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMFive" class="collapse" aria-labelledby="headingTMFive">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>Any changes we may make to our privacy policy in the future will be posted on this page and, where appropriate, notified to you by e-mail.</p>
                                            <p>For further information regarding data protection, please contact data-policy@msbm.org.uk</p>
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