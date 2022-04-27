<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include "../connection.php" 
 #error_reporting(0);  ?>
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
        <span class="dashboard">Agent</span>
      </div>
    </nav>
	<!-- /. NAV SIDE  -->
	<div id="page-wrapper">
        <div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line">Clients Information</h1>
			</div>
		</div>
		<!-- /. ROW  -->
		<div class="cus-in">
<?php //include 'header.php'; 
#session_start();
#include 'connection.php';

#$username = $_SESSION["username"];

$uniqueId  = time();
$uniqueId2 = time().'-'.mt_rand();

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Client</h1>
						
                    
                

<form action="insertClient.php" method="post" enctype="multipart/form-data">
Client ID:       <input type="text" name="client_id" value="<?php echo"$uniqueId"; ?>" required><br>
Client Password: <input type="text" name="client_password" required><br>
Name:            <input type="text" name="name" required><br>
GENDER:          <input type="text" name="gender" required><br>
Birth Date:      <input type="text" name="birth_date" required><br>
Marital Status:  <input type="text" name="maritial_status" required><br>
Phone:           <input type="text" name="phone" required><br>
Address:         <input type="text" name="address" required><br>
Policy ID:       <input type="text" name="policy_id" required><br>
Agent ID:        <input type="text" name="agent_id" value='' required><br>

<h3>Nominee Informations </h3>

Nominee ID:    <input type="text" name="nominee_id" value="<?php echo"$uniqueId2"; ?>" required> <br>
Name:          <input type="text" name="nominee_name" required><br>
GENDER:        <input type="text" name="nominee_sex" required><br>
Birth Date:    <input type="text" name="nominee_birth_date" required><br>

Relationship:  <input type="text" name="nominee_relationship" required><br>
Priority:      <input type="text" name="priority" required><br>
Phone:         <input type="text" name="nominee_phone" required><br>

<input type="submit">

</form>
				
				

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    

</body>
</html>
