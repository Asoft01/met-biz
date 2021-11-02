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
                <form action="admin-posts.php" method="POST" autocomplete="on">
                    <div class="row">
                        <div class="col-lg-8">
                            <h2 class="post-header">Edit Post</h2>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" placeholder="Enter Title Here" />
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
                                        <button type="submit" class="btn btn-black btn-radius-blog" data-toggle="tooltip" data-placement="top" title="Publish Post"><i class="fa fa-upload"></i></button>
                                        <button type="button" class="btn btn-danger btn-radius-blog" data-toggle="tooltip" data-placement="top" title="Delete Post"><i class="fa fa-trash"></i></button>
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
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include "components/footer.inc.php"; ?>
</body>

</html>