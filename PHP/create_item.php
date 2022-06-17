<?php 
    require_once("../includes/connect.php");
    /**
    * @var PDO $connect
    */

    $sql = 'INSERT INTO reis (naam, locatie, afbeelding, prijs, beschrijving)
    VALUES (:naam, :locatie, :afbeelding, :prijs, :beschrijving)';

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":naam", $_POST["naam"]);
    $stmt->bindParam(":locatie", $_POST["locatie"]);
    $stmt->bindParam(":afbeelding", $_POST["afbeelding"]);
    $stmt->bindParam(":prijs", $_POST["prijs"]);
    $stmt->bindParam(":beschrijving", $_POST["beschrijving"]);
    $result = $stmt->execute();

    header('Location: ../admin.php');
    
    exit();
?>