<?php include_once('../components/config.php'); ?>
<?php include_once('../components/header.php'); ?>
<div class="main-content">
    <div class="login-msbm about-row">
        <div class="container">
            <h3 class="text-center sign-in-heading">MSBM Staff Portal</h3>

            <div class="row">
                <div class="col-md-5 mx-auto">
                    <form>
                        <div class="form-group">

                            <input type="email" class="form-control" placeholder="Email Address">

                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="Check1">
                                        <label class="form-check-label" for="Check1">Remember Me</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <span class="login-link"><a href="#" class="float-right">Forgot Password?</a></span>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-dark btn-block">Login</button>
                    </form>
                    <p class='non-msbm'>This is a restricted area for Non MSBM staff. Kindly close this page if you have navigated here in error. Thank you</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('../components/footer.php'); ?>