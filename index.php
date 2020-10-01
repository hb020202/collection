<?php
require('dbconn.php');
require('dbgetdata.php');
$select_query = "SELECT `pick_order`, `picker`, `title`, `author`, `genre` FROM `books`;";
$data = getData($connection, $select_query);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Holly Bedford">
        <meta name="description" content="Book tracker">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style1.css" type="text/css">
        <title>Book Club Book Tracker</title>
    </head>
    <body>
        <header>
            <h1>Book Club Book Tracker</h1>
        </header>
        <nav>
            <a class="btn" href="add.php">Add</a>
            <a class="btn" href="#top">Back to top</a>
        </nav>
        <main id="top">
            <?php
            sort($data );
            foreach ($data as $value) {
                echo "<div><p>Book# " .
                    $value['pick_order'] . " - " .
                    $value['picker'] . "'s Pick</p><br><p class='title'>" .
                    $value['title'] . "</p><br>" .
                    $value['author'] . "<br><p class='genre'>" .
                    $value['genre'] . "</p></div>";
            }
            ?>
        </main>
    </body>
</html>