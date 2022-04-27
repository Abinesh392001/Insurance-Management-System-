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
<?php 
$uniqueId = time().'_'.mt_rand();

?>
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
                        <h1 class="page-head-line">Add Payment</h1>
						
                    
                

<form action="insertPayment.php" method="post">

Recipt No:     <input type="text" name="recipt_no" value="<?php echo"$uniqueId"; ?>" required><br>
Client Id:     <input type="text" name="client_id" required><br>
Month:         <input type="text" name="month" required><br>
Amount:        <input type="text" name="amount" required><br>
Due:           <input type="text" name="due" required><br>
Fine:          <input type="text" name="fine" required><br>
Agent Id:      <input type="text" name="agent_id" required><br>

<input type="submit">
</form>
				

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->


</body>
</html>
