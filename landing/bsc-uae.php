<?php include_once('../components/config.php'); ?>
<?php include "../components/landing-head.inc.php"; ?>
</head>

<body>

    <?php include "../components/landing-nav.inc.php"; ?>

    <div class="main-landing-page bsc-uae">
        <div class="landing-page-form landing-uae ">
            <div class="container">
                <div class="row">
                    <div class="landing-pos">
                        <div class="col-lg-8">
                            <h1 class="numero-unoxx">Study for an <strong>Anglia Ruskin University Bachelor's Degree</strong> here in <strong>Dubai</strong></h1>
                            <h4 class="sub-numero-unoxx">Classroom option available for those already residing in the UAE</h4>
                            <h4 class="sub-numero-unoxx">Online option also available for those outside the UAE</h4>
                        </div>

                        <div class="col-lg-4">
                            <form action="https://portal.msbm.org.uk/landing-page-callback.php" method="post">
                                <div class="form-bg">
                                    <div class="form-arrow">

                                    </div>
                                    <h3>Get your FREE<br>
                                        information packet</h3>
                                    <div id="join-us-results"></div>
                                    <!-- Form -->
                                    <div class="form-group">
                                        <input type="text" name="full_name" id="full_name" class="form-control f-input input-field" placeholder="Full Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control f-input input-field" placeholder="Email" pattern="[a-zA-Z0-9]+(([_+.-]{1})?[a-zA-Z0-9]+)*@[a-zA-Z0-9]+((-{1})?[a-zA-Z0-9]+)*(\.[a-zA-Z0-9]{2,})+" title="Kindly confirm that there is no error in your email address." required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" maxlength="15" class="form-control f-input input-field" placeholder="Phone" required="">
                                    </div>

                                    <div class="form-group">
                                        <select name="country" class="form-control f-input input-field" id="" required="">
                                            <option value="">Country</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Virgin Islands">British Virgin Islands</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Congo-Brazzaville">Congo-Brazzaville</option>
                                            <option value="Congo-Kinshasa">Congo-Kinshasa</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Ivory Coast">Ivory Coast</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Kosovo">Kosovo</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia">Micronesia</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar (Burma)">Myanmar (Burma)</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="North Korea">North Korea</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Korea">South Korea</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Virgin Islands">United States Virgin Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City">Vatican City</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="age" class="form-control f-input input-field" placeholder="Age" required="">
                                    </div>

                                    <div class="form-group">
                                        <select name="programme" class="form-control f-input input-field" required="">
                                            <option value="">Programme of Interest</option>
                                            <option value="BBA - Classroom">British BSc (Classroom)</option>
                                            <option value="BBA - Online">British BSc (Online)</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select name="gender" class="form-control f-input input-field" id="" required="">
                                            <option value="">Gender</option>
                                            <option value="m">Male</option>
                                            <option value="f">Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select name="job_position" class="form-control f-input input-field" id="" required="">
                                            <option value="">Job Position/Title</option>
                                            <option value="CEO/Executive Director">CEO/Executive Director</option>
                                            <option value="Executive">Executive</option>
                                            <option value="Middle Manager">Middle Manager</option>
                                            <option value="Officer">Officer</option>
                                            <option value="Other...">Other...</option>
                                            <option value="Senior Manager">Senior Manager</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select name="how_did_hear" class="form-control f-input input-field" id="" required="">
                                            <option value="">How did you hear about MSBM</option>
                                            <option value="Admissions Office">Admissions Office</option>
                                            <option value="Alumni">Alumni</option>
                                            <option value="Billboard">Billboard</option>
                                            <option value="Cold Call">Cold Call</option>
                                            <option value="Email Campaign">Email Campaign</option>
                                            <option value="Flyers">Flyers</option>
                                            <option value="Friend">Friend</option>
                                            <option value="Online - Facebook">Online - Facebook</option>
                                            <option value="Online - Google">Online - Google</option>
                                            <option value="Online - Instagram">Online - Instagram</option>
                                            <option value="Online - LinkedIn">Online - LinkedIn</option>
                                            <option value="Online - Twitter">Online - Twitter</option>
                                            <option value="Other">Other</option>
                                            <option value="Radio">Radio</option>
                                            <option value="Signposts">Signposts</option>
                                            <option value="SMS Campaign">SMS Campaign</option>
                                            <option value="TV">TV</option>
                                            <option value="Word of Mouth">Word of Mouth</option>
                                        </select>
                                    </div>

                                    <input type="hidden" name="branch" value="Lagos">
                                    <input type="hidden" name="xtr" value="info@msbm.org.uk, social@msbm.org.uk">
                                    <input type="hidden" name="url" value="https://msbm.org.uk:443/landing-page/bsc-nigeria.php">

                                    <button type="submit" class="btn btn-landing-link btn-block">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="landing-statistics">
            <div class="container">
                <div class="row">
                    <!-- BOX -->
                    <div class="col-sm-4">
                        <div class="stat-text text-center" style="padding:0">
                            <h3 class="text-center stat-heading">100%</h3>
                            <p>Assignment Based</p>
                        </div>
                    </div>
                    <!-- /END BOX -->
                    <!-- BOX -->
                    <div class="col-sm-4">
                        <div class="stat-text text-center" style="padding:0">
                            <h3 class="text-center stat-heading">Weekday</h3>
                            <p class="text-center">Classes Only</p>
                        </div>
                    </div>
                    <!-- /END BOX -->
                    <!-- BOX -->
                    <div class="col-sm-4">
                        <div class="stat-text text-center" style="padding:0">
                            <h3 class="text-center stat-heading">Practical</h3>
                            <p class="text-center">Skill Based Learning</p>
                        </div>
                    </div>
                    <!-- /END BOX -->
                </div>
            </div>
        </section>

        <div class="landing-info-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h6 class="text-center">AWARDING UNIVERSITY UPON COMPLETING OTHM LEVEL 4 & 5 EXTENDED DIPLOMA</h6>
                    </div>
                    <div class="col-lg-12">
                        <p class="text-center"><img src="https://msbm.org.uk/landing-page/img/bsc-anglia1.jpg" style="max-width:100%"></p>
                    </div>
                    <!-- <div class="col-lg-12">
                        <p class="text-center">Obtain a Bachelor's degree that can get you a good job anywhere in the world from highly ranked UK university on almost 70% scholarship</p>
                    </div> -->

                </div>
            </div>
        </div>
        <div class="why_msbm why-content landing-features">
            <div class="container">
                <h2 class="text-center">What makes us different ?</h2>
                <p class="text-center">We are a world class business school located in the heart of London, Dubai, Muscat and Lagos.<br /> We are one of the fastest growing British business schools with a stylish blended<br /> learning model that is both online and on campus.</p>
                <br />
                <div class="row text-center">
                    <div class='col-lg-4'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/prize.svg" class="img-fluid" /></p>
                        <p class="text">UK Accredited</p>
                        <p class='sub-text'>Gain a British BSc which is recognized and accepted worldwide.</p>
                    </div>
                    <div class='col-lg-4'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/discount.svg" class="img-fluid" /></p>
                        <p class="text">Great Value + Low Fee</p>
                        <p class='sub-text'>Competitive tuition fees, giving you an edge in your chosen career.</p>
                    </div>
                    <div class='col-lg-4'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/process.svg" class="img-fluid" /></p>
                        <p class="text">OTHM LEVEL 4/5 Diploma + BSc Topup</p>
                        <p class='sub-text'>Earn a British BSc + Extended Diploma in Business Management.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <section class="text-center landing-payment">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 feature">
                        <h2 style="color:#20b2aa"><strong>N1,500,000 PER YEAR</strong><br>For the first 2 years</h2>
                        <p>Save up to <strong>70%</strong> on tuition <br>when you study with MSBM</p>
                        <p><small><em>*Installment payment is allowed</em></small></p>
                    </div>
                    <div class="col-sm-6 feature">
                        <p><strong>Alternatively</strong></p>
                        <h4 style="color:#ffa500; text-decoration:line-through"><strong>£48,000</strong> (£16,000 per year)</h4>
                        <p>When you study <br>directly from the university</p>
                    </div>
                </div>
            </div>
        </section> -->




        <section class="final-landing text-center">
            <div class="container">
                <h2>Four Sessions Yearly (Admission Guaranteed)</h2>

                <p>JAN . APRIL . JULY . OCT</p>
                <p>Intensive and Practical</p>
                <div class="row">

                    <div class="col-lg-3">
                        <div class="card session-card">
                            <img src="<?php echo ROOT_DIR; ?>images/banners/nu1.png" class="card-img-top" alt="">
                        </div>

                        <div class="price-box black-box">
                            <h4>100% <br>Assignment Based</h4>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card session-card">
                            <img src="<?php echo ROOT_DIR; ?>images/banners/nu2.png" class="card-img-top" alt="">
                        </div>
                        <div class="price-box black-box">
                            <h4>Complete <br>Overseas</h4>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card session-card">
                            <img src="<?php echo ROOT_DIR; ?>images/banners/accom.jpg" class="card-img-top" alt="">
                        </div>
                        <div class="price-box black-box">
                            <h4>Accommodation <br>Available</h4>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card session-card">
                            <img src="<?php echo ROOT_DIR; ?>images/banners/nu4.png" class="card-img-top" alt="">
                        </div>
                        <div class="price-box black-box">
                            <h4>Networking <br>Opportunity</h4>
                        </div>
                    </div>

                    <div class="col-lg-6 mx-auto mt-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <button class="btn btn-link mb-2 btn-block">Get More Information</button>
                            </div>

                            <div class="col-lg-6">
                                <button class="btn btn-dark btn-block mb-2">Pay For This Course </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="landing-accordion degree-programme">
            <h1 class="text-center">Curriculum</h1>
            <!-- <div class="center-line"></div> -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 degree-info-accordion">
                        <div class="accordion mb-5" id="msbmAccordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Course Overview <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>

                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <p>The Undergraduate Level 4/5 Extended Diploma in Management is a 240 credit course designed to fast-track students to the final year of an associated Undergraduate BA in Business and Management, which can either be completed on campus or via distance learning. The course is made up of 10 level 4 modules (120 credits) and 10 level 5 modules (120 credits). If students decide to only study at level 4 they will only receive 120 credits and exemption from year 1 of a degree.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Level 4 Module Listing <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        <p>Developing Personal Skills<br>
                                            Effective Communication<br>
                                            The Business Environment<br>
                                            The Marketing Mix<br>
                                            Strategic HRM<br>
                                            Managing Ethically<br>
                                            Culture and the Organisation<br>
                                            Customers and Customer Service<br>
                                            Fundamentals of Accounting<br>
                                            Financial Management and Control </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Level 5 Module Listing <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        <p>The Entrepreneurial Manager<br>
                                            Organisation Structures<br>
                                            Practical Accounting Analysis<br>
                                            Business Planning and Goal Setting<br>
                                            Politics and Business<br>
                                            Business Law<br>
                                            Managing in Today's World<br>
                                            Performance Management<br>
                                            Marketing and Sales Planning<br>
                                            Quantitative Skills </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 mx-auto mt-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <button class="btn btn-link mb-2 btn-block">Get More Information</button>
                            </div>

                            <div class="col-lg-6">
                                <button class="btn btn-dark btn-block mb-2">Pay For This Course </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="landing-video">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/VMHzfubKAiA?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="landing-video-features">
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/laptop.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Learn fast</h5>
                                    Short online courses with compact learning chapters enable you to learn business skills faster than ever.
                                </div>
                            </div>
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/phone.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Start immediately</h5>
                                    All courses are 100% online and self-paced. This enables you to start studying right away.
                                </div>
                            </div>
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/world.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Join a global community</h5>
                                    No formal requirements: our courses are open to all nationalities, ages and professions.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-5 mx-auto">
                        <div class="row">
                            <div class="col-lg-6">
                                <button class="btn btn-link mb-2 btn-block">Get More Information</button>
                            </div>

                            <div class="col-lg-6">
                                <button class="btn btn-dark btn-block mb-2">Pay For This Course </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="landing-counter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="counter-text">
                            <h2>98.2%</h2>
                            <span class="counter-label">Completion Rate</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="counter-text">
                            <h2>90.1%</h2>
                            <span class="counter-label">Course Pass Rate</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="counter-text">
                            <h2>98.2%</h2>
                            <span class="counter-label">Submission Rate</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="counter-text">
                            <h2>88.2%</h2>
                            <span class="counter-label">Student Satisfaction</span>
                        </div>
                    </div>
                    <div class="col-lg-6 mx-auto mt-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <button class="btn btn-link mb-2 btn-block">Get More Information</button>
                            </div>

                            <div class="col-lg-6">
                                <button class="btn btn-dark btn-block mb-2">Pay For This Course </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="landing-certificate">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="text-center"> <img src="<?php echo ROOT_DIR; ?>images/banners/PPC.jpg" class="mr-3 img-certify" alt="..."></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="landing-video-features">
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/diploma.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Get your course certificate</h5>
                                    You will receive a highly valued digital certificate at the end of each course.
                                </div>
                            </div>
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/phone.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Complete a program of several courses</h5>
                                    Complete a track of several courses and receive a program certificate free of any additional charge.
                                </div>
                            </div>
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/world.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Showcase your new skills</h5>
                                    Showcase your newly acquired knowledge and business skills to employers.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="landing-testimonial">
            <div class="container">
                <h2 class="text-center mb-5">What our clients say</h2>
                <div class="row text-center">
                    <div class="col-lg-4">
                        <div class="user-testify">
                            <img src="<?php echo ROOT_DIR; ?>images/banners/54.jpg" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                            <p>
                                <i>"MSBM was a transformational experience for me. I have grown as a leader and have gained skills to expand my professional network."</i>
                            </p>
                            <p>Stanley T., Alumini</p>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="user-testify">
                            <img src="<?php echo ROOT_DIR; ?>images/banners/54.jpg" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                            <p>
                                <i>"The modules were well structured, and gave me the knowledge to make sound decisions that maximize performance."</i>
                            </p>
                            <p>EMILY S., Alumini</p>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="user-testify">
                            <img src="<?php echo ROOT_DIR; ?>images/banners/54.jpg" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                            <p>
                                <i>"Once I enrolled into the MBA programme, I was completely into it. The class schedule and quality of education was superb."</i>
                            </p>
                            <p>BRIAN H., Alumini</p>

                        </div>
                    </div>

                    <div class="col-lg-6 mx-auto mt-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <button class="btn btn-link mb-2 btn-block">Get More Information</button>
                            </div>

                            <div class="col-lg-6">
                                <button class="btn btn-dark btn-block mb-2">Pay For This Course </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="landing-accredit">
            <h1 class="mb-5">Accreditation</h2>
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-md-2 col-4 mb-2 mt-2">
                            <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/ATHE.svg" class="img-fluid landing-accredit-img" width="200">
                        </div>
                        <div class="col-md-2 col-4 mb-2 mt-2">
                            <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/BAA.svg" class="img-fluid landing-accredit-img" width="200">
                        </div>
                        <div class="col-md-2 col-4 mb-2 mt-2">
                            <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/NUS.svg" class="img-fluid landing-accredit-img" width="200">
                        </div>
                        <div class="col-md-2 col-4 mb-2 mt-2">
                            <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/OTHM.svg" class="img-fluid landing-accredit-img" width="200">
                        </div>
                        <div class="col-md-2 col-4 mb-2 mt-2">
                            <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/QUALIFI.svg" class="img-fluid landing-accredit-img" width="200">
                        </div>
                        <div class="col-md-2 col-4 mb-2 mt-2">
                            <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/UKRPL.svg" class="img-fluid landing-accredit-img" width="200">
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <footer class="footer-landing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="foot-disclaimer">
                        Disclaimer: * The logo, name and its products and services are the trademarks of Metropolitan School of Business and Management London, UK . All other company names, brand names, trademarks and logos mentioned on this website are the property of their respective owners and do not constitute or imply endorsement, sponsorship or recommendation by the respective trademark owner.
                    </p>
                </div>
            </div>
        </div>
    </footer>


     <?php include "../components/javascript.inc.php"; ?>
    </div>
</body>

</html>