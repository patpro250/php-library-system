<?php  
    require_once './database.php';
    // Session creation 
    session_start();
    if(!isset($_SESSION['DataSet'])){
        header("location: ./login.php");
    }
    $sql = "SELECT * FROM books";
    $query = mysqli_query($conn,$sql);
    $total = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="maincss.css">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- main responsive -->
    <link rel="stylesheet" href="./responsive.css">
</head>
<body>
    <div class="nav-admin">
        <div class="logo-admin">Admin Panel</div>
        <i id="bar1" class="fa-solid fa-bars"></i>
        <div class="links-admin" id="navlink1">
            <i id="xmark1" class="fa-solid fa-xmark"></i>
            <ul>
                <li><a href="./allbooks.php">All book</a></li>
                <li><a href="#">Book Issued </a></li>
                <li><a href="./logout.php">Log Out</a></li>
            </ul>
        </div>
    </div>

    <!-- body in admin -->

    <div class="triplecard">
        <div class="card">
            <a href="./addbook.php" target="_blank">Add Book</a>
            <a href="./allbooks.php" target="_blank">All Books</a>
            <a href="#">Issue Book</a>
            <a href="#">Return Book</a>         
        </div>
        <div class="card">
            <div class="innerCard">
                <h3>Total Books.</h3>
                <hr />
                <h1><?php echo $total; ?></h1>
            </div>
            <!-- --------------------- -->
            <div class="innerCard">
                <h3>Unavailabe Books.</h3>
                <hr />
                <h1>000</h1>
            </div>
        </div>
        <div class="card">
            <div class="innerCard">
                <h3>Issued Books.</h3>
                <hr />
                <h1>000</h1>
            </div>
            <!-- --------------------- -->
            <div class="btn">
                <input type="button" value="Export" onclick="ExportPdf()">
               </div>
        </div>
    </div>
    <script src="./mainjs.js"></script>
    <script src="./render.js"></script>
</body>
</html>