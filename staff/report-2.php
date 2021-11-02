<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<style>
   .bg-black{
      background-color: #000 !important;
   }

   .border-top-lg{
      border-top: 1px solid #333;
   }
</style>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Report Dashboard</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
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

                    <div class="accordion degree-info-accordion" id="accordionChart" >
                        <div class="card border-top-lg">
                            <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Courses <i class="fa fa-chevron-down float-right"></i>
                                                         <i class="fa fa-chevron-up float-right"></i>
                                </button>
                            </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                                <div class="card-body">
                                     <div class="row">
                                        <div class="col-lg-9"></div>
                                        <div class="col-lg-3">
                                             <form class="form-inline">
                                                <div class="form-group mx-sm-3 mb-2">
                                                    <select class="form-control">
                                                        <option>2020</option>
                                                        <option>2019</option>
                                                        <option>2018</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-success mb-2">Go</button>
                                             </form>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-lg-6">
                                            <div class="card text-white">
                                                <div class="card-header bg-black pl-2 pr-2 text-white">
                                                    How you heard about us
                                                </div>
                                                <div class="card-body">
                                                    <canvas id="dashboard-chart-20"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="card">
                                                <div class="card-header bg-black pl-2 pr-2 text-white">
                                                    Popular Courses
                                                </div>
                                                <div class="card-body">
                                                    <canvas id="dashboard-chart-21"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-top-lg">
                            <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Enrolments <i class="fa fa-chevron-down float-right"></i>
                                                         <i class="fa fa-chevron-up float-right"></i>
                                </button>
                            </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-9"></div>
                                        <div class="col-lg-3">
                                             <form class="form-inline">
                                                <div class="form-group mx-sm-3 mb-2">
                                                    <select class="form-control">
                                                        <option>2020</option>
                                                        <option>2019</option>
                                                        <option>2018</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-success mb-2">Go</button>
                                             </form>
                                        </div>
                                    </div>
                                    <div class="chart-container">
                                        <canvas id="dashboard-chart-22"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-top-lg">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Countries (Top 10 Countries) <i class="fa fa-chevron-down float-right"></i>
                                                            <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-9"></div>
                                    <div class="col-lg-3">
                                            <form class="form-inline">
                                            <div class="form-group mx-sm-3 mb-2">
                                                <select class="form-control">
                                                    <option>2020</option>
                                                    <option>2019</option>
                                                    <option>2018</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-success mb-2">Go</button>
                                            </form>
                                    </div>
                                </div>
                                <div class="chart-container">
                                        <canvas id="dashboard-chart-23"></canvas>
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

</body>

</html>