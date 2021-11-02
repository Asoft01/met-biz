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
                <span class="profile-completion">Your Profile</span>
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
                                    <img src="../images/profile_img.jpg" class="img-upload" />
                                </div>
                                <h4>Personal Information</h4>
                                <br />
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="Mr." disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="johnson" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="date" class="form-control form-control-lg" value="4/5/1975" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-lg" value="johnson@hello.com" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="08077764400" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="Married" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="Male" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="Banana Island" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="City" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="State" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="1011011" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="float-right">
                                                <div class="form-group">
                                                    <button class="btn btn-dark" id="save">Edit Profile</button>
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
                                                <input type="text" class="form-control form-control-lg" value="Ikoyi" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="Ikoyi Phase 2" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input type="text" class="form-control form-control-lg" placeholder="Address 2" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="Eti-Osa" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="1011011" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" placeholder="PO Box" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="Lagos" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="Nigeria" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="08077764400" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="float-right">
                                                <div class="form-group">
                                                    <button class="btn btn-dark">Edit Profile</button>
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
                                                <input type="text" class="form-control form-control-lg" value="University of Manchester" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="Computer Science" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="04/04/2004" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="First Class" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg" value="Bachelors" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="float-right">
                                                <div class="form-group">
                                                    <button class="btn btn-dark">Edit Profile</button>
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
                                <div class="card">
                                    <h5 class="card-header">Managing Director</h5>
                                    <div class="card-body">
                                        <h5 class="card-title">Guaranty Trust Bank</h5>
                                        <p class="card-text">Lagos Island</p>
                                        <p class="card-text">Jan 2017 - Till Date</p>
                                        <h5>Job Description</h5>
                                        <ul>
                                            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam id quo maxime dicta perspiciatis aut aspernatur dolor! Corporis, esse, modi impedit veniam mollitia iste magni autem, a debitis cum id.</li>
                                            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam id quo maxime dicta perspiciatis aut aspernatur dolor! Corporis, esse, modi impedit veniam mollitia iste magni autem, a debitis cum id.</li>
                                            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam id quo maxime dicta perspiciatis aut aspernatur dolor! Corporis, esse, modi impedit veniam mollitia iste magni autem, a debitis cum id.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="float-right">
                                        <div class="form-group">
                                            <button class="btn btn-dark">Edit Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-upload" role="tabpanel" aria-labelledby="pills-upload-tab">
                            <div class="document-profile">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <img src="../images/test-certificate.jpg" class="card-img-top document-profile-img" alt="...">
                                            <div class="card-body">
                                                <p class="card-text">Original University Certificate</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <img src="../images/test-certificate2.jpg" class="card-img-top document-profile-img" alt="...">
                                            <div class="card-body">
                                                <p class="card-text">Statement of Result</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <img src="../images/test-certificate.jpg" class="card-img-top document-profile-img" alt="...">
                                            <div class="card-body">
                                                <p class="card-text">Valid Drivers License</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="float-right">
                                            <div class="form-group">
                                                <button class="btn btn-dark">Edit Profile</button>
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
    </div>
</div>


<?php include_once('../components/footer.php'); ?>