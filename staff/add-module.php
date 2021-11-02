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
                        <div class="text-center">
                            <img src="<?php echo ROOT_DIR; ?>images/banners/empty.png" class="img-fluid" width="150"/>
                        </div>
                        <h1 class="make-bold text-center">You do not have any module yet.</h1>

                        <div class="courses-content-container-view">
                            <div class="row">
                                <div class='col-lg-8 mx-auto'>
                                    <div class="set-instruction-sect">
                                        <h3 class="make-bold">Setup Instruction</h3>
                                        <hr/>
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="media">
                                                    <i class="fa fa-check-circle fa-lg text-success-lighten mr-2"></i>
                                                    <div class="media-body">
                                                        <h5 class="mt-0 make-bold">Add a module</h5>
                                                        <p class="text-muted font-sm">Get started by clicking the button titled "Add module" at the sidebar. You will get a pop-up. You fill in the name of the Module, the code, and the description of the module (Optional).</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="media">
                                                    <i class="fa fa-check-circle fa-lg text-success-lighten mr-2"></i>
                                                    <div class="media-body">
                                                        <h5 class="mt-0 make-bold">Add Component</h5>
                                                        <p class="text-muted font-sm">Click the Add Component button you will be shown different components to choose from such as SCORM, Videos, Quiz, Notes (HTML), Files (PDF/ Word). Select the option you want to work on.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="media">
                                                    <i class="fa fa-check-circle fa-lg text-success-lighten mr-2"></i>
                                                    <div class="media-body">
                                                        <h5 class="mt-0 make-bold">Make a prerequisite</h5>
                                                        <p class="text-muted font-sm">When you choose to make a module a prerequisite, the module will be locked until the student completes the required courses. However, unless completion requirements are set for prior modules, students will still be able to access upcoming modules.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="media">
                                                    <i class="fa fa-check-circle fa-lg text-success-lighten mr-2"></i>
                                                    <div class="media-body">
                                                        <h5 class="mt-0 make-bold">Add Materials</h5>
                                                        <p class="text-muted font-sm">Click the Add Material button and choose the content type by adding the title of the material and uploading the material. Format must be PDF or Word</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="media">
                                                    <i class="fa fa-check-circle fa-lg text-success-lighten mr-2"></i>
                                                    <div class="media-body">
                                                        <h5 class="mt-0 make-bold">Add Assignments</h5>
                                                        <p class="text-muted font-sm">Click the Add Assignment button and type the title and question of the assignment.</p>
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
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>

<?php include_once('../components/footer.php'); ?>

</body>

</html>