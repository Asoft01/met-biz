<?php include_once('../components/config.php'); ?>
<?php include "../components/head.inc.php"; ?>


<body>

<?php include "../components/interactive-nav.inc.php"; ?>

<div class="main-content">
    <div class="interactive-view-sect h-100 py-5 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="interactive-question-container text-center">
                        <h3 class="mt-0 mb-2 make-bold">Professional Certificate in Information Systems Procurement Options Analysis            </h3>
                        <p class="text-center text-muted">Lesson 1 of 10</p>
                        <div class="question-interactive-img img-holder-lg mb-3">
                            <img src="<?php echo ROOT_DIR; ?>images/banners/landing-uae.jpg" class="img-fluid ob-fit-cover card-height bord-radius-10">
                        </div>
                        <p class="question-text-interactive">The Professional Certificate in Information Systems Procurement Options Analysis aims to enable the learner with fundamental concepts of analyzing different options to procure the information system. The learner with be equipped with knowledge of different systems and its linkages to the business strategy of the organization.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-block d-xl-none d-lg-none">
        <?php include "../components/interactive-success.inc.php"; ?>
    </div>
</div>

<div class="bottom-footer bg-white shadow pt-3 pb-3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-2 col-6 mb-1">
                <a href="<?php echo ROOT_DIR; ?>student/interactive-2.php" class="btn btn-dark btn-block text-uppercase btn-sm make-bold border-secondary lt-2 disabled btn-bord-radius"><i class="fa fa-chevron-left"></i> <span class="">Previous</span></a>
            </div>
            <div class="col-lg-8 d-none d-lg-inline-block d-xl-inline-block mb-1">

            </div>
            <div class="col-lg-2 col-6 mb-1">
                <div class="d-none d-lg-block d-xl-block">
                    <?php include "../components/interactive-success.inc.php"; ?>
                </div>
                <a href="<?php echo ROOT_DIR; ?>student/interactive-4.php" class="btn btn-purple btn-block text-uppercase btn-sm make-bold border-white lt-2 btn-bord-radius">Next <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>



<?php include_once('../components/javascript.inc.php'); ?>