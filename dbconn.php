<?php
//$db = new PDO ('mysql:host=db; dbname=collection', 'root', 'password');
//$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//$query = $db->prepare("SELECT `pick_order`, `picker`, `title`, `author`, `genre` FROM `books`;");
//$query->execute();

function connect(){
    $pdo = new PDO('mysql:host=db; dbname=collection', 'root', 'password');
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    return $pdo;
}
connect();

function getData() {
    $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $PDO->prepare("SELECT `pick_order`, `picker`, `title`, `author`, `genre` FROM `books`;");
    $query->execute();
}
getData();