<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<?php include("ProcessQuery.php"); ?>
<html class="no-js">
<!--<![endif]-->

<head>
	<title> ProELearn</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="./">
				<div class="form-group bottommargin_0">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

		
		<div class="page_header_wrapper header_white affix-wrapper" style="height: 100px;"><div class="page_header_wrapper header_white affix-wrapper" style="height: 100px;"><div class="page_header_wrapper header_white affix-wrapper" style="height: 100px;"><header class="page_header header_white toggler_right affix">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 display_table">
							<div class="header_left_logo display_table_cell">
								<a href="./" class="logo top_logo">
									<img src="images/logo.png" alt="">
									<span class="logo_text">
										<span class="site-name big-spacing black">
											<!-- <span class="highlight">A2Z</span> -->
											ProELearn
										</span>
										 <span class="small-text big-spacing lightgrey">Let's Learn IT</span> 
									</span>
								</a>
							</div>

							<div class="header_mainmenu display_table_cell text-right">
								<!-- main nav start -->
								<nav class="mainmenu_wrapper" style="">
									<ul class="mainmenu nav sf-menu sf-js-enabled sf-arrows" style="touch-action: pan-y;">
										<li class="active">
											<a href="index.html">Home</a>
										</li>

										<!--  Start of Course -->
										<li class="">
											<a href="courses.html" class="sf-with-ul">Courses</a>
											<ul style="margin-top: 5px; display: none;">

												<li>
													<a href="project-management.html">Project Management</a>
												</li>

												<li>
													<a href="it-services-and-architecture.html">IT Service and Architecture</a>
												</li>
												
												<li>
													<a href="quality-management.html">Quality Management</a>
												</li>

												<li>
													<a href="big-data.html">Big Data</a>
													
												</li>

												<li>
													<a href="sales-force.html">Sales Force</a>
													
												</li>

												<li>
													<a href="cloud-computing.html">Cloud Computing</a>
												</li>

												<li>
													<a href="agile-scrum.html">Agile and Scrum</a>
												</li>

												<li>
													<a href="digital-marketing.html">Digital Marketing</a>
												</li>
												
												<li>
													<a href="cyber-security.html">Cyber Security</a>
												</li>
												
											</ul>
										</li>
										<!-- eof courses -->

										<!-- blog -->
										<li>
											<a href="blog-left.html" class="sf-with-ul">Blog</a>
										</li>
										<!-- eof blog -->

										<!-- contacts -->
										<li>
											<a href="contact4.html" class="sf-with-ul">Contacts</a>
										</li>
										<!-- eof contacts -->

										<li class="search hidden-xs hidden-sm">
											<a class="search_form_trigger header-button" href="#">
												<span>
													<i class="flaticon-magnifying-glass bold"></i>
													<i class="fa fa-times" aria-hidden="true"></i>
												</span>
											</a>
										</li>
									</ul>
								</nav>
								<!-- eof main nav -->
								<!-- header toggler -->
								<span class="toggle_menu">
									<span></span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="ls ms search_form_wrapper hidden-xs hidden-sm">
					<div class="container">
						<div class="row columns_margin_top_20 columns_margin_bottom_20">
							<div class="col-sm-12">

								<div class="widget_search">
									<form method="get" class="searchform" action="/">
										<div class="form-group margin_0">
											<label class="sr-only" for="headeer-widget-search">Search for:</label>
											<input id="headeer-widget-search" type="text" value="" name="search" class="form-control" placeholder="Type search keyword here" data-cip-id="headeer-widget-search">
										</div>
										<button type="submit" class="theme_button">Search</button>
									</form>
								</div>

							</div>
						</div>
					</div>
				</div>
			</header></div></div></div>
			<!-- template sections -->

			<section class="page_breadcrumbs ds black parallax section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2>Big Data Science</h2>
							<ol class="breadcrumb darklinks">
								<li>
									<a href="./">
							Home
						</a>
								</li>
								<li>
									<a href="#">courses</a>
								</li>
								<li>
									<a href="#">Big Data</a>
								</li>
								<li class="active">Big Data Science</li>
								
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">

					<div class="row">

						<div class="col-sm-7 col-md-8 col-lg-8">

							<article>
								<div class="entry-thumbnail item-media rounded  bottommargin_40">
									<video width="600" controls>
									  <source src="video/Big-data.mp4" type="video/mp4">
									  <source src="video/mov_bbb.ogg" type="video/ogg">
									  Your browser does not support HTML5 video.
									</video>
								</div>
								
								<div class="item-content">
									<div class="tab">
									  <button class="tablinks" onclick="openCity(event, 'About')">About Course</button>
									  <button class="tablinks" onclick="openCity(event, 'Content')">Course Content</button>
									  <button class="tablinks" onclick="openCity(event, 'Faq')">FAQ</button>
									  <button class="tablinks" onclick="openCity(event, 'Certification')">Certification</button>
									</div>

									<div id="About" class="tabcontent" style="display: block;">
									  <h5>About Course</h3>
									  <p>ProELearn’s Big Data Data Science masters program will provide you in-depth knowledge on designing, developing and deploying data science and Big data application in real world along with performance tuning of the application. This course will make you Big Data & Data Science Architect and by the end of the course you will have expertise on Hadoop Developer, Administration, testing and analysis Modules, working with real-time analytics, statistical computing, parsing machine-generated data, creating NoSQL applications and finally the domain of deep Learning in artificial intelligence. This program is specially designed by Industry experts and you will get 21 courses with 48 Industry based projects</p>
									  <h5>List of courses included:</h5>
									  <p>Online Instructor-Led Courses :
										<ul>
											<li>Hadoop Developer</li>
											<li>Hadoop Administration</li>
											<li>Hadoop Analyst</li>
											<li>Hadoop Testing</li>
											<li>Apache Spark & Scala</li>
											<li>Storm</li>
											<li>Data Science with R</li>
											<li>Data Science with SAS</li>
											<li>Splunk Developer and Administration</li>
											<li>AI Deep Learning Course with Tensorflow (Artificial Intelligence)</li>
											<li>Python</li>
											<li>Tableau Desktop 10</li>
											<li>MongoDB</li>
										</ul>
											Self-paced Courses :
										<ul>
											<li>HBase</li>
											<li>Cassandra</li>
											<li>CouchBase</li>
											<li>Mahout</li>
											<li>Solr</li>
											<li>Linux</li>
											<li>Java</li>
											<li>Kafka</li>
										</ul>
										</p>
										<h4>
										What you will learn in this masters program?</h4>
										<p>
										<ul>
											<li>Introduction to Hadoop</li>
											<li>Detailed MapReduce, and HDFS</li>
											<li>Hive, Pig, Sqoop, Flume, HBase</li>
											<li>Real-time analytics with Spark</li>
											<li>Prediction & analysis through clustering</li>
											<li>Deploying recommender system</li>
											<li>SAS advanced analytics & R programming</li>
											<li>Linear and logistic regression</li>
											<li>Designing and Developing NoSQL applications</li>
											<li>Mastering Artificial Intelligence Algorithms and their practical use cases</li>
										</ul>
										</p>
										<h4>
										Who should take this training?</h4>
										<p>
										<ul>
											<li>Big Data and Data Science professionals, Software developers
											<li>Business Intelligence professionals, Information architects, Project Managers
											<li>Those looking to make a career in Big Data, Data Science
										</ul>
										</p>
									</div>

									<div id="Content" class="tabcontent">
									  <h3>Big Data Hadoop Course Content</h3>
									  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> 
									</div>

									<div id="Faq" class="tabcontent">
										<h3>FAQ</h3>
										<div class="faq_container">
											<div class="faq">
												<div class="faq_question">What Is ProELearn’s Combo Program And How It Is Different From Individual Courses?</div>
												<div class="faq_answer_container">
													<div class="faq_answer">
														<p>ProELearn’s Combo program is a structured learning path specially designed by industry experts and ensures that you transform into Big Data Data Science expert. Individual courses at ProELearn focus on one or two specializations. However, if you have to masters Big Data Data Science then this program is for you
														</p>
													</div>
												</div>        
											</div>
										</div>
										<div class="faq_container">
											<div class="faq">
												<div class="faq_question">Why Should I Learn Big Data Data Science From ProELearn?</div>
													<div class="faq_answer_container">
													  <div class="faq_answer">
													  <p>
														ProELearn is the pioneer of Big Data Data Science training we provide:
														<ul><li>
														Project work & Assignment – You will work on 48+ industry based project which will give you hands on experience on the technology
														</li>
														<li>
														24*7 Support – Our Team work 24*7 to clear all your doubts
														</li>
														<li>
														Free Course Upgrade – Keep yourself updated with latest version hence it’s a lifetime investment at one go
														</li>
														<li>
														Flexible Schedule –You can attend as many batches as you want or if you are busy then you can postpone your classes to our next available batches without any extra charges.
														</li>
														<li>
														Resume Preparation & Job Assistance –We will help you to prepare your resume and market your profile for jobs. We have more than 80 clients across the globe (India, US, UK, etc.) and we circulate our learner’s profiles to them.
														</li>
														</ul>
													  </p>
													  </div>
												   </div>        
											</div>
										 </div>
										 <div class="faq_container">
											<div class="faq">
												<div class="faq_question">What Are The Various Modes Of Training That ProELearn Offers?</div>
													<div class="faq_answer_container">
													  <div class="faq_answer">
													  <p>
														ProELearn offers the self-paced training and online instructor-led training.
													  </p><p>
														Hadoop developer, Hadoop admin, Hadoop analyst, Hadoop testing, Spark & Scala, Apache Storm, Data Science with R, Data Science with SAS, Splunk, Deep learning are online instructor-led courses
														</p><p>
														Java,  Hbase, Cassandra, Apache kafka, Couchbase, Apache Solr, Linux, Mahout are self-paced courses
													  </p>
													  </div>
												   </div>        
											</div>
										 </div>
										 <div class="faq_container">
											<div class="faq">
												<div class="faq_question">
													Can I Request For A Support Session If I Find Difficulty In Grasping Topics?
												</div>
													<div class="faq_answer_container">
													  <div class="faq_answer">
													  <p>
														If you have any queries you can contact our 24/7 dedicated support to raise a ticket. We provide you email support and solution to your queries. If the query is not resolved by email we can arrange for a one-on-one session with our trainers. The best part is that you can contact ProELearn even after completion of training to get support and assistance. There is also no limit on the number of queries you can raise when it comes to doubt clearance and query resolution.
													  </p>
													  </div>
												   </div>        
											</div>
										 </div>
										 <div class="faq_container">
											<div class="faq">
												<div class="faq_question">
													What Kind Of Projects Will I Be Working On As Part Of The Training?
												</div>
													<div class="faq_answer_container">
													  <div class="faq_answer">
													  <p>
														We provide you with the opportunity to work on 48 real world projects wherein you can apply your knowledge and skills that you acquired through our training, making you perfectly industry ready
													  </p>
													  </div>
												   </div>        
											</div>
										 </div>
										 <div class="faq_container">
											<div class="faq">
												<div class="faq_question">
													Do You Provide Placement Assistance?
												</div>
													<div class="faq_answer_container">
													  <div class="faq_answer">
													  <p>
														Yes, ProELearn does provide you with placement assistance. We have tie-ups with 80+ organizations including Ericsson, Cisco, Cognizant, TCS, among others that are looking for Hadoop professionals and we would be happy to assist you with the process of preparing yourself for the interview and the job
													  </p>
													  </div>
												   </div>        
											</div>
										 </div>
										 <div class="faq_container">
											<div class="faq">
												<div class="faq_question">How Are Your Verified Certificates Awarded?</div>
													<div class="faq_answer_container">
													  <div class="faq_answer">
													  <p>
														Upon successful completion of training you have to take a set of quizzes, complete the projects and upon review and on scoring over 60% marks in the qualifying quiz the official ProELearn verified certificate is awarded.The ProELearn Certification is a seal of approval and is highly recognized in 80+ corporations around the world including many in the Fortune 500 list of companies.
													  </p>
													  </div>
												   </div>        
											</div>
										 </div>
										 <div class="faq_container">
											<div class="faq">
												<div class="faq_question">What Is The System Requirement To Attend The Training?</div>
													<div class="faq_answer_container">
													  <div class="faq_answer">
													  <p>
														Preferably 8 GB RAM (Windows or Mac) with a good internet connection
													  </p>
													  </div>
												   </div>        
											</div>
										 </div>
										 <div class="faq_container">
											<div class="faq">
												<div class="faq_question">Who Are The Instructors?</div>
													<div class="faq_answer_container">
													  <div class="faq_answer">
													  <p>
														All the instructors are from the industry with over 18+ years’ experience. They are subjects experts and each of them has gone through rigorous selection process.
													  </p>
													  </div>
												   </div>        
											</div>
										 </div>
									</div>
									
									<div id="Certification" class="tabcontent">
									  <p>This is a comprehensive course that is designed to clear multiple certifications viz.
										<ul><li>
										CCA Spark and Hadoop Developer (CCA175)
										</li><li>
										Splunk Certified Power User Certification
										</li><li>
										Splunk Certified Admin Certification
										</li><li>
										Apache Cassandra Data Stax Certification
										</li><li>
										Linux Foundation Linux Certification
										</li><li>
										Java SE Programmer Certification
										</li></ul></p><p>
										The entire training course content is in line with respective certification program and helps you clear the requisite certification exam with ease and get the best jobs in the top MNCs.
										</p><p>
										As part of this training you will be working on real time projects and assignments that have immense implications in the real world industry scenario thus helping you fast track your career effortlessly.
										</p><p>
										At the end of this training program there will be quizzes that perfectly reflect the type of questions asked in the respective certification exams and helps you score better marks in certification exam.
										</p><p>
										ProELearn Course Completion certificate will be awarded on the completion of Project work (on expert review) and upon scoring of at least 60% marks in the quiz. ProELearn certification is well recognized in top 80+ MNCs like Ericsson, Cisco, Cognizant, Sony, Mu Sigma, Saint-Gobain, Standard Chartered, TCS, Genpact, Hexaware, etc.</p>
									</div>
									
									
								</div>
								<!-- .item-content -->

							</article>

						</div>
						<!--eof .col-sm-8 (main content)-->

						<!-- sidebar -->
						<aside class="col-sm-5 col-md-4 col-lg-4">

							<div class="widget widget_categories">

								<h3 class="widget-title">Courses Date</h3>
								<ol class="greylinks list3 text-uppercase greylinks bold">
								
									 <?php
										$processQuery = new ProcessQuery();
										$data = $processQuery->selectWhere('course_table', 'C022');
										$rows = array();
                                        while($row = mysql_fetch_array($data))
                                            $rows[] = $row;
                                        foreach($rows as $row){ 
                                            $date = stripslashes($row['course_date']);
                                            $id = stripslashes($row['course_id']);
                                            
                                            ?>
                                            <li>
        										<label class="content-justify">
        											<?php echo $date; ?>
                            					</label>
                            					<a type="submit" id="enroll" name="enroll" class="theme_button color1" style="height: 43px; padding-top: 12px; color: #fff;" onclick="enrol(<?php echo $id; ?>);">Enroll Now</a>
        									</li>
                             <?php           }
										
									?>
								</ol>
							</div>

							<div class="widget widget_categories">

								<h3 class="widget-title">Course Progress</h3>
								<div class="progress">
									<div class="progress-bar" role="progressbar" data-transitiongoal="50">
									</div>
								</div>
							</div>

							<div class="widget widget_search">
								<h3 class="widget-title">Search</h3>
								<form method="get" class="searchform" action="./">

									<div class="form-group">
										<label class="sr-only" for="widget-search">Search for:</label>
										<i class="flaticon-magnifying-glass"></i>
										<input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword">
									</div>
									<button type="submit" class="theme_button color1 no_bg_button">Search</button>

								</form>
							</div>


						</aside>
						<!-- eof aside sidebar -->

					</div>
				</div>
			</section>

			<footer class="page_footer ds section_padding_top_75 section_padding_bottom_30">
				<div class="container">
					<div class="row">
						
						<div class="col-sm-3 text-center">
    
						    <ul class="no-dot menu greylinks menu-style-links">
    							<li class="footer-header">
                                    Quick Links
                                </li>
								<li class="footer-link">
									<a href="big-data.html">Big Data</a>
								</li>
								<li class="footer-link">
									<a href="sales-force.html">Sales Force</a>
								</li>
								<li class="footer-link">
									<a href="cloud-computing.html">Cloud Computing</a>
								</li>
								<li class="footer-link">
									<a href="digital-marketing.html">Digital Marketing</a>
								</li>

