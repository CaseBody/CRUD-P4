<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css" />
    <title>Document</title>
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
        <div class="container_create">
            <form action="PHP/create_item.php" method="POST" class="form">
                <p class="create_titel">Create Page</p>
                <div class="label_input">
                    <label for="naam">Naam</label>
                    <input 
                        type="text"
                        name="naam"
                        required
                    >
                </div>
                <div class="label_input">
                    <label for="locatie">Locatie</label>
                    <input 
                        type="text"
                        name="locatie"
                        required
                    >
                </div>
                <div class="label_input">
                    <label for="afbeelding">Afbeelding</label>
                    <input 
                        type="text"
                        name="afbeelding"
                        required
                    >
                </div>
                <div class="label_input">
                    <label for="prijs">Prijs</label>
                    <input 
                        type="text"
                        name="prijs"
                        required
                    >
                </div>
                <div class="label_input">
                    <label for="beschrijving">Beschrijving</label>
                    <textarea
                        id="beschrijving"
                        name="beschrijving"
                        rows="5"
                        cols="46"
                        required
                    ></textarea>
                </div>
                <button type="submit" value="submit" class="btn_submit">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>