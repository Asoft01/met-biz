<?php include("../components/compose-header.php") ?>
<div id="main">
    <?php include("../components/compose-nav.php") ?>
    <div class="content-section">
        <h2 class="text-center">Our Story Editor</h2>
        <div class="content-holder">
            <div class="preview-box mb-4">
                <img src="../images/banners/about-msbm.jpg" class="img-preview" />
            </div>
            <form>
                <div class="form-group">
                    <input type="file" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Short description" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Heading" />
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="7" placeholder="Page content"></textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-dark btn-block">Upload <i class="fas fa-upload"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include("../components/compose-footer.php") ?>