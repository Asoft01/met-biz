<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>
    <div class="student_portal">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">

                    <div class="card">
                        <div class="card-header">
                            Branch Performance
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <canvas id="barChart2"></canvas>
                            </div>
                        </div>
                    </div>
                    <p class="text-center">Daily performance report of MSBM Branches, stating enrolment and dropout of students</p>
                </div>
            </div>
        </div>
    </div>



    <?php include_once('../components/footer.php'); ?>