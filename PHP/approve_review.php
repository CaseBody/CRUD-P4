<?php
    require_once "../includes/connect.php";
    /**
    * @var PDO $connect
    */

    if ($_POST['approved'] == '1'){

        $sql ='UPDATE recensies
        SET isbevestigd = 1
        WHERE id = :id';

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_POST["id"]);
        $result = $stmt->execute();
    
        echo $result;
    }
    else
    {
        $sql ='DELETE FROM recensies
        WHERE id = :id';

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_POST["id"]);
        $result = $stmt->execute();
    }
    
    exit();
?>