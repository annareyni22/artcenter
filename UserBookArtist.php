<?php
include 'UserHeader.php';
?>

<!--about-->
<div id="about" class="about">
	<div class="container">
		<h3 class="title wow fadeInUp animated" data-wow-delay=".5s">Book Now </h3>

	</div>
	<div style="margin: auto; width: 30%;">
		<!-- ....................  -->



		<?php
		$aid  = $_REQUEST['id'];
		$qry = "SELECT * FROM `artist_registration` a, `artist_portfolio` p WHERE a.`aid`=p.`aid` AND a.aid='" . $aid . "'";;
		$result = mysqli_query($conn, $qry);
		$row = mysqli_fetch_array($result)
		?>       
		<video width="440" height="240" controls>
		  <source src="  <?php echo $row['video']; ?>" type="video/mp4">
		 
		 
		</video>
		<form method="post">
			<table id="cust_table">
				<tr>
					<td align="center" colspan="2"><img src="<?php echo $row['image'] ?>" width='100px' height='200px'></td>
				</tr>
				<tr>
					<th>Name</th>
					<td><input type='text' value="<?php echo $row['name'] ?> " name="name" disabled></td>
				</tr>
				<tr>
					<th>Art</th>
					<td><input type='text' value='<?php echo $row['category'] ?> ' name="category" disabled></td>
				</tr>
				<tr>
					<th>Booking Date</th>
					<td><input type='date' name="date" min="<?php echo date('Y-m-d'); ?>"required></td>
				</tr>
				<tr>
					<th>Booking Description</th>
					<td><textarea name="description" required></textarea></td>
				</tr>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" style="background-color: indigo; color: white;" name="submit" value="Book Now"></td>
				
				</tr><tr>
				<td colspan="2" align="center"><a href="UserReviewArtist.php?id=<?php echo$row['aid']?>"><input type="button" style="background-color: indigo; color: white;"  value="Review"></a></td>
			</tr>
					
			</table>
		</form>
		<?php

		if (isset($_REQUEST['submit'])) {
			$uid = $_SESSION['uid'];
			$date = $_REQUEST['date'];
			$description = $_REQUEST['description'];
	   $_SESSION['date']=$_REQUEST['date'];
	   $_SESSION['aid']=$aid;

			$qry = "INSERT INTO `bookings`(`uid`,`aid`,`bookig_date`,`booking_description`,`booking_status`) VALUES('$uid','$aid','$date','$description','pending')";

			//echo $qry;
			if ($conn->query($qry) == TRUE) {
				echo "<script>alert('registeration fee 500 rs for booking');window.location='First.php'</script>";
			} else {
				echo "<script>alert('failed');window.location='UserHome.php'</script>";
			}
		}

		?>

		<!-- ....................  -->

	</div>

</div>
</div>
<!--//about-->

<!--contact-->
<div class="contact" id="contact">

	<div class="footer">
		<div class="container">

			<p class="wow fadeInUp animated" data-wow-delay=".7s">© ART CENTER. All rights reserved | Design by <a href="">KARTHIK</a></p>
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
