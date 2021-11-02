<nav class="navbar navbar-expand-lg navbar-dark bg-blue navbar-border">
    <div class="container">
        <a class="navbar-brand" href="<?php echo ROOT_DIR; ?>">
            <img src="<?php echo ROOT_DIR; ?>images/logo.png" class="img-logo" />
        </a>
        <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbar-links">
                <li class="nav-item active navbar-link">
                    <a class="nav-link" href="<?php echo ROOT_DIR; ?>">Home</a>
                </li>
                <li class="nav-item navbar-link">
                    <a class="nav-link" href="<?php echo ROOT_DIR; ?>job-listing.php">Jobs</a>
                </li>
                <li class="nav-item navbar-link">
                    <a class="nav-link" href="#">Courses</a>
                </li>
                <li class="nav-item navbar-link">
                    <a class="nav-link" href="#">Company Directory</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item  navbar-link">
                    <a class="nav-link" href="<?php echo ROOT_DIR; ?>login.php">Sign In</a>
                </li>
                <li class="nav-item navbar-link">
                    <a class="nav-link" href="<?php echo ROOT_DIR; ?>signup.php">Sign Up</a>
                </li>
                <li class="nav-item navbar-link">
                    <a class="nav-link" href="#">For Employer</a>
                </li>
                <li class="nav-item navbar-link">
                    <a class="btn btn-linear-blue" href="#">Post a Job</a>
                </li>
            </ul>
        </div>
    </div>
</nav>