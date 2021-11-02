<?php include_once('../components/config.php'); ?>
<?php include_once('../components/admin-head.php'); ?>

<body>

<?php include "../components/admin-staff-navbar.php"; ?>

<div class="lecture-v-portal">
    <div class="d-flex" id="wrapper">

       <?php include "../components/handbook-sidebar.inc.php"; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="pb-5 overflow-auto vh-100 no-scrollbar">
            <div class="mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="handbook-introduction text-center mb-5">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/logo-coloured.png" class="img-fluid mb-"  width="50%"/>
                            </div>
                            <!-- <div>
                                <h4><strong>1.1 About the Employee Handbook</strong></h4>
                                <p>The <span id="span_id_name_of_company"><span class="variable_vide">________</span></span> Employee handbook (the "<strong>Handbook</strong>") has been established to provide rules and guidelines about the Company's policies and practices.</p>
                                <p>It delineates, summarizes and explains all the policies, rules and regulations for every staff of the Company and is not intended to act as a guarantee for employment for a fixed period of time.</p>
                                <p>This Handbook is supplemental to all other contract document, materials and information of the Company. This document should not be considered as an all-encompassing material on all the policies relating to the Company as the Company may from time to time, disseminate information and other communications intended to alter or modify the provisions of this Handbook.</p>
                                <p>The policies and guidelines described herein are to be treated as important. Adherence to the provisions of this Handbook is a key requirement and condition of employment. Failure to comply with any provision of this Handbook may attract disciplinary actions.</p>
                                <p>This document replaces and supersedes any other previous employee handbook, rules, policies, manuals, guidelines or other policies of the Company whether oral or in written communication.</p>
                                <h4><strong>1.2 Policy Modification</strong></h4>
                                <p>The Company may, at anytime and at its sole discretion, change the terms of this Handbook. The terms of this Handbook can be revoked, revised, modified or altered in any manner the Company sees fit. All the employees of the Company will be duly notified in writing if any change is made to this Handbook. Every employee has the duty to read and understand the provisions of any modified version of this Handbook and adhere to its terms.</p>
                                <p>If there are questions or issues arising from any modified version, such issues should be duly communicated to supervisors, heads of department or the requisite human resources department in the Company.</p>
                                <h4><strong>1.3 Voluntary At-Will Employment</strong></h4>
                                <p>Except as stated otherwise, all employment contract with the Company is "at-will". This means that the Company can, with or without cause, terminate the employment of any employee and any employee can, with or without cause, resign from their employment provided that adequate notice in writing has been furnished in accordance with the provisions of this Handbook.</p>
                                <p>Any promise, covenant or representations contrary to the tenets of this Handbook made by any officer of this Company shall not be binding except such promises, covenants or representation is made in writing and duly authorized.</p>
                                <h4><strong>1.4 Dispute Resolution</strong></h4>
                                <p>You agree that any dispute or any issue whatsoever between you and the Company will first, be reported to the Company for resolution before having recourse to any other alternative dispute resolution mechanism.</p>
                                <p>If the matters remain unresolved, you agree that such unresolved matters will be referred to arbitration. The parties shall select the arbitrators and the arbitration shall be conducted in the State where the Company is located. The arbitrator(s) shall be bound by applicable Federal and State laws of the Company's place of business. </p>
                            </div> -->
                            <hr/>
                            <div class="d-flex justify-content-between">
                                <a href="#" class="btn btn-secondary">Previous</a>
                                <a href="#" class="btn btn-purple btn-radius">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>

<?php include_once('../components/footer.php'); ?>

</body>

</html>