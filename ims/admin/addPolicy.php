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
        <span class="dashboard">Polciy</span>
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
                        <h1 class="page-head-line">Add Policy</h1>
						
                    
                

<form action="insertPolicy.php" method="post">
Policy ID:        <input type="text" name="policy_id" value="<?php echo"$uniqueId"; ?>" required><br>
Policy Name:           <input type="text" name="pname" required><br>
Term:  <input type="text" name="term" required><br>
Total Amount:            <input type="text" name="totalamount" required><br>
Per Month:          <input type="text" name="permonth" required><br>
Payment Method:           <input type="text" name="pmethod" required><br>
Coverage:          <input type="text" name="coverage" required><br>
Age Limit:           <input type="text" name="age" required><br>

<input type="submit">
</form>
				
				

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->


</body>
</html>
