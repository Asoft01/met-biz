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
                            Select Your Payment Option
                        </div>
                        <div class="card-body">
                            <img src="<?php echo ROOT_DIR; ?>images/icons/payment-logos.svg" class="img-fluid mb-3" alt="...">
                            <form>
                                <div class="form-group">
                                    <button class="btn btn-outline-dark btn-lg btn-block">Credit</button>
                                </div>
                            </form>
                            <form>
                                <div class="form-group">
                                    <button class="btn btn-outline-dark btn-lg btn-block">Dedit</button>
                                </div>
                            </form>
                            <form>
                                <div class="form-group">
                                    <button class="btn btn-outline-dark btn-lg btn-block">Paypal</button>
                                </div>
                            </form>
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