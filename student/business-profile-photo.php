<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<?php include "../components/main-business-nav.inc.php"; ?>

<div class="student_portal margin-top-00">
    <div class="container-fluid">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-12 statistics">
                <h4 class="mb-4 make-bold text-center">Business Profile Photo</h4>
                <div class="courses-assigned-view-sect">
                    <div class="assign-container">
                        <!-- <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>The email address does not exist. Please contact the staff to signup on MSBM.</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>You have successfully added a staff.</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>You have exceeded the amount of course to assign to a staff.</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-lg-5 mx-auto mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <small class="mb-0 text-muted text-uppercase letter-space">Upload your profile photo below</small>
                                        <hr/>
                                        <form>
                                            <div class="form-group">
                                                <label>Business Profile Photo</label>
                                                <input type="file" class="form-control form-control-lg" />
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-purple btn-block">Update Changes</button>
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


<?php include_once('../components/footer.php'); ?>