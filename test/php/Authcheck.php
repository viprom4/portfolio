<?php
    function AUTHCHECK() {
        global $pdo;
        session_start();

        $token = @$_SESSION["token"];
        $session = session_id();

        $sql = "SELECT * FROM tokens WHERE token = :token AND session_id = :session AND token_expiration > now()";
        $query = $pdo->prepare($sql);
        $query->execute(array(
            "token" => $token;
            "session" => $session;
        ));
    }

?>