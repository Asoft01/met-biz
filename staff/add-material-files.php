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
                                         <div class="alert alert-danger" role="alert">
                                           Your action was unsuccessfully. Please try again later
                                        </div>
                                        <div class="alert alert-success" role="alert">
                                           You have successfully added a material
                                        </div>
                                        <h3 class="make-bold">Module Materials</h3>
                                         <div class="card">
                                            <div class="card-body">
                                                <p class="text-danger">*Only Microsoft Word or PDF documents</p>
                                                <form>
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input type="text" class='form-control' />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Upload File</label>
                                                        <input type="file" class='form-control' />
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-purple btn-bord-radius btn-block">Save Material</button>
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
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>

<?php include_once('../components/footer.php'); ?>

</body>

</html>