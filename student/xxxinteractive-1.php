<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="student_portal margin-top-00 pt-0">
    <div class="bg-white py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 mb-3">
                    <div class="interactive-intro-view-sect">
                        <h1 class="make-bold ft-6">Interactive</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium tenetur, ullam consequuntur distinctio modi et libero nemo maxime sapiente sint corrupti iure ipsum minima ab quis eaque non magni velit!</p>
                    </div>
                </div>
                <div class="col-lg-7 mb-3">
                    <div class="search-content-field">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-lg-10">
                                    <input type="text" class="form-control" placeholder="Search for courses, keywords and lessons..."/>
                                </div>
                                <div class="form-group col-lg-2">
                                    <button class="btn btn-purple btn-block btn-bord-radius">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="filter-boxes mb-3">
                        <h6 class="make-bold">Filter by Topic</h6>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Any Topic</button>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Economics</button>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Education</button>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Entrepreneurship</button>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Finance and Accounting</button>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Law</button>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Marketing</button>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Operations Management</button>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Statistics</button>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Technology</button>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Strategy</button>
                    </div>
                    <div class="filter-boxes mb-3">
                        <h6 class="make-bold">Filter by Progress</h6>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Any Progress</button>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Not Started</button>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">In Progress</button>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Completed</button>
                    </div>
                    <div class="filter-boxes mb-3">
                        <h6 class="make-bold">Filter by Status</h6>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Any Status</button>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Available</button>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">New</button>
                        <button class="btn btn-outline-dark btn-sm btn-bord-radius lt-sp mb-2">Elective</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <h2 class="make-bold">Courses</h2>
                <hr/>
                <div class="courses-card-view">
                    <h3 class="make-bold my-3">Business Management</h3>
                    <div class="row">
                        <div class="col-lg-3 mb-4">
                            <a href="<?php echo ROOT_DIR; ?>student/splash-loader.php">
                                <div class="card card-height text-dark">
                                    <div class="thumbnail-holder">
                                        <img src="<?php echo ROOT_DIR; ?>images/banners/Corporate-Ethics-and-Responsibility.jpg" class="card-img-top object-fit-cover h-100 w-100" alt="course-thumbnail">
                                    </div>
                                    <div class="card-body">
                                        <div class="interactive-course-thumb card-height">
                                            <div class="interactive-course-thumb-body card-height d-flex flex-column align-items-baseline">
                                                <h4 class="mt-0 make-bold">Professional Certificate in Quality Improvement and Cost Control Methods</h4>
                                                <p class="letter-space-0 flex-grow-1 font-sm">The Professional Certificate in Quality Improvement and Cost Control Methods aims to equip the learner with tools and concepts used to generate ways to improve quality in any organization and control the costs.</p>
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <div>
                                                        <p class="mb-0">Lessons</p>
                                                        <h1 class="make-bold mb-0">100</h1>
                                                    </div>
                                                    <div class="d-none d-xl-inline-block d-lg-inline-block">
                                                        <span class="badge badge-success-lighten letter-space">Start Interactive</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-success">
                                        <div class="d-flex text-white justify-content-between align-items-center">
                                            <div class="img-container-holder">
                                                <img src="<?php echo ROOT_DIR; ?>images/banners/courses-view.png" class="ob-fit-cover card-height" alt="...">
                                            </div>
                                            <div class="interactive-status-action">
                                                <h3 class="make-bold btn btn-outline-white make-bold ft-2">Start</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <a href="<?php echo ROOT_DIR; ?>student/splash-loader.php">
                                <div class="card card-height text-dark">
                                    <div class="thumbnail-holder">
                                        <img src="<?php echo ROOT_DIR; ?>images/banners/course-box-2.jpg" class="card-img-top object-fit-cover h-100 w-100" alt="course-thumbnail">
                                    </div>
                                    <div class="card-body">
                                        <div class="interactive-course-thumb card-height">
                                            <div class="interactive-course-thumb-body card-height d-flex flex-column align-items-baseline">
                                                <h4 class="mt-0 make-bold">Professional Certificate in Quality Improvement and Cost Control Methods</h4>
                                                <p class="letter-space-0 flex-grow-1 font-sm">The Professional Certificate in Quality Improvement and Cost Control Methods aims to equip the learner with tools and concepts used to generate ways to improve quality in any organization and control the costs.</p>
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <div>
                                                        <p class="mb-0">Lessons Completed</p>
                                                        <h1 class="make-bold mb-0">1/<span class="ft-q">50</span></h1>
                                                    </div>
                                                    <div class="d-none d-xl-inline-block d-lg-inline-block">
                                                        <span class="badge badge-info-lighten letter-space">Resume Interactive</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-info">
                                        <div class="d-flex text-white justify-content-between align-items-center">
                                            <div class="img-container-holder">
                                                <img src="<?php echo ROOT_DIR; ?>images/banners/courses-view-1.png" class="ob-fit-cover card-height" alt="...">
                                            </div>
                                            <div class="interactive-status-action">
                                                <h3 class="make-bold btn btn-outline-white make-bold ft-2">Resume</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <a href="<?php echo ROOT_DIR; ?>student/splash-loader.php">
                                <div class="card card-height text-dark">
                                    <div class="thumbnail-holder">
                                        <img src="<?php echo ROOT_DIR; ?>images/banners/course-box-4.jpg" class="card-img-top object-fit-cover h-100 w-100" alt="course-thumbnail">
                                    </div>
                                    <div class="card-body">
                                        <div class="interactive-course-thumb card-height">
                                            <div class="interactive-course-thumb-body card-height d-flex flex-column align-items-baseline">
                                                <h4 class="mt-0 make-bold">Professional Certificate in Information System Business Strategy Alignment Models and Analysis</h4>
                                                <p class="letter-space-0 flex-grow-1 question-text-interactive font-sm">The Professional Certificate in Information System Business Strategy Alignment Models and Analysis aims to provide the learner with the tools and models to align the organizational information strategy with the business strategy. </p>
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <div>
                                                        <p class="mb-0">Lessons</p>
                                                        <h1 class="make-bold mb-0">200</h1>
                                                    </div>
                                                    <div class="d-none d-xl-inline-block d-lg-inline-block">
                                                        <span class="badge badge-dark-lighten letter-space">Locked Interactive</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-secondary">
                                        <div class="d-flex text-white justify-content-between align-items-center">
                                            <div class="img-container-holder">
                                                <img src="<?php echo ROOT_DIR; ?>images/banners/lock.svg" class="ob-fit-cover card-height" alt="...">
                                            </div>
                                            <!-- <div>
                                                <p class="mb-0">Lessons</p>
                                                <h1 class="make-bold mb-0">200</h1>
                                            </div> -->
                                            <div class="interactive-status-action">
                                                <h3 class="make-bold btn btn-outline-white make-bold ft-2">Locked</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <a href="<?php echo ROOT_DIR; ?>student/splash-loader.php">
                                <div class="card card-height text-dark">
                                    <div class="thumbnail-holder">
                                        <img src="<?php echo ROOT_DIR; ?>images/banners/course-box-3.jpg" class="card-img-top object-fit-cover h-100 w-100" alt="course-thumbnail">
                                    </div>
                                    <div class="card-body">
                                        <div class="interactive-course-thumb card-height">
                                            <div class="interactive-course-thumb-body card-height d-flex flex-column align-items-baseline">
                                                <h4 class="mt-0 make-bold">Professional Certificate in Corporate Compliance and Sarbanes-Oxley Act 2002</h4>
                                                <p class="letter-space-0 flex-grow-1 font-sm">The Professional Certificate in Corporate Compliance and Sarbanes-Oxley Act 2002 aims to equip the learner with an advanced understanding of the Sarbanes-Oxley Act of 2002</p>
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <div>
                                                        <p class="mb-0">Lessons</p>
                                                        <h1 class="make-bold mb-0">200</h1>
                                                    </div>
                                                    <div class="d-none d-xl-inline-block d-lg-inline-block">
                                                        <span class="badge badge-dark-lighten letter-space">Locked Interactive</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-secondary">
                                        <div class="d-flex text-white justify-content-between align-items-center">
                                            <div class="img-container-holder">
                                                <img src="<?php echo ROOT_DIR; ?>images/banners/lock.svg" class="ob-fit-cover card-height" alt="...">
                                            </div>
                                            <!-- <div>
                                                <p class="mb-0">Lessons</p>
                                                <h1 class="make-bold mb-0">200</h1>
                                            </div> -->
                                            <div class="interactive-status-action">
                                                <h3 class="make-bold btn btn-outline-white make-bold ft-2">Locked</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="courses-card-view">
                    <h3 class="make-bold my-3">Education</h3>
                    <div class="row">
                        <div class="col-lg-3 mb-4">
                            <a href="<?php echo ROOT_DIR; ?>student/splash-loader.php">
                                <div class="card card-height text-dark">
                                    <div class="thumbnail-holder">
                                        <img src="<?php echo ROOT_DIR; ?>images/banners/Corporate-Ethics-and-Responsibility.jpg" class="card-img-top object-fit-cover h-100 w-100" alt="course-thumbnail">
                                    </div>
                                    <div class="card-body">
                                        <div class="interactive-course-thumb card-height">
                                            <div class="interactive-course-thumb-body card-height d-flex flex-column align-items-baseline">
                                                <h4 class="mt-0 make-bold">Professional Certificate in Quality Improvement and Cost Control Methods</h4>
                                                <p class="letter-space-0 flex-grow-1 font-sm">The Professional Certificate in Quality Improvement and Cost Control Methods aims to equip the learner with tools and concepts used to generate ways to improve quality in any organization and control the costs.</p>
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <div>
                                                        <p class="mb-0">Lessons</p>
                                                        <h1 class="make-bold mb-0">100</h1>
                                                    </div>
                                                    <div class="d-none d-xl-inline-block d-lg-inline-block">
                                                        <span class="badge badge-success-lighten letter-space">Start Interactive</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-success">
                                        <div class="d-flex text-white justify-content-between align-items-center">
                                            <div class="img-container-holder">
                                                <img src="<?php echo ROOT_DIR; ?>images/banners/courses-view.png" class="ob-fit-cover card-height" alt="...">
                                            </div>
                                            <div class="interactive-status-action">
                                                <h3 class="make-bold btn btn-outline-white make-bold ft-2">Start</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 mb-4">
                            <a href="<?php echo ROOT_DIR; ?>student/splash-loader.php">
                                <div class="card card-height text-dark">
                                    <div class="thumbnail-holder">
                                        <img src="<?php echo ROOT_DIR; ?>images/banners/course-box-2.jpg" class="card-img-top object-fit-cover h-100 w-100" alt="course-thumbnail">
                                    </div>
                                    <div class="card-body">
                                        <div class="interactive-course-thumb card-height">
                                            <div class="interactive-course-thumb-body card-height d-flex flex-column align-items-baseline">
                                                <h4 class="mt-0 make-bold">Professional Certificate in Quality Improvement and Cost Control Methods</h4>
                                                <p class="letter-space-0 flex-grow-1 font-sm">The Professional Certificate in Quality Improvement and Cost Control Methods aims to equip the learner with tools and concepts used to generate ways to improve quality in any organization and control the costs.</p>
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <div>
                                                        <p class="mb-0">Lessons Completed</p>
                                                        <h1 class="make-bold mb-0">1/<span class="ft-q">50</span></h1>
                                                    </div>
                                                    <div class="d-none d-xl-inline-block d-lg-inline-block">
                                                        <span class="badge badge-info-lighten letter-space">Resume Interactive</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-info">
                                        <div class="d-flex text-white justify-content-between align-items-center">
                                            <div class="img-container-holder">
                                                <img src="<?php echo ROOT_DIR; ?>images/banners/courses-view-1.png" class="ob-fit-cover card-height" alt="...">
                                            </div>
                                            <div class="interactive-status-action">
                                                <h3 class="make-bold btn btn-outline-white make-bold ft-2">Resume</h3>
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