<?php
include 'UserHeader.php';
?>

<!--about-->
<div id="about" class="about">
	<div class="container">
		<h3 class="title wow fadeInUp animated" data-wow-delay=".5s">Ratings</h3>

	</div>
	<div style="margin: auto; width: 40%;">
		<!-- ....................  -->
		<?php

include('DbConnection/dbconnect.php');
$uid = $_SESSION['uid'];
$vid  = $_REQUEST['id'];
?>
<center>
<h2 style='color: red;'>.... Review Artist ...</h2><br><br>
<form method="post">
    <table>
        <tr>
            <td> Details</td>
            <td><textarea name="details" class="txtbox" placeholder="Details"></textarea></td>
        </tr>
        <tr>
            <td> Rating</td>
            <td>
                <select name="rating" class="txtbox">
                    <option value="" disabled selected>Select Rating</option>
                    <option value="⭐">⭐</option>
                    <option value="⭐⭐">⭐⭐</option>
                    <option value="⭐⭐⭐">⭐⭐⭐</option>
                    <option value="⭐⭐⭐⭐">⭐⭐⭐⭐</option>
                    <option value="⭐⭐⭐⭐⭐">⭐⭐⭐⭐⭐</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Submit" class="btn"></td>
        </tr>
    </table>
</form>
</center>
<?php
if (isset($_REQUEST['submit'])) {
    $description = $_REQUEST['details'];
    $rating = $_REQUEST['rating'];
    $qry = "INSERT INTO `vreview` (`vid`,`uid`,`details`,`rating`) VALUES('$vid','$uid','$description','$rating')";
    echo $qry."<br>";
    if ($conn->query($qry) == TRUE) {
       echo "<script type = \"text/javascript\">alert(\"Successfull\");window.location = (\"UserHome.php\")</script>";
    } else {
       echo "<script type = \"text/javascript\">alert(\"failed\");window.location = (\"UserHome.php\")</script>";
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

			<p class="wow fadeInUp animated" data-wow-delay=".7s">© ARTCENTER . All rights reserved | Design by <a href="">Karthik</a></p>
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
