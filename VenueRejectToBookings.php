<?php
	include('DbConnection/dbconnect.php');
	session_start();
	$bid = $_REQUEST['id'];
$qry = "UPDATE `venue_bookings` SET `booking_status`='Rejected' WHERE `vbid`='$bid'";
	// echo $qry."<br>";
	if ($conn->query($qry) == TRUE  ){
		echo "<script>alert('Booking rejected');window.location='VenueHome.php'</script>";
	}else{
		echo "<script>alert('Action Failed');window.location='VenueHome.php'</script>";
	}
?>
