<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-head.php'); ?>

<body>

<?php include "../components/admin-staff-navbar.php"; ?>

<div class="lecture-v-portal">
    <div class="d-flex" id="wrapper">

       <?php include "../components/sidebar-module.inc.php"; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="pb-5">
            <div class="mt-5">
                <div class="container">
                    <div class="my-5">
                        <div class="courses-content-container-view">
                             <div class="upload-course-material">
                                <div class="col-lg-8 mx-auto">
                                    <a href="<?php echo ROOT_DIR; ?>staff/add-component-quiz.php" class="btn btn-success btn-bord-radius">Back to quiz</a>
                                    <div class="quiz-sect quiz-card-view">
                                        <p class="text-muted pt-3">Question 1 of 3</p>
                                        <div class="quiz-question-set">
                                            <h2 class="make-bold mb-0">Question</h2>
                                        </div>

                                        <div class="quiz-opt-sect">
                                            <p class="question-text-view">The unrestricted sharing of data and business processes among any connected applications and data sources in the enterprise is called:<p>

                                            <div class="mt-5 question-quiz-options">
                                                <div class="card mb-2">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-11">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="questionSetRadios" id="questionSetRadios1" value="option1">
                                                                    <label class="form-check-label" for="questionSetRadios1">
                                                                        Default radio
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-lg-1 d-none d-xl-inline-block d-lg-inline-block">
                                                                <i class="fa fa-times-circle fa-lg"></i>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card mb-2">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-11">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="questionSetRadios" id="questionSetRadios2" value="option2">
                                                                    <label class="form-check-label" for="questionSetRadios2">
                                                                        Default radio
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1 d-none d-xl-inline-block d-lg-inline-block">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card mb-2">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-11">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="questionSetRadios" id="questionSetRadios3" value="option3">
                                                                    <label class="form-check-label" for="questionSetRadios3">
                                                                        Default radio
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1 d-none d-xl-inline-block d-lg-inline-block">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card mb-2">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-11">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="questionSetRadios" id="questionSetRadios4" value="option4">
                                                                    <label class="form-check-label" for="questionSetRadios4">
                                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere perferendis accusantium a enim praesentium iure perspiciatis, blanditiis quisquam, ratione qui nesciunt. Optio odit id consectetur adipisci pariatur quod maiores incidunt?
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-lg-1 d-none d-xl-inline-block d-lg-inline-block">
                                                                <i class="fa fa-check-circle fa-lg"></i>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="quiz-sect quiz-card-view">
                                        <p class="text-muted pt-3">Question 2 of 3</p>
                                        <div class="quiz-question-set">
                                            <h2 class="make-bold mb-0">Question</h2>
                                        </div>

                                        <div class="quiz-opt-sect">
                                            <p class="question-text-view">The unrestricted sharing of data and business processes among any connected applications and data sources in the enterprise is called:<p>

                                            <div class="mt-5 question-quiz-options">
                                                <div class="card mb-2">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-11">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="questionSetRadios" id="questionSetRadios1" value="option1">
                                                                    <label class="form-check-label" for="questionSetRadios1">
                                                                        Default radio
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-lg-1 d-none d-xl-inline-block d-lg-inline-block">
                                                                <i class="fa fa-times-circle fa-lg"></i>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card mb-2">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-11">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="questionSetRadios" id="questionSetRadios2" value="option2">
                                                                    <label class="form-check-label" for="questionSetRadios2">
                                                                        Default radio
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1 d-none d-xl-inline-block d-lg-inline-block">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card mb-2">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-11">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="questionSetRadios" id="questionSetRadios3" value="option3">
                                                                    <label class="form-check-label" for="questionSetRadios3">
                                                                        Default radio
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1 d-none d-xl-inline-block d-lg-inline-block">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card mb-2">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-11">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="questionSetRadios" id="questionSetRadios4" value="option4">
                                                                    <label class="form-check-label" for="questionSetRadios4">
                                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere perferendis accusantium a enim praesentium iure perspiciatis, blanditiis quisquam, ratione qui nesciunt. Optio odit id consectetur adipisci pariatur quod maiores incidunt?
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-lg-1 d-none d-xl-inline-block d-lg-inline-block">
                                                                <i class="fa fa-check-circle fa-lg"></i>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="quiz-sect quiz-card-view">
                                        <p class="text-muted pt-3">Question 3 of 3</p>
                                        <div class="quiz-question-set">
                                            <h2 class="make-bold mb-0">Question</h2>
                                        </div>

                                        <div class="quiz-opt-sect">
                                            <p class="question-text-view">The unrestricted sharing of data and business processes among any connected applications and data sources in the enterprise is called:<p>

                                            <div class="mt-5 question-quiz-options">
                                                <div class="card mb-2">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-11">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="questionSetRadios" id="questionSetRadios1" value="option1">
                                                                    <label class="form-check-label" for="questionSetRadios1">
                                                                        Default radio
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-lg-1 d-none d-xl-inline-block d-lg-inline-block">
                                                                <i class="fa fa-times-circle fa-lg"></i>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card mb-2">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-11">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="questionSetRadios" id="questionSetRadios2" value="option2">
                                                                    <label class="form-check-label" for="questionSetRadios2">
                                                                        Default radio
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1 d-none d-xl-inline-block d-lg-inline-block">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card mb-2">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-11">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="questionSetRadios" id="questionSetRadios3" value="option3">
                                                                    <label class="form-check-label" for="questionSetRadios3">
                                                                        Default radio
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1 d-none d-xl-inline-block d-lg-inline-block">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card mb-2">
                                                    <div class="card-body">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-11">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="questionSetRadios" id="questionSetRadios4" value="option4">
                                                                    <label class="form-check-label" for="questionSetRadios4">
                                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere perferendis accusantium a enim praesentium iure perspiciatis, blanditiis quisquam, ratione qui nesciunt. Optio odit id consectetur adipisci pariatur quod maiores incidunt?
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-lg-1 d-none d-xl-inline-block d-lg-inline-block">
                                                                <i class="fa fa-check-circle fa-lg"></i>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>

<?php include_once('../components/footer.php'); ?>

</body>

</html>