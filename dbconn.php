<?php
function connect(){
    $pdo = new PDO('mysql:host=db; dbname=collection', 'root', 'password');
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    return $pdo;
}
$connection = connect();

function getData($connection) {
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $connection->prepare("SELECT `pick_order`, `picker`, `title`, `author`, `genre` FROM `books`;");
    $query->execute();
    return $query->fetchAll();
}
$data = getData($connection);