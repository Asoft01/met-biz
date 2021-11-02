<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class='jumbotron degree-banner' style="background-image: url(images/banners/terms.jpg);">
    <div class='overlay'></div>
    <div class="container">
        <div class="overlay-text">
            <h1>MSBM Partners</h1>
        </div>
    </div>
</div>

<div class="filters">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form>
                    <div class="row">
                        <div class="col-md-3 mt-3">
                            <select class="form-control">
                                <option>Programmes Category</option>
                                <option>Health &amp; Psychology</option>
                                <option>Literature</option>
                                <option>Politics</option>
                            </select>
                        </div>
                        <div class="col-md-3 mt-3">
                            <select class="form-control">
                                <option>Programme Type</option>
                                <option>Masters</option>
                                <option>Doctorate</option>
                                <option>Bachelor Degree</option>
                                <option>Post graducate</option>
                            </select>
                        </div>
                        <div class="col-md-3 mt-3">
                            <select class="form-control">
                                <option>Degree Type</option>
                                <option>Online</option>
                                <option>Offline</option>
                            </select>
                        </div>
                        <div class="col-md-3 mt-3">
                            <button class='btn btn-dark btn-block'>Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="main-content">
    <div class="worldwide">
        <div class="container">
            <div class='row '>
                <div class='col-lg-8 worldwide-cols degree-info-accordion'>
                    <h3>MSBM Partners – Branches or Agents</h3>
                    <div class="terms-category-cnt">
                        <div id="categories_section">
                            <div class="categories-select">
                                <form action="#" method="POST" id="term-select-nav">
                                    <select class="terms-category form-control" name="terms-category" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                        <option value="<?php echo ROOT_DIR; ?>terms.php">Terms and conditions</option>
                                        <option value="<?php echo ROOT_DIR; ?>cookies.php">Cookies</option>
                                        <option value="<?php echo ROOT_DIR; ?>msbm-partners.php" selected="selected">MSBM Partners</option>
                                        <option value="<?php echo ROOT_DIR; ?>privacy-policy.php">Privacy Policies</option>
                                        <option value="<?php echo ROOT_DIR; ?>accessing-website.php">Website Policies</option>
                                        <option value="<?php echo ROOT_DIR; ?>registration-and-programmes-of-study.php">Learning with MSBM</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="terms-content">
                        <p>The following are the Terms and Conditions governing the MSBM Agreement with current and
                            prospective Branches and Agents.</p>
                        <div class="accordion mb-5" id="msbmAccordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Definitions <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>In this agreement the following terms shall have the following meanings:
                                            </p>
                                            <p>a. The Principal is the Metropolitan School of Business & Management FZE.
                                            </p>
                                            <p>b. “Confidential Information” means all information that may be imparted
                                                in confidence or be of a confidential nature relating to the business or
                                                prospective business, plans or internal affairs of the Principal.</p>
                                            <p>c. “Intellectual Property” means all trademarks or applications for any
                                                such marks, trade names, patents or applications for the grant of any
                                                such patents, know-how, being technical or otherwise, copyright or
                                                designs belonging to the Principal.</p>
                                            <p>d. “The Territory” means Worldwide.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Appointment <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>a. The Principal appoints the Partner for the Principal for the sale of
                                                the courses in the Territory.</p>
                                            <p>b. The Partner shall solicit and obtain students to enrol in courses on
                                                the Principal’s behalf in accordance with prices specified by the
                                                Principal.</p>
                                            <p>c. The Principal reserves the right to vary the specification and/or the
                                                price of the services and to withdraw services from and/or add services
                                                to the range of courses.</p>
                                            <p>d. The Principal reserves the right to sell directly to customers and to
                                                appoint other Partners in the Territory.</p>
                                            <p>e. The Partner is permitted to promote itself as an authorized Partner of
                                                the Principal providing all terms and conditions mentioned in the
                                                agreement are adhered to.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Partnership <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p>a. The parties are neither owners of each other’s Organization nor is this a
                                            joint venture of both Organizations. The Partner is not an employee of the
                                            Principal.</p>
                                        <p>b. The Partner shall be solely responsible for payment of all wages,
                                            salaries, national insurance, PAYE (or equivalents in any jurisdiction) and
                                            payments to be made in respect of its employees, if any, and hereby grants
                                            the Principal an indemnity in respect of any claim or loss the Principal may
                                            suffer in respect of such matters.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Principle Obligations <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>The Principal agrees with the Partner throughout the term:</p>
                                            <p>a. To act dutifully and in good faith </p>
                                            <p>b. To inform the Partner within a reasonable time, the acceptance or
                                                refusal of the Application, of any Student which the Partner has
                                                enrolled.</p>
                                            <p>c. To register the students (subject to the given deadline) in accordance
                                                with the Courses they have applied for and to ensure that such
                                                registrations:</p>
                                            <ul>
                                                <li>Are invoiced at the current price list or other pricing policy of
                                                    the Principal as notified to the Partner</li>
                                                <li>Are registered promptly.</li>
                                            </ul>
                                            <p>d. To provide students with an adequate after-registration service by
                                                providing assistance in relation to their courses e.g. course outline,
                                                enrolment, locations; as advised by the Principal.</p>
                                            <p>e. To support the Partner in promoting and advertising the Courses in the
                                                Territory in such manner as it considers appropriate and to supply the
                                                Partner with sufficient course information, marketing information and
                                                brochures as necessary.</p>
                                            <p>f. To inform the Partner of any price changes.</p>
                                            <p>g. To provide and promptly update information about the Courses and
                                                specifically to notify the Partner of any variations in the
                                                specification of the Courses or any changes in the range of Courses.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveOne" aria-expanded="false" aria-controls="collapseFiveOne">
                                            Partner’s Obligations <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveOne" class="collapse" aria-labelledby="headingFiveOne">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>The Partner agrees with the Principal throughout the term:</p>
                                            <p>a. To protect and promote the interests of the Principal and to act
                                                dutifully and in all good faith.</p>
                                            <p>b. Not to be concerned or interested either directly or indirectly in the
                                                supply of services that is similar to or competitive with the services
                                                of the Principal.</p>
                                            <p>c. To use all reasonable commercial efforts to obtain students for the
                                                Principal in the Territory.</p>
                                            <p>d. That the services performed under this Agreement shall be performed
                                                using reasonable skill and care, and of a quality conforming to
                                                generally accepted industry standards and practices.</p>
                                            <p>e. Not to pledge or use the credit of the Principal.</p>
                                            <p>f. Not to make any representations, warranties or guarantees to students
                                                in respect of the Services except where specifically authorized in
                                                writing by the Principal.</p>
                                            <p>g. Not to use the Intellectual Property of the Principal other than in
                                                accordance with this Agreement.</p>
                                            <p>h. To keep the Principal informed of any improper or wrongful use in the
                                                Territory of the Intellectual Property of the Principal and not to cause
                                                or permit anything which may damage or endanger such Intellectual
                                                Property.</p>
                                            <p>i. To maintain proper records and/or sales reports in relation to the
                                                sale of the Services and to supply to the Principal from time to time
                                                upon request, records and/or sales reports and other information
                                                relating to the Business and to comply with all reasonable instructions
                                                given by the Principal.</p>
                                            <p>j. To comply with all applicable laws and requirements of any
                                                governmental or regulatory authority applicable to the Business.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveTwo" aria-expanded="false" aria-controls="collapseFiveTwo">
                                            Marketing Support <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveTwo" class="collapse" aria-labelledby="headingFiveTwo">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>
                                                The Principal will provide the Partner with content and images to enable
                                                them to successfully market the service.
                                                <p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveThree" aria-expanded="false" aria-controls="collapseFiveThree">
                                            Students <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveThree" class="collapse" aria-labelledby="headingFiveThree">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>a. Details of all students acquired by the Partner shall be forwarded to
                                                the Principal.</p>
                                            <p>b. Students will only be accepted once a first installment has been made
                                                for their course.</p>
                                            <p>c. Invoices shall only be provided by the principal and copies made
                                                available to the Partner.</p>
                                            <p>d. The Principal shall have the right to refuse any Application on any
                                                grounds but shall advise the Partner in writing within fourteen days of
                                                receipt of an Application of its reason for non-acceptance.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveFour" aria-expanded="false" aria-controls="collapseFiveFour">
                                            Fee Payments<i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveFour" class="collapse" aria-labelledby="headingFiveFour">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>a. The Partner shall ensure that their enrolled students pay their fee in
                                                time in order to be registered on the MSBM Learning Portal.</p>
                                            <p>b. The Partner shall send the Principal a sales statement on a monthly
                                                basis on the 28th day of every month.</p>
                                            <p>c. The Partner must inform the Principal of all potential students to
                                                ensure consistent follow up</p>
                                            <p>d. The Partner shall not be entitled to reimbursement from the Principal
                                                of any out of pocket expenses incurred by the Partner in connection with
                                                his duties and responsibilities under this Agreement.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFiveFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFiveFive" aria-expanded="false" aria-controls="collapseFiveFive">
                                            Termination <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFiveFive" class="collapse" aria-labelledby="headingFiveFive">
                                    <div class="card-body">
                                        <div class="wpb_wrapper">
                                            <p>This Agreement shall continue until terminated by either party given to
                                                the other, in writing not less than one month’s notice to coincide with
                                                the end of the calendar month.</p>
                                            <p>This Agreement shall terminate forthwith upon service of written notice
                                                to that effect in any of the following circumstances:</p>
                                            <p>a. If either party ceases to be able to pay its debts in the ordinary
                                                course of its business, or enter into an arrangement with its creditors
                                            </p>
                                            <p>b. If the Partner enters into an Agreement of any kind with any of the
                                                Principal’s competitors</p>
                                            <p>c. If either party commits a breach of any of the Terms or Conditions of
                                                this Agreement and the breach (if capable of remedy) is not remedied
                                                within thirty days of being notified to do so by the other party</p>
                                            <p>d. If the Partner goes into liquidation either compulsory or voluntary or
                                                if a receiver is appointed in respect of all or any of its assets. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTMTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMTwo" aria-expanded="false" aria-controls="collapseTMTwo">
                                            Termination consequences <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMTwo" class="collapse" aria-labelledby="headingTMTwo">
                                    <div class="card-body">
                                        <p>a. The Partner shall be entitled to commission only in respect of
                                            registration of students obtained by them and handed over to the Principal
                                            before the date of termination and not in respect of registrations handed
                                            over to the Principal after that date.</p>
                                        <p>b. On the expiry or other termination of this Agreement the Partner
                                            undertakes to return to the Principal, at the Principal’s expense, all
                                            Products, product information, samples, publicity promotional and
                                            advertising material, marketing and technical information and course notes
                                            which are in the Partner’s possession.</p>
                                        <p>c. For the avoidance of doubt the Partner shall have no right to any
                                            compensation upon termination of this Agreement.</p>
                                        <p>d. Commission shall not be paid to the Partner after the date of Termination
                                            of the Agreement.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTMThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMThree" aria-expanded="false" aria-controls="collapseTMThree">
                                            Confidentiality <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMThree" class="collapse" aria-labelledby="headingTMThree">
                                    <div class="card-body">
                                        <p>a. The Partner undertakes not to divulge or allow to be divulged, at any time
                                            during the course of or following termination of this Agreement, any
                                            Confidential Information relating to the services, including business
                                            affairs of the Principal to any third party without the consent of the
                                            Principal.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTMFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMFour" aria-expanded="false" aria-controls="collapseTMFour">
                                            Force Majeure <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMFour" class="collapse" aria-labelledby="headingTMFour">
                                    <div class="card-body">
                                        <p>a. Neither party shall be liable to the other for any failure to perform any
                                            obligation under this Agreement which is due to an event beyond the control
                                            of such party including, but not limited to, an act of God, war,
                                            insurrection, riot, and civil unrest, act of civil or military authority.
                                            Any party affected by such event shall forthwith inform the other party of
                                            the same in writing and shall use all reasonable endeavours to comply with
                                            the terms of this Agreement.</p>

                                        <p>b. Where such event renders performance impossible for a continuous period of
                                            not less than six months, the other party shall be entitled to terminate
                                            this Agreement by serving one week’s notice in writing.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTMFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTMFive" aria-expanded="false" aria-controls="collapseTMFive">
                                            Notices <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTMFive" class="collapse" aria-labelledby="headingTMFive">
                                    <div class="card-body">
                                        <p>a. Any notices to be served on either of the parties by the other shall be
                                            sent by email to <a href="mailto:info@msbm.org.uk">info@msbm.org.uk</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="demanding-course">
                        <div class="find course-list-msbm">
                            <div class="container">
                                <div class="row myflexx">
                                    <div class="col-md-12 col-12 col-lg-12 col-xl-12 card">
                                        <h4 class="about-content-heading">Most Demanding Course</h4>
                                        <a href="" class="card-ahref-flex">
                                            <!-- <span class="free-course-tag">PART OF A DEGREE</span> -->
                                            <div class="card-img-wrap">
                                                <img src="<?php echo ROOT_DIR; ?>images/bg2.jpg" class="card-img-top" alt="...">
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text card-uni">UK Partner University</p>
                                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing
                                                    elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                <div class="row">
                                                    <div class="col-5 mb-2">
                                                        <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/hour-glass.svg" class="desc-icon"> 2 Weeks</p>
                                                    </div>
                                                    <div class="col-7 mb-2">
                                                        <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/time.svg" class="desc-icon"> 1 hour per week</p>
                                                    </div>
                                                    <div class="col-5 mb-2">
                                                        <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/price.svg" class="desc-icon"> $ 7000</p>
                                                    </div>
                                                    <div class="col-7 mb-2">
                                                        <p class="card-text"><img src="<?php echo ROOT_DIR; ?>images/icons/screen.svg" class="desc-icon"> Online</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="col-md-12 text-left">
                                            <button class="btn btn-normal">View more demanding courses<i class="fa fa-chevron-right slide-icon"></i></button>
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

<?php include_once('components/footer.php'); ?>

</body>

</html>