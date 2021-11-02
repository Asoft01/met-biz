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
                    <h3>Links To Our Website</h3>
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
                                        <option value="<?php echo ROOT_DIR; ?>linking-to-our-website.php" selected="selected">Linking to our Website</option>
                                        <option value="<?php echo ROOT_DIR; ?>links-from-our-website.php">Links from our Website</option>
                                        <option value="<?php echo ROOT_DIR; ?>user-concerns.php">User Concerns</option>
                                        <option value="<?php echo ROOT_DIR; ?>acceptable-use-policy.php">Acceptable Use Policy</option>
                                        <option value="<?php echo ROOT_DIR; ?>prohibited-usage.php">Prohibited Usage</option>
                                        <option value="<?php echo ROOT_DIR; ?>content-standards.php">Content Standards</option>
                                        <option value="<?php echo ROOT_DIR; ?>suspension-and-termination.php">Suspension & Termination</option>
                                        <option value="<?php echo ROOT_DIR; ?>learner-code-of-conduct.php">Learner code of conduct</option>
                                        <option value="<?php echo ROOT_DIR; ?>terms.php">Terms and conditions</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="terms-content">
                        <div class="wpb_wrapper">
                            <p>You may link to our home page, provided you do so in a way that is fair and legal and does not damage our reputation or take advantage of it, but you must not establish a link in such a way as to suggest any form of association, approval partnership, or endorsement on our part where none exists.</p>
                            <p>You must not establish a link from any website that is not owned by you.</p>
                            <p>Our site must not be framed on any other site, nor may you create a link to any part of our site other than the home page. </p>
                            <p>We reserve the right to withdraw Links permission without notice. The website from which you are Links must comply in all respects with the content standards set out in our acceptable use policy.</p>
                            <p>If you wish to make any use of material on our site other than that set out above, please address your request to <a href="mailto:technical.support@msbm.org.uk">technical.support@msbm.org.uk</a>.</p>
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