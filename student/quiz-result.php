<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-header.php'); ?>

<div class="student_portal margin-top-00">
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
                <div class="quiz-sect">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="quiz-sect-info">
                                <h2 class="quiz-preview-text">Result</h2>
                                <h3 class="quiz-title-text">Business Process And Enterprise Application Integration</h3>
                            </div>
                            <div class="alert alert-success" role="alert">
                                <div class="quiz-result-status">
                                    <div class="congrate-text">
                                        <h4><i class="fa fa-check"></i> Congratulations! You passed</h4>
                                        <p><span class="to-pass-text">TO PASS:</span> 80% or higher</p>
                                    </div>
                                    <div class="congrate-text quiz-result-sect">
                                        <button class="btn btn-danger btn-sm">Retake Quiz</button>
                                        <div class="quiz-score-text">
                                            <p><span class="to-pass-text">Score</span></p>
                                            <h4>80%</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-question-sect">
                                <div class="quiz-question">
                                    <h2>Question 1</h2>
                                </div>
                                <div class="quiz-answer">
                                    <p>The unrestricted sharing of data and business processes among any connected applications and data sources in the enterprise is called:</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-1" checked disabled>
                                            <label for="q1-1">Enterprise Application Integration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-2" checked disabled>
                                            <label for="q1-2">Enterprise Application Interchange</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-3" disabled>
                                            <label for="q1-3">Enterprise Information Intergration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-4" disabled>
                                            <label for="q1-4">E-commerce Application Intergration</label>
                                        </div>
                                    </form>
                                    <div class="alert alert-success correct-incorrect-stat" role="alert">
                                        <h6><strong><i class="fa fa-check"></i> Correct</strong></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-question-sect">
                                <div class="quiz-question">
                                    <h2>Question 2</h2>
                                </div>
                                <div class="quiz-answer">
                                    <p>The unrestricted sharing of data and business processes among any connected applications and data sources in the enterprise is called:</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-1">
                                            <label for="q1-1">Enterprise Application Integration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-2" checked disabled>
                                            <label for="q1-2">Enterprise Application Interchange</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-3" disabled>
                                            <label for="q1-3">Enterprise Information Intergration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-4" checked disabled>
                                            <label for="q1-4">E-commerce Application Intergration</label>
                                        </div>
                                    </form>
                                    <div class="alert alert-danger correct-incorrect-stat" role="alert">
                                        <h6><strong><i class="fa fa-warning"></i> Incorrect</strong></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-question-sect">
                                <div class="quiz-question">
                                    <h2>Question 3</h2>
                                </div>
                                <div class="quiz-answer">
                                    <p>The unrestricted sharing of data and business processes among any connected applications and data sources in the enterprise is called:</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-1">
                                            <label for="q1-1">Enterprise Application Integration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-2" checked disabled>
                                            <label for="q1-2">Enterprise Application Interchange</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-3" disabled>
                                            <label for="q1-3">Enterprise Information Intergration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-4" checked disabled>
                                            <label for="q1-4">E-commerce Application Intergration</label>
                                        </div>
                                    </form>
                                    <div class="alert alert-success correct-incorrect-stat" role="alert">
                                        <h6><strong><i class="fa fa-check"></i> Correct</strong></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-question-sect">
                                <div class="quiz-question">
                                    <h2>Question 4</h2>
                                </div>
                                <div class="quiz-answer">
                                    <p>The unrestricted sharing of data and business processes among any connected applications and data sources in the enterprise is called:</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-1">
                                            <label for="q1-1">Enterprise Application Integration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-2" checked disabled>
                                            <label for="q1-2">Enterprise Application Interchange</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-3" disabled>
                                            <label for="q1-3">Enterprise Information Intergration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-4" checked disabled>
                                            <label for="q1-4">E-commerce Application Intergration</label>
                                        </div>
                                    </form>
                                    <div class="alert alert-success correct-incorrect-stat" role="alert">
                                        <h6><strong><i class="fa fa-check"></i> Correct</strong></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-question-sect">
                                <div class="quiz-question">
                                    <h2>Question 5</h2>
                                </div>
                                <div class="quiz-answer">
                                    <p>The unrestricted sharing of data and business processes among any connected applications and data sources in the enterprise is called:</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-1">
                                            <label for="q1-1">Enterprise Application Integration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-2" checked disabled>
                                            <label for="q1-2">Enterprise Application Interchange</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-3" disabled>
                                            <label for="q1-3">Enterprise Information Intergration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-4" checked disabled>
                                            <label for="q1-4">E-commerce Application Intergration</label>
                                        </div>
                                    </form>
                                    <div class="alert alert-success correct-incorrect-stat" role="alert">
                                        <h6><strong><i class="fa fa-check"></i> Correct</strong></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-question-sect">
                                <div class="quiz-question">
                                    <h2>Question 6</h2>
                                </div>
                                <div class="quiz-answer">
                                    <p>The unrestricted sharing of data and business processes among any connected applications and data sources in the enterprise is called:</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-1">
                                            <label for="q1-1">Enterprise Application Integration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-2" checked disabled>
                                            <label for="q1-2">Enterprise Application Interchange</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-3" disabled>
                                            <label for="q1-3">Enterprise Information Intergration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-4" checked disabled>
                                            <label for="q1-4">E-commerce Application Intergration</label>
                                        </div>
                                    </form>
                                    <div class="alert alert-danger correct-incorrect-stat" role="alert">
                                        <h6><strong><i class="fa fa-warning"></i> Incorrect</strong></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-question-sect">
                                <div class="quiz-question">
                                    <h2>Question 7</h2>
                                </div>
                                <div class="quiz-answer">
                                    <p>The unrestricted sharing of data and business processes among any connected applications and data sources in the enterprise is called:</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-1">
                                            <label for="q1-1">Enterprise Application Integration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-2" checked disabled>
                                            <label for="q1-2">Enterprise Application Interchange</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-3" disabled>
                                            <label for="q1-3">Enterprise Information Intergration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-4" checked disabled>
                                            <label for="q1-4">E-commerce Application Intergration</label>
                                        </div>
                                    </form>
                                    <div class="alert alert-danger correct-incorrect-stat" role="alert">
                                        <h6><strong><i class="fa fa-warning"></i> Incorrect</strong></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-question-sect">
                                <div class="quiz-question">
                                    <h2>Question 8</h2>
                                </div>
                                <div class="quiz-answer">
                                    <p>The unrestricted sharing of data and business processes among any connected applications and data sources in the enterprise is called:</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-1">
                                            <label for="q1-1">Enterprise Application Integration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-2" checked disabled>
                                            <label for="q1-2">Enterprise Application Interchange</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-3" disabled>
                                            <label for="q1-3">Enterprise Information Intergration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-4" checked disabled>
                                            <label for="q1-4">E-commerce Application Intergration</label>
                                        </div>
                                    </form>
                                    <div class="alert alert-danger correct-incorrect-stat" role="alert">
                                        <h6><strong><i class="fa fa-warning"></i> Incorrect</strong></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-question-sect">
                                <div class="quiz-question">
                                    <h2>Question 9</h2>
                                </div>
                                <div class="quiz-answer">
                                    <p>The unrestricted sharing of data and business processes among any connected applications and data sources in the enterprise is called:</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-1">
                                            <label for="q1-1">Enterprise Application Integration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-2" checked disabled>
                                            <label for="q1-2">Enterprise Application Interchange</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-3" disabled>
                                            <label for="q1-3">Enterprise Information Intergration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-4" checked disabled>
                                            <label for="q1-4">E-commerce Application Intergration</label>
                                        </div>
                                    </form>
                                    <div class="alert alert-success correct-incorrect-stat" role="alert">
                                        <h6><strong><i class="fa fa-check"></i> Correct</strong></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-question-sect">
                                <div class="quiz-question">
                                    <h2>Question 10</h2>
                                </div>
                                <div class="quiz-answer">
                                    <p>The unrestricted sharing of data and business processes among any connected applications and data sources in the enterprise is called:</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-1">
                                            <label for="q1-1">Enterprise Application Integration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-2" checked disabled>
                                            <label for="q1-2">Enterprise Application Interchange</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-3" disabled>
                                            <label for="q1-3">Enterprise Information Intergration</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="q1-4" checked disabled>
                                            <label for="q1-4">E-commerce Application Intergration</label>
                                        </div>
                                    </form>
                                    <div class="alert alert-danger correct-incorrect-stat" role="alert">
                                        <h6><strong><i class="fa fa-warning"></i> Incorrect</strong></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="quiz-submit float-right">
                                <button class="btn btn-danger">Retake Quiz</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once('../components/footer.php'); ?>