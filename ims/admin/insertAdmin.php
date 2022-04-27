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
        <span class="dashboard">Admin</span>
      </div>
      <div class="profile-details">
      <button class="btn" align="center"> 
                        <a href="addAdmin.php" class="btn">Add Admin</a>
                        </button>
						
      </div>
    </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Insert Admin</h1>
					
                    
                
				

<?php

	    $admin_id       = $_POST["admin_id"];
		$admin_password = $_POST["admin_password"];
		$name           = $_POST["name"];
	
	$sql = "INSERT INTO admin "."VALUES('$admin_id','$admin_password','$name')";
	
	if ($conn->query($sql) === true) {
			echo "New Admin ADDED";
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
