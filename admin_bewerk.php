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
        $sql = 'SELECT * FROM reis';
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
    ?>
    <main>
        <div class="container_bewerk">
            <form action="PHP/bewerk_item.php" method="POST" class="form">
                <p class="bewerk_titel">Update Page</p>
                <div class="label_input">
                    <label for="">ID</label>
                    <input type="text">
                </div>
                <div class="label_input">
                    <label for="">Naam</label>
                    <input type="text">
                </div>
                <div class="label_input">
                    <label for="">Locatie</label>
                    <input type="text">
                </div>
                <div class="label_input">
                    <label for="">Afbeelding</label>
                    <input type="text">
                </div>
                <div class="label_input">
                    <label for="">Prijs</label>
                    <input type="text">
                </div>
                <div class="label_input">
                    <label for="">Beschrijving</label>
                    <input type="text">
                </div>
                <button type="submit" value="submit" class="btn_submit  ">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>