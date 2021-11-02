<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Edit Handover Message</strong></h2>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3 mb-3">
                    <div class="list-side-content-sect">
                        <div class="list-view-side">
                            <ul class="list-group">
                                <li class="list-group-item make-bold bg-dark text-white">Available User Details</li>
                                <li class="list-group-item">{%%client_title%%}</li>
                                <li class="list-group-item">{%%client_title%%}</li>
                                <li class="list-group-item">{%%client_title%%}</li>
                                <li class="list-group-item">{%%client_title%%}</li>
                                <li class="list-group-item">{%%client_title%%}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mb-3">
                    <div class="admin-staff-container">
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                <div class="light-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="" method="post" autocomplete="off">
                                                <div class="form-group">
                                                    <label for="title"><sup class="required text-bold">*</sup> Subject</label>
                                                    <div>
                                                        <input name="subject" type="text" id="subject" value="" placeholder="Enter Subject" required="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="message"><sup class="required text-bold">*</sup>Message</label>
                                                    <div>
                                                        <textarea name="message" id="message" rows="4" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-dark">Save Changes</button>
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
</body>
</htm>