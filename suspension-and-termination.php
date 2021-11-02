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
                    <h3>Suspension and Termination</h3>
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
                                        <option value="<?php echo ROOT_DIR; ?>suspension-and-termination.php" selected="selected">Suspension & Termination</option>
                                        <option value="<?php echo ROOT_DIR; ?>learner-code-of-conduct.php">Learner code of conduct</option>
                                        <option value="<?php echo ROOT_DIR; ?>terms.php">Terms and conditions</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="terms-content">
                        <div class="wpb_wrapper">
                            <p>We will determine, in our discretion, whether there has been a breach of this acceptable use policy through your use of our site. </p>
                            <p>When a breach of this policy has occurred, we may take such action as we deem appropriate. Failure to comply with this acceptable use policy constitutes a material breach of the terms of use upon which you are permitted to use our site, and may result in our taking all or any of the following actions:</p>
                            <ul>
                                <li>Immediate, temporary or permanent withdrawal of your right to use our site.</li>
                                <li>Immediate, temporary or permanent removal of any posting or material uploaded by you to our site.</li>
                                <li>Issue of a warning to you.</li>
                                <li>Legal proceedings against you for reimbursement of all costs on an indemnity basis (including, but not limited to, reasonable administrative and legal costs) resulting from the breach.</li>
                                <li>Further legal action against you.</li>
                                <li>Disclosure of such information to law enforcement authorities as we reasonably feel is necessary.</li>
                            </ul>
                            <p>We exclude liability for actions taken in response to breaches of this acceptable use policy. The responses described in this policy are not limited, and we may take any other action we reasonably deem appropriate.</p>
                            <h4>Changes to Our Acceptable Use Policy</h4>
                            <p>We may revise this acceptable use policy at any time by amending this page. You are expected to check this page from time to time to take notice of any changes we make, as they are legally binding on you. Some of the provisions contained in this acceptable use policy may also be superseded by provisions or notices published elsewhere on our site.</p>
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