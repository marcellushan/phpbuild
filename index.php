<?php

$greeting = 'Hello World';

try {

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=arizona', 'django', 'django');

} catch (PDOException $e) {
    echo $e->getMessage();

}

$statement = $pdo->prepare("insert into athlete (fname, lname) values ('jack', 'holmes')");
// $query = "insert into athlete (fname, lname) values ('jack', 'holmes')";

$statement->execute();

var_dump($statement->fetchAll(PDO::FETCH_OBJ));

require 'index.view.php';

