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
        <span class="dashboard">Agent</span>
      </div>
	 
      <div class="profile-details">
 
        <span class="admin_name">Admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

	<div id="page-wrapper">
            
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-head-line">Agent Information  
					<button class="btn" align="center"> 
					<a href="addAgent.php" class="btn">Add Agent</a>
					</button>
					</h1>
				</div>
			</div>
			
			<!-- /. ROW  -->
		<?php
			$sql = "SELECT agent_id,name,branch,phone FROM agent";
			$result = $conn->query($sql);

			echo "<table class=\"table\">\n";
    		echo "  <tr>\n";
    		echo "    <th>AGENT ID</th>\n";
    		echo "    <th>NAME</th>\n";
    		echo "    <th>BRANCH</th>\n";
    		echo "    <th>PHONE</th>\n";
			echo "    <th>UPDATE</th>\n";
    		echo "  </tr>";
	
			if ($result->num_rows > 0) 
			{   // output data of each row
				while($row = $result->fetch_assoc())
				{
					echo "<tr>\n";
					echo "    <td>".$row["agent_id"]."</td>\n";
					echo "    <td>".$row["name"]."</td>\n";
					echo "    <td>".$row["branch"]."</td>\n";
					echo "    <td>".$row["phone"]."</td>\n";
					if($row["agent_id"]== $username )
					{
						echo "<td>"."<a href='editAgent.php?agent_id=".$row["agent_id"]. "'>Edit</a>"."</td>\n";
					}else 
					{
						echo "<td>"."<a class=\"dis\" href='editAgent.php?agent_id=".$row["agent_id"]. "'>Edit</a>"."</td>\n";
		    		}
				}
			}
		?>    <!-- /. PAGE WRAPPER  -->
		</div>
	</div>
    <!-- /. WRAPPER  -->


<?php include('includes/scripts.php'); ?>
<?php include('includes/footer.php'); ?> 

