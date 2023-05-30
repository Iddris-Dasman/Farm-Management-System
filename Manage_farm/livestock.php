


<!-- Header -->
<?php include "./header.php"?>

  <div class="container ">
    <h1 class="text-center" > Livestock Management</h1>
    <a href="../home.php" class='btn btn-warning  mb-2'></i> Home</a>

      <div class=" text-end ">
      <a href="create_livestock.php" class="btn btn-secondary mb-2"> Add Livestock </a>
      <div>
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <!-- <th  scope="col">ID</th> -->
            <th  scope="col"> Livestock</th>
            <th  scope="col"> Storage/Location</th>
            <th  scope="col"> Breed</th>
              <th  scope="col">quantity</th>
              <th  scope="col"> Date of Birth</th>
              <th  scope="col"> Death / Date Sold</th>
              <th  scope="col" colspan="3" class="text-center">Action</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM livestock";               // SQL query to fetch all table data
            $view_crops= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_crops)){
              $id = $row['id'];                
              $livestock = $row['livestock'];        
              $storage = $row['storage'];        
              $breed = $row['breed'];        
              $qty = $row['quantity'];         
              $dob = $row['dob'];        
              $dds = $row['dds'];        

              echo "<tr >";
              // echo " <th scope='row' >{$id}</th>";
              echo "<tr >";
              // echo " <th scope='row' >{$id}</th>";
              echo "<tr>";
              echo "<td>{$livestock} ";
              switch ($livestock) {
                case "Goat":
                  echo "🐐";
                  break;
                case "Pig":
                  echo "🐷";
                  break;
                case "Sheep":
                  echo "🐑";
                  break;
                default:
                  break;
              }
              
              echo "<td>{$storage} ";
              switch ($storage) {
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

              echo " <td > {$breed}</td>";
              echo " <td > {$qty}</td>";
              echo " <td >{$dob} </td>";
              echo " <td >{$dds} </td>";


              echo " <td class='text-center' > <a href='edit_livestock.php?edit&livestock_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

