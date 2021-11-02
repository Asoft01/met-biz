<?php include "components/config.php"; ?>
<?php include "components/doctype.inc.php"; ?>
</head>

<body>
    <div class="main-content">
        <div class="login-sect pt-4 pb-5">
            <div class="container">
                <div class="row login-row">
                    <div class="col-lg-5 mx-auto login-col">
                        <p class="text-center"><img src="<?php echo ROOT_DIR; ?>images/logo.png" /></p>
                        <div class="card login-card">
                            <div class="card-body login-card-body">
                                <form>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="text" class="form-control form-adjust-field" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control form-adjust-field" placeholder="Password" />
                                    </div>
                                    <div class="form-group">
                                        <a href="#" class="btn btn-linear-blue btn-lg btn-block">Login</a>
                                    </div>
                                </form>
                                <p class="text-center">OR</p>
                                <div class="login-social-links">
                                    <a href="#">
                                        <div class="card card-body login-social-card mb-3">
                                            <div class="login-flex">
                                                <img src="<?php echo ROOT_DIR; ?>images/google.png" class="img-fluid img-login-icon"> <span>Sign in with Google</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="card card-body login-social-card mb-3">
                                            <div class="login-flex">
                                                <img src="<?php echo ROOT_DIR; ?>images/facebook.png" class="img-fluid img-login-icon"> <span>Sign in with Facebook</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <p class="text-center"><a href="#" class="forgotten-password">Forgotten Password?</a></p>
                                <p class="text-center"> <a href="<?php echo ROOT_DIR; ?>" class="forgotten-password">Back to Homepage</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "components/footer.inc.php"; ?>
</body>

</html>