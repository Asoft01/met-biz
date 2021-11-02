<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="student_portal">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-3">
                <div class="profile-stick">
                    <div class="degree-info-accordion">
                        <div class="accordion" id="accordionLectureList">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Content List <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionLectureList">
                                    <div class="lecture-list-body">
                                        <ul class="list-group list-group-flush courses-breakdown">
                                            <a href="">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">Workplace Management Skills <span class="badge badge-pill"><i class="fa fa-play fa-lg"></i></span></li>
                                            </a>
                                            <a href="">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">Study skills for postgraduate learning<span class="badge badge-pill"><i class="fa fa-lock fa-lg"></i></span></li>
                                            </a>
                                            <a href="">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">Initial assessment skills<span class="badge badge-pill"><i class="fa fa-lock fa-lg"></i></span></li>
                                            </a>
                                            <a href="">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">Supplementary analysis quiz <span class="badge badge-pill"><i class="fa fa-lock fa-lg"></i></span></li>
                                            </a>
                                            <a href="">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">New quiz with attempts<span class="badge badge-pill"><i class="fa fa-lock fa-lg"></i></span></li>
                                            </a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="card assignment-info">
                    <div class="card-header assignment-ttle">
                        <i class="fa fa-book"></i> Workplace Management Skills
                    </div>
                    <div class="card-body assignment-modules">
                        <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/-30xL_dHZDU?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('../components/footer.php'); ?>