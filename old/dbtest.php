<?php

require 'newdb.php';
$mytable = 'athlete';
$db = new DB();
// $test = $db->getRows('athlete');
// var_dump($test);
$users = $db->getRows('athlete', array('where'=>array('fname'=>'fname')));
// var_dump($users);
// foreach($users as $user)
//     echo $user['fname'];
// // var_dump($users);
// var_dump($insert = $db->insert('athlete', array('fname'=>'marc','lname'=>'johnson')));
// echo "marc";
var_dump($users);