<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-head.php'); ?>

<style>
    #wrapper {
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

    /* .courses-breakdown {
        overflow-y: auto;
        height: 500px;
    } */

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
        #sidebar-wrapper .list-group.manage-view {
            width: 17rem;
        }
    }
</style>

<body>

<?php include "../components/admin-staff-navbar.php"; ?>

<div class="lecture-v-portal">
    <div class="d-flex" id="wrapper">

         <?php include "../components/sidebar.inc.php"; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="pb-5">
            <div class="mt-5">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-lg-8 mx-auto">
                            <form>
                                <div class="form-row">
                                    <div class="col-lg-9 form-group">
                                        <input type="text" class="form-control" placeholder="Search for courses" />
                                    </div>
                                     <div class="col-lg-3 form-group">
                                        <button class="btn btn-primary btn-block">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-4 mb-3">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fa fa-users widget-icon"></i>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mt-0 card-title-heading card-title-heading">Number of Courses</h6>
                                    <h3 class="mt-3 mb-3 make-bold">130</h3>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-4 mb-3">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fa fa-pie-chart widget-icon"></i>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Active Courses</h6>
                                    <h3 class="mt-3 mb-3 make-bold">121</h3>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-lg-4 mb-3">
                            <div class="card widget-flat">
                                <div class="card-body">
                                    <div class="float-right">
                                        <i class="fa fa-hdd-o widget-icon"></i>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mt-0 card-title-heading">Suspended Courses</h6>
                                    <h3 class="mt-3 mb-3 make-bold">9</h3>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

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
