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
                        <h1 class="page-head-line">Insert Nominee
						<button class="btn" align="center"> 
                        <a href="addNominee.php" class="btn">Add Nominee</a>
                        </button>
						</h1>
                    
<?php
	
include'connection.php';
        
		$nominee_id      = $_POST["nominee_id"];
	    $client_id       = $_POST["client_id"];
		$name            = $_POST["name"];
		$sex             = $_POST["sex"];
		$birth_date      = $_POST["birth_date"];
		$relationship    = $_POST["relationship"];
		$priority        = $_POST["priority"];
		$phone           = $_POST["phone"];
		
	
		
	$sql = "INSERT INTO nominee "."VALUES('$nominee_id', '$client_id', '$name', '$sex', '$birth_date', '$relationship', '$priority', '$phone')";
	
	if ($conn->query($sql) === true) {
			echo "New Nominee ADDED";
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
