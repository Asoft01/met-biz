<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="student_portal margin-top-00">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="quiz-sect">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="quiz-sect-info">
                                <h2 class="quiz-preview-text">Test your knowledge</h2>
                                <p>You will be asked to 10 multiple choices questions based on what you have learnt throughout this course.</p>
                                <p>At the end of the Quiz you will receive your results as a percentage.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="<?php echo ROOT_DIR; ?>student/quiz-question.php" class="btn btn-success btn-lg btn-block mt-3">Start Quiz</a>
                            <a href="<?php echo ROOT_DIR; ?>student/quiz-question.php" class="btn btn-light btn-lg btn-block mt-3">Exit Quiz</a>
                            <p class="mt-2"><small class="text-muted">There is no time limit. Once you have completed the quiz, you will not be able to retake it.</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('../components/footer.php'); ?>