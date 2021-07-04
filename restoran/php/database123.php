<?php

    session_start();
    global $pdo;

    $host = "localhost";
    $db = "restoran";
    $user = "root";
    $password = "";

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);

?>