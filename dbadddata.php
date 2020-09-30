<?php
/**Pushes info to the database
 *
 * @param $connection
 *
 *
 */
function addData ($connection) {
    $query = $connection->prepare("INSERT INTO `books` (`pick_order`, `picker`, `title`, `author`, `genre`) VALUES (':pick_order', ':picker', ':title', ':author', ':genre');");
    $query->bindParam(':pick_order',$_POST['pick_order']);
    $query->bindParam(':picker',$_POST['picker_select']);
    $query->bindParam(':title',$_POST['title_input']);
    $query->bindParam(':author',$_POST['author_input']);
    $query->bindParam(':genre',$_POST['genre_input']);
    $query->execute();
}