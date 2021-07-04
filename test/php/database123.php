<?php

    global $pdo;

    $host = "localhost";
    $db = "reg-log(test)";
    $user = "root";
    $password = "";

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);

?>