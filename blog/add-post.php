<?php include "components/config.php"; ?>
<?php include "components/doctype.inc.php"; ?>

<head>
    <?php include "components/head.inc.php"; ?>
</head>

<body>
    <?php include "components/navbar.inc.php"; ?>
    <div class="main-content">
        <div class="add-post-sect margin-spacing">
            <div class="container">
                <form action="post.php" method="POST" autocomplete="on">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2 class="post-header">Add Post</h2>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Enter Title Here" />
                            </div>
                            <div class="form-group">
                                <label>Excerpt</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Enter Excerpt Here" />
                            </div>
                            <div class="form-group">
                                <label>Body Content</label>
                                <textarea class="form-control" rows="10" cols="4"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="admin-blog-sidebar">
                                <div class="card">
                                    <h5 class="card-header bg-black text-white">Publish</h5>
                                    <div class="card-body">
                                        <ul class="list-unstyled publish-status">
                                            <li>Status: <strong>Draft</strong></li>
                                            <li>Visibility: <strong>Public</strong></li>
                                        </ul>
                                        <button type="button" class="btn btn-black btn-radius-blog" data-toggle="tooltip" data-placement="top" title="Publish Post"><i class="fa fa-upload"></i> Upload</button>
                                    </div>
                                </div>
                                <div class="card">
                                    <h5 class="card-header bg-black text-white">Category</h5>
                                    <div class="card-body">
                                        <div class="category-column-count">
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"> Business Law</label>
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"> Information Technology</label>
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"> Health & Safety</label>
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"> Business Management</label>
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"> Personal Development</label>
                                            </div>
                                        </div>
                                        <p class="mt-4">
                                            <a class="btn btn-black btn-sm" href="<?php echo ROOT_DIR; ?>categories.php">&plus; Add New Category</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="card">
                                    <h5 class="card-header bg-black text-white">Featured Image</h5>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="file" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <h5 class="card-header bg-black text-white">Thumbnail Image</h5>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="file" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="accordion" id="accordionPost">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Publish <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                        <div class="card-body">
                                            <ul class="list-unstyled publish-status">
                                                <li>Status: <strong>Draft</strong></li>
                                                <li>Visibility: <strong>Public</strong></li>
                                            </ul>
                                            <a href="<?php echo ROOT_DIR; ?>post.php" class="btn btn-black">Publish</a>
                                            <a href="#" class="btn btn-outline-danger">Delete Post</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Categories <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"> Business Law</label>
                                                </div>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"> Information Technology</label>
                                                </div>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"> Health & Safety</label>
                                                </div>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"> Business Management</label>
                                                </div>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"> Personal Development</label>
                                                </div>
                                            </form>
                                            <a class="link-black" href="<?php echo ROOT_DIR; ?>categories.php">&plus; Add New Category</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Featured Image <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group">
                                                    <input type="file" class="form-control" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Thumbnail Image <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group">
                                                    <input type="file" class="form-control" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include "components/footer.inc.php"; ?>
</body>

</html>