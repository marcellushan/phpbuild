<?php


try {

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=arizona', 'django', 'django');

} catch (PDOException $e) {
    echo $e->getMessage();

}
