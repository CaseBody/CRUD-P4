<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    </main>
</body>
</html>