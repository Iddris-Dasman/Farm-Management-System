<?php
function fetch_data()
{
    $output = '';
    $conn = mysqli_connect("localhost", "root", "", "fms");
    $sql = "SELECT * FROM crops ORDER BY id ASC";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) {
        $output .= '<tr>  
            <td>' . $row["crop"] . '</td>  
            <td>' . $row["quantity"] . '</td>  
            <td>' . $row["dateplanted"] . '</td>  
            <td>' . $row["dateharvested"] . '</td>  
        </tr>';
    }
    return $output;
}
if (isset($_POST["print_crop"])) {
    require_once('../lib/tcpdf/tcpdf.php');
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("Crops");
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
      <h4 align="center">Crops</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                  
                <th width="25%">Crop</th>  
            <th width="25%">Quanntity</th>  
                <th width="25%">Date Planted</th>  
                <th width="25%">Date harvested</th>  
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
        <h4 align="center">Crops</h4><br />
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
                    
                    <th width="15%">crop</th>
                    <th width="15%">Quantity</th>
                    <th width="15%">Date Planted</th>
                    <th width="15%">Date Harvested</th>
                </tr>
                <?php
                echo fetch_data();
                ?>
            </table>
        </div>
    </div>
</body>

</html>