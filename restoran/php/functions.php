<?php
    function checkAuth() {
        global $pdo;
        $token = @$_SESSION["token"];
        $session = session_id();
        $sql = "SELECT * FROM tokens WHERE token = :token AND session_id = :session AND token_expiration > now()";
        $query = $pdo->prepare($sql);
        $query->execute(array(
            "token" => $token,
            "session" => $session
        ));
        $count = $query->rowCount();
        if($count) {
            $sql="UPDATE tokens SET token_expiration = DATE_ADD(now(), INTERVAL 172800 MINUTE) WHERE token = :token AND session_id = :session";
            $query = $pdo->prepare($sql);
            $query->execute(array(
                "token" => $token,
                "session" => $session
            ));
            return true;
        }
        else {
            return false;
        }
    }

    function genRandomString($length = 8) {
        $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $charsLength = strlen($chars);
        $randomString = "";
        for($i = 0; $i < $length; $i++) {
            $randomString .= $chars[rand(0, $charsLength - 1)];
        }
        return $randomString;
    }

    function createToken($id_user) {
        global $pdo;
        $token = genRandomString(32);
        $_SESSION["token"] = $token;
        $session = session_id();
        $sql = "INSERT INTO tokens (id_user, token, session_id, token_expiration) VALUES (:user, :token, :session, DATE_ADD(now(), INTERVAL 24 MINUTE))";
        $query = $pdo->prepare($sql);
        $query->execute(array(
            "user" => $id_user,
            "token" => $token,
            "session" => $session
        ));
    } 
?>