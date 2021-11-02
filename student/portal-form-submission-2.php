<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<style>
    .edit-portal-show{
        height: 40px;
        width: 40px;
        background-color: #ff00005e;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        color: black;
    }

    .edit-portal-show:hover{
        background-color: #5e72e4;
        color: white;
    }

    .add-sticky-top{
        position: sticky;
        top: 98px;
    }
</style>

<?php include "../components/main-student-nav.inc.php"; ?>

<div class="student_portal margin-top-00">
    <div class="container-fluid">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-10 mx-auto statistics">
                <span class="profile-completion">Edit Your Profile</span>
                <div class="progress profile-progress" style="height: 20px;">
                    <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
                <div class="steps-button">
                    <ul class="nav nav-pills steps-pills row mb-3" id="pills-payment-tab" role="tablist">
                        <li class="nav-item col">
                            <a class="nav-link  steps-link col active" id="pills-personal-tab" data-toggle="pill" href="#pills-personal" role="tab" aria-controls="pills-personal" aria-selected="false">

                                Personal
                            </a>
                        </li>
                        <li class="separator"> | </li>
                        <li class="nav-item col">
                            <a class="nav-link steps-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                Address
                            </a>
                        </li>
                        <li class="separator"> | </li>
                        <li class="nav-item col">
                            <a class="nav-link steps-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                Education
                            </a>
                        </li>
                        <li class="separator"> | </li>
                        <li class="nav-item col">
                            <a class="nav-link steps-link" id="pills-pro-tab" data-toggle="pill" href="#pills-pro" role="tab" aria-controls="pills-pro" aria-selected="false">
                                Professional
                            </a>
                        </li>
                        <li class="separator"> | </li>
                        <li class="nav-item col">
                            <a class="nav-link steps-link" id="pills-upload-tab" data-toggle="pill" href="#pills-upload" role="tab" aria-controls="pills-upload" aria-selected="false">
                                Documents
                            </a>
                        </li>
                        <li class="separator"> | </li>
                        <li class="nav-item col payment">
                            <a class="nav-link steps-link col" id="pills-payment-tab" data-toggle="pill" href="#pills-payment" role="tab" aria-controls="pills-payment" aria-selected="true">
                                Payment
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">
                            <div class="tab-adjustment">
                                <h4 class="make-bold mb-3">Personal Information</h4>
                                <div class="portal-form-information-container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card portal-form-card-view mb-3 shadow-none bg-light">
                                                <!-- <div class="card-header bg-white">
                                                    <a href="#" class="float-right edit-portal-show" data-toggle="modal" data-target="#basic-1-Modal"><i class="fa fa-edit"></i></a>
                                                </div> -->
                                                <div class="card-body portal-form-card-body-view">
                                                    <div>
                                                        <a href="#" class="float-right edit-portal-show" data-toggle="modal" data-target="#basic-1-Modal"><i class="fa fa-edit"></i></a>
                                                    </div>
                                                    <div class="portal-info-display">
                                                        <label class="make-bold">Title</label>
                                                        <p class="text-muted">Mr.</p>
                                                    </div>
                                                    <div class="portal-info-display">
                                                        <label class="make-bold">First Name</label>
                                                        <p class="text-muted">Hubert</p>
                                                    </div>
                                                    <div class="portal-info-display">
                                                        <label class="make-bold">Middle Name</label>
                                                        <p class="text-muted">Blaine</p>
                                                    </div>
                                                    <div class="portal-info-display">
                                                        <label class="make-bold">Last Name</label>
                                                        <p class="text-muted">Wolfeschlegelsteinhausenbergerdorff Sr.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card portal-form-card-view mb-3 shadow-none bg-light">
                                                <!-- <div class="card-header bg-white">
                                                    <a href="#" class="float-right edit-portal-show" data-toggle="modal" data-target="#basic-2-Modal"><i class="fa fa-edit"></i></a>
                                                </div> -->
                                                <div class="card-body portal-form-card-body-view">
                                                    <div>
                                                        <a href="#" class="float-right edit-portal-show" data-toggle="modal" data-target="#basic-2-Modal"><i class="fa fa-edit"></i></a>
                                                    </div>
                                                    <div class="portal-info-display">
                                                        <label class="make-bold">Nationality</label>
                                                        <p class="text-muted">United Arab Emirates</p>
                                                    </div>
                                                     <div class="portal-info-display">
                                                        <label class="make-bold">Country of Residence</label>
                                                        <p class="text-muted">United Kingdom</p>
                                                    </div>
                                                    <div class="portal-info-display">
                                                        <label class="make-bold">Phone Number</label>
                                                        <p class="text-muted">+44 1092780927</p>
                                                    </div>
                                                    <div class="portal-info-display">
                                                        <label class="make-bold">Gender</label>
                                                        <p class="text-muted">Male</p>
                                                    </div>
                                                    <div class="portal-info-display">
                                                        <label class="make-bold">Marital Status</label>
                                                        <p class="text-muted">Married</p>
                                                    </div>
                                                    <div class="portal-info-display">
                                                        <label class="make-bold">Date of Birth</label>
                                                        <p class="text-muted">30-04-1989</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card portal-form-card-view mb-3 shadow-none bg-light">
                                                <!-- <div class="card-header bg-white">
                                                    <a href="#" class="float-right edit-portal-show" data-toggle="modal" data-target="#basic-3-Modal"><i class="fa fa-edit"></i></a>
                                                </div> -->
                                                <div class="card-body portal-form-card-body-view">
                                                    <div>
                                                        <a href="#" class="float-right edit-portal-show" data-toggle="modal" data-target="#basic-3-Modal"><i class="fa fa-edit"></i></a>
                                                    </div>
                                                    <div class="portal-info-display">
                                                        <label class="make-bold">Current Address</label>
                                                        <p class="text-muted">Floor 6, Business Village Block B, Opposite Clock Tower, Port Saeed, Dubai, United Arab Emirates.</p>
                                                    </div>
                                                    <div class="portal-info-display">
                                                        <label class="make-bold">City</label>
                                                        <p class="text-muted">Ikeja</p>
                                                    </div>
                                                    <div class="portal-info-display">
                                                        <label class="make-bold">State</label>
                                                        <p class="text-muted">Lagos</p>
                                                    </div>
                                                    <div class="portal-info-display">
                                                        <label class="make-bold">Portal Code</label>
                                                        <p class="text-muted">101101</p>
                                                    </div>
                                                    <div class="portal-info-display">
                                                        <label class="make-bold">Country</label>
                                                        <p class="text-muted">Nigeria</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card portal-form-card-view mb-3 shadow-none bg-light add-sticky-top">
                                                <!-- <div class="card-header bg-white">
                                                    <a href="#" class="float-right edit-portal-show" data-toggle="modal" data-target="#basic-1-Modal"><i class="fa fa-edit"></i></a>
                                                </div> -->
                                                <div class="card-body portal-form-card-body-view">
                                                   <p class="text-center"><a href="!#" data-toggle="modal" data-target="#nameChangeModal" class="cursor-pointer text-dark text-underline"><i class="fa fa-exclamation-circle fa-lg text-info"></i> Please read our Change of Name Policy</a></p>
                                                    <div class="form-group text-center">
                                                        <input name="wp_full_name" type="text" class="form-control form-control-lg mb-3" id="wp_full_name" value="Isikaku Ugochukwu Godswill" maxlength="150" placeholder="Full Name" style="text-align: center;border:1px solid #e6e6e6;font-weight:bold;font-size:1.2rem" required="">

                                                        <div class="text-danger">Your full name as it should appear on your certificate</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="tab-adjustment">
                                <h4>Default Address</h4>
                                <br />
                                <form>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" placeholder="Name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="Address 1">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="Address 2">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="City">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="Postcode">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="PO Box">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="State">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="Country">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="Phone">
                                            </div>
                                        </div>



                                        <div class="col-md-12">
                                            <div class="float-right">
                                                <div class="form-group">
                                                    <button class="btn btn-dark">Save Changes</button>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="tab-adjustment">
                                <h4>Education</h4>
                                <br />
                                <form>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" placeholder="School Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" placeholder="Field of Study">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="date" class="form-control form-control-lg" placeholder="Start Date">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="Grade">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="Degree">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="float-right">
                                                <div class="form-group">
                                                    <button class="btn btn-dark">Save Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-pro" role="tabpanel" aria-labelledby="pills-pro-tab">
                            <div class="tab-adjustment">
                                <h4>Work Experience</h4>
                                <br />
                                <form>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" placeholder="Company Name">
                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="date" class="form-control form-control-lg" placeholder="Date">
                                            </div>
                                            <div class="form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="stillworking">
                                                <label class="form-check-label" for="stillworking">I still work here</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="Location">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">

                                                <textarea type="text" class="form-control form-control-lg" cols="5" rows="5" placeholder="Job Description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="float-right">
                                                <div class="form-group">
                                                    <button class="btn btn-dark">Save Changes</button>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-upload" role="tabpanel" aria-labelledby="pills-upload-tab">
                            <div class="row">
                                <div class="col-lg-12 mx-auto">

                                    <p>Please upload the necessary document to make your programme swift</p>
                                    <ul>
                                        <li>Statement of Result</li>
                                        <li>Original University Certificate</li>
                                        <li>Valid Driver License/Voters Card/International Passport</li>
                                        <li>Other important credentials</li>
                                    </ul>
                                    <div class="card my-4 shadow toggle-field">
                                        <div class="card-body">
                                            <form action="" method="post">
                                                <div id="dynamic-field-1" class="form-group dynamic-field">
                                                    <label for="field" class="font-weight-bold">Field 1</label>
                                                    <select class="form-control" name="field[]">
                                                        <option selected disabled hidden>
                                                            Select a type
                                                        </option>
                                                        <option>
                                                            Statement of Result
                                                        </option>
                                                        <option>Original University Certificate
                                                        </option>
                                                        <option>
                                                            Valid Driver License/Voters Card/International Passport
                                                        </option>
                                                        <option>
                                                            Others
                                                        </option>
                                                    </select>
                                                    <input type="file" id="" class="mt-3" />
                                                </div>
                                                <div class="clearfix mt-4">
                                                    <button type="button" id="add-button" class="btn btn-dark float-left text-uppercase shadow-sm"><i class="fa fa-plus fa-fw"></i></button>
                                                    <button type="button" id="remove-button" class="btn btn-dark float-left text-uppercase ml-1" disabled="disabled"><i class="fa fa-minus fa-fw"></i></button>
                                                    <button type="submit" class="btn btn-dark btn-sm float-right shadow-sm">Upload Document(s)</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="table-responsive-lg">
                                        <table class="table table-striped">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Format</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Statement of Result</td>
                                                    <td>PDF</td>
                                                    <td>
                                                        <badge class="badge badge-success">Uploaded</badge>
                                                    </td>
                                                    <td>31/1/2020</td>
                                                    <td><button class="btn btn-danger"><i class="fa fa-times"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>International Passport</td>
                                                    <td>JPG</td>
                                                    <td>
                                                        <badge class="badge badge-success">Uploaded</badge>
                                                    </td>
                                                    <td>31/1/2020</td>
                                                    <td><button class="btn btn-danger"><i class="fa fa-times"></i></button></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
                            <div id="carouselCourseControl" class="carousel slide" data-interval="false" data-wrap="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row flex-column-reverse flex-lg-row">
                                            <div class="col-lg-4">
                                                <div class="find course-list-msbm">
                                                    <div class="checkout-option-section">
                                                        <div class="row myflexx">
                                                            <div class="col-md-12 col-12 col-lg-12 col-xl-12 card">
                                                                <a href="" class="card-ahref-flex">
                                                                    <div class="card-img-wrap">
                                                                        <img src="<?php echo ROOT_DIR; ?>images/bg2.jpg" class="card-img-top" alt="...">
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <p class="card-text card-uni">UK Partner University</p>
                                                                        <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                                                        <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                                        <!-- <div class="row">
                                                                                <div class="col-5 mb-2">
                                                                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                                                                </div>
                                                                                <div class="col-7 mb-2">
                                                                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                                                                </div>
                                                                                <div class="col-5 mb-2">
                                                                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> &pound;  7000</p>
                                                                                </div>
                                                                                <div class="col-7 mb-2">
                                                                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                                                                </div>
                                                                            </div> -->
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 mb-2">
                                                <div class="checkout-1-container">
                                                    <div class="find card">
                                                        <div class="card-body">
                                                            <table class="table">
                                                                <thead class="thead-light">
                                                                    <tr>
                                                                        <th scope="col">Month</th>
                                                                        <th scope="col">Plan</th>
                                                                        <th scope="col">Total Fee</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">10</th>
                                                                        <td>NGN 700</td>
                                                                        <td>7,000</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <h3 class="summary-heading mt-3">Choose a Payment Plan</h3>
                                                    <form>
                                                        <div class="form-group">
                                                            <select class="form-control">
                                                                <option>1 month @ &pound;249.98/mo- 13.50% Off!</option>
                                                                <option>3 months @ &pound;239.99/mo - 16.96% Off!</option>
                                                                <option>6 months @ &pound;229.99/mo - 20.42% Off!</option>
                                                                <option>12 months @ &pound;159.99/mo - 44.64%</option>
                                                                <option>24 months @ &pound;149.99/mo - 48.10% Off!</option>
                                                                <option>36 months @ &pound;139.99/mo - 51.56%</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                    <div class="card processing-card-sect mt-5">
                                                        <div class="card-header bg-darkk text-white">
                                                            Payment Summary
                                                        </div>
                                                        <div class="card-body">
                                                            <h5 class="student-payment-detail-text">You will be charged in <strong>GBP</strong></h5>
                                                            <h3 class="student-payment-detail-text amount-exchange">NGN 22,654 = <strong>GBP</strong> 48.35</h3>
                                                            <h5 class="student-payment-detail-text">Number of month(s) paid for: 1</h5>
                                                            <h5 class="student-payment-detail-text">Outstanding Balance: 11</h5>
                                                            <img src="<?php echo ROOT_DIR; ?>images/icons/payment-logos.svg" class="img-fluid mb-3" alt="...">
                                                            <form>
                                                                <div class="form-group">
                                                                    <button class="btn btn-outline-dark btn-lg btn-block">Credit</button>
                                                                </div>
                                                            </form>
                                                            <form>
                                                                <div class="form-group">
                                                                    <button class="btn btn-outline-dark btn-lg btn-block">Dedit</button>
                                                                </div>
                                                            </form>
                                                            <form>
                                                                <div class="form-group">
                                                                    <button class="btn btn-outline-dark btn-lg btn-block">Paypal</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row flex-column-reverse flex-lg-row">
                                            <div class="col-lg-4">
                                                <div class="find course-list-msbm">
                                                    <div class="checkout-option-section">
                                                        <div class="row myflexx">
                                                            <div class="col-md-12 col-12 col-lg-12 col-xl-12 card">
                                                                <a href="" class="card-ahref-flex">
                                                                    <div class="card-img-wrap">
                                                                        <img src="<?php echo ROOT_DIR; ?>images/bg2.jpg" class="card-img-top" alt="...">
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <p class="card-text card-uni">UK Partner University</p>
                                                                        <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                                                        <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                                        <!-- <div class="row">
                                                                                <div class="col-5 mb-2">
                                                                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                                                                </div>
                                                                                <div class="col-7 mb-2">
                                                                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                                                                </div>
                                                                                <div class="col-5 mb-2">
                                                                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> &pound;  7000</p>
                                                                                </div>
                                                                                <div class="col-7 mb-2">
                                                                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                                                                </div>
                                                                            </div> -->
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 mb-2">
                                                <div class="checkout-1-container">
                                                    <h3 class="summary-heading">Payment Plan Selected <span class="text-success">Completed</span></h3>
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="form-control" class="form-control" value="1 month @ &pound;249.98/mo- 13.50% Off!" disabled />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row flex-column-reverse flex-lg-row">
                                            <div class="col-lg-4">
                                                <div class="find course-list-msbm">
                                                    <div class="checkout-option-section">
                                                        <div class="row myflexx">
                                                            <div class="col-md-12 col-12 col-lg-12 col-xl-12 card">
                                                                <a href="" class="card-ahref-flex">
                                                                    <div class="card-img-wrap">
                                                                        <img src="<?php echo ROOT_DIR; ?>images/bg2.jpg" class="card-img-top" alt="...">
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <p class="card-text card-uni">UK Partner University</p>
                                                                        <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                                                        <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                                        <!-- <div class="row">
                                                                                <div class="col-5 mb-2">
                                                                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                                                                </div>
                                                                                <div class="col-7 mb-2">
                                                                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                                                                </div>
                                                                                <div class="col-5 mb-2">
                                                                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> &pound;  7000</p>
                                                                                </div>
                                                                                <div class="col-7 mb-2">
                                                                                    <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                                                                </div>
                                                                            </div> -->
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 mb-2">
                                                <div class="checkout-1-container">
                                                    <h3 class="summary-heading">Payment Plan Selected <span class="text-warning">Ongoing</span></h3>
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="form-control" class="form-control" value="1 month @ &pound;249.98/mo- 13.50% Off!" disabled />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselCourseControl" role="button" data-slide="prev">
                                    <img src="../images/icons/back2.svg" class="img-fluid student-admin-row">
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselCourseControl" role="button" data-slide="next">
                                    <img src="../images/icons/right.svg" class="img-fluid student-admin-row">
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <p class="text-center"><a href="!#" data-toggle="modal" data-target="#nameChangeModal" class="cursor-pointer text-dark text-underline"><i class="fa fa-exclamation-circle fa-lg"></i> Please read our Change of Name Policy</a></p>
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <p class="text-center"><span data-toggle="modal" data-target="#nameChangeModal" class="cursor-pointer"><i class="fa fa-exclamation-circle fa-lg"></i></span> Your certificate name can <strong>ONLY</strong> be changed <strong style="text-decoration: underline;">ONCE</strong> <br>and can take up to 24 hours before appearing on your dashboard.</p>
                </div> -->
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="nameChangeModal" tabindex="-1" aria-labelledby="nameChangeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title make-bold" id="nameChangeModalLabel">Change of Name Policy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <ul>
            <li>The name change is strictly for name re-arrangement or introduction of a middle name.</li>
            <li>Complete name change or removal of name and introduction of a new name will be disapproved.</li>
            <li>It’s within MSBM's right to ask for a government-issued identification in order to approve a name if we are not convinced about your record.</li>
            <li>Once you complete a name change, you will no longer be able to verify the old record.</li>
            <li>You can download a new certificate in your new name once name changes are completed.</li>
            <li>MSBM withholds the total right to not allow a name change if we feel the newly introduced name belong to a new person.</li>
            <li>Your certificate name can <strong>ONLY</strong> be changed <strong style="text-decoration: underline;">ONCE</strong> and can take up to 24 hours before appearing on your dashboard.</p>
          </ul>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="basic-1-Modal" tabindex="-1" role="dialog" aria-labelledby="basic-1-ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <!-- <h5 class="modal-title make-bold" id="basic-1-ModalLabel">Edit Personal Information</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="portal-form-submission-2.php" method="post">
                <div class="form-group">
                    <label>Title</label>
                    <select class="form-control">
                        <option selected disabled hidden>Title</option>
                        <option>Mr.</option>
                        <option>Mrs.</option>
                        <option>Miss.</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" value="" />
                </div>
                <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" class="form-control" value="" />
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" value="" />
                </div>
                 <div class="form-group">
                    <button class="btn btn-purple btn-block">Update Changes</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="basic-2-Modal" tabindex="-1" role="dialog" aria-labelledby="basic-2-ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <!-- <h5 class="modal-title make-bold" id="basic-2-ModalLabel">Edit Personal Information</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="portal-form-submission-2.php" method="post">
                <div class="form-group">
                    <label>Nationality</label>
                    <select class="form-control">
                        <option selected disabled hidden>Country</option>
                        <option>Nigeria</option>
                        <option>United Arab Emirates</option>
                        <option>United Kingdom</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Country of Residence</label>
                    <select class="form-control">
                        <option selected disabled hidden>Country</option>
                        <option>Nigeria</option>
                        <option>United Arab Emirates</option>
                        <option>United Kingdom</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" value="" />
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control">
                        <option selected disabled hidden>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Marital Status</label>
                    <select class="form-control">
                        <option selected disabled hidden>Marital Status</option>
                        <option>Divorced</option>
                        <option>Married</option>
                        <option>Single</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" class="form-control" value="" />
                </div>
                 <div class="form-group">
                    <button class="btn btn-purple btn-block">Update Changes</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="basic-3-Modal" tabindex="-1" role="dialog" aria-labelledby="basic-3-ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <!-- <h5 class="modal-title make-bold" id="basic-3-ModalLabel">Edit Personal Information</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="portal-form-submission-2.php" method="post">
                <div class="form-group">
                    <label>Current Address</label>
                    <input type="text" class="form-control" value="" />
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" value="" />
                </div>
                <div class="form-group">
                    <label>State</label>
                    <input type="text" class="form-control" value="" />
                </div>
                <div class="form-group">
                    <label>Portal Code</label>
                    <input type="text" class="form-control" value="" />
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <select class="form-control">
                        <option selected disabled hidden>Country</option>
                        <option>Nigeria</option>
                        <option>United Kingdom</option>
                    </select>
                </div>
                    <div class="form-group">
                    <button class="btn btn-purple btn-block">Update Changes</button>
                </div>
            </form>
      </div>
    </div>
  </div>
</div>




<?php include_once('../components/footer.php'); ?>