<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class="main-content">
    <div class="checkout">
        <div class="container">
            <div class="checkout-spacing text-center">
                <h2 class="make-bold">Checkout form</h2>
            </div>
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="row">
                        <div class="col-md-4 order-md-2 mb-4">
                            <div class="pos-sticky-top summary-checkout-sect bg-light">
                                <h4 class="d-flex justify-content-between align-items-center pt-3 mx-3">
                                    <span class="text-muted make-bold">Payment summary</span>
                                </h4>
                                <ul class="list-group mb-3 list-group-flush summary-list-view">
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
                            <div class="checkout-1-container">
                                <div class="card processing-card-sect">
                                    <div class="card-header bg-darkk text-white">
                                        Select Your Payment Option
                                    </div>
                                    <div class="card-body">
                                        <div class="pp-disclaimer">
                                            <div class="card border-dark mb-3 payment-summary">
                                                <div class="card-header">
                                                    <strong>Payment Summary</strong>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text">You will be charged in <strong>GBP</strong>.</p>
                                                    <h2><strong>GBP 56,215.70</strong></h2>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="<?php echo ROOT_DIR; ?>images/icons/payment-logos.svg" class="img-fluid mb-3" alt="...">
                                        <form>
                                            <div class="form-group">
                                                <button type="submit" name="submit" value="Checkout" class="btn btn-outline-dark btn-lg btn-block init_checkout click_wait">Pay with <strong>2Checkout</strong> <span>(Credit/Debit Card)</span></button>
                                            </div>
                                        </form>
                                        <div class="form-group">
                                            <a href="https://msbm.org.uk/enrol/professional-certificate-in-operations-quality-improvement?gateway=paytabs" class="btn btn-outline-dark btn-lg btn-block init_checkout">Pay with <strong>PayTabs</strong> (Credit or Debit Card)</a>
                                        </div>
                                        <form>
                                            <div class="form-group">
                                                <button class="btn btn-darker btn-lg btn-block"><img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjRweCIgaGVpZ2h0PSIxOHB4IiB2aWV3Qm94PSIwIDAgMjQgMTgiIHhtbG5zPSJodHRwOiYjeDJGOyYjeDJGO3d3dy53My5vcmcmI3gyRjsyMDAwJiN4MkY7c3ZnIj48ZyBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMy4wMDAwMDAsIC02LjAwMDAwMCkiIGZpbGw9IiNmZmZmZmYiIGZpbGwtcnVsZT0ibm9uemVybyI+PHBhdGggZD0iTTguMjc1MjEzMzgsMTIuNTEyMjY1MyBDNy45MzAwMzU0MiwxMi41MTIyNjUzIDcuNjUwMjEzMzgsMTIuMjMyNDQzMiA3LjY1MDIxMzM4LDExLjg4NzI2NTMgQzcuNjUwMjEzMzgsMTEuNTQyMDg3MyA3LjkzMDAzNTQyLDExLjI2MjI2NTMgOC4yNzUyMTMzOCwxMS4yNjIyNjUzIEwyNC43ODc5MDQyLDExLjI2MjI2NTMgQzI1LjU5NTU5MzksMTEuMjYyMjY1MyAyNi4yNSwxMS45MTc1OTA1IDI2LjI1LDEyLjcyNTUzNjggTDI2LjI1LDIyLjI4NjcyODQgQzI2LjI1LDIzLjA5NDY3NDggMjUuNTk1NTkzOSwyMy43NSAyNC43ODc5MDQyLDIzLjc1IEw1LjIxMjMxMzAyLDIzLjc1IEM0LjQwNDYyMzI1LDIzLjc1IDMuNzUsMjMuMDk0Njc0OCAzLjc1LDIyLjI4NjczOTcgTDMuNzUsNy43MTMyNzE1MiBDMy43NSw2LjkwNTMyNTE4IDQuNDA0NDA2MDgsNi4yNSA1LjIxMjI3MjEyLDYuMjUgTDI0Ljc4ODA2NjQsNi4yNTU1MjE2MyBDMjUuNTk1NjA3OSw2LjI1NTczMTQ3IDI2LjI1LDYuOTEwOTk1MDcgMjYuMjUsNy43MTg3MDM2MiBMMjYuMjUsOS4yMzU3NzE2MSBDMjYuMjUsOS41ODA5NDk1OCAyNS45NzAyNjc1LDkuODYwODExNjggMjUuNjI1MDg5NSw5Ljg2MDg2MTEyIEMyNS4yNzk5MTE1LDkuODYwOTEwNTUgMjUuMDAwMDQ5NCw5LjU4MTEyODYgMjUsOS4yMzU5NTA2MyBMMjQuOTk5NzgyNyw3LjcxODc5MzEzIEMyNC45OTk3ODI3LDcuNjAwODMxODkgMjQuOTA0NjYxMSw3LjUwNTU1MTk3IDI0Ljc4NzcyNzgsNy41MDU1MjE1OCBMNS4yMTIwOTU4Myw3LjQ5OTk5OTk4IEM1LjA5NTE1NTA2LDcuNDk5OTk5OTggNSw3LjU5NTI4ODY4IDUsNy43MTMyNjAyOCBMNS4wMDAyMTcxOCwyMi4yODY3Mjg0IEM1LjAwMDIxNzE4LDIyLjQwNDcxMTMgNS4wOTUzNzIyMywyMi41IDUuMjEyMzEzMDIsMjIuNSBMMjQuNzg3OTA0MiwyMi41IEMyNC45MDQ4NDUsMjIuNSAyNSwyMi40MDQ3MTEzIDI1LDIyLjI4NjcyODQgTDI1LDEyLjcyNTUzNjggQzI1LDEyLjYwNzU1NCAyNC45MDQ4NDQ5LDEyLjUxMjI2NTMgMjQuNzg3OTA0MiwxMi41MTIyNjUzIEw4LjI3NTIxMzM4LDEyLjUxMjI2NTMgWiIgaWQ9IlN0cm9rZS0xIj48L3BhdGg+PC9nPjwvZz48L3N2Zz4=" alt="" class="paypal-logo-card paypal-logo-card-"> Debit or Credit Card</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <p class="text-center">By signing up for our courses, you agree to our <a href="https://msbm.org.uk/terms/study-contract" target="_blank"><strong>Terms and Conditions</strong></a>.</p>
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