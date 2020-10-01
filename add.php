<?php
require('dbconn.php');
require('dbadddata.php');
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
        <link rel="stylesheet" href="style2.css" type="text/css">
        <title>Book Club Book Tracker</title>
    </head>
    <body>
        <nav>
            <a class="btn" href="index.php">Home</a>
        </nav>
        <header>
            <h1>Book Club Book Tracker</h1>
            <h2>Add the next book here</h2>
        </header>
        <form method="post">
            <div class="form1">
                <div>
                    <label for="title_input">Title</label>
                </div>
                <input id="title_input" name="title_input" type="text" required="">
                <div>
                    <label for="author_input">Author</label>
                </div>
                <input id="author_input" name="author_input" type="text" required="">
                <div>
                    <label for="genre_input">Genre</label>
                </div>
                <input id="genre_input" name="genre_input" type="text" required="">
                <div>
                    <label for="picker_select">Picker</label>
                </div>
                <select id="picker_select" name="picker_select">
                    <option value="Alex">Alex</option>
                    <option value="Holly">Holly</option>
                    <option value="Kim">Kim</option>
                    <option value="Sam">Sam</option>
                    <option value="Tiley">Tiley</option>
                </select>
                <div>
                    <label for="pick_order">Pick number</label>
                </div>
                <input id="pick_order" name="pick_order" type="number" required="">
                <div>
                    <label for="cover_input">Cover URL</label>
                </div>

                <input id="cover_input" name="cover_input" type="text">
                <div>
                    <input type="submit" class="add_btn btn" name="add_book" value="Add book">
                </div>
            </div>
        </form>
    </body>
</html>
