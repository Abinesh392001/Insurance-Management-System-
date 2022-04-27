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
    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
      <div class="row">
        <div class="col-md-12">
          <h1 class="page-head-line">Policy Informations</h1>
        </div>
      </div>
      <!-- /. ROW  -->
      <div class="cus-in">
        <?php
          $sql = "SELECT policy_id,term,per_month,policy_name,payment_method, age_limit FROM policy";
	        $result = $conn->query($sql);
	        echo "<table class=\"table\">\n";
          echo "  <tr>\n";
          echo "    <th>POLICY ID</th>\n";
          echo "    <th>POLICY NAME</th>\n";
          echo "    <th>TERM</th>\n";
          echo "    <th>PER MONTH</th>\n";
	        echo "    <th>PAYMENT METHOD</th>\n";
          echo "    <th>AGE LIMIT</th>\n";
          echo "  </tr>";
	        if ($result->num_rows > 0) 
          {
            // output data of each row
	          while($row = $result->fetch_assoc()) 
            {
		          echo "<tr>\n";
              echo "    <td>".$row["policy_id"]."</td>\n";
              echo "    <td>".$row["policy_name"]."</td>\n";
		          echo "    <td>".$row["term"]."</td>\n";
		          echo "    <td>".$row["per_month"]."</td>\n";
		          echo "    <td>".$row["payment_method"]."</td>\n";
		          echo "    <td>".$row["age_limit"]."</td>\n";
		        }
	          echo "</table>\n";
          } else
          {
            echo "0 results";
          }
          $conn->close();
        ?>
      </div>
        <!-- /. PAGE WRAPPER  --><!-- /. WRAPPER  -->
    </div>

	
<?php include('../admin/includes/scripts.php'); ?>
<?php include('includes/footer.php'); ?> 
