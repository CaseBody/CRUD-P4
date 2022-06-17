<?php
    require_once("../includes/connect.php");
    /**
    * @var PDO $connect
    */

    $sql = "DELETE FROM reis
        WHERE id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam("id", $_GET['id']);
    $stmt->execute();

    header('Location: ../admin.php');

    exit();
?>