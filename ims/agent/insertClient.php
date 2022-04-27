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
                        <h1 class="page-head-line">Insert Client
						<button class="btn" align="center"> 
                        <a href="addclient.php" class="btn">Add Client</a>
                        </button>
						</h1>
                    
                
				
				
<?php
   

	    $client_id       = $_POST["client_id"];
		$client_password = $_POST["client_password"];
		$name            = $_POST["name"];
		$gender          = $_POST["gender"];
		$birth_date      = $_POST["birth_date"];
		$maritial_status = $_POST["maritial_status"];
		$phone           = $_POST["phone"];
		$address         = $_POST["address"];
		$policy_id       = $_POST["policy_id"];
		$agent_id        = $_POST["agent_id"];
		
		
		
		$nominee_id              = $_POST["nominee_id"];
		$nominee_name            = $_POST["nominee_name"];
		$nominee_sex             = $_POST["nominee_sex"];
		$nominee_birth_date      = $_POST["nominee_birth_date"];
		$nominee_relationship    = $_POST["nominee_relationship"];
		$priority                = $_POST["priority"];
		$nominee_phone           = $_POST["nominee_phone"];
		
		
	$sql = "INSERT INTO client "."VALUES('$client_id', '$client_password', '$name', '$gender', '$birth_date', '$maritial_status', '$phone', '$address', '$policy_id', '$agent_id')";
	
	if ($conn->query($sql) === true) {
			echo "New Client ADDED";  echo '</br>';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;  echo '</br>';
		}
		
		
		
		/// NOMINEE BEING ADDED
   $sql = "INSERT INTO nominee "."VALUES('$nominee_id', '$client_id', '$nominee_name', '$nominee_sex', '$nominee_birth_date', '$nominee_relationship','$priority', '$nominee_phone')";
	
	if ($conn->query($sql) === true) {
			echo "New Nominee ADDED";  echo '</br>';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;  echo '</br>';
		}
		
	
?>


			

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
