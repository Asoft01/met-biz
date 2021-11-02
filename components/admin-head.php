<?php include "head.inc.php"; ?>

<button onclick="topFunction()" id="backtotop" title="Go to top" class="make-bold">Top</button>

<a href="#" class="float" data-toggle="modal" data-target="#clientModal">
    <i class="fa fa-search"></i>
</a>
<a href="#" class="float-side" data-toggle="modal" data-target="#clientModal">
    <div class="d-flex align-items-center">
            <i class="fa fa-search"></i> <small class="toggle-show letter-space text-uppercase ml-1">Client Search</small>
    </div>
</a>

   <!-- Modal -->
<div class="modal fade" id="clientModal" tabindex="-1" aria-labelledby="clientModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title make-bold" id="clientModalLabel">Client Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <?php include "../components/client-search.php" ?>
      </div>
    </div>
  </div>
</div>