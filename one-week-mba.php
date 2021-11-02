<?php include_once('components/config.php'); ?>
<?php include_once('components/header.php'); ?>

<div class="main-landing-page one-week-mba">
    <div class="landing-page-form landing-nigeria">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="landing-position">
                        <h1 class="mba-header">Join us for Luxury One Week <strong>MBA</strong> in <strong>Dubai</strong></h1>
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
                                    <span class="x-price">&pound;7,500</span> &pound;3,750
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
                                    &pound; 1,200
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
                                    6 days
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
                                    Classroom
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
                        <p>This programme is geared at enhancing working executives' careers. The SEMP is an encapsulated Senior Management Programme for the High Performance Managers and Directors who work in critical roles and need an intensive course to cover the key areas that drive success and profit in business today.</p>
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="semp-dubai-content why_msbm">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>What makes us different ?</h2>
                    <p class="text-center">We are a world class business school located in the heart of London, Dubai, Muscat and Lagos.<br /> We are one of the fastest growing British business schools with a stylish blended<br /> learning model that is both online and on campus.</p>
                    <br />
                </div>
            </div>
        </div>
    </div>

    <section class="final-landing why_msbm">
        <div class="container">
            <h2 class="">One week of Learning, Luxury and Leisure</h2>
            <p>Short Executive Programme for Globally-Focused Leaders</p>
            <div class="row text-center mt-5">
                <div class='col-lg-3'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/prize.svg" class="img-semp" /></p>
                    <p class="text">Certificate</p>

                </div>
                <div class='col-lg-3'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/hotel.svg" class="img-semp" /></p>
                    <p class="text">5-Star Hotel</p>

                </div>
                <div class='col-lg-3'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/home-run.svg" class="img-semp" /></p>
                    <p class="text">Accommodation</p>

                </div>
                <div class='col-lg-3'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/plane.svg" class="img-semp" /></p>
                    <p class="text">Flight</p>

                </div>
                <div class='col-lg-3'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/yacht.svg" class="img-semp" /></p>
                    <p class="text">Yacht Cruise Party</p>

                </div>
                <div class='col-lg-3'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/backpack.svg" class="img-semp" /></p>
                    <p class="text">Study Pack</p>

                </div>
                <div class='col-lg-3'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/case-study.svg" class="img-semp" /></p>
                    <p class="text">Case Studies</p>

                </div>
                <div class='col-lg-3'>
                    <p class="text"><img src="<?php echo ROOT_DIR; ?>images/icons/meal.svg" class="img-semp" /></p>
                    <p class="text">Meals</p>

                </div>
            </div>
        </div>
    </section>

    <div class="landing-video">
        <div class="container">
            <div class="row">
                <div class="landing-pos">
                    <div class="col-lg-6">
                        <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/G-LUKgG6dOY?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

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
                                        Certificate Description <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>

                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <p>The Special Executive Masters Programme is an encapsulated Senior Executive Management Programme "SEMP MBA" for high-performance managers and directors who work in critical roles and need an intensive course to cover the key areas that drive success and profit in business today.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Is the SEMP 'MBA' right programme for me?<i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    If you have the drive and uphold the vision to take your current role to the next level in order to distinguish yourself as a truly high-performance manager, then this is just the right programme for you!
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What's in it for me? <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
                                <div class="card-body">
                                    <p>You will gain a complete and thorough grounding in all the critical management functions including strategy, marketing, finance, people management and integrated management. By the end of the week, you will have worked through several case studies, made numerous contacts and heard from some of the best business trainers in the field today!</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        What's in it for my company? <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
                                <div class="card-body">
                                    <p>Not only will you have completed our fast-track management development programme, but by the end of the week you will have a complete strategic business plan which you can take back to the workplace and start implementing immediately!</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Why choose the SEMP MBA? <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
                                <div class="card-body">
                                    <p>As Leaders in Senior Management Development Training; MSBM has developed this programme in a one-week format using the Core Principles of a Business School MBA. This format allows delegates to overcome their day-to-day operational demands and focus on developing themselves and their business.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Turning ideas into business success <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix">
                                <div class="card-body">
                                    <p>Individuals within Companies are full of creative ideas for Business Success. Turning these ideas into results needs a better vehicle; a process and a way of thinking to structure the thoughts of those aspiring to become a truly High-Performance Manager. In this vital one week we will help you to better understand your business or business area, make solid decisions and then implement those decisions for business and personal success:<br>
                                        1. Understand the business<br>
                                        Get a thorough insight into your business from its many different dimensions<br>
                                        Discover the different options open to you for achieving business objectives and targets<br>
                                        For each business issue – appreciate the links between the different functional areas<br>
                                        2. Make decisions<br>
                                        Decide or propose a decision with conviction and confidence<br>
                                        Plan for improvement and success – clear logical and coherent planning<br>
                                        Be committed and get commitment from others on the decisions and plans<br>
                                        3. Implement improvement changes<br>
                                        Having understood and decided, go to action with greater confidence<br>
                                        Manage the constraints and opportunities<br>
                                        Manage and lead individuals and teams in making it all work<br>
                                        Measure the progress of your actions and adjust the course to remain on target</p>

                                    <p><strong>Turning the learning into results – your business case</strong><br>
                                        During the programme, we will cover many tools, techniques and concepts. Their true value, however, is in being able to apply them to your real business.<br>
                                        How will we achieve this?<br>
                                        In workshop teams, you will choose a real business to start up, grow or acquire. Each evening we will apply the techniques learned to this business idea through to planning.<br>
                                        In this way, the conversion of learning to usage is more certain and provides a fun way to learn.<br>
                                        As someone committed to your own personal success in business and the success of your organisation, I look forward to welcoming you on this programme and to helping you to develop your career as a high-performance manager. I am confident the investment in this one week will prove as rewarding for you as it has done for thousands before you!</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Who should attend? <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven">
                                <div class="card-body">
                                    <p>The programme is designed for any senior manager or director, who is a general management role or fast approaching such positions. The reasons were given by previous delegates for attending the programme include:<br>
                                        • Promotion to 'generalist' roles from functional specialisation<br>
                                        • Contributing to the growth of my organisation<br>
                                        • Guiding my company to profitability<br>
                                        • Personal career development<br>
                                        • A 'taster' before embarking upon an academic MBA programme<br>
                                        • Broadening of business expertise for those from the public and not-for-profit sectors<br>
                                        • Personal recommendation by previous delegatesBecause of the full-time format, delegates are afforded the time to immerse themselves fully in the experience and gain more from the programme.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingEight">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        Modules <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight">
                                <div class="card-body">
                                    <p><strong>DAY ONE</strong><br>
                                        Knowing your market and business environment (Business Strategy)</p>
                                    <p>Key benefits of the day<br>
                                        1 Generating and evaluating creative, innovative &amp; strategic options<br>
                                        2 Focusing your strategic thinking on lines of enquiry most likely to lead to strategic breakthrough<br>
                                        3 Becoming familiar with key techniques of external analysis and how this can be simplified and accelerated<br>
                                        4 Understanding the role of leadership and vision in strategy more clearly<br>
                                        5 Prioritising the implementation strategies<br>
                                        6 Building confidence in managing the strategic process yourself</p>
                                    <p><strong>Content</strong><br>
                                        As Business Strategy is the route to our goals and objectives, it belongs to and is the responsibility of every manager and decision-maker at all levels, be it corporate, strategic business unit or departmental. We must all then understand it, plan it and implement it. This module emphasises the importance of taking a wide view or 'helicopter vision' and provides analytical and decision-making techniques to look beyond everyday operational concerns and examine what the business as a whole has to do now and what it must do in the future. In this intensive module, a strategy is demystified through a mixture of casework and analysis of participants' own issues. This day will help you to develop your forward- thinking and give you the opportunity to explore the issues that are of prime concern to you.</p>
                                    <p>Topics covered include:<br>
                                        • What is strategy?<br>
                                        • The planning process<br>
                                        • Understanding the potential and risks from external and internal business environments<br>
                                        • Analysing the market as the best source for strategic opportunities<br>
                                        • How to develop strategies that differentiate us from the crowd<br>
                                        • Gathering and appraising the strategic options<br>
                                        • Articulating a vision for the business<br>
                                        • Using tools and techniques such as Porter's 5 Forces, Force field analysis<br><br>
                                        <strong>DAY TWO</strong><br>
                                        The routes to growth and success (Marketing Management)</p>
                                    <p>Key benefits of the day<br>
                                        1 Listening to and understanding what customers value most<br>
                                        2 Responding to these values to generate an excellent response from our customers<br>
                                        3 Appreciating your own role in marketing – regardless of your function<br>
                                        4 Contributing actively to making your customers successful<br>
                                        5 Implementing and evaluating marketing actions<br>
                                        6 Predicting change and responding to threats<br>
                                        7 Developing a marketing strategy<br>
                                        8 Busting through the jargon</p>
                                    <p><strong>Content</strong><br>
                                        Organisations where every individual considers himself a marketer achieve the greatest success. These companies understand that enhancing the total customer experience by listening to what really excites customers and then responding with products and services which makes customers successful builds trust and confidence from the market. Every individual in the company is then committed to this customer success. This module explores vital elements such as segmentation and positioning, designing a marketing plan and making it work by understanding product/service development, pricing strategies, how to communicate the value to the market and selecting the best routes to market. Every opportunity will be given to ensure that participants are able to apply key concepts to their business situations whether from a business-to-business environment or a business-to-consumer. Engaging and informative, the day provides a thorough grounding in the theory and practice of marketing today.</p>
                                    <p>Topics covered include:<br>
                                        • What is marketing all about?<br>
                                        • How marketing fits into the rest of the organisation<br>
                                        • The external marketing environment – analytical tools and techniques<br>
                                        • Marketing strategy<br>
                                        • Segmentation, positioning and targeting<br>
                                        • Establishing the marketing mix – Beyond the 4 'P' (There are now 7 'P's)<br>
                                        • Marketing communications – managing the promotional campaign<br>
                                        • Price, product and distribution channels<br>
                                        • Drawing up the marketing plan<br>
                                        • Implementation, monitoring and control<br><br>
                                        <strong>DAY THREE</strong></p>
                                    <p>Managing the vital resource – (People Leadership and People Management for Senior Managers)</p>
                                    <p>Getting people and yourself to be even more productive</p>
                                    <p>Key benefits of the day<br>
                                        1 Redefining the role of the manager<br>
                                        2 Understanding what really motivates you and your people<br>
                                        3 Improving communications – making sure the right message is delivered in the right way<br>
                                        4 Developing collaborative skills – ensuring teams and groups work successfully<br>
                                        5 Dealing with difficult issues – resistance to change and poor performance<br>
                                        6 Smarter delegation – resulting in a stronger taking of responsibilities<br>
                                        7 Helping people to have the courage to make decisions and propose solutions<br>
                                        8 Managing upwards – getting the best from your boss</p>
                                    <p><strong>Content</strong><br>
                                        Never before has the pace of change been so relentless in business. Continual technological advancement, intensive competitive pressure and shortened product lifecycles all influence the way we work. Nowhere are their effects more apparent than in the complex interrelationships between those at work. Today's senior manager must be capable of responding to the challenges involved in leading people in a dynamic business environment. This means developing a range of skills and techniques to cope with diverse and demanding situations.</p>
                                    <p>You need to be able to draw upon a range of appropriate strategies in order to influence, persuade and achieve commitment and cooperation from those around you.<br>
                                        But most of all, you need to understand yourself – your management and leadership style. Only by first identifying your own strengths and weaknesses can you hope to develop into a better manager of people. This fascinating module will expand your people management capabilities and help you to make things happen successfully in your business.</p>
                                    <p>Topics covered include:<br>
                                        • Communication principles and managing tough decisions<br>
                                        – lifting our personal barriers to success<br>
                                        – Communication at its best<br>
                                        – handling challenging management situations<br>
                                        – How to deal with different types of people</p>
                                    <p>• Situational leadership and upward management<br>
                                        – understanding your personal leadership style, areas to build on and to improve<br>
                                        – applying the right style to every management situation<br>
                                        – Upward management</p>
                                    <p>&nbsp;</p>
                                    <p><strong>DAY FOUR</strong></p>
                                    <p>Business viability and financial strength (Financial Management)</p>
                                    <p>Key benefits of the day<br>
                                        1 Understanding the content of financial accounts<br>
                                        2 Introduction to the tools and techniques of financial accounting – balance sheets, profit and loss accounts, cash flow statements<br>
                                        3 Making better decisions: management accounting techniques for investment decisions<br>
                                        4 How key financial ratios work and what they tell you about a business<br>
                                        5 Applying the principles and structures of financial management to strategic and operational decision- making</p>
                                    <p><strong>Content</strong><br>
                                        Your decisions, proposals and actions will have a financial impact on the company. This module will open up your understanding of finance and the implications of your work on the wealth of the organisation. You will be more confident in meetings and with reading financial reports. In one extremely intensive but rewarding day, you will transform your financial and accounting skills and will gain the confidence and ability to make a more effective contribution to your business and your team. Even those with an accounting background may benefit from this stimulating examination of the basic principles of this essential area of business activity.</p>
                                    <p>Topics covered include:<br>
                                        • Financial accounts – users and uses of financial information<br>
                                        • Financial statements – analysis and interpretation, internal and external measures<br>
                                        • Company accounts: fact or fiction?<br>
                                        • Understanding the financial press<br>
                                        • Management accounts – costing and pricing, product profitability, management information<br>
                                        • Financial management – future decisions, discounted cash flow, IRR, payback period<br>
                                        NB: please bring a calculator to use on this day</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingEleven">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                        Programme Enrollment <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven">
                                <div class="card-body">
                                    <p>This certificate programme is designed for all professionals in management positions irrespective of their organisations or backgrounds and those desirous of acquiring management knowledge for a career boost and to enhance their productivity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingNine">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                        Certificate Accreditation <i class="fa fa-chevron-down float-right"></i>
                                        <i class="fa fa-chevron-up float-right"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseNine" class="collapse" aria-labelledby="headingNine">
                                <div class="card-body">
                                    <p>Participants who successfully complete all the modules in the programme will receive SEMP Certificate in Business Administration Certificate from the Metropolitan School of Business and Management UK. Please note that the SEMP is a non-degree, non-credit bearing programme. Delegates get a certificate of completion at the end of the programme called the SEMP Certificate.</p>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="card">
                                <div class="card-header" id="headingTen">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed btn-block" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            Disclaimer <i class="fa fa-chevron-down float-right"></i>
                                            <i class="fa fa-chevron-up float-right"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen">
                                    <div class="card-body">
                                        <p>The Special Executive Masters Programme (SEMP) is an Executive Education Programme.It is "NON-CREDIT BEARING and NON-DEGREE HOLDING". The SEMP is NOT an actual Masters Programme but a trademark of the Metropolitan School of Business and Management. The SEMP is very similar to the "MINI MBA" offered by Universities all around the world. However, the modules of the SEMP programme was modelled after the regular masters programmes which allow delegates to gain a thorough knowledge of the subject. This programme cannot be used as a Masters Certificate or disguised as such as it carries no credit and cannot be used to pursue an academic PHD. However the relevance of the certificate lies in the knowledge of the bearer to demonstrate ground knowledge of the subject the certificate was issued in, and this certificate counts towards the appropriate Continuous Professional Development (CPD).</p>
                                    </div>
                                </div>
                            </div> -->

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
                            <i>"I chose MSBM because I wanted to bolster what I'm already doing in marketing management, and to help my company with that because we were in the process of restructuring, rebranding, and recapitalizing."</i>
                        </p>
                        <p>Odinaka C., Alumni</p>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="user-testify">
                        <img src="<?php echo ROOT_DIR; ?>images/banners/Alsuwaidi R..png" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                        <p>
                            <i>"This was a crash course in seeing what kind of leader you were and how you adapted to different situations you couldn't predict. I got to examine my own strengths and weaknesses on the fly. It inspired me to try to change my leadership moment, my approach."</i>
                        </p>
                        <p>Alsuwaidi R., Alumni</p>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="user-testify">
                        <img src="<?php echo ROOT_DIR; ?>images/banners/Imram F..png" class="mr-3 img-fluid rounded-circle img-testify" alt="...">
                        <p>
                            <i>"I have attended other executive education programs at other schools, but this is the best program I have ever attended in terms of interactive structure. Everything about the week was really organized to maximize our time."</i>
                        </p>
                        <p>Imram F., Alumni</p>

                    </div>
                </div>



                <div class="col-lg-4 mx-auto mt-3">
                    <p class="text-center"> <a href="#" class="btn btn-dark mb-2 btn-block">Get More Information</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="landing-accredit">
        <h1 class="mb-5">MSBM Partners</h2>
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

<?php include_once('components/footer.php'); ?>

</body>

</html>