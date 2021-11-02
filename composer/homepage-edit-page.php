<?php include("../components/compose-header.php") ?>
<div id="main">
    <?php include("../components/compose-nav.php") ?>
    <div class="content-section">
        <h2 class="text-center">Homepage Slider</h2>
        <div class="content-holder">
            <form>
                <div class="input_fields_wrap">
                    <div class="form-group">
                        <button class="add_field_button btn btn-danger">Add More Fields</button>
                    </div>
                    <div class="form-group">
                        <h6>Banner #1</h6>
                        <input type="file" class="form-control" name="myfile[1]"><br />
                        <input type="text" placeholder="Write a text on the banner" class="form-control" name="mytext[1]"><br />
                        <input type="text" placeholder="Place a link on the banner" class="form-control" name="myurl[1]"><br />
                        <select class="form-control" name="mycountry[1]">
                            <option selected disabled hidden>Please Select a country your banner will show</option>
                            <option>United Arab Emirates</option>
                            <option>United State America</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-dark btn-block">Upload <i class="fas fa-upload"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include("../components/compose-footer.php") ?>