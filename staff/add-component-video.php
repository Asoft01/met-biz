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
                    <div class="my-5">
                        <div class="courses-content-container-view">
                             <div class="upload-course-material">
                                <div class="row">
                                    <div class="col-lg-8 mx-auto">
                                        <h3 class="make-bold">New Video</h3>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="light-card">
                                                    <p class="text-danger">*Only MP4 Videos</p>
                                                    <form action="<?php echo ROOT_DIR; ?>staff/add-module.php">
                                                        <div class="form-group">
                                                            <label><sup class="required text-bold">*</sup> Title</label>
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label><sup class="required text-bold">*</sup> Upload File</label>
                                                            <input type="file" class="form-control" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea class="form-control" rows="10"></textarea>
                                                        </div>
                                                        <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="Check1">
                                                            <label class="form-check-label" for="Check1">Make Pre-requisite</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-purple btn-bord-radius btn-block">Save Component</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
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