<?php
    require_once "../includes/connect.php";
    /**
    * @var PDO $connect
    */

    $ww = password_hash($_POST["wachtwoord"], PASSWORD_BCRYPT);

    $sql ='UPDATE gebruikers
        SET wachtwoord = :wachtwoord
        WHERE id = :id';

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST["id"]);
    $stmt->bindParam(":wachtwoord", $ww);
    $result = $stmt->execute();
    
    echo $result;
    
    exit();
?>