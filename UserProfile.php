<?php
include 'UserHeader.php';
?>

<!--about-->
<div id="about" class="about">
	<div class="container">
		<h3 class="title wow fadeInUp animated" data-wow-delay=".5s">Profile</h3>

	</div>
	<div style="margin: auto; width: 30%;">
		<!-- ....................  -->

		<form method="post">
		<table width="100%" id="cust_table">

				<?php
				$qry = "SELECT * FROM  `user_registration` WHERE  `uid`='" . $_SESSION['uid'] . "'";
				
				$result = mysqli_query($conn, $qry);
				if ($result->num_rows > 0) {
					while ($row = mysqli_fetch_array($result)) {
				?>

						<tr>
							<th>Name</th>
							<td><input type='text' value='<?php echo $row['name'] ?>' name="name"></td>
						</tr>
						<tr>
							<th>Gender</th>

							<?php
							if ($row['gender'] == "male") {   ?>
								<td> <input type="radio" name="gender" value="male" checked="true">Male <input type="radio" name="gender" value="female">Female <input type="radio" name="gender" value="other">Other</td>
							<?php } else if ($row['gender'] == "female") {  ?>
								<td> <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female" checked="true">Female <input type="radio" name="gender" value="other">Other</td>
							<?php } else {  ?>
								<td> <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female <input type="radio" name="gender" value="other" checked="true">Other</td>

							<?php }    ?>

							</td>
						</tr>
						<tr>
							<th>Address</th>
							<td><input type='text' value='<?php echo $row['address'] ?>' name="address"></td>
						</tr>
						<tr>
							<th>Phone</th>
							<td><input type='text' value='<?php echo $row['phone'] ?>' name="phone"></td>
						</tr>
						<tr>
							<th>Email</th>
							<td><input type='text' value='<?php echo $row['email'] ?>' name="email"></td>
						</tr>

						</tr>
				<?php
					}
				} else {
					echo "  <center> <h2 style='color: red;'>.... No Data Found ...</h2></center> ";
				}
				?>
				<tr>
					<td colspan="2" align="center"><input type="submit" style="background-color: indigo; color: white;" name="submit" value="Update"></td>
				</tr>
			</table>
		</form>
		</center>

		<?php
		if (isset($_REQUEST['submit'])) {
			$name = $_REQUEST['name'];
			$gender = $_REQUEST['gender'];
			$address = $_REQUEST['address'];
			$phone = $_REQUEST['phone'];
			$email = $_REQUEST['email'];

			$qry = "UPDATE user_registration SET name='$name' ,gender ='$gender',address='$address' ,phone='$phone',email='$email' WHERE  `uid`='" . $_SESSION['uid'] . "'";
			//  echo $qry;
			if ($conn->query($qry) == TRUE) {

				echo "<script>window.location='UserProfile.php'</script>";
			} else {
				echo "<script>alert(' failed');window.location='UserProfile.php'</script>";
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