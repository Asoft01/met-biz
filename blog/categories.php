<?php include "components/config.php"; ?>
<?php include "components/doctype.inc.php"; ?>

<head>
    <?php include "components/head.inc.php"; ?>
</head>

<body>
    <?php include "components/navbar.inc.php"; ?>
    <div class="main-content">
        <div class="categories-sect margin-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="post-header">Categories</h2>
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="type" class="form-control form-control-lg" placeholder="Enter name of new category" aria-describedby="nameHelp">
                                <small id="nameHelp" class="form-text text-muted">The name is how it appears on your site</small>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" cols="5" rows="10" aria-describedby="descHelp"></textarea>
                                <small id="descHelp" class="form-text text-muted">The description is not prominent by default.</small>
                            </div>
                            <a href="<?php echo ROOT_DIR; ?>add-post.php" class="btn btn-black">Add New Category</a>
                        </form>
                    </div>
                    <div class="col-lg-7">
                        <div class="post-table margin-spacing">
                            <div class="table-responsive-lg table-overflow">
                                <table class="table table-hover table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" class="d-none d-md-table-cell">#</th>
                                            <th scope="col" class="d-none d-md-table-cell">Name</th>
                                            <th scope="col" class="d-none d-md-table-cell">Description</th>
                                            <th scope="col" class="d-none d-md-table-cell">Posts</th>
                                            <th scope="col" class="d-none d-md-table-cell">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="15" class="blog-all-post-mobile-sect">
                                                <div class="blog-all-post-mobile-v">
                                                    <h6><strong>Name:</strong> Business Management</h6>
                                                    <p><strong>Description:</strong></p>
                                                    <p><strong>Posts:</strong>0</p>
                                                    <hr />
                                                    <div class="blog-action-sm">
                                                        <a href="#" class="btn btn-info btn-radius-blog" data-toggle="tooltip" data-placement="top" title="Edit Post"><i class="fa fa-edit fa-lg"></i></a>
                                                        <a href="#" class="btn btn-danger btn-radius-blog" data-toggle="tooltip" data-placement="top" title="Delete Post"><i class="fa fa-trash fa-lg"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <th scope="row" class="d-none d-md-table-cell">1</th>
                                            <td class="d-none d-md-table-cell">Business Management</td>
                                            <td class="d-none d-md-table-cell"></td>
                                            <td class="d-none d-md-table-cell">0</td>
                                            <td class="d-none d-md-table-cell">
                                                <a href="#" class="btn btn-info btn-radius-blog" data-toggle="tooltip" data-placement="top" title="Edit Post"><i class="fa fa-edit fa-lg"></i></a>
                                                <a href="#" class="btn btn-danger btn-radius-blog" data-toggle="tooltip" data-placement="top" title="Delete Post"><i class="fa fa-trash fa-lg"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="15" class="blog-all-post-mobile-sect">
                                                <div class="blog-all-post-mobile-v">
                                                    <h6><strong>Name:</strong> Business</h6>
                                                    <p><strong>Description:</strong></p>
                                                    <p><strong>Posts:</strong>0</p>
                                                    <hr />
                                                    <div class="blog-action-sm">
                                                        <a href="#" class="btn btn-info btn-radius-blog" data-toggle="tooltip" data-placement="top" title="Edit Post"><i class="fa fa-edit fa-lg"></i></a>
                                                        <a href="#" class="btn btn-danger btn-radius-blog" data-toggle="tooltip" data-placement="top" title="Delete Post"><i class="fa fa-trash fa-lg"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <th scope="row" class="d-none d-md-table-cell">2</th>
                                            <td class="d-none d-md-table-cell">Business</td>
                                            <td class="d-none d-md-table-cell"></td>
                                            <td class="d-none d-md-table-cell">0</td>
                                            <td class="d-none d-md-table-cell">
                                                <a href="#" class="btn btn-info btn-radius-blog" data-toggle="tooltip" data-placement="top" title="Edit Post"><i class="fa fa-edit fa-lg"></i></a>
                                                <a href="#" class="btn btn-danger btn-radius-blog" data-toggle="tooltip" data-placement="top" title="Delete Post"><i class="fa fa-trash fa-lg"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="15" class="blog-all-post-mobile-sect">
                                                <div class="blog-all-post-mobile-v">
                                                    <h6><strong>Name:</strong> Personal Development</h6>
                                                    <p><strong>Description:</strong></p>
                                                    <p><strong>Posts:</strong>5</p>
                                                    <hr />
                                                    <div class="blog-action-sm">
                                                        <a href="#" class="btn btn-info btn-radius-blog" data-toggle="tooltip" data-placement="top" title="Edit Post"><i class="fa fa-edit fa-lg"></i></a>
                                                        <a href="#" class="btn btn-danger btn-radius-blog" data-toggle="tooltip" data-placement="top" title="Delete Post"><i class="fa fa-trash fa-lg"></i></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <th scope="row" class="d-none d-md-table-cell">3</th>
                                            <td class="d-none d-md-table-cell">Personal Development</td>
                                            <td class="d-none d-md-table-cell"></td>
                                            <td class="d-none d-md-table-cell">0</td>
                                            <td class="d-none d-md-table-cell">
                                                <a href="#" class="btn btn-info btn-radius-blog" data-toggle="tooltip" data-placement="top" title="Edit Post"><i class="fa fa-edit fa-lg"></i></a>
                                                <a href="#" class="btn btn-danger btn-radius-blog" data-toggle="tooltip" data-placement="top" title="Delete Post"><i class="fa fa-trash fa-lg"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <strong>Note:</strong>
                            <p>Deleting a category does not delete the posts in that category. Instead, posts that were only assigned to the deleted category are set to the category <strong>MSBM Category</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "components/footer.inc.php"; ?>
</body>

</html>