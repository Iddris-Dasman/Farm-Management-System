


<!-- Header -->
<?php include "./header.php"?>

  <div class="container ">
    <h1 class="text-center" > Sales Management</h1>
    <a href="../home.php" class='btn btn-warning  mb-2'></i> Home</a>

      <div class=" text-end ">
      <a href="create_sales.php" class="btn btn-secondary mb-2"> Add Sales </a>
      <div>
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <!-- <th  scope="col">ID</th> -->
            <th  scope="col"> Date</th>
              <th  scope="col">Item</th>
              <th  scope="col"> Unit Cost</th>
              <th  scope="col"> Quantity</th>
              <th  scope="col"> Total Cost</th>
              <th  scope="col" colspan="3" class="text-center">Action</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            $query="SELECT * FROM sales";               // SQL query to fetch all table data
            $view_crops= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_crops)){
              $id = $row['id'];                
              $date = $row['date'];        
              $item = $row['item'];         
              $ucost = $row['ucost'];        
              $quantity = $row['quantity'];        
              $tcost = $row['tcost'];        

              echo "<tr >";
              // echo " <th scope='row' >{$id}</th>";
              echo " <td > {$date}</td>";
              echo " <td > {$item}</td>";
              echo " <td >\${$ucost} </td>";
              echo " <td >{$quantity} </td>";
              echo " <td >\${$tcost} </td>";


              echo " <td class='text-center' > <a href='edit_sales.php?edit&sales_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

