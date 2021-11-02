<?php
define("IMG_DIR", "https://msbmonline.org.uk/ui-test/newsletter/");
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
	<meta charset="utf-8"> <!-- utf-8 works for most cases -->
	<meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
	<meta name="x-apple-disable-message-reformatting"> <!-- Disable auto-scale in iOS 10 Mail entirely -->
	<title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">

	<!-- CSS Reset : BEGIN -->
	<style>
		/* What it does: Remove spaces around the email design added by some email clients. */
		/* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
		html,
		body {
			margin: 0 auto !important;
			padding: 0 !important;
			height: 100% !important;
			width: 100% !important;
			background: #f1f1f1;
			font-family: 'Work Sans', sans-serif;
		}

		/* What it does: Stops email clients resizing small text. */
		* {
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
		}

		/* What it does: Centers email on Android 4.4 */
		div[style*="margin: 16px 0"] {
			margin: 0 !important;
		}

		/* What it does: Stops Outlook from adding extra spacing to tables. */
		table,
		td {
			mso-table-lspace: 0pt !important;
			mso-table-rspace: 0pt !important;
		}

		/* What it does: Fixes webkit padding issue. */
		table {
			border-spacing: 0 !important;
			border-collapse: collapse !important;
			table-layout: fixed !important;
			margin: 0 auto !important;
		}

		/* What it does: Uses a better rendering method when resizing images in IE. */
		img {
			-ms-interpolation-mode: bicubic;
		}

		/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
		a {
			text-decoration: none;
		}

		/* What it does: A work-around for email clients meddling in triggered links. */
		*[x-apple-data-detectors],
		/* iOS */
		.unstyle-auto-detected-links *,
		.aBn {
			border-bottom: 0 !important;
			cursor: default !important;
			color: inherit !important;
			text-decoration: none !important;
			font-size: inherit !important;
			font-family: inherit !important;
			font-weight: inherit !important;
			line-height: inherit !important;
		}

		/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
		.a6S {
			display: none !important;
			opacity: 0.01 !important;
		}

		/* What it does: Prevents Gmail from changing the text color in conversation threads. */
		.im {
			color: inherit !important;
		}

		/* If the above doesn't work, add a .g-img class to any image in question. */
		img.g-img+div {
			display: none !important;
		}

		/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
		/* Create one of these media queries for each additional viewport size you'd like to fix */

		/* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
		@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
			u~div .email-container {
				min-width: 320px !important;
			}
		}

		/* iPhone 6, 6S, 7, 8, and X */
		@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
			u~div .email-container {
				min-width: 375px !important;
			}
		}

		/* iPhone 6+, 7+, and 8+ */
		@media only screen and (min-device-width: 414px) {
			u~div .email-container {
				min-width: 414px !important;
			}
		}
	</style>

	<!-- CSS Reset : END -->

	<!-- Progressive Enhancements : BEGIN -->
	<style>
		.primary {
			background: #feb062;
		}

		.bg_white {
			background: #ffffff;
		}

		.bg_light {
			background: #fafafa;
		}

		.bg_black {
			background: #000000;
			background-image: url(images/bg-header.png);
			background-size: cover;
		}

		.bg_dark {
			background: rgba(0, 0, 0, .8);
		}

		.email-section {
			padding: 2.5em;
		}

		/*BUTTON*/
		.btn {
			padding: 5px 20px;
			display: inline-block;
		}

		.btn.btn-primary {
			border-radius: 5px;
			background: #feb062;
			color: #ffffff;
		}

		.btn.btn-white {
			border-radius: 5px;
			background: #ffffff;
			color: #000000;
		}

		.btn.btn-white-outline {
			border-radius: 5px;
			background: transparent;
			border: 1px solid #fff;
			color: #fff;
		}

		.btn.btn-black {
			border-radius: 0px;
			background: #000;
			color: #fff;
		}

		.btn.btn-black-outline {
			border-radius: 0px;
			background: transparent;
			border: 2px solid #000;
			color: #000;
			font-weight: 700;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-family: 'Work Sans', sans-serif;
			color: #000000;
			margin-top: 0;
			font-weight: 400;
		}

		body {
			font-family: 'Lato', sans-serif;
			font-weight: 400;
			font-size: 15px;
			line-height: 1.8;
			color: rgba(0, 0, 0, .5);
		}

		a {
			color: #feb062;
		}

		table {}

		/*LOGO*/

		.logo h1 {
			margin: 0;
		}

		p {
			color: #333;
		}

		.logo h1 a {
			color: #000000;
			font-size: 30px;
			font-weight: 700;
			/*text-transform: uppercase;*/
			font-family: 'Work Sans', sans-serif;
		}

		.navigation {
			padding: 0;
			padding: 1em 0;
			/*background: rgba(0,0,0,1);*/
			border-top: 1px solid rgba(0, 0, 0, .05);
			border-bottom: 1px solid rgba(0, 0, 0, .05);
			margin-bottom: 0;
		}

		.navigation li {
			list-style: none;
			display: inline-block;
			;
			margin-left: 5px;
			margin-right: 5px;
			font-size: 13px;
			font-weight: 500;
			text-transform: uppercase;
		}

		.navigation li a {
			color: rgba(0, 0, 0, 1);
		}

		/*HERO*/
		.hero {
			position: relative;
			z-index: 0;
		}

		.hero .overlay {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			width: 100%;
			background: #000000;
			z-index: -1;
			opacity: .2;
		}

		.hero .text {
			color: rgba(255, 255, 255, .9);
			max-width: 50%;
			margin: 0 auto 0;
		}

		.hero .text h2 {
			color: #fff;
			font-size: 34px;
			margin-bottom: 0;
			font-weight: 700;
			line-height: 1.4;
		}

		.hero .text h2 span {
			font-weight: 600;
			color: #feb062;
		}

		/*INTRO*/
		.intro {
			position: relative;
			z-index: 0;
		}

		.intro .text {
			color: rgba(0, 0, 0, .3);
		}

		.intro .text h2 {
			color: #000;
			font-size: 34px;
			margin-bottom: 0;
			font-weight: 300;
		}

		.intro .text h2 span {
			font-weight: 600;
			color: #feb062;
		}

		/*SERVICES*/

		.text-services p {
			margin: 0;
		}

		.services {}

		.text-services {
			padding: 10px 10px 0;
			text-align: center;
		}

		.text-services h3 {
			font-size: 18px;
			font-weight: 500;
			margin-bottom: 0;
		}

		.services-list {
			margin: 0 0 20px 0;
			width: 100%;
		}

		.services-list img {
			float: left;
		}

		.services-list h3 {
			margin-top: 0;
			margin-bottom: 0;
		}

		.services-list p {
			margin: 0;
		}

		/*PROPETIES*/
		.properties {}

		.text-properties {
			padding: 10px 0;
			text-align: center;
			border: 1px solid rgba(0, 0, 0, .08);
			border-top: none;
			height: 170px;
		}

		.text-properties .meta {
			font-size: 15px;
			color: #000;
			margin: 0 10px;
			display: none;
		}

		.text-properties h3 {
			font-size: 12px;
			font-weight: 500;
			margin-bottom: 0;
			margin: 0 10px;
		}

		.text-properties .price {
			color: #000;
			font-size: 18px;
		}

		/*COUNTER*/
		.counter {
			width: 100%;
			position: relative;
			z-index: 0;
		}

		.counter .overlay {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			content: '';
			width: 100%;
			background: #000000;
			z-index: -1;
			opacity: .3;
		}

		.counter-text {
			text-align: center;
		}

		.counter-text .num {
			display: block;
			color: #ffffff;
			font-size: 34px;
			font-weight: 700;
		}

		.counter-text .name {
			display: block;
			color: rgba(255, 255, 255, .9);
			font-size: 13px;
		}


		/*HEADING SECTION*/
		.heading-section {}

		.heading-section h2 {
			color: #000000;
			font-size: 20px;
			margin-top: 0;
			line-height: 1.4;
			font-weight: 600;
		}

		.heading-section .subheading {
			margin-bottom: 20px !important;
			display: inline-block;
			font-size: 13px;
			text-transform: uppercase;
			letter-spacing: 2px;
			color: rgba(0, 0, 0, .4);
			position: relative;
		}

		.heading-section .subheading::after {
			position: absolute;
			left: 0;
			right: 0;
			bottom: -10px;
			content: '';
			width: 100%;
			height: 2px;
			background: #feb062;
			margin: 0 auto;
		}

		.heading-section-white {
			color: rgba(255, 255, 255, .8);
		}

		.heading-section-white h2 {
			font-family:
				line-height: 1;
			padding-bottom: 0;
		}

		.heading-section-white h2 {
			color: #ffffff;
		}

		.heading-section-white .subheading {
			margin-bottom: 0;
			display: inline-block;
			font-size: 13px;
			text-transform: uppercase;
			letter-spacing: 2px;
			color: rgba(255, 255, 255, .4);
		}


		ul.social {
			padding: 0;
		}

		ul.social li {
			display: inline-block;
			margin-right: 10px;
		}

		/*FOOTER*/

		.footer {
			border-top: 1px solid rgba(0, 0, 0, .05);
			color: rgba(0, 0, 0, .5);
		}

		.footer .heading {
			color: #000;
			font-size: 20px;
		}

		.footer ul {
			margin: 0;
			padding: 0;
		}

		.footer ul li {
			list-style: none;
			margin-bottom: 10px;
		}

		.footer ul li a {
			color: rgba(0, 0, 0, 1);
		}


		@media screen and (max-width: 786px) {
			.text-properties h3 {
				font-size: 10px;
				font-weight: 400;
				margin-bottom: 0;
				margin: 0px;
			}

			.text-services h3 {
				font-size: 10px;
				font-weight: 500;
				margin-bottom: 0;
			}

			.services-list p {
				margin: 0;
				font-size: 12px;
			}

			.footer .heading {
				color: #000;
				font-size: 15px;
			}

			.intro .text h2 {
				color: #000;
				font-size: 18px;
				margin-bottom: 0;
				font-weight: 300;
				font-weight: 500;
			}

			.intro .text p {
				color: #000;
				font-size: 12px;
			}
		}
	</style>


