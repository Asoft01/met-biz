   <?php include "components/config.php" ?>
   <?php include "components/head.inc.php" ?>
   </head>

   <body>
       <?php include "components/blog-navbar.inc.php"; ?>
       <div class="main-content pad-50">
           <div class="post-list-sect">
               <div class="container">
                   <h2 class="make-bold mb-3">Posts <a href="<?php echo ROOT_DIR; ?>admin-post.php" class="btn btn-red make-bold text-uppercase letter-space">Add New</a></h2>
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="post-table">
                               <div class="table-responsive">
                                   <table class="table apply-white-space">
                                       <thead class="thead-dark">
                                           <tr>
                                               <th scope="col">Title</th>
                                               <th scope="col">Author</th>
                                               <th scope="col">Category</th>
                                               <th scope="col">Status</th>
                                               <th scope="col">Date</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           <tr>
                                               <td>
                                                   <p class="make-bold apply-ellipsis">Meghan, The Duchess of Sussex: ‘If you listen to what I actually say, it’s not controversial’</p>
                                                   <div class="d-flex">
                                                       <button data-toggle="modal" data-target="#previewModal" class="btn btn-warning btn-sm mr-2"><i class="fa fa-eye"></i> <span class="d-none d-lg-inline-block d-xl-inline-block letter-space ft-12p text-uppercase">View Post</span></button>
                                                       <a href="<?php echo ROOT_DIR; ?>admin-edit-post.php" class="btn btn-info btn-sm mr-2"><i class="fa fa-edit"></i> <span class="d-none d-lg-inline-block d-xl-inline-block letter-space ft-12p text-uppercase">Edit Post</span></a>
                                                       <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> <span class="d-none d-lg-inline-block d-xl-inline-block letter-space ft-12p text-uppercase">Delete Post</span></a>
                                                   </div>
                                               </td>
                                               <td><span class="text-muted">John Doe</span></td>
                                               <td><span class="text-muted">Wealth</span></td>
                                               <td><span class="badge badge-secondary text-uppercase letter-space">Published</span></td>
                                               <td><span class="text-muted">March 10, 2020</span></td>
                                           </tr>
                                           <tr>
                                               <td>
                                                   <p class="make-bold apply-ellipsis">Anita Hill: Why Black women are overlooked as Supreme Court nominees</p>
                                                   <div class="d-flex">
                                                       <button data-toggle="modal" data-target="#previewModal" class="btn btn-warning btn-sm mr-2"><i class="fa fa-eye"></i> <span class="d-none d-lg-inline-block d-xl-inline-block letter-space ft-12p text-uppercase">View Post</span></button>
                                                       <a href="<?php echo ROOT_DIR; ?>admin-edit-post.php" class="btn btn-info btn-sm mr-2"><i class="fa fa-edit"></i> <span class="d-none d-lg-inline-block d-xl-inline-block letter-space ft-12p text-uppercase">Edit Post</span></a>
                                                       <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> <span class="d-none d-lg-inline-block d-xl-inline-block letter-space ft-12p text-uppercase">Delete Post</span></a>
                                                   </div>
                                               </td>
                                               <td><span class="text-muted">John Doe</span></td>
                                               <td><span class="text-muted">International</span></td>
                                               <td><span class="badge badge-info text-uppercase letter-space">Draft</span></td>
                                               <td><span class="text-muted">March 10, 2020</span></td>
                                           </tr>
                                       </tbody>
                                   </table>
                               </div>
                               <div class="blog-sect-pager float-right">
                                   <div aria-label="Page navigation">
                                        <ul class="pagination float-right make-bold search-p text-uppercase ft-12p letter-space">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link" href="#">363</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <!-- Modal -->
       <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-dialog-scrollable">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="previewModalLabel">Learn new skills online with top educators</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <div class="thumb-img-box-container">
                           <img src="<?php echo ROOT_DIR; ?>images/banner.jpg" class="img-fluid ob-fit blog-image-bg" />
                       </div>
                       <hr />
                       <div class="mt-3">
                           <h5 class="make-bold text-muted">Excerpt</h5>
                           <div class="category-para">
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi similique pariatur ratione voluptatum? Maiores dolorum voluptatem soluta cumque possimus, adipisci culpa commodi! Commodi illum aliquid sed corporis veritatis labore velit?</p>
                           </div>
                       </div>
                       <hr />
                       <div class="mt-3">
                           <h5 class="make-bold text-muted">Categories</h5>
                           <div class="category-badge">
                               <span class="badge badge-info">Education</span>
                           </div>
                       </div>
                       <hr />
                       <div class="mt-3">
                           <h5 class="make-bold">Body</h5>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea totam cumque nobis consectetur autem? Deserunt explicabo recusandae distinctio unde dolorum dolor, culpa non rerum facere aliquid cumque expedita dignissimos tempora.</p>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea totam cumque nobis consectetur autem? Deserunt explicabo recusandae distinctio unde dolorum dolor, culpa non rerum facere aliquid cumque expedita dignissimos tempora.</p>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea totam cumque nobis consectetur autem? Deserunt explicabo recusandae distinctio unde dolorum dolor, culpa non rerum facere aliquid cumque expedita dignissimos tempora.</p>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea totam cumque nobis consectetur autem? Deserunt explicabo recusandae distinctio unde dolorum dolor, culpa non rerum facere aliquid cumque expedita dignissimos tempora.</p>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea totam cumque nobis consectetur autem? Deserunt explicabo recusandae distinctio unde dolorum dolor, culpa non rerum facere aliquid cumque expedita dignissimos tempora.</p>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea totam cumque nobis consectetur autem? Deserunt explicabo recusandae distinctio unde dolorum dolor, culpa non rerum facere aliquid cumque expedita dignissimos tempora.</p>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea totam cumque nobis consectetur autem? Deserunt explicabo recusandae distinctio unde dolorum dolor, culpa non rerum facere aliquid cumque expedita dignissimos tempora.</p>
                       </div>
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