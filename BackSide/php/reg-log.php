<?php
    require_once("database.php");
    global $pdo;

    $type = $_POST["form"];
    switch($type) {
        case "reg":
            $email = $_POST["email"];
            $name = $_POST["name"];
            $password = $_POST["password"];
            $confirm = $_POST["confirm"];

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
                    echo "Регистрация завершена.";
                    header("location: http://localhost/Backside/#login_form");
                } else {
                    echo "Пароли не совпадают.";
                }
            } else {
                echo "Пользователь с такими данными уже сущесмтвует.";
            }  
        break;
        case "log":
            session_start();
            $email_log = $_POST["email_log"];
            $password_log = $_POST["password_log"];
            
            $sql = "SELECT * FROM `users` WHERE `user_email` = :pochta AND `user_password` = :password";
            $query = $pdo->prepare($sql);
            $query->execute(array("pochta" => $email_log,"password" => $password_log));
            $count = $query->rowCount();

            if($count == 1){
                echo "Авторизация завершена.";
                // $_SESSION['email_log'] = $query->user_email;
                // $_SESSION['name_log'] = $query->user_name;
                // header("location: http://localhost/Backside/index.php?id=Maks");

            } else {
                echo "Почта или пароль не верны.";
            } 
        break;
        default:
            echo "404";
        break;
    }
?>