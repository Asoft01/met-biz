<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="student_portal margin-top-00">
    <div class="container">
        <p class="make-bold text-muted"><a href="#" class="text-dark" data-toggle="modal" data-target="#QuizExitModal"><i class="fa fa-chevron-left"></i> Exit Quiz</a></p>
        <form action="<?php echo ROOT_DIR; ?>student/quiz-result-2.php" method="post">
            <div class="row align-items-center">
                <div class="col-lg-8 bg-light">
                    <div class="quiz-sect quiz-card-view">
                        <p class="text-muted pt-3">Question 1 of 5</p>
                        <div class="quiz-question-set">
                            <h2 class="make-bold mb-0">Question</h2>
                        </div>

                        <div class="quiz-opt-sect">
                            <p class="question-text-view">The unrestricted sharing of data and business processes among any connected applications and data sources in the enterprise is called:<p>

                            <div class="mt-5 question-quiz-options">
                                <div class="card mb-2 bg-danger text-white">
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
                                            <div class="col-lg-1 d-none d-xl-inline-block d-lg-inline-block">
                                                <i class="fa fa-times-circle fa-lg"></i>
                                            </div>
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

                                <div class="card mb-2 bg-success text-white">
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
                                            <div class="col-lg-1 d-none d-xl-inline-block d-lg-inline-block">
                                                <i class="fa fa-check-circle fa-lg"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4">
                     <div class="quiz-action-view-set">
                        <button class="btn btn-danger btn-lg btn-block" type="submit">Continue <i class="fa fa-chevron-right"></i></button>

                        <h6 class="text-muted make-bold my-3"><i class="fa fa-exclamation-circle text-danger"></i> Incorrect</h6>

                        <h6 class="text-muted make-bold my-3"><i class="fa fa-check-circle text-success"></i> Correct</h6>

                        <p class="make-bold text-muted">Perhaps you should review the Professional Certificate in Strategic System Analysis and Design</p>

                        <p class="make-bold text-muted">You answered correctly. When you are ready for the next question, "click" continue.</p>

                        <p class="make-bold text-muted"><a href="#" class="text-dark" data-toggle="modal" data-target="#QuizExitModal"><i class="fa fa-chevron-left"></i> Exit Quiz and Review Content</a></p>
                     </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="QuizExitModal" tabindex="-1" aria-labelledby="QuizExitModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="QuizExitModalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6 class="make-bold text-center">Are you sure your want to exit your Quiz?</h6>
      </div>
      <div class="modal-footer">
         <a href="<?php echo ROOT_DIR; ?>student/quiz-overview.php" type="button" class="btn btn-danger">Yes, Exit Quiz</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?php include_once('../components/footer.php'); ?>