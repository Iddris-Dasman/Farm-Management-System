<!-- Header -->
<?php  include "./header.php" ?>

<?php 
  if(isset($_POST['createinventory'])) 
    {
        $tools = $_POST['tools'];
        $type = $_POST['type'];
        $quantity = $_POST['quantity'];
        $location = $_POST['location']; 
      
        // SQL query to insert inventory data into the inventory table
        $query= "INSERT INTO inventory(tools, type, quantity, location) VALUES('{$tools}','{$type}','{$quantity}', '{$location}')";
        $add_inventory = mysqli_query($conn,$query);
    
        // displaying proper message for the inventory to see whether the query executed perfectly or not 
          if (!$add_inventory) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('inventory added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add Inventory  </h1>
  <div class="container">
    <form action="" method="post" class="center">
      <div class="row">
      <div class="col-6">
    <select required name="tools" class="form-select">
      <option value="">Select a Tools/Equipment</option>
      <?php
      $query = "SHOW COLUMNS FROM inventory WHERE Field = 'tools'";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_array($result);
      $enum_str = $row['Type'];
      preg_match('/enum\((.*)\)$/', $enum_str, $matches);
      $enum = explode(',', $matches[1]);
      foreach ($enum as $value) {
        $option_value = trim($value, "'");
        if ($option_value == "Tractor") {
          echo "<option value='$option_value'>🚜 $option_value</option>";
        } elseif($option_value == "Pick") {
          echo "<option value='$option_value'> ⛏️ $option_value</option>";
        }
         elseif($option_value == "Cutlass") {
          echo "<option value='$option_value'> ⚔️ $option_value</option>";
        }
         elseif($option_value == "") {
          echo "<option value='$option_value'>  $option_value</option>";
        }
      }
    ?>
  </select>
  </div>

      <div class="col-6">
        <label for="type" class="form-label">Type</label>
        <input type="text" required name="type"  class="form-control">
      </div>
    
      <div class="col">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" required name="quantity"  class="form-control mb-3">
      </div>

      <div class="col">
    <select required name="location" class="form-select mb-3">
      <option value="">Select a Storage/Location</option>
      <?php
        $query = "SHOW COLUMNS FROM inventory WHERE Field = 'location'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
        $enum_str = $row['Type'];
        preg_match('/enum\((.*)\)$/', $enum_str, $matches);
        $enum = explode(',', $matches[1]);
        foreach ($enum as $value) {
          $option_value = trim($value, "'");
          if ($option_value == "Room1") {
            echo "<option value='$option_value'>🏠 $option_value</option>";
          } elseif($option_value == "Room2") {
            echo "<option value='$option_value'> 🏠 $option_value</option>";
          }
           elseif($option_value == "Room3") {
            echo "<option value='$option_value'> 🏠 $option_value</option>";
          }
           elseif($option_value == "") {
            echo "<option value='$option_value'>  $option_value</option>";
          }
        }
      ?>
    </select>
  </div>    

      <div class="form-group">
        <input type="submit"  name="createinventory" class="btn btn-secondary mt-2" value="submit">
      </div>
      </div>
    </form> 
    
  </div>

   <!-- a BACK button to go to the inventory page -->
  <div class="container text-center mt-5">
    <a href="./inventory.php" class="btn btn-secondary mt-5"> Back </a>
  <div>
