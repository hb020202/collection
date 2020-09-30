<?php
/**Pulls info from the database
 *
 * @param $connection
 *
 * @return mixed
 */
function getData($connection) {
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $connection->prepare("SELECT `pick_order`, `picker`, `title`, `author`, `genre` FROM `books`;");
    $query->execute();
    return $query->fetchAll();
}
$data = getData($connection);