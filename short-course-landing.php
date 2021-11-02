<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/banners/short-course-landing.jpg);">
    <div class='overlay'></div>
    <div class="container">
        <div class="overlay-text">
            <h1>Strategy and Business Admin (Professional Certificate)</h1>
        </div>
    </div>
</div>

<div class="filters">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="row">
                        <div class="col-md-3 mt-3">
                            <select class="form-control">
                                <option>Programmes Category</option>
                                <option>Health &amp; Psychology</option>
                                <option>Literature</option>
                                <option>Politics</option>
                            </select>
                        </div>
                        <div class="col-md-3 mt-3">
                            <select class="form-control">
                                <option>Programme Type</option>
                                <option>Masters</option>
                                <option>Doctorate</option>
                                <option>Bachelor Degree</option>
                                <option>Post graducate</option>
                            </select>
                        </div>
                        <div class="col-md-3 mt-3">
                            <select class="form-control">
                                <option>Degree Type</option>
                                <option>Online</option>
                                <option>Offline</option>
                            </select>
                        </div>
                        <div class="col-md-3 mt-3">
                            <button class='btn btn-dark btn-block'>Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="main-content">
    <div class="degree-programme list-thumbnail">
        <div class="container">
            <div class='row '>
                <div class='col-lg-8 degree-info-accordion'>
                    <div class='degree-details'>
                        <div class="row pay-program">
                            <div class="col-md-6 col-12 mb-5">
                                <button class="btn btn-dark btn-lg btn-width-sm">
                                    Learn Free
                                </button>
                            </div>
                            <div class="col-md-6 col-12 mb-5">
                                <h2 class="pay-price-discount"><img src="<?php echo ROOT_DIR; ?>images/icons/discount.svg" class="img-fluid discount-icon" /> &pound; 0.00</h2>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/calendar.svg" class="mr-3 img-fluid" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Duration</h5>
                                        2 Weeks
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/support.svg" class="mr-3 img-fluid" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Efforts</h5>
                                        2 hours
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/wifi.svg" class="mr-3 img-fluid" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Format</h5>
                                        100% Online
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-5">
                                <div class="media">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="mr-3 img-fluid" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Start Time</h5>
                                        Any Time
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion mb-5" id="msbmAccordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Course Overview <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <div class="accordion" id="innerAccordion">
                                        <div class="card">
                                            <div class="card-header" id="headingInnerOne">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerOne" aria-expanded="true" aria-controls="collapseInnerOne">

                                                        <div class="media">
                                                            <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                            <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                            <div class="media-body">
                                                                MA Human Resources Management - (12 Months)
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseInnerOne" class="collapse show" aria-labelledby="headingInnerOne" data-parent="#innerAccordion">
                                                <div class="card-body">
                                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingInnerTwo">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerTwo" aria-expanded="false" aria-controls="collapseInnerTwo">
                                                        <div class="media">
                                                            <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                            <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                            <div class="media-body">
                                                                OTHM Level 7 Diploma in Accounting and Finance
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseInnerTwo" class="collapse" aria-labelledby="headingInnerTwo" data-parent="#innerAccordion">
                                                <div class="card-body">
                                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingInnerThree">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerThree" aria-expanded="false" aria-controls="collapseInnerThree">
                                                        <div class="media">
                                                            <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                            <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                            <div class="media-body">
                                                                MSc Accounting and Finance
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseInnerThree" class="collapse" aria-labelledby="headingInnerThree" data-parent="#innerAccordion">
                                                <div class="card-body">
                                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingInnerFour">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerFour" aria-expanded="false" aria-controls="collapseInnerFour">
                                                        <div class="media">
                                                            <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                            <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                            <div class="media-body">
                                                                Modules
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseInnerFour" class="collapse" aria-labelledby="headingInnerFour" data-parent="#innerAccordion">
                                                <div class="card-body">
                                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingInnerFive">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerFive" aria-expanded="false" aria-controls="collapseInnerFive">
                                                        <div class="media">
                                                            <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                            <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                            <div class="media-body">
                                                                Stage Two: MSc Accounting and Finance (Top-Up)
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseInnerFive" class="collapse" aria-labelledby="headingInnerFive" data-parent="#innerAccordion">
                                                <div class="card-body">
                                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingInnerSix">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerSix" aria-expanded="false" aria-controls="collapseInnerSix">
                                                        <div class="media">
                                                            <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                            <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                            <div class="media-body">
                                                                Accreditation
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseInnerSix" class="collapse" aria-labelledby="headingInnerSix" data-parent="#innerAccordion">
                                                <div class="card-body">
                                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingInnerSeven">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerSeven" aria-expanded="false" aria-controls="collapseInnerSeven">
                                                        <div class="media">
                                                            <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                            <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                            <div class="media-body">
                                                                UK University Certificate
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseInnerSeven" class="collapse" aria-labelledby="headingInnerSeven" data-parent="#innerAccordion">
                                                <div class="card-body">
                                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingInnerEight">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerEight" aria-expanded="false" aria-controls="collapseInnerEight">
                                                        <div class="media">
                                                            <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                            <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                            <div class="media-body">
                                                                Workshops
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseInnerEight" class="collapse" aria-labelledby="headingInnerEight" data-parent="#innerAccordion">
                                                <div class="card-body">
                                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingInnerNine">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseInnerNine" aria-expanded="false" aria-controls="collapseInnerNine">
                                                        <div class="media">
                                                            <i class="fa fa-plus-circle fa-lg mr-2"></i>
                                                            <i class="fa fa-minus-circle fa-lg mr-2"></i>
                                                            <div class="media-body">
                                                                Visa Requirements
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseInnerNine" class="collapse" aria-labelledby="headingInnerNine" data-parent="#innerAccordion">
                                                <div class="card-body">
                                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What you will learn <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How it works <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Who should Enrol <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                <div class="card-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="video-container mt-3"><iframe width="100%" height="315" src="https://www.youtube.com/embed/VMHzfubKAiA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                </div>
                <div class="col-lg-4">
                    <div class="demanding-course">
                        <div class="find course-list-msbm">
                            <div class="container">
                                <div class="row myflexx">
                                    <div class="col-md-12 col-12 col-lg-12 col-xl-12 card">
                                        <h4 class="about-content-heading">Best selling course</h4>
                                        <a href="" class="card-ahref-flex">
                                            <div class="card-img-wrap">
                                                <img src="<?php echo ROOT_DIR; ?>images/bg2.jpg" class="card-img-top" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text card-uni">UK Partner University</p>
                                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                <div class="row">
                                                    <div class="col-5 mb-2">
                                                        <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                                    </div>
                                                    <div class="col-7 mb-2">
                                                        <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                                    </div>
                                                    <div class="col-5 mb-2">
                                                        <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                                    </div>
                                                    <div class="col-7 mb-2">
                                                        <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="col-md-12 text-left">
                                            <button class="btn btn-normal">Click here to find out more<i class="fa fa-chevron-right slide-icon"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="dual-btn dual-btn-spacing">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <button class='btn btn-link mb-2 btn-block'>Learn Free</button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-dark btn-block mb-2">Learn with Certificate </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="reward-msbm mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-margin-left reward-img" style="background-image: url(images/hrm-1.jpg);"></div>
                <div class="col-md-6 middle-it no-margin-right reward-content" style="display: flex;justify-content: center; align-items: center;">
                    <div class="row">
                        <div class="col-md-8 mx-auto">
                            <h3>Impress your Employer with your new certificate</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="find course-list-msbm mt-3" id="seminar">
        <div class="container">
            <p class="heading-find">See other related short courses</p>
            <div class="row myflexx">
                <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/bg2.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text card-uni">UK Partner University</p>
                            <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                            <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="row">
                                <div class="col-5 mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                </div>
                                <div class="col-7 mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                </div>
                                <div class="col-5 mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                </div>
                                <div class="col-7 mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                </div>
                            </div>
                            <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find More</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text card-uni">UK Partner University</p>
                            <h6 class="card-title">BBA<br>Bachelor of Business</h6>
                            <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="row">
                                <div class="col-5 mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                </div>
                                <div class="col-7 mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                </div>
                                <div class="col-5 mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                </div>
                                <div class="col-7 mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                </div>
                            </div>
                            <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find More</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/bg8.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text card-uni">UK Partner University</p>
                            <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                            <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <div class="row">
                                <div class="col-5 mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                </div>
                                <div class="col-7 mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                </div>
                                <div class="col-5 mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                </div>
                                <div class="col-7 mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                </div>
                            </div>
                            <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find More</button>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-12 col-lg-6 col-xl-3 card">
                    <a href="" class="card-ahref-flex">
                        <div class="card-img-wrap">
                            <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text card-uni">UK Partner University</p>
                            <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                            <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
                            <div class="row">
                                <div class="col-5 mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                </div>
                                <div class="col-7 mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                </div>
                                <div class="col-5 mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                </div>
                                <div class="col-7 mb-2">
                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                </div>
                            </div>
                            <div class="card-info-btn">
                                <button class="btn btn-dark btn-block mt-auto">Find More</button>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-normal">View more short courses in Nigeria <i class="fa fa-chevron-right slide-icon"></i></button>
            </div>
        </div>
    </div>
</div>

<?php include_once('components/footer.php'); ?>

</body>

</html>