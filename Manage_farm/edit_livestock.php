
<?php include "./header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['livestock_id']))
    {
      $livestockid = $_GET['livestock_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM livestock WHERE id = $livestockid ";
      $view_livestock= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_livestock))
        {
          $id = $row['id'];
          $livestock = $row['livestock'];
          $storage = $row['storage'];
          $breed = $row['breed'];
          $quantity = $row['quantity'];
          $dob = $row['dob'];
          $dds = $row['dds'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['updatelivestock'])) 
    {
      $livestock = $_POST['livestock'];
      $storage = $_POST['storage'];
      $breed = $_POST['breed'];
      $quantity = $_POST['quantity'];
      $dob = $_POST['dob'];
      $dds = $_POST['dds'];
      
      // SQL query to update the data in crops table where the id = $cropid 
      $query = "UPDATE livestock SET livestock = '{$livestock}', storage = '{$storage}', breed = '{$breed}' , quantity = '{$quantity}' , dob = '{$dob}', dds = '{$dds}' WHERE id = $livestockid";
      $update_crop = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('livestock data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Edit Livestocks </h1>
  <div class="container ">
    <form action="" method="post">
      <div class="row">
        
      <div class="col">
        <?php

        // checking if the variable is set or not and if set adding the set data value to variable userid
        if (isset($_GET['kivestock_id'])) {
          $kivestockid = $_GET['kivestock_id'];
        }

        // Fetch the record from the database using the ID
        $query = "SELECT * FROM livestock WHERE id = $id";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        // Get the crop options from the database
        $livestock_query = "SHOW COLUMNS FROM livestock WHERE Field = 'livestock'";
        $livestock_result = mysqli_query($conn, $livestock_query);
        $livestock_row = mysqli_fetch_array($livestock_result);
        $enum_str = $livestock_row['Type'];
        preg_match('/enum\((.*)\)$/', $enum_str, $matches);
        $enum = explode(',', $matches[1]);

        // Display the form with the record values populated
        echo "<form method='post' action='edit_livestock.php?id=$id'>";
        echo "<select name='livestock' required>";
      echo "<option required>Select Crop</option>";
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
        echo "</select>";
        ?>

      </div>


      <div class="col">
        <?php

        // checking if the variable is set or not and if set adding the set data value to variable userid
        if (isset($_GET['kivestock_id'])) {
          $kivestockid = $_GET['kivestock_id'];
        }

        // Fetch the record from the database using the ID
        $query = "SELECT * FROM livestock WHERE id = $id";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        // Get the crop options from the database
        $livestock_query = "SHOW COLUMNS FROM livestock WHERE Field = 'storage'";
        $livestock_result = mysqli_query($conn, $livestock_query);
        $livestock_row = mysqli_fetch_array($livestock_result);
        $enum_str = $livestock_row['Type'];
        preg_match('/enum\((.*)\)$/', $enum_str, $matches);
        $enum = explode(',', $matches[1]);

        // Display the form with the record values populated
        echo "<form method='post' action='edit_livestock.php?id=$id'>";
        echo "<select name='storage' required>";
      echo "<option required>Select room</option>";
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

        <div class="col-6">
          <label for="crop" >Breed</label>
          <input type="text" name="breed" class="form-control" value="<?php echo $breed  ?>">
        </div>

      <div class="col-6">
        <label for="quantity" >Quantity</label>
        <input type="number" name="quantity"  class="form-control" value="<?php echo $quantity  ?>">
      </div>
        
    
      <div class="col-6">
        <label for="dob" >Date of Birth</label>
        <input type="date" name="dob"  class="form-control" value="<?php echo $dob  ?>">
      </div> 

      <div class="col-6">
        <label for="dds" >Death/Date Sold</label>
        <input type="date" name="dds"  class="form-control" value="<?php echo $dds  ?>">
      </div>    

      <div class="form-group">
         <input type="submit"  name="updatelivestock" class="btn btn-secondary mt-2" value="updatelivestock">
      </div>
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="livestock.php" class="btn btn-secondary mt-5"> Back </a>
    <div>
