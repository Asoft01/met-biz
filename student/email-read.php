<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="main-content">
    <div class="email-actions">
        <div class="container">
            <div class="row">
                <div class="col-md-2 mb-2">
                    <button class="btn btn-dark btn-block">Back to Inbox</button>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-lg-8 mb-2">
                            <div class="btn-toolbar" role="toolbar">
                                <div class="btn-group mr-1">
                                    <button type="button" class="btn btn-outline-dark waves-effect waves-light"><i class="fa fa-inbox"></i></button>
                                    <button type="button" class="btn btn-outline-dark waves-effect waves-light"><i class="fa fa-refresh"></i></button>
                                    <button type="button" class="btn btn-outline-dark waves-effect waves-light"><i class="fa fa-trash-o"></i></button>
                                </div>
                                <div class="btn-group mr-1">
                                    <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-folder"></i>
                                        <b class="caret"></b>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="javaScript:void();" class="dropdown-item">Action</a>
                                        <a href="javaScript:void();" class="dropdown-item">Another action</a>
                                        <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                                <div class="btn-group mr-1">
                                    <button type="button" class="btn btn-outline-dark waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-tag"></i>
                                        <b class="caret"></b>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="javaScript:void();" class="dropdown-item">Action</a>
                                        <a href="javaScript:void();" class="dropdown-item">Another action</a>
                                        <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-dark waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        More
                                        <span class="caret"></span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="javaScript:void();" class="dropdown-item">Action</a>
                                        <a href="javaScript:void();" class="dropdown-item">Another action</a>
                                        <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4 mb-2">
                            <div class="position-relative has-icon-right">
                                <input type="text" class="form-control" placeholder="search mail">

                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="email-structure">
    <div class="container">
        <div class="row email-row flex-column-reverse flex-lg-row">
            <div class="col-lg-2 email-col-grid-2 ">
                <ul class="list-group list-group-flush list-email-item">
                    <li class="list-group-item"><a href="">Inbox</a></li>
                    <li class="list-group-item"><a href="">Starred</a></li>
                    <li class="list-group-item"><a href="">Snoozed</a></li>
                    <li class="list-group-item"><a href="">Important</a></li>
                    <li class="list-group-item"><a href="">Sent</a></li>
                    <li class="list-group-item"><a href="">Draft</a></li>
                    <li class="list-group-item"><a href="">Outbox</a></li>
                </ul>
            </div>
            <div class="col-lg-10 email-col-grid-10 mb-2">
                <div class="card mt-3 shadow-none border">
                    <div class="card-body">
                        <div class="media mb-3">
                            <img src="../images/profile_img.jpg" class="rounded-circle mr-3 mail-img shadow" alt="media image">
                            <div class="media-body">
                                <span class="media-meta float-right">08:22 AM</span>
                                <h4 class="text-dark m-0">Jhon Deo</h4>
                                <small class="text-muted">From : info@example.com</small>
                            </div>
                        </div> <!-- media -->

                        <p><b>Hi Sir...</b></p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                        <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,</p>
                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>

                        <hr>
                        <h6> <i class="fa fa-paperclip mr-2"></i> Attachments <span>(2)</span> </h6>
                        <div class="container">
                            <div class="row d-flex flex-column">
                                <div class="mb-2">
                                    <a href="javascript:void();" class="btn btn-dark">Document1 Item <i class="fa fa-download"></i></a>
                                </div>
                                <div class="mb-2">
                                    <a href="javascript:void();" class="btn btn-dark">Document2 Item <i class="fa fa-download"></i></a>
                                </div>

                                <div class="mb-2">
                                    <a href="javascript:void();" class="btn btn-dark">Document3 Item <i class="fa fa-download"></i></a>
                                </div>
                            </div>
                        </div>

                        <form class="mt-3">
                            <div class="form-group">
                                <textarea class="form-control" rows="9" placeholder="Reply here..."></textarea>
                            </div>
                        </form>

                        <div class="text-right">
                            <button type="button" class="btn btn-dark waves-effect waves-light mt-3"><i class="fa fa-send mr-1"></i> Send</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




<?php include_once('../components/footer.php'); ?>