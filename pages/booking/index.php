<!doctype html>
<?php
	include_once '../../data/countries.php';
?>
<html lang="en">
<head>
	<title>Gracehouse ~Reservations</title>
	<link rel="Shortcut Icon" href="../../img/favicon.ico">
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="keywords" content="Hotel in Nairobi, Guest house in Nairobi, bed & breakfast Nairobi, accommodation in Nairobi, 
	Conference Nairobi, accommodation Nairobi, nairobi accommodation, nairobi guest houses, Gracia guest house" />
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="../../css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/libs/jquery-ui-1.10.3.custom.css">
	<link rel="stylesheet" type="text/css" href="../../css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/responsive.css">
	<link rel="stylesheet" type="text/css" href="../../css/responsive-menu.css">


	<!-- Fix ie9  -->
	<!--[if IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie9.css">
	<![endif]-->


</head>
<body>
	<!-- PRELOADER -->
	<div id="preloader">
		<span class="loader" data-loading-text="loading">
		</span>
	</div>
	<!-- END / PRELOADER -->
	<div class="md-hotel">
		<div id="mp-pusher" class="mp-pusher">
			<header class="md-header">
				<div class="container clearfix">
					<div class="grid_12">


						<!-- Logo -->
						<h1 class="md-logo">
							<a href="index.html">
								<img src="../../images/logo.png" alt="logo">
							</a>
						</h1>
						<!-- Menu -->
						<nav id="main-nav" class="nav-collapse">
							<ul id="main-menu" class="md-menu">
								<li><a href="../../index.php"><i class="fa fa-home"></i> Home</a></li>
								<li><a href="../hotel/"><i class="fa fa-bed"></i> Our Hotel</a></li>
								<li><a href="../todo/"><i class="fa fa-plane"></i> Things To Do</a></li>
								<li><a href="../rates/"><i class="fa fa-star-o"></i> Our Rates</a></li>
								<li><a href="../gallery/"><i class="fa fa-camera"></i> Gallery</a></li>
								<li><a class="pg-active" href="../booking/"><i class="fa fa-calendar"></i> Reservation</a></li>
								<li><a href="../contact/"><i class="fa fa-phone"></i> Contact Us</a></li>
							</ul>
						</nav>
						
						<!-- Icon Responsvie Menu -->
						<a id="sys_btn_toogle_menu" class="btn-toogle-res-menu" href="room-detail.html#alternate-menu"></a>
					</div>
				</div>
			</header><!-- /.md-header -->


			<!-- Menu Responsive -->
			<nav id="mp-menu" class="mp-menu alternate-menu mp-overlap right-side">
	            <div class="mp-level">
	                <h2>Menu</h2>
	                <ul>
						<li class="active"><a href="../../index.php">Home</a></li>
						<li><a href="../hotel/">Our Hotel</a></li>
						<li><a href="../todo/">Things To Do</a></li>
						<li><a href="../rates/">Our Rates</a></li>
						<li><a href="../gallery/">Gallery</a></li>
						<li><a href="../booking/">Reservation</a></li>
						<li><a href="../contact/">Contact Us</a></li>
	                </ul>
	            </div>
	        </nav>
	        <!-- Menu Responsive End -->

	        <div class="container">
				<div class="md-body md-checkout clearfix">
					<aside class="grid_3 md-sidebar">
						<div class="to-do hotel-info">
							<div class="to-do-list">
								<div class="htl">
									<div class="title">Location:</div>
									<p class="info">
										Chania Avenue, Off Ring Rd Kilimani <br>
										Next to Yaya Centre ::Nairobi, Kenya::
									</p>
									<br>
									<div class="title">Contacts</div>
									<p class="info">
										Reach us via these numbers <br> 
										+254 721 320 917(CELL) <br>
										+254-02-3870407/9(LANDLINE) <br>
										+254-20-805 3064(WIRELESS) 
									</p>
									<br>
									<div class="title">Reservations Address:</div>
									<p class="info">
										reservations@gracehouseresort.com
									</p>
								</div>
					    	</div>
						</div>
					</aside><!-- /.md-sidebar -->
					<div class="grid_9 md-main">
						<!-- /.shopping-card -->
						<section class="row row-account clearfix">
							<header class="box-heading">
								<h4 class="h3 header-sidebar hotel-heading"> Personal information</h4>	
							</header><!-- /.box-heading -->
							<div class="box-body">
								<div class="form-group">
									<label class="label-control">Full name<span class="start">*</span></label>
									<input type="text" class="input-control">
								</div>

								<div class="form-group">
									<label class="label-control">Email<span class="start">*</span></label>
									<input type="text" class="input-control">
								</div>

								<div class="form-group">
									<label class="label-control">ID #/Passport #<span class="start">*</span></label>
									<input type="text" class="input-control">
								</div>
								<div class="form-group">
									<label class="label-control">Country <span class="start">*</span></label>
									<div class="input-group select-brown">
										<label class="collapse">
											<select class="form-select">
												  <option value="">--Select your country--</option>	
										          <?php foreach ($countries as $rw){?>
										          <option value="<?php echo $rw; ?>"><?php echo $rw; ?></option>
										          <?php } ?>
											</select>
										</label>
									</div>
								</div>
								<div class="form-group">
									<label class="label-control">Phone Number (Numbers only)<span class="start">*</span></label>
									<input type="text" class="input-control">
								</div>

							</div><!-- /.box-body -->
						</section><!-- /.account-info -->
						<section class="row row-billing clearfix">
							<header class="box-heading">
								<h4 class="h3 header-sidebar hotel-heading"> Reservation Details</h4>	
							</header><!-- /.box-heading -->
							<div class="box-body">
								<div class="col-left">
									<div class="form-group">
										<label class="label-control">Arrival Date<span class="start">*</span></label>
										<input type="text" class="input-control">
									</div>
								</div>
								<div class="col-right">
									<div class="form-group">
										<label class="label-control">Departure Date<span class="start">*</span></label>
										<input type="text" class="input-control">
									</div>
								</div>
							</div><!-- /.box-body -->
							<div class="form-group">
									<label class="label-control">Meal Plan <span class="start">*</span></label>
									<div class="input-group select-brown">
										<label class="collapse">
											<select class="form-select">
												<option value="">--Select meal plan--</option>
												<option value="Bed & Breakfast">Bed & Breakfast</option>
												<option value="Halfboard">Halfboard</option>
												<option value="fullboard">Fullboard</option>
											</select>
										</label>
									</div>
							</div>
							<div class="form-group">
								<div class="grid_2">
									<div class="form-group">
										<label class="label-control"> Adults<span class="start">*</span></label>
										<div class="input-group select-brown">
											<label class="collapse">
												<select class="form-select">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</label>
										</div>
									</div>
								</div>
								<div class="grid_2">
									<div class="form-group">
										<label class="label-control"> Children</label>
										<div class="input-group select-brown">
											<label class="collapse">
												<select class="form-select">
													<option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</label>
										</div>
									</div>
								</div>
								<div class="grid_2">
									<div class="form-group">
										<label class="label-control"> Singles </label>
										<div class="input-group select-brown">
											<label class="collapse">
												<select class="form-select">
												    <option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</label>
										</div>
									</div>
								</div>
								<div class="grid_2">
									<div class="form-group">
										<label class="label-control"> Doubles</label>
										<div class="input-group select-brown">
											<label class="collapse">
												<select class="form-select">
													<option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</label>
										</div>
									</div>
								</div>
								<div class="grid_2">
									<div class="form-group">
										<label class="label-control"> Triples</label>
										<div class="input-group select-brown">
											<label class="collapse">
												<select class="form-select">
													<option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</label>
										</div>
									</div>
								</div>
								<div class="grid_2"></div>
							</div>
						</section><!-- /.billing-info -->
						<section style="margin-bottom:35px">
							<div class="form-group">
								<label class="label-control"> Special Requests</label>
								<textarea class="input-control" name="" style="height:150px;" ></textarea>
							</div>
						</section>
						<section class="row row-payment clearfix">
							<header class="box-heading">
								<h4 class="h3 header-sidebar hotel-heading"> Payment Plan</h4>	
							</header><!-- /.box-heading -->
							<div class="form-group">
								<label class="label-control"> Choose Payment Plan <span class="start">*</span></label>
								<div class="input-group select-brown">
									<label class="collapse">
										<select class="form-select">
											<option value="">-- Select payment plan --</option>
											<option value="Cash Payment">Cash Payment</option>
											<option value="Bank Transfer">Bank Transfer</option>
											<option value="M-pesa">M-Pesa</option>
										</select>
									</label>
								</div>
							</div>

						</section><!-- /.payment -->
						<div class="row">
							<form>
								<div class="form-action">
									<input type="checkbox" id="checkout" class="input-checkbox">
									<p><a class="btn btn-large btn-darkbrown" href="checkout.html#">Submit Your Booking</a></p>
								</div>
							</form>
						</div>
					</div><!-- /.md-main -->
				</div><!-- /.md-testimonail -->
			</div>
			
			<!-- Footer -->
			<footer class="md-footer">
				<div class="container clearfix">
					<div class="grid_12">
						<div class="grid_6 footer-column inner-left">
							<div class="hotel-address">
								<h3>Gracehouse Resort</h3> <br>
								<div class="footer-content">
									<address>
										<small>Chania Avenue, Off Ring Rd Kilimani</small> <br> <br>
										<small>Next to Yaya Centre : Nairobi, Kenya</small>
									</address>
									<p> <a href="#" class="website">© gracehouseresort.com</a></p>
								</div>
							</div>
						</div>
						<div class="grid_6 footer-column">
							<div class="hotel-contact">
								<h3>Contact</h3>
								<ul class="footer-content">
									<li><i class="fa fa-phone"></i> Phone (CELL) <span class="hotel-number">+254 721 320 917</span></li>
									<li><i class="fa fa-phone"></i> Phone (LANDLINE) <span class="hotel-number">+254-02-3870407/9</span></li>
									<li><i class="fa fa-envelope"></i>  Email <span class="hotel-number" style="font-size:13px;">reservations@gracehouseresort.com</span></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="grid_12">
						<div class="footer-social">
							<div class="social-inner">
								<h4>Follow us</h4>
								<span class="social-group">
									<a href="https://www.facebook.com/GraceHouseResort" target="_blank"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/GracehouseKenya" target="_blank"><i class="fa fa-twitter"></i></a>
									<a href="http://www.tripadvisor.com/Hotel_Review-g294207-d1738096-Reviews-Gracehouse_Resort-Nairobi.html" target="_blank"><img style="vertical-align:initial !important; width:initial" src="../../images/trip.png" alt=""></a>
								</span>
							</div>
						</div>
					</div>
				</div>	
			</footer>
			<!-- Footer End -->
		</div>
	</div>

<script type="text/javascript" src="../../js/modernizr.custom.js"></script>
<script type="text/javascript" src="../../js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../../js/jquery-ui-1.10.3.js"></script>

<script type="text/javascript" src="../../js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="../../js/room-detail.js"></script>

<script type="text/javascript" src="../../js/classie.js"></script>
<script type="text/javascript" src="../../js/mlpushmenu.js"></script>
<script type="text/javascript" src="../../js/script.js"></script>
<script type="text/javascript">
	$(function() {
		"use strict";
		$("#arrival-date, #departure-date").datepicker({});
	});
</script>
</body>
</html>