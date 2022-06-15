<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css" />
    <title>Bewerk Item</title>
</head>
<body>
    <?php
        require_once("includes/connect.php");
        /**
         * @var PDO $connect
        */

        //connect to database
        $sql = 'SELECT * FROM reis WHERE id = :id';
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();
        $result = $stmt->fetchAll();
    ?>
    <main>
        <div class="container_bewerk">
            <form action="PHP/bewerk_item.php" method="POST" class="form">
                <p class="bewerk_titel">Update Page</p>
                <div class="label_input">
                    <label for="id">ID</label>
                    <input 
                        type="text"
                        name="id"
                        value="<?php echo $result[0]['id']?>"
                        required
                    >
                </div>
                <div class="label_input">
                    <label for="naam">Naam</label>
                    <input 
                        type="text"
                        name="naam"
                        value="<?php echo $result[0]['naam']?>"
                        required
                    >
                </div>
                <div class="label_input">
                    <label for="locatie">Locatie</label>
                    <input 
                        type="text"
                        name="locatie"
                        value="<?php echo $result[0]['locatie']?>"
                        required
                    >
                </div>
                <div class="label_input">
                    <label for="afbeelding">Afbeelding</label>
                    <input 
                        type="text"
                        name="afbeelding"
                        value="<?php echo $result[0]['afbeelding']?>"
                        required
                    >
                </div>
                <div class="label_input">
                    <label for="prijs">Prijs</label>
                    <input 
                        type="text"
                        name="prijs"
                        value="€ <?php echo $result[0]['prijs']?>"
                        required
                    >
                </div>
                <div class="label_input">
                    <label for="beschrijving">Beschrijving</label>
                    <input
                        id="beschrijving"
                        type="text"
                        name="beschrijving"
                        value="<?php echo $result[0]['beschrijving']?>"
                        required
                    >
                </div>
                <button type="submit" value="submit" class="btn_submit">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>