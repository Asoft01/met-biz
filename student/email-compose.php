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
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="To">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Cc">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" placeholder="Bcc">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message body"></textarea>

                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-dark waves-effect waves-light m-1"><i class="fa fa-send mr-1"></i> Send</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light m-1"><i class="fa fa-trash-o mr-1"></i> Cancel</button>

                            </div>
                        </form>
                    </div> <!-- card body -->
                </div>
            </div>
        </div>

    </div>
</div>




<?php include_once('../components/footer.php'); ?>