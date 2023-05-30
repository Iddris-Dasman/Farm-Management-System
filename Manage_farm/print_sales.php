<?php

function fetch_data()
{
    $output = '';
    $conn = mysqli_connect("localhost", "root", "", "fms");
    $sql = "SELECT * FROM sales ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);

        // Initialize grand total to zero
        $grand_total = 0;

    while ($row = mysqli_fetch_array($result)) {
        $output .= '<tr>  
            <td>' . $row["date"] . '</td>  
            <td>' . $row["item"] . '</td>  
            <td>' . '$' . $row["ucost"] . '</td>  
            <td>' . $row["quantity"] . '</td>  
            <td>' . '$' . $row["tcost"] . '</td>  
            
        </tr>';
           // Add the row's total cost to the grand total
           $grand_total += $row["tcost"];
    }

     // Add a row for the grand total
     $output .= '<tr>
     <td colspan="4" align="right"><b>Grand Total:</b></td>
     <td><b>$' . $grand_total . '</b></td>
    </tr>';
    
    return $output;
    
}

if (isset($_POST["print_crop"])) {
    require_once('../lib/tcpdf/tcpdf.php');
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("Sales");
    $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $obj_pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $obj_pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $obj_pdf->SetDefaultMonospacedFont('helvetica');
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
    $obj_pdf->setPrintHeader(false);
    $obj_pdf->setPrintFooter(false);
    $obj_pdf->SetAutoPageBreak(TRUE, 10);
    $obj_pdf->SetFont('helvetica', '', 11);
    $obj_pdf->AddPage();
    $content = '';
    $content .= '  
    
      <h4 align="center">Sales</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                  
                <th width="20%">Date</th>  
            <th width="20%">Item</th>  
                <th width="20%">Unit Cost</th>  
                <th width="20%">Quantity</th>  
                <th width="20%">Total Cost</th>  
                
           </tr> 
           
            
      ';
      
    $content .= fetch_data();
    
    $content .= '</table>';
    $obj_pdf->writeHTML($content);
    $obj_pdf->Output('file.pdf', 'I');
    
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Crops</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>

<body>



    <br />
    <div class="container">
        <h4 align="center">Sales</h4><br />
        <div class="table-responsive">
        <a href="./report.php" class='btn btn-warning ml-10'></i> Report</a>
            <div class="col-md-12" align="right">
                <form method="post">
                    <input type="submit" name="print_crop" class="btn btn-info" value="Print" />
                </form>
            </div>
            <br />
            <br />
            <table class="table table-striped table-bordered table-hove">
                
                <tr>
                    
                    <th width="1%">Date</th>
                    <th width="1%">Item</th>
                    <th width="1%">Unit Cost?</th>
                    <th width="1%">Quantity</th>
                    <th width="1%">Total Cost</th>
                </tr>
                <?php
                echo fetch_data();
                ?>
                
                <?php
// connect to database
$conn = mysqli_connect("localhost", "root", "", "fms");

// query to sum up values in a column
$sql = "SELECT SUM(tcost) as grand_total FROM sales";

// execute query and get result
$result = mysqli_query($conn, $sql);

// check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // get the total sum value from the result
    $row = mysqli_fetch_assoc($result);
    $grand_total = $row['grand_total'];
    
    // display the total sum value in a table
    // echo "<table>";
    // echo "<td><th>Total Sum</th></td>";
    // echo "<td><td>" . $grand_total . "</td></td>";
    // echo "</table>";
} else {
    // if no rows returned, display an error message
    echo "No rows found.";
}

// close database connection
mysqli_close($conn);
?>  
                
            </table>
        </div>
    </div>

  

</body>

</html>