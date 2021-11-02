<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/banners/checkout.jpg);">
    <div class='overlay'></div>
    <div class="container">
        <div class="overlay-text">
            <h1>Checkout</h1>
        </div>
    </div>
</div>

<div class="main-content">
    <div class="payment-sect">
        <div class="container">
            <div class='row '>
                <div class='col-lg-8 mx-auto worldwide-cols'>
                    <div class="card processing-card-sect">
                        <div class="card-header bg-darkk text-white">
                            Sign Up
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control form-control-lg" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="password" class="form-control form-control-lg" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control form-control-lg" placeholder="Email">
                                        <small id="emailHelp" class="form-text text-muted">Kindly check your email as you will be asked to verify your email.</small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control form-control-lg" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option selected hidden disabled>Country</option>
                                        <option>UAE</option>
                                        <option>USA</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <select class="form-control">
                                            <option selected hidden disabled>Highest Level of Education</option>
                                            <option>BSc</option>
                                            <option>Masters</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="number" class="form-control form-control-lg" placeholder="Years of experience" min="1">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <select class="form-control">
                                            <option selected hidden disabled>Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control form-control-lg" placeholder="Position">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Company">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="password" class="form-control form-control-lg" placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="password" class="form-control form-control-lg" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark btn-lg btn-block">Sign Up</button>
                            </form>
                            <p class="text-center mt-3">By signing up, you agree to our <a href="">Terms and Conditions</a> and our <a href="">Privacy Policy</a></p>
                            <p class="text-center mt-3">Already a student? <a href="">Sign In</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="demanding-course">
                        <div class="find course-list-msbm">
                            <div class="container">
                                <div class="row myflexx">
                                    <div class="col-md-12 col-12 col-lg-12 col-xl-12 card">
                                        <h4 class="about-content-heading">Your Selected Course</h4>
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