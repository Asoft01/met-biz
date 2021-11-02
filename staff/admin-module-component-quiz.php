<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Module Component</strong></h2>
                    <h5 class="text-muted">New Quiz</h5>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-12">
                    <div class="admin-staff-container">
                        <div class="upload-course-material">
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <div class="light-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="<?php echo ROOT_DIR; ?>staff/admin-module-component-quizphp">
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
                                                        <button type="submit" class="btn btn-dark">Save Component</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

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
                                                <div class="form-group">
                                                    <button class="btn btn-dark btn-block"> Save Component</button>
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

    <?php include_once('../components/footer.php'); ?>