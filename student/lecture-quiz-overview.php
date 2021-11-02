<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<style>
    /* #wrapper {
        overflow-x: hidden;
    }

    #sidebar-wrapper {
        min-height: 100vh;
        width: 350px;
        margin-left: -17rem;
        -webkit-transition: margin .25s ease-out;
        -moz-transition: margin .25s ease-out;
        -o-transition: margin .25s ease-out;
        transition: margin .25s ease-out;
    }

    #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
        position: relative;
    }


    #page-content-wrapper {
        min-width: 100vw;
    }

    #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
    }

    .bg-grey-o {
        background-color: #222;
    }

    .make-bold {
        font-weight: 700;
    }

    .assignment-info {
        box-shadow: none;
    }

    .move-button {
        position: absolute;
        right: -29px;
    }

    .btn-red-dark {
        background-color: #ad0000;
        border: none;
        border-radius: 0;
        color: #fff;
    }

    .btn-red-dark:hover{
        background-color: #222;
        color: #fff;
    }

    .pad-top-100{
        padding-top:100px
    }

    @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }

        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: -22rem;
        }
    }

    @media screen and (max-width: 768px) {
        #sidebar-wrapper .list-group {
            width: 15rem;
        }
    }


   @media screen and (min-width: 992px){
      .courses-breakdown {
        overflow-y: auto;
        height: 500px;
      }
   } */
</style>

<div class="lecture-v-portal">
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper" aria-expanded="true">
            <div class="sidebar-heading">Content List <button class="btn btn-red-dark btn-sm move-button" id="menu-toggle"><i class="fa fa-chevron-left"></i></button></div>
            <ul class="list-group list-group-flush courses-breakdown">
                <a href="">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Workplace Management Skills  <span class="badge badge-pill"><i class="fa fa-play fa-lg"></i></span></li>
                </a>
                <a href="">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Study skills for postgraduate<span class="badge badge-pill"><i class="fa fa-lock fa-lg"></i></span></li>
                </a>
                <a href="">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Initial assessment skills<span class="badge badge-pill"><i class="fa fa-lock fa-lg"></i></span></li>
                </a>
                <a href="">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Supplementary analysis quiz<span class="badge badge-pill"><i class="fa fa-lock fa-lg"></i></span></li>
                </a>
                <a href="">
                    <li class="list-group-item d-flex justify-content-between align-items-center">New quiz with attempts Workplace Management<span class="badge badge-pill"><i class="fa fa-lock fa-lg"></i></span></li>
                </a>
                <a href="">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Study skills for postgraduate learning <span class="badge badge-pill"><i class="fa fa-lock fa-lg"></i></span></li>
                </a>
                <a href="">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Initial assessment skills Workplace Management<span class="badge badge-pill"><i class="fa fa-lock fa-lg"></i></span></li>
                </a>
                <a href="">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Supplementary analysis quiz Workplace<span class="badge badge-pill"><i class="fa fa-lock fa-lg"></i></span></li>
                </a>
                <a href="">
                    <li class="list-group-item d-flex justify-content-between align-items-center">New quiz with attempts<span class="badge badge-pill"><i class="fa fa-lock fa-lg"></i></span></li>
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
                <a href="">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Initial assessment skills<span class="badge badge-pill"><i class="fa fa-lock fa-lg"></i></span></li>
                </a>
                <a href="">
                    <li class="list-group-item d-flex justify-content-between align-items-center">Supplementary analysis quiz <span class="badge badge-pill"><i class="fa fa-lock fa-lg"></i></span></li>
                </a>
                <a href="">
                    <li class="list-group-item d-flex justify-content-between align-items-center">New quiz with attempts<span class="badge badge-pill"><i class="fa fa-lock fa-lg"></i></span></li>
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
                    <li class="list-group-item d-flex justify-content-between align-items-center">New quiz with attempts <span class="badge badge-pill"><i class="fa fa-lock fa-lg"></i></span></li>
                </a>
            </ul>
            <!-- <p>If you have any questions or get stuck please contact us in the relevant department</p> -->
            <div class="student_portal">
                <div class="container">
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
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" class="pb-5">
            <div class="container">
                <div class="quiz-sect  pad-top-100">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="quiz-sect-info mt-5">
                                <h2 class="quiz-preview-text">Test your knowledge</h2>
                                <p>You will be asked 10 multiple choices questions based on what you have learnt throughout this course.</p>
                                <p>At the end of the Quiz you will receive your results as a percentage.</p>
                                <div class="mt-4">
                                    <a href="<?php echo ROOT_DIR; ?>student/lecture-quiz-question.php" class="btn btn-success btn-lg btn-block mt-3">Start Quiz</a>
                                    <!-- <a href="<?php echo ROOT_DIR; ?>student/lecture-quiz-question.php" class="btn btn-light btn-lg btn-block mt-3">Exit Quiz</a> -->
                                    <p class="mt-2 text-center"><small class="text-muted">There is no time limit.</small></p>
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