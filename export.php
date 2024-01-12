<?php
    // Session creation 
    session_start();
    if(!isset($_SESSION['DataSet'])){
        header("location: ./login.php");
    }
// include database connection file
include_once "./database.php";
// Include autoloader
require_once 'dompdf/autoload.inc.php';

// Reference the Dompdf namespace
use Dompdf\Dompdf;

// Instantiate and use the dompdf class
$dompdf = new Dompdf();

//data Retreiving
$output = "";
if(isset($_GET['data'])){
  $data_id = $_GET['data'];
}
else{
    $data_id = 1;
}
$num = $data_id - 1;
$data_num = 20;
$sql = "SELECT * FROM books ORDER BY id LIMIT ".$num.",".$data_num;
$query = mysqli_query($conn,$sql);
if(mysqli_num_rows($query) > 0){
while ($row = mysqli_fetch_assoc($query)) {
$output .="<tr>
    <td>".$row['id']."</td>
    <td>".$row['title']."</td>
    <td>".$row['code']."</td>
    <td>".$row['date_aquired']."</td>
    <td>".$row['location']."</td>
    <td>".$row['author']."</td>
    <td>".$row['publisher']."</td>
    <td>".$row['theme']."</td>
    <td>".$row['status']."</td>
    </tr>
    ";
              }
          }
// Load content from html data
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    *{
        margin: 0px;
        padding: 0px ;
        box-sizing: border-box;
        
    }
    .table{
        text-align: center;
        width: auto;
        height: 100%;
        overflow: hidden;
    }
    
    table{
        border-collapse: collapse;
        font-family: sans-serif;
        width: 100%;
    
    }
    
    
    table thead tr th{
        align-items: left;
        border: 1px solid #081b29;
        background: #081b29;
        color: #fff;
        
    }
    tbody tr td{
        border: 1px solid #081b29;
        padding: 7px 5px 5px 6px;
        font-weight: 400;
       color: #081b29;
       font-weight:bold;
    
    
    }
    .tpage ul{
        list-style: none;
        display: flex;
        column-gap: 20px;
        margin-top: 40px;
        color: white;
        padding: 10px;
    
    }
    .tpage ul li{
        border: 1px solid white;
        padding: 10px;
    }
    
    
    .tpage ul li a{
        
        background-color: transparent;
        text-decoration: none;
        color: white;
        font-family: sans-serif;
        font-weight: bold;
        padding: 0px;
        overflow: hidden;
        height: 2px;
    
    
    }
    
    .tpage ul li:hover{
        background-color: rgb(47, 50, 53);
        color: rgb(26, 21, 21);
        border: none;
    }
    </style>
</head>
<body>
    <div class="table">
        <table>

        <thead>
            <tr>
                <th>Id</th>
                <th>Book Title</th>
                <th>Book Code</th>
                <th>Aquisition Date</th>
                <th>Location</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Theme</th>
                <th>Status</th>
            </tr>
        </thead>



            <!-- table body -->

            <tbody>'.$output.'
        </tbody>
        </table>
    </div>
</body>
</html>
';
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF (1 = download and 0 = preview)
$File_name = "Md_Books".$data_id;
$dompdf->stream($File_name, array("Attachment" => 0));

?>