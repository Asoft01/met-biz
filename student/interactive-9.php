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
                        <p class="question-text-interactive">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quia sed mollitia, architecto. Iure tempora omnis sequi sunt mollitia. Dicta quam, doloribus velit harum aperiam vero magnam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id dolorem suscipit impedit, iure non temporibus numquam eaque unde cum praesentium ipsum libero quas doloribus maiores, minus neque. Quaerat, itaque eligendi.</p>
                        <div class="flip-card-sect my-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 mx-auto">
                                        <div class="flip-card-view">

                                            <div class="card flip-card-card py-5 d-flex justify-content-center align-items-center h-100 shadow z-index-99">
                                                <div class="card-body">
                                                    <p class="question-text-interactive">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nam laudantium, modi tenetur esse excepturi fugiat eligendi iste at nemo, adipisci enim molestias assumenda autem commodi cum aspernatur quisquam neque?
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card flip-card-card flip-card-card-bottom py-5 d-flex justify-content-center align-items-center h-100 shadow">
                                                <div class="card-body">
                                                    <p class="question-text-interactive">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et optio possimus aspernatur consectetur vel minima.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="question-interactive-options text-center">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="card card-height btn-bord-radius card-option-view cursor-pointer" id="wrongAnswerRotate">
                                        <div class="card-body">
                                            Information Technology
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="card card-height btn-bord-radius card-option-view cursor-pointer" id="rightAnswerRotate">
                                        <div class="card-body">
                                            Remote Working is Key
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="question-interactive-options text-center">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <div class="card card-height btn-bord-radius card-option-view cursor-pointer">
                                    <div class="card-body">
                                        Information Technology
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="card card-height bg-warning text-white btn-bord-radius card-option-view cursor-pointer">
                                    <div class="card-body">
                                        Remote Working is Key
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="d-block d-xl-none d-lg-none">
        <?php include "../components/interactive-success.inc.php"; ?>
    </div>
</div>

<!-- <div class="bottom-footer bg-white shadow pt-3 pb-3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-2 col-6 mb-1">
                <a href="<?php echo ROOT_DIR; ?>student/interactive-5.php" class="btn btn-dark btn-block text-uppercase btn-sm make-bold border-secondary lt-2 disabled btn-bord-radius"><i class="fa fa-chevron-left"></i> <span class="">Previous</span></a>
            </div>
            <div class="col-lg-8 d-none d-lg-inline-block d-xl-inline-block mb-1">

            </div>
            <div class="col-lg-2 col-6 mb-1">
                <div class="d-none d-lg-block d-xl-block">
                    <?php include "../components/interactive-failed.inc.php"; ?>
                </div>
                <a href="<?php echo ROOT_DIR; ?>student/interactive-7.php" class="btn btn-purple btn-block text-uppercase btn-sm make-bold border-white lt-2 btn-bord-radius">Next <i class="fa fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div> -->

<div class="bottom-footer bg-white shadow pt-3 pb-3">
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
</div>



<?php include_once('../components/javascript.inc.php'); ?>