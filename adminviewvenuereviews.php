
<?php
include 'AdminHeader.php';
$search = $_POST['search'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "artcenter";?>
<!--about-->
<div id="about" class="about">
	<div class="container">
		<h3 class="title wow fadeInUp animated" data-wow-delay=".5s">Reviews</h3>

	</div>
	<div style="margin: auto; width: 80%;">
		<!-- ....................  -->
<?php
$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from vreview where vid like '%$search%' order by vrid desc";



$result = $conn->query($sql);

if ($result->num_rows > 0){ ?>
	<table width="100%" id="cust_table">
				<tr>
	                   <th>Venue ID</th>
            
					<th>Ratings</th>
					<th>description</th>
				 
					
					
				</tr>
	
<?php				 
while($row = $result->fetch_assoc() ){
echo "
                <tr>
                <td>" . $row['vid'] . "</td>
                    <td>" . $row['rating'] . "</td>
                    <td>" . $row['details'] . "</td>
                    
                   
                </tr>";
}
} else {
			echo "  <center> <h2 style='color: red;'>.... No Data Found ...</h2></center> ";
		}


$conn->close();

?>


