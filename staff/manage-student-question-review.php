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
                    <div class="admin-staff-container">
                        <div class="light-card">
                            <div class="card">
                                <h5 class="card-header">Discount</h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>From</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td width="300">
                                                        <strong>Apr 29, 2020 - 05:23PM</strong>
                                                    </td>
                                                    <td>
                                                        <strong>John ChukwuEmeka Muhammad</strong>
                                                    </td>
                                                    <td width="120">
                                                        <strong><em>Open</em></strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="message-content-display">
                                        <p>Good afternoon,</p>

                                        <p>I am Tinuola Akinlonu, currently running the PGD programme in Human Resource Management.</p>

                                        <p>I saw that the programme has been heavily discounted, i want to know if i can be a beneficiary of the discount too.I still have an outstanding of about N1million to balance up as i have been paying monthly.</p>

                                        <p>Thanks as i anticipate a favorable response.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="send-reply mt-5">
                            <h4><strong>Send a Reply</strong></h4>
                            <form action="<?php echo ROOT_DIR; ?>" method="post">
                                <div class="form-group">
                                    <textarea class="form-control" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="form-group col-lg-8">
                                            <button type="submit" class="btn btn-dark">Send Reply</button>
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <div class="d-flex justify-content-between">
                                                <a href="<?php echo ROOT_DIR; ?>" class="btn btn-danger">Close Request</a>
                                                <a href="<?php echo ROOT_DIR; ?>" class="btn btn-info">Mark as Solved</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('../components/footer.php'); ?>