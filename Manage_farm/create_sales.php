<!-- Header -->
<?php  include "./header.php" ?>

<?php 
  if(isset($_POST['createsales'])) 
    {
        $date = $_POST['date'];
        $item = $_POST['item'];
        $ucost = $_POST['ucost'];
        $quantity = $_POST['quantity'];
        // $tcost = $_POST['tcost'];
        $tcost = $ucost * $quantity;

      
        // SQL query to insert sales data into the sales table
        $query= "INSERT INTO sales(date, item, ucost, quantity, tcost) VALUES('{$date}','{$item}','{$ucost}', '{$quantity}', '{$tcost}')";
        $add_sales = mysqli_query($conn,$query);
    
        // displaying proper message for the sales to see whether the query executed perfectly or not 
          if (!$add_sales) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('sales added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add Sales  </h1>
  <div class="container">
    <form action="" method="post">
      <div class="row">
      <div class="col-6">
        <label for="date" class="form-label">Date</label>
        <input type="date" required name="date"  class="form-control">
      </div>

      <div class="col-6">
        <label for="item" class="form-label">Item</label>
        <input type="text" required name="item"  class="form-control">
      </div>
    
      <div class="col-6">
        <label for="unit_cost" class="form-label">Unit Cost</label>
        <input type="number" required name="ucost"  class="form-control">
      </div>

      <div class="col-6">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" required name="quantity"  class="form-control">
      </div>

      <div class="col-6">
        <label for="total_cost" class="form-label">Total Cost</label>
        <input type="text" required name="tcost" id="tcost" disabled value="<?php echo isset($tcost) ? $tcost : '' ?>" readonly
        class="form-control">
      </div>    

      <div class="form-group">
        <input type="submit"  name="createsales" class="btn btn-secondary mt-2" value="submit">
      </div>
      </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="./sales.php" class="btn btn-secondary mt-5"> Back </a>
  <div>
