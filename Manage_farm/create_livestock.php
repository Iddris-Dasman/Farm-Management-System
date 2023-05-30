<!-- Header -->
<?php  include "./header.php" ?>

<?php 
  if(isset($_POST['createlivestock'])) 
    {
        $livestock = $_POST['livestock'];
        $storage = $_POST['storage'];
        $breed = $_POST['breed'];
        $quantity = $_POST['quantity'];
        $dob = $_POST['dob'];
        $dds = $_POST['dds'];
      
        // SQL query to insert livestock data into the livestock table
        $query= "INSERT INTO livestock(livestock, storage, breed, quantity, dob, dds) VALUES('{$livestock}', '{$storage}',  '{$breed}','{$quantity}','{$dob}', '{$dds}')";

        $add_livestock = mysqli_query($conn,$query);
    
        // displaying proper message for the livestock to see whether the query executed perfectly or not 
          if (!$add_livestock) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('livestock added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Livestock Management  </h1>
  <div class="container">
    <form action="" method="post">
      <div class="row">

      <div class="col-6">
  <select required name="livestock" class="form-select">
    <option value="">Select a crop</option>
    
    <?php
      $query = "SHOW COLUMNS FROM livestock WHERE Field = 'livestock'";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_array($result);
      $enum_str = $row['Type'];
      preg_match('/enum\((.*)\)$/', $enum_str, $matches);
      $enum = explode(',', $matches[1]);
      foreach ($enum as $value) {
        $option_value = trim($value, "'");
        if ($option_value == "Goat") {
          echo "<option value='$option_value'>🐐 $option_value</option>";
        } elseif($option_value == "Pig") {
          echo "<option value='$option_value'> 🐷 $option_value</option>";
        }
         elseif($option_value == "Sheep") {
          echo "<option value='$option_value'> 🐑 $option_value</option>";
        }
         elseif($option_value == "") {
          echo "<option value='$option_value'>  $option_value</option>";
        }
      }
    ?>
  </select>
</div>
      <div class="col-6">
    <select required name="storage" class="form-select">
      <option value="">Select a Storage/Location</option>
      <?php
        $query = "SHOW COLUMNS FROM livestock WHERE Field = 'storage'";
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

      <div class="col-6">
        <label for="breed" class="form-label">Breed</label>
        <input type="text" required name="breed"  class="form-control">
      </div>

      <div class="col-6">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" required name="quantity"  class="form-control">
      </div>
    
      <div class="col-6">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" required name="dob"  class="form-control">
      </div> 

      <div class="col-6">
        <label for="dds" class="form-label">Death /Date Sold</label>
        <input type="date" required name="dds"  class="form-control">
      </div>    

      <div class="form-group">
        <input type="submit"  name="createlivestock" class="btn btn-secondary mt-2" value="submit">
      </div>
      </div>

    </form> 
  </div>

   <!-- a BACK button to go to the Livestorck page -->
  <div class="container text-center mt-5">
    <a href="./livestock.php" class="btn btn-secondary mt-5"> Back </a>
  <div>
