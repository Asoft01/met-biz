<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top shadow">
    <div class="container-fluid">
        <div class="interactive-header-top d-flex justify-content-between w-100 align-items-center">
            <a href="#" class="d-none d-xl-inline-block d-lg-inline-block" data-toggle="modal" data-target="#backHomeInteractiveModal">
               <img src="<?php echo ROOT_DIR; ?>images/banners/main-logo-white.png" class="img-fluid" width="150" />
            </a>
             <a href="<?php echo ROOT_DIR; ?>" class="exit-interactive-session text-white a-decoration-remove d-inline-block d-xl-none d-lg-none" data-toggle="modal" data-target="#backHomeInteractiveModal">
                <h5 class="mb-0"><i class="fa fa-home fa-lg"></i> <span class="d-none d-lg-inline-block d-xl-inline-block">Home</span></h5>
            </a>
            <div class="status-container">
                <ul class="list-unstyled circle-status-container mb-0">
                    <a href="<?php echo ROOT_DIR; ?>student/interactive-3.php"><li class="circle-status circle-status-active"></li></a>
                    <a href="<?php echo ROOT_DIR; ?>student/interactive-4.php"><li class="circle-status circle-status-active"></li></a>
                    <a href="<?php echo ROOT_DIR; ?>student/interactive-5.php"><li class="circle-status circle-status-active"></li></a>
                    <a href="<?php echo ROOT_DIR; ?>student/interactive-6.php"><li class="circle-status circle-status-active"></li></a>
                    <a href="<?php echo ROOT_DIR; ?>student/interactive-7.php"><li class="circle-status circle-status-active"></li></a>
                    <a href="<?php echo ROOT_DIR; ?>student/interactive-8.php"><li class="circle-status circle-status-active"></li></a>
                    <a href="<?php echo ROOT_DIR; ?>student/interactive-9.php"><li class="circle-status circle-status-disabled"></li></a>
                    <a href="<?php echo ROOT_DIR; ?>student/interactive-3.php"><li class="circle-status circle-status-disabled"></li></a>
                    <a href="<?php echo ROOT_DIR; ?>student/interactive-4.php"><li class="circle-status circle-status-disabled"></li></a>
                    <a href="<?php echo ROOT_DIR; ?>student/interactive-5.php"><li class="circle-status circle-status-disabled"></li></a>
                    <a href="<?php echo ROOT_DIR; ?>student/interactive-6.php"><li class="circle-status circle-status-disabled"></li></a>
                    <a href="<?php echo ROOT_DIR; ?>student/interactive-7.php"><li class="circle-status circle-status-disabled"></li></a>
                    <a href="<?php echo ROOT_DIR; ?>student/interactive-8.php"><li class="circle-status circle-status-disabled"></li></a>
                </ul>
                <small class="mb-0 text-white">Match each prompt with an answer</small>
            </div>
             <a href="<?php echo ROOT_DIR; ?>interactive-2.php" class="exit-interactive-session text-white a-decoration-remove" data-toggle="modal" data-target="#endInteractiveModal">
                <h5 class="mb-0"><i class="fa fa-times"></i> <span class="d-none d-lg-inline-block d-xl-inline-block">End Interactive</span></h5>
            </a>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="endInteractiveModal" tabindex="-1" role="dialog" aria-labelledby="endInteractiveModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="endInteractiveModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center">
            <img src="<?php echo ROOT_DIR; ?>images/banners/close-platform.png" class="img-fluid mb-3" width="80" />
            <h4 class="make-bold">End Interactive</h4>
            <p class="text-muted">Do you really want to end your interactive session? This process can not be undone.</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-bord-radius" data-dismiss="modal">Cancel</button>
        <a href="<?php echo ROOT_DIR; ?>student/interactive-1.php" class="btn btn-danger btn-bord-radius">Yes, End Interactive</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="backHomeInteractiveModal" tabindex="-1" role="dialog" aria-labelledby="backHomeInteractiveModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="backHomeInteractiveModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center">
            <img src="<?php echo ROOT_DIR; ?>images/banners/back-dashboard.png" class="img-fluid mb-3" width="80" />
            <h4 class="make-bold">Are you sure?</h4>
            <p class="text-muted">You want to leave the Interactive session and go back to your dashboard? This process can not be undone.</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-bord-radius" data-dismiss="modal">Cancel</button>
        <a href="#" class="btn btn-danger btn-bord-radius">Yes, Go back to Dashboard</a>
      </div>
    </div>
  </div>
</div>