<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include "../connection.php"  ?>
<style>
	.row{
		padding:30px;
  		margin-left: 18%;
		
	}
	.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
}
.cus-in{
  margin: 0%;
  width: 80%; 
  margin-left: 18%;
}
</style>

<body>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Client</span>
      </div>
    </nav>
	    <!-- /. NAV SIDE  -->
		<div id="page-wrapper">
            
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-head-line">Clients Information
					<button class="btn" align="center"> 
					<a href="addClient.php" class="btn">Add Client</a>
					</button>
					</h1>
				</div>
			</div>
			
			
			<!-- /. ROW  -->
<?php

$sql = "SELECT client_id,name,birth_date,phone,address,agent_id FROM client";
$result = $conn->query($sql);

echo "<table class=\"table\">\n";
echo "  <tr>\n";
echo "    <th>CLIENT ID</th>\n";
echo "    <th>NAME</th>\n";
echo "    <th>Birth Date</th>\n";
echo "    <th>PHONE</th>\n";
echo "    <th>ADDRESS</th>\n";
echo "    <th>UPDATE</th>\n";
echo "  </tr>";

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
	
	echo "<tr>\n";
	echo "    <td>".$row["client_id"]."</td>\n";
	echo "    <td>".$row["name"]."</td>\n";
	echo "    <td>".$row["birth_date"]."</td>\n";
	echo "    <td>".$row["phone"]."</td>\n";
	echo "    <td>".$row["address"]."</td>\n";

	if($row["agent_id"]== $username ){
		echo "<td>"."<a href='editClient.php?client_id=".$row["client_id"]. "'>Edit</a>"."</td>\n";
	}else {
		echo "<td>"."<a class=\"dis\" href='editClient.php?client_id=".$row["client_id"]. "'>Edit</a>"."</td>\n";
	}

}
}
?>

		
	<!-- /. PAGE WRAPPER  -->


</div>
<!-- /. WRAPPER  -->

	
   
<?php include('../admin/includes/scripts.php'); ?>
<?php include('includes/footer.php'); ?> 