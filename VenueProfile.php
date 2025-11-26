<?php
include 'VenueHeader.php';
?>

<!--about-->
<div id="about" class="about">
    <div class="container">
        <h3 class="title wow fadeInUp animated" data-wow-delay=".5s">Profile</h3>

    </div>
    <div style="margin: auto; width: 60%;">
        <!-- ....................  -->
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <table width="100%" id="cust_table">

                        <?php
                        $qry = "SELECT *  FROM `venue_registration` WHERE `vid`='" . $_SESSION['uid'] . "'";
                       // echo $qry;
                        $result = mysqli_query($conn, $qry);
                        if ($result->num_rows > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                        ?>
                                <tr>
                                    <td colspan="2" align=center> <img src="<?php echo $row['image'] ?>" style="width: 150px; height: 110px;"></td>
                                </tr>
                                <tr>
                                    <th>Venue</th>
                                    <td><input type='text' value='<?php echo $row['venue_name'] ?>' name="venue_name"></td>
                                </tr>
                                <tr>
                                    <th>Owner</th>
                                    <td><input type='text' value='<?php echo $row['name'] ?>' name="name"></td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td><input type='text' value='<?php echo $row['address'] ?>' name="address"></td>
                                </tr>
                                <tr>
                                    <th>District</th>
                                    <td><input type='text' value='<?php echo $row['district'] ?>' name="district"></td>
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
                    $venue_name = $_REQUEST['venue_name'];
                    $address = $_REQUEST['address'];
                    $district = $_REQUEST['district'];
                    $phone = $_REQUEST['phone'];
                    $email = $_REQUEST['email'];
                    $qry = "UPDATE venue_registration SET name='$name' ,venue_name ='$venue_name',address='$address' ,district='$district',phone='$phone',email='$email' WHERE  `vid`='" . $_SESSION['uid'] . "'";
                    //   echo $qry;
                    if ($conn->query($qry) == TRUE) {

                        echo "<script>window.location='VenueProfile.php'</script>";
                    } else {
                        echo "<script>alert(' failed');window.location='VenueProfile.php'</script>";
                    }
                }
                ?>
            </div>
            <div class="col-md-6">

                <form method="post" enctype="multipart/form-data">
                <?php
                        $qry = "SELECT *  FROM `venue_registration` WHERE `vid`='" . $_SESSION['uid'] . "'";
                        //echo $qry;
                        $result = mysqli_query($conn, $qry);
                        if ($result->num_rows > 0) {
                            $row = mysqli_fetch_array($result)
                        ?>
                    <table width="100%" id="cust_table">
                        <tr>
                            <td>
                                <img src="<?php echo $row['image'] ?>" width="320" height="300" controls>

                            </td>
                        </tr>
                        <tr>
                            <td>Upload Image</td>
                        </tr>
                        <tr>
                            <td><input type="file" name="imgfile" placeholder="Image" required></td>
                        </tr>
                        <tr>
                            <td><input type="submit" style="background-color: indigo; color: white;" name="submit_image" value="Upload pic"></td>
                        </tr>

                    </table>
                    <?php
                            } ?>

                </form>

                <?php
                if (isset($_REQUEST['submit_image'])) {

                    $target_dir = "Venue_Photo/";
                    $target_file = $target_dir . basename($_FILES["imgfile"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                    $check = getimagesize($_FILES["imgfile"]["tmp_name"]);
                    if ($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }

                    // Check if file already exists
                    if (file_exists($target_file)) {
                        echo "Sorry, file already exists.";
                        $uploadOk = 0;
                    }

                    // Check file size
                    if ($_FILES["imgfile"]["size"] > 50000000000000) {
                        echo "Sorry, your file is too large.";
                        $uploadOk = 0;
                    }

                    // Allow certain file formats
                    if (
                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif"
                    ) {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }

                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                        // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["imgfile"]["tmp_name"], $target_file)) {

                            $uid = $_SESSION['uid'];

                            $qry = "UPDATE `venue_registration` set `image` ='$target_file' WHERE `vid`='$uid'";
                            // echo $qry;
                            if ($conn->query($qry) == TRUE) {
                                echo "<script>alert('Successfully Uploaded');window.location='VenueProfile.php'</script>";
                            } else {
                                echo "<script>alert('failed');window.location='VenueProfile.php'</script>";
                            }
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                }

                ?>
            </div>
        </div>






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