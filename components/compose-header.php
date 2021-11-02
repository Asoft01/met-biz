<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/europa-156337870.css" rel="stylesheet">
    <!-- <link href="fontawesome/css/all.css" rel="stylesheet"> -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/composer.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <title>MSBM Composer</title>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="avatarModal" tabindex="-1" role="dialog" aria-labelledby="avatarModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title avatar-heading" id="avatarModalLabel">Logged In As</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="avatar-admin">
                        <img src="../images/44.jpg" class="img-avatar-admin" />
                        <h5>John Doe</h5>
                        <button type="button" class="btn btn-light btn-block">Edit Profile</button>
                        <button type="button" class="btn btn-danger btn-block">Log Out</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="composer">
        <div id="mySidenav" class="sidenav">
            <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
            <a href="javascript:void(0)" aria-expanded="true" class="closebtn" onclick="openNav()"><i class="fas fa-chevron-right text-white"></i></a>
            <a href="javascript:void(0)" aria-expanded="false" class="closebtn" onclick="openNav()"><i class="fas fa-chevron-left text-white"></i></a>
            <div class="content">
                <div class="composer-pages">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <a href="#"> <i class="fas fa-home fa-lg"></i> <span class="sidebar-text">Home</span></a>
                        <a href="#" class="collapseLink" data-target="#collapseAbout" data-toggle="collapse" href="#collapseAbout" aria-expanded="false" aria-controls="collapseAbout"><i class="far fa-user fa-lg"></i> <span class="sidebar-text">About MSBM</span> <span class="sidebar-icon-toggle"><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span>
                        </a>
                        <div class="collapse" id="collapseAbout">
                            <div class="card card-body">
                                <a href="index.php">Home</a>
                                <a href="about-msbm.php">About MSBM</a>
                                <a href="our-mission.php">Our Mission</a>
                                <a href="our-story.php">Our Story</a>
                                <!-- <a href="our-vision.php">Our Values</a> -->
                                <a href="our-vision.php">Our Vision</a>
                                <a href="accreditation.php">Accreditation</a>
                                <!-- <a href="">Learning Model</a> -->
                                <a href="culture-structure.php">Culture and Structure</a>
                                <a href="education.php">Education</a>
                            </div>
                        </div>
                        <!-- <a href="#">All Degree</a>
                        <a href="#">All Short Courses</a>
                        <a href="#">Branches</a>
                        <a href="#">Business-solutions</a>
                        <a href="#">Categories</a> -->
                        <a href="#" class="collapseLink" data-target="#collapseCert" data-toggle="collapse" href="#collapseCert" aria-expanded="false" aria-controls="collapseCert"><i class="fas fa-graduation-cap fa-lg"></i> <span class="sidebar-text">Certificates</span> <span class="sidebar-icon-toggle"><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span></a>
                        <div class="collapse" id="collapseCert">
                            <div class="card card-body">
                                <a href="awarded-certificates.php">Awarded Certificates</a>
                                <!-- <a href="#">Certificates</a>
                                <a href="#">Certificate Verification</a> -->
                                <a href="level-4-diploma-certificate.php">Level 4 Diploma Certificates</a>
                                <a href="level-5-diploma-certificate.php">Level 5 Diploma Certificates</a>
                                <a href="level-7-diploma-certificate.php">Level 7 Diploma Certificates</a>
                                <a href="bachelor-degree-certificates.php">Bachelor's Degree Certificates</a>
                                <!-- <a href="">Masters Degree Certificate</a> -->
                                <a href="special-executive-masters-certificates.php">Special Executive Masters Certificates</a>
                                <a href="professional-certificates.php">Professional Certificates</a>
                                <a href="international-postgraduate-certificates.php">International Postgraduate Certificate</a>
                            </div>
                        </div>
                        <!-- <a href="#">Checkout Card Options</a>
                        <a href="#">Checkout Options</a>
                        <a href="#">Checkout Sign In</a>
                        <a href="#">Checkout</a>
                        <a href="#">Contact Form</a>
                        <a href="#">Contact Us</a> -->
                        <a href="#" class="collapseLink" data-target="#collapseCourses" data-toggle="collapse" href="#collapseCourses" aria-expanded="false" aria-controls="collapseCourses"><i class="fas fa-user-graduate fa-lg"></i> <span class="sidebar-text">Courses</span> <span class="sidebar-icon-toggle"><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span></a>
                        <div class="collapse" id="collapseCourses">
                            <div class="card card-body">
                                <a href="business-law.php">Business Law</a>
                                <a href="business-management.php">Business Management</a>
                                <a href="finance-and-accounting.php">Finance and Accounting</a>
                                <a href="flexible-payment.php">Flexible Payment</a>
                                <a href="health-and-psychology.php">Health and Psychology</a>
                                <a href="health-and-safety.php">Health and Safety</a>
                                <a href="human-resources.php">Human Resources</a>
                                <a href="office-productivity.php">Office Productivity</a>
                                <a href="teaching-and-education.php">Teaching and Education</a>
                                <a href="personal-development.php">Personal Development</a>
                                <a href="information-technology.php">Information Technology</a>
                                <a href="leadership-and-entrepreneurship.php">Leadership and Entrepreneurship</a>
                                <a href="sales-and-marketing.php">Sales and Marketing</a>
                            </div>
                        </div>

                        <!-- <a href="#">Not Found</a>
                        <a href="#">Programme Category</a> -->
                        <a href="#" class="collapseLink" data-target="#collapseSemp" data-toggle="collapse" href="#collapseSemp" aria-expanded="false" aria-controls="collapseSemp"><i class="fas fa-certificate fa-lg"></i> <span class="sidebar-text">SEMP </span><span class="sidebar-icon-toggle"><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span></a>
                        <div class="collapse" id="collapseSemp">
                            <div class="card card-body">
                                <a href="semp.php">SEMP</a>
                                <a href="semp-business-administration.php">SEMP Business Administration</a>
                                <a href="semp-business-enterprise-software.php">SEMP Business Enterprise Software</a>
                                <a href="semp-development-studies.php">SEMP Development Studies</a>
                                <a href="semp-financial-management.php">SEMP Financial Management</a>
                                <a href="semp-global-business-strategy.php">SEMP Global Business Strategy</a>
                                <a href="semp-human-resource-management.php">SEMP Human Resource Management</a>
                                <a href="semp-information-management.php">SEMP Information Management</a>
                                <a href="semp-information-systems.php">SEMP Information Systems</a>
                                <a href="semp-information-technology.php">SEMP Information Technology</a>
                                <a href="semp-international-marketing.php">SEMP International Marketing</a>
                                <a href="semp-operations-management.php">SEMP Operations Management</a>
                                <a href="semp-project-management.php">SEMP Project Management</a>
                                <a href="semp-research-methodology.php">SEMP Research Methodology</a>
                                <a href="semp-strategic-business-management.php">SEMP Strategic Business Management</a>
                            </div>
                        </div>
                        <!-- <a href="#">Short Course Landing Page</a>
                        <a href="#">Short Course</a> -->
                        <a href="#" class="collapseLink" data-target="#collapseTerms" data-toggle="collapse" href="#collapseTerms" aria-expanded="false" aria-controls="collapseTerms"><i class="far fa-handshake fa-lg"></i> <span class="sidebar-text">Terms and Conditions</span> <span class="sidebar-icon-toggle"><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span></a>
                        <div class="collapse" id="collapseTerms">
                            <div class="card card-body">
                                <a href="applying-to-msbm.php">Applying to MSBM</a>
                                <a href="terms.php">Terms and Conditions</a>
                                <a href="study-contract.php">Study Contract</a>
                                <!-- <a href="#">Privacy Policy</a> -->
                                <a href="admission-policy.php">Admission Policy</a>
                                <!-- <a href="">MSBM Partners</a> -->
                                <a href="content-standards.php">Content Standards</a>
                                <a href="cookies.php">Cookies</a>
                                <a href="learner-code-of-conduct.php">Code of Conduct</a>
                                <a href="accessibility-policy.php">Accessibility Policy</a>
                                <a href="acceptable-use-policy.php">Acceptable Use Policy</a>
                                <a href="#">Learning with MSBM</a>
                                <a href="leave-of-absence.php">Leave of Absence</a>
                                <a href="linking-to-our-website.php">Linking to our Website</a>
                                <a href="links-from-our-website.php">Links from our Website</a>
                                <a href="accessing-website.php">Accessing Website</a>
                                <!-- <a href="">Course Enrollment</a> -->
                                <a href="deferral.php">Deferral</a>
                                <!-- <a href="#">Faq</a> -->
                                <a href="intellectual-property-rights.php">Intellectual Property Rights</a>
                                <a href="admission-policy.php">Admission Policy</a>
                                <a href="uploading-content-on-our-website.php">Uploading Content on our Website</a>
                                <!-- <a href="#">User Concerns</a> -->
                                <a href="visits-to-our-website.php">Visits to our website</a>
                                <a href="suspension-and-termination.php">Suspension and Termination</a>
                                <a href="prohibited-usage.php">Prohibited Usage</a>
                                <a href="referral.php">Referral</a>
                                <!-- <a href="#">Professional Courses Terms and Conditions</a> -->
                                <a href="refund-policy.php">Refund Policy</a>
                                <!-- <a href="">Registration and Programmes of Study</a> -->
                                <a href="regular-changes-to-our-website.php">Regular Changes to our Website</a>
                                <a href="reliance-on-information-posted-on-our-website.php">Reliance on information posted on our website</a>
                                <a href="msbm-liability.php">MSBM Liability</a>
                                <a href="#">MSBM Partners</a>
                                <a href="learner-code-of-conduct.php">Learner Code of Conduct</a>
                            </div>
                        </div>
                        <a href="#" class="collapseLink" data-target="#collapseprog" data-toggle="collapse" href="#collapseprog" aria-expanded="false" aria-controls="collapseprog"><i class="fas fa-school fa-lg"></i> <span class="sidebar-text">Programmes</span> <span class="sidebar-icon-toggle"><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span></a>
                        <div class="collapse" id="collapseprog">
                            <div class="card card-body">
                                <a href="ma-human-resource-management.php">MA - Human Resource Management</a>
                                <a href="masters-degree.php">MBA</a>
                                <a href="msc-finance-and-accounting.php">MSc Finance and Accounting</a>
                                <a href="one-week-mba.php">One Week MBA</a>
                                <!-- <a href="">Open Programme</a> -->
                                <a href="professional-certificate-course.php">Professional Certificate Course</a>
                                <a href="bachelor-degree-certificates.php">Bachelor's Degree</a>
                            </div>
                        </div>
                        <a href="#" class="collapseLink" data-target="#collapseblog" data-toggle="collapse" href="#collapseblog" aria-expanded="false" aria-controls="collapseblog"><i class="fas fa-rss fa-lg"></i> <span class="sidebar-text">Blog</span><span class="sidebar-icon-toggle"><i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span></a>
                        <div class="collapse" id="collapseblog">
                            <div class="card card-body">
                                <a href="#">All Posts</a>
                                <a href="#">Create a Post</a>
                                <a href="#">Suspended Post</a>
                                <a href="#">Draft</a>
                                <a href="#">Categories</a>
                                <a href="#">Add a Tag</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->