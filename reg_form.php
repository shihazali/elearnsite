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

	<script>
	$( document ).ready(function() {

	$( ".qty" ).change(function() {
	var quanty = $('input[name="product_quantity"]').val();
	var fee = $('label[name="fee"]').text();
	$('label[name="total"]').text(fee * quanty);
	});
	
	});
	</script>

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
							<h2>Registration Form</h2>
							<ol class="breadcrumb darklinks">
								<li>
									<a href="./">
							Home
						</a>
								</li>
								<li>
									<a href="#">Pages</a>
								</li>
								<li class="active">Registration Form</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls columns_padding_25 section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="module-header">Registration Form</h3>
						</div>
					</div>
					<div class="row">

						<div class="col-md-7 to_animate" data-animation="scaleAppear">

							<form class="contact-form columns_padding_5" method="post" action="./">


								<div class="col-sm-6">
									<div class="form-group">
										<label for="name">First Name
											<span class="required">*</span>
										</label>
										<i class="fa fa-user highlight" aria-hidden="true"></i>
										<input type="text" aria-required="true" size="30" value="" name="fname" id="fname" class="form-control" placeholder="First Name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="name">Last Name
											<span class="required">*</span>
										</label>
										<i class="fa fa-user highlight" aria-hidden="true"></i>
										<input type="text" aria-required="true" size="30" value="" name="lname" id="lname" class="form-control" placeholder="Last Name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="phone">Phone Number
											<span class="required">*</span>
										</label>
										<i class="fa fa-phone highlight" aria-hidden="true"></i>
										<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="email">Email address
											<span class="required">*</span>
										</label>
										<i class="fa fa-envelope highlight" aria-hidden="true"></i>
										<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="email">Postal address (Optional)
											
										</label>
										<i class="fa fa-envelope highlight" aria-hidden="true"></i>
										<input type="text" aria-required="false" size="30" value="" name="address" id="address" class="qty form-control" placeholder="Postal Address (Optional)">
									</div>
								</div>
								
								<div class="col-sm-6" style="display: none;">
									<div class="form-group">
										<input type="text" aria-required="false" size="30" value="<?php echo $get['id']; ?>" name="course_id" id="course_id" class="form-control" placeholder="course_id">
									</div>
								</div>
								
								<div class="col-sm-12 bottommargin_0">

									<div class="contact-form-submit topmargin_10">
										<button type="submit" id="form_submit1" name="submit1" class="theme_button color1 wide_button margin_0">Register</button>
									</div>
								</div>


							</form>
						</div>
						<div class="col-sm-4 col-md-5 col-lg-5">

							<div class="table-responsive">
								<table class="table shop_table cart cart-table">
									<thead>
										<tr>
											<td class="product-info">Product</td>
											<td class="product-price-td">Price</td>
											<td class="product-quantity">Quantity</td>
											<td class="product-subtotal">Subtotal</td>
										</tr>
									</thead>
									<tbody>
									<?php
										$processQuery = new ProcessQuery();
										$rows = array();
										$id = $get['id'];
										$rows = $processQuery->selectCourse($id);
										    
                                        foreach($rows as $row){ 
                                            $date = stripslashes($row['course_date']);
											$edate = stripslashes($row['course_end_date']);
                                            $name = stripslashes($row['course_name']);
											$fee = stripslashes($row['course_fee']);

                                            ?>
										<tr class="cart_item">
											<td class="product-info">
												<div class="media">
													<div class="media-body">
														<h4 class="media-heading">
															<a href="shop-product-right.html"><?php echo $name; ?></a>
														</h4>
													</div>
												</div>
											</td>
											<td class="product-price">
												<span class="currencies">$</span>
												<span class="amount"><label name="fee"><?php echo $fee; ?></label></span>
											</td>
											<td class="product-quantity">
												<div class="quantity">
													<input name="product_quantity" title="Qty" class="form-control" type="number" min="0" step="1" value="1" onfocusout="totalcalculate()">
												</div>
											</td>
											<td class="product-subtotal">
												<span class="currencies">$</span>
												<span class="amount"><label name="total"></label></span>
											</td>
											
										</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>

						</div>
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