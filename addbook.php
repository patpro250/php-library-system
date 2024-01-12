<?php
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
    <title>Add Book</title>
    
    <link rel="stylesheet" href="maincss.css">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- main responsive -->
    <link rel="stylesheet" href="./responsive.css">

<body>

    <div class="addbooks">

    <form action="#" method="POST" id="form">

<div class="headerform">
    <h1></i></i> Automation Book</h1>
</div>

<div class="input">

    <!-- text in put -->
    <div class="textinput">
        <div class="textinput1">
            <div class="text">
                <input type="text" name="title" id="" placeholder="Book title" required><br />
                </div>

                <div class="text">
               <input type="text" name="code" id="" placeholder="Book code" required><br />
                </div>

                <div class="text">
               <input type="text" name="location" id="" placeholder="Book location" required><br />
                </div>
                <div class="text">
               <input type="text" name="publisher" id="" placeholder="Bublisher" required><br />
                </div>

                <div class="text">
               <input type="text" name="author" id="" placeholder="Author" required><br />
                </div>

        </div>
        <!-- input text2 -->

        <div class="textinput2">
            
            <div class="text">
                <input type="text" name="theme" id="" placeholder="Theme" required><br />
                 </div>

                 <div class="text">
                <input type="text" name="date" id="" placeholder="Date Aquired" required><br />
                 </div>

                 <div class="text">
                <input type="text" name="isbn" id="" placeholder="Isbn-Code" required><br />
                 </div>

                 <div class="text">
                <input type="text" name="from" id="" placeholder="From/Start" required><br />
                 </div>

                 <div class="text">
                <input type="text" name="to" id="" placeholder="To/End" required><br />
                 </div>
        </div>
    </div>

    
    <input type="submit" value="Automater" name="Submit" onclick="AddBook()"><br />


</div>
</form>
    </div>
    <!-- Ajax Script -->
    <script src="./request.js"></script>
</body>
</html>