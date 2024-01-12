 <?php

    // function redirect($url) {
    //     header("Location: $url");
    // }
    
    require_once('./database.php');

        $book_title = trim($_POST['title']);
        $theme = trim($_POST['theme']);
        $code = trim($_POST['code']);
        $from = $_POST['from'];
        $to = $_POST['to'];
        $isbn = trim($_POST['isbn']);
        $author = trim($_POST['author']);
        $publisher = trim($_POST['publisher']);
        $location = trim($_POST['location']);
        $date_aquired = trim($_POST['date']);
        $book_code = "";
    if(empty($book_title) || empty($code) || empty($date_aquired) || empty($location)) {
        exit();
    }

    $sql = "SELECT * FROM books WHERE code = '{$book_code}' ";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0 ) {
        exit();
    } else {
        while($from <= $to) {
            $book_code = $from."/".$to."/".$code;
            $sql = "INSERT INTO books(code, title, isbn, theme, location, publisher, author, date_aquired) VALUES('{$book_code}', '{$book_title}', '{$isbn}', '{$theme}', '{$location}', '{$publisher}', '{$author}', '{$date_aquired}') ";
            $result = mysqli_query($conn, $sql);
            $from = $from + 1;
    }
    //display response
    echo "Ibitabo ".$to." Bya ".$book_title." Byongewe mo";
    }


?>