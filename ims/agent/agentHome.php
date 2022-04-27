<?php include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include "../connection.php"  ?>

<body>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
    </nav>
    
    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="">Total Client</div>
            <div class="number">
              <?php
                $sql = "SELECT count(*) AS c FROM client";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) 
                {
                  echo "Total client: ";
                  echo $row["c"];
                }
                ?>
            </div>
            <button class="btn" align="center"> 
                        <a href="addClient.php" class="btn">Add Client</a>
                        </button>
          </div>
            <i class='bx bx-cart-alt cart'></i>
        </div>

<?php include('../admin/includes/scripts.php'); ?>
<?php include('includes/footer.php'); ?> 
