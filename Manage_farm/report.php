
<?php  include "./header.php" ?>
<?php  include "manage_header.php" ?>



<?php

// Query to get the total number of records in each table
$crops_count = mysqli_query($conn, "SELECT COUNT(*) AS count FROM crops");
$inventory_count = mysqli_query($conn, "SELECT COUNT(*) AS count FROM inventory");
$livestock_count = mysqli_query($conn, "SELECT COUNT(*) AS count FROM livestock");
$sales_count = mysqli_query($conn, "SELECT COUNT(*) AS count FROM purchases");
$purchases_count = mysqli_query($conn, "SELECT COUNT(*) AS count FROM purchases");

// Fetch the count from each query
$crops_total = mysqli_fetch_assoc($crops_count)['count'];
$inventory_total = mysqli_fetch_assoc($inventory_count)['count'];
$livestock_total = mysqli_fetch_assoc($livestock_count)['count'];
$sales_total = mysqli_fetch_assoc($sales_count)['count'];
$purchases_total = mysqli_fetch_assoc($purchases_count)['count'];


// Close the connection
mysqli_close($conn);
?>

<style>
  .card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  margin-top: 7rem;
}

body{
  background-image: url(../images/rportbg.svg)
}


.card {
  background-color: #f9f9f9;
  border-radius: 10px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  margin: 10px;
  padding: 20px;
  text-align: center;
  width: 300px;
  animation-name: fade-in;
  animation-duration: 1s;
}

@media screen and (max-width: 768px) {
  .card {
    width: 100%;
  }
}

.count {
  font-size: 2em;
  font-weight: bold;
  margin-top: 10px;
}

@keyframes fade-in {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}


span{
    font-size: 1.3rem;
}

.heading{
  text-align: center;
  justify-content: center;
  font-size: 4rem;
  color: honeydew;
  margin-top: 5rem;
}

a{
  color: red;
  text-decoration: none;
}



  
</style>

<h1 class="heading">Report</h1>
<div class="card-container">
  <div class="card">
    <h3><a href="crops.php">Crops</a></h3>
    <p class="count"><span>Total:</span><?php echo $crops_total ?></p>
    <a href="print_crops.php" class="btn btn-secondary">View</a>

  </div>
  <div class="card">
  <a href="inventory.php"></a>
    <h3><a href="inventory.php">Inventory</a></h3>
    <p class="count"><span>Total:</span><?php echo $inventory_total ?></p>
        <a href="print_inventory.php" class="btn btn-secondary">View</a>
  </div>
  <div class="card">
    <h3><a href="livestock.php">Livestock</a></h3>
    <p class="count"><span>Total:</span><?php echo $livestock_total ?></p>
    
     <a href="print_livestock.php" class="btn btn-secondary">View</a>

  </div>

  <div class="card">
  <h3><a href="sales.php">Sales</a></h3>
      <p class="count"><span>Total:</span><?php echo $sales_total ?></p>
      
        <a href="print_sales.php" class="btn btn-secondary">View</a>

  </div>
  <div class="card">
  <h3><a href="purchase.php">Purchases</a></h3>
      <p class="count"><span>Total:</span><?php echo $purchases_total ?></p>
      
        <a href="print_purchase.php" class="btn btn-secondary">View</a>

  </div>
</div>

<?php include("./manage_footer.php") ?>

