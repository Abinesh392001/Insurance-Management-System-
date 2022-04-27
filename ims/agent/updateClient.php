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
                <h1 class="page-head-line">Update Client</h1>
                <?php
					$client_id = $client_password = $name = $gender = $birth_date = $marital_status = $phone = $address = $policy_id = $agent_id ="";
					if($_SERVER["REQUEST_METHOD"] == "POST")
					{
						$client_id= $_POST["client_id"];
						$client_password = $_POST["client_password"];
						$name            = $_POST["name"];
						$gender            = $_POST["gender"];
						$birth_date      = $_POST["birth_date"];
						$marital_status  = $_POST["marital_status"];
						$phone           = $_POST["phone"];
						$address         = $_POST["address"];
						$policy_id       = $_POST["policy_id"];
						$agent_id        = $_POST["agent_id"];
						if(isset($_POST['submit']))
						{
							
								$sql = "UPDATE client set client_id='$client_id' ,client_password='$client_password', image='$profileImage' ,name='$name' ,gender='$gender',birth_date='$birth_date',marital_status='$marital_status',phone='$phone',address='$address',policy_id='$policy_id',agent_id='$agent_id' where client_id='$client_id'";
								if ($conn->query($sql) === true) 
								{
									echo "Client record updated successfully";
								} else 
								{
									echo "Error: " . $sql . "<br>" . $conn->error;
								}
							}else 
							{
								$sql = "UPDATE client set client_id='$client_id' ,client_password='$client_password' ,name='$name' ,gender='$gender',birth_date='$birth_date',marital_status='$marital_status',phone='$phone',address='$address',policy_id='$policy_id',agent_id='$agent_id' where client_id='$client_id'";
								if($conn->query($sql) === true) 
								{
									echo "Client record updated successfully";
								}else 
								{
									echo "Error: " . $sql . "<br>" . $conn->error;
								}
							}	
						}
					}
				?>
			</div>   
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
</body>
</html>
