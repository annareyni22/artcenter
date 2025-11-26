<?php
session_start();
include('DbConnection/dbconnect.php');

$aid=$_SESSION['aid'];
$uid=$_SESSION['uid'];
$date=date("d/m/y");

 $card=$_SESSION["cardno"] ;

 $qryLog = "INSERT INTO payment (uid,aid,bid,account_no,amount,date)values('$uid','$aid',(select max(bid)from bookings),'$card','500','$date')";
 //echo  $qryLog;
 if ( $conn->query($qryLog) == TRUE) {
    echo "<script>alert('Successfully');window.location='UserHome.php'</script>";
} else {
   // echo "<script>alert('payment failed');window.location='UserMakePayment.php'</script>";
}
			

?>