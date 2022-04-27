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
     
	  <div class="row">
            <div class="col-md-12">
                    <button class="btn" align="center"> 
					<a href="addAgent.php" class="btn">Add Agent</a>
					</button>
            </div>
        </div>
      <div class="profile-details">
  
        <span class="admin_name">Admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">            
                <!-- /. ROW  -->
                <div class="cus-in">
<?php 

	
	$id = "";
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$agent_id = $_GET["agent_id"];
		
		
	}
	$sql = "SELECT agent_id, agent_password, name, branch, phone from agent where agent_id='$agent_id'";
	$result = $conn->query($sql);
	
	echo "<div>\n";
	
	  echo '<form action="updateAgent.php" method="post">';
	    echo "<label for=\"fname\">AGENT ID</label>";
	    echo "<input type=\"text\" value=\"$agent_id\"name=\"agent_id\"/>"."</br>";
	while($row = $result->fetch_assoc()) {
		echo "<label for=\"fname\">PASSWORD</label>";
	    echo "<input type=\"text\" agent_id=\"fname\" name=\"agent_password\" placeholder=\"password..\" value=\"$row[agent_password]\">";
		echo "<label for=\"fname\">NAME</label>";
	    echo "<input type=\"text\" agent_id=\"fname\" name=\"name\" placeholder=\"Your Name..\" value=\"$row[name]\">";
		echo "<label for=\"fname\">BRANCH</label>";
		echo "<input type=\"text\" agent_id=\"fname\" name=\"branch\" placeholder=\"Your Branch..\" value=\"$row[branch]\">";
		echo "<label for=\"fname\">PHONE</label>";
		echo "<input type=\"text\" agent_id=\"fname\" name=\"phone\" placeholder=\"Your Phone..\" value=\"$row[phone]\">";
		
    }
	
	echo "<input type=\"submit\" value=\"UPDATE\">";
	echo "</form>\n";
	echo "<a href='deleteAgent.php?agent_id=".$agent_id."'>Delete Agent</a>";
echo "</div>\n";
echo "\n";

?>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

</div>
    


	 
<?php include('includes/scripts.php'); ?>
<?php include('includes/footer.php'); ?> 
