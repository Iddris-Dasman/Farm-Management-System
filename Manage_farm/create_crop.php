<!-- Header -->
<?php  include "./header.php" ?>

<?php 
  if(isset($_POST['createcrop'])) 
    {
        $crop = $_POST['crop'];
        $quantity = $_POST['quantity'];
        $dateplanted = $_POST['dateplanted'];
        $dateharvested = $_POST['dateharvested'];
      
        // SQL query to insert crop data into the crops table
        $query= "INSERT INTO crops(crop, quantity, dateplanted, dateharvested) VALUES('{$crop}','{$quantity}','{$dateplanted}', '{$dateharvested}')";
        $add_crop = mysqli_query($conn,$query);
    
        // displaying proper message for the crops to see whether the query executed perfectly or not 
          if (!$add_crop) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('Crop added successfully!')</script>";
              }         
    }


?>



<h1 class="text-center">Add Crop </h1>
  <div class="container">
    <form action="" method="post">
      <div class="row">
      <div class="col-6">
  <select required name="crop" class="form-select">
    <option value="">Select a crop</option>
    
    <?php
      $query = "SHOW COLUMNS FROM crops WHERE Field = 'crop'";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_array($result);
      $enum_str = $row['Type'];
      preg_match('/enum\((.*)\)$/', $enum_str, $matches);
      $enum = explode(',', $matches[1]);
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
         elseif($option_value == "") {
          echo "<option value='$option_value'>  $option_value</option>";
        }
      }
    ?>
  </select>
</div>



      <div class="col-6">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" required name="quantity"  class="form-control">
      </div>

      <div class="col-6">
        <label for="dateplanted" class="form-label">Date Planted</label>
        <input type="date" required name="dateplanted"  class="form-control">
      </div>
    
      <div class="col-6">
        <label for="dateharvested" class="form-label">Date Harvested</label>
        <input type="date" required name="dateharvested"  class="form-control">
      </div>    

      <div class="form-group">
        <input type="submit"  name="createcrop" class="btn btn-secondary mt-2" value="submit">
      </div>
      </div>
    </form> 
    
  </div>

   <!-- a BACK button to go to the crop page -->
  <div class="container text-center mt-5">
    <a href="./crops.php" class="btn btn-secondary mt-5"> Back </a>
  <div>
