<?php
$db = new PDO ('mysql:host=db; dbname=Proj2Collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sql = 'SELECT * 
        FROM `books`;';
$q = $db->query($sql);


    while ($row = $q->fetch()):
        echo("Book# " . $row['pick_order'] . " - " . $row['picker'] . "'s Pick<br><br>" . $row['title'] . "<br>" . $row['author'] . "<br>" . $row['genre'] . "<br><br><br>");
    endwhile; //this works, but how, no one knows








//$testQuery = $db->prepare("SELECT * FROM `books`;");
//if (isset($_GET['id'])) {
//$id = $_GET['id'];
//$query1 = $db->prepare("SELECT * FROM `books`;");
//while ($row1 = fetch($query1)) {
//    echo $row1['title'];
//}


//$testQuery =


//$testQuery->execute();
//$result = $testQuery->fetchAll();
//echo "<pre>";
//var_dump ($result);
//echo "</pre>";

//foreach ($list as $key=>$value) {
//    echo $value['name'] . " " . $value['email'] . "<br>";
//}
//$query = "SELECT `pick_order` FROM `books` WHERE `id` = 1";
//$runQuery = $db->prepare($query);
//echo $runQuery;
//
//$pick_order = $db->prepare("SELECT `pick_order` FROM `books` WHERE `id` = 1;");
//$pick_order->execute();
//$picker = $db->prepare("SELECT `picker` FROM `books` WHERE `id` === 1;");
//$title = $db->prepare("SELECT `title` FROM `books` WHERE `id` === 1;");
//$author = $db->prepare("SELECT `author` FROM `books` WHERE `id` === 1;");
//$genre = $db->prepare("SELECT `genre` FROM `books` WHERE `id` === 1;");
//
//echo "Book number ".$pick_order;


//
//if ($_GET['id'] === 1) {
//    echo "Book number $pick_order"
//}





?>




<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <title>Book Club Book Tracker</title>-->
<!--    <meta name="author" content="Holly Bedford">-->
<!--    <meta name="description" content="Book tracker">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" type="text/css">-->
<!--    <link rel="stylesheet" href="style.css" type="text/css">-->
<!--</head>-->
<!---->
<!--<body>-->
<!--<header>-->
<!--    <h1>Book Club Book Tracker</h1>-->
<!--</header>-->
<!--<nav>-->
<!--    <a class="btn">Add</a>-->
<!--    <a>Back to top</a>-->
<!--    <a class="btn">Filter (TBC)</a>-->
<!--</nav>-->
<!--<main>-->
<!--Book box-->
<!---->
<!---->
<!--</main>-->
<!--</body>-->
<!--</html>-->