<?php

$hn = 'localhost';
$db = 'arizona';
$un = 'django';
$pw = 'django';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

// $query = "select * from athlete";
// $result = $conn->query($query);
// if (!result) die ("Fatal error");
// var_dump($result);

// echo htmlspecialchars($result->fetch_assoc()['fname']);
// echo $result->fetch_assoc()['fname'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
echo $fname;
echo $lname;
// $fname =get_post($conn, 'fname');
// $lname =get_post($conn, 'lname');
$query = "insert into athlete (fname, lname) values ('$fname', '$lname')";
echo $query;
mysqli_query($conn, $query);
// $result = $conn->query($query);
// if (!$result) echo "insert failed";
// var_dump($_POST);
echo mysqli_error($conn);