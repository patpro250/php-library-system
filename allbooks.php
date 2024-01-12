<?php 
require_once('./database.php');
    // Session creation 
    session_start();
    if(!isset($_SESSION['DataSet'])){
        header("location: ./login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allbooks</title>

    <link rel="stylesheet" href="maincss.css">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- main responsive -->
    <link rel="stylesheet" href="./responsive.css">
</head>
<body>
    
<div class="table">
            <table>
                
            <thead>
                <tr>
                    <th>id</th>
                    <th>book  title</th>
                    <th>book code</th>
                    <th>date of aquisition</th>
                    <th>location</th>
                    <th>Isbn</th>
                    <th>author</th>
                    <th>publisher</th>
                    <th>theme</th>
                    <th>status</th>
                </tr>
            </thead>

                
    
                <!-- table body -->
    
                <tbody>
                <?php
                //data Retreiving
                //Pagnition sequence
                $page;
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                }
                else {
                    $page = 0;
                }
                $start = 25*$page;
                $end = 25;
                $sql = "SELECT * FROM books ORDER BY id LIMIT ".$start.", ".$end;
                $query = mysqli_query($conn,$sql);
                if(mysqli_num_rows($query) > 0){
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo "<tr>
                                <td>".$row['id']."</td>
                                <td>".$row['title']."</td>
                                <td>".$row['code']."</td>
                                <td>".$row['date_aquired']."</td>
                                <td>".$row['location']."</td>
                                <td>".$row['isbn']."</td>
                                <td>".$row['author']."</td>
                                <td>".$row['publisher']."</td>
                                <td>".$row['theme']."</td>
                                <td>".$row['status']."</td>
                             </tr>
                                ";
                    }
                }else{
                    echo "<tr><h3>No Such Books Found!</h3></tr>";
                }

                ?>
            </tbody>
            </table>

            <div class="tpage">
               <ul>
                <?php 
                $back = $page;
                // $sql0 = "SELECT * FROM books";
                // $query = mysqli_query($conn,$sql0);
                // $total_result = mysqli_num_rows($query);
                // $number_Of_page = ceil($total_result/25);
                // if ($page > $number_Of_page) {
                //     $page = 0;
                // }
                // if($page < 0){
                //     $page = 1;
                // }
                ?>
                <li><a href="./allbooks.php?page=<?php echo --$back; ?>"><<</a></li>
                <li><a href="./allbooks.php?page=0">1</a></li>
                <li><a href="./allbooks.php?page=1">2</a></li>
                <li><a href="./allbooks.php?page=2">3</a></li>
                <li><a href="./allbooks.php?page=3">4</a></li>
                <li><a href="./allbooks.php?page=4">5</a></li>
                <li><a href="./allbooks.php?page=5">6</a></li>
                <li><a href="./allbooks.php?page=<?php echo ++$page; ?>">>></a></li>
               </ul>

            </div>
        </div>

</body>
</html>