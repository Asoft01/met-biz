<?php include_once('components/config.php'); ?>
<?php include_once('components/header2.php'); ?>

<div class="main-content">
    <div class="checkout">
        <div class="container">
            <div class="checkout-spacing text-center">
                <h2 class="make-bold">Checkout form</h2>
            </div>
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <p>Returning customer? <a href="" class="text-dark">Click here to login</a></p>
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <div class="pos-sticky-top summary-checkout-sect">
                                <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Payment summary</span>
                                </h4>
                                <ul class="list-group mb-3 list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                        <div>
                                            <h6 class="my-1">Professional Certificate in Organizational Value Creation through Leadership</h6>
                                            <div class=" d-flex justify-content-between align-items-center">
                                                <span class="text-muted mb-0 make-bold">NGN 10,000,000</span>
                                                <small class="text-muted">Includes VAT</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                            <h6 class="my-1">Professional Certificate in Organizational Value Creation through Leadership</h6>
                                            <div class=" d-flex justify-content-between align-items-center">
                                                <span class="text-muted mb-0 make-bold">NGN 10,000,000</span>
                                                <small class="text-muted">Includes VAT</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                            <h6 class="my-1">Professional Certificate in Organizational Value Creation through Leadership</h6>
                                            <div class=" d-flex justify-content-between align-items-center">
                                                <span class="text-muted mb-0 make-bold">NGN 10,000,000</span>
                                                <small class="text-muted">Includes VAT</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Total (NGN)</span>
                                        <strong>NGN 30,000,000.00</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 order-md-1">
                        <h4 class="mb-3 make-bold">Billing address</h4>
                        <form class="needs-validation" novalidate="">
                            <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                            </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                            </div>

                            <div class="row">
                                <div class="col-md-7 mb-3">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="col-md-5 mb-3">
                                    <label for="gender">Gener</label>
                                   <select class="custom-select d-block w-100" id="highest" required="">
                                        <option value="">Choose...</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="country">Country</label>
                                    <select class="custom-select d-block w-100" id="country" required="">
                                        <option value="">Choose...</option>
                                        <option>United States</option>
                                    </select>

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="highest">Highest Level of Education</label>
                                    <select class="custom-select d-block w-100" id="highest" required="">
                                        <option value="">Choose...</option>
                                        <option>Masters</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                    <label for="position">Position</label>
                                    <input type="text" class="form-control" id="position" placeholder="" required="">
                                </div>

                            <div class="mb-3">
                                <label for="address">Company</label>
                                <input type="text" class="form-control" id="address" placeholder="" required="">
                            </div>

                             <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="confirm">Confirm Password</label>
                                    <input type="password" class="form-control" />
                                </div>
                            </div>

                            <hr class="mb-4">
                            <button class="btn btn-danger btn-lg btn-block" type="submit">Place Order</button>
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