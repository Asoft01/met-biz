   <?php include "components/config.php" ?>
   <?php include "components/head.inc.php" ?>
   </head>

   <body>
       <div class="main-content">
           <div class="blog-login bg-black">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-5 mx-auto">
                           <div class="card">
                               <div class="card-body">
                                   <div class="auth-logo text-center pb-4">
                                       <a href="<?php echo ROOT_DIR; ?>admin-login.php"><img src="<?php echo ROOT_DIR; ?>images/black-logo.png" class="img-logo" /></a>
                                   </div>
                                   <form action="admin-blog.php" method="post">
                                       <div class="form-group">
                                           <label><small class="text-uppercase letter-space">Username</small></label>
                                           <input type="text" class="form-control form-control-lg" />
                                       </div>
                                       <div class="form-group">
                                           <label><small class="text-uppercase letter-space">Password</small></label>
                                           <input type="password" class="form-control form-control-lg" />
                                       </div>
                                       <div class="form-group">
                                           <button class="btn btn-red btn-block">Log In</button>
                                       </div>
                                   </form>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <?php include "components/javascript.inc.php"; ?>
   </body>

   </html>