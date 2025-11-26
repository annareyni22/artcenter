<?php
	include('DbConnection/dbconnect.php');
	$uid = $_REQUEST['id'];
	$qry = "UPDATE login set status='1' WHERE `type`='artist' AND uid='$uid'";
	if ($conn->query($qry) == TRUE ){
		echo "<script>alert('Successfully Approved');window.location='AdminHome.php'</script>";
	}else{
		echo "<script>alert('Action Failed');window.location='AdminHome.php'</script>";
	}
?>