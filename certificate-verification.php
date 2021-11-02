<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/banners/certificate.jpg);">
    <div class='overlay'></div>
    <div class="container">
        <div class="overlay-text">
            <h1>Certificate Verification</h1>
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
    <div class="certificate-verification">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto worldwide-cols mb-2">
                    <h3>Kindly enter your details</h3>
                    <br />
                    <div class="steps-button">
                        <!-- <div class="row mb-4">
                            <div class="col-4">
                                <button class="btn btn-dark btn-block">Step 1</button>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-secondary btn-block">Step 2</button>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-secondary btn-block">Step 3</button>
                            </div>
                        </div> -->

                        <div class="card verification-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <form>
                                            <div class="form-group">
                                                <select class="form-control form-control-lg">
                                                    <option value="" disabled selected hidden>Title</option>
                                                    <option>Mr</option>
                                                    <option>Mrs</option>
                                                    <option>Miss</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" name="firstname" placeholder="First Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" name="lastname" placeholder="Last Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-lg" name="email" placeholder="Email Address">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" name="phone" placeholder="Phone Number">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" name="company" placeholder="Company">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" name="position" placeholder="position">
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">I agree to the Terms and Conditions (<a href="">Read More</a>)</label>
                                            </div>
                                            <p>A link with be sent to your email address submitted to verify your certificate</p>
                                            <div class="form-group">
                                                <button class="btn btn-dark btn-block">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="demanding-course">
                        <div class="find course-list-msbm">
                            <div class="certificate-verify-section">
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