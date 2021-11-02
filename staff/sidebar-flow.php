<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="lecture-v-portal">
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-black border-right sidemenu-content" id="sidebar-wrapper" aria-expanded="true">
            <div class="sidebar-heading"><button class="btn btn-red-dark btn-sm move-button" id="menu-toggle"><i class="fa fa-chevron-left"></i></button></div>
            <!-- <p>If you have any questions or get stuck please contact us in the relevant department</p> -->
            <div class="student_portal">
                <div class="container">
                    <div class="w-15">
                       <?php include "../components/staff-sidebar.php" ?>
                    </div>
                    <!-- <p>If you have any questions or get stuck please contact us in the relevant department</p>
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
                    </ul> -->
                </div>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" class="pb-5 padding-3-lg">
            <div class="container-fluid">
                <div class="content-container-sect pad-top-100">
                     <div class="row">
                        <div class="col-12 col-lg-6 col-xl-6 admin-stat">
                            <div class="card gradient-bloody">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <p class="text-white">Students</p>
                                            <h4 class="text-white line-height-5">845</h4>
                                        </div>
                                        <div class="w-circle-icon rounded-circle border border-white">
                                            <i class="fa fa-graduation-cap text-white"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 admin-stat">
                            <div class="card gradient-scooter">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <p class="text-white">Companies</p>
                                            <h4 class="text-white line-height-5">50</h4>
                                        </div>
                                        <div class="w-circle-icon rounded-circle border border-white">
                                            <i class="fa fa-building text-white"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 admin-stat">
                            <div class="card gradient-blooker">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <p class="text-white">Study Centers</p>
                                            <h4 class="text-white line-height-5">7</h4>
                                        </div>
                                        <div class="w-circle-icon rounded-circle border border-white">
                                            <i class="fa fa-users text-white"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6 admin-stat">
                            <div class="card gradient-ohhappiness">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <p class="text-white">Student Dropout</p>
                                            <h4 class="text-white line-height-5">12</h4>
                                        </div>
                                        <div class="w-circle-icon rounded-circle border border-white">
                                            <i class="fa fa-pie-chart text-white"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    How you heard about us

                                </div>
                                <div class="card-body">
                                    <canvas id="dashboard-chart-2"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    Popular Courses

                                </div>
                                <div class="card-body">
                                    <canvas id="dashboard-chart-3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Row-->

                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    Course Category

                                </div>
                                <div class="card-body">
                                    <canvas id="myChart2"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    Positions

                                </div>
                                <div class="card-body">
                                    <canvas id="ceoChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    Study Centers(Student Count)

                                </div>
                                <div class="card-body">
                                    <div class="chart-container">
                                        <canvas id="myChart3"></canvas>
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

<!-- Modal -->
<div class="modal fade" id="QuizExitModal" tabindex="-1" aria-labelledby="QuizExitModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
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
         <a href="<?php echo ROOT_DIR; ?>student/lecture-quiz-overview.php" type="button" class="btn btn-danger">Yes, Exit Quiz</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<?php include_once('../components/footer.php'); ?>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    const menu_toggle = document.querySelector("#menu-toggle")
    const toggled = document.querySelector(".toggled")

    $(document).ready(function() {
        if ($(window).width() < 768) {
            // $("#wrapper").addClass("toggled");
            // $("#otherDiv").removeClass("myClass");
            menu_toggle.innerHTML = '<i class="fa fa-chevron-right"></i>'
        }
    });

    menu_toggle.addEventListener("click", function() {
        if (menu_toggle.innerHTML === '<i class="fa fa-chevron-right"></i>') {
            menu_toggle.innerHTML = '<i class="fa fa-chevron-left"></i>';
        } else {
            if (menu_toggle.innerHTML === '<i class="fa fa-chevron-left"></i>') {
                menu_toggle.innerHTML = '<i class="fa fa-chevron-right"></i>';
            }
        }
    });
</script>