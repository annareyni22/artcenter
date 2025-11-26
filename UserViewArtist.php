<?php
include 'UserHeader.php';
?>
<!--team-->
<div class="team" id="team">
    <div class="container">
        <h3 class="title wow fadeInUp animated" data-wow-delay=".5s">Artist</h3>
        <div class="team-info">

            <?php
                $qry = "SELECT * FROM `artist_registration` a, `artist_portfolio` p ,login l WHERE a.`aid`=p.`aid` AND l.uid=a.aid AND l.status='1'";
           
            $result = mysqli_query($conn, $qry);
            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_array($result)) {

            ?>
                    <div class="col-md-3 team-grids wow flipInY animated" data-wow-delay=".5s">
                        <a href="UserBookArtist.php?id=<?php echo $row['aid'] ?>">
                            <img class="img-responsive" style="width: 260px; height: 350px;" src="<?php echo $row['image'] ?>" alt="">
                            <div class="captn">
                                <h4><?php echo $row['name'] ?></h4>
                                <p><?php echo $row['district'] ?></p>
                                 <p>Artist ID : <?php echo $row['aid'] ?></p>
                                <p>Art : <?php echo $row['category'] ?></p>
                                
                                <p>Emial : <?php echo $row['email'] ?></p>
                           
                              
                            
                               
                                <button class="btn" style="background-color: green; color: white;">View</button>
                            
            
                            </div>
                        </a>
                    </div>

                    <!-- 
                    <td><a href='UserBookArtist.php?id=" . $row['aid'] . "'>Book now</a></td>
                    <td><a href='UserReviewArtist.php?id=" . $row['aid'] . "'>Review</a></td> -->

            <?php
                }
            } else {
                echo "  <center> <h2 style='color: red;'>.... No Data Found ...</h2></center> ";
            }

            ?>

            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--//team-->
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
