<?php
    require_once("database123.php");
    require_once("functions.php");
    require_once("security.php");

    global $pdo;

    $type = $_POST["form"];
    switch($type) {
        case "reg":
            $s_email = $_POST["email"];
            $email = delete_all_between('<', '>',$s_email);
            $s_name = $_POST["name"];
            $name = delete_all_between('<', '>',$s_name);
            $s_password = $_POST["password"];
            $password = delete_all_between('<', '>',$s_password);
            $s_confirm = $_POST["confirm"];
            $confirm = delete_all_between('<', '>',$s_confirm);

            $sql = "SELECT * FROM `users` WHERE `user_email` = :pochta";
            $query = $pdo->prepare($sql);
            $query->execute(array(
                "pochta" => $email
            ));
            $count = $query->rowCount();
            if($count == 0) {
                if($password === $confirm) {
                    $sql = "INSERT INTO users (user_email, user_name, user_password) VALUES (:pochta, :name, :password)";
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "pochta" => $email,
                        "name" => $name,
                        "password" => $password
                    ));
                    header ("location: ../index.php");
                } else {
                    echo "Пароли не совпадают.";
                }
            } else {
                echo "Пользователь с такими данными уже сущесмтвует.";
            }  
        break;
        case "log":
            $s_email = $_POST["email"];
            $email = delete_all_between('<', '>',$s_email);
            $s_password = $_POST["password"];
            $password = delete_all_between('<', '>',$s_password);

            $sql = "SELECT * FROM `users` WHERE (`user_email` = :emails) AND `user_password` = :passwords";
            $query = $pdo->prepare($sql);
            $query->execute(array(
                "emails" => $email,
                "passwords" => $password
            ));
            $count = $query->rowCount();
            if($count == 1) {
                    $result = $query->fetch(PDO::FETCH_OBJ);
                    createToken($result->id_user);
                    header ("location:../index.php");
                } else {
                    echo "Неверный логин или пароль";
                }
        break;
        default:
            echo "404";
        break;
    }
?>
