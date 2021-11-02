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
            <div class="col-lg-9">
                <div class="card assignment-info acad-issues">
                    <div class="card-header assignment-title acad-header">
                        <div class="row">
                            <div class="col-6">
                                <div class="mt-2">
                                    <i class="fa fa-briefcase"></i> Academic Issues
                                </div>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-dark float-right"><i class="fa fa-arrow-left"></i> Back to List</button>
                            </div>
                        </div>


                    </div>
                    <div class="card-body assignment-modules">
                        <div class="card">
                            <div class="card-header">
                                Unable to access my assignment
                            </div>
                            <div class="card-body acad-details-info">
                                <table class="table table-striped assignment-table-info">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">From</th>
                                            <th scope="col">Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Jan 30, 2020 - 1:30pm</th>
                                            <td>Me</td>
                                            <td>Open</td>

                                        </tr>

                                    </tbody>
                                </table>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam deserunt possimus magni quasi laborum, ratione eveniet repellat expedita vitae voluptas nesciunt omnis eos totam at ipsam ducimus et voluptatum vel.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae magni amet ex esse ab cum dolorem. Dolorum, numquam cumque magnam nemo repellendus sequi. Quo, nisi! Quia temporibus explicabo facere aspernatur!</p>
                            </div>
                        </div>
                        <h6 class="acad-issues-reply-text">Replies</h6>

                        <div class="card reply-card">
                            <div class="card-body">
                                <table class="table table-striped assignment-table-info">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">From</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Jan 30, 2020 - 1:30pm</th>
                                            <td>Me</td>


                                        </tr>

                                    </tbody>
                                </table>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam deserunt possimus magni quasi laborum, ratione eveniet repellat expedita vitae voluptas nesciunt omnis eos totam at ipsam ducimus et voluptatum vel.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae magni amet ex esse ab cum dolorem. Dolorum, numquam cumque magnam nemo repellendus sequi. Quo, nisi! Quia temporibus explicabo facere aspernatur!</p>
                            </div>
                        </div>

                        <div class="card reply-card">
                            <div class="card-body">
                                <table class="table table-striped assignment-table-info">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">From</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Jan 30, 2020 - 1:30pm</th>
                                            <td>MSBM Staff</td>


                                        </tr>

                                    </tbody>
                                </table>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam deserunt possimus magni quasi laborum, ratione eveniet repellat expedita vitae voluptas nesciunt omnis eos totam at ipsam ducimus et voluptatum vel.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae magni amet ex esse ab cum dolorem. Dolorum, numquam cumque magnam nemo repellendus sequi. Quo, nisi! Quia temporibus explicabo facere aspernatur!</p>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                Send a reply
                            </div>
                            <div class="card-body">
                                <form>

                                    <div class="form-group">

                                        <textarea class="form-control"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php include_once('../components/footer.php'); ?>