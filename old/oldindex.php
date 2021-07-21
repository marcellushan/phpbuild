<?php

require 'connection.php';
require 'classes.php';

// $statement = $pdo->prepare("insert into athlete (fname, lname) values ('jack', 'holmes')");
// // $query = "insert into athlete (fname, lname) values ('jack', 'holmes')";

// $statement->execute();

// var_dump($statement->fetchAll(PDO::FETCH_OBJ));

$athlete1 = new MyAthlete("James", "Johnson");
// var_dump($athlete1);
// print $athlete1->name;
echo $athlete1->getAthlete();

// require 'index.view.php';

