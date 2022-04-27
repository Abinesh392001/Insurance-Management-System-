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
        <span class="dashboard">Policy</span>
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
                        <h1 class="page-head-line">Insert Policy
						<button class="btn" align="center"> 
                        <a href="addPolicy.php" class="btn">Add Policy</a>
                        </button>
						</h1>
                    
                
				

<?php

	    $policy_id       = $_POST["policy_id"];
		$term = $_POST["term"];
		$totalamount           = $_POST["totalamount"];
		$permonth         = $_POST["permonth"];
		$pmethod          = $_POST["pmethod"];
        $coverage          = $_POST["coverage"];
        $age          = $_POST["age"];
		
	$sql = "INSERT INTO policy "."VALUES('$policy_id','$term','$totalamount', '$permonth', '$pmethod','$coverage','$age')";
	
	if ($conn->query($sql) === true) {
			echo "New Policy ADDED";
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
