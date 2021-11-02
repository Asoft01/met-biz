<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/banners/terms.jpg);">
    <div class='overlay'></div>
    <div class="container">
        <div class="overlay-text">
            <h1>Website Policies</h1>
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
                    <h3>Learner Code of Conduct</h3>
                    <div class="terms-category-cnt">
                        <div id="categories_section">
                            <div class="categories-select">
                                <form action="#" method="POST" id="term-select-nav">
                                    <select class="terms-category form-control" name="terms-category" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                        <option value="<?php echo ROOT_DIR; ?>accessing-website.php">Accessing our Website</option>
                                        <option value="<?php echo ROOT_DIR; ?>regular-changes-to-our-website.php">Regular Changes to our Website</option>
                                        <option value="<?php echo ROOT_DIR; ?>intellectual-property-rights.php">Intellectual Property Rights</option>
                                        <option value="<?php echo ROOT_DIR; ?>reliance-on-information-posted-on-our-website.php">Reliance on Information posted on our website</option>
                                        <option value="<?php echo ROOT_DIR; ?>msbm-liability.php">MSBM's Liability</option>
                                        <option value="<?php echo ROOT_DIR; ?>visits-to-our-website.php">Visits to our Website</option>
                                        <option value="<?php echo ROOT_DIR; ?>uploading-content-on-our-website.php">Uploading Content to our Website</option>
                                        <option value="<?php echo ROOT_DIR; ?>linking-to-our-website.php">Linking to our Website</option>
                                        <option value="<?php echo ROOT_DIR; ?>links-from-our-website.php">Links from our Website</option>
                                        <option value="<?php echo ROOT_DIR; ?>user-concerns.php">User Concerns</option>
                                        <option value="<?php echo ROOT_DIR; ?>acceptable-use-policy.php">Acceptable Use Policy</option>
                                        <option value="<?php echo ROOT_DIR; ?>prohibited-usage.php">Prohibited Usage</option>
                                        <option value="<?php echo ROOT_DIR; ?>content-standards.php">Content Standards</option>
                                        <option value="<?php echo ROOT_DIR; ?>suspension-and-termination.php">Suspension & Termination</option>
                                        <option value="<?php echo ROOT_DIR; ?>learner-code-of-conduct.php" selected="selected">Learner code of conduct</option>
                                        <option value="<?php echo ROOT_DIR; ?>terms.php">Terms and conditions</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="terms-content">
                        <div class="wpb_wrapper">
                           <p>Students are expected to conduct themselves at all times in a manner which demonstrates respect for the School her staffs, fellow students and property (whether tangible or intangible), and in adherence to these terms. </p>
                           <p>Breaches of the Student Code of Conduct and individual programme regulations can amount to gross misconduct, and can lead to expulsion from study, and forfeiture of all fees.</p>
                           <p>The School reserves the right to dismiss any student at any time for non-payment of fees or lack of attendance. No fees will be refunded to any student dismissed under this section.</p>
                           <p>By using this Website and the Online Content and Courses, you confirm that you have read, agree and are in compliance with these Terms and the Policies (each as amended from time to time). Use of the Website and access to the Online Content and Courses by anyone under the age of 13 is strictly prohibited.</p>
                           <p>Your use of and access to this Website and the Online Content and Courses are subject to the following conditions (“Acceptable Use Conditions”), and you agree that failure to comply with any one of the Acceptable Use Conditions will constitute a breach of these Terms. The Acceptable Use Conditions are as follows:</p>
                           <ul>
                               <li>You agree to use the Website and access the Online Content and Courses only for lawful purposes and your use of the Website and Online Content and Courses is in no way unlawful or fraudulent, and does not have the intention or effect of damaging us or our Institutional Partners either in reputation or financially;</li>
                               <li>You agree not to use or access the Website or the Online Content and Courses for the purpose of harming or attempting to harm minors in any way;</li>
                               <li>You agree not to distribute all or any part of the Website or Online Content and Courses in any medium without our prior written consent, unless such distribution is offered through the functionality of the Website and permitted by these Terms.</li>
                               <li>You agree not to alter or modify any part of the Website or the Online Content and Courses;</li>
                               <li>You agree not to access the Website or Online Content and Courses through any technology other than the software provided by us or enabled via API’s or other generally available third-party web browsers such as Chrome, Fire Fox, Safari or Internet Explorer;</li>
                               <li>You agree not to (and will not attempt to) circumvent, disable or otherwise interfere with any security related features of the Website or any features that (i) prevent or restrict use or copying of content or (ii) enforce any limitations on you, the use of the Website or access to the Online Content and Courses;</li>
                               <li>You agree not to knowingly transmit any data or send or submit any content that contains viruses, Trojan horses, worms, time-bombs, key-stroke loggers, spyware, adware or any other harmful programs or similar computer code designed to adversely affect the operation of any computer software or hardware;</li>
                               <li>You agree not to use or access the Website or Online Content and Courses for any commercial uses or for the benefit of any third party, including but not limited to:
                                   <ul>
                                       <li>The sale of access to the Online Content and Courses or any associated content;</li>
                                       <li>The solicitation of business in the course of trade or in connection with a commercial enterprise; and</li>
                                       <li>The solicitation of any Visitors or Learners of the Website with respect to their content for commercial purposes;</li>
                                   </ul>
                               </li>
                                <li>You agree to use the Website and access the Online Content and Courses in a way which does not infringe the rights of third parties or restrict or prevent anyone else’s use and enjoyment of the Website, Online Content and Courses;</li>
                                <li>You agree not to ask for, collect or harvest any personal data of any Visitor or Learner of the Website or Online Content and Courses;</li>
                                <li>You agree not to post, upload, email or otherwise transmit to or otherwise cause us to email, transmit or otherwise distribute chain letters, surveys or studies, calls to action, junk mail, pyramid schemes, incentives (monetary or click-based), spamming, or bulk communications of any kind, whether or not for commercial or non-commercial purposes;</li>
                                <li>You will not copy, reproduce, create derivative works of, distribute, transmit, broadcast, display, sell, license, or otherwise exploit any content contained on the Website (including without limitation the Online Content and Courses) for any other purpose other than as permitted by these Terms without our prior written consent;</li>
                                <li>You agree not to use the Website or the Online Content and Courses in any manner intended to damage, disable, overburden or impair any MSBM server or the network(s) connected to any MSBM server, or infringe any requirements, procedures, policies or regulations of any servers or networks connected to the Website;</li>
                                <li>You agree not to use any high volume, automated, or electronic means to access the Website or the Online Content and Courses (including without limitation robots, spiders or scripts);</li>
                                <li>You agree not to frame the Website or the Online Content and Courses, place pop-up windows over its pages, or otherwise affect the display of its pages;</li>
                                <li>You agree not to access or attempt to access any other Visitor or Learner’s account or falsely state, impersonate, or otherwise misrepresent your identity, including but not limited misrepresenting your affiliations with a person or entity, past or present;</li>
                                <li>You agree not to force headers or otherwise manipulate identifiers in order to disguise the origin of any communication transmitted through the Website; and</li>
                                <li>You agree not to send, knowingly receive, submit, download, use or re-use any material which does not comply with these Terms and the Policies).</li>
                           </ul>

                           <p>You agree to comply with these Terms in relation to any Learner Content (as defined below) provided by you in connection with the Online Content and Courses and in connection with the ability to post messages (as further detailed in the paragraphs below).</p>
                           <p>We grant the operators of public search engines permission to use spiders to copy materials from the site for the sole purpose of creating publicly available searchable indices of the materials, but not caches or archives of such materials. We reserve the right to revoke these exceptions, either generally or in specific cases.</p>
                           <p>You acknowledge and agree that the form and nature of the Website and Online Content and Courses which we provide may change from time to time without prior notice to you.</p>
                           <p>Whilst we do all we can to ensure that the Online Content and Courses are of a high standard, you understand and acknowledge that, in using the Website and Online Content and Courses, you may be exposed to content from our Partner Institutions that is factually inaccurate, offensive if taken out of context, indecent to certain people, or otherwise objectionable to you. We are not responsible (legally or otherwise) for any claims you may have against us in relation to this type of content.</p>
                           <p>You acknowledge and agree that we may stop (permanently or temporarily) providing the Website, Online Content and Courses (or any part of the Online Content and Courses) to you or to Learners generally for whatever reason, at our sole discretion, without prior notice to you.</p>
                           <p>You agree that you are solely responsible for (and that we have no responsibility to you or to any third party for) any breach of your obligations under the Terms and for the consequences of that breach (including, but not limited to, any loss or damage which you or any third party may suffer).</p>
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