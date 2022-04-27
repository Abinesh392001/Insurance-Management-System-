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
                <h1 class="page-head-line">Client Status</h1>
                <?php
                    $client_id  = $_GET["client_id"];
                    // sql to delete client
                    $sql = "DELETE FROM client WHERE client_id='$client_id'";
                    if ($conn->query($sql) === TRUE) 
                    {
                        echo "Client deleted successfully";  echo '</br>';
                    }else 
                    {
                        echo "Error deleting Client: " . $conn->error;  echo '</br>';
                    }
                    // sql to delete nominees
                    $sql = "DELETE FROM nominee WHERE client_id='$client_id'";
                    if ($conn->query($sql) === TRUE) 
                    {
                        echo "Nominees deleted successfully";  echo '</br>';
                    }else 
                    {
                        echo "Error deleting Nominees: " . $conn->error;  echo '</br>';
                    }
                    // sql to delete payments
                    $sql = "DELETE FROM payment WHERE client_id='$client_id'";
                    if ($conn->query($sql) === TRUE) 
                    {
                        echo "Payments deleted successfully";  echo '</br>';
                    }else 
                    {
                        echo "Error deleting Payments: " . $conn->error;  echo '</br>';
                    }
                    $conn->close();		
		        ?>
            </div>
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
<?php include('../admin/includes/scripts.php'); ?>
<?php include('includes/footer.php'); ?> 
   
    



