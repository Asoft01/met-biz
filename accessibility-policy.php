<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/banners/terms.jpg);">
    <div class='overlay'></div>
    <div class="container">
        <div class="overlay-text">
            <h1>Accessibility Policy</h1>
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
                                        <option value="<?php echo ROOT_DIR; ?>admission-policy.php">Admission Policy</option>
                                        <option value="<?php echo ROOT_DIR; ?>privacy-policy.php">Privacy Policy</option>
                                        <option value="<?php echo ROOT_DIR; ?>accessibility-policy.php" selected="selected">Accessibility Policy</option>
                                        <option value="<?php echo ROOT_DIR; ?>refund-policy.php">Refund Policy</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="terms-content">
                        <h5 class="terms-content-heading">Accessibility Policy</h5>
                        <div class="wpb_wrapper">
                            <p>Welcome to msbm.org.uk</p>
                            <p>We are committed to making MSBM website accessible to as many different people as possible. We want everyone to enjoy the benefits of good clear communication. We are committed to helping improve accessibility by doing everything we can to make our services easier to use.</p>
                            <p>We have designed msbm.org.uk, our corporate website, to be informative and accessible to a wide range of users. We hope you find the content about the MSBM easy to find and useful. If you have any comments or suggestions regarding this website, please let us know by emailing: info@msbm.org.uk</p>
                        </div>
                    </div>
                    <div class="terms-content">
                        <h5 class="terms-content-heading">Help with navigating our website</h5>
                        <div class="wpb_wrapper">
                            <p>All pages contain a link to the home page by clicking on the Metropolitan School Business and Management logo and all pages include a search box. Breadcrumbs underneath the University sentence navigation should help users retrace their steps through the site.</p>
                        </div>
                    </div>
                    <div class="terms-content">
                        <h5 class="terms-content-heading">Improving accessibility</h5>
                        <div class="wpb_wrapper">
                            <p>As part of our commitment to continuously improve the level of accessibility within our website, we have recently re-designed all aspects of the site. It’s hoped that the design, navigation and functionality will be available and inclusive for all user groups regardless of their location, internet experience, and type of technology used.</p>
                            <p>The website has been developed in line with the priority levels of the Web Accessibility Initiative (WAI) guidelines, part of the World Wide Web Consortium (W3C).</p>
                            <p>This section outlines some of the accessibility features that we have provided for users and guidance on how to use them. Please refer to your web browser and operating system ‘Help’ for their additional accessibility features.</p>
                        </div>
                    </div>
                    <div class="terms-content">
                        <h5 class="terms-content-heading">Design</h5>
                        <div class="wpb_wrapper">
                            <p>The MSBM website has been optimised to be viewed at a minimum screen resolution of 1024 x 768 within the following browsers or, their corresponding higher version numbers:</p>
                            <p>Internet Explorer 5.5</p>
                            <p>Netscape Communicator 7.2</p>
                            <p>Firefox 1.0</p>
                            <p>Opera 8.0</p>
                            <p>Safari 2.0</p>
                            <p>The colour combinations have been checked to ensure appropriate colour contrast and colour difference. The pages are not based on frames and can therefore be printed easily.</p>
                            <p>The text within the content pages has been set to relative sizes, which can be increased or decreased for more comfortable screen reading.</p>
                            <p>Text equivalents have been provided for every non-text element, ALT tags provided for all images and long descriptions for charts and graphs. Page and table header tags have also been included.</p>
                        </div>
                    </div>
                    <div class="terms-content">
                        <h5 class="terms-content-heading">Access Keys</h5>
                        <div class="wpb_wrapper">
                            <p>Access keys allow users to navigate around the most frequently used areas of www.msbm.org.uk without using the mouse. To use the Access key on a PC, hold down the Alt key and press the appropriate number, then Enter/Return. To be reminded of our Access keys, press Alt 8 and Return from any page in the site to display a full list. Access key functionality on a Mac system is triggered by pressing ctrl + ‘h’.</p>
                        </div>
                    </div>
                    <div class="terms-content">
                        <h5 class="terms-content-heading">Alternative formats</h5>
                        <div class="wpb_wrapper">
                            <p>In order to make our website fully accessible, we provide our information in a number of alternative formats. However, the website does include a number of PDF files, which we are unable to re-produce in alternative formats.</p>
                            <p>We recommend that users download the latest version of Adobe Acrobat to view Adobe PDF files at: www.adobe.com Adobe Acrobat 5.0 and 6.0 software provides a number of capabilities that improve access for users. For further information about Adobe’s PDF accessibility, please visit: access.adobe.com</p>
                            <p>We encourage any users, experiencing problems with our site to email us at: feedback@msbm.org.uk. We will work to solve any issues as a priority and where possible, will respond to individual requests for information in alternative formats.</p>
                        </div>
                    </div>
                    <div class="terms-content">
                        <h5 class="terms-content-heading">Fonts</h5>
                        <div class="wpb_wrapper">
                            <p>All text sizes within the content pages and navigation have been set to relative sizes, which can be increased or decreased for more comfortable screen reading. Colours can be changed by users for improved readability. These can be altered in your Web browser.</p>
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