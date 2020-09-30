<?php
/**Pulls info from the database
 *
 * @param $connection
 *
 * @return string & integer
 */
function getData($connection, $query) {
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $active_query = $connection->prepare($query);
    $active_query->execute();
    return $active_query->fetchAll();
}
