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
            <a href="index.php">Home</a>
            <a>Back to top</a>
        </nav>
        <header>
            <h1>Book Club Book Tracker</h1>
            <h2>Add the next book here</h2>
        </header>
        <form method="post">
            <div class="form1">

                <label for="title_input">Title</label>
                <input id="title_input" name="title_input" type="text">

                <label for="author_input">Author</label>
                <input id="author_input" name="author_input" type="text" required="">

                <label for="genre_input">Genre</label>
                <input id="genre_input" name="genre_input" type="text" required="">

                <label for="picker_select">Picker</label>
                <select id="picker_select" name="picker_select">
                    <option value="Alex">Alex</option>
                    <option value="Holly">Holly</option>
                    <option value="Kim">Kim</option>
                    <option value="Sam">Sam</option>
                    <option value="Tiley">Tiley</option>
                </select>

                <label for="pick_order">Pick number</label>
                <input id="pick_order" name="pick_order" type="number" step="1" required="">
                <label for="cover_input">Cover URL</label>
                <input id="cover_input" name="cover_input" type="text">

                <input type="submit" class="btn" value="Add book">
            </div>
        </form>

    </body>
</html>
