<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="student_portal">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-3">
                <div class="profile-stick">
                    <!-- <div class="card profile-detail">
                            <div class="profile_img_container">
                                <img src="../images/profile_img.jpg" class="img-fluid rounded-circle profile_img" />
                                <p class="text-center mt-1"><a href="">Change Upload Image <i class="fa fa-camera"></i></a></p>

                            </div>
                            <div class="card-body">
                                <div class="row profile_row">
                                    <div class="col-12 text-center">

                                        <h3> Jane Doe Smith</h3>
                                    </div>
                                    <div class="col-12 text-center profile_position">
                                        Senior Manager at <br /> Chevron Oil and Gas
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12 mx-auto text-center profile_name">
                                        Nigerian
                                    </div>

                                </div>
                                <div class="col-md-12 text-center mt-3">
                                    <button class="btn btn-normal">Edit your information <i class="fa fa-chevron-right slide-icon"></i></button>
                                </div>
                            </div>
                        </div> -->
                    <ul class="list-group list-group-flush courses-breakdown">
                        <a href="">
                            <li class="list-group-item d-flex justify-content-between align-items-center active-course">Workplace Management Skills <span class="badge badge-pill"><i class="fa fa-chevron-right"></i></span></li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Study skills for postgraduate learning<span class="badge badge-pill"><i class="fa fa-chevron-right"></i></span></li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Initial assessment skills<span class="badge badge-pill"><i class="fa fa-chevron-right"></i></span></li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Supplementary analysis quiz <span class="badge badge-pill"><i class="fa fa-chevron-right"></i></span></li>
                        </a>
                        <a href="">
                            <li class="list-group-item d-flex justify-content-between align-items-center">New quiz with attempts<span class="badge badge-pill"><i class="fa fa-chevron-right"></i></span></li>
                        </a>

                    </ul>
                    <div class="card help-info">
                        <div class="card-body">
                            <p>If you have any questions or get stuck please contact us in the relevant department</p>
                            <ul class="list-group list-help-issues">
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Academic Issues
                                        <span class="badge badge-pill"><i class="fa fa-briefcase"></i></span>
                                    </li>
                                </a>
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Technical Issues
                                        <span class="badge badge-pill"><i class="fa fa-server"></i></span>
                                    </li>
                                </a>
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Student Issues
                                        <span class="badge badge-pill"><i class="fa fa-graduation-cap"></i></span>
                                    </li>
                                </a>
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Finance Issues
                                        <span class="badge badge-pill"><i class="fa fa-money"></i></span>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="lecture-note-sect">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="drag-n-drop">
                                <h3 class="lecture-title-text">Challenge One</h3>
                                <div class="drop-header">
                                    <h3>Match up with the correct mode of transportation</h3>
                                </div>
                                <div class="drag-answer">
                                    <div id="droppable" class="ui-widget-header">
                                        <div class="box-drag"></div>
                                        <h5>Road</h5>
                                    </div>
                                    <div id="droppable2" class="ui-widget-header">
                                        <div class="box-drag"></div>
                                        <h5>Water</h5>
                                    </div>
                                    <div id="droppable3" class="ui-widget-header">
                                        <div class="box-drag"></div>
                                        <h5>Rail</h5>
                                    </div>
                                    <div id="droppable4" class="ui-widget-header">
                                        <div class="box-drag"></div>
                                        <h5>Air</h5>
                                    </div>
                                </div>
                                <div class="drag-sect">
                                    <div class="drag-box-container">
                                        <div id="draggable" class="ui-widget-content">
                                            <img src="<?php echo ROOT_DIR; ?>/images/cars.jpg" class="img-fluid img-drag">
                                        </div>
                                    </div>
                                    <div class="drag-box-container">
                                        <div id="draggable2" class="ui-widget-content">
                                            <img src="<?php echo ROOT_DIR; ?>/images/plane.png" class="img-fluid img-drag">
                                        </div>
                                    </div>
                                    <div class="drag-box-container">
                                        <div id="draggable3" class="ui-widget-content">
                                            <img src="<?php echo ROOT_DIR; ?>/images/ship.jpg" class="img-fluid img-drag">
                                        </div>
                                    </div>
                                    <div class="drag-box-container">
                                        <div id="draggable4" class="ui-widget-content">
                                            <img src="<?php echo ROOT_DIR; ?>/images/train.jpg" class="img-fluid img-drag">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-submit float-right mt-5 mb-5">
                                <button class="btn btn-danger btn-sm">Submit</button>
                            </div>
                            <!-- <div aria-label="Page navigation">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Back</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">Forward</a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include_once('../components/footer.php'); ?>