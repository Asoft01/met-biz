<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<style>
    .preference-content label {
        display: flex;
    }

    .preference-content .form-group {
        display: block;
        margin-bottom: 30px;
        word-break: break-word;
    }

    .preference-content .form-group input {
        padding: 0;
        height: initial;
        width: initial;
        margin-bottom: 0;
        display: none;
        cursor: pointer;
    }

    .preference-content .form-group label {
        position: relative;
        cursor: pointer;
    }

    .preference-content .form-group label:before {
        content: "";
        -webkit-appearance: none;
        background-color: transparent;
        border: 2px solid #333;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05),
            inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
        padding: 10px;
        display: inline-block;
        position: relative;
        vertical-align: middle;
        cursor: pointer;
        height: 20px;
        width: 20px;
        margin-right: 25px;
    }

    .preference-content .form-group input:checked+label:before {
        content: "";
        -webkit-appearance: none;
        background-color: transparent;
        border: 2px solid #0079bf;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05),
            inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
        padding: 10px;
        display: inline-block;
        position: relative;
        vertical-align: middle;
        cursor: pointer;
        margin-right: 25px;
    }

    .preference-content .form-group input:checked+label:after {
        content: "";
        display: block;
        position: absolute;
        top: 2px;
        left: 9px;
        width: 6px;
        height: 14px;
        border: solid #0079bf;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }

    .preference-content p {
        font-weight: 700;
        font-size: 1.3rem;
    }
</style>


<div class="main-content">
    <div class="newsletter-preference">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <h3 class="terms-content-heading text-center">Email Preferences</h3>
                    <hr />
                    <div class="preference-content">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            You have successfully updated your email newsletter preferences. <a href="<?php echo ROOT_DIR; ?>">Go Back to Homepage</a>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?php echo ROOT_DIR; ?>newsletter-preference.php" method="post">
                            <div class="form-group">
                                <input type="checkbox" id="q1-1" checked>
                                <label for="q1-1">Email me about the courses I've joined</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="q1-2">
                                <label for="q1-2">Email me extra information about the courses I've joined, and other relevant courses or products</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="q1-3">
                                <label for="q1-3">Email me about new courses and recommendations</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="q1-4">
                                <label for="q1-4">Email me invitations to take part in research carried out by MSBM and our partner organisations</label>
                            </div>
                            <p>How often do you want to receive programme update?</p>
                            <div class="form-group">
                                <input class="form-check-input" type="radio" name="emailRadios" id="emailRadios1" value="option1">
                                <label class="form-check-label" for="emailRadios1">
                                    Once a week
                                </label>
                            </div>
                            <div class="form-group">
                                <input class="form-check-input" type="radio" name="emailRadios" id="emailRadios2" value="option2">
                                <label class="form-check-label" for="emailRadios2">
                                    Thrice a week
                                </label>
                            </div>
                            <div class="form-group">
                                <input class="form-check-input" type="radio" name="emailRadios" id="emailRadios3" value="option3">
                                <label class="form-check-label" for="emailRadios3">
                                    Once a month
                                </label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark btn-block">Save Preferences</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('components/footer.php'); ?>

</body>

</html>