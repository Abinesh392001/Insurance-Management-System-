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
        <span class="dashboard">Payment</span>
      </div>
    </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Payment Information  
						<button class="btn" align="center"> 
						<a href="addPayment.php" class="btn">Add Payment</a>
						</button>
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
	
<?php 
	
include'connection.php';
	
	
	$id = "";
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$recipt_no = $_GET["recipt_no"];
	}
		
	
	$sql = "SELECT recipt_no, client_id, month, amount, due, fine, agent_id from payment where recipt_no='$recipt_no'";
	$result = $conn->query($sql);
	
	echo "<div>\n";
	
	  echo '<form action="updatePayment.php" method="post">';
	
	while($row = $result->fetch_assoc()) {
		echo "<label for=\"fname\">RECIPT NO</label>";
	    echo "<input type=\"text\" recipt_no=\"fname\" name=\"recipt_no\" placeholder=\"Your recpit no..\" value=\"$row[recipt_no]\">";
		echo "<label for=\"fname\">CLIENT ID</label>";
	    echo "<input type=\"text\" recipt_no=\"fname\" name=\"client_id\" placeholder=\"Client Id..\" value=\"$row[client_id]\">";
		echo "<label for=\"fname\">MONTH</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"month\" placeholder=\"Month..\" value=\"$row[month]\">";
		echo "<label for=\"fname\">AMOUNT</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"amount\" placeholder=\"Amount..\" value=\"$row[amount]\">";
		echo "<label for=\"fname\">DUE</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"due\" placeholder=\"Your Due..\" value=\"$row[due]\">";
		echo "<label for=\"fname\">FINE</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"fine\" placeholder=\"Fine..\" value=\"$row[fine]\">";
		echo "<label for=\"fname\">AGENT ID</label>";
		echo "<input type=\"text\" recipt_no=\"fname\" name=\"agent_id\" placeholder=\"Agent Id..\" value=\"$row[agent_id]\">";
		
    }
	
	echo "<input type=\"submit\" value=\"UPDATE\">";
	echo "</form>\n";
	echo "<a href='deletePayment.php?recipt_no=".$recipt_no."'>Delete Payment</a>";
	
	
	
echo "</div>\n";
echo "\n";

	
?>


            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   

	
</body>
</html>
