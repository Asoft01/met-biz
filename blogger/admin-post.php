   <?php include "components/config.php" ?>
   <?php include "components/head.inc.php" ?>
   </head>

   <body>
       <?php include "components/blog-navbar.inc.php"; ?>
       <div class="main-content pad-50">
           <div class="post-list-sect p-100">
               <div class="container">
                   <h2 class="make-bold mb-3">Add Post</h2>
                   <div class="alert alert-success letter-space text-uppercase ft-12p" role="alert">
                       You have successfully added your content.
                   </div>
                   <form>
                       <div class="row">
                           <div class="col-lg-7">
                               <div class="form-group">
                                   <label>Title</label>
                                   <input type="text" class="form-control form-control-lg" placeholder="Enter Title Here" />
                               </div>
                               <div class="form-group">
                                   <label>Excerpt</label>
                                   <input type="text" class="form-control form-control-lg" placeholder="Enter Excerpt Here" />
                               </div>
                               <div class="form-group">
                                   <label>Body Content</label>
                                   <textarea class="form-control" rows="10" cols="4"></textarea>
                               </div>
                           </div>
                           <div class="col-lg-5">
                               <div class="admin-blog-sidebar">
                                   <div class="card mb-3">
                                       <h6 class="card-header bg-dark text-white letter-space  text-uppercase">Publish</h6>
                                       <div class="card-body">
                                           <ul class="list-unstyled publish-status">
                                               <li>Status: <strong>Draft</strong></li>
                                               <li>Visibility: <strong>Public</strong></li>
                                           </ul>
                                           <div class="d-flex flex-wrap">
                                               <button type="submit" class="btn btn-success letter-space text-uppercase ft-12p mr-1 mb-2" data-toggle="tooltip" data-placement="top" title="Publish Post">Publish</button>
                                               <button type="submit" class="btn btn-info letter-space text-uppercase ft-12p mr-1 mb-2" data-toggle="tooltip" data-placement="top" title="Publish Post"><span class="d-none d-lg-inline-block d-xl-inline-block">Save as</span> Draft</button>
                                               <button type="button" class="btn btn-warning letter-space text-uppercase ft-12p mb-2" data-toggle="modal" data-target="#previewModal">Preview</button>
                                           </div>
                                           <!-- <a href="#" class="btn btn-danger btn-radius-blog" data-toggle="tooltip" data-placement="top" title="Delete Post"><i class="fa fa-trash"></i></a> -->
                                       </div>
                                   </div>

                                   <?php include "components/alert-category.php"; ?>

                                   <div class="card mb-3">
                                       <h6 class="card-header bg-dark text-white letter-space  text-uppercase">Category</h6>
                                       <div class="card-body">
                                           <div class="category-column-count">
                                               <div class="form-group form-check">
                                                   <input type="checkbox" class="form-check-input">
                                                   <label class="form-check-label"> Business</label>
                                               </div>
                                               <div class="form-group form-check">
                                                   <input type="checkbox" class="form-check-input">
                                                   <label class="form-check-label"> Startup</label>
                                               </div>
                                               <div class="form-group form-check">
                                                   <input type="checkbox" class="form-check-input">
                                                   <label class="form-check-label"> Technology</label>
                                               </div>
                                               <div class="form-group form-check">
                                                   <input type="checkbox" class="form-check-input">
                                                   <label class="form-check-label"> Sport</label>
                                               </div>
                                               <div class="form-group form-check">
                                                   <input type="checkbox" class="form-check-input">
                                                   <label class="form-check-label"> Design</label>
                                               </div>
                                           </div>
                                           <div class="mt-4">
                                               <div class="new-cat-sect hidden-sect">
                                                   <form>
                                                       <div class="form-group">
                                                           <input type="text" class="form-control" placeholder="New Category" />
                                                       </div>
                                                       <div class="form-group">
                                                           <button class="btn btn-success btn-block letter-space text-uppercase ft-12p">Add New Category</button>
                                                       </div>
                                                   </form>
                                               </div>
                                               <button class="btn btn-red btn-block btn-sm new-cat letter-space text-uppercase ft-12p"><i class="fa fa-plus"></i> Add New Category</button>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="card mb-3">
                                       <h6 class="card-header bg-dark text-white letter-space text-uppercase">Featured Image</h6>
                                       <div class="card-body">
                                           <div class="img-box-container">
                                               <img src="<?php echo ROOT_DIR; ?>images/thumb-2.jpg" class="img-fluid ob-fit featured-image-bg" />
                                           </div>
                                           <div class="form-group mt-4">
                                               <input type="file" class="form-control" />
                                           </div>
                                       </div>
                                   </div>
                                   <div class="card mb-3">
                                       <h6 class="card-header bg-dark text-white letter-space  text-uppercase">Thumbnail Image</h6>
                                       <div class="card-body">
                                           <div class="img-box-container">
                                               <img src="<?php echo ROOT_DIR; ?>images/thumb-1.jpg" class="img-fluid ob-fit featured-image-bg" />
                                           </div>
                                           <div class="form-group mt-4">
                                               <input type="file" class="form-control" />
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>

       <!-- Modal -->
       <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-dialog-scrollable">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="previewModalLabel">Education in the 21st Century</h5>
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
                               <span class="badge badge-info">co-working</span> <span class="badge badge-info">co-working</span> <span class="badge badge-info">co-working</span>
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