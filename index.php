<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<?php
	session_start();
	include('DbConnection/dbconnect.php');
	?>
	<title>ART CENTER</title>
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Warbler Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="css/lightbox.css">
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<!--google-fonts-->
	<link href='//fonts.googleapis.com/css?family=Josefin+Slab:400,100italic,100,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<!--//google-fonts-->
	<!--pop-up-->
	<script src="js/menu_jquery.js"></script>
	<!--//pop-up-->
	<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!--//end-animate-->
</head>

<body>
	<!--header-->
	<div class="header" id="home">
		<div class="container">

			<div id="loginContainer" class="sign-farm">
				<button type="button" id="loginButton" class="wow fadeInDown animated" data-wow-delay=".5s"><span class="glyphicon glyphicon-user" aria-hidden="true">Login</span></button>
				<div id="loginBox">
					<form id="loginForm">
						<fieldset id="body">
							<fieldset>
								<label for="email">Email Address</label>
								<input type="text" name="email" id="email">
							</fieldset>
							<fieldset>
								<label for="password">Password</label>
								<input type="password" name="password" id="password">
							</fieldset>
							<input type="submit" id="login" name="submit" value="Sign in">
						</fieldset>
						<span><a href="UserRegistration.php">User SignUp</a></span>
						<span><a href="ArtistRegistration.php">Artist SignUp</a></span>
						<span><a href="VenueRegistration.php">Venue SignUp</a></span>
					</form>
					<?php
					if (isset($_REQUEST['submit'])) {
						$email = $_REQUEST['email'];
						$password = $_REQUEST['password'];
						$qry = "SELECT * from login WHERE `username`='$email' AND `password`='$password' AND `status`='1'";
						$result = mysqli_query($conn, $qry);
						if ($result->num_rows > 0) {
							$data = $result->fetch_assoc();
							$uid = $data['uid'];
							$type = $data['type'];
							$_SESSION['uid'] = $uid;
							$_SESSION['username'] = $email;
							$_SESSION['type'] = $type;


							echo "<script>alert('Login Success')</script>";
							if ($type == "artist") {
								echo "<script>window.location='ArtistHome.php'</script>";
							} else if ($type == "user") {
								echo "<script>window.location='UserHome.php'</script>";
							} else if ($type == "venue") {
								echo "<script>window.location='VenueHome.php'</script>";
							} else if ($type == "admin") {
								echo "<script>window.location='AdminHome.php'</script>";
							}
						} else {
							echo "<script>alert('Login failed'); window.location.href = 'index.php'; </script>";
						}
					}

					// include('Common Page Footer.php');

					?>


				</div>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//header-->
	<!--navigation-->
	<div class="top-nav">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-center cl-effect-15">
						<li><a href="#home" class="active scroll">Home</a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
			</div>
		</nav>
	</div>
	<!--navigation-->
	<!--banner-->
	<div class="banner-info">
		<div id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner bnr-one">
					</div>
				</li>
				<li>
					<div class="banner banner1">
					</div>
				</li>
				<li>
					<div class="banner banner2">
					</div>
				</li>
			</ul>
			<div class="clearfix"> </div>
		</div>
		<div class="banner-text">
			<h1><a href="index.html" class="wow fadeInUp animated" data-wow-delay=".5s"> ART CENTER </a></h1>
			<h2 class="wow fadeInUp animated" data-wow-delay=".7s">Art is the Rhythm of life! </h2>
			<a href="#" class="scroll bnr-about wow fadeInUp animated" data-wow-delay=".9s">find</a>
			<a href="#" class="scroll bnr-about bnr-news wow fadeInUp animated" data-wow-delay="1s">Artist </a>
		</div>
	</div>
	<!--//banner-->
	<!--about-->
	<div id="about" class="about">
		<div class="container">
			<h3 class="title wow fadeInUp animated" data-wow-delay=".5s">About Us</h3>
			<div class="col-md-7 about-left wow fadeInUp animated" data-wow-delay=".7s">

			</div>
			<div class="col-md-5 about-right wow fadeInUp animated" data-wow-delay=".9s">
				<h4>Way to find best Artists</h4>
				<p>The site provides to store the details of the all the artists , so that users can search for the Performing Artists and book them according to users need by seeing their onstage performance . The project also provide venue registration and booking facility for the users.</p>
			</div>
			<div class="clearfix"> </div>
			<div class="about-bottom">
				<div class="col-md-6 about-right wow bounceInUp animated" data-wow-delay=".5s">
					<h4>ART CENTER Provides</h4>
					<p>Here is the solution for this problem. In this site we can gather all the performing Artists ( under different categories like bharatanatyam, chakyarkoothu, Kuchupudi etc) together. Then the users can view and search for the desired Performing Artists and also view their past programs & its videos and they can book them for their desired events.</p>
					<p>The registered venue (auditoriums) help the users to find different type of venue for their upcoming event. So that users can book and pay for the venue and Performing Artists together.</p>
				</div>
				<div class="col-md-6 about-left wow bounceInUp animated" data-wow-delay=".7s">
					<img src="images/img2.jpg" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//about-->


	<!-- banner-text Slider starts Here -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function() {
			// Slideshow 3
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 500,
				namespace: "callbacks",
				before: function() {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function() {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!--//End-slider-script -->
	<!-- start-smooth-scrolling-->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!--//end-smooth-scrolling-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!-- pop-up-box -->
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<!--magnificPopup-->
	<script>
		$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	<!--//magnificPopup-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/bootstrap.js"></script>
</body>

</html>