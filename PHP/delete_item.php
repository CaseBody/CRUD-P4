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

<script 
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous">
</script>
<script src="js/delete_item.js"></script>