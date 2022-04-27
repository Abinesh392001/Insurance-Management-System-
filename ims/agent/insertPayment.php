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
                        <h1 class="page-head-line">Insert Payment
						<button class="btn" align="center"> 
                        <a href="addPayment.php" class="btn">Add Payment</a>
                        </button>
						</h1>
                    
<?php

include'connection.php';

	    $recipt_no      = $_POST["recipt_no"];
		$client_id      = $_POST["client_id"];
		$month          = $_POST["month"];
		$amount         = $_POST["amount"];
		$fine           = $_POST["fine"];
		$due            = $_POST["due"];
		$agent_id       = $_POST["agent_id"];
		
		

	$sql = "INSERT INTO payment "."VALUES('$recipt_no', '$client_id', '$month', '$amount', '$fine', '$due','$agent_id')";
	
	if ($conn->query($sql) === true) {
			echo "New Payment ADDED";
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
