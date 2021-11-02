<div id="mySidenav" class="sidenav letter-space text-uppercase">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="<?php echo ROOT_DIR; ?>admin-login.php">Admin</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Startups</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Business</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">News</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Education</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Finance</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Wealth</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Opinions</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Technology</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Rankings</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Politics</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Sport</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Travels</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Career</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Design</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Environment</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Energy</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Luxury</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Retail</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Lifestyle</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Automotives</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">Photography</a>
    <a href="<?php echo ROOT_DIR; ?>category.php">International Articles</a>
</div>

<div class="location bg-lighter-1 top-location-sect">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <!-- <p class="text-white learn-count d-lg-none d-xl-none">30,000 Learners so far today</p> -->
            </div>
            <div class="col-lg-2">
                <form>
                    <select class='form-control letter-space'>
                        <option>United Arab Emirates</option>
                        <option>United Kingdom</option>
                        <option>United State of America</option>
                    </select>
                </form>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-white main-nav-bar pro-sticky-top">
    <div class="container-fluid">
        <span class="navbar-item explore-menu-icon" onclick="openNav()"><i class="fa fa-bars fa-lg text-dark"></i> <span class="make-bold text-dark explore-menu-text d-none d-lg-inline-block d-xl-inline-block">Explore</span></span>
        <a class="navbar-item" href="<?php echo ROOT_DIR; ?>index.php"><img src="<?php echo ROOT_DIR; ?>images/white-logo.png" class="img-fluid img-logo filter-inv-1" /></a>
        <!-- <h3 class="navbar-item make-bold text-white mb-0 logo-name"><a href="<?php echo ROOT_DIR; ?>">THE METRO BUSINESS</a></h3> -->
        <span class="navbar-item" id="toggle-search"><i class="fa fa-search fa-lg text-dark"></i></span>
        <div class="form-search-1 toggle-form-search bg-white">
            <?php include "components/search.inc.php"; ?>
        </div>
    </div>
</nav>

<?php include "components/ads-sect.php"; ?>

<!-- <div class="d-block d-lg-none d-xl-none">
   <div class="container-fluid">
       <div class="row">
           <div class="col-lg-12">
               <?php include "components/search.inc.php"; ?>
            </div>
        </div>
   </div>
</div> -->

<!-- The overlay -->
<div id="myPopUp" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closePop()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
      <div class="container">
          <div class="row">
             <div class="col-lg-12">
                <h2 class="navbar-item make-bold text-white mb-0 logo-name mb-3 text-center">THE METRO BUSINESS</h2>
                 <form action="search.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-lg-9">
                            <input type="text" class="form-control form-control-lg bord-rad-0" placeholder="Enter your search keywords..." />
                        </div>
                        <div class="form-group col-lg-3">
                            <button class="btn btn-red btn-lg btn-block text-uppercase letter-space bord-rad-0"><i class="fa fa-search fa-lg text-white"></i> Search</button>
                        </div>
                    </div>
                </form>
             </div>
          </div>
      </div>
  </div>

</div>