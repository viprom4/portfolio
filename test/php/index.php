<?php
    require_once("database123.php");
    global $pdo;

    session_start();

    function genRandomString($length = 8) {
        $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $charsLength = strlen($chars);
        $randomString = "";
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $chars[rand(0, $charsLength - 1)];
        }
        return $randomString;
    }

    $type = @$_POST["form"];
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
                    header("location: http://localhost/test/#");
                } else {
                    echo "Пароли не совпадают.";
                }
            } else {
                echo "Пользователь с такими данными уже сущесмтвует.";
            }  
        break;
        case "log":
            $email = $_POST["email"];
            $password = $_POST["password"];

            $sql = "SELECT * FROM `users` WHERE `user_email` = :pochta AND `user_password` = :password";
            $query = $pdo->prepare($sql);
            $query->execute(array(  
                "pochta" => $email,
                "password" => $password
            ));
            $count = $query->rowCount();
            $result = $query->fetch(PDO::FETCH_OBJ);

            if($count > 0) {
                $sql = "SELECT * FROM tokens WHERE id_user = :user";
                $query = $pdo->prepare($sql);
                $query->execute(array(
                "user" => $result->id_user,
            ));

            $count = $query->rowCount();
            $token = genRandomString(32);
            $_SESSION["token"] = $token;
            $_SESSION["created"] = time();
            $_SESSION["user"] = $result->id_user;
            $session = session_id();

                if ($count > 0) {
                    $sql = "UPDATE tokens SET token=:token, session_id=:session, token_expiration= DATE_ADD(now(), INTERVAL 24 MINUTE) WHERE id_user = :user";
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "user" => $result->id_user,
                        "token" => $token,
                        "session" => $session
                    ));
                } else {
                    $sql = "INSERT INTO tokens (id_user, token, session_id,  token_expiration) VALUES (:user, :token, :session, DATE_ADD(now(), INTERVAL 24 MINUTE))";
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "user" => $result->id_user,
                        "token" => $token,
                        "session" => $session
                    ));
                    $_SESSION["user"] = $result->id_user;
                    
                    echo "Авторизация завершена.";
                    header("location: http://localhost/test/#");
                } 
            } else {
                echo "Неверный логин или пароль.";
            }
        break;
        case "get_token":

        break;
        case "user_by_token":

        break;
        default:
            echo "404";
        break;
    }
?>