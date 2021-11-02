<?php include_once('../components/config.php'); ?>
<?php include "../components/head.inc.php"; ?>


<body>

<?php include "../components/interactive-nav.inc.php"; ?>

<div class="main-content">
    <div class="interactive-view-sect h-100 py-5 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="interactive-question-container text-center">
                        <img src="<?php echo ROOT_DIR; ?>images/banners/checked.png" class="img-fluid mb-3" width="100" />
                        <h3 class="mt-0 mb-2 make-bold text-info">Thank you!</h3>
                        <p class="">You have successfully completed your interactive session. Would you like to try again on another session?</p>
                        <a href="<?php echo ROOT_DIR; ?>student/interactive-1.php" class="btn btn-purple btn-block">Start another interactive session</a>
                        <a href="#" class="btn btn-dark btn-block">Back to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <div class="bottom-footer bg-white shadow pt-3 pb-3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-2 col-6 mb-1">
                <a href="<?php echo ROOT_DIR; ?>student/interactive-8.php" class="btn btn-dark btn-block text-uppercase btn-sm make-bold border-secondary lt-2 btn-bord-radius"><i class="fa fa-chevron-left"></i> <span class="">Previous</span></a>
            </div>
            <div class="col-lg-8 d-none d-lg-inline-block d-xl-inline-block mb-1">

            </div>
            <div class="col-lg-2 col-6 mb-1">
                <div class="d-none d-lg-block d-xl-block">
                    <?php include "../components/interactive-success.inc.php"; ?>
                </div>
                <a href="<?php echo ROOT_DIR; ?>student/interactive-10.php" class="btn btn-purple btn-block text-uppercase btn-sm make-bold border-white lt-2 btn-bord-radius">Next <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div> -->



<?php include_once('../components/javascript.inc.php'); ?>