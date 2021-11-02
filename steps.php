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
        <div class="steps-new">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="alert alert-info" role="alert">
                            Hello Ugochukwu, Let's get started
                        </div>
                        <div class="card steps-card">
                            <div class="card-header steps-new-header">
                                <i class="fa fa-user"></i> Complete Setup
                            </div>
                            <div class="card-body steps-new-body">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usernameHelp" placeholder="Username" value="ugochukwuisikaku">
                                        <small id="usernameHelp" class="form-text text-muted">We have generated a username for you. Don't like it? Change it</small>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option selected disabled hidden>Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Occupation">
                                    </div>
                                    <button type="submit" class="btn btn-dark float-right">Save and Continue</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('components/footer.php'); ?>

</body>

</html>