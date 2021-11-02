<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>

    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center"><strong>Professional Certificate Courses</strong></h2>
                </div>
            </div>

            <div id="carouselReportControls" class="carousel slide" data-interval="false">
               <div class="container">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h3 class="make-bold text-muted">2020 January Report</h3>
                         <div class="row mt-4">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        Month of January
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-container">
                                            <canvas id="myChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-12 statistics">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                Gender
                                            </div>
                                            <div class="card-body">
                                                <canvas id="gender-chart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                Age
                                            </div>
                                            <div class="card-body">
                                                <canvas id="age-chart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Row-->
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        Positions
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-container">
                                            <canvas id="position-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                         <h3 class="make-bold text-muted">2020 February Report</h3>
                         <div class="row mt-4">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        Month of February
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-container">
                                            <canvas id="myChart4-2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-12 statistics">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                Gender
                                            </div>
                                            <div class="card-body">
                                                <canvas id="gender-chart-2"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                Age
                                            </div>
                                            <div class="card-body">
                                                <canvas id="age-chart-2"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Row-->
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        Positions
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-container">
                                            <canvas id="position-chart-2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
                <a class="carousel-control-prev carousel-arrow-sect" href="#carouselReportControls" role="button" data-slide="prev">
                    <img src="<?php echo ROOT_DIR; ?>images/icons/left-arrow.svg" class="img-fluid" width="70px" />
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next carousel-arrow-sect" href="#carouselReportControls" role="button" data-slide="next">
                   <img src="<?php echo ROOT_DIR; ?>images/icons/right-arrow.svg" class="img-fluid" width="70px" />
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <?php include_once('../components/footer.php'); ?>

</body>

</html>