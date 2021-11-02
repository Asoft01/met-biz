<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="main-content">
    <div class="email-actions">
        <div class="container">
            <div class="row">
                <div class="col-md-2 mb-2">
                    <button class="btn btn-dark btn-block">Compose</button>
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
            <div class="col-lg-10 email-col-grid-10">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="primary-tab" data-toggle="pill" href="#primary" role="tab" aria-controls="primary" aria-selected="true"><i class="fa fa-inbox mr-2"></i>
                            Primary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="social-tab" data-toggle="pill" href="#social" role="tab" aria-controls="social" aria-selected="false"><i class="fa fa-users mr-2"></i>
                            Social</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="promotions-tab" data-toggle="pill" href="#promotions" role="tab" aria-controls="promotions" aria-selected="false"><i class="fa fa-tags mr-2"></i>
                            Promotions</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="primary" role="tabpanel" aria-labelledby="primary-tab">
                        <table class="table table-striped table-responsive-sm">

                            <tbody>
                                <tr>
                                    <td scope="row">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">

                                        </div>
                                    </td>
                                    <td><i class="fa fa-star text-muted selected"></i></td>
                                    <td><i class="fa fa-mouse-pointer text-muted"></i></td>
                                    <td>Mark Smith</td>
                                    <td> MSBM Development Lead - <span class="text-muted">Lorem ipsum dolor sit
                                            amet
                                            consectetur adipisicing elit Iusto, maiores.</span></td>
                                    <td><i class="fa fa-paperclip text-muted"></i></td>
                                    <td>1:56PM</td>
                                </tr>

                                <tr>
                                    <td scope="row">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">

                                        </div>
                                    </td>
                                    <td><i class="fa fa-star text-muted"></i></td>
                                    <td><i class="fa fa-mouse-pointer text-muted"></i></td>
                                    <td>Clementina Bach</td>
                                    <td> MSBM Development Lead - <span class="text-muted">Lorem ipsum dolor sit
                                            amet
                                            consectetur adipisicing elit Iusto, maiores. Lorem ipsum dolor sit
                                        </span></td>
                                    <td><i class="fa fa-paperclip text-muted"></i></td>
                                    <td>1:56PM</td>
                                </tr>

                                <tr>
                                    <td scope="row">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">

                                        </div>
                                    </td>
                                    <td><i class="fa fa-star text-muted"></i></td>
                                    <td><i class="fa fa-mouse-pointer text-muted"></i></td>
                                    <td>Joe Rider</td>
                                    <td> MSBM Development Lead - <span class="text-muted">Lorem ipsum dolor sit
                                            amet
                                            consectetur adipisicing elit Iusto, maiores.</span></td>
                                    <td><i class="fa fa-paperclip text-muted"></i></td>
                                    <td>1:56PM</td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">

                                        </div>
                                    </td>
                                    <td><i class="fa fa-star text-muted"></i></td>
                                    <td><i class="fa fa-mouse-pointer text-muted"></i></td>
                                    <td>Jones Wu</td>
                                    <td> MSBM Development Lead - <span class="text-muted">Lorem ipsum dolor sit
                                            amet
                                            consectetur adipisicing elit Iusto, maiores.</span></td>
                                    <td><i class="fa fa-paperclip text-muted"></i></td>
                                    <td>1:56PM</td>
                                </tr>

                                <tr>
                                    <td scope="row">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">

                                        </div>
                                    </td>
                                    <td><i class="fa fa-star text-muted"></i></td>
                                    <td><i class="fa fa-mouse-pointer text-muted"></i></td>
                                    <td>Sarah Mike</td>
                                    <td> MSBM Development Lead - <span class="text-muted">Lorem ipsum dolor sit
                                            amet
                                            consectetur adipisicing elit Iusto, maiores. Lorem ipsum dolor sit
                                        </span></td>
                                    <td><i class="fa fa-paperclip text-muted"></i></td>
                                    <td>1:56PM</td>
                                </tr>

                                <tr>
                                    <td scope="row">
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">

                                        </div>
                                    </td>
                                    <td><i class="fa fa-star text-muted"></i></td>
                                    <td><i class="fa fa-mouse-pointer text-muted"></i></td>
                                    <td>John Doe</td>
                                    <td> MSBM Development Lead - <span class="text-muted">Lorem ipsum dolor sit
                                            amet
                                            consectetur adipisicing elit Iusto, maiores.</span></td>
                                    <td><i class="fa fa-paperclip text-muted"></i></td>
                                    <td>1:56PM</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                        <p class="text-muted text-center mt-5">No Social mail received</p>
                    </div>
                    <div class="tab-pane fade" id="promotions" role="tabpanel" aria-labelledby="promotions-tab">
                        <p class="text-muted text-center mt-5">No Promotion mail received</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        Showing 1 - 25 of 300
                    </div>
                    <div class="col-5">
                        <div class="btn-group float-right">
                            <button type="button" class="btn btn-outline-secondary waves-effect"><i class="fa fa-chevron-left"></i></button>
                            <button type="button" class="btn btn-outline-secondary waves-effect"><i class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>




<?php include_once('../components/footer.php'); ?>