
<!-- Sidebar -->
<div class="bg-light border-right module-sidebar sidebar-large" id="sidebar-wrapper" aria-expanded="true">
    <div class="sidebar-heading make-bold">
        <a href="<?php echo ROOT_DIR; ?>staff/start-course.php" class="text-dark"><i class="fa fa-chevron-left"></i> Go Back</a>
        <button class="btn btn-red-dark btn-sm move-button" id="menu-toggle"><i class="fa fa-chevron-left"></i></button>
    </div>
    <div class="degree-info-accordion">
        <div class="card">
            <div class="card-body">
                 <button class="btn btn-purple btn-bord-radius btn-block" data-toggle="modal" data-target="#addModuleModal"><i class="fa fa-plus-circle"></i> <span class="d-none d-lg-inline-block d-xl-inline-block">Add</span> Module</button>
            </div>
        </div>
        <div class="accordion side-accordion degree-info-accordion" id="accordionModule">
            <div class="card">
                <div class="card-header" id="headingModuleOne">
                    <div class="mb-0 apply-flex-side">
                        <button class="btn btn-link btn-font-1 w-100" type="button" data-toggle="collapse" data-target="#collapseModuleOne" aria-expanded="true" aria-controls="collapseModuleOne">
                            <div class="d-flex align-items-center justify-content-between">
                                <span>
                                    APPLIED CORPORATE AND BUSINESS LAW In the 21 Century all over the world.
                                </span>
                                <span class="p-2">
                                    <i class="fa fa-chevron-down float-right"></i>
                                    <i class="fa fa-chevron-up float-right"></i>
                                </span>
                            </div>
                        </button>
                    </div>
                </div>

                <div id="collapseModuleOne" class="collapse show" aria-labelledby="headingModuleOne" data-parent="#accordionModule">
                    <div class="card card-body">
                        <div class="module-actions-btn d-flex justify-content-between align-items-center">
                            <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="preview"><i class="fa fa-eye"></i> </a>
                            <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Edit Module"><i class="fa fa-edit"></i> </a>
                            <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Make Prequisite"><i class="fa fa-exclamation-circle text-muted"></i></a>
                            <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                            <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                            <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Module"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="degree-info-accordion">
                            <div class="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block btn-font-1" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Components <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                        <div class="card-body">
                                            <div class="wpb_wrapper">
                                                <a href="<?php echo ROOT_DIR; ?>staff/add-component-setup.php" class="btn btn-purple btn-bord-radius btn-block text-white">Add Component</a>
                                            </div>
                                            <div class="accordion" id="componentListAccordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingComponentListOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted" type="button" data-toggle="collapse" data-target="#collapseComponentListOne" aria-expanded="true" aria-controls="collapseComponentListOne">
                                                            <span class="badge badge-warning-lighten">SCORM</span> Principles, Concepts, Approaches To Leadership <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>

                                                    <div id="collapseComponentListOne" class="collapse show" aria-labelledby="headingComponentListOne" data-parent="#componentListAccordion">
                                                        <div class="card-body">
                                                            <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="preview"><i class="fa fa-eye"></i> </a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Edit Component"><i class="fa fa-edit"></i> </a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Make Prerequisite"><i class="fa fa-exclamation-circle text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Component"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>~
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingComponentListTwo">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseComponentListTwo" aria-expanded="false" aria-controls="collapseComponentListTwo">
                                                            <span class="badge badge-success-lighten">VIDEO</span> Leadership Influences Individual, Team And The Organization <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseComponentListTwo" class="collapse" aria-labelledby="headingComponentListTwo" data-parent="#componentListAccordion">
                                                        <div class="card-body">
                                                           <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Component"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingComponentListThree">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseComponentListThree" aria-expanded="false" aria-controls="collapseComponentListThree">
                                                            <span class="badge badge-danger-lighten">FILES</span> Leadership And Organizational Performance <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseComponentListThree" class="collapse" aria-labelledby="headingComponentListThree" data-parent="#componentListAccordion">
                                                        <div class="card-body">
                                                            <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed btn-block btn-font-1" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Materials <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                        <div class="card-body">
                                            <div class="wpb_wrapper">
                                                <a href="<?php echo ROOT_DIR; ?>staff/add-material-files.php" class="btn btn-purple btn-bord-radius btn-block text-white">Add Material</a>
                                            </div>
                                            <div class="accordion" id="materialListAccordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingMaterialListOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted" type="button" data-toggle="collapse" data-target="#collapseMaterialListOne" aria-expanded="true" aria-controls="collapseMaterialListOne">
                                                            <span class="badge badge-info-lighten">MATERIAL</span> Principles, Concepts, Approaches To Leadership <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>

                                                    <div id="collapseMaterialListOne" class="collapse show" aria-labelledby="headingMaterialListOne" data-parent="#materialListAccordion">
                                                        <div class="card-body">
                                                            <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Material"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingMaterialListTwo">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseMaterialListTwo" aria-expanded="false" aria-controls="collapseMaterialListTwo">
                                                            <span class="badge badge-info-lighten">MATERIAL</span> Leadership Influences Individual, Team And The Organization <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseMaterialListTwo" class="collapse" aria-labelledby="headingMaterialListTwo" data-parent="#materialListAccordion">
                                                        <div class="card-body">
                                                           <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Material"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingMaterialListThree">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseMaterialListThree" aria-expanded="false" aria-controls="collapseMaterialListThree">
                                                            <span class="badge badge-info-lighten">MATERIAL</span> Leadership And Organizational Performance <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseMaterialListThree" class="collapse" aria-labelledby="headingMaterialListThree" data-parent="#materialListAccordion">
                                                        <div class="card-body">
                                                             <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Material"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwoTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed btn-block btn-font-1" type="button" data-toggle="collapse" data-target="#collapseTwoTwo" aria-expanded="false" aria-controls="collapseTwoTwo">
                                            Assignments <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwoTwo" class="collapse" aria-labelledby="headingTwoTwo">
                                        <div class="card-body">
                                            <div class="wpb_wrapper">
                                                <a href="<?php echo ROOT_DIR; ?>staff/add-new-assignment.php" class="btn btn-purple btn-bord-radius btn-block text-white">Add Assignment</a>
                                            </div>
                                            <div class="accordion" id="assignmentListAccordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingAssignmentListOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted" type="button" data-toggle="collapse" data-target="#collapseAssignmentListOne" aria-expanded="true" aria-controls="collapseAssignmentListOne">
                                                            <span class="badge badge-danger-lighten">ASSIGNMENT</span> Principles, Concepts, Approaches To Leadership <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>

                                                    <div id="collapseAssignmentListOne" class="collapse show" aria-labelledby="headingAssignmentListOne" data-parent="#assignmentListAccordion">
                                                        <div class="card-body">
                                                            <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Assignment"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingAssignmentListTwo">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseAssignmentListTwo" aria-expanded="false" aria-controls="collapseMaterialListTwo">
                                                            <span class="badge badge-danger-lighten">ASSIGNMENT</span> Leadership Influences Individual, Team And The Organization <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseAssignmentListTwo" class="collapse" aria-labelledby="headingAssignmentListTwo" data-parent="#assignmentListAccordion">
                                                        <div class="card-body">
                                                           <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Assignment"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingAssignmentListThree">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseAssignmentListThree" aria-expanded="false" aria-controls="collapseAssignmentListThree">
                                                            <span class="badge badge-danger-lighten">ASSIGNMENT</span> Leadership And Organizational Performance <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseAssignmentListThree" class="collapse" aria-labelledby="headingAssignmentListThree" data-parent="#assignmentListAccordion">
                                                        <div class="card-body">
                                                             <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Assignment"><i class="fa fa-trash"></i></a>
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
            <div class="card">
                <div class="card-header" id="headingModuleTwo">
                    <div class="mb-0 apply-flex-side">
                        <button class="btn btn-link btn-font-1 w-100" type="button" data-toggle="collapse" data-target="#collapseModuleTwo" aria-expanded="false" aria-controls="collapseModuleTwo">
                            <div class="d-flex align-items-center justify-content-between">
                                <span>
                                   Level 4 - Hotel Front Office Operations
                                </span>
                                <span class="p-2">
                                    <i class="fa fa-chevron-down float-right"></i>
                                    <i class="fa fa-chevron-up float-right"></i>
                                </span>
                            </div>
                        </button>
                    </div>
                </div>
                <div id="collapseModuleTwo" class="collapse" aria-labelledby="headingModuleTwo" data-parent="#accordionModule">
                    <div class="card card-body">
                        <div class="module-actions-btn d-flex justify-content-between align-items-center">
                            <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Edit Module"><i class="fa fa-edit"></i> </a>
                            <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Make Prequisite"><i class="fa fa-exclamation-circle text-muted"></i></a>
                            <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                            <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                            <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Module"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="degree-info-accordion">
                            <div class="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block btn-font-1" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Components <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                        <div class="card-body">
                                            <div class="wpb_wrapper">
                                                <a href="<?php echo ROOT_DIR; ?>staff/add-component-setup.php" class="btn btn-purple btn-bord-radius btn-block text-white">Add Component</a>
                                            </div>
                                            <div class="accordion" id="componentListAccordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingComponentListOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted" type="button" data-toggle="collapse" data-target="#collapseComponentListOne" aria-expanded="true" aria-controls="collapseComponentListOne">
                                                            <span class="badge badge-warning-lighten">SCORM</span> Principles, Concepts, Approaches To Leadership <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>

                                                    <div id="collapseComponentListOne" class="collapse show" aria-labelledby="headingComponentListOne" data-parent="#componentListAccordion">
                                                        <div class="card-body">
                                                            <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Edit Component"><i class="fa fa-edit"></i> </a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Make Prerequisite"><i class="fa fa-exclamation-circle text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Component"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingComponentListTwo">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseComponentListTwo" aria-expanded="false" aria-controls="collapseComponentListTwo">
                                                            <span class="badge badge-success-lighten">VIDEO</span> Leadership Influences Individual, Team And The Organization <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseComponentListTwo" class="collapse" aria-labelledby="headingComponentListTwo" data-parent="#componentListAccordion">
                                                        <div class="card-body">
                                                           <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Component"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingComponentListThree">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseComponentListThree" aria-expanded="false" aria-controls="collapseComponentListThree">
                                                            <span class="badge badge-danger-lighten">FILES</span> Leadership And Organizational Performance <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseComponentListThree" class="collapse" aria-labelledby="headingComponentListThree" data-parent="#componentListAccordion">
                                                        <div class="card-body">
                                                            <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed btn-block btn-font-1" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Materials <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                        <div class="card-body">
                                            <div class="wpb_wrapper">
                                                <a href="<?php echo ROOT_DIR; ?>staff/add-material-files.php" class="btn btn-purple btn-bord-radius btn-block text-white">Add Material</a>
                                            </div>
                                            <div class="accordion" id="materialListAccordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingMaterialListOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted" type="button" data-toggle="collapse" data-target="#collapseMaterialListOne" aria-expanded="true" aria-controls="collapseMaterialListOne">
                                                            <span class="badge badge-info-lighten">MATERIAL</span> Principles, Concepts, Approaches To Leadership <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>

                                                    <div id="collapseMaterialListOne" class="collapse show" aria-labelledby="headingMaterialListOne" data-parent="#materialListAccordion">
                                                        <div class="card-body">
                                                            <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Material"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingMaterialListTwo">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseMaterialListTwo" aria-expanded="false" aria-controls="collapseMaterialListTwo">
                                                            <span class="badge badge-info-lighten">MATERIAL</span> Leadership Influences Individual, Team And The Organization <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseMaterialListTwo" class="collapse" aria-labelledby="headingMaterialListTwo" data-parent="#materialListAccordion">
                                                        <div class="card-body">
                                                           <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Material"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingMaterialListThree">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseMaterialListThree" aria-expanded="false" aria-controls="collapseMaterialListThree">
                                                            <span class="badge badge-info-lighten">MATERIAL</span> Leadership And Organizational Performance <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseMaterialListThree" class="collapse" aria-labelledby="headingMaterialListThree" data-parent="#materialListAccordion">
                                                        <div class="card-body">
                                                             <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Material"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwoTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed btn-block btn-font-1" type="button" data-toggle="collapse" data-target="#collapseTwoTwo" aria-expanded="false" aria-controls="collapseTwoTwo">
                                            Assignments <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwoTwo" class="collapse" aria-labelledby="headingTwoTwo">
                                        <div class="card-body">
                                            <div class="wpb_wrapper">
                                                <a href="<?php echo ROOT_DIR; ?>staff/add-new-assignment.php" class="btn btn-purple btn-bord-radius btn-block text-white">Add Assignment</a>
                                            </div>
                                            <div class="accordion" id="assignmentListAccordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingAssignmentListOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted" type="button" data-toggle="collapse" data-target="#collapseAssignmentListOne" aria-expanded="true" aria-controls="collapseAssignmentListOne">
                                                            <span class="badge badge-danger-lighten">ASSIGNMENT</span> Principles, Concepts, Approaches To Leadership <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>

                                                    <div id="collapseAssignmentListOne" class="collapse show" aria-labelledby="headingAssignmentListOne" data-parent="#assignmentListAccordion">
                                                        <div class="card-body">
                                                            <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Assignment"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingAssignmentListTwo">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseAssignmentListTwo" aria-expanded="false" aria-controls="collapseMaterialListTwo">
                                                            <span class="badge badge-danger-lighten">ASSIGNMENT</span> Leadership Influences Individual, Team And The Organization <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseAssignmentListTwo" class="collapse" aria-labelledby="headingAssignmentListTwo" data-parent="#assignmentListAccordion">
                                                        <div class="card-body">
                                                           <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Assignment"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingAssignmentListThree">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseAssignmentListThree" aria-expanded="false" aria-controls="collapseAssignmentListThree">
                                                            <span class="badge badge-danger-lighten">ASSIGNMENT</span> Leadership And Organizational Performance <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseAssignmentListThree" class="collapse" aria-labelledby="headingAssignmentListThree" data-parent="#assignmentListAccordion">
                                                        <div class="card-body">
                                                             <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Assignment"><i class="fa fa-trash"></i></a>
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
            <div class="card">
                <div class="card-header" id="headingModuleThree">
                    <div class="mb-0 apply-flex-side">
                        <button class="btn btn-link btn-font-1 w-100" type="button" data-toggle="collapse" data-target="#collapseModuleThree" aria-expanded="false" aria-controls="collapseModuleThree">
                            <div class="d-flex align-items-center justify-content-between">
                                <span>
                                    Level 4
                                </span>
                                <span class="p-2">
                                    <i class="fa fa-chevron-down float-right"></i>
                                    <i class="fa fa-chevron-up float-right"></i>
                                </span>
                            </div>
                        </button>
                    </div>
                </div>
                <div id="collapseModuleThree" class="collapse" aria-labelledby="headingModuleThree" data-parent="#accordionModule">
                   <div class="card card-body">
                        <div class="module-actions-btn d-flex justify-content-between align-items-center">
                            <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Edit Module"><i class="fa fa-edit"></i> </a>
                            <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Make Prequisite"><i class="fa fa-exclamation-circle text-muted"></i></a>
                            <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                            <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                            <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Module"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="degree-info-accordion">
                            <div class="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block btn-font-1" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Components <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                        <div class="card-body">
                                            <div class="wpb_wrapper">
                                                <a href="<?php echo ROOT_DIR; ?>staff/add-component-setup.php" class="btn btn-purple btn-bord-radius btn-block text-white">Add Component</a>
                                            </div>
                                            <div class="accordion" id="componentListAccordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingComponentListOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted" type="button" data-toggle="collapse" data-target="#collapseComponentListOne" aria-expanded="true" aria-controls="collapseComponentListOne">
                                                            <span class="badge badge-warning-lighten">SCORM</span> Principles, Concepts, Approaches To Leadership <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>

                                                    <div id="collapseComponentListOne" class="collapse show" aria-labelledby="headingComponentListOne" data-parent="#componentListAccordion">
                                                        <div class="card-body">
                                                            <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Edit Component"><i class="fa fa-edit"></i> </a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Make Prerequisite"><i class="fa fa-exclamation-circle text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Component"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingComponentListTwo">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseComponentListTwo" aria-expanded="false" aria-controls="collapseComponentListTwo">
                                                            <span class="badge badge-success-lighten">VIDEO</span> Leadership Influences Individual, Team And The Organization <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseComponentListTwo" class="collapse" aria-labelledby="headingComponentListTwo" data-parent="#componentListAccordion">
                                                        <div class="card-body">
                                                           <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Component"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingComponentListThree">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseComponentListThree" aria-expanded="false" aria-controls="collapseComponentListThree">
                                                            <span class="badge badge-danger-lighten">FILES</span> Leadership And Organizational Performance <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseComponentListThree" class="collapse" aria-labelledby="headingComponentListThree" data-parent="#componentListAccordion">
                                                        <div class="card-body">
                                                            <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed btn-block btn-font-1" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Materials <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                        <div class="card-body">
                                            <div class="wpb_wrapper">
                                                <a href="<?php echo ROOT_DIR; ?>staff/add-material-files.php" class="btn btn-purple btn-bord-radius btn-block text-white">Add Material</a>
                                            </div>
                                            <div class="accordion" id="materialListAccordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingMaterialListOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted" type="button" data-toggle="collapse" data-target="#collapseMaterialListOne" aria-expanded="true" aria-controls="collapseMaterialListOne">
                                                            <span class="badge badge-info-lighten">MATERIAL</span> Principles, Concepts, Approaches To Leadership <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>

                                                    <div id="collapseMaterialListOne" class="collapse show" aria-labelledby="headingMaterialListOne" data-parent="#materialListAccordion">
                                                        <div class="card-body">
                                                            <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Material"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingMaterialListTwo">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseMaterialListTwo" aria-expanded="false" aria-controls="collapseMaterialListTwo">
                                                            <span class="badge badge-info-lighten">MATERIAL</span> Leadership Influences Individual, Team And The Organization <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseMaterialListTwo" class="collapse" aria-labelledby="headingMaterialListTwo" data-parent="#materialListAccordion">
                                                        <div class="card-body">
                                                           <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Material"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingMaterialListThree">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseMaterialListThree" aria-expanded="false" aria-controls="collapseMaterialListThree">
                                                            <span class="badge badge-info-lighten">MATERIAL</span> Leadership And Organizational Performance <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseMaterialListThree" class="collapse" aria-labelledby="headingMaterialListThree" data-parent="#materialListAccordion">
                                                        <div class="card-body">
                                                             <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Material"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwoTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed btn-block btn-font-1" type="button" data-toggle="collapse" data-target="#collapseTwoTwo" aria-expanded="false" aria-controls="collapseTwoTwo">
                                            Assignments <i class="fa fa-chevron-down float-right"></i>
                                                <i class="fa fa-chevron-up float-right"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwoTwo" class="collapse" aria-labelledby="headingTwoTwo">
                                        <div class="card-body">
                                            <div class="wpb_wrapper">
                                                <a href="<?php echo ROOT_DIR; ?>staff/add-new-assignment.php" class="btn btn-purple btn-bord-radius btn-block text-white">Add Assignment</a>
                                            </div>
                                            <div class="accordion" id="assignmentListAccordion">
                                                <div class="card">
                                                    <div class="card-header" id="headingAssignmentListOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted" type="button" data-toggle="collapse" data-target="#collapseAssignmentListOne" aria-expanded="true" aria-controls="collapseAssignmentListOne">
                                                            <span class="badge badge-danger-lighten">ASSIGNMENT</span> Principles, Concepts, Approaches To Leadership <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>

                                                    <div id="collapseAssignmentListOne" class="collapse show" aria-labelledby="headingAssignmentListOne" data-parent="#assignmentListAccordion">
                                                        <div class="card-body">
                                                            <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Assignment"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingAssignmentListTwo">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseAssignmentListTwo" aria-expanded="false" aria-controls="collapseMaterialListTwo">
                                                            <span class="badge badge-danger-lighten">ASSIGNMENT</span> Leadership Influences Individual, Team And The Organization <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseAssignmentListTwo" class="collapse" aria-labelledby="headingAssignmentListTwo" data-parent="#assignmentListAccordion">
                                                        <div class="card-body">
                                                           <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Assignment"><i class="fa fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header" id="headingAssignmentListThree">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block font-sm text-muted collapsed" type="button" data-toggle="collapse" data-target="#collapseAssignmentListThree" aria-expanded="false" aria-controls="collapseAssignmentListThree">
                                                            <span class="badge badge-danger-lighten">ASSIGNMENT</span> Leadership And Organizational Performance <span class="badge badge-pill float-right"><i class="fa fa-ellipsis-v fa-lg"></i></span>
                                                        </button>
                                                    </h2>
                                                    </div>
                                                    <div id="collapseAssignmentListThree" class="collapse" aria-labelledby="headingAssignmentListThree" data-parent="#assignmentListAccordion">
                                                        <div class="card-body">
                                                             <div class="module-actions-btn d-flex justify-content-between align-items-center">
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Preview"><i class="fa fa-eye"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Up"><i class="fa fa-chevron-up text-muted"></i></a>
                                                                <a href="" class="btn btn-outline-dark btn-bord-radius btn-sm d-flex justify-content-between align-items-center" title="Move Down"><i class="fa fa-chevron-down text-muted"></i></a>
                                                                <a href="" class="btn btn-danger btn-bord-radius text-white btn-sm d-flex justify-content-between align-items-center" title="Delete Assignment"><i class="fa fa-trash"></i></a>
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
        </div>
    </div>
    <!-- <ul class="list-group list-group-flush courses-breakdown manage-view">
        <a href="<?php echo ROOT_DIR; ?>">
            <li class="list-group-item d-flex justify-content-between align-items-center text-muted make-content-bold">Module Name 1<span class="badge badge-pill"><i class="fa fa-ellipsis-v"></i></li>
        </a>
        <div class="degree-info-accordion">
            <div class="accordion mb-5" id="msbmAccordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Components <i class="fa fa-chevron-down float-right"></i>
                                <i class="fa fa-chevron-up float-right"></i>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                        <div class="card-body">
                            <div class="wpb_wrapper">
                                <button class="btn btn-purple btn-bord-radius btn-block">Add Component</a>
                            </div>
                            <ul class="list-group list-group-flush courses-breakdown manage-view">
                                <a href="<?php echo ROOT_DIR; ?>">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Lecture 1 <span class="badge badge-pill"><i class="fa fa-ellipsis-v fa-lg"></i></span></li>
                                </a>
                                <a href="">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Lecture 2 <span class="badge badge-pill"><i class="fa fa-ellipsis-v fa-lg"></i></span></li>
                                </a>
                                <a href="">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Lecture 3 <span class="badge badge-pill"><i class="fa fa-ellipsis-v fa-lg"></i></span></li>
                                </a>
                                <a href="">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Lecture 4 <span class="badge badge-pill"><i class="fa fa-ellipsis-v fa-lg"></i></span></li>
                                </a>
                                <a href="">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Lecture 5 <span class="badge badge-pill"><i class="fa fa-ellipsis-v fa-lg"></i></span></li>
                                </a>
                                <a href="">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Lecture 6 <span class="badge badge-pill"><i class="fa fa-ellipsis-v fa-lg"></i></span></li>
                                </a>
                                <a href="">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Lecture 7 <span class="badge badge-pill"><i class="fa fa-ellipsis-v fa-lg"></i></span></li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Materials <i class="fa fa-chevron-down float-right"></i>
                                <i class="fa fa-chevron-up float-right"></i>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                        <div class="card-body">
                            <div class="wpb_wrapper">
                                <p>The content for each course has been developed by industry experts from respective fields having more than 10-15 years of work experience. A major thrust is placed on practical aspects and case studies in each subject.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwoTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwoTwo" aria-expanded="false" aria-controls="collapseTwoTwo">
                               Assignments <i class="fa fa-chevron-down float-right"></i>
                                <i class="fa fa-chevron-up float-right"></i>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwoTwo" class="collapse" aria-labelledby="headingTwoTwo">
                        <div class="card-body">
                            <div class="wpb_wrapper">
                                <p>Weekly Virtual Classroom Sessions taught by faculty from around the world ensure that MSBM students have access to all the benefits of a full time program.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="<?php echo ROOT_DIR; ?>">
            <li class="list-group-item d-flex justify-content-between align-items-center text-muted make-content-bold">Module Name 2<span class="badge badge-pill"><i class="fa fa-ellipsis-v"></i></li>
        </a>
         <a href="<?php echo ROOT_DIR; ?>">
            <li class="list-group-item d-flex justify-content-between align-items-center text-muted make-content-bold">Module Name 3<span class="badge badge-pill"><i class="fa fa-ellipsis-v"></i></li>
        </a>
    </ul> -->
</div>
<!-- /#sidebar-wrapper -->

<!-- Modal -->
<div class="modal fade" id="addModuleModal" tabindex="-1" role="dialog" aria-labelledby="addModuleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title make-bold" id="addModuleModalLabel">Add New Module</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="upload-course-material">
            <div class="row">
                <div class="col-lg-12">
                    <div class="light-card">
                        <p>Fields with <sup class="required text-bold">*</sup> are required. </p>
                        <form action="<?php echo ROOT_DIR; ?>staff/add-module.php">
                            <div class="form-group">
                                <label><sup class="required text-bold">*</sup> Name</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label><sup class="required text-bold">*</sup> Code</label>
                                <input type="text" class="form-control" placeholder="ASDERT" />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-purple btn-bord-radius btn-block">Save Changes</button>
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
