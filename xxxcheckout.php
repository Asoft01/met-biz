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
    <div class="checkout">
        <div class="container">
            <div class="checkout-spacing text-center">
                <h2>Checkout form</h2>
            </div>
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Payment summary</span>
                            </h4>
                            <ul class="list-group mb-3 list-group-flush">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Fundamentals of Project Planning and Management</h6>
                                        <small class="text-muted">Business Management</small>
                                    </div>
                                    <span class="text-muted">&pound;12</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">An Introduction to Organisational Behaviour: How to Understand Your People</h6>
                                        <small class="text-muted">Business Management</small>
                                    </div>
                                    <span class="text-muted">&pound;8</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Artificial Intelligence: Distinguishing Between Fact and Fiction</h6>
                                        <small class="text-muted">Technology</small>
                                    </div>
                                    <span class="text-muted">&pound;5</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Total (GBP)</span>
                                    <strong>&pound;25</strong>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8 order-md-1">
                            <h4 class="mb-3">Billing address</h4>
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="firstName" value="" placeholder="First Name" required>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="" required>
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                                    <div class="invalid-feedback">
                                        Please enter your shipping address.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                </div>
                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <select class="custom-select d-block w-100" id="country" required>
                                            <option disabled selected hidden>Choose...</option>
                                            <option>United States</option>
                                            <option>United Kingdom</option>
                                            <option>United Arab Enirates</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <select class="custom-select d-block w-100" id="state" required>
                                            <option disabled selected hidden>Choose...</option>
                                            <option>California</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <input type="text" class="form-control" id="zip" placeholder="Zip code" required>
                                        <div class="invalid-feedback">
                                            Zip code required.
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-3">Payment</h4>
                                <div class="d-block my-3">
                                    <div class="custom-control custom-radio">
                                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                        <label class="custom-control-label" for="credit">Credit card</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                        <label class="custom-control-label" for="debit">Debit card</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                        <label class="custom-control-label" for="paypal">PayPal</label>
                                    </div>
                                </div>
                                <button class="btn btn-dark btn-lg btn-block" type="submit">Proceed</button>
                            </form>
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