<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<?php include "../components/main-business-nav.inc.php"; ?>

<div class="student_portal margin-top-00">
    <div class="container-fluid">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-12 statistics">
                <h1 class="mb-4 make-bold">Special Executive Master's Programme in Research Methodology</h1>
                <div class="assign-container">
                    <!-- <div class="row">
                        <div class="col-lg-8 mb-3">
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-6 mx-auto mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-2 make-bold">Puchase Course</h4>
                                    <p>
                                        <small class="mb-0 text-muted text-uppercase letter-space">
                                        <strong>Current Balance : </strong>NGN 17,660,800.00</small>
                                    </p>
                                    <p>
                                        <small class="mb-0 text-muted text-uppercase letter-space">
                                        <strong>Price of Course :</strong> NGN 318,000.00</small>
                                    </p>
                                    <hr>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="">Number of Slots</label>
                                            <input type="number" class="form-control form-control-lg" name="how_many" value="" placeholder="e.g 2, 5, 10" min="1" required="">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-purple btn-block" name="verify_purchase" value="verify_purchase">Purchase Course</button>
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


<?php include_once('../components/footer.php'); ?>