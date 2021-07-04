<?php
    require_once("database123.php");

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
    if($count > 0) {
        $row = $query->fetch(PDO::FETCH_OBJ);
        $sql="DELETE FROM tokens WHERE id_user = :id";
        $query = $pdo->prepare($sql);
        $query->execute(array(
            "id" => $row->id_user
        ));
        header("location: ../index.php");
    } else {
        return false;
    }
?>