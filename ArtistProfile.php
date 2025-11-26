<?php

include 'ArtistHeader.php';
?>

<!--about-->
<div id="about" class="about">
    <div class="container">
        <h3 class="title wow fadeInUp animated" data-wow-delay=".5s">Profile</h3>

    </div>
    <div style="margin: auto; width: 90%;">
        <!-- ....................  -->
        <div class="row">
            <div class="col-md-4">


                <form method="post">
                    <table width="100%" id="cust_table">

                        <?php
                        $qry = "SELECT * FROM  `artist_registration` a,`artist_portfolio` p WHERE a.`aid`=p.`aid` AND a.`aid`='" . $_SESSION['uid'] . "'";
                       // echo $qry;
                        $result = mysqli_query($conn, $qry);
                        if ($result->num_rows > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                        ?>

                                <tr>
                                    <td colspan="2" align=center> <img src="<?php echo $row['image'] ?>" style="width: 150px; height: 110px;"></td>
                                </tr>
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
                                    <th>Location</th>
                                    <td><input type='text' value='<?php echo $row['location'] ?>' name="location"></td>
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
                    $gender = $_REQUEST['gender'];
                    $district = $_REQUEST['district'];
                    $location = $_REQUEST['location'];
                    $phone = $_REQUEST['phone'];
                    $email = $_REQUEST['email'];
                    $qry = "UPDATE artist_registration SET name='$name' ,gender ='$gender',location='$location' ,district='$district',phone='$phone',email='$email' WHERE  `aid`='" . $_SESSION['uid'] . "'";
                    //  echo $qry;
                    if ($conn->query($qry) == TRUE) {

                        echo "<script>window.location='ArtistProfile.php'</script>";
                    } else {
                        echo "<script>alert(' failed');window.location='ArtistProfile.php'</script>";
                    }
                }
                ?>
            </div>
            <div class="col-md-4">

                <form method="post" enctype="multipart/form-data">
                    <?php
                    $qry = "SELECT * FROM  `artist_registration` a,`artist_portfolio` p WHERE a.`aid`=p.`aid` AND a.`aid`='" . $_SESSION['uid'] . "'";
                    //echo $qry;
                    $result = mysqli_query($conn, $qry);
                    if ($result->num_rows > 0) {
                        $row = mysqli_fetch_array($result)
                    ?>
                        <table width="100%" id="cust_table">
                            <tr>
                                <td>
                                    <img src="<?php echo $row['image'] ?>" width="320px" height="280px" controls>

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
                    <?php }       ?>
                </form>

                <?php
                if (isset($_REQUEST['submit_image'])) {

                    $target_dir = "Artist_Portfolio/";
                    $target_file = $target_dir . basename($_FILES["imgfile"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


                    // Check if file already exists
                    if (file_exists($target_file)) {
                        echo "Sorry, file already exists.";
                        $uploadOk = 0;
                    }

                    // Check file size
                   // if ($_FILES["imgfile"]["size"] > 500000000000000000000) {
                  //      echo "Sorry, your file is too large.";
                   //     $uploadOk = 0;
                  //  }

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

                            $qry = "UPDATE `artist_portfolio` set `image` ='$target_file' WHERE `aid`='$uid'";
                            echo $qry;
                            if ($conn->query($qry) == TRUE) {
                                echo "<script>alert('Successfully Uploaded');window.location='ArtistProfile.php'</script>";
                            } else {
                                //  echo "<script>alert('failed');window.location='ArtistProfile.php'</script>";
                            }
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                }

                ?>

            </div>
            <div class="col-md-4">

                <form method="post" enctype="multipart/form-data">
                    <?php
                    $qry = "SELECT * FROM  `artist_registration` a,`artist_portfolio` p WHERE a.`aid`=p.`aid` AND a.`aid`='" . $_SESSION['uid'] . "'";
                    //echo $qry;
                    $result = mysqli_query($conn, $qry);
                    if ($result->num_rows > 0) {
                        $row = mysqli_fetch_array($result)
                    ?>
                        <table width="100%" id="cust_table">
                            <tr>
                                <td>
                                    <video width="320" height="280" controls>
                                        <source src="<?php echo $row['video'] ?>" type="video/mp4">
                                        <!-- <source src="movie.ogg" type="video/ogg"> -->
                                        Your browser does not support the video tag.
                                    </video>
                                </td>
                            </tr>
                            <tr>
                                <td>Upload Video</td>
                            </tr>
                            <tr>
                                <td><input type="file" name="videofile" id="videofile" placeholder="Image" required></td>
                            </tr>
                            <tr>
                                <td><input type="submit" style="background-color: indigo; color: white;" name="submit_video" value="Upload video"></td>
                            </tr>

                        </table>
                    <?php }       ?>
                </form>

                <?php
                if (isset($_REQUEST['submit_video'])) {

                    $target_dir = "Artist_Portfolio/";

                    $target_file = $target_dir . basename($_FILES["videofile"]["name"]);

                    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

                    echo "##" . $imageFileType;
                    if ($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg") {
                        echo "File Format Not Suppoted";
                    } else {

                        echo "File Format Suppoted";
                        $video_path = $_FILES['videofile']['name'];

                        // mysql_query("insert into video(video_name) values('$video_path')");
                        if (move_uploaded_file($_FILES["videofile"]["tmp_name"], $target_file)) {
                            $qry = "UPDATE `artist_portfolio` set `video` ='$target_file' WHERE `aid`='$uid'";
                            echo $qry;
                            if ($conn->query($qry) == TRUE) {


                                echo "<script>alert('Successfully Uploaded');window.location='ArtistProfile.php'</script>";
                            } else {
                                echo "<script>alert('failed');window.location='ArtistProfile.php'</script>";
                            }
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                }

                ?>
            </div>
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