</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;">
	<center style="width: 100%; background-color: #f1f1f1;">
		<div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
			&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
		</div>
		<div style="max-width: 800px; margin: 0 auto;" class="email-container">
			<!-- BEGIN BODY -->
			<table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
				<tr>
					<td valign="top" class="bg_black" style="padding: 1em 2.5em 0 2.5em;">
						<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td class="logo" style="text-align: center;">
									<h1><a href="#"><img src="images/White-Logo-1.svg" width="20%" /></a></h1>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<!-- end tr -->
				<!-- <tr>
					<td valign="top" class="bg_white" style="padding: 0;">
						<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td width="60%" style="text-align: center;">
									<ul class="navigation">
										<li><a href="#">Home</a></li>
										<li><a href="#">Properties</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</td>
							</tr>
						</table>
					</td>
				</tr> -->
				<tr>
					<td valign="middle" class="hero bg_white" style="background-image: url(images/sample1.jpg); background-size: cover; height: 400px;">
						<!-- <div class="overlay"></div> -->
						<table>
							<tr>
								<!-- <td>
									<div class="text" style="padding: 0 4em; text-align: center;">
										<h2>Real Estate</h2>
										<p>These are short online certificate courses designed to help you develop professionally and achieve your career goals, while you earn a professional certificate which qualifies you for the appropriate continuous professional development (CPD).</p>
										<p><a href="#" class="btn btn-primary">Browse Properties</a></p>
									</div>
								</td> -->
							</tr>
						</table>
					</td>
				</tr><!-- end tr -->
				<tr>
					<td valign="middle" class="intro bg_white" style="padding: 2em 0 4em 0;">
						<table>
							<tr>
								<td>
									<div class="text" style="padding: 0 2.5em; text-align: center;">
										<h2>Over 400 Professional Certificate Courses</h2>
										<p>These are short online certificate courses designed to help you develop professionally and achieve your career goals, while you earn a professional certificate which qualifies you for the appropriate continuous professional development (CPD).</p>
										<p><a href="#" class="btn btn-black">Browse Courses</a></p>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr><!-- end tr -->
				<tr>
					<td class="bg_white email-section">
						<div class="heading-section" style="text-align: center; padding: 0 30px;">
							<h2>Study professional certificate courses with as low as N10,000</h2>
							<p>Over 400 courses ranging from Management, I.T and Accounting.</p>
						</div>
						<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td valign="top" width="100%" style="padding-top: 20px; padding-right: 10px;" class="services">
									<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
										<tr>
											<td>
												<img src="images/properties-7.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
											</td>
										</tr>
										<tr>
											<td class="text-properties">
												<h3>Professional Certificate in Capital Investment Techniques</h3>
												<p class="meta">The Professional Certificate in Strategic Organization Knowledge Management aims to introduce the learner to the concepts of organizational knowledge.</p>
												<span class="price"></span>
												<p><a href="#" class="btn btn-black">View Course</a></p>
											</td>
										</tr>
									</table>
								</td>
								<td valign="top" width="100%" style="padding-top: 20px; padding-left: 10px;" class="services">
									<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
										<tr>
											<td>
												<img src="images/properties-6.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
											</td>
										</tr>
										<tr>
											<td class="text-properties">
												<h3>Professional Certificate in Organization Vision and Stakeholders Relation</h3>
												<p class="meta">The Professional Certificate in Organization Vision and Stakeholders Relation aims to enable the learner to understand key models and tools to envision a strategic direction for the organization.</p>
												<span class="price"></span>
												<p><a href="#" class="btn btn-black">View Course</a></p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td valign="top" width="50%" style="padding-top: 20px; padding-right: 10px;" class="services">
									<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
										<tr>
											<td>
												<img src="images/properties-1.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
											</td>
										</tr>
										<tr>
											<td class="text-properties">
												<h3>Professional Certificate in Database Management System Architecture</h3>
												<p class="meta">The Professional Certificate in Database Management System Architecture aims to equip the learner with advanced knowledge of database management system modelling and emerging requirements.</p>
												<span class="price"></span>
												<p><a href="#" class="btn btn-black">View Course</a></p>
											</td>
										</tr>
									</table>
								</td>
								<td valign="top" width="50%" style="padding-top: 20px; padding-left: 10px;" class="services">
									<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
										<tr>
											<td>
												<img src="images/properties-2.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
											</td>
										</tr>
										<tr>
											<td class="text-properties">
												<h3>Professional Certificate in Emerging Trends in Human Resource Management</h3>
												<p class="meta">The Professional Certificate in Product and Process Design Strategy aims to equip the learner with an advanced understanding of the processes and underlying concepts of product process and design.</p>
												<span class="price"></span>
												<p><a href="#" class="btn btn-black">View Course</a></p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td valign="top" width="50%" style="padding-top: 20px; padding-right: 10px;" class="services">
									<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
										<tr>
											<td>
												<img src="images/properties-3.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
											</td>
										</tr>
										<tr>
											<td class="text-properties">
												<h3>Professional Certificate in Troubleshooting Wireless Network</h3>
												<p class="meta">The Professional Certificate in Troubleshooting Wireless Device aims to enable the learner to understand key methods and tools to troubleshoot a wireless network.</p>
												<span class="price"></span>
												<p><a href="#" class="btn btn-black">View Course</a></p>
											</td>
										</tr>
									</table>
								</td>
								<td valign="top" width="50%" style="padding-top: 20px; padding-left: 10px;" class="services">
									<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
										<tr>
											<td>
												<img src="images/properties-4.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
											</td>
										</tr>
										<tr>
											<td class="text-properties">
												<h3>Professional Certificate in Managing Organizational Performance Measurement</h3>
												<p class="meta">The Professional Certificate in Managing Organizational Performance Measurement aims to equip the learner with the practices and key concepts to manage the thorough measurement of an organization’s performance.</p>
												<span class="price"></span>
												<p><a href="#" class="btn btn-black">View Course</a></p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td valign="middle" class="hero bg_white" style="background-image: url(images/sample1.jpg); background-size: cover; height: 400px;">
					</td>
				</tr><!-- end tr -->
				<tr>
					<td valign="middle" class="intro bg_white" style="padding: 2em 0 4em 0;">
						<table>
							<tr>
								<td>
									<div class="text" style="padding: 0 2.5em; text-align: center;">
										<h3><strong>Advanced Professional Certificate in Applied Corporate and Business Law</strong></h3>
										<p>The Advanced Professional Certificate in Applied Corporate and Business Law provides the learner with an advance understanding of the laws that govern the legal structure of the organization, and the applicable UK Companies law of 2006. The learner will be able to point out to sections of the law that affects his/her organization while being able to better understand, analyze and prepare critical legal documents for the organization.

											The learner will gain an advanced understanding of the Sarbanes-Oxley Act of 2002 so that the learner is able to deal with corporate issues by complying with key provisions of the law.</p>
										<p><a href="#" class="btn btn-black">Enrol Now</a></p>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<!---Second Course--->
				<tr>
					<td valign="middle" class="hero bg_white" style="background-image: url(images/sample1.jpg); background-size: cover; height: 400px;">
					</td>
				</tr><!-- end tr -->
				<tr>
					<td valign="middle" class="intro bg_white" style="padding: 2em 0 4em 0;">
						<table>
							<tr>
								<td>
									<div class="text" style="padding: 0 2.5em; text-align: center;">
										<h3><strong>Advanced Professional Certificate in Applied Corporate and Business Law</strong></h3>
										<p>The Advanced Professional Certificate in Applied Corporate and Business Law provides the learner with an advance understanding of the laws that govern the legal structure of the organization, and the applicable UK Companies law of 2006. The learner will be able to point out to sections of the law that affects his/her organization while being able to better understand, analyze and prepare critical legal documents for the organization.

											The learner will gain an advanced understanding of the Sarbanes-Oxley Act of 2002 so that the learner is able to deal with corporate issues by complying with key provisions of the law.</p>
										<p><a href="#" class="btn btn-black">Enrol Now</a></p>
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="bg_white email-section" style="width: 100%;">
						<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td valign="middle" width="50%">
									<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
										<tr>
											<td class="text-services" style="text-align: left; padding-right:25px;">
												<div class="services-list">
													<div class="text">
														<h3>Get Your Course Certificate</h3>
														<p>You will receive a highly valued digital certificate at the end of each course.</p>
													</div>
												</div>
												<div class="services-list">
													<div class="text">
														<h3>Learn Practical Business Modules</h3>
														<p>Complete several modules ranging from Business Leadership and Managing People.</p>
													</div>
												</div>
												<div class="services-list">
													<div class="text">
														<h3>Meet Global Executives</h3>
														<p>Meet world class Business Executives globally as you study.</p>
													</div>
												</div>
											</td>
										</tr>
									</table>
								</td>
								<td valign="middle" width="50%">
									<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
										<tr>
											<td>
												<img src="images/PPC-sample-certificate.jpg" alt="" style="width: 100%; max-width: 600px; height: auto; margin: auto; display: block;">
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr><!-- end: tr -->
				<!-- 1 Column Text + Button : END -->
			</table>
			<table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0; border-collapse: collapse; table-layout: fixed; margin: 0 auto;">
				<tr style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
					<td valign="middle" class="bg_white footer" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background: #000000; border-top: 1px solid rgba(0, 0, 0, .05); color: white; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
						<table style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-spacing: 0; border-collapse: collapse; table-layout: fixed; margin: 0 auto;">
							<tr style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; text-align: left;" align="left">
								<td valign="middle" width="50%" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 20px; text-align: left; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" align="left">
									<!-- <h3 class="heading" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; font-family: 'Work Sans', sans-serif; margin-top: 0; font-weight: 400; color: #000; font-size: 20px;">London Office</h3> -->
									<ul style="list-style: none;">
										<h3>London</h3>
										<p>Academic Head Office:</p>
										<li>Floor 37, One Canada Square,</li>
										<li>E14 5DY, Canary Wharf,</li>
										<li>London, United Kingdom</li>
										<li><a href="mailto:info@msbm.org.uk" style="color:#fff; text-decoration:none">info@msbm.org.uk</a></li>
									</ul>
								</td>
								<td valign="middle" width="40%" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 20px; padding-right:40px; text-align: right; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" align="right">
									<ul class="social" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; margin: 0; padding: 0;">
										<li style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; display: inline-block; margin-right: 10px; list-style: none; margin-bottom: 10px;"><a href="https://www.twitter.com/msbmuk"><img src="<?php echo IMG_DIR; ?>images/004-twitter-logo.png" alt="" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; -ms-interpolation-mode: bicubic; width: 24px; max-width: 600px; height: auto; display: block; filter: invert(1);" width="24"></a></li>
										<li style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; display: inline-block; margin-right: 10px; list-style: none; margin-bottom: 10px;"><a href="https://www.facebook.com/msbmuk"><img src="<?php echo IMG_DIR; ?>images/005-facebook.png" alt="" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; -ms-interpolation-mode: bicubic; width: 24px; max-width: 600px; height: auto; display: block; filter: invert(1);" width="24"></a></li>
										<li style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; display: inline-block; margin-right: 10px; list-style: none; margin-bottom: 10px;"><a href="https://www.instagram.com/msbmuk"><img src="<?php echo IMG_DIR; ?>images/006-instagram-logo.png" alt="" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; -ms-interpolation-mode: bicubic; width: 24px; max-width: 600px; height: auto; display: block; filter: invert(1);" width="24"></a></li>
										<li style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; display: inline-block; margin-right: 10px; list-style: none; margin-bottom: 10px;"><a href="https://linkedin.com/in/metropolitanschool"><img src="<?php echo IMG_DIR; ?>images/linkedin.png" alt="" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; -ms-interpolation-mode: bicubic; width: 24px; max-width: 600px; height: auto; display: block; filter: invert(1);" width="24"></a></li>
										<li style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; display: inline-block; margin-right: 10px; list-style: none; margin-bottom: 10px;"><a href="https://www.youtube.com/channel/UCbFqTLUKSDfXJe0bA-g8APg"><img src="<?php echo IMG_DIR; ?>images/youtube.png" alt="" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; -ms-interpolation-mode: bicubic; width: 24px; max-width: 600px; height: auto; display: block; filter: invert(1);" width="24"></a></li>
									</ul>
									<a href="https://msbm.org.uk/nigeria" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; text-decoration: none; color: #000000; font-size: 30px; font-weight: 700; font-family: 'Work Sans', sans-serif;"><img src="<?php echo IMG_DIR; ?>images/White-Logo-1.svg" width="50%" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; -ms-interpolation-mode: bicubic;"></a>
								</td>
							</tr>
						</table>
					</td>
				</tr> <!-- end: tr -->
				<tr style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
					<td class="bg_light" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background: #fafafa; text-align: center; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" align="center">
						<p style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">No longer want to receive these email? You can <a href="#" style="-ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; text-decoration: none; color: rgba(0,0,0,.8);">Unsubscribe here</a></p>
					</td>
				</tr>
			</table>
		</div>
	</center>
</body>

</html>