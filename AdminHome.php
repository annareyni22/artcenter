<?php
include 'AdminHeader.php';
?>
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
			<h1><a href="index.html" class="wow fadeInUp animated" data-wow-delay=".5s"> Dancery </a></h1>
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
            <br>  <br>
            </div>
			<div class="clearfix"> </div>
			<div class="about-bottom">
				<div class="col-md-6 about-right wow bounceInUp animated" data-wow-delay=".5s">
					<h4>Dancery Provides</h4>
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
				$(function () {
				// Slideshow 3
					$("#slider3").responsiveSlides({
					auto: true,
					pager:true,
					nav:true,
					speed: 500,
					namespace: "callbacks",
					before: function () {
					$('.events').append("<li>before event fired.</li>");
					},
					after: function () {
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
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
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
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
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