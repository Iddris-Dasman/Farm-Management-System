<?php include "./header.php" ?>

<?php
// checking if the variable is set or not and if set adding the set data value to variable inventoryid
if (isset($_GET['inventory_id'])) {
  $inventoryid = $_GET['inventory_id'];
}
// SQL query to select all the data from the table where id = $inventoryid
$query = "SELECT * FROM inventory WHERE id = $inventoryid ";
$view_inventory = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($view_inventory)) {
  $id = $row['id'];
  $tools = $row['tools'];
  $type = $row['type'];
  $quantity = $row['quantity'];
  $location = $row['location'];
}

//Processing form data when form is submitted
if (isset($_POST['updateinventory'])) {
  $tools = $_POST['tools'];
  $type = $_POST['type'];
  $quantity = $_POST['quantity'];
  $location = $_POST['location'];

  // SQL query to update the data in inventory table where the id = $inventory 
  $query = "UPDATE inventory SET tools = '{$tools}' , type = '{$type}' , quantity = '{$quantity}', location = '{$location}' WHERE id = $inventoryid";
  $update_inventory = mysqli_query($conn, $query);
  echo "<script type='text/javascript'>alert('livestock data updated successfully!')</script>";
}
?>

<h1 class="text-center">Edit Inventory </h1>
<div class="container ">
  <form action="" method="post">
    <div class="row">
     <div class="col">

      <?php

      // checking if the variable is set or not and if set adding the set data value to variable userid
      if (isset($_GET['inventory_id'])) {
        $inventoryid = $_GET['inventory_id'];
      }

      // Fetch the record from the database using the ID
      $query = "SELECT * FROM inventory WHERE id = $id";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_assoc($result);

      // Get the inventory options from the database
      $inventory_query = "SHOW COLUMNS FROM inventory WHERE Field = 'tools'";
      $inventory_result = mysqli_query($conn, $inventory_query);
      $inventory_row = mysqli_fetch_array($inventory_result);
      $enum_str = $inventory_row['Type'];
      preg_match('/enum\((.*)\)$/', $enum_str, $matches);
      $enum = explode(',', $matches[1]);

      // Display the form with the record values populated
      echo "<form method='post' action='edit_inventory.php?id=$id'>";
      echo "<label for=''></label>";
      echo "<select name='tools' class='mt-4' required>";
      echo "<option>Select iventory</option>";
      foreach ($enum as $value) {
        $option_value = trim($value, "'");
        if ($row['tools'] == $option_value) {
          echo "<option value='$option_value' selected>$option_value</option>";
        } else {
          echo "<option value='$option_value'>$option_value</option>";
        }
      }
      echo "</select>";
      ?>

    </div>

      <div class="col-6">
        <label for="type">Type</label>
        <input type="text" name="type" class="form-control" value="<?php echo $type  ?>">
      </div>


      <div class="col-6">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" class="form-control" value="<?php echo $quantity  ?>">
      </div>

      <div class="col mt-10">

      <?php

      // checking if the variable is set or not and if set adding the set data value to variable userid
      if (isset($_GET['inventory_id'])) {
        $inventoryid = $_GET['inventory_id'];
      }

      // Fetch the record from the database using the ID
      $query = "SELECT * FROM inventory WHERE id = $id";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_assoc($result);

      // Get the inventory options from the database
      $inventory_query = "SHOW COLUMNS FROM inventory WHERE Field = 'location'";
      $inventory_result = mysqli_query($conn, $inventory_query);
      $inventory_row = mysqli_fetch_array($inventory_result);
      $enum_str = $inventory_row['Type'];
      preg_match('/enum\((.*)\)$/', $enum_str, $matches);
      $enum = explode(',', $matches[1]);

      // Display the form with the record values populated
      echo "<form method='post' action='edit_inventory.php?id=$id'>";
      echo "<label for=''></label>";
      echo "<select name='location' class='mt-4' required>";
      echo "<option required>Select Storage/location</option>";
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
      echo "</select>";
      ?>

    </div>
      <div class="form-group">
        <input type="submit" name="updateinventory" class="btn btn-secondary mt-2" value="updateinventory">
      </div>
    </div>
  </form>
</div>

<!-- a BACK button to go to the home page -->
<div class="container text-center mt-5">
  <a href="inventory.php" class="btn btn-secondary mt-5"> Back </a>
  <div>