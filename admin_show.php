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
    <title>Show Page</title>
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
        <div class="container_show">
            <form action="" method="POST" class="form">
                <p class="show_titel">Show Page</p>
                <div class="label_input">
                    <label for="id">ID</label>
                    <input 
                        type="text"
                        name="id"
                        value="<?php echo $result[0]['id']?>"
                        disabled
                    >
                </div>
                <div class="label_input">
                    <label for="naam">Naam</label>
                    <input 
                        type="text"
                        name="naam"
                        value="<?php echo $result[0]['naam']?>"
                        disabled
                    >
                </div>
                <div class="label_input">
                    <label for="locatie">Locatie</label>
                    <input 
                        type="text"
                        name="locatie"
                        value="<?php echo $result[0]['locatie']?>"
                        disabled
                    >
                </div>
                <div class="label_input">
                    <label for="afbeelding">Afbeelding</label>
                    <input 
                        type="text"
                        name="afbeelding"
                        value="<?php echo $result[0]['afbeelding']?>"
                        disabled
                    >
                </div>
                <div class="label_input">
                    <label for="prijs">Prijs</label>
                    <input 
                        type="text"
                        name="prijs"
                        value="€ <?php echo $result[0]['prijs']?>"
                        disabled
                    >
                </div>
                <div class="label_input">
                    <label for="beschrijving">Beschrijving</label>
                    <textarea
                        id="beschrijving"
                        type="text"
                        name="beschrijving"
                        rows="5"
                        cols="30"
                        disabled
                    ><?php echo $result[0]['beschrijving']?></textarea>
                </div>
            </form>
        </div>
    </main>
</body>
</html>