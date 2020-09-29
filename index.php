<?php
$db = new PDO ('mysql:host=db; dbname=Proj2Collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT * FROM `books`;");
$query->execute();

//$list = $query->fetchAll();
//foreach ($list as $key=>$value) {
//    echo "Book# " . $value['pick_order'] . " - " . $value['picker'] . "'s Pick<br><br>" . $value['title'] . "<br>" . $value['author'] . "<br>" . $value['genre'] . "<br><br><br>";
//}







?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Book Club Book Tracker</title>
    <meta name="author" content="Holly Bedford">
    <meta name="description" content="Book tracker">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" type="text/css">
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body>
<header>
    <h1>Book Club Book Tracker</h1>
</header>
<nav>
    <a class="btn">Add</a>
    <a>Back to top</a>
    <a class="btn">Filter (TBC)</a>
</nav>
<main>

    <?php
    $list = $query->fetchAll();
    foreach ($list as $key=>$value) {
        echo "Book# " . $value['pick_order'] . " - " . $value['picker'] . "'s Pick<br><br>" . $value['title'] . "<br>" . $value['author'] . "<br>" . $value['genre'] . "<br><br><br>";
    }
    ?>

</main>
</body>
</html>