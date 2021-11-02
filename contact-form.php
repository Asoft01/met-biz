<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/banners/certificate-degree.jpg);">
    <div class='overlay'></div>
    <div class="container">
        <div class="overlay-text">
            <h1>Contact Us - Need Help?</h1>
        </div>
    </div>
</div>

<div class="main-content">
    <div class="contact-us">
        <div class="container">
            <div class='row'>
                <div class="col-lg-8 mx-auto">
                    <div class="contact-us-form">
                        <div class="text-center">
                            <h2>Send us a message</h2>
                            <p>If you wish to get in touch with us ...</p>
                        </div>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="" value="Feedback" disabled>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" cols="5" rows="5" placeholder="Please enter your message ..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block">Submit</button>
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