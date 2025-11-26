<?php
    include('DbConnection/dbconnect.php');
	$uid = $_REQUEST['id'];

//	$qryLog = "DELETE from a login ,b artist_registration WHERE `type`='artist' or  uid='$uid' or aid=$aid";
	$qryLog = "DELETE from login  WHERE `type`='artist' AND  uid='$uid'";
	
	if ($conn->query($qryLog) == TRUE ){
		echo "<script>alert('Successfully Rejected');window.location='AdminHome.php'</script>";
	}else{
		echo "<script>alert('Action Failed');window.location='AdminHome.php'</script>";
	}
?>