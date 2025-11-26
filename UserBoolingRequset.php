<?php
include 'UserHeader.php';
?>

<!--about-->
<div id="about" class="about">
	<div class="container">
		<h3 class="title wow fadeInUp animated" data-wow-delay=".5s">Booking Requests</h3>

	</div>
	<div style="margin: auto; width: 80%;">
		
		<?php
    $qry = "SELECT * FROM `user_registration` u,`bookings` b,`artist_registration` a ,`artist_portfolio` p WHERE a.`aid`=p.`aid`AND a.`aid`=b.`aid` AND b.`uid`=u.`uid` AND   b.`booking_status`='approved'='pending'  AND u.`uid`='" . $_SESSION['uid'] . "'";

	$result = mysqli_query($conn, $qry);
    if ($result->num_rows > 0) {
    ?>
       <table width="100%" id="cust_table"  >
            <tr>
                <th>Pic</th>
                <th>Name</th>
                <th >Gender</th>
                <th>Art</th>
                <th>Location</th>
                <th>District</th>
                <th>Phone</th>
                <th>Booking Date</th>
                <th>Description</th>
				<th>Booking status</th>

            </tr>
        <?php

        while ($row = mysqli_fetch_array($result)) {
            echo "
                <tr>
                <td><img src='" . $row['image'] . "' width='80px' height='80px'></td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['gender'] . "</td>
                <td>" . $row['category'] . "</td>
                <td>" . $row['location'] . "</td>
                <td>" . $row['district'] . "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['bookig_date'] . "</td>
                <td>" . $row['booking_description'] . "</td>
				<td>" . $row['booking_status'] . "</td>
                   
                </tr>";
        }
    } else {
        echo "  <center> <h2 style='color: red;'>.... No Data Found ...</h2></center> ";
    }

        ?>
        </table>
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