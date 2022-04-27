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
 
$uniqueId2 = time().'-'.mt_rand();

if(isset($_GET["client_id"])){
$client_id       = $_GET["client_id"];
}else{ $client_id="";
}
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
                        <h1 class="page-head-line">Add Nominee</h1>
						
                    
<form action="insertNominee.php" method="post">

Nominee ID:    <input type="text" name="nominee_id" value="<?php echo"$uniqueId2"; ?>"required><br>
Client ID:     <input type="text" name="client_id"  value="<?php echo"$client_id"; ?>" required><br>
Name:          <input type="text" name="name" required><br>
GENDER:        <input type="text" name="sex" required><br>
Birth Date:    <input type="text" name="birth_date" required><br>
Relationship:  <input type="text" name="relationship" required><br>
Priority:      <input type="text" name="priority" required><br>
Phone:         <input type="text" name="phone" required><br>

<input type="submit">
</form>
				
				

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->


</body>
</html>


