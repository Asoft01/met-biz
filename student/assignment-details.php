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
                <div class="card assignment-info">
                    <div class="card-header assignment-ttle">
                        <i class="fa fa-university"></i> Global Strategic Marketing (GSM)
                    </div>
                    <div class="card-body assignment-modules">


                        <table class="table assignment-table-info">
                            <thead>
                                <tr>
                                    <th scope="col">Start</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Feb 10, 2020</td>
                                    <td>Jun 10, 2020</td>
                                    <td>ONGOING</td>

                                </tr>

                            </tbody>
                        </table>

                        <div class="card assignment-modules-info">
                            <div class="card-header">
                                <i class="fa fa-book"></i> Assignment (SEMP Information and Technology)
                            </div>
                            <div class="card-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, est quos! Quo asperiores tempore provident magnam dolor, nihil laboriosam aliquam ipsam pariatur natus voluptas nostrum eius doloribus adipisci tenetur similique.
                            </div>
                        </div>
                        <div class="card assignment-modules-info">
                            <div class="card-header">
                                <i class="fa fa-book"></i> Reply
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 mx-auto">
                                        <form>
                                            <div class="form-group">
                                                <label>Assignment</label>
                                                <input type="file" class="form-control-file">
                                            </div>
                                            <div class="form-group">

                                                <textarea class="form-control"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card assignment-modules-info">
                            <div class="card-header">
                                <i class="fa fa-history"></i> History
                            </div>
                            <div class="card-body">
                                <div class="card assignment-modules-info student-chat">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i> From: Me
                                        <span class="float-right"><i class="fa fa-hourglass"></i> Dec 23, 2019 8:56AM</span>
                                    </div>
                                    <div class="card-body inner-card-history">
                                        <div class="row">
                                            <div class="col-md-12 mx-auto">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias animi provident fuga minima alias. Delectus saepe eveniet, quis voluptatem illum non tenetur quo sunt distinctio officia. Est, eveniet ea! Illo!</p>
                                                <div class="chat-btn-adjustment">
                                                    <button class="btn btn-dark mb-2"><i class="fa fa-download fa-lg"></i> Download Attachment</button>
                                                    <p>2019-12-01-456783-3412-NOV-DEC-ASSIGN.pdf</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card assignment-modules-info lecturer-chat">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i> From: Lecturer
                                        <span class="float-right"><i class="fa fa-hourglass"></i> Dec 23, 2019 8:56AM</span>
                                    </div>
                                    <div class="card-body inner-card-history">
                                        <div class="row">
                                            <div class="col-md-12 mx-auto">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias animi provident fuga minima alias. Delectus saepe eveniet, quis voluptatem illum non tenetur quo sunt distinctio officia. Est, eveniet ea! Illo!</p>
                                                <div class="chat-btn-adjustment">
                                                    <button class="btn btn-secondary mb-2"><i class="fa fa-download fa-lg"></i> Download Attachment</button>
                                                    <p>2019-12-01-456783-3412-NOV-DEC-ASSIGN.pdf</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card assignment-modules-info lecturer-chat">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i> From: Lecturer
                                        <span class="float-right"><i class="fa fa-hourglass"></i> Dec 23, 2019 8:56AM</span>
                                    </div>
                                    <div class="card-body inner-card-history">
                                        <div class="row">
                                            <div class="col-md-12 mx-auto">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias animi provident fuga minima alias. Delectus saepe eveniet, quis voluptatem illum non tenetur quo sunt distinctio officia. Est, eveniet ea! Illo!</p>
                                                <div class="chat-btn-adjustment">
                                                    <button class="btn btn-secondary mb-2"><i class="fa fa-download fa-lg"></i> Download Attachment</button>
                                                    <p>2019-12-01-456783-3412-NOV-DEC-ASSIGN.pdf</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card assignment-modules-info student-chat">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i> From: Me
                                        <span class="float-right"><i class="fa fa-hourglass"></i> Dec 23, 2019 8:56AM</span>
                                    </div>
                                    <div class="card-body inner-card-history">
                                        <div class="row">
                                            <div class="col-md-12 mx-auto">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias animi provident fuga minima alias. Delectus saepe eveniet, quis voluptatem illum non tenetur quo sunt distinctio officia. Est, eveniet ea! Illo!</p>
                                                <div class="chat-btn-adjustment">
                                                    <button class="btn btn-dark mb-2"><i class="fa fa-download fa-lg"></i> Download Attachment</button>
                                                    <p>2019-12-01-456783-3412-NOV-DEC-ASSIGN.pdf</p>
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
</div>


<?php include_once('../components/footer.php'); ?>