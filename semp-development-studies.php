<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>
<div class="main-landing-page dev-stu">
    <div class="landing-page-form landing-uae ">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="landing-position">
                        <div>
                            <h1 class="mba-header"><strong>SPECIAL EXECUTIVE MASTERS PROGRAMME</strong> in <strong>Development Studies</strong></h1>

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

                <div class="col-lg-4 col-4 tpadd">
                    <div class="stat-text text-center">
                        <h3 class="text-center stat-heading">100%</h3>
                        <p>Completion Rate</p>
                    </div>
                </div>

                <div class="col-lg-4 col-4 tpadd">
                    <div class="stat-text text-center">
                        <h3 class="text-center stat-heading">99.9%</h3>
                        <p class="text-center">Success Rate</p>
                    </div>
                </div>

                <!-- <div class="col-lg-3 col-6 tpadd">
                        <div class="stat-text text-center">
                            <h3 class="text-center stat-heading">95%</h3>
                            <p class="text-center">Submission Rate</p>
                        </div>
                    </div> -->
                <div class="col-lg-4 col-4 tpadd">
                    <div class="stat-text text-center">
                        <h3 class="text-center stat-heading">96%</h3>
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
                                    <span class="x-price">&pound; 1,200</span> &pound; 600
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
                                    &pound; 230
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
                                    3 Months
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
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2>Special Executive Masters Programme (S.E.M.P)</h2>
                        <p>This programme is geared at enhancing professionals' careers. The SEMP is an encapsulated Senior Management Programmes are short certificate modules designed for anyone who would benefit from more in-depth business knowledge delivered in a short and intensive programme</p>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="semp-dubai-content why_msbm">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-center">What makes us different ?</h2>
                    <p class="text-center">We are a world class business school located in the heart of London, Dubai, Muscat and Lagos. We are one of the fastest growing British business schools with a stylish blended learning model that is both online and on campus.</p>
                </div>
            </div>
            <div class="row text-center mt-5">
                <div class='col-lg-4'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/prize.svg" class="img-semp-1" /></p>
                    <p class="text">Certificate</p>
                </div>
                <div class='col-lg-4'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/case-study.svg" class="img-semp-1" /></p>
                    <p class="text">Case Studies</p>

                </div>
                <div class='col-lg-4'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/deal.svg" class="img-semp-1" /></p>
                    <p class="text">Network with <br />other Professionals</p>
                </div>
                <div class='col-lg-4'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/backpack.svg" class="img-semp-1" /></p>
                    <p class="text">Study Materials</p>

                </div>

                <div class='col-lg-4'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/room.svg" class="img-semp-1" /></p>
                    <p class="text">24 hours Access to Lectures</p>

                </div>
                <div class='col-lg-4'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/question.svg" class="img-semp-1" /></p>
                    <p class="text">24 hours Support</p>

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
                                        SEMP in Development Studies <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>

                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_wrapper">
                                            <p>Development Studies is about social, economic and political change. Online Students who enroll for SEMP DS will examine issues such as poverty, hunger, environment and governance around the globe. Through courses, research, and experiential learning, they will also study community development, sustainable and participatory development, colonialism, cultural beliefs, social justice, corruption and human rights. These issues are both universal and culturally situated, so they are studied at local, national and international levels.
                                                SEMP DS covers a wide range of topics including culture, gender, communication, anthropology, geography, political science, economics, philosophy, history, religion, science and technology, which provides a broader perspective on societal problems.</p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Is the SEMP Development Studies the right programme for me?<i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <p>Development Studies is a multidisciplinary subject, it examines the pattern, policies and theories associated with inequalities in the world development as a professional, manager, consultant, if you want to develop your individual skills in the following area, then SEMP DS is the right option for you;<br>
                                            • Communication<br>
                                            • Problem Solving<br>
                                            • Critical Thinking and Conceptual Skill<br>
                                            • Creativity<br>
                                            • Multidisciplinary Approach<br>
                                            • Research<br>
                                            • Self- Reflector</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Why SEMP Development Studies? <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <p>SEMP DS examines the problems, processes, and prospects for the development of human and material resources in what are generally thought to be the less developed areas of the world. To study comparative development effectively, one must draw upon many disciplines and construct a balanced understanding of historical and contemporary processes. Thus, studying development as a social transformation requires a blending of knowledge and perspectives from political science, economics, sociology, psychology, anthropology, geography, history, and environmental science.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingNine">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        Who should enroll in this online Certificate Program? <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseNine" class="collapse" aria-labelledby="headingNine">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <p>The SEMP development Studies programme is designed for entry-level managers, up to mid-level managers, senior managers or directors, consultants who are in general management role or fast approaching such position and is seeking an opportunity to develop their personal skills.</p>
                                        <p>Here is a list of people who can enroll for the programme:</p>
                                        <p>• Non-Governmental Organizations Members(NGOs)<br>
                                            • International literacy Professionals<br>
                                            • Journalists<br>
                                            • Educators<br>
                                            • Archivist<br>
                                            • Business or Government Consultant<br>
                                            • Economic Development Advisor<br>
                                            • Government Relations Advisor<br>
                                            • Intelligence Officer<br>
                                            • Policy Analyst<br>
                                            • Public Administrations Professionals<br>
                                            • Public Policy Advisor</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Accreditation <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <p>Students who successfully complete the SEMP online programme will receive a Certificate SEMP in Development Studies from the Metropolitan School of Business and Management UK.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Modules <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <p>• Learning to Learn<br>
                                            • Reading and Note-taking<br>
                                            • Researching and Avoiding Plagiarism<br>
                                            • Talking and Listening<br>
                                            • Working in Groups<br>
                                            • Creativity and Problem Solving<br>
                                            • Stress and Time Management<br>
                                            • Project Management<br>
                                            • Presentations<br>
                                            • Effective Essay Writing</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Fees include <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix">
                                <div class="card-body">
                                    <div class="wpb_wrapper">
                                        <ul>
                                            <li>Central lecture from MSBM UK</li>
                                            <li>Live Webinars</li>
                                            <li>Study Materials</li>
                                            <li>Practical Business Case-studies</li>
                                            <li>MSBM Reference</li>
                                            <li>Course Transcript</li>
                                            <li>SEMP Certificate from MSBM UK</li>
                                            <li>Network with other professionals</li>
                                        </ul>

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
                        <p class="text-center"> <img src="<?php echo ROOT_DIR; ?>images/banners/SEMP Dubai Sample Certificate.jpg" class="mr-3 img-certify" alt="..."></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="landing-video-features tpadd">
                            <div class="media">
                                <img src="<?php echo ROOT_DIR; ?>images/banners/diploma.svg" class="mr-3 landing-video-img" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0 landing-video-heading">Get Your Course Certificate</h5>
                                    You will receive a highly valued digital certificate at the end of each course.
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
                                    <h5 class="mt-0 landing-video-heading">Meet Global Executives</h5>
                                    Meet world class Business Executives globally as you study the SEMP.
                                </div>
                            </div>
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
                        <img src="<?php echo ROOT_DIR; ?>images/banners/Alsuwaidi R..png" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                        <p>
                            <i>"All three of the SEMP Online courses I've taken have proven helpful in my role as Office Manager. It's already building the foundation for me to advance and hopefully realize my ambition to lead the company as CFO one day."</i>
                        </p>
                        <p>Alsuwaidi R., Alumni</p>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="user-testify">
                        <img src="<?php echo ROOT_DIR; ?>images/banners/Amin Y..png" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                        <p>
                            <i>"It was interesting in that it was provocative and makes you think about the dilemmas involved and the course gave realistic examples that could be encountered in work situations."</i>
                        </p>
                        <p>Amin Y., Alumni</p>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="user-testify">
                        <img src="<?php echo ROOT_DIR; ?>images/banners/Haris M..png" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                        <p>
                            <i>"I received my certificate, and I would like to thank you for your support. The course was challenging, but you were always there supporting me and ready to help. I enjoyed the learning process tremendously."</i>
                        </p>
                        <p>Haris M., Alumni</p>

                    </div>
                </div>



                <div class="col-lg-4 mx-auto mt-3">
                    <p class="text-center"> <a href="#" class="btn btn-dark mb-2 btn-block">Get More Information</a></p>
                </div>
            </div>
        </div>
    </div>



    <div class="logo-banner branded landing-brand">
        <div class="container">
            <h5 class="client-heading">PARTICIPANTS OF MSBM'S COURSES
                ARE FROM COMPANIES SUCH AS/h5>
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