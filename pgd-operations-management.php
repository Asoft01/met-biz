<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class="main-landing-page pgd-op">
    <div class="landing-page-form landing-uae ">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="landing-position">
                        <div>
                            <h1 class="mba-header"><strong>International Postgraduate Diploma in Operations Management</strong> (Level 7)</h1>
                        </div>
                    </div>
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
    <section class="landing-statistics">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-6 tpadd">
                    <div class="stat-text text-center">
                        <h3 class="text-center stat-heading">98.2%</h3>
                        <p>Completion Rate</p>
                    </div>
                </div>

                <div class="col-lg-3 col-6 tpadd">
                    <div class="stat-text text-center">
                        <h3 class="text-center stat-heading">90.1%</h3>
                        <p class="text-center">Course Pass Rate</p>
                    </div>
                </div>

                <div class="col-lg-3 col-6 tpadd">
                    <div class="stat-text text-center">
                        <h3 class="text-center stat-heading">95%</h3>
                        <p class="text-center">Submission Rate</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 tpadd">
                    <div class="stat-text text-center">
                        <h3 class="text-center stat-heading">88%</h3>
                        <p class="text-center">Student Satisfaction</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="landing-overlap why_msbm">
        <div class="container overlap-container">
            <div class="landing-overlap-item">
                <div class="container">
                    <ul class="landing-key-item">
                        <li class="main-overlap-content">
                            <div class="m-key-info__icon">
                                <img src="<?php echo ROOT_DIR; ?>images/icons/pay.svg" class="img-tuition" alt="...">


                            </div>
                            <div class="main-overlap-content-text">
                                <span class="a-item-title a-item-title--secondary a-item-title--light">
                                    Tuition
                                </span>
                                <span class="m-key-info__content">
                                    <span class="x-price">&pound; 2,400</span> &pound; 1,200
                                </span>
                            </div>
                        </li>
                        <li aria-hidden="true" class="main-overlap-content main-overlap-content_overlap_separator" role="presentation"></li>
                        <li class="main-overlap-content">
                            <div class="m-key-info__icon">
                                <img src="<?php echo ROOT_DIR; ?>images/icons/credit-card.svg" class="img-tuition" alt="...">

                            </div>
                            <div class="main-overlap-content-text">
                                <span class="a-item-title a-item-title--secondary a-item-title--light">
                                    Monthly Instalment
                                </span>
                                <span class="m-key-info__content">
                                    &pound; 250
                                </span>
                            </div>
                        </li>
                        <li aria-hidden="true" class="main-overlap-content main-overlap-content_overlap_separator" role="presentation"></li>
                        <li class="main-overlap-content">
                            <div class="m-key-info__icon">
                                <img src="<?php echo ROOT_DIR; ?>images/icons/hourglass.svg" class="img-tuition" alt="...">

                            </div>
                            <div class="main-overlap-content-text">
                                <span class="a-item-title a-item-title--secondary a-item-title--light">
                                    Duration
                                </span>
                                <span class="m-key-info__content">
                                    6 Months
                                </span>
                            </div>
                        </li>
                        <li aria-hidden="true" class="main-overlap-content main-overlap-content_overlap_separator" role="presentation"></li>
                        <li class="main-overlap-content">
                            <div class="m-key-info__icon">
                                <img src="<?php echo ROOT_DIR; ?>images/icons/online-course.svg" class="img-tuition" alt="...">

                            </div>
                            <div class="main-overlap-content-text">
                                <span class="a-item-title a-item-title--secondary a-item-title--light">
                                    Pedagogy
                                </span>
                                <span class="m-key-info__content">
                                    Online
                                </span>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>


        </div>
    </section>


    <div class="why_msbm why-content landing-features">
        <div class="container">
            <div class="landing-features-content">
                <h2 class="text-center">What makes us different ?</h2>
                <p class="text-center">We are a world class business school located in the heart of London, Dubai, Muscat and Lagos.<br /> We are one of the fastest growing British business schools with a stylish blended<br /> learning model that is both online and on campus.</p>
                <br />
                <div class="row text-center">
                    <div class='col-lg-3 mb-3'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/prize.svg" class="img-fluid" /></p>
                        <p class="text">UK Accredited</p>
                        <p class='sub-text'>Gain an International Postgraduate Diploma which is recognized and accepted worldwide.</p>
                    </div>
                    <div class='col-lg-3 mb-3'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/discount.svg" class="img-fluid" /></p>
                        <p class="text">Low Fees</p>
                        <p class='sub-text'>Get as much as 50% scholarship.</p>
                    </div>
                    <div class='col-lg-3 mb-3'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/prize.svg" class="img-fluid" /></p>
                        <p class="text">100% Assignment Based</p>
                        <p class='sub-text'>All modules are assessed via submitted assignments - there are no exams to write.</p>
                    </div>
                    <div class='col-lg-3 mb-3'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/credit-card.svg" class="img-fluid" /></p>
                        <p class="text">Easy Payment Structure</p>
                        <p class='sub-text'>You can pre-structure your preferred payment option. Pay in easy instalments.</p>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="landing-accordion degree-programme why_msbm">
        <h2 class="text-center">Learn more about the programme</h2>
        <!-- <div class="center-line"></div> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 degree-info-accordion curriculum-acc">
                    <div class="accordion mb-5" id="msbmAccordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        International Postgraduate Diploma in Operations Management <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>

                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p>The International Postgraduate Diploma in Operations Management is designed to provide in depth knowledge and understanding of the various aspect of Operations Management within the organisational context. It provides a rich collaborative learning experience where learner exchange views with other participants, interact with research active tutors, and are challenged to become a reflective manager.</p>

                                    <p>The International Postgraduate Diploma in Operations Management also provides learners with realistic and appropriate career related guidance for early 21st century employment markets. Moreover, it creates an opportunity for learners to complete their MBA degree from the UK recognized University at the dissertation phase</p>
                                </div>

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Programme Structure<i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <p>This program consists 6 compulsory units which equals to a total of 120 credits.</p>
                                        <table class="table table-striped">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th width="482">Mandatory Units</th>
                                                    <th width="155">Credit</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td width="482">Operations Management</td>
                                                    <td width="155">20</td>
                                                </tr>
                                                <tr>
                                                    <td width="482">Operations & Supply Chain Management</td>
                                                    <td width="155">20</td>
                                                </tr>
                                                <tr>
                                                    <td width="482">Total Quality Management</td>
                                                    <td width="155">20</td>
                                                </tr>
                                                <tr>
                                                    <td width="482">Enterprise Resource Planning</td>
                                                    <td width="155">20</td>
                                                </tr>
                                                <tr>
                                                    <td width="482">Project Management</td>
                                                    <td width="155">20</td>
                                                </tr>
                                                <tr>
                                                    <td width="482">Research Project</td>
                                                    <td width="155">20</td>
                                                </tr>
                                                <tr>
                                                    <td width="482"><strong>Total Credits</strong></td>
                                                    <td width="155"><strong>120</strong></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Entry requirements <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <p>A learner must fulfill at least one of the following criteria to be allowed entry to the qualification:</p>
                                        <ul>
                                            <li>Possession of an honors degree in a related subject that was taught in English</li>
                                            <li>Possession of a level 6 qualification from a recognized awarding body</li>
                                            <li>Five years’ management experience</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Progression <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                <div class="card-body">
                                    The MSBM International Postgraduate Diploma in Operations Management programme enables learners to progress into or within employment and/or continue their further study by topping up the degree with Masters in Business Administration at certain Universities in the UK.

                                    Delivering The Qualifications
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Delivering The Qualifications <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                                <div class="card-body">
                                    <p>The course is delivered fully online. However, while the course is self-paced and 100% online, its guided learning and webinars are facilitated by subject-matter experts from the academia and practice. It is designed to accommodate of both busy professionals with tight schedules and individuals with flexible schedule. Therefore the modules and learning materials are available around the clock and completely asynchronous.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Module 1: Operations Management <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <p><strong>Module Aim</strong></p>
                                        <p>This course is an introduction to the concepts, principles, problems, and practices of operations management. Emphasis is on managerial processes for effective operations in both goods-producing and service-rendering organization. Topics include operations strategy, process design, capacity planning, facilities location and design, forecasting, production scheduling, inventory control, quality assurance, and project management. The topics are integrated using a systems model of the operations of an organization.</p>
                                        <p><strong>Learning Outcomes</strong></p>
                                        <ul>
                                            <li>Develop an understanding of and an appreciation for the production and operations management function in any organization. To understand the importance of productivity and competitiveness to both organizations and nations.</li>
                                            <li>To understand the importance of an effective production and operations strategy to an organization.</li>
                                            <li>To understand the various production and operations design decisions and how they relate to the overall strategies of organizations.</li>
                                            <li>To understand the importance of product and service design decisions and its impact other design decisions and operations.</li>
                                            <li>Obtain an understanding of quality management practice in organizations and how total quality management and six-sigma facilitate organizational effectiveness.</li>
                                            <li>To understand the roles of inventories and basics of managing inventories in various demand settings.</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Module 2: RESEARCH PROJECT <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <p><strong>Module Aim</strong></p>
                                        <p>The course is designed to help students become good researcher, to become familiar with the steps in proposing research topics, and clearly apply research knowledge in education. After completing the course, students will be able to prepare a research plan, collect data, address research questions and hypotheses, and organize a project report.</p>
                                        <p><strong>Learning Outcomes</strong></p>
                                        <ol>
                                            <li>Be able to formulate a research proposal relating to strategic business development</li>
                                            <li>Be able to use different research methodologies to gather sufficient and valid data</li>
                                            <li>Be able to present research findings in an appropriate format for a target audience</li>
                                            <li>Be able to evaluate own skills while undertaking research</li>
                                        </ol>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingEight">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        Module 3: OPERATIONS AND SUPPLY CHAIN MANAGEMENT <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <p><strong>Module Aim</strong></p>
                                        <p>The aim of the programme is to provide postgraduate-level education in operations and supply chain management principles, theories and practice. This unit introduces the concepts of logistics and supply chain management. In the modern global marketplace, companies need to be efficient in relation to the movement of supplies and delivery of the final products. The unit explores issues in relation to logistics including value, managing lead time and techniques including just-in-time, and incorporating the role of technology in this process</p>
                                        <p><strong>Learning Outcomes</strong></p>
                                        <ol>
                                            <li>Be able to investigate process and issues in the development of an efficient supply chain</li>
                                            <li>Be able to understand the need for achieving a fit between the operational and competitive strategies to implement performance system in supply chain</li>
                                            <li>Be able to understand customer relationship and the customer service dimension in supply chain management</li>
                                            <li>Be able to apply knowledge of forecasting and inventory management theories and methodologies</li>
                                            <li>Be able to demonstrate warehousing and transportation options for business requirements</li>
                                            <li>Be able to develop a global supply chain and operations perspective</li>
                                        </ol>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingEleven">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                        Module 4: TOTAL QUALITY MANAGEMENT <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <p><strong>Module Aim</strong></p>
                                        <p>The Objective of this course is to gain the knowledge of possibilities of efficient optimization and management of operation using TQM to improve the overall efficiency of the firm.</p>
                                        <p><strong>Learning Outcomes</strong></p>
                                        <ol>
                                            <li>Identify and explain the basic concepts in Total Quality Management (TQM)</li>
                                            <li>Differentiate between product quality characteristics and service quality characteristics</li>
                                            <li>List the key steps in the control of quality</li>
                                            <li>Distinguish between quality of design and quality of conformance to design</li>
                                            <li>Explain the process of planning for quality</li>
                                            <li>Explain the system of documentation, implementation and assessment of quality</li>
                                            <li>Identify and explain specific tools and techniques for quality improvement</li>
                                            <li>Explain the role of external and internal customers in setting quality parameters</li>
                                        </ol>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingNine">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        Module 5: ENTERPRISE RESOURCE PLANNING <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseNine" class="collapse" aria-labelledby="headingNine">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <p><strong>Module Aim</strong></p>
                                        <p>This course will enable student understanding of issues and decisions that must be made when embarking upon a ERP selection and implementation journey. It will also lead to an understanding the challenges associated with managing extant ERP systems. In the process students will become familiar with the forces and organizational conditions leading to the acquisition of such enterprise wide systems</p>
                                        <p><strong>Learning Outcomes</strong></p>
                                        <ol>
                                            <li>Understand and gain insight into process views of organizations and tools and techniques used to model both as-is and to-be models.</li>
                                            <li>Apply the process modeling techniques in one or more modeling environments.</li>
                                            <li>Know and be able to apply key technical terminology in enterprise information systems as they apply in different ERP products and development methods Understand key differences between the major ERP applications (such as SAP R/3, and Oracle/PeopleSoft/Sibel) and issues specific to these applications their configuration and management.</li>
                                            <li>Analyze a current architecture and perform an effective gap analysis before an ERP implementation Be able to map enterprise architectural resources to a contemporary Enterprise Architecture mapping tool.</li>
                                            <li>Understand and be able to articulate the life cycle stages of any ERP implementation.</li>
                                            <li>Effectively describe problems typical of ERP implementation projects and translate this information and use this information to anticipate and articulate the challenges associated with post-implementation management of ERP systems.</li>
                                        </ol>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTen">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        Module 6: PROJECT MANAGEMENT <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTen" class="collapse" aria-labelledby="headingTen">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <p><strong>Module Aim</strong></p>
                                        <p>To understand the process of identifying appropriate and feasible projects, and to be able to initiate and start a project. To be able to manage, monitor and control a project, including assessing, managing and controlling project risks and issues, project and team management and change management. To be able to evaluate the success or failure of a project.</p>
                                        <p><strong>Learning Outcomes</strong></p>
                                        <ol>
                                            <li>Be able to analyze business objectives to identify feasible projects</li>
                                            <li>Be able to design systems and plans for initiating managing and controlling projects</li>
                                            <li>Be able to organize and manage a project</li>
                                            <li>Be able to monitor and control the progress of projects</li>
                                            <li>Be able to review, evaluate and closeout a project</li>
                                        </ol>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwelve">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                        Accreditation <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <p>MSBM is a fully accredited institution in all branches to offer Level 4, 5, 6 and 7. The modules are written against prescribed learning outcomes defined by MSBM awarding bodies. MSBM is not a degree-awarding body.</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThirteen">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                        Tuition <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <p><a href="https://msbm.org.uk/tuition-fees/">Click here to see tuition fee</a></p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFourteen">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                        Registration <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <p>Please get in touch with us to see if you are eligible for this course. Our advisors are here to help you choose the best educational pathway for your career development.</p>
                                        <p>Click here to register for this programme or speak to our Recruitment Team</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-lg-4 mx-auto mt-3">
                    <p class="text-center"> <a href="#" class="btn btn-dark mb-2 btn-block">Get More Information</a></p>
                </div>
            </div>
        </div>
    </div>


    <div class="landing-video">
        <div class="container">
            <div class="row">
                <div class="landing-pos">
                    <div class="col-lg-6">
                        <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/VMHzfubKAiA?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="landing-video-features tpadd">
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/laptop.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Learn fast</h5>
                                    Online courses with compact learning chapters enable you to learn business skills faster than ever.
                                </div>
                            </div>
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/phone.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Study Online</h5>
                                    Get access to online study materials. All courses are 100% online and self-paced.
                                </div>
                            </div>
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/world.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Global community</h5>
                                    No conventional requirements needed, our courses are open to all ages, professions and citizenship.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mx-auto mt-3">
                    <p class="text-center"> <a href="#" class="btn btn-dark mb-2 btn-block">Get More Information</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="landing-counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="counter-text">
                        <h2>36,000+</h2>
                        <span class="counter-label">Students</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="counter-text">
                        <h2>6,000+</h2>
                        <span class="counter-label">Current Students</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="counter-text">
                        <h2>400+</h2>
                        <span class="counter-label">Courses</span>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="counter-text">
                        <h2>160+</h2>
                        <span class="counter-label">Countries</span>
                    </div>
                </div>
                <div class="col-lg-4 mx-auto mt-3">
                    <p class="text-center"> <a href="#" class="btn btn-dark mb-2 btn-block">Get More Information</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="landing-certificate">
        <div class="container">
            <div class="row">
                <div class="landing-pos">
                    <div class="col-lg-6">
                        <p class="text-center"> <img src="<?php echo ROOT_DIR; ?>images/banners/Level 7 IPGD.jpg" class="mr-3 img-certify" alt="..."></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="landing-video-features tpadd">
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/diploma.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Get your diploma</h5>
                                    You will receive an International Postgraduate Diploma from MSBM and awarding partners.
                                </div>
                            </div>
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/phone.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Learn Practical Business Modules</h5>
                                    Complete several modules ranging from Business Leadership and Managing People.
                                </div>
                            </div>
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/world.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Study while you work</h5>
                                    Obtain a degree without necessarily leaving your country.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="student-category-section why_msbm">
        <h2 class="text-center mb-3">Student Category</h2>
        <div class="container student-cat-container">
            <div class="row student-cat-row">
                <div class="col-lg-4 col-12">
                    <div class="card">
                        <h5 class="card-header text-center">
                            Industry
                        </h5>
                        <div class="card-body student-cat-pie">
                            <canvas id="chartIndustry"></canvas>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-5 col-12">
                    <div class="card">
                        <h5 class="card-header text-center">
                           Gender
                        </h5>
                        <div class="card-body">
                            <canvas id="chartGender"></canvas>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 col-12">
                    <div class="card">
                        <h5 class="card-header text-center">
                            Position
                        </h5>
                        <div class="card-body student-cat-pie">
                            <canvas id="chartPosition"></canvas>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-12">
                    <div class="card">
                        <h5 class="card-header text-center">
                            Age
                        </h5>
                        <div class="card-body">
                            <canvas id="chartAge"></canvas>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="landing-testimonial why_msbm landing-grey">
        <div class="container">
            <h2 class="text-center mb-5">What our clients say</h2>
            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="user-testify">
                        <img src="<?php echo ROOT_DIR; ?>images/banners/Amin Y..png" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                        <p>
                            <i>"The knowledge gained from modules including management and research techniques have proven advantageous."</i>
                        </p>
                        <p>Amin Y., Alumni</p>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="user-testify">
                        <img src="<?php echo ROOT_DIR; ?>images/banners/Imram F..png" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                        <p>
                            <i>"The assignments encouraged high-level critical thinking -- expectations were high, but we had great support."</i>
                        </p>
                        <p>Imram F., Alumni</p>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="user-testify">
                        <img src="<?php echo ROOT_DIR; ?>images/banners/Husnain M..png" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                        <p>
                            <i>"Nearly every lecture gripped me and I was able to choose to research subjects that expanded my existing interests."</i>
                        </p>
                        <p>Husnain M., Alumni</p>

                    </div>
                </div>



                <div class="col-lg-4 mx-auto mt-3">
                    <p class="text-center"> <a href="#" class="btn btn-dark mb-2 btn-block">Get More Information</a></p>
                </div>
            </div>
        </div>
    </div>


    <div class="landing-accredit">
        <h1 class="mb-5">Accreditation</h2>
            <div class="container">
                <div class="row mb-3">
                    <div class="col-lg-4 col-4 mb-2 mt-2">
                        <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/ATHE.svg" class="img-fluid landing-accredit-img" width="200">
                    </div>
                    <!--<div class="col-md-2 col-4 mb-2 mt-2">
                            <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/BAA.svg" class="img-fluid landing-accredit-img" width="200">
                        </div>
                        <div class="col-md-2 col-4 mb-2 mt-2">
                            <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/NUS.svg" class="img-fluid landing-accredit-img" width="200">
                        </div> -->
                    <div class="col-lg-4 col-4 mb-2 mt-2">
                        <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/OTHM.svg" class="img-fluid landing-accredit-img" width="200">
                    </div>
                    <div class="col-lg-4 col-4 mb-2 mt-2">
                        <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/QUALIFI.svg" class="img-fluid landing-accredit-img" width="200">
                    </div>
                    <!-- <div class="col-md-2 col-4 mb-2 mt-2">
                            <img src="<?php echo ROOT_DIR; ?>images/Logos/Black and White/UKRPL.svg" class="img-fluid landing-accredit-img" width="200">
                        </div> -->
                </div>
            </div>
    </div>

    <div class="logo-banner branded landing-brand">
        <div class="container">
            <h5 class="client-heading">PARTICIPANTS OF MSBM'S COURSES ARE FROM COMPANIES SUCH AS</h5>
            <div class="row text-center">
                <!-- <div class="col-md-12">
                    <img src="<?php echo ROOT_DIR; ?>images/logos-banner2.png" class="img-fluid" />
                </div> -->
                <div class="col-3">
                    <img src="<?php echo ROOT_DIR; ?>images/Logos/Coloured/msbm-coca-cola.png" class="img-fluid img-brand" />
                </div>
                <div class="col-3">
                    <img src="<?php echo ROOT_DIR; ?>images/Logos/Coloured/msbm-cadbury.png" class="img-fluid img-brand" />
                </div>
                <div class="col-3">
                    <img src="<?php echo ROOT_DIR; ?>images/Logos/Coloured/msbm-mobil.png" class="img-fluid img-brand" />
                </div>
                <div class="col-3">
                    <img src="<?php echo ROOT_DIR; ?>images/Logos/Coloured/msbm-guinness.png" class="img-fluid img-brand" />
                </div>
                <div class="col-3">
                    <img src="<?php echo ROOT_DIR; ?>images/Logos/Coloured/msbm-p-and-g.png" class="img-fluid img-brand" />
                </div>
                <div class="col-3">
                    <img src="<?php echo ROOT_DIR; ?>images/Logos/Coloured/msbm-shell.png" class="img-fluid img-brand" />
                </div>
                <div class="col-3">
                    <img src="<?php echo ROOT_DIR; ?>images/Logos/Coloured/msbm-toyota.png" class="img-fluid img-brand" />
                </div>
                <div class="col-3">
                    <img src="<?php echo ROOT_DIR; ?>images/Logos/Coloured/msbm-unilever.png" class="img-fluid img-brand" />
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('components/footer.php'); ?>

</body>

</html>