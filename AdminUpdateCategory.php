       <?php
    include('DbConnection/dbconnect.php');
	$uid = $_REQUEST['id'];

	$qryLog = "DELETE from category WHERE   cid='$uid'";

	if ($conn->query($qryLog) == TRUE ){
		echo "<script>alert('Successfully Removed');window.location='AdminViewCategory.php'</script>";
	}else{
		echo "<script>alert('Action Failed');window.location='AdminUpdateCategory.php'</script>";
	}
?>