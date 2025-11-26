<?php
    include('DbConnection/dbconnect.php');
	$vid = $_REQUEST['id'];

	$qryLog = "DELETE from venue_registration WHERE   vid='$vid'";

	if ($conn->query($qryLog) == TRUE ){
		echo "<script>alert('Successfully Removed');window.location='AdminViewVenue.php'</script>";
	}else{
		echo "<script>alert('Action Failed');window.location='AdminHome.php'</script>";
	}
?>
