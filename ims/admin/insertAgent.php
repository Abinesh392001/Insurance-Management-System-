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
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Insert Agent
						<button class="btn" align="center"> 
                        <a href="addAgent.php" class="btn">Add Agent</a>
                        </button>
						</h1>
                    
                
				

<?php

	    $agent_id       = $_POST["agent_id"];
		$agent_password = $_POST["agent_password"];
		$name           = $_POST["name"];
		$branch         = $_POST["branch"];
		$phone          = $_POST["phone"];
		
	$sql = "INSERT INTO agent "."VALUES('$agent_id','$agent_password','$name', '$branch', '$phone')";
	
	if ($conn->query($sql) === true) {
			echo "New Agent ADDED";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		

?>


			

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
