<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class="main-landing-page mba">
    <div class="landing-page-form landing-uae">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="landing-position">
                        <h1 class="mba-header">MASTER'S DEGREE</h1>
                        <p>The Master's degree courses are dual qualifications consisting of Level 7 Postgraduate Diploma (OFQUAL certificates) + Top-up programme awarded by partner universities. These programmes are a total of 180 credits.</p>
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
                                    <span class="x-price">&pound; 16,000</span> &pound; 8,000
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
                                    &pound; 750
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
                                    12 Months
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
                                    Online / Classroom
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
                <div class="row text-center">
                    <div class="col-lg-12">
                        <h2 class="text-center">What makes us different ?</h2>
                        <p class="text-center">We are a world class business school located in the heart of London, Dubai, Muscat and Lagos.<br /> We are one of the fastest growing British business schools with a stylish blended<br /> learning model that is both online and on campus.</p>
                    </div>
                    <br />
                    <div class='col-lg-4 mb-3'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/prize.svg" class="img-fluid" /></p>
                        <p class="text">UK Accredited</p>
                        <p class='sub-text'>Gain an MBA degree which is recognized and accepted worldwide.</p>
                    </div>
                    <div class='col-lg-4 mb-3'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/discount.svg" class="img-fluid" /></p>
                        <p class="text">Low Fees</p>
                        <p class='sub-text'>Get as much as 60% scholarship.</p>
                    </div>
                    <div class='col-lg-4 mb-3'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/prize.svg" class="img-fluid" /></p>
                        <p class="text">100% Assignment Based</p>
                        <p class='sub-text'>All modules are assessed via submitted assignments - there are no exams to write.</p>
                    </div>
                    <div class='col-lg-4 mb-3'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/credit-card.svg" class="img-fluid" /></p>
                        <p class="text">Easy Payment Structure</p>
                        <p class='sub-text'>You can pre-structure your preferred payment option. Pay in easy instalments.</p>
                    </div>
                    <div class='col-lg-4 mb-3'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/london-bridge.svg" class="img-fluid" /></p>
                        <p class="text">Graduate In London</p>
                        <p class='sub-text'>Celebrate your success by having your graduation in London.</p>
                    </div>
                    <div class='col-lg-4 mb-3'>
                        <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/certificate.svg" class="img-fluid" /></p>
                        <p class="text">
                            <!--ATHE Level 7 PGD + MBA TOPUP--> Dual Qualifications</p>
                        <p class='sub-text'>Earn an MBA Degree + International Postgraduate Diploma in Strategic Management and Leadership</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="course-list-msbm-prog">
        <div class="categories why_msbm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-3 cat_courses">
                        <h2>Master's Degree</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="find course-list-msbm">
            <div class="container">
                <div class="row myflex">
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/bg2.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">BBA<br>Bachelor of Business</h6>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/bg8.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-10 col-lg-6 col-xl-3 card">
                        <a href="" class="card-ahref-flex">
                            <div class="card-img-wrap">
                                <img src="<?php echo ROOT_DIR; ?>images/Strategy.jpg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <p class="card-text card-uni">UK Partner University</p>
                                <h6 class="card-title">MBA<br>Master of Business Adminstration(MBA)</h6>
                                <p class="desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
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
                                <div class="card-info-btn">
                                    <button class="btn btn-dark btn-block mt-auto">Find out more</button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-normal">View more Professional Certificate Courses <i class="fa fa-chevron-right slide-icon"></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="landing-accordion degree-programme why_msbm">
        <h2 class="text-center">Curriculum</h2>
        <!-- <div class="center-line"></div> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 degree-info-accordion curriculum-acc">
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
                                    <p>This Level 7 Diploma in Strategic Management and Leadership (QCF) leading to an MBA is designed to fit around work and personal commitments. World class teaching is delivered in Modular format workshops, with online activity to enrich the learning experience. MSBM has perfected the act of delivering practical management education. Our practice-based approach focuses on addressing real-world business problems.</p>
                                    <p>We don't just give you the theory; we ensure you learn how to apply it in your working life immediately, with live case studies, interactive workshops, business simulations and 100% project based.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Stage One: Level 7 Diploma in Strategic Management and Leadership (QCF)<i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <p><strong>MODULES<br>
                                            Semester 1<br>
                                            <br>
                                            Advanced Business Research Methods (15 Credits)</strong><br>
                                        <br>
                                        Objective<br>
                                        <br>
                                        To carry out various types of academically based management research through the design of a research proposal. This involves the development of a critical understanding of the philosophical, practical and ethical concepts of research within the context of the business environment.<br>
                                        <br>
                                        <br>

                                        <strong>Professional Development and Communication Skills (15 Credits)</strong><br>
                                        <br>
                                        Objective<br>
                                        <br>
                                        This unit provides learners with the methods and techniques for assessing the development of their own skills using continuous professional development in order to support their personal and professional goals. This also helps to develop professional skills including communication, academic writing, presentation, leadership, use of information technology, preparing curriculum vitae and continuous professional development.<br>
                                        <br>
                                        <br>

                                        <strong>Strategic Change Management (15 Credits)</strong><br>
                                        <br>
                                        Objective<br>
                                        <br>
                                        This unit provides the learners with knowledge and understanding provide learners with an understanding of classic and contemporary theories change management and their applicability to contemporary organisations in the globalised world, with the identification and use of change models personal characteristics of change agent or leadership skills, and their evaluation and development, to meet current and future change management roles. The unit then considers the need for organisational change and the ways in which it can be managed to support organisational strategy.<br>
                                        <br>
                                        <br>

                                        <strong>Strategic Marketing (15 Credits)</strong><br>
                                        <br>
                                        Objective<br>
                                        <br>
                                        The unit will help learners to develop a critical understanding of concepts, methods and technical aspects of strategic marketing, the challenges associated with marketing in today's business environment. A strategic marketing strategy combines product development, promotion, distribution, pricing, relationship management and other elements of marketing. It identifies an organisation's strategic marketing goals, and explains how they will be achieved, ideally within a designated timeframe.<br>
                                        <br>
                                        <br>

                                        <strong>Semester 2<br>
                                            <br>
                                            Strategic Human Resource Management &amp; Organisational Behaviour (15 Credits)</strong><br>
                                        <br>
                                        Objective<br>
                                        <br>
                                        The learner will understand of how the effective strategic management of human resources supports the achievement of organisational purposes in different organisational contexts. The unit seeks to analyse and evaluate the contribution of strategic human resource management to competitive advantage and organisational.<br>
                                        <br>
                                        <br>

                                        <strong>Strategic Financial Management (15 Credits)</strong><br>
                                        <br>
                                        Objective<br>
                                        <br>
                                        This unit provides the learner with the skills for applying financial principles relevant to management in an organisational context. The unit aims to analyse with concepts, principles, analytical techniques and theories/models of management accounting; to make learners able to learn, evaluate and apply existing strategic financial and managerial accounting.<br>
                                        <br>
                                        <br>

                                        <strong>Enterprise and Entrepreneurship (15 Credits)</strong><br>
                                        <br>
                                        Objective<br>
                                        <br>
                                        This unit aims to outline the basics of business processes and strategies related to enterprise and entrepreneurship; to develop knowledge in enterprise and entrepreneurship in global contexts. Also, the unit helps to develop learners' awareness, academic soundness and practical skills surrounding the process of entrepreneurship and enterprise.<br>
                                        <br>
                                        <br>

                                        <strong>Strategic Management (15 Credits)</strong><br>
                                        <br>
                                        Course Overview<br>
                                        <br>
                                        To examine the principles of strategy and change management and provide learners with a critical understanding and ability to use various models of the strategy and change management process and the analysis of internal external environmental and resource variables.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Stage Two: Master of Business Administration (Top-Up) <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                <div class="card-body">
                                    <p>There are two key modules within this programme syllabus. The student must complete a coursework assignment and business research project to successfully complete the programme.<br>
                                        <br>
                                        Critical Issues in Business (10 credits)<br>
                                        <br>
                                        Dissertation and Research Methods (50 credits)</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- <div class="col-lg-6 mx-auto">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#" class="btn btn-dark mb-2 btn-block">Get More Information</a>
                            </div>

                            <div class="col-lg-6">
                                <button class="btn btn-link btn-block mb-2">Pay For This Course </button>
                            </div>
                        </div>
                    </div> -->

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

                <!-- <div class="col-lg-6 mx-auto">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#" class="btn btn-dark mb-2 btn-block">Get More Information</a>
                            </div>

                            <div class="col-lg-6">
                                <button class="btn btn-link btn-block mb-2">Pay For This Course </button>
                            </div>
                        </div>
                    </div> -->

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
                <!-- <div class="col-lg-6 mx-auto">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#" class="btn btn-dark mb-2 btn-block">Get More Information</a>
                            </div>

                            <div class="col-lg-6">
                                <button class="btn btn-link btn-block mb-2">Pay For This Course </button>
                            </div>
                        </div>
                    </div> -->

                <div class="col-lg-4 mx-auto mt-3">
                    <p class="text-center"> <a href="#" class="btn btn-dark mb-2 btn-block">Get More Information</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="landing-certificate why_msbm">
        <div class="container">
            <h2 class="text-center">Dual Qualifications</h2>
            <!-- <p class="text-center">Level 7 Postgraduate Diploma in Strategic Management and Leadership + MBA</p> -->
            <div class="row">
                <div class="landing-pos">
                    <div class="col-lg-5">
                        <p class="text-center"> <img src="<?php echo ROOT_DIR; ?>images/banners/Level 7 IPGD.jpg" class="mr-3 img-certify" alt="..."></p>
                    </div>
                    <div class="col-lg-2">
                        <p class="text-center"> <img src="<?php echo ROOT_DIR; ?>images/banners/plus.svg" class="mr-3 img-add" alt="..."></p>
                    </div>
                    <div class="col-lg-5">
                        <p class="text-center"> <img src="<?php echo ROOT_DIR; ?>images/banners/MBA Sample Certificate.jpg" class="mr-3 img-certify" alt="..."></p>
                    </div>

                </div>

                <div class="landing-testimonial">
                    <div class="container">

                        <div class="row text-center">
                            <div class="col-lg-4">
                                <p class="text">
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/diploma.svg" class="mr-3 img-fluid" alt="...">
                                </p>

                                <p class="text">Get Your Degree</p>
                                <p class="sub-text">You will receive two degrees from MSBM Partner Universities.</p>


                            </div>
                            <div class="col-lg-4">

                                <p class="text">
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/phone.svg" class="mr-3 img-fluid" alt="...">
                                </p>

                                <p class="text">Learn Practical Business Modules</p>
                                <p class="sub-text"> Complete several modules ranging from Business Leadership and Managing People.</p>

                            </div>
                            <div class="col-lg-4">

                                <p class="text">
                                    <img src="<?php echo ROOT_DIR; ?>images/banners/world.svg" class="mr-3 img-fluid" alt="...">
                                </p>

                                <p class="text">Study while you work</p>
                                <p class="sub-text">Obtain a degree without necessarily leaving your country.</p>


                            </div>
                            <!-- <div class="col-lg-6 mx-auto">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="#" class="btn btn-dark mb-2 btn-block">Get More Information</a>
                                        </div>

                                        <div class="col-lg-6">
                                            <button class="btn btn-link btn-block mb-2">Pay For This Course </button>
                                        </div>
                                    </div>
                                </div> -->

                            <div class="col-lg-4 mx-auto mt-3">
                                <p class="text-center"> <a href="#" class="btn btn-dark mb-2 btn-block">Get More Information</a></p>
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
            <h2 class="text-center mb-5">What our students say</h2>
            <div class="row text-center">
                <div class="col-lg-4">
                    <div class="user-testify">
                        <img src="<?php echo ROOT_DIR; ?>images/banners/Odinaka C..png" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                        <p>
                            <i>"MSBM was a transformational experience for me. I have grown as a leader and have gained skills to expand my professional network."</i>
                        </p>
                        <p>Odinaka C., Alumni</p>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="user-testify">
                        <img src="<?php echo ROOT_DIR; ?>images/banners/Haris M..png" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                        <p>
                            <i>"The modules were well structured, and gave me the knowledge to make sound decisions that maximize performance."</i>
                        </p>
                        <p>Haris M., Alumni</p>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="user-testify">
                        <img src="<?php echo ROOT_DIR; ?>images/banners/Husnain M..png" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                        <p>
                            <i>"Once I enrolled into the MSBM programme, I was completely into it. The class schedule and quality of education was superb."</i>
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
            <h5 class="client-heading">PARTICIPANTS OF MSBM'S COURSES
                ARE FROM COMPANIES SUCH AS</h5>
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


    <?php include_once('components/footer.php'); ?>

</body>

</html>