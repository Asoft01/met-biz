<?php include "components/config.php"; ?>
<?php include "components/doctype.inc.php"; ?>
</head>

<body>
    <?php include "components/navbar.inc.php"; ?>
    <div class="main-content">
        <div class="job-listing-sect padding-space-t-b bg-grey">
            <div class="container">
                <h3>Search: PHP Developer, Lagos</h3>
                <div class="sort-arrange-options">
                    <div class="sort-results">
                        <span>1-20 of 1,000 results</span>
                    </div>
                    <div class="job-form-sort">
                        <span>Sort By:</span>
                        <ul class="sort-options list-unstyled">
                            <li><a href="#">Relevance</a></li>
                            <li><a href="#">Date</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row job-listing-row">
                    <div class="col-lg-4">
                        <div class="card job-listing-card-view margin-spacing-bottom">
                            <div class="card-body">
                                <h5 class="card-title">Smart Filter</h5>
                                <form>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input type="text" class="form-control" placeholder="Enter keywords" />
                                    </div>
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" class="form-control" placeholder="Enter Company Name" />
                                    </div>
                                    <div class="form-group">
                                        <label>Job Date</label>
                                        <input type="date" class="form-control" placeholder="Enter Job Date" />
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">Full-Time</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">Professional</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">Intern</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">Blue Collar</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">Contract</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">Part-Time</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">Remote</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a class="btn btn-linear-blue btn-block" href="#">Filter Result</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="accordion" id="jobAccordion">
                            <div class="card margin-spacing-bottom">
                                <div class="card-header bg-white" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block btn-accordion" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            <div class="accordion-positioning-text d-flex justify-content-between align-items-center">
                                                <div class="accordion-text">
                                                    Qualification
                                                </div>
                                                <div class="accordion-arrows">
                                                    <i class="fa fa-chevron-down"></i>
                                                    <i class="fa fa-chevron-up"></i>
                                                </div>
                                            </div>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#jobAccordion">
                                    <div class="card-body">
                                        <form>
                                            <div id="qual_filter" style="overflow: hidden;">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="2"> Vocational </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="11"> Trainings </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="14"> Adult Education </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="1"> High School </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="15"> Professional Qualification </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="3"> Diploma </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="4"> OND </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="5"> HND </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="13"> Executive Education </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="6"> Bachelor's Degree </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="12"> Post Graduate Degree </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="10"> MBBS </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="22"> DSc / ScD / EngD </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="16"> LLB </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="21"> LLD </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="17"> MB/BM/BS/ChB/BChir/BCh etc </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="7"> MBA / MSc </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="18"> Master's Degree </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="19"> LLM </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="8"> MPhil / PhD </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="20"> PhD or DPhil </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="qualification[]" value="9"> Others </label>
                                                </div>

                                                <div class="form-group">
                                                    <a class="btn btn-linear-blue btn-block" href="#">Filter Result</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card margin-spacing-bottom">
                                <div class="card-header bg-white" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block btn-accordion collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="accordion-positioning-text d-flex justify-content-between align-items-center">
                                                <div class="accordion-text">
                                                    Experience
                                                </div>
                                                <div class="accordion-arrows">
                                                    <i class="fa fa-chevron-down"></i>
                                                    <i class="fa fa-chevron-up"></i>
                                                </div>
                                            </div>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#jobAccordion">
                                    <div class="card-body">
                                        <form>
                                            <div id="qual_filter" style="overflow: hidden; display: block;">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="experience[]" value="1"> Entry Level </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="experience[]" value="2"> 1 - 3 years </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="experience[]" value="3"> 3 - 5 years </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="experience[]" value="4"> 5 - 7 years </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="experience[]" value="5"> 7 - 10 years </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="experience[]" value="6"> 10 - 15 years </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="experience[]" value="7"> 15+ years </label>
                                                </div>

                                                <div class="form-group">
                                                    <a class="btn btn-linear-blue btn-block" href="#">Filter Result</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card margin-spacing-bottom">
                                <div class="card-header bg-white" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block btn-accordion collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <div class="accordion-positioning-text d-flex justify-content-between align-items-center">
                                                <div class="accordion-text">
                                                    Specialization/Gender
                                                </div>
                                                <div class="accordion-arrows">
                                                    <i class="fa fa-chevron-down"></i>
                                                    <i class="fa fa-chevron-up"></i>
                                                </div>
                                            </div>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#jobAccordion">
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label>Specialization</label>
                                                <select class="form-control">
                                                    <option selected disabled hidden>Any Specialization</option>
                                                    <option>Accounting</option>
                                                    <option>Airline</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Industry</label>
                                                <select class="form-control">
                                                    <option selected disabled hidden>Any Industry</option>
                                                    <option>Accounting</option>
                                                    <option>Airline</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <div class="form-row">
                                                    <div class="col-lg-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="RadiosGender" id="Radios1" value="option1">
                                                            <label class="form-check-label" for="Radios1">
                                                                Male
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="RadiosGender" id="Radios2" value="option2">
                                                            <label class="form-check-label" for="Radios2">
                                                                Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a class="btn btn-linear-blue btn-block" href="#">Filter Result</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card margin-spacing-bottom">
                                <div class="card-header bg-white" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block btn-accordion collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <div class="accordion-positioning-text d-flex justify-content-between align-items-center">
                                                <div class="accordion-text">
                                                    Residence
                                                </div>
                                                <div class="accordion-arrows">
                                                    <i class="fa fa-chevron-down"></i>
                                                    <i class="fa fa-chevron-up"></i>
                                                </div>
                                            </div>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#jobAccordion">
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select class="form-control">
                                                    <option selected disabled hidden>Select your country of choice</option>
                                                    <option>Nigeria</option>
                                                    <option>United Arab Emirates</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <a class="btn btn-linear-blue btn-block" href="#">Filter Result</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card job-listing-card-view margin-spacing-bottom sponsored">
                            <div class="card-body">
                                <h5 class="card-title">Sponsored Jobs in United Arab Emirates</h5>
                                <hr />
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/vroom.jpg" class="mr-3 img-featured img-box-shadow" alt="...">
                                    <div class="media-body">
                                        <small class="text-muted">2 hours ago</small>
                                        <div class="job-list-info">
                                            <h5 class="mt-0 text-muted">Frontend Developer <span class="badge badge-success badge-text">Intern</span></h5>
                                            <!-- <i class="far fa-heart fa-2x"></i> -->
                                        </div>
                                        <h6>Vroom Dubai Inc</h6>
                                        <p>UAE | Bachelor's Degree | 3-5 years</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/google.png" class="mr-3 img-featured img-box-shadow" alt="...">
                                    <div class="media-body">
                                        <small class="text-muted">2 hours ago</small>
                                        <div class="job-list-info">
                                            <h5 class="mt-0 text-muted">Frontend Developer <span class="badge badge-success badge-text">Part-Time</span></h5>
                                            <!-- <i class="far fa-heart fa-2x active-fav"></i> -->
                                        </div>
                                        <h6>Google Dubai Inc</h6>
                                        <p>Dubai | Bachelor's Degree | 3-5 years</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/facebook.png" class="mr-3 img-featured img-box-shadow" alt="...">
                                    <div class="media-body">
                                        <small class="text-muted">2 hours ago</small>
                                        <div class="job-list-info">
                                            <h5 class="mt-0 text-muted">Business Executive Developer <span class="badge badge-success badge-text">Professional</span></h5>
                                            <!-- <i class="far fa-heart fa-2x active-fav"></i> -->
                                        </div>
                                        <h6>Facebook Dubai Inc</h6>
                                        <p>Dubai | Bachelor's Degree | 3-5 years</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card job-listing-card-view margin-spacing-bottom">
                            <div class="card-body">
                                <h5 class="card-title">Ads by CareerSlip</h5>
                                <p class="text-center"><img src="<?php echo ROOT_DIR; ?>images/ads.png" class="img-fluid" /></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card job-list-card">
                            <div class="card-body job-list-card-body">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/facebook.png" class="mr-3 img-featured img-box-shadow" alt="...">
                                    <div class="media-body">
                                        <small class="text-muted">1 min ago</small>
                                        <div class="job-list-info">
                                            <h5 class="mt-0">Head of IT Support <span class="badge badge-success badge-text">Professional</span></h5>
                                            <!-- <i class="far fa-heart fa-2x"></i> -->
                                        </div>
                                        <h6>Facebook Nigeria Inc.</h6>
                                        <p class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra.</p>
                                        <p>Lagos, Nigeria | Bachelor's Degree | 3-5 years</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <div class="job-listing-action d-flex justify-content-between align-items-center">
                                    <a class="btn btn-linear-blue" href="#">View Job</a>
                                    <!-- <span>10 Applicants</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="card job-list-card">
                            <div class="card-body job-list-card-body">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/microsoft.png" class="mr-3 img-featured img-box-shadow" alt="...">
                                    <div class="media-body">
                                        <small class="text-muted">2 hours ago</small>
                                        <div class="job-list-info">
                                            <h5 class="mt-0">Frontend Developer <span class="badge badge-success badge-text">Remote</span></h5>
                                            <!-- <i class="far fa-heart fa-2x"></i> -->
                                        </div>
                                        <h6>Microsoft Inc.</h6>
                                        <p class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra.</p>
                                        <p>Lagos, Nigeria | Bachelor's Degree | 3-5 years</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <div class="job-listing-action d-flex justify-content-between align-items-center">
                                    <a class="btn btn-linear-blue" href="#">View Job</a>
                                    <!-- <span>10 Applicants</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="card job-list-card">
                            <div class="card-body job-list-card-body">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/google.png" class="mr-3 img-featured img-box-shadow" alt="...">
                                    <div class="media-body">
                                        <small class="text-muted">2 hours ago</small>
                                        <div class="job-list-info">
                                            <h5 class="mt-0">Frontend Developer <span class="badge badge-success badge-text">Full-Time</span></h5>
                                            <!-- <i class="far fa-heart fa-2x active-fav"></i> -->
                                        </div>
                                        <h6>Google Inc.</h6>
                                        <p class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra.</p>
                                        <p>Lagos, Nigeria | Bachelor's Degree | 3-5 years</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <div class="job-listing-action d-flex justify-content-between align-items-center">
                                    <a class="btn btn-linear-blue" href="#">View Job</a>
                                    <!-- <span>10 Applicants</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="card job-list-card">
                            <div class="card-body job-list-card-body">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/vroom.jpg" class="mr-3 img-featured img-box-shadow" alt="...">
                                    <div class="media-body">
                                        <small class="text-muted">2 hours ago</small>
                                        <div class="job-list-info">
                                            <h5 class="mt-0">Business Executive Marketer <span class="badge badge-success badge-text">Full-Time</span></h5>
                                            <!-- <i class="far fa-heart fa-2x active-fav"></i> -->
                                        </div>
                                        <h6>Vroom Inc.</h6>
                                        <p class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra.</p>
                                        <p>Lagos, Nigeria | Bachelor's Degree | 3-5 years</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <div class="job-listing-action d-flex justify-content-between align-items-center">
                                    <a class="btn btn-linear-blue" href="#">View Job</a>
                                    <!-- <span>10 Applicants</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="card job-list-card">
                            <div class="card-body job-list-card-body">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/facebook.png" class="mr-3 img-featured img-box-shadow" alt="...">
                                    <div class="media-body">
                                        <small class="text-muted">1 min ago</small>
                                        <div class="job-list-info">
                                            <h5 class="mt-0">Head of IT Support <span class="badge badge-success badge-text">Professional</span></h5>
                                            <!-- <i class="far fa-heart fa-2x"></i> -->
                                        </div>
                                        <h6>Facebook Nigeria Inc.</h6>
                                        <p class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra.</p>
                                        <p>Lagos, Nigeria | Bachelor's Degree | 3-5 years</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <div class="job-listing-action d-flex justify-content-between align-items-center">
                                    <a class="btn btn-linear-blue" href="#">View Job</a>
                                    <!-- <span>10 Applicants</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="card job-list-card">
                            <div class="card-body job-list-card-body">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/microsoft.png" class="mr-3 img-featured img-box-shadow" alt="...">
                                    <div class="media-body">
                                        <small class="text-muted">2 hours ago</small>
                                        <div class="job-list-info">
                                            <h5 class="mt-0">Frontend Developer <span class="badge badge-success badge-text">Remote</span></h5>
                                            <!-- <i class="far fa-heart fa-2x"></i> -->
                                        </div>
                                        <h6>Microsoft Inc.</h6>
                                        <p class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra.</p>
                                        <p>Lagos, Nigeria | Bachelor's Degree | 3-5 years</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <div class="job-listing-action d-flex justify-content-between align-items-center">
                                    <a class="btn btn-linear-blue" href="#">View Job</a>
                                    <!-- <span>10 Applicants</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="card job-list-card">
                            <div class="card-body job-list-card-body">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/google.png" class="mr-3 img-featured img-box-shadow" alt="...">
                                    <div class="media-body">
                                        <small class="text-muted">2 hours ago</small>
                                        <div class="job-list-info">
                                            <h5 class="mt-0">Frontend Developer <span class="badge badge-success badge-text">Full-Time</span></h5>
                                            <!-- <i class="far fa-heart fa-2x active-fav"></i> -->
                                        </div>
                                        <h6>Google Inc.</h6>
                                        <p class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra.</p>
                                        <p>Lagos, Nigeria | Bachelor's Degree | 3-5 years</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <div class="job-listing-action d-flex justify-content-between align-items-center">
                                    <a class="btn btn-linear-blue" href="#">View Job</a>
                                    <!-- <span>10 Applicants</span> -->
                                </div>
                            </div>
                        </div>
                        <div class="card job-list-card">
                            <div class="card-body job-list-card-body">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/vroom.jpg" class="mr-3 img-featured img-box-shadow" alt="...">
                                    <div class="media-body">
                                        <small class="text-muted">2 hours ago</small>
                                        <div class="job-list-info">
                                            <h5 class="mt-0">Business Executive Marketer <span class="badge badge-success badge-text">Full-Time</span></h5>
                                            <!-- <i class="far fa-heart fa-2x active-fav"></i> -->
                                        </div>
                                        <h6>Vroom Inc.</h6>
                                        <p class="text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra.</p>
                                        <p>Lagos, Nigeria | Bachelor's Degree | 3-5 years</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <div class="job-listing-action d-flex justify-content-between align-items-center">
                                    <a class="btn btn-linear-blue" href="#">View Job</a>
                                    <!-- <span>10 Applicants</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-label="Page navigation">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php include "components/main-footer.inc.php"; ?>
</body>

</html>