<?php
    require_once "../includes/connect.php";
    /**
    * @var PDO $connect
    */

    $sql ='UPDATE gebruikers
        SET isAdmin = :check
        WHERE id = :id';

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST["id"]);
    $stmt->bindParam(":check", $_POST["check"]);
    $result = $stmt->execute();
    
    echo $result;
    
    exit();
?>