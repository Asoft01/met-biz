<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="student_portal margin-top-00">
    <div class="container">
        <p class="make-bold text-muted"><a href="<?php echo ROOT_DIR; ?>student/interactive-1.php" class="text-dark"><i class="fa fa-chevron-left text-dark"></i> Back</a></p>
        <div class="row">
            <div class="col-lg-8">
                <a href="#">
                    <div class="card text-dark mb-4">
                        <div class="card-body">
                            <div class="media card-height">
                                <div class="img-container-holder mr-3 d-none d-xl-block d-lg-block">
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/courses-view.png" class="ob-fit-cover card-height" alt="...">
                                </div>
                                <div class="media-body card-height d-flex flex-column align-items-baseline">
                                    <h4 class="mt-0 make-bold">Accounting 1: Fundamental</h4>
                                    <p class="letter-space-0 flex-grow-1">Apply financial statement preparation principles and bookkeeping mechanics to conduct basic transactions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-success">
                            <div class="d-flex text-white justify-content-between align-items-center">
                                <div>
                                    <p class="mb-0">Lessons</p>
                                    <h1 class="make-bold mb-0">100</h1>
                                </div>
                                <div class="bord-left-1">
                                    <h3 class="pl-4 make-bold">Start</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <div class="lessons-content degree-info-accordion">
                    <div class="lessons-content-container">
                        <h3 class="make-bold">Modules</h3>
                        <div class="accordion mb-5" id="msbmAccordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Modules 1 (Balance Sheet Basics) <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <div class="course-outline-wrapper">
                                            <a href="">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <p class="mb-0 make-bold text-secondary">Lesson 1</p>
                                                        <h4 class="make-bold">Introduction to the Balance Sheet</h4>
                                                        <div class="row">
                                                            <div class="col-lg-9">
                                                                <ul>
                                                                    <li>Assets, liabilities, and equity.</li>
                                                                    <li>The dual-aspect concept.</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <button class="btn btn-info btn-block text-white btn-bord-radius">Resume</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <p class="mb-0 make-bold text-secondary">Lesson 2</p>
                                                        <h4 class="make-bold">Fundamental Principles of Accounting</h4>
                                                        <div class="row">
                                                            <div class="col-lg-9">
                                                                <ul>
                                                                    <li>The entity and money-measurement concepts.</li>
                                                                    <li>Double-entry bookkeeping.</li>
                                                                    <li>Which items you would likely see on a balance sheet.</li>
                                                                    <li>Measuring assets at either fair value or cost.</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <button class="btn btn-success btn-block text-white btn-bord-radius">Start</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                             <a href="">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <p class="mb-0 make-bold text-secondary">Lesson 3</p>
                                                        <h4 class="make-bold">All About Assets</h4>
                                                        <div class="row">
                                                            <div class="col-lg-9">
                                                                <ul>
                                                                    <li>Assets, liabilities, and equity.</li>
                                                                    <li>The dual-aspect concept.</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <button class="btn btn-success btn-block text-white btn-bord-radius">Start</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                             <a href="">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <p class="mb-0 make-bold text-secondary">Lesson 4</p>
                                                        <h4 class="make-bold">Liabilities & Equity</h4>
                                                        <div class="row">
                                                            <div class="col-lg-9">
                                                                <ul>
                                                                    <li>Assets, liabilities, and equity.</li>
                                                                    <li>The dual-aspect concept.</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <button class="btn btn-success btn-block text-white btn-bord-radius">Start</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                           Module 2 (The Practice of Accounting) <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <div class="course-outline-wrapper">
                                            <a href="">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <p class="mb-0 make-bold text-secondary">Lesson 1</p>
                                                        <h4 class="make-bold">Debits & Credits</h4>
                                                        <div class="row">
                                                            <div class="col-lg-9">
                                                                <ul>
                                                                    <li>Assets, liabilities, and equity.</li>
                                                                    <li>The dual-aspect concept.</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <button class="btn btn-info btn-block text-white btn-bord-radius">Resume</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <p class="mb-0 make-bold text-secondary">Lesson 2</p>
                                                        <h4 class="make-bold">Revenue & Expenses</h4>
                                                        <div class="row">
                                                            <div class="col-lg-9">
                                                                <ul>
                                                                    <li>The entity and money-measurement concepts.</li>
                                                                    <li>Double-entry bookkeeping.</li>
                                                                    <li>Which items you would likely see on a balance sheet.</li>
                                                                    <li>Measuring assets at either fair value or cost.</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <button class="btn btn-success btn-block text-white btn-bord-radius">Start</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                             <a href="">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <p class="mb-0 make-bold text-secondary">Lesson 3</p>
                                                        <h4 class="make-bold">Income Statement</h4>
                                                        <div class="row">
                                                            <div class="col-lg-9">
                                                                <ul>
                                                                    <li>Assets, liabilities, and equity.</li>
                                                                    <li>The dual-aspect concept.</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <button class="btn btn-success btn-block text-white btn-bord-radius">Start</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                             <a href="">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <p class="mb-0 make-bold text-secondary">Lesson 4</p>
                                                        <h4 class="make-bold">Liabilities & Equity</h4>
                                                        <div class="row">
                                                            <div class="col-lg-9">
                                                                <ul>
                                                                    <li>Assets, liabilities, and equity.</li>
                                                                    <li>The dual-aspect concept.</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <button class="btn btn-success btn-block text-white btn-bord-radius">Start</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="InteractiveExitModal" tabindex="-1" aria-labelledby="InteractiveExitModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="InteractiveExitModalLabel">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center mb-3">
            <img src="<?php echo ROOT_DIR; ?>images/banners/close-course.png" class="img-fluid" width="40" />
        </div>
        <h6 class="make-bold text-center">Are you sure your want to exit your Interactive?</h6>
      </div>
      <div class="modal-footer">
         <a href="#" type="button" class="btn btn-danger btn-bord-radius">Yes, Exit Interactive</a>
        <button type="button" class="btn btn-secondary btn-bord-radius" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<?php include_once('../components/footer.php'); ?>