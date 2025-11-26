<?php
    include('DbConnection/dbconnect.php');
	$aid = $_REQUEST['id'];

	$qryLog = "DELETE from artist_registration WHERE   aid='$aid'";

	if ($conn->query($qryLog) == TRUE ){
		echo "<script>alert('Successfully Removed');window.location='AdminViewArtists.php'</script>";
	}else{
		echo "<script>alert('Action Failed');window.location='AdminHome.php'</script>";
	}
?>
