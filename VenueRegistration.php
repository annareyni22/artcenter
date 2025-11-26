<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<?php
session_start();
include('DbConnection/dbconnect.php');
?>

<head>
	<title>Dancery</title>
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
				<button type="button" id="loginButton" class="wow fadeInDown animated" data-wow-delay=".5s"><span class="glyphicon glyphicon-user" aria-hidden="true"><a href="index.php">Login</a></span></button>

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
	<!--contact-->
	<div class="contact" id="contact">
		<div class="container">
			<h3 class="wow fadeInUp animated" data-wow-delay=".5s">Venue SiginUp</h3>
			<div class="contact-info">
				<div class="col-md-4 contact-grids map wow fadeInRight animated" data-wow-delay=".5s">
				</div>
				<div class="col-md-4 contact-grids wow fadeInRight animated" data-wow-delay=".7s">
					<?php
					$qry = "SELECT * FROM `category` ";;
					$result = mysqli_query($conn, $qry);
					?>
					<form>
						<input type="text" name="venue_name" class="textbox" placeholder="Venue Name" required pattern="[A-Za-z-\s]+" title="enter characters only">
						<input type="text" name="name" class="textbox" placeholder="Name" onblur="if (this.value == '') {this.value = 'Telephone';}" required pattern="[A-Za-z-]+" title="enter characters only">
						<textarea name="address" class="textbox" placeholder="Address" required title="enter characters only"></textarea>
						<input type="text" name="district" class="textbox" placeholder="District" required pattern="[A-Za-z-]+" title="enter characters only">
						<input type="number" name="phone" class="textbox" maxlength="10" placeholder="Phone" required pattern="[0-9]{10}" title="enter 10 digits only">
						<input type="email" name="email" class="textbox" placeholder="Email" required>
						<input type="password" name="password" class="textbox" placeholder="Password" required>
						
						<td>
						<input type="checkbox" name="terms" value="terms"   required>
                
                <span >&nbsp;I Accept the Terms &amp; Conditions</span></td>
						
						<input type="submit" name="submit" value="SiginUp">
					</form>
					<br><br><br><br><br>
					<?php
					if (isset($_REQUEST['submit'])) {
						$venue_name = $_REQUEST['venue_name'];
						$name = $_REQUEST['name'];
						$address = $_REQUEST['address'];
						$district = $_REQUEST['district'];
						$phone = $_REQUEST['phone'];
						$email = $_REQUEST['email'];
						$password = $_REQUEST['password'];
						$qryReg = "INSERT INTO venue_registration(venue_name,name,address,district,phone,email,password) values('$venue_name','$name','$address','$district','$phone','$email','$password')";
						$qryLog = "INSERT INTO login (uid,username,password,type,`status`)values((select max(vid)from venue_registration),'$email','$password','venue','0')";
						//    echo $qryReg."<br>".$qryLog;
						if ($conn->query($qryReg) == TRUE && $conn->query($qryLog) == TRUE) {

							echo "<script>alert('Registration Request Sent Successfully');window.location='index.php'</script>";
						} else {
							echo "<script>alert('Registration failed');window.location='VenueRegistration.php'</script>";
						}
					}
					?>
				</div>

			</div>
		</div>

	</div>


	<div class="footer">
		<div class="container">
			<div class="icons wow fadeInUp animated" data-wow-delay=".5s">
				<ul>
				</ul>
				<script>
					$(function() {
						$('[data-toggle="tooltip"]').tooltip()
					})
				</script>
			</div>
			<p class="wow fadeInUp animated" data-wow-delay=".7s">© Dancery . All rights reserved | Design by <a href="">Roshni</a></p>
		</div>
	</div>
	</div>
	<!--//contact-->
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
