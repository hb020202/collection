<?php
/**Pushes info to the database
 *
 * @param $connection
 *
 * Redirects to a success page
 */
function addData ($connection) {
    if ( isset( $_POST['add_book'] ) ) {
        $query = "INSERT INTO `books` (pick_order, picker, title, author, genre) VALUES (:pick_order, :picker, :title, :author, :genre);";
        $active_query = $connection->prepare($query);
        $active_query->bindParam(":pick_order", $_POST['pick_order'], PDO::PARAM_INT);
        $active_query->bindParam(":picker", $_POST['picker_select'], PDO::PARAM_STR);
        $active_query->bindParam(":title", $_POST['title_input'], PDO::PARAM_STR);
        $active_query->bindParam(":author", $_POST['author_input'], PDO::PARAM_STR);
        $active_query->bindParam(":genre", $_POST['genre_input'], PDO::PARAM_STR);
        $active_query->execute();
        header("Location: http://localhost:1234/collection/success.php");
    }
}
addData($connection);