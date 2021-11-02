<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="student_portal margin-top-00">
    <div class="container">
        <p class="make-bold text-muted"><a href="<?php echo ROOT_DIR; ?>student/interactive-1.php" class="text-dark"><i class="fa fa-chevron-left text-dark"></i> Back</a></p>
        <form action="<?php echo ROOT_DIR; ?>student/interactive-5.php" method="post">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="make-bold text-center">What is Economics</h2>
                    <p class="text-center text-muted">Chapter 1 . Lesson 1 of 5</p>
                    <div class="status-container">
                        <ul class="list-unstyled circle-status-container">
                            <li class="circle-status circle-status-active"></li>
                            <li class="circle-status circle-status-active"></li>
                            <li class="circle-status circle-status-active"></li>
                            <li class="circle-status circle-status-active"></li>
                            <li class="circle-status circle-status-active"></li>
                            <li class="circle-status circle-status-active"></li>
                            <li class="circle-status circle-status-disabled"></li>
                            <li class="circle-status circle-status-disabled"></li>
                            <li class="circle-status circle-status-disabled"></li>
                            <li class="circle-status circle-status-disabled"></li>
                        </ul>
                    </div>
                    <div class="question-container-view text-center my-3">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum maiores ea voluptatibus adipisci. Beatae, ad, rerum doloribus quidem, reiciendis cumque illo illum ratione aperiam deserunt nihil hic! Ipsam, nostrum distinctio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, adipisci! Quia sit dolores porro repudiandae praesentium optio ullam facere placeat itaque molestias dolore aperiam adipisci possimus dicta quae, fuga obcaecati.</p>

                        <!-- <div class="question-interactive-img img-holder-lg mb-3">
                            <img src="<?php echo ROOT_DIR; ?>images/banners/landing-uae.jpg" class="img-fluid ob-fit-cover card-height bord-radius-10" />
                        </div>

                        <div class="question-interactive-options question-quiz-options">
                            <p class="text-muted text-uppercase">Select multiple answers</p>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="card card-height bg-success text-white">
                                        <div class="card-body">
                                            Land
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="card card-height bg-danger text-white">
                                        <div class="card-body">
                                            Minerals
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="card card-height">
                                        <div class="card-body">
                                            Technology
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="card card-height">
                                        <div class="card-body">
                                            Oil
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="question-interactive-submit d-flex justify-content-between align-items-center">
                        <div>
                            <a href="<?php echo ROOT_DIR; ?>student/interactive-3.php" class="btn btn-info btn-bord-radius btn-lg  disabled">Previous</a>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success btn-bord-radius btn-lg">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="position-fixed bottom-0 right-0 p-3" style="z-index: 5; right: 0; bottom: 0;">
  <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="50000">
    <div class="toast-header">
      <img src="<?php echo ROOT_DIR; ?>images/banners/bulb.png" class="rounded mr-2" alt="..." width="40">
      <strong class="mr-auto">Interactive Session</strong>
      <!-- <small>11 mins ago</small> -->
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
       Right. Since resources are limited, you've got a tough decision to make. Only on minerva's planet can you have your resource and eat it too.
    </div>
  </div>
</div>

<?php include_once('../components/footer.php'); ?>

<script>
    $('#liveToast').toast('show')
</script>