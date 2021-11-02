<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<?php include "../components/main-business-nav.inc.php"; ?>

<div class="student_portal margin-top-00">
    <div class="container-fluid">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-10 mx-auto statistics">
                <h1 class="mb-4 make-bold text-center">Staff Profile</h1>

                <div class="staff-profile-details">
                    <div class="row">
                        <div class="col-lg-6 mx-auto mb-3">
                            <div class="card card-profile-details">
                                <div class="card-header bg-white">
                                    <a href="<?php echo ROOT_DIR; ?>student/business-staff-members.php" class="text-dark"><i class="fa fa-chevron-left"></i> Back to Staff Members</a>
                                </div>
                                <div class="card-body card-body-profile-details">
                                    <div class="profile-image-show-box mb-3">
                                        <img src="<?php echo ROOT_DIR; ?>images/44.jpg" alt="table-user" class="mr-2 h-100 w-100 object-fit-cover rounded-circle" />
                                    </div>

                                    <div class="profile-detail-box">
                                        <div class="profile-details-list">
                                            <h6 class="make-bold">Name</h6>
                                            <p class="mb-0">Salomey Eferemo Oluwasegun Muhammad Jennifer</p>
                                        </div>
                                        <div class="profile-details-list">
                                            <h6 class="make-bold">Email Address</h6>
                                            <p class="mb-0">salomey@gmail.com</p>
                                        </div>
                                        <div class="profile-details-list">
                                            <h6 class="make-bold">Phone Number</h6>
                                            <p class="mb-0">08085676331</p>
                                        </div>
                                        <div class="profile-details-list">
                                            <h6 class="make-bold">Nationality</h6>
                                            <p class="mb-0">Nigeria</p>
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


<?php include_once('../components/footer.php'); ?>