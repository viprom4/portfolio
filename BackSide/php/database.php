<?php

    global $pdo;

    $host = "localhost";
    $db = "backside";
    $user = "root";
    $password = "";

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);

?>