<!-- Header -->
<?php include "./header.php" ?>

<div class="container ">
  <h1 class="text-center"> Crop Management</h1>
  <a href="../home.php" class='btn btn-warning  mb-2'></i> Home</a>

  <div class=" text-end ">
    <a href="create_crop.php" class="btn btn-secondary mb-2"> Add Crop </a>
    <div>

      <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
          <tr>
            <!-- <th  scope="col">ID</th> -->
            <th scope="col"> Crop</th>
            <th scope="col"> Quantity</th>
            <th scope="col">Date Planted</th>
            <th scope="col"> Harvested Date</th>
            <th scope="col" colspan="3" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <?php
            $query = "SELECT * FROM crops";               // SQL query to fetch all table data
            $view_crops = mysqli_query($conn, $query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while ($row = mysqli_fetch_assoc($view_crops)) {
              $id = $row['id'];
              $crop = $row['crop'];
              $quantity = $row['quantity'];
              $DP = $row['dateplanted'];
              $dateharvested = $row['dateharvested'];

              echo "<tr >";
              // echo " <th scope='row' >{$id}</th>";
              echo "<tr>";
              echo "<td>{$crop} ";
              switch ($crop) {
                case "Maize":
                  echo "🌽";
                  break;
                case "Plantain":
                  echo "🍌";
                  break;
                case "Carrot":
                  echo "🥕";
                  break;
                default:
                  break;
              }
              echo " <td > {$quantity}</td>";
              echo " <td > {$DP}</td>";
              echo " <td >{$dateharvested} </td>";


              echo " <td class='text-center' > <a href='edit_crop.php?edit&crop_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";
            }
            ?>
          </tr>
        </tbody>
      </table>
    </div>