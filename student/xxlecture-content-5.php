<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<style>
    #wrapper {
        overflow-x: hidden;
    }

    #sidebar-wrapper {
        min-height: 100vh;
        margin-left: -15rem;
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

    #sidebar-wrapper .list-group {
        width: 15rem;
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

    .courses-breakdown {
        overflow-y: auto;
        height: 600px;
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

    @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }

        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
        }
    }
</style>

<div class="lecture-v-portal">
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Content List <button class="btn btn-danger btn-sm move-button" id="menu-toggle"><i class="fa fa-chevron-left"></i></button></div>
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

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" class="pb-5">
            <div class="container">
                <!-- <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-bars"></i></button> -->
                <h3 class="make-bold mt-5 mb-0">Professional Certificate in Project Planning Concepts and Tools</h3>
                <div class="card assignment-info mt-3">
                    <!-- <div class="card-header assignment-ttle">
                        <i class="fa fa-book"></i> Workplace Management Skills
                    </div> -->
                    <div class="card-body assignment-modules">
                        <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/-30xL_dHZDU?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
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
</script>