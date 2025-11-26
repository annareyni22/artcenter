<?php
	include('DbConnection/dbconnect.php');
	session_start();
	$bid = $_REQUEST['id'];
	$qry = "UPDATE `bookings` SET `booking_status`='rejected' WHERE `bid`='$bid'";
	// echo $qry."<br>";
	if ($conn->query($qry) == TRUE  ){
		echo "<script>alert('Booking rejected');window.location='ArtistHome.php'</script>";
	}else{
		echo "<script>alert('Action Failed');window.location='ArtistHome.php'</script>";
	}
?>