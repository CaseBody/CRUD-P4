<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css" />
    <!-- icon page -->
    <link rel="icon" type="image/x-icon" href="Assets/afbeeldingen/logo.png" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet" />
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
                        class="inp_id"
                        type="text"
                        name="id"
                        value="<?php echo $result[0]['id']?>"
                        required
                    >
                </div>
                <div class="label_input">
                    <label for="naam">Naam</label>
                    <input 
                        class="inp_naam"
                        type="text"
                        name="naam"
                        value="<?php echo $result[0]['naam']?>"
                        required
                    >
                </div>
                <div class="label_input">
                    <label for="locatie">Locatie</label>
                    <input 
                        class="inp_locatie"
                        type="text"
                        name="locatie"
                        value="<?php echo $result[0]['locatie']?>"
                        required
                    >
                </div>
                <div class="label_input">
                    <label for="afbeelding">Afbeelding</label>
                    <input 
                        class="inp_afbeelding"
                        type="text"
                        name="afbeelding"
                        value="<?php echo $result[0]['afbeelding']?>"
                        required
                    >
                </div>
                <div class="label_input">
                    <label for="prijs">Prijs</label>
                    <input 
                        class="inp_prijs"
                        type="text"
                        name="prijs"
                        value="<?php echo $result[0]['prijs']?>"
                        required
                    >
                </div>
                <div class="label_input">
                    <label for="beschrijving">Beschrijving</label>
                    <textarea
                        class="inp_beschrijving"
                        id="beschrijving"
                        name="beschrijving"
                        rows="5"
                        cols="30"
                        required
                    ><?php echo $result[0]['beschrijving']?></textarea>
                </div>
                <button type="submit" value="submit" class="btn_submit">Add</button>
            </form>
        </div>
    </main>
</body>
</html>