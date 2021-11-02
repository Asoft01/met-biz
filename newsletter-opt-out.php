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
                    <h3 class="terms-content-heading text-center">Unsubscribe to Newsletter</h3>
                    <hr />
                    <div class="preference-content">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            You've successfully unsubscribed
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="<?php echo ROOT_DIR; ?>newsletter-opt-out.php" method="post">
                            <p>Would you still like to unsubscribe? Kindly tell us why</p>
                            <div class="form-group">
                                <input class="form-check-input" type="radio" name="emailRadios" id="emailRadios1" value="option1">
                                <label class="form-check-label" for="emailRadios1">
                                    I don't remember subscribing
                                </label>
                            </div>
                            <div class="form-group">
                                <input class="form-check-input" type="radio" name="emailRadios" id="emailRadios2" value="option2">
                                <label class="form-check-label" for="emailRadios2">
                                    I receive too many emails
                                </label>
                            </div>
                            <div class="form-group">
                                <input class="form-check-input" type="radio" name="emailRadios" id="emailRadios3" value="option3">
                                <label class="form-check-label" for="emailRadios3">
                                    The content is not interesting
                                </label>
                            </div>
                            <div class="form-group">
                                <input class="form-check-input" type="radio" name="emailRadios" id="emailRadios4" value="option4">
                                <label class="form-check-label" for="emailRadios4">
                                    Others
                                </label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark btn-block">Unsubscribe</button>
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