 <?php
    include('DbConnection/dbconnect.php');
	$uid = $_REQUEST['id'];

	$qryLog = "DELETE from login WHERE   uid='$uid'";

	if ($conn->query($qryLog) == TRUE ){
		echo "<script>alert('Successfully Removed');window.location='AdminHome.php'</script>";
	}else{
		echo "<script>alert('Action Failed');window.location='AdminViewArtists.php'</script>";
	}
?>  
  
  
  
  
  
  
  
  
  
  

