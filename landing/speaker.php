<?php include_once('../components/config.php'); ?>
<?php include "../components/landing-head.inc.php"; ?>
</head>

<style>
    .main-speaker {
        background-color: #fff !important;
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        padding-top: 150px;
    }

    .img-speaker {
        width: 30%;
    }

    .col-count-3 {
        column-count: 3;
    }

    .speaker-list li {
        text-align: center;
        padding: 10px 0;
        font-weight: 600;
        font-size: 14px;
    }

    .landing-position h2 {
        font-size: 26px;
        font-weight: 400;
        text-shadow: #000 1px 1px 1px;
    }

    .descibe-icon {
        width: 10%;
    }

    .learn-what p{
        font-weight:700
    }

    @media screen and (max-width: 768px) {
        .main-speaker {
            padding-top: 50px;
        }

        .landing-position {
            background-color: rgba(0, 0, 0, 0.4);
            padding: 15px;
        }

        .landing-position h2 {
            font-size: 20px;
            font-weight: 400;
            text-shadow: #000 1px 1px 1px;
        }

        .landing-position h1 {
            font-size: 25px;
            font-weight: 400;
            text-shadow: #000 1px 1px 1px;
        }

        .col-count-3 {
            column-count: 1;
        }

        .mba-header {
            font-size: 40px;
        }

        .stat-heading {
            font-weight: 700;
            font-size: 20px;
            margin: 0;
        }

        .speaker-list li {
            text-align: left;
            padding: 10px 0;
            font-weight: 600;
            font-size: 14px;
        }
    }
</style>

<body>

    <?php include "../components/landing-nav.inc.php"; ?>

    <div class="main-landing-page main-speaker" style="background-image: url(../images/simon-2.png);">
        <div class="landing-page-form speaker">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="landing-position">
                            <h1 class="mba-header">Exclusive Talk on <strong>Entrepreneurship</strong></h1>
                            <h2>Topic: The Secret To It All In Business & The Purpose Of Life</h2>
                            <h1><strong>With Simon Squibb</strong></h1>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <form action="https://portal.msbm.org.uk/landing-page-callback.php" method="post">
                            <div class="form-bg">
                                <div class="form-arrow">

                                </div>
                                <h3>Register</h3>
                                <div id="join-us-results"></div>
                                <!-- Form -->
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control f-input input-field" placeholder="First Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control f-input input-field" placeholder="Last Name" required="">
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

                                <!-- <div class="form-group">
                                    <input type="number" name="age" class="form-control f-input input-field" placeholder="Age" required="">
                                </div> -->

                                <!-- <div class="form-group">
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
                                </div> -->

                                <!-- <div class="form-group">
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
                                </div> -->

                                <input type="hidden" name="branch" value="Lagos">
                                <input type="hidden" name="xtr" value="info@msbm.org.uk, social@msbm.org.uk">
                                <input type="hidden" name="url" value="https://msbm.org.uk:443/landing-page/bsc-nigeria.php">

                                <button type="submit" class="btn btn-danger btn-block">RESERVE YOUR SEAT</button>
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
                            <h3 class="text-center stat-heading">8th October</h3>
                            <h6>Date</h6>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 tpadd">
                        <div class="stat-text text-center">
                            <h3 class="text-center stat-heading">10am-12pm</h3>
                            <p class="text-center">Time</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 tpadd">
                        <div class="stat-text text-center">
                            <h3 class="text-center stat-heading">Online Event</h3>
                            <p class="text-center">Location</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 tpadd">
                        <div class="stat-text text-center">
                            <h3 class="text-center stat-heading">Free</h3>
                            <p class="text-center">Price</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- <section class="landing-overlap why_msbm">
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
                                        <span class="x-price">&pound; 48,000</span> &pound; 15,000
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
                                        &pound; 650
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
                                        2 Years
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
        </section> -->
        <div class="why_msbm why-content landing-features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <p class="text-center"><img src="<?php echo ROOT_DIR; ?>images/speaker-avatar.png" class="img-speaker" /></p>
                        <div class="landing-features-content-2">
                            <h2 class="text-center">About Our Guest <br /><span class="text-danger">Simon Squibb</span></h2>
                            <p class="text-center">Simon is a <strong> entrepreneur, angel investor, mentor and podcast host.</strong>

                                He has started 17 businesses, invested in 66 and has mentored hundreds of founders. Having sold his award-winning insight-driven branding and digital agency, Fluid, to PwC, Simon now focuses on inspiring, motivating and guiding both budding and experienced entrepreneurs by sharing his personal experiences, insights, ideas and tips.</p>
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="why_msbm why-content landing-features" style="background-color: #fafafa;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="landing-features-content">
                            <h2 class="text-center">Who's this for?</h2>
                            <p class="text-center">You have an idea. You have started the business. You know it has huge potential and <br />want to scale it but need help to figure out what you don’t know.</p>
                            <div class="row text-center learn-what mt-4">
                                <div class="col-lg-4 mb-3">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/idea.svg" class="descibe-icon" />
                                    <p>How to come up with an idea or refine the one you have</p>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/folder.svg" class="descibe-icon" />
                                    <p>Business setup</p>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/enhance.svg" class="descibe-icon" />
                                    <p>Generational and enhancement</p>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/new-business.svg" class="descibe-icon" />
                                    <p>Steps to build a new business</p>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/funding.svg" class="descibe-icon" />
                                    <p>Funding for your new company</p>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/branding.svg" class="descibe-icon" />
                                    <p>Brand building and tips / tricks + trademark</p>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/megaphone.svg" class="descibe-icon" />
                                    <p>Marketing 101</p>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/purpose.svg" class="descibe-icon" />
                                    <p>What is purpose and why does it matter </p>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <img src="<?php echo ROOT_DIR; ?>images/icons/interview.svg" class="descibe-icon" />
                                    <p>Q&amp;A</p>
                                </div>
                            </div>
                            <!-- <ul class="list-unstyled col-count-3 speaker-list">
                                <li>How to come up with an idea or refine the one you have</li>
                                <li>Business setup </li>
                                <li>Generational and enhancement</li>
                                <li>Steps to build a new business</li>
                                <li>Funding for your new company</li>
                                <li>Brand building and tips / tricks + trademark</li>
                                <li>Marketing 101</li>
                                <li>What is purpose and why does it matter </li>
                                <li>Health over wealth review </li>
                                <li>Q&amp;A</li>
                            </ul> -->
                        </div>
                        <div class="text-center mt-4 mb-4">
                            <a href="#" class="btn btn-danger">Reserve Your Seat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../components/landing-footer.inc.php"; ?>
        <?php include "../components/javascript.inc.php"; ?>
    </div>
</body>

</html>