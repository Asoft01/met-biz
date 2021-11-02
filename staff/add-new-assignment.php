<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-head.php'); ?>

<body>

<?php include "../components/admin-staff-navbar.php"; ?>

<div class="lecture-v-portal">
    <div class="d-flex" id="wrapper">

       <?php include "../components/sidebar-module.inc.php"; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="pb-5">
            <div class="mt-5">
                <div class="container">
                    <div class="add-new-prog">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="alert alert-danger" role="alert">
                                    Your action was unsuccessfully. Please try again later
                                </div>
                                <div class="alert alert-success" role="alert">
                                    You have successfully added a new assignment.
                                </div>
                                <h2 class="make-bold">Add New Assignment</h2>
                                <p class="text-muted">Advanced Professional Certificate In Applied Corporate and Business Law</p>
                                <div class="light-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="<?php echo ROOT_DIR; ?>staff/admin-module-assignment-new.php">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Details</label>
                                                    <textarea class="form-control" rows="10"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-purple btn-bord-radius btn-block">Save Assignment</button>
                                                </div>
                                            </form>
                                            <!-- <p><a class="add-color-teal" href="<?php echo ROOT_DIR; ?>staff/admin-module-assignment.php"><i class="fa fa-chevron-left"></i> Back to Assignment list</a></p> -->
                                        </div>
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

<?php include_once('../components/footer.php'); ?>

</body>

</html>