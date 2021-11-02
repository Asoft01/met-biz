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
                                <div class="row">
                                    <div class="col-lg-8 mx-auto">
                                         <div class="alert alert-danger" role="alert">
                                           Your action was unsuccessfully. Please try again later
                                        </div>
                                        <div class="alert alert-success" role="alert">
                                           You have successfully added a quiz component
                                        </div>
                                        <h3 class="make-bold">New Quiz</h3>
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="<?php echo ROOT_DIR; ?>staff/add-component-quiz.php">
                                                    <div class="form-group">
                                                        <label><sup class="required text-bold">*</sup> Title</label>
                                                        <input type="text" class="form-control" placeholder="How to manage people" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <textarea class="form-control" rows="10"></textarea>
                                                    </div>
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" id="Check1">
                                                        <label class="form-check-label" for="Check1">Make Pre-requisite</label>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-lg-4">
                                                            <label><sup class="required text-bold">*</sup> No of Attempts</label>
                                                            <select class="form-control">
                                                                <option selected disabled hidden>Choose ...</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-lg-4">
                                                            <label><sup class="required text-bold">*</sup> Pass Percentage</label>
                                                            <select class="form-control">
                                                                <option selected disabled hidden>Choose ...</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-lg-4">
                                                            <label><sup class="required text-bold">*</sup> Certificate Type</label>
                                                            <select class="form-control">
                                                                <option selected disabled hidden>Choose ...</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-purple btn-bord-radius btn-block">Save Component</button>
                                                    </div>
                                                </form>

                                                <div class="quiz-questions-sect mt-5">
                                                    <h3>Questions</h3>
                                                    <hr />
                                                    <div class="question-set-list">
                                                        <form>
                                                            <div class="question-form-set">
                                                                <div class="form-group">
                                                                    <label>Question 1</label>
                                                                    <textarea class="form-control" rows="7"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Option 1</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Option 2</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Option 3</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Option 4</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Answer</label>
                                                                    <select class="form-control">
                                                                        <option selected hidden disabled>Choose ...</option>
                                                                        <option>Option 1</option>
                                                                        <option>Option 2</option>
                                                                        <option>Option 3</option>
                                                                        <option>Option 4</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-6">
                                                                        <button class="btn btn-info btn-block"><i class="fa fa-plus"></i> Add Question Below</button>
                                                                    </div>
                                                                    <div class="form-group col-6">
                                                                        <button class="btn btn-danger btn-block"><i class="fa fa-trash"></i> Delete This Question</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="question-form-set">
                                                                <div class="form-group">
                                                                    <label>Question 2</label>
                                                                    <textarea class="form-control" rows="7"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Option 1</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Option 2</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Option 3</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Option 4</label>
                                                                    <input type="text" class="form-control" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Answer</label>
                                                                    <select class="form-control">
                                                                        <option selected hidden disabled>Choose ...</option>
                                                                        <option>Option 1</option>
                                                                        <option>Option 2</option>
                                                                        <option>Option 3</option>
                                                                        <option>Option 4</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-6">
                                                                        <button class="btn btn-info btn-block"><i class="fa fa-plus"></i> Add Question Below</button>
                                                                    </div>
                                                                    <div class="form-group col-6">
                                                                        <button class="btn btn-danger btn-block"><i class="fa fa-trash"></i> Delete This Question</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr />
                                                            <!-- <div class="form-group">
                                                                <button class="btn btn-purple btn-bord-radius btn-block"> Save Component</button>
                                                            </div> -->
                                                            <div class="form-row">
                                                                <div class="form-group col-lg-6">
                                                                    <a href="<?php echo ROOT_DIR; ?>staff/add-component-quiz-preview.php" class="btn btn-success btn-bord-radius btn-block"> Preview Quiz</a>
                                                                </div>
                                                                <div class="form-group col-lg-6">
                                                                    <button class="btn btn-purple btn-bord-radius btn-block"> Save Component</button>
                                                                </div>
                                                            </div>
                                                        </form>
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