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
        <span class="dashboard">Admin</span>
      </div>
    </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Admin</h1>
						
                    
                

<form action="insertAdmin.php" method="post">
Admin ID:        <input type="text" name="admin_id" value="<?php echo"$uniqueId"; ?>" required><br>
Admin Password:  <input type="text" name="admin_password" required><br>
Name:            <input type="text" name="name" required><br>

<input type="submit">
</form>
				
				

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->


</body>
</html>