<li class="footer-link">
									<a href="projecct-management.html">Project Management</a>
								</li>

<li class="footer-link">
									<a href="cyber-security.html">Cyber Security</a>
								</li>

<li class="footer-link">
									<a href="it-services-and-architecture.html">IT Service and Architecture</a>
								</li>

<li class="footer-link">
									<a href="quality-management.html">Quality Management</a>
								</li>
							</ul>
							
							
						</div>

<div class="col-sm-3 text-center">
						    <ul class="no-dot menu greylinks menu-style-links">
    							<li class="footer-header">
	For Company
</li>
								<li class="footer-link">
									<a href="contact4.html">Contact Us</a>
								</li>
								<li class="footer-link">
									<a href="about-us.html">About Us
</a>
								</li>

<li class="footer-link">
									<a href="our-team.html">Our Team</a>
								</li>

<li class="footer-link">
									<a href="careers.html">Careers</a>
								</li>
								
								
								
								
							</ul>
						</div><div class="col-sm-3 text-center">
						    <ul class="no-dot menu greylinks menu-style-links">
    							<li class="footer-header">
	For Business
</li>
								<li class="footer-link">
									<a href="corporate-training.html"> Corporate Training
									</a>
								</li>
								<li class="footer-link">
									<a href="resellers.html">
	Resellers
