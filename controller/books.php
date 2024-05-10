<?php
$config = require("config.php");
$heading = "Books";

$books = [];

$host = $config['database']['host'];
$port = $config['database']['port'];
$dbname = $config['database']['dbname'];
$user = $config['database']['user'];
$password = $config['database']['password'];

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";

try {
    $connexion = new PDO($dsn, $user, $password);

    $sql = "SELECT * FROM books";

    $statement = $connexion->query($sql);
    $books = $statement->fetchAll(PDO::FETCH_ASSOC);

}catch (PDOException $e){
    dd($e->getMessage());
}

require "views/books.view.php";




