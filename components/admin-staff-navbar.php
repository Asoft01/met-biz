<style>
   .dropdown-2{
     position: relative
   }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-darkk student-admin-navbar">
    <div class="container-fluid">
        <a class="navbar-brand mr-3" href="<?php echo ROOT_DIR; ?>staff/index.php"><img src="<?php echo ROOT_DIR; ?>images/White-Logo-1.svg" width="120"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto staff-admin-left-navbar">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dashboard <img src="<?php echo ROOT_DIR; ?>images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1">
                    </a>
                    <div class="dropdown-menu staff-admin-dropdown dropdown-black-sm" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/admin-dashboard.php">Dashboard</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/admin-manage-programmes.php">Programmes</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/admin-branch-assignment-lecturers.php">Assignment Lecturers</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/admin-course-list.php">Course settings</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/manage-student-login.php">Manage Student Logins</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/unread-assignment-feedbacks.php">Unread Assignment Feedbacks</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/admin-student-assignment.php">All Student Assignments</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/manage-student-question.php">Manage Student Questions</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/add-client.php">Add Clients</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/autofill-client.php">Add Clients (Auto Fill)</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/client-list.php">Clients List</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/client-search.php">Clients Search</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/admin-automated-emails-from-staff.php">Automated Emails from Staff</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/admin-manage-template-attachment.php">Email Attachments</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/admin-manage-signatures.php">Signatures</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/admin-programme-dates.php">Programme Dates</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/admin-update-email-status.php">Update Email Status</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/admin-email-blast-template.php">Email Blasts</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Report <img src="<?php echo ROOT_DIR; ?>images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1">
                    </a>
                    <div class="dropdown-menu staff-admin-dropdown dropdown-black-sm" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/report-student.php">Student</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/report.php">Admin</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/report-companies.php">Companies</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/report-users.php">Users</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>">Marketer Performance</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/branch-performance.php">Branch Performance</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Staff <img src="<?php echo ROOT_DIR; ?>images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1">
                    </a>
                    <div class="dropdown-menu staff-admin-dropdown dropdown-black-sm" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>">Employee Self Service</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>">Performance Management</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/admin-payroll-management.php">Payroll Management</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/admin-leave-management.php">Leave Management</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Student<img src="<?php echo ROOT_DIR; ?>images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1">
                    </a>
                    <div class="dropdown-menu staff-admin-dropdown dropdown-black-sm" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Current Student</a>
                        <a class="dropdown-item" href="#">Completed Alumni</a>
                        <a class="dropdown-item" href="#">University Alumni</a>
                        <a class="dropdown-item" href="#">Level 7 Alumni</a>
                        <a class="dropdown-item" href="#">IPGD</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/assignment-report.php">Assignment Report</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav staff-admin-left-navbar">
                <li class="nav-item dropdown-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <span style="visibility:hidden">Hide</span>
                    </a>
                    <div class="dropdown-menu staff-admin-dropdown dropdown-black-sm" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>">Auto-fill using website registration</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>">Transfer course to another account</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>">Manage Database Options</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo ROOT_DIR; ?>images/icons/gear.svg" class="img-fluid student-profile-navbar student-admin-icon"> <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1">
                    </a>
                    <div class="dropdown-menu staff-admin-dropdown dropdown-black-sm" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>">Auto-fill using website registration</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>">Transfer course to another account</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>">Manage Database Options</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo ROOT_DIR; ?>images/profile_img.jpg" class="rounded-circle student-profile-navbar"> <img src="../images/icons/downwards-pointer.svg" class="flipnav arrow-nav ml-1">
                    </a>
                    <div class="dropdown-menu staff-admin-dropdown dropdown-black-sm" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/view-profile.php">View Profile</a>
                        <a class="dropdown-item" href="<?php echo ROOT_DIR; ?>staff/edit-profile.php">Edit Profile</a>
                        <a class="dropdown-item" href="#">Sign Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>