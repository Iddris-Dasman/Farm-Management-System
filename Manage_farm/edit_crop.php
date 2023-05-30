<?php include "./header.php" ?>

<?php
// checking if the variable is set or not and if set adding the set data value to variable userid
if (isset($_GET['crop_id'])) {
  $cropid = $_GET['crop_id'];
}
// SQL query to select all the data from the table where id = $userid
$query = "SELECT * FROM crops WHERE id = $cropid ";
$view_crops = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($view_crops)) {
  $id = $row['id'];
  $crop = $row['crop'];
  $qty = $row['quantity'];
  $dp = $row['dateplanted'];
  $hd = $row['dateharvested'];
}

//Processing form data when form is submitted
if (isset($_POST['updatecrop'])) {
  $crop = $_POST['crop'];
  $quantity = $_POST['quantity'];
  $dateplanted = $_POST['dateplanted'];
  $dateharvested = $_POST['dateharvested'];

  // SQL query to update the data in crops table where the id = $cropid 
  $query = "UPDATE crops SET crop = '{$crop}', quantity = '{$quantity}' , dateplanted = '{$dateplanted}' , dateharvested = '{$dateharvested}' WHERE id = $cropid";
  $update_crop = mysqli_query($conn, $query);
  echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
}
?>

<h1 class="text-center">Edit Crops </h1>
<div class="container ">
  <form action="" method="post">
    <div class="row">
      <div class="col">
        <?php

        // checking if the variable is set or not and if set adding the set data value to variable userid
        if (isset($_GET['crop_id'])) {
          $cropid = $_GET['crop_id'];
        }

        // Fetch the record from the database using the ID
        $query = "SELECT * FROM crops WHERE id = $id";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        // Get the crop options from the database
        $crop_query = "SHOW COLUMNS FROM crops WHERE Field = 'crop'";
        $crop_result = mysqli_query($conn, $crop_query);
        $crop_row = mysqli_fetch_array($crop_result);
        $enum_str = $crop_row['Type'];
        preg_match('/enum\((.*)\)$/', $enum_str, $matches);
        $enum = explode(',', $matches[1]);

        // Display the form with the record values populated
        echo "<form method='post' action='edit_crop.php?id=$id'>";
        // echo "<label for='crop'>Crop:</label>";
        echo "<select name='crop' required>";
      echo "<option required>Select Crop</option>";
        foreach ($enum as $value) {
          $option_value = trim($value, "'");
          if ($option_value == "Maize") {
            echo "<option value='$option_value'>🌽 $option_value</option>";
          } elseif($option_value == "Plantain") {
            echo "<option value='$option_value'> 🍌 $option_value</option>";
          }
           elseif($option_value == "Carrot") {
            echo "<option value='$option_value'> 🥕 $option_value</option>";
          }
        
        }
        echo "</select>";
        ?>

      </div>
      <div class="col-6">
        <label for="crop">Quantity</label>
        <input type="number" name="quantity" class="form-control" required value="<?php echo $qty  ?>">
      </div>

      <div class="col-6">
        <label for="dateplanted">Date Planted</label>
        <input type="date" name="dateplanted" class="form-control" required value="<?php echo $dp  ?>">
      </div>


      <div class="col-6">
        <label for="pass">Date Harvested</label>
        <input type="date" name="dateharvested" class="form-control" required value="<?php echo $hd  ?>">
      </div>

      <div class="form-group">
        <input type="submit" name="updatecrop" class="btn btn-secondary mt-2" value="updatecrop">
      </div>
    </div>

  </form>
</div>

<!-- a BACK button to go to the home page -->
<div class="container text-center mt-5">
  <a href="crops.php" class="btn btn-secondary mt-5"> Back </a>
  <div>