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
        <span class="dashboard">Dashboard</span>
      </div>
      
      <div class="profile-details">
      <button class="btn" align="center"> 
					<a href="addAdmin.php" class="btn">Add Admin</a>
					</button>
      </div>
    </nav>
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Agent</div>
            <div class="number">
              <?php
                $sql = "SELECT count(*) AS c FROM agent";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) 
                {
                  echo "Total agents: ";
                  echo $row["c"];
                }
                ?>
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
            <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Client</div>
            <div class="number">
              <?php
                $sql = "SELECT count(*) AS c FROM client";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) 
                {
                  echo "Total clients: ";
                  echo $row["c"];
                }
              ?>
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
            <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Policy</div>
            <div class="number">
              <?php
                $sql = "SELECT count(*) AS c FROM policy";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) 
                {
                  echo "Total Policy: ";
                  echo $row["c"];
                }
              ?>
            </div>
         <div class="indicator">
            <i class='bx bx-up-arrow-alt'></i>
            <span class="text">Up from yesterday</span>
        </div>
      </div>
        <i class='bx bx-cart cart three' ></i>
    </div>
  </div>

<?php include('includes/scripts.php'); ?>
<?php include('includes/footer.php'); ?> 
