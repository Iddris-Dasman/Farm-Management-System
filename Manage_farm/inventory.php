


<!-- Header -->
<?php include "./header.php"?>

  <div class="container ">
    <h1 class="text-center" > Inventory Management</h1>
    <a href="../home.php" class='btn btn-warning  mb-2'></i> Home</a>

    <div class=" text-end ">
    <a href="create_inventory.php" class="btn btn-secondary mb-2"> Add Inventory </a>
    <div>
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <!-- <th  scope="col">ID</th> -->
            <th  scope="col"> Tools/Equipment</th>
              <th  scope="col">Type</th>
              <th  scope="col"> Quantity</th>
              <th  scope="col"> Location</th>
              <th  scope="col" colspan="3" class="text-center">Action</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM inventory";               // SQL query to fetch all table data
            $view_crops= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_crops)){
              $id = $row['id'];                
              $tools = $row['tools'];        
              $type = $row['type'];         
              $quantity = $row['quantity'];        
              $location = $row['location'];        

              echo "<tr >";
              // echo " <th scope='row' >{$id}</th>";
              echo "<tr>";
              echo "<td>{$tools} ";
              switch ($tools) {
                case "Tractor":
                  echo "🚜";
                  break;
                case "Pick":
                  echo "⛏️";
                  break;
                case "Cutlas":
                  echo "⚔️";
                  break;
                default:
                  break;
              }
              echo " <td > {$type}</td>";
              echo " <td >{$quantity} </td>";
            
              echo "<td>{$location} ";
              switch ($location) {
                case "Room1":
                  echo "🏠";
                  break;
                case "Room2":
                  echo "🏠";
                  break;
                case "Room3":
                  echo "🏠";
                  break;
                default:
                  break;
              }

              echo " <td class='text-center' > <a href='edit_inventory.php?edit&inventory_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

