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
				<h1 class="page-head-line">Clients Information</h1>
			</div>
		</div>
		<!-- /. ROW  -->
		<div class="cus-in">		
			<?php 
				if($_SERVER["REQUEST_METHOD"] == "GET"){
					$client_id = $_GET["client_id"];	
				}
				$sql = "SELECT * from client where client_id='$client_id'";
				$result = $conn->query($sql);
				echo "<div>\n";
 				while($row = $result->fetch_assoc()) 
				{		
	        ?>
            <form action="updateClient.php" method="post" enctype="multipart/form-data">
		    	
					<?php
						echo "<label for=\"fname\">CLIENT ID</label>";
						echo "<input type=\"text\" client_id=\"fname\" name=\"client_id\" placeholder=\"clients id..\" value=\"$row[client_id]\">";
						echo "<label for=\"fname\">CLIENT PASSWORD</label>";
						echo "<input type=\"text\" client_id=\"fname\" name=\"client_password\" placeholder=\"clients password..\" value=\"$row[client_password]\">";
						echo "<label for=\"fname\">NAME</label>";
						echo "<input type=\"text\" client_id=\"fname\" name=\"name\" placeholder=\"clients name..\" value=\"$row[name]\">";
						echo "<label for=\"fname\">GENDER</label>";
						echo "<input type=\"text\" client_id=\"fname\" name=\"gender\" placeholder=\"clients gender..\" value=\"$row[gender]\">";
						echo "<label for=\"fname\">BIRTH DATE</label>";
						echo "<input type=\"text\" client_id=\"fname\" name=\"birth_date\" placeholder=\"clients Birth Date..\" value=\"$row[birth_date]\">";
						echo "<label for=\"fname\">MARITIAL STATUS</label>";
						echo "<input type=\"text\" client_id=\"fname\" name=\"marital_status\" placeholder=\"clients Maritial Status..\" value=\"$row[marital_status]\">";
						echo "<label for=\"fname\">PHONE</label>";
						echo "<input type=\"text\" client_id=\"fname\" name=\"phone\" placeholder=\"clients Phone..\" value=\"$row[phone]\">";
						echo "<label for=\"fname\">ADDRESS</label>";
						echo "<input type=\"text\" client_id=\"fname\" name=\"address\" placeholder=\"clients Address..\" value=\"$row[address]\">";
						echo "<label for=\"fname\">POLICY ID</label>";
						echo "<input type=\"text\" client_id=\"fname\" name=\"policy_id\" placeholder=\"policy id..\" value=\"$row[policy_id]\">";
						echo "<label for=\"fname\">AGENT ID</label>";
						echo "<input type=\"text\" client_id=\"fname\" name=\"agent_id\" placeholder=\"agent id..\" value=\"$row[agent_id]\">";
					?>
				<input type="submit" value="UPDATE" name="submit">
			</form>
			<?php
				echo "<a href='deleteClient.php?client_id=".$client_id."'>Delete Client</a>";
				echo "</div>\n";
				echo "\n";
				}
			?>
		</div>
	</div>

<?php include('../admin/includes/scripts.php'); ?>
<?php include('includes/footer.php'); ?> 