<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="student_portal">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-3">
                <div class="profile-stick">
                    <div class="card profile-detail">
                        <div class="profile_img_container">
                            <img src="../images/profile_img.jpg" class="img-fluid rounded-circle profile_img" />
                            <p class="text-center mt-1"><a href="">Change Upload Image <i class="fa fa-camera"></i></a></p>

                        </div>
                        <div class="card-body">
                            <div class="row profile_row">
                                <div class="col-12 text-center">

                                    <h3> Jane Doe Smith</h3>
                                </div>
                                <div class="col-12 text-center profile_position">
                                    <!-- <span><img src="../images/icons/work.svg" class="img-fluid profile_icon"></span>  --> Senior Manager at <br /> Chevron Oil and Gas
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 mx-auto text-center profile_name">
                                    Nigerian
                                </div>

                            </div>
                            <div class="col-md-12 text-center mt-3">
                                <button class="btn btn-normal">Edit your information <i class="fa fa-chevron-right slide-icon"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card help-info">
                        <div class="card-body">
                            <p>If you have any questions or get stuck please contact us in the relevant department</p>
                            <ul class="list-group list-help-issues">
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Academic Issues
                                        <span class="badge badge-pill"><i class="fa fa-briefcase"></i></span>
                                    </li>
                                </a>
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Technical Issues
                                        <span class="badge badge-pill"><i class="fa fa-server"></i></span>
                                    </li>
                                </a>
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Student Issues
                                        <span class="badge badge-pill"><i class="fa fa-graduation-cap"></i></span>
                                    </li>
                                </a>
                                <a href="" class="student-issues-list-link">
                                    <li class="list-group-item d-flex justify-content-between align-items-center student-issues-list">
                                        Finance Issues
                                        <span class="badge badge-pill"><i class="fa fa-money"></i></span>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 mx-auto statistics">
                <span class="profile-completion">Edit Your Profile</span>
                <div class="progress profile-progress" style="height: 20px;">

                    <div class="progress-bar bg-dark progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
                <div class="steps-button">
                    <ul class="nav nav-pills steps-pills row mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item col">
                            <a class="nav-link  steps-link col active" id="pills-personal-tab" data-toggle="pill" href="#pills-personal" role="tab" aria-controls="pills-personal" aria-selected="true">

                                Personal <br /><i class="fa fa-user fa-lg tab-icons"></i>
                            </a>
                        </li>
                        <li class="nav-item col">
                            <a class="nav-link steps-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                Address <br /><i class="fa fa-home fa-lg tab-icons"></i>
                            </a>
                        </li>
                        <li class="nav-item col">
                            <a class="nav-link steps-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                Education <br /><i class="fa fa-graduation-cap fa-lg tab-icons"></i>
                            </a>
                        </li>
                        <li class="nav-item col">
                            <a class="nav-link steps-link" id="pills-pro-tab" data-toggle="pill" href="#pills-pro" role="tab" aria-controls="pills-pro" aria-selected="false">
                                Professional <br /><i class="fa fa-briefcase fa-lg tab-icons"></i>
                            </a>
                        </li>
                        <li class="nav-item col">
                            <a class="nav-link steps-link" id="pills-upload-tab" data-toggle="pill" href="#pills-upload" role="tab" aria-controls="pills-upload" aria-selected="false">
                                Documents <br /><i class="fa fa-upload fa-lg tab-icons"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">
                            <div class="tab-adjustment">
                                <h4>Upload your photo</h4>
                                <div class="student-upload-photo mt-3 mb-3">
                                    <img src="../images/candidate.jpg" class="img-upload" />
                                    <button class="btn btn-dark mt-3">Upload Photo</button>
                                </div>
                                <h4>Personal Information</h4>
                                <br />
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control form-control-lg">
                                                    <option value="" disabled selected hidden>Title</option>
                                                    <option value="">Mr</option>
                                                    <option value="">Mrs</option>
                                                    <option value="">Miss</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" placeholder="Name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="date" class="form-control form-control-lg" placeholder="Date of Birth">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="email" class="form-control form-control-lg" placeholder="Email Address">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="Phone Number">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <select class="form-control form-control-lg">
                                                    <option value="" disabled selected hidden>Martial Status</option>
                                                    <option>Single</option>
                                                    <option>Married</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <select class="form-control form-control-lg">
                                                    <option value="" disabled selected hidden>Sex</option>
                                                    <option>Male</option>
                                                    <option>Female</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="Current Address">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="City">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="State">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="ZIP Code">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="float-right">
                                                <div class="form-group">
                                                    <button class="btn btn-dark" id="save">Save Changes</button>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </form>
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

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('../components/footer.php'); ?>