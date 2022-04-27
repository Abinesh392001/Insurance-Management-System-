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
<?php //include 'header.php'; 

$uniqueId  = time();

?>

<body>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Agent</span>
      </div>
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Agent</h1>
						
                    
                

<form action="insertAgent.php" method="post">
Agent ID:        <input type="text" name="agent_id" value="<?php echo"$uniqueId"; ?>" required><br>
Agent Password:  <input type="text" name="agent_password" required><br>
Name:            <input type="text" name="name" required><br>
Branch:          <input type="text" name="branch" required><br>
Phone:           <input type="text" name="phone" required><br>

<input type="submit">
</form>
				
				

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->


</body>
</html>
