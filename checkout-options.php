<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/banners/checkout-options.jpg);">
    <div class='overlay'></div>
    <div class="container">
        <div class="overlay-text">
            <h1>Checkout</h1>
        </div>
    </div>
</div>

<div class="main-content">
    <div class="checkout-1">
        <div class="container">
            <div class='row '>
                <div class='col-md-12 mx-auto'>
                    <div class="row flex-column-reverse flex-lg-row">
                        <div class="col-lg-4">
                            <div class="find course-list-msbm">
                                <div class="checkout-option-section">
                                    <div class="row myflexx">
                                        <div class="col-md-12 col-12 col-lg-12 col-xl-12 card">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 mb-2">
                            <div class="checkout-1-container">
                                <h3 class="summary-heading">Summary Page</h3>
                                <table class="table table-striped table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Details</th>
                                            <th scope="col">Fee</th>
                                            <th scope="col">Add</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" checked>
                                                </div>
                                            </th>
                                            <td>Programme</td>
                                            <td>&pound; 0.00</td>
                                            <td>&pound; 0.00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                </div>
                                            </th>
                                            <td>E-Certified</td>
                                            <td>&pound; 30.00</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                </div>
                                            </th>
                                            <td>Printed Copy + Postage</td>
                                            <td>&pound; 55.00</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                            </th>
                                            <td></td>
                                            <td>Total</td>
                                            <td>&pound; 55.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p>Once you have completed your enrolment, you will receive an email confirmation which will also include login details to your dashboard, where you can view all your course material, monitor your progress and work.</p>
                                <div class="checkout-1-btn">
                                    <button class="btn btn-dark">Checkout</button>
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