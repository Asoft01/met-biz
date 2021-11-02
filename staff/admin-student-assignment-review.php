<?php include_once('../components/config.php'); ?>
<?php include "../components/admin-head.php"; ?>
</head>

<body>
    <?php include "../components/admin-staff-navbar.php"; ?>

    <div class="student_portal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Student Assignment Review</strong></h2>
                    <h5 class="text-muted">Ateseme Jones Bia</h5>
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-3">
                    <?php include "../components/staff-sidebar.php" ?>
                </div>
                <div class="col-lg-9 statistics">
                    <div class="admin-staff-container">
                        <div class="admin-student-assign-review-sect">
                            <div class="light-card">
                                <div class="card">
                                    <h5 class="card-header">Enterprise Resource Planning (ERP)</h5>
                                    <div class="card-body">
                                        <div class="card card-assignment-report-review mb-3">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover assignment-table-info table-scrollable">
                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th>Start</th>
                                                                <th>Deadline</th>
                                                                <th>Status</th>
                                                                <th>History Chat</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    2020-07-01</td>
                                                                <td>
                                                                    2020-07-30
                                                                </td>
                                                                <td>
                                                                    COMPLETED
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalScrollable">
                                                                        History
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="course-content">
                                                    <h5><strong>ENTERPRISE RESOURCE PLANNING ASSIGNMENT</strong></h5>
                                                    <p><strong>Important Note:</strong></p>
                                                    <ol>
                                                        <li>Assignments should be submitted via official portal of MSBM only as Microsoft word document (.doc or .docx), Microsoft PowerPoint (.ppt or .pptx), Assignments submitted via other means will not be considered.</li>
                                                        <li>Kindly adhere to the format requirements (Essay, Memo, Letter, Report, Research, Presentation etc.) and submit the assignment as per the instructions given.</li>
                                                        <li>Make sure to write your full name and correct Programme/Module name using the official OTHM/MSBM Title page.</li>
                                                        <li>The minimum word count for any assignment is 2000-2500 words unless it is mentioned otherwise in the assignment instructions or task by task. You could lose marks if you write 10% more or less than this.</li>
                                                        <li>Assignments will be reviewed only if they are completed with all the tasks/questions. Please do not send each task/question separately.</li>
                                                        <li>All documents will be checked for plagiarism. Any report found to be plagiarised for more than 15% would be rejected immediately.</li>
                                                        <li>Make sure to insert correct in-text citations when drafting an assignment and a list of references as per the&nbsp;<strong>Harvard Referencing Style</strong>&nbsp;is to be provided at the end of the whole assignment. (Not end of each task)</li>
                                                        <li>All assignments will be sent for review and until the assignment status shows “Completed”, kindly keep checking for feedback and do the needful accordingly.</li>
                                                        <li>Assignments should be saved as: Programme Name _ (Candidate Full Name) _ (Candidate Code)_(Unit Abbreviation). i.e. MBA_ John Smith_00123456_ ABRM</li>
                                                    </ol>
                                                    <p><strong>&nbsp;</strong></p>
                                                    <strong><strong>Answer only one part from all of the questions below:</strong></strong><br><br><strong>Question 1</strong><br><br>
                                                    <ul>
                                                        <li>Discuss the need for evaluating business intelligence in large organizations and discuss any TWO (2) strategies for conducting business analytics.</li>
                                                    </ul>
                                                    OR<br>
                                                    <ul>
                                                        <li>Explain the difference between data mining and data analytics and their role in the configuration of the ERP system.</li>
                                                    </ul>
                                                    <br><br><strong>Question 2</strong><br><br>
                                                    <ul>
                                                        <li>Discuss in detail the integration function of ERP with the help of a specific ERP module used in your own organization. Also, explain the role and limitations of a shared database accessible by many ERP modules.</li>
                                                    </ul>
                                                    OR<br>
                                                    <ul>
                                                        <li>Discuss the role of ERP in supply chain management, suggest and explain the best ERP for global supply chain management and critically analyze key supply chain processes that should be automated with an ERP.</li>
                                                    </ul>
                                                    <br><br><strong>Question 3</strong><br><br>
                                                    <ul>
                                                        <li>Discuss in detail how process management contributes to the overall value of an organization by detailing the specific role of different types of Process management.</li>
                                                    </ul>
                                                    OR<br>
                                                    <ul>
                                                        <li>You are working for a manufacturing organization that sources its material from international suppliers and process material in three factories across three different continents. The finished products are distributed globally. Discuss the different types of ERP modules this organization will require for its smooth operations and explain how those modules will be integrated together with a single accessible database.</li>
                                                    </ul>
                                                    <br><br><strong>Question 4</strong><br><br>
                                                    <ul>
                                                        <li>Materials requirements planning (MRP) is an element of enterprise resource planning (ERP). List the five (5) core components of MRP and discuss the Significance of any THREE (3) of these.</li>
                                                    </ul>
                                                    OR<br>
                                                    <ul>
                                                        <li>Discuss how manufacturing resource planning (MRP II) extends the underlying Idea presented in materials requirements planning (MRP).</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="send-reply mt-5">
                                    <h4><strong>Send a Reply</strong></h4>
                                    <em class="text-info"><sup>*</sup>Only Microsoft Word, PDF and Powerpoint documents can be attached.</em>
                                    <form action="<?php echo ROOT_DIR; ?>" method="post">
                                        <div class="form-group">
                                            <label>File</label>
                                            <input type="file" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Comment</label>
                                            <textarea class="form-control" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="form-group col-lg-8">
                                                    <button type="submit" class="btn btn-dark">Send Response</button>
                                                </div>
                                            </div>
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

    <!-- Modal -->
    <div class="modal fade" id="ModalScrollable" tabindex="-1" role="dialog" aria-labelledby="ModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="ModalScrollableTitle"><strong>History</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body chat-pop-up">
                    <div class="chat-care">
                        <ul class="chat">
                            <li class="agent clearfix">
                                <div class="chat-body clearfix">
                                    <div class="header clearfix">
                                        <strong>Lecturer</strong><br />
                                        <small class="time-chat">
                                            <span class="glyphicon glyphicon-time"></span>Jul 20, 2020 12:24PM</small>
                                    </div>
                                    <p>
                                        <p>Dear,</p>
                                        <br />
                                        <p>Good day.</p>
                                        <br />
                                        <p>I trust you are doing well.</p>
                                        <br />
                                        <p>Your assignment was well-received. I went through it and I can say that the efforts you have given into it are great.
                                            Well done.</p>
                                        <br />
                                        <p>Your assignment is accepted.</p>
                                        <br />
                                        <p>Kindly find the review notes in the attached file. I hope those will be of help in future.</p>
                                        <br />
                                        <p>Please direct your efforts to the remaining tasks/assignments of the course, if any.</p>
                                        <br />
                                        <p>I wish you all the best.</p>
                                        <br />
                                        <p>Happy learning.</p>
                                        <br />
                                        <p>Academics</p>
                                    </p>
                                    <div class="text-right" style="margin-top:40px">
                                        <a href="<?php echo ROOT_DIR; ?>" class="btn btn-dark" target="_blank"><i class="fa fa-download fa-lg"></i> Download Attachment</a>
                                        <p><small>20122456__Reply-19161339-ERP-ANSWER.edited.docx</small></p>
                                    </div>
                                </div>
                            </li>
                            <li class="admin clearfix">
                                <div class="chat-body clearfix">
                                    <div class="header clearfix">
                                        <strong>Student</strong> <br />
                                        <small class="time-chat">
                                            <span class="glyphicon glyphicon-time"></span>Jul 20, 2020 12:24PM</small>
                                    </div>
                                    <p>
                                        Please see reply in the attached file.
                                    </p>
                                    <div class="text-right" style="margin-top:40px">
                                        <a href="<?php echo ROOT_DIR; ?>" class="btn btn-dark" target="_blank"><i class="fa fa-download fa-lg"></i> Download Attachment</a>
                                        <p><small>20122456__Reply-19161339-ERP-ANSWER.edited.docx</small></p>
                                    </div>
                                </div>
                            </li>
                            <li class="agent clearfix">
                                <div class="chat-body clearfix">
                                    <div class="header clearfix">
                                        <strong>Lecturer</strong><br />
                                        <small class="time-chat">
                                            <span class="glyphicon glyphicon-time"></span>Jul 20, 2020 12:24PM</small>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet.
                                    </p>
                                </div>
                            </li>
                            <li class="admin clearfix">
                                <div class="chat-body clearfix">
                                    <div class="header clearfix">
                                        <strong>Student</strong> <br />
                                        <small class="time-chat">
                                            <span class="glyphicon glyphicon-time"></span>Jul 20, 2020 12:24PM</small>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                        dolor.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('../components/footer.php'); ?>