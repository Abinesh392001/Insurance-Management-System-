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
                <h1 class="page-head-line">Agent Status
				<button class="btn" align="center"> 
                    <a href="addAgent.php" class="btn">Add Agent</a>
                </button>
				</h1>
                <?php
                    $agent_id  = $_GET["agent_id"];
                    // sql to delete a record
                    $sql = "DELETE FROM agent WHERE agent_id='$agent_id'";
                    if ($conn->query($sql) === TRUE) 
                    {
                        echo "Record deleted successfully";
                    }else
                    {
                        echo "Error deleting record: " . $conn->error;
                    }
                    $conn->close();
                ?>
		    </div>
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
<?php include('includes/scripts.php'); ?>
<?php include('includes/footer.php'); ?> 