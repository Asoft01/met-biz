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
                                           You have successfully duplicated a component
                                        </div>
                                        <h3 class="make-bold">Duplicates Files/Modules</h3>
                                        <h5 class="text-muted">International Postgraduate Diploma In Business and Management (Level 7)</h5>
                                        <div class="card">
                                            <div class="card-body">
                                               <h4>Duplicate from programme</h4>
                                                <form>
                                                    <div class="form-group">
                                                        <label>Programme</label>
                                                        <select class="form-control">
                                                            <option selected hidden disabled>Choose ...</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-purple btn-bord-radius">Next</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <h4>Duplicate from Module</h4>
                                                <form>
                                                    <div class="form-group">
                                                        <label>Module Name</label>
                                                        <select class="form-control">
                                                            <option selected hidden disabled>Choose ...</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-purple btn-bord-radius">Next</button>
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