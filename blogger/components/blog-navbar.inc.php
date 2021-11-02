 <nav class="navbar navbar-expand-lg navbar-light bg-white">
     <div class="container-fluid">
         <a class="navbar-brand nav-logo" href="<?php echo ROOT_DIR; ?>admin-blog.php">
             <img src="<?php echo ROOT_DIR; ?>images/black-logo.png" class="img-logo" />
         </a>
         <!-- <div class="action-btn">
             <a href="<?php echo ROOT_DIR; ?>blog-content.php" class="nav-link xtra-10p btn btn-red make-bold text-uppercase letter-space">View Blog</a>
         </div> -->
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ml-auto text-uppercase letter-space ft-12p">
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Posts
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>admin-blog.php">All Posts</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>admin-post.php">Add New</a>
                     </div>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="<?php echo ROOT_DIR; ?>admin-category.php">Categories</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="<?php echo ROOT_DIR; ?>">View Blog</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="<?php echo ROOT_DIR; ?>admin-login.php">Log Out</a>
                 </li>
                 <!-- <li class="nav-item">
                     <a class="nav-link" href="<?php echo ROOT_DIR; ?>about.php">About us</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="<?php echo ROOT_DIR; ?>blog.php">Blog</a>
                 </li> -->
             </ul>
         </div>
     </div>
 </nav>