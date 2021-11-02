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
                        <h2 class="make-bold">Choose a Component</h2>
                        <div class="courses-content-container-view">
                            <div class="row">
                                <div class="col-lg-4 mb-3">
                                    <a href="<?php echo ROOT_DIR; ?>staff/add-component-scorm.php" class="courses-content-link">
                                        <div class="card card-height">
                                            <div class="card-body text-center">
                                                <img src="<?php echo ROOT_DIR; ?>images/banners/video-scorm.png" class="img-fluid mb-4" width="80" />
                                                <h4 class="make-bold text-dark">SCORM</h4>
                                                <p class="text-muted font-sm">Get started by adding title of the course, description, make course pre-requisite and upload course (It must only be zipped files).</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <a href="<?php echo ROOT_DIR; ?>staff/add-component-video.php" class="courses-content-link">
                                        <div class="card card-height">
                                            <div class="card-body text-center">
                                                <img src="<?php echo ROOT_DIR; ?>images/banners/video-view.png" class="img-fluid mb-4" width="80" />
                                                <h4 class="make-bold text-dark">Video (Upload)</h4>
                                                <p class="text-muted font-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum qui laudantium ea voluptate illo illum excepturi perferendis officia.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <a href="<?php echo ROOT_DIR; ?>staff/add-component-quiz.php" class="courses-content-link">
                                        <div class="card card-height">
                                            <div class="card-body text-center">
                                                <img src="<?php echo ROOT_DIR; ?>images/banners/choose.png" class="img-fluid mb-4" width="80" />
                                                <h4 class="make-bold text-dark">Quiz</h4>
                                                <p class="text-muted font-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum qui laudantium ea voluptate illo illum excepturi perferendis officia.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <a href="<?php echo ROOT_DIR; ?>staff/add-component-notes.php" class="courses-content-link">
                                        <div class="card card-height">
                                            <div class="card-body text-center">
                                                <img src="<?php echo ROOT_DIR; ?>images/banners/notes.png" class="img-fluid mb-4" width="80" />
                                                <h4 class="make-bold text-dark">Note (HTML)</h4>
                                                <p class="text-muted font-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum qui laudantium ea voluptate illo illum excepturi perferendis officia, vitae laborum facere sint, vel unde eveniet doloribus quisquam incidunt temporibus? Rerum?</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <a href="<?php echo ROOT_DIR; ?>staff/add-component-files.php" class="courses-content-link">
                                        <div class="card card-height">
                                            <div class="card-body text-center">
                                                <img src="<?php echo ROOT_DIR; ?>images/banners/folder.png" class="img-fluid mb-4" width="80" />
                                                <h4 class="make-bold text-dark">Files (PDF/Word)</h4>
                                                <p class="text-muted font-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum qui laudantium ea voluptate illo illum excepturi perferendis officia.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- <div class="col-lg-4 mb-3">
                                    <a href="<?php echo ROOT_DIR; ?>staff/add-component-duplicate.php" class="courses-content-link">
                                        <div class="card card-height">
                                            <div class="card-body text-center">
                                                <img src="<?php echo ROOT_DIR; ?>images/banners/duplicate.png" class="img-fluid mb-4" width="80" />
                                                <h4 class="make-bold text-dark">Duplicate from another module</h4>
                                                <p class="text-muted font-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum qui laudantium ea voluptate illo illum excepturi perferendis officia.</p>
                                            </div>
                                        </div>
                                    </a>
                                </div> -->
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