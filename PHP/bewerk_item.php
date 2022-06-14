<?php 
    require_once("../includes/connect.php");
    /**
    * @var PDO $connect
    */

    $sql = 
    'UPDATE reis 
    SET naam = :naam, locatie = :locatie, afbeelding = :afbeelding, prijs = :prijs, beschrijving = :beschrijving
    WHERE id = :id
    ';
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":id", $_POST["id"]);
    $stmt->bindParam(":naam", $_POST["naam"]);
    $stmt->bindParam(":locatie", $_POST["locatie"]);
    $stmt->bindParam(":afbeelding", $_POST["afbeelding"]);
    $stmt->bindParam(":prijs", $_POST["prijs"]);
    $stmt->bindParam(":beschrijving", $_POST["beschrijving"]);
    $result = $stmt->execute();
    
    echo "Item Bewerkt";

    exit();
?>