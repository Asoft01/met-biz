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
                    <div aria-label="breadcrumb">
                        <ol class="breadcrumb nav-breadcrumb-msbm">
                            <li class="breadcrumb-item nav-breadcrumb-msbm-item">
                                <a href="index.php">Home</a>
                            </li>
                            <li class="breadcrumb-item nav-breadcrumb-msbm-item active" aria-current="page">
                                Terms and Conditions
                            </li>
                        </ol>
                    </div>
                    <h3>Terms and Conditions</h3>
                    <div class="terms-category-cnt">
                        <div id="categories_section">
                            <div class="categories-select">
                                <form action="#" method="POST" id="term-select-nav">
                                    <select class="terms-category form-control" name="terms-category" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                        <option value="<?php echo ROOT_DIR; ?>terms.php" selected="selected">Terms and conditions</option>
                                        <option value="<?php echo ROOT_DIR; ?>cookies.php">Cookies</option>
                                        <option value="<?php echo ROOT_DIR; ?>msbm-partners.php">MSBM Partners</option>
                                        <option value="<?php echo ROOT_DIR; ?>privacy-policy.php">Privacy Policies</option>
                                        <option value="<?php echo ROOT_DIR; ?>accessing-website.php">Website Policies</option>
                                        <option value="<?php echo ROOT_DIR; ?>registration-and-programmes-of-study.php">Learning with MSBM</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="terms-content">
                        <h3>Introduction</h3>
                        <p> Welcome to the Metropolitan School of Business & Management UK (MSBM)
                            We are delighted that you have chosen MSBM to help with your Educational or training needs. The following pages explore the terms and conditions of a contract between you and us which covers</p>
                        <p>(a) your use of our website and</p>
                        <p>(b) how we make our learning program available to you.</p>
                    </div>
                    <div class="terms-content">
                        <h3>Summary</h3>
                        <div class="accordion mb-5" id="msbmAccordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Website use <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>

                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>We are licensed to use all the content on our website. All the content is owned by us and we control access to it.
                                                You are not allowed to commercialise our website or the content on it (ie you are not allowed to make money or attract advertising to another business by using our website).</p>
                                            <p>You can share our Homepage URL with others but if you only link to part of our website or copy and paste parts of it you have to acknowledge where the content comes from.
                                                We are not responsible for the content or any viruses etc on sites that we may link to.</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Privacy and Data Protection <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">

                                            <p> We comply with all relevant laws on Privacy and Data Protection. In general this means that we will only collect or process personal information for specific and lawful purposes, we won’t collect more than we need for those purposes or keep it for longer than necessary, we will do our best to keep it accurate, and we will keep it as safe as we can. Please see our privacy policy for more details.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Registering for our Courses <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                    <div class="card-body">

                                        <p>You need to be aware that our Partner Institutions may have their own terms, policies and procedures regarding your eligibility to participate in the full degree courses we offer. If you do not meet those criteria, you will not be permitted to register for them on our platform.</p>
                                        <p>If you are given any credit or certification for a course; this will be the entire responsibility of our Partner Institution/Body and you should contact them for any issues you have about that.
                                            You may only use the content on our platform for your own personal or business learning and you are not allowed to adapt it or distribute any of it to anybody else.</p>
                                        <p>You may be able to post your own content on our site. We don’t make any claim to ownership of that content but you do give us a licence to use, exploit and sublicense it for any purposes associated with the provision of the website or the course.</p>

                                        <p>You are responsible for making sure the content of what you post does not infringe the copyright or other rights of third parties and you may be liable to them and to us for any loss or damage that they or we suffer for content you publish which infringes the rights of others.</p>

                                        <p>The content we provide on our platform is owned by us. You have no rights over that content except as provided in the contract.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Contract <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>The following terms and conditions (the Terms) apply to our provision and your use of the information, services and materials (Online Content and Courses) through the MSBM website (the Website) including you visiting and browsing the Website (being a Visitor) and registering with MSBM as a student (a Learner).</p>
                                            <p>These Terms should be read alongside, and are in addition to our policies, including our privacy and cookies policies (the Policies).</p>
                                            <p>Please read these Terms carefully. These Terms are not negotiable. If you do not agree to them, you must stop using the Website and the Online Content and Courses immediately.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveOne" aria-expanded="false" aria-controls="collapseFiveOne">
                                            About Us <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveOne" class="collapse" aria-labelledby="headingFiveOne">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>In these Terms, references to we or us are to MSBM, a company incorporated in England and Wales (registered number 09716902) whose registered address is One Canada Square, 29th Floor, Canada Square, London, England, E14 5DY.</p>
                                            <p>In these Terms, references to you or your, are references to you whether as a Learner or Visitor.</p>
                                            <p>MSBM offers both Online and Classroom Courses at some of our Branches. We also offer Courses via the Distance Learning mode through our affiliate Universities.</p>
                                            <p>If you have any questions about these Terms and Conditions or wish to contact us for any reason please click send an email to <a href="mailto:info@msbm.org.uk">info@msbm.org.uk</a></p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveTwo" aria-expanded="false" aria-controls="collapseFiveTwo">
                                            Using the Website (Learner conduct) <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveTwo" class="collapse" aria-labelledby="headingFiveTwo">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>By using this Website and the Online Content and Courses, you confirm that you have read, agree and are in compliance with these Terms and the Policies (each as amended from time to time). </p>
                                            <p>Your use of and access to this Website and the Online Content and Courses are subject to the following conditions (Acceptable Use Conditions), and you agree that failure to comply with any one of the Acceptable Use Conditions will constitute a breach of these Terms. </p>

                                            <p>The Acceptable Use Conditions are as follows:</p>

                                            <ul>

                                                <li>You agree to use the Website and access the Online Content and Courses only for lawful purposes and your use of the Website and Online Content and Courses is in no way unlawful or fraudulent, and does not have the intention or effect of damaging us or our affiliate Universities either by reputation or financially;</li>
                                                <li>
                                                    You agree not to use or access the Website or the Online Content and Courses for the purpose of harming or attempting to others in any way;
                                                </li>

                                                <li>You agree not to distribute all or any part of the Website or Online Content and Courses in any medium without our prior written consent, unless such distribution is offered through the functionality of the Website and is permitted by these Terms and Conditions.</li>

                                                <li>You agree not to alter or modify any part of the Website or the Online Content and Courses;</li>

                                                <li>You agree not to access the Website or Online Content and Courses through any technology other than the software provided by us or enabled via API or other generally available third-party web browsers such as Chrome, Firefox, Safari or Internet Explorer;</li>

                                                <li>You agree not to (and will not attempt to) circumvent, disable or otherwise interfere with any security related features of the Website or any features that:<br />
                                                    <ul>
                                                        <li>Prevent or restrict use or copying of content or </li>
                                                        <li>Enforce any limitations on you, the use of the Website or access to the Online Content and Courses;</li>
                                                    </ul>
                                                </li>

                                                <li>You agree not to knowingly transmit any data or send or submit any content that contains viruses, Trojan horses, worms, time-bombs, key-stroke loggers, spyware, adware or any other harmful programs or similar computer code designed to adversely affect the operation of any computer software or hardware;</li>

                                                <li>You agree not to use or access the Website or Online Content and Courses for any commercial uses or for the benefit of any third party, including but not limited to:<br />
                                                    <ul>
                                                        <li>the sale of access to the Online Content and Courses or any associated content;</li>
                                                        <li>the solicitation of business in the course of trade or in connection with a commercial enterprise; and </li>
                                                        <li>the solicitation of any Visitors or Learners of the Website with respect to their content for commercial purposes;</li>
                                                    </ul>
                                                </li>

                                                <li>You agree to use the Website and access the Online Content and Courses in a way which does not infringe the rights of third parties or restrict or prevent anyone else’s use and enjoyment of the Website, Online Content and Courses;</li>

                                                <li>You agree not to ask for, collect or harvest any personal data of any Visitor or Learner of the Website or Online Content and Courses;</li>

                                                <li>You agree not to post, upload, email or otherwise transmit to or otherwise cause us to email, transmit or otherwise distribute chain letters, surveys or studies, calls to action, junk mail, pyramid schemes, incentives (monetary or click-based), spimming or spamming, or bulk communications of any kind, whether or not for commercial or non-commercial purposes;</li>

                                                <li>You will not copy, reproduce, create derivative works of, distribute, transmit, broadcast, display, sell, license, or otherwise exploit any content contained on the Website (including without limitation the Online Content and Courses) for any other purpose other than as permitted by these Terms without our prior written consent;</li>

                                                <li>You agree not to use the Website or the Online Content and Courses in any manner intended to damage, disable, overburden or impair any MSBM server or the network(s) connected to any MSBM server, or infringe any requirements, procedures, policies or regulations of any servers or networks connected to the Website; </li>

                                                <li>You agree not to use any high volume, automated, or electronic means to access the Website or the Online Content and Courses (including without limitation robots, spiders or scripts); </li>

                                                <li>You agree not to frame the Website or the Online Content and Courses, place pop-up windows over its pages, or otherwise affect the display of its pages;</li>
                                                <li>You agree not to access or attempt to access any other Visitor or Learner’s account or falsely state, impersonate, or otherwise misrepresent your identity, including but not limited misrepresenting your affiliations with a person or entity, past or present;</li>

                                                <li>You agree not to force headers or otherwise manipulate identifiers in order to disguise the origin of any communication transmitted through the Website; and</li>
                                                <li>You agree not to send, knowingly receive, submit, download, use or re-use any material which does not comply with these Terms and the Policies).</li>
                                                <li>You agree to comply with these Terms in relation to any Learner Content (as defined below) provided by you in connection with the Online Content and Courses and in connection with the ability to post messages (as further detailed below).</li>
                                            </ul>

                                            <p>We grant the operators of public search engines permission to use spiders to copy materials from the site for the sole purpose of creating publicly available searchable indices of the materials, but not caches or archives of such materials. We reserve the right to revoke these exceptions, either generally or in specific cases.</p>

                                            <p>You acknowledge and agree that the form and nature of the Website and Online Content and Courses which we provide may change from time to time without prior notice to you.</p>

                                            <p>Whilst we do all we can to ensure that the Online Content and Courses are of a high standard, you understand and acknowledge that, in using the Website and Online Content and Courses, you may be exposed to content from our Partner Institutions that is factually inaccurate, offensive if taken out of context, indecent to certain people, or otherwise objectionable to you. We are not responsible (legally or otherwise) for any claims you may have against us in relation to this type of content.</p>

                                            <p>You acknowledge and agree that we may stop (permanently or temporarily) providing the Website, Online Content and Courses (or any part of the Online Content and Courses) to you or to Learners generally for whatever reason, at our sole discretion, without prior notice to you.</p>

                                            <p>You agree that you are solely responsible for (and that we have no responsibility to you or to any third party for) any breach of your obligations under the Terms and for the consequences of that breach (including, but not limited to, any loss or damage which we or any third party may suffer).</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFiveThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveThree" aria-expanded="false" aria-controls="collapseFiveThree">
                                            Registering for our Courses <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveThree" class="collapse" aria-labelledby="headingFiveThree">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>Any Visitor can view the Website, but in order to participate fully in all activities, study the Course and take part in the Online Content on the Website and in our Classroom Sessions, you must register for the Course by filling out our Application Form.</p>

                                            <p>By registering with MSBM, you agree (in addition to the Acceptable Use Conditions above) that you:</p>
                                            <ul>
                                                <li>will not set up multiple Learner Accounts;</li>
                                                <li>will not let anyone else use your Learner Account; </li>
                                                <li>will not cheat on any assignment </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingFiveFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveFour" aria-expanded="false" aria-controls="collapseFiveFour">
                                            Licence to use <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveFour" class="collapse" aria-labelledby="headingFiveFour">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>Subject to your compliance with these Terms, we grant you a fully revocable, worldwide, non-exclusive, non-transferable, non sub-licensable limited right and licence:</p>
                                            <ul>
                                                <li>to access, internally use and display the Website and Online Content and Courses as an individual only at your location solely as necessary to browse and/or participate in the Online Content and Courses as permitted by these Terms; and </li>
                                                <li>- to download permitted content from the Online Content and Courses so that you may exercise the rights granted to you by these Terms.</li>


                                            </ul>

                                            <p>You must abide by all copyright notices or restrictions contained on the Website or the Online Content and Courses. You may not delete any attributions, legal or proprietary notices on the Website or the Online Content and Courses.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveFive" aria-expanded="false" aria-controls="collapseFiveFive">
                                            Your Content <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveFive" class="collapse" aria-labelledby="headingFiveFive">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>Throughout your use of the Website and the Online Content and Courses, you may be able to provide content to the Website by uploading notes and replies, Learner discussions, profile pages, other content and media for social interaction, and written assignments, surveys, questions, hypothetical, examples, etc. (collectively, the Learner Content).</p>

                                            <p>We do not claim ownership of any Learner Content you may submit or make available for inclusion on the Website or on the Online Content and Courses. Accordingly, subject to the licence granted to us, the Learner will be the sole and exclusive owner of any and all rights, title and interest in and to the Learner Content.</p>

                                            <p>With respect to any Learner Content you submit to us or that is otherwise made available to us, you grant us an irrevocable, worldwide, perpetual, royalty-free and non-exclusive licence to use, distribute, reproduce, modify, adapt, publicly perform and publicly display or otherwise exploit such Learner Content on the Website and/or in the Online Content and Courses, with the right to sublicense such rights for any purpose associated with the provision of the Website and the Online Content and Courses. We reserve the right to remove any Learner Content without notice at any time and for any reason.</p>

                                            <p>To the extent that you provide any Learner Content, you represent and warrant that:</p>

                                            <ul>
                                                <li>you have all necessary rights, licences and/or clearances to provide such Learner Content and permit us to use and publish such Learner Content if need be; </li>
                                                <li>such Learner Content is accurate and complete to the best of your knowledge and belief; </li>
                                                <li>as between you and us, you are responsible for the payment of any third party fees related to the provision, publication and use of such Learner Content; and </li>
                                                <li>such use and/or publication of your Learner Content does not and will not infringe or misappropriate any third party rights or constitute a fraudulent statement or misrepresentation.</li>
                                            </ul>

                                            <p>With respect to any submissions of Learner Content, you agree to comply with all applicable laws including but not limited to laws regarding online conduct and acceptable content. Specifically, you agree to comply with all applicable laws regarding the transmission of technical data exported from the country in which you reside.</p>

                                            <p>The Website and/or the Online Content and Courses may provide you with the ability to post notes and replies, take part in group discussions, submit assignments or send similar messages and communications to third party service providers, other Learners and/or us.</p>

                                            <p>You agree to use the applicable communication methods available on the Website and/or the Online Content and Courses only to send communications and materials related to the subject matter for which we provided the communication method, and you further agree that all such communications by you are subject to and governed by these Terms, the Policies and our Code of Conduct.</p>

                                            <p>By using any of the communications methods available on the Website and/or the Online Content and Courses, you agree that:</p>

                                            <ul>
                                                <li>all communications methods constitute public, and not private, means of communication between you and any other parties; </li>
                                                <li>communications sent to or received from third party service providers or other third parties are not endorsed, sponsored or approved by us in any manner (unless expressly stated otherwise by us); and </li>
                                                <li>Most content will be reactively moderated if flagged by Learners or Visitors, but we reserve the right to pre-review or post-review Learner Content to ensure that it complies with generally acceptable standards of communication.</li>
                                            </ul>

                                            <p>Additionally, through such communication methods set out above, we may make certain types of services that allow you to communicate with our staff members.</p>
                                            <p>You acknowledge and agree that the services set out in the paragraphs above may be monitored or recorded for quality control purposes and that the information or material provided as part of the services is included within these Terms and is provided for educational purposes only.</p>
                                            <p>Any Learner Content that is published on the public discussion areas of the Website (for example, the blog or areas where posts are made) will be subject to a Creative Commons Licence (Attribution-Non Commercial-No Derivatives; BY-NC-ND). </p>

                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="card">
                                <div class="card-header" id="headingTMTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMTwo" aria-expanded="false" aria-controls="collapseTMTwo">
                                            Copyright Policy <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMTwo" class="collapse" aria-labelledby="headingTMTwo">
                                    <div class="card-body">
                                        <p>It is our policy that any content included on the Website or within the Online Content and Courses that infringes, or is likely to infringe, the intellectual property rights of any third party will be removed from the Website as soon as possible after we are made aware of such infringement or potential infringement.</p>

                                        <p>If you are the owner of intellectual property rights, or are authorised to act on behalf of an owner, or authorised to act under any exclusive right, you should report any alleged infringements of your intellectual property rights taking place on or through the Website by emailing a Copyright Infringement Notice to <a href="mailto:info@msbm.org.uk">info@msbm.org.uk</a>, containing at a minimum the details outlined in section(s) below.</p>

                                        <p>We will take whatever action, in our sole discretion, we deem appropriate, including the removal of the challenged content.</p>

                                        <p>When you notify us in accordance with the above paragraph(s), your written Copyright Infringement Notice must contain the following:</p>

                                        <ul>
                                            <li>statement telling us you believe that you have found content on the Website which you believe infringes your intellectual property rights; </li>
                                            <li>which country your intellectual property rights apply to;</li>
                                            <li>the title of the content concerned and the full URL for access to that content; </li>
                                            <li>statement explaining how the content infringes your intellectual property rights; </li>
                                            <li>your mailing address, telephone number and email address so that we can contact you; </li>
                                            <li>a statement that the information contained in the notice is accurate and that you are the owner of the intellectual property rights or have an exclusive right in law to bring infringement proceedings in respect of its use; and </li>
                                            <li>your signature (an electronic signature is sufficient).</li>
                                        </ul>

                                        <p>We will, acting in our sole discretion, terminate Learner Accounts and access to the Website and Online Content and Courses if a Learner has been notified of infringing activity twice or more (regardless of whether the Learner has taken appropriate action as we may direct.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="headingTMThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMThree" aria-expanded="false" aria-controls="collapseTMThree">
                                            Privacy and Security <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMThree" class="collapse" aria-labelledby="headingTMThree">
                                    <div class="card-body">
                                        <p>We respect your right to privacy. Please see our Privacy Policy and Cookies Policy for full details.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTMFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMFour" aria-expanded="false" aria-controls="collapseTMFour">
                                            Links to Other Sites <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMFour" class="collapse" aria-labelledby="headingTMFour">
                                    <div class="card-body">
                                        <p>The Website may contain links to pages on other websites (Linked Sites), and those Linked Sites may contain content or offer products and/or services for sale.</p>
                                        <p>We do not author, edit, control, or monitor these Linked Sites. You therefore acknowledge and agree that:</p>

                                        <ul>
                                            <li>we have no responsibility for the accuracy or availability of information provided by Linked Sites; and </li>
                                            <li>we do not control or endorse the sponsors of such Linked Sites or the content, products, advertising or other materials presented on such Linked Sites.</li>

                                        </ul>

                                        <p>We may remove any links to Linked Sites from the Website at any time for any reason.</p>
                                        <p>We will not be liable for any transactions conducted by you with third parties through any Linked Site or for any liability arising from any representations or information provided on such Linked Sites.</p>

                                        <p>We appreciate that Linked Sites may contain material in which the operator of the Linked Sites has intellectual property rights. We respect those rights and provide the links for information purposes only. The fact that we have linked to any Linked Site does not create or imply any relationship or partnership between us and the operator of such Linked Site.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTMFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMFive" aria-expanded="false" aria-controls="collapseTMFive">
                                            MSBM's Intellectual Property Rights <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMFive" class="collapse" aria-labelledby="headingTMFive">
                                    <div class="card-body">
                                        <p>We are the owner or the licensee of all necessary intellectual property rights in all aspects of the Website and Online Content and Courses including but not limited to the technology, source code, all content, software, scripts, images, graphics and audio (the Online Content and Courses). </p>

                                        <p>The Online Content and Courses is protected to the fullest extent possible by copyright laws. All such rights are reserved. You agree that the Online Content and Courses remain the property of us and that all updates and modifications to the Online Content and Courses will vest in us. </p>

                                        <p>You also agree that you have no rights in or to the Online Content and Courses other than the right to use it in accordance with the terms of the licence in the paragraph above. Unless otherwise stated, copyright in the Online Content and Courses belongs to us.</p>

                                        <p>Other than any content submitted to the Website by you, we own or are licensed to use all present and future copyright, registered and unregistered trademarks, design rights, unregistered designs, database rights and all other present and future intellectual property rights and rights in the nature of intellectual property rights existing in or in relation to the Website.</p>

                                        <p>If any Online Content and Courses vests in you, whether by operation of law or otherwise, you duly assign to us all right, title and interest (whether legal or beneficial) in such Online Content and Courses, as the case may be, throughout the world to the fullest extent possible, including any and all renewals and extensions of such Online Content and Courses. You unconditionally and irrevocably waive any and all moral rights you may have either now or in the future existing in or in connection with the Online Content and Courses or the Website.</p>

                                        <p>You agree to sign and provide all such deeds, documents, acts and things as we may reasonably require in order to assign any Online Content and Courses to us, to carry out the intended purpose of these Terms, or to establish, perfect, preserve or enforce our rights under these Terms.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTMSix">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMSix" aria-expanded="false" aria-controls="collapseTMSix">
                                            Your Liability to Us <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMSix" class="collapse" aria-labelledby="headingTMSix">
                                    <div class="card-body">
                                        <p>You indemnify and keep us fully indemnified from and against all actions, claims, demands, costs, expenses, liabilities, loss, damages or other monetary relief brought, made or awarded against or incurred by us resulting (directly or indirectly) from: </p>

                                        <ul>
                                            <li>you submitting Learner Content to the Website or participating in the Online Content and Courses;</li>
                                            <li>your access to or use of the Website or Online Content and Courses; </li>
                                            <li>your breach of any of these Terms; and </li>
                                            <li>any negligent act or omission, deliberate default or breach of statutory duty on your part.</li>

                                        </ul>

                                        <p>Each indemnity in this paragraph is separate and independent from the other obligations in these Terms. Each of these indemnities is to remain fully effective despite any indulgence granted from time to time and despite any judgment or order.</p>

                                        <p>The above paragraph survives the expiry of these Terms.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTMSeven">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMSeven" aria-expanded="false" aria-controls="collapseTMSeven">
                                            Our Liability to you <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMSeven" class="collapse" aria-labelledby="headingTMSeven">
                                    <div class="card-body">
                                        <p>Nothing in these Terms affects any statutory rights that you are entitled to as a consumer.
                                            The Website and the Online Content and Courses are provided to you as is and we make no warranty or representation to you with respect to them.</p>

                                        <p>We exclude all representations, warranties, conditions and terms express or implied by statute, common law or otherwise to the fullest extent permitted by law. We accept no liability for any special, indirect, incidental, consequential or economic loss, or any other losses, howsoever caused arising out of or in connection with these Terms. This includes (without limitation):</p>

                                        <ul>
                                            <li>any loss of profit (directly or indirectly); </li>
                                            <li>any loss of goodwill; and </li>
                                            <li>any loss of opportunity.</li>
                                        </ul>


                                        <p>We provide the Online Content and Courses on the Website in good faith but give no warranty or representation that the Online Content and Courses are accurate, complete or up-to-date or that they will meet your requirements, nor that the Website does not infringe the rights of any third party. </p>

                                        <p>We accept no responsibility or liability for your use of the Online Content and Courses on the Website and your use is entirely at your own risk. While we take reasonable precautions to prevent the existence of computer viruses and/or other malicious programs on the Website, we accept no liability for them.</p>

                                        <p>Information transmitted via this Website will pass over public telecommunications networks. We make no representation or warranty that the operation of this Website will be timely, secure, uninterrupted or error-free and disclaim all liability in that respect to the greatest extent permitted by law.</p>

                                        <p>We accept no responsibility for any loss or damage incurred by you as a result of:</p>

                                        <ul>
                                            <li>any reliance placed by you on the completeness, accuracy or existence of any information or advertising, or as a result of any relationship or transaction between you and any advertiser or sponsor whose advertising appears on the Website or in relation to the Online Content and Courses; </li>

                                            <li>any changes which we may make to the Website or Online Content and Courses, or for any temporary interruptions in the provision of the Website or Online Content and Courses; </li>

                                            <li>the deletion of, corruption of, or failure to store, any Online Content and Courses and other communications data maintained or transmitted by or through your use of the Website; </li>

                                            <li>your failure to provide us with accurate account information; or </li>
                                            <li>your failure to keep your account details secure and confidential.</li>
                                        </ul>

                                        <p>We reserve the right to suspend your use of the Website and/or access to the Online Content and Courses at any time for operational, regulatory, legal or other reasons.</p>

                                        <p>We may terminate your Learner Account or access/use of the Website with immediate effect:</p>

                                        <ul>
                                            <li>if we reasonably believe you or any Learner you are connected with are in breach of any of these Terms; </li>
                                            <li>in order to prevent any fraudulent, unlawful or abusive activity; or </li>
                                            <li>if it is necessary to prevent or stop any harm or damage to us, other Learners of the Website or the general public</li>
                                        </ul>



                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTMEight">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMEight" aria-expanded="false" aria-controls="collapseTMEight">
                                            Governing Law <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMEight" class="collapse" aria-labelledby="headingTMEight">
                                    <div class="card-body">

                                        <p>These Terms, your use and access to the Website, and all other policies issued by us whether referred to by us herein or not are governed by and construed in all respects in accordance with the laws of England and Wales.</p>

                                        <p>Any or all disputes arising between you and us (whether contractual or non-contractual) in connection with your access and use of the Website, including as to the validity of these Terms or policy issued by us, will be subject to the exclusive jurisdiction of the courts of England and Wales. </p>

                                        <p>For any dispute between you and us, you agree that you will first attempt to resolve it with us informally. In the unlikely event that we are unable to resolve the dispute in this manner within 3 months of the dispute being notified in writing, we both agree to submit to the exclusive jurisdiction of the courts of England and Wales to resolve any such dispute.</p>

                                        <p>Notwithstanding the above paragraph, you agree that we are permitted to apply for injunctive remedies (or any other types of interim relief) in any jurisdiction at any time.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTMNine">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMNine" aria-expanded="false" aria-controls="collapseTMNine">
                                            Changes to the Website and these Terms <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMNine" class="collapse" aria-labelledby="headingTMNine">
                                    <div class="card-body">

                                        <p>We may update or amend these Terms (as well as our Policies or and other guidance we issue) from time to time to comply with law or to meet our changing business requirements. When we update our Terms or Policies, we will take appropriate measures to inform you, consistent with the significance of the changes we make. Any updates or amendments will be posted on the Website.</p>

                                        <p>For any operational, regulatory, legal or other reason, we reserve the right to modify, suspend or discontinue all of the Online Content and Courses with or without notice to you and we will not be liable to you or any third party for any such modifications, suspension or termination. By continuing to use the Website, you agree to be bound by the terms of these updates and amendments.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTMTen">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMTen" aria-expanded="false" aria-controls="collapseTMTen">
                                            Other Important Terms <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMTen" class="collapse" aria-labelledby="headingTMTen">
                                    <div class="card-body">

                                        <p>If any of these Terms are found to be illegal, invalid or unenforceable by any court of competent jurisdiction, the remainder of these Terms remain in full force and effect.</p>

                                        <p>Only you and we are entitled to enforce these Terms. No third party is entitled to enforce any of these Terms, whether by virtue of the Contracts (Rights of Third Parties) Act 1999 (which is expressly excluded) or otherwise.</p>

                                        <p>We may freely transfer or assign any part of our rights or delegate our obligations under these Terms. You are not entitled to transfer or assign, by operation of law or otherwise, any part of your rights or delegate your obligations under these Terms without our prior written consent.</p>

                                        <p>These Terms, the Policies and the Code of Conduct set out the entire agreement between you and us and replace any and all prior terms, conditions, warranties and/or representations to the fullest extent permitted by law. Any delay or failure by us to exercise any right we may have under these Terms does not constitute a waiver by us of that right.</p>
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