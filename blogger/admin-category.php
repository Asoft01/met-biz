   <?php include "components/config.php" ?>
   <?php include "components/head.inc.php" ?>
   </head>

   <body>
       <?php include "components/blog-navbar.inc.php"; ?>
       <div class="main-content pad-50">
           <div class="post-list-sect">
               <div class="container">
                   <h2 class="make-bold mb-3">Add New Category</h2>
                   <div class="alert alert-success letter-space text-uppercase ft-12p" role="alert">
                       You have successfully added a new category.
                   </div>
                   <div class="alert alert-warning letter-space text-uppercase ft-12p" role="alert">
                       You have successfully updated a category.
                   </div>
                   <div class="row">
                       <div class="col-lg-5 mb-4">
                           <h3 class="post-header make-bold">Categories</h3>
                           <form>
                               <div class="form-group">
                                   <label>Name</label>
                                   <input type="type" class="form-control" placeholder="Enter name of new category" aria-describedby="nameHelp">
                                   <small id="nameHelp" class="form-text text-muted">The name is how it appears on your site</small>
                               </div>
                               <div class="form-group">
                                   <label>Description</label>
                                   <textarea class="form-control" cols="5" rows="10" aria-describedby="descHelp"></textarea>
                                   <small id="descHelp" class="form-text text-muted">The description is not prominent by default.</small>
                               </div>
                               <a href="<?php echo ROOT_DIR; ?>" class="btn btn-red bord-rad-0 btn-block letter-space ft-12p text-uppercase">Add New Category</a>
                           </form>
                       </div>
                       <div class="col-lg-7 mb-4">
                           <div class="table-responsive">
                               <table class="table apply-white-space">
                                   <thead class="thead-dark">
                                       <tr>
                                           <th scope="col">#</th>
                                           <th scope="col">Name</th>
                                           <th scope="col">Description</th>
                                           <th scope="col">Posts</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <th scope="row">1</th>
                                           <td>
                                              Business<br />
                                               <div class="d-flex">
                                                   <a href="" class="btn btn-info btn-sm mr-2"><i class="fa fa-edit"></i> <span class="d-none d-lg-inline-block d-xl-inline-block letter-space ft-12p text-uppercase">Edit</span></a>
                                                   <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> <span class="d-none d-lg-inline-block d-xl-inline-block letter-space ft-12p text-uppercase">Delete</span></a>
                                               </div>
                                           </td>
                                           <td>
                                               <button data-toggle="modal" data-target="#seedescriptionModal" class="btn btn-secondary btn-sm letter-space ft-12p text-uppercase">See Description</button>
                                           </td>
                                           <td>10</td>
                                       </tr>
                                       <tr>
                                           <th scope="row">2</th>
                                           <td>
                                               Startup<br />
                                               <div class="d-flex">
                                                   <a href="" class="btn btn-info btn-sm mr-2"><i class="fa fa-edit"></i> <span class="d-none d-lg-inline-block d-xl-inline-block letter-space ft-12p text-uppercase">Edit</span></a>
                                                   <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> <span class="d-none d-lg-inline-block d-xl-inline-block letter-space ft-12p text-uppercase">Delete</span></a>
                                               </div>
                                           </td>
                                           <td>
                                               <button data-toggle="modal" data-target="#seedescriptionModal" class="btn btn-secondary btn-sm letter-space ft-12p text-uppercase">See Description</button>
                                           </td>
                                           <td>2</td>
                                       </tr>
                                       <tr>
                                           <th scope="row">3</th>
                                           <td>
                                               Technology<br />
                                               <div class="d-flex">
                                                   <a href="" class="btn btn-info btn-sm mr-2"><i class="fa fa-edit"></i> <span class="d-none d-lg-inline-block d-xl-inline-block letter-space ft-12p text-uppercase">Edit</span></a>
                                                   <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> <span class="d-none d-lg-inline-block d-xl-inline-block letter-space ft-12p text-uppercase">Delete</span></a>
                                               </div>
                                           </td>
                                           <td>
                                               <button data-toggle="modal" data-target="#seedescriptionModal" class="btn btn-secondary btn-sm letter-space ft-12p text-uppercase">See Description</button>
                                           </td>
                                           <td>7</td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                           <div class="mt-4">
                               <strong>Note:</strong>
                               <p>Deleting a category does not delete the posts in that category. Instead, posts that were only assigned to the deleted category are set to the category <strong>The Metro Business Magazine Category</strong>.</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <!-- Modal -->
       <div class="modal fade" id="seedescriptionModal" tabindex="-1" aria-labelledby="seedescriptionModalLabel" aria-hidden="true">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="seedescriptionModalLabel">Technology</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <h5 class="make-bold">Description</h5>
                       <p>News, analysis, and insight into technology and business, including Silicon Valley giants like Apple, Google, Facebook, and our annual Brainstorm Tech conference.</p>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   </div>
               </div>
           </div>
       </div>

       <?php include "components/blog-footer.inc.php"; ?>
       <?php include "components/javascript.inc.php"; ?>
   </body>

   </html>