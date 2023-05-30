
<?php include "./header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable sales
   if(isset($_GET['purchase_id']))
    {
      $purchaseid = $_GET['purchase_id'];     
    }
      // SQL query to select all the data from the table where id = $purchase
      $query="SELECT * FROM purchases WHERE id = $purchaseid ";
      $view_purchase= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_purchase))
        {
          $id = $row['id'];
          $date = $row['date'];
          $item = $row['item'];
          $ucost = $row['ucost'];
          $quantity = $row['quantity'];
          $tcost = $row['tcost'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['updatepurchase'])) 
    {
      $date = $_POST['date'];
      $item = $_POST['item'];
      $ucost = $_POST['ucost'];
      $quantity = $_POST['quantity'];
      $tcost = $ucost * $quantity;      
      // SQL query to update the data in purchase table where the id = $purchase 
      $query = "UPDATE purchases SET date = '{$date}' , item = '{$item}' , ucost = '{$ucost}', quantity = '{$quantity}', tcost = '{$tcost}' WHERE id = $purchaseid";
      $update_crop = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('purchase data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Edit Purchase </h1>
  <div class="container ">
    <form action="" method="post">
        <div class="row">
      <div class="col-6">
        <label for="date" >Date</label>
        <input type="date" name="date" class="form-control" value="<?php echo $date  ?>">
      </div>

      <div class="col-6">
        <label for="item" >Item</label>
        <input type="text" name="item"  class="form-control" value="<?php echo $item  ?>">
      </div>
        
    
      <div class="col-6">
        <label for="ucost" >Unit Cost</label>
        <input type="number" name="ucost"  class="form-control" value="<?php echo $ucost  ?>">
      </div> 

      <div class="col-6">
        <label for="quantity" >Quantity</label>
        <input type="number" name="quantity"  class="form-control" value="<?php echo $quantity  ?>">
      </div>  

      <div class="col-6">
        <label for="total_cost" class="form-label">Total Cost</label>
        <input type="text" name="tcost" id="tcost" disabled value="<?php echo isset($tcost) ? $tcost : '' ?>" readonly
        class="form-control">
      </div>    

      <div class="form-group">
         <input type="submit"  name="updatepurchase" class="btn btn-secondary mt-2" value="Update purchase">
      </div>
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the purchase page -->
    <div class="container text-center mt-5">
      <a href="purchase.php" class="btn btn-secondary mt-5"> Back </a>
    <div>
