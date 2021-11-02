<?php include_once('components/config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo ROOT_DIR; ?>css/bootstrap.min.css">
    <link href="<?php echo ROOT_DIR; ?>css/europa-156337870.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ROOT_DIR; ?>css/course-landing.css">
    <link rel="stylesheet" href="<?php echo ROOT_DIR; ?>css/style.css">

    <title>Metropolitan School of Business Management London, UK - MSBM UK</title>
</head>
<style>
.under-maintenance-sect {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    height: 100vh;
    background-image: linear-gradient(0deg,
            rgba(0, 0, 0, 1) 10%,
            transparent 100%),
        url(images/banners/under-maintenance.jpg);
    background-position: top center;
    background-size: contain;
    background-repeat: no-repeat;
    color: #fff;
}

.not-found-container {
    width: 50%;
}

.under-maintenance-sect h2 {
    font-weight: 700;
    font-size: 3rem;
}

.under-maintenance-sect h1 {
    font-weight: 700;
    font-size: 4rem;
}

@media screen and (max-width: 768px) {
    .under-maintenance-sect h1 {
        font-weight: 700;
        font-size: 2.5rem;
    }

    /* .under-maintenance-sect {
        align-items: flex-end;
    } */
    .not-found-container {
        margin-top: 150px;
        width: 90%;
    }

    .not-found-text {
        font-size: 18px;
    }
}
</style>

<body>
    <div class="under-maintenance-sect">
        <div class="not-found-container">
            <div class="not-found-text">
                <img class="mb-3" src="<?php echo ROOT_DIR; ?>images/White-Logo-1.svg" width="170">
                <h1>Under Maintenance</h1>
                <!-- <h2>This page doesn’t exist.</h2> -->
                <p>Our site is down for emergency maintenance. We apologize for any inconvenience, we will be back and
                    running in a couple of hours. Thanks for your understanding. For any enquiry contact info@msbm.org.uk.</p>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo ROOT_DIR; ?>js/jquery.js"></script>
    <script src="<?php echo ROOT_DIR; ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo ROOT_DIR; ?>js/Chart.min.js"></script>
    <script src="<?php echo ROOT_DIR; ?>js/jquery.easypiechart.min.js"></script>
    <script src="<?php echo ROOT_DIR; ?>js/easy-pie-chart.init.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?php echo ROOT_DIR; ?>js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo ROOT_DIR; ?>js/script.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
    tinymce.init({
        selector: 'textarea'
    });
    </script>
    <script>
    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 70) {
                $(".pro-sticky-top.navigator .navbar-brand img").attr(
                    "src",
                    "<?php echo ROOT_DIR; ?>images/White-Logo-1.png"
                );
            }
            if ($(this).scrollTop() < 70) {
                $(".pro-sticky-top.navigator .navbar-brand img").attr(
                    "src",
                    "<?php echo ROOT_DIR; ?>images/White-Logo-1.svg"
                );
            }
        });
    });
    </script>

</body>

</html>