<!DOCTYPE html>
<html>

<head>
	<title>ARTCENTER</title>
	<?php
	session_start();
    include('DbConnection/dbconnect.php');
    $uid = $_SESSION['uid'];
	?>
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
				<button type="button" id="loginButton" class="wow fadeInDown animated" data-wow-delay=".5s"><span class="glyphicon glyphicon-user" aria-hidden="true"><a href="index.php">Logout</a></span></button>
				<div id="loginBox">

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
						<li><a href="UserHome.php"  data-hover="Home">Home</a></li>
						<li><a href="UserViewArtist.php"  data-hover="Artist">Artist</a></li>
						<li><a href="UserViewVenue.php" data-hover="Venue">Venue</a></li>
						<li><a href="UserBoolingRequset.php"  data-hover="Request">Request</a></li>
						<li><a href="UserVenueBoolings.php" data-hover="Venue Booking">Venue Booking</a></li>
						<li><a href="UserBoolings.php" data-hover="Artist Bookings">Artist Bookings</a></li>
						<li><a href="search.php" data-hover="Artist Review">Artist Review</a></li>
						<li><a href="searchvenue.php" data-hover="Venue Review">Venue Review</a></li>
						<li><a href="UserProfile.php" data-hover="Profile">Profile</a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
			</div> 
		</nav>
	</div>
	<!--navigation-->
