<?php include_once('components/config.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/europa-156337870.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-darkk">
        <div class="container">
            <a class="navbar-brand mr-3" href="#"><img src="images/White-Logo-1.svg" width="120"></a>
        </div>
    </nav>

    <div class="main-content">
        <div class="email-opt">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <h1 class="text-center newsletter-heading">Newsletter</h1>
                        <div class="row">
                            <div class="col-md-6 newsletter-cols">
                                <h6>How often do you want to receive programme update?</h6>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Thrice a week</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Once a week</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio3">Once a month</label>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-dark">Update my preference</button>
                                </div>
                            </div>
                            <div class="col-md-6 newsletter-cols">
                                <h6>Would you still like to unsubscribe? Kindly tell us why</h6>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio4">I don't remember subscribing</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio5">I receive too many emails</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio6">The content is not interesting</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio7" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio7">Other</label>
                                </div>
                                <form class="form-inline mt-3">
                                    <div class="form-group mb-2">
                                        <input type="email" class="form-control" id="email-sub" placeholder="Email Address">
                                    </div>
                                    <button type="submit" class="btn btn-dark mb-2">Unsubscribe</button>
                                </form>
                            </div>
                            <div class="col-md-6 newsletter-cols">
                                <h6>Promo- No longer want special programme update?</h6>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch8">
                                    <label class="custom-control-label" for="customSwitch8"> Not Interested</label>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-dark">Unsubscribe</button>
                                </div>
                            </div>
                            <div class="col-md-6 newsletter-cols">
                                <h6>Am no longer interested in your programme delete me from your database</h6>
                                <div class="mt-3">
                                    <button class="btn btn-dark">Remove me from email list</button>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <button class="btn btn-normal">Opt out of all alerts, newsletters and promos <i class="fa fa-chevron-right slide-icon"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('components/footer.php'); ?>

</body>

</html>