</a>
								</li>
								
								
								
								
							</ul>
						</div>
						
						


						
					<div class="col-sm-3 text-center">
						    <ul class="no-dot menu greylinks menu-style-links">
								<li class="footer-header">
								Work With Us	
								</li>
								<li class="footer-link">
									<a href="instructor.html">Become a instructor</a>
								</li>
								<li class="footer-link">
									<a href="affilate.html">Become a affilate</a>
								</li>
								<li class="footer-link">
									<a href="guest_blog.html">Blog as guest</a>
								</li>
							</ul>
							
							
						<div class="col-sm-8 text-center">
							    
                            	<a class="social-icon soc-facebook" href="#"></a>
                                <a class="social-icon soc-twitter" href="#"></a>
                                <a class="social-icon soc-instagram" href="#"></a>
                                <a class="social-icon soc-googleplus" href="#"></a>  
                            </div></div>

<div class="col-sm-12 text-center">
    <ul class="no-dot inline-list menu greylinks inline menu-style-links">
								
								<li class="footer-link">
									<a href="term-and-condition.html">Term and Conditions</a>
								</li>

<li class="footer-link">
									<a href="delivery-and-shipping.html">Delivery and Shipping Policy</a>
								</li>

<li class="footer-link">
									<a href="privacy-policy.html">Privacy Policy</a>
								</li>
								<li class="footer-link">
									<a href="refund-and-cancellation.html">Refund and Cancellation</a>
								</li>

<li class="footer-link">
									<a href="reschedule-policy.html">Reschedule Policy</a>
								</li>
								
							</ul>
</div>

</div>
				</div>
			</footer>

			<section class="ds page_copyright section_padding_15 with_top_border_container">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<p>ProELearn &copy; Copyright 2018. All Rights Reserved.</p>
						</div>
					</div>
				</div>
			</section>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<!--  -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ae19375227d3d7edc24c098/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>