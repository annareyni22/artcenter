<?php
	include('DbConnection/dbconnect.php');
	session_start();
	$bid = $_REQUEST['id'];
	$qry = "UPDATE `venue_bookings` SET `booking_status`='approved' WHERE `vbid`='$bid'";
	 echo "<br>";
	if ($conn->query($qry) == TRUE  ){
		echo "<script>alert('Booking Successfull');window.location='VenueHome.php'</script>";
	}else{
		echo "<script>alert('Action Failed');window.location='VenueHome.php'</script>";
	}
?>